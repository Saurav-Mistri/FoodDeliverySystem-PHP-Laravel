<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class NewController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function addDemo(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		$data = $request->all();
    		$demo = new User;
			$demo->name = $data['name'];
			$demo->email = $data['email'];
			$this->validate($request, [
				'name' => 'required',
				'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
			]);
			$demo->save();
    		return redirect('view');
    	}
    	return view('demo');
    }
	public function updateDemo(Request $request,$id=null)
    {
    	if($request->isMethod('POST'))
    	{
    		$data = $request->all();
    		User::where(['id' => $id])->update(['name' => $data['name'],'email'=>$data['email']]);
    		return redirect('view');
    	}
    	$demodetails = User::where(['id' => $id])->first();
    	return view('editdemo')->with(compact('demodetails'));
    }
    /*public function delDemo($id=null)
    {
    	Demo::where(['id' => $id])->delete();
    	return redirect()->back();
	}*/
	public function destroy($id)
    {
    	DB::table("demos")->delete($id);
    	return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
	}
	
    public function view(Request $request)
    {
		$demos = DB::table('users')->paginate(5);
		return view('view',compact('demos'));
	}
	public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('demos')->paginate(5);
      return view('view', compact('data'))->render();
     }
    }   
}