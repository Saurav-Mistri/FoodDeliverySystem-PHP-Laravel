<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class UserFeedbackController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('POST'))
    	{
    		$data = $request->all();
            $feedbacks = new Feedback;
            $feedbacks->u_id = $data['u_id'];
			$feedbacks->f_subject = $data['subject'];
			$feedbacks->f_msg = $data['msg'];
			$this->validate($request, [
				'subject' => 'required',
				'msg' => 'required',
			]);
			$feedbacks->save();
    		return redirect('index');
    	}
        return view('feedback');
    }
}
