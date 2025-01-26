<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;
use DB;

class ContactUsController extends Controller
{
      public function index()
    {
        $contactus = DB::table('contactus')->paginate(5);
        return view('admin.contactus',compact('contactus',$contactus));
    }
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $contactus = DB::table('contactus')->paginate(5);
      return view('admin.contactus', compact('contactus'))->render();
     }
    }
    public function delcontactus($id=null)
    {
        ContactUs::where(['c_id' => $id])->delete();
      return redirect()->back();
    }
}
