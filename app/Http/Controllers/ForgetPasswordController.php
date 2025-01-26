<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
use Session;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgetPasswordController extends Controller
{
	public function forget()
    {
        return view('forgetpassword');
    }
    public function password(Request $request)
    {
        $user = User::whereEmail($request->email)->pluck('email');
        // dd($user);

        if(!$user)
        {
            return redirect()->back()->with('message', 'Email Not Exist');
        }
        
    }
    public function sendEmail($email,$otp) 
    {
        Mail::send('forgot', ['email' => $email, 'otp' => $otp], function($message) use ($email,$otp) {
                $message->from('sauravmistri1234@gmail.com');
                $message->to($email);
                $message->subject('Reset Your Password.');
            });

    }
    public function sendOtp(Request $request)
    {
        $email=$request->email;
        // print_r($email);die;
        $user = User::where('email',$email)->exists();
        // dd($user);
        if(!$user)
        {
            return redirect()->back()->with('message', 'Email Not Exist');
        }
        
        $otp=mt_rand(100000, 999999);
        
        $this->sendEmail($email,$otp);
        $request->session()->put('otp',$otp);
        $request->session()->put('email',$email);
        if($request->session()->has('otp') &&  $request->session()->has('email') )
        {
            return redirect('confirmotp')->with('message', 'OTP Sent Successfully!');
        }
        else
        {
            return redirect('login')->with('message', 'Page Has been Expired!');
        }
    }
    public function checkotp(Request $request)
    {
        if($request->session()->has('otp') &&  $request->session()->has('email') )
        {
            $emailotp=$request->session()->get('otp');
            $cmotp=$request->cmotp;
            if($cmotp == $emailotp)
            {
                return redirect('newpassword');
            }
            else
            {
                return redirect()->back()->with('message', 'OTP Is Invalid!');
            }
        }
        else{
            return redirect('/login');
        }
    }
    public function confirmotp(Request $request)
    {
        if($request->session()->has('otp') &&  $request->session()->has('email') )
        {
            return view('confirmotp');
        }
        else
        {
            return redirect('login');
        }
    }
    public function savepassword(Request $request)
    {
        // dd($request);
        if($request->session()->has('otp') &&  $request->session()->has('email') )
        {
            $email = $request->session()->get('email');
            $new_password = $request->password;
            // dd($request);
            $request->validate([
                'password' => 'required|min:6',
                'password_confirmation' => 'required_with:password|same:password|min:6'
            ],[
                'password.required' => 'Please Enter New Password',
                'password_confirmation.required' => 'Please Enter Confirm Password',
                'password_confirmation.same' => 'Do not match Confirm Password',
                'password.min' => 'The New Password must be at least 6 characters.',
                'password_confirmation.min' => 'The Confirm Password must be at least 6 characters.',
             ]);
             $user_login = User::select('*')->where('email',$email)->first();
            //  dd($user_login);
             $user_login->password = $request->password;
             $user_login->save();
             Session::forget('otp');
             Session::forget('email');
             return redirect('login')->with('message', 'Hello, Your Password Has been Changed Successfully...');
        }
        else
        {
            return redirect('/login');
        }
    } 
    public function newpassword(Request $request)
    {
        if($request->session()->has('otp') &&  $request->session()->has('email') )
        {
            return view('newpassword');
        }
        else
        {
            return redirect('/login');
        }
    }

}
