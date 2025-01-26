<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function aboutfeedback()
    {
        $datas = DB::table('feedbacks')->join('users','users.id','=','feedbacks.u_id')->get();
        return view('about',compact('datas',$datas));
    }
}
