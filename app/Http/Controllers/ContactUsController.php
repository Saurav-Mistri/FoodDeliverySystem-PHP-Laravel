<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('POST'))
    	{
    		$data = $request->all();
            $contacts = new ContactUs;
            $contacts->c_name = $data['c_name'];
			$contacts->c_email = $data['c_email'];
            $contacts->c_subject = $data['c_subject'];
            $contacts->c_msg = $data['c_msg'];
			$this->validate($request, [
                'c_name' => 'required',
                'c_email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'c_subject' => 'required',
				'c_msg' => 'required',
			]);
			$contacts->save();
    		return redirect('index');
    	}
        return view('contact');
    }

}
