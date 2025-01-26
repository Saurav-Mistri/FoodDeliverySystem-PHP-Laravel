<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function registered()
    {
        $users = DB::table('users')->paginate(5);
        return view('admin.registered')->with('users',$users);
    }
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('users')->paginate(5);
      return view('admin.registered', compact('users'))->render();
     }
    }
    
    public function registerupdate(Request $request,$id)
    {
        $data = $request->all();
        User::where(['id' => $id])->update(['usertype' => $data['usertype']]);
        return redirect('dashboard')->with('status','Your data Updated Successfully..!');
    }
    public function registeredit(Request $request,$id)
    {
    	$users = User::where(['id' => $id])->first();
    	return view('admin.registeredit')->with(compact('users'));
    }
    public function registerdelete($id)
    {
        $users = User::findorfail($id);
        $users->delete();
        return redirect('dashboard')->with('status','Your data Deleted Successfully..!');
    }

    public function admindetailedit(Request $request, $id)
    {
        $users = User::find($id);
        return view('admin.adminprofile')->with('users',$users);
    }
    public function updateadminprofile(Request $request,$id)
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
        return redirect('admin.dashboard')->with('status','Your data Updated Successfully..!');
    }

}
