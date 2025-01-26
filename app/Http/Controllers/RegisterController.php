<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => ['required','string'],
            'u_img' => ['required'],
            'address' => ['required','string'],
            'gender' => ['required','string'],
            'phn_no' => ['required','max:10','min:10','string'],
            'email' => ['required','string','email','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'password' => ['min:8','required','Confirmed']
        ]); 
        $fileName = date('Ymd_His').'.'.$request->u_img->extension();
        $request->u_img->move(public_path('/img/uploaded/'), $fileName);
        
        $user = new User();
        $user->name = $request->name;
        $user->u_img = $fileName;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->phn_no = $request->phn_no;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->to('/login');
        auth()->login($user);
    }	    
}
