<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = DB::table('feedbacks')->join('users','users.id','=','feedbacks.u_id')->paginate(5);
        return view('admin.feedback', compact('data'));
    }
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('feedbacks')->paginate(5);
      return view('admin.feedback', compact('data'))->render();
     }
    }
    public function delFeedback($id=null)
    {
    	Feedback::where(['f_id' => $id])->delete();
    	return redirect()->back();
    }
}
