<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cuisine;
use App\Dish;
use App\Feedback;
use DB;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function showcuisine()
    {
        $cuisins = Cuisine::get();
        $feedbacks = DB::table('feedbacks')->join('users','users.id','=','feedbacks.u_id')->get();
        return view('index',compact(['cuisins',$cuisins,'feedbacks',$feedbacks]));
    }

    public function userdetailedit(Request $request, $id)
    {
        $users = User::find($id);
        return view('profile')->with('users',$users);
    }
    public function updateprofile(Request $request,$id)
    {
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->address = $request->input('address');
        $users->gender = $request->input('gender');
        $users->phn_no = $request->input('phn_no');

        if($request->hasfile('u_img'))
        {
            $fileName = date('Ymd_His').'.'.$request->u_img->extension();
            $request->u_img->move(public_path('/img/uploaded/'), $fileName);
            $users->u_img = $fileName;
        }

        $users->save();
        return redirect('index')->with('status','Your data Updated Successfully..!');
    }
}
