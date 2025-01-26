<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cuisine;
use Illuminate\Support\Facades\DB;

class CuisineController extends Controller
{
    public function index()
    {
        $cuisines = DB::table('cuisines')->paginate(5);
        return view('admin.cuisine')->with('cuisines',$cuisines);
	}	
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $cuisines = DB::table('cuisines')->paginate(5);
      return view('admin.cuisine', compact('cuisines'))->render();
     }
    }
    public function addCuisine(Request $request)
    {
        if($request->isMethod('POST'))
    	{
    		$data = $request->all();
    		$cuisines = new Cuisine;
			$cuisines->name = $data['name'];
			$cuisines->discription = $data['discription'];
			$this->validate($request, [
				'name' => 'required',
				'discription' => 'required',
			]);
			$cuisines->save();
    		return redirect('main-cuisine');
    	}
    	return view('admin.cuisineadd');
	}
	public function delCuisine($id=null)
    {
    	Cuisine::where(['c_id' => $id])->delete();
    	return redirect()->back();
	}
	public function editCuisine(Request $request,$id=null)
    {
    	if($request->isMethod('POST'))
    	{
    		$data = $request->all();
    		Cuisine::where(['c_id' => $id])->update(['name' => $data['name'],'discription'=>$data['discription']]);
    		return redirect('main-cuisine')->with('status','Your data Updated Successfully..!');
    	}
    	$cuisines = Cuisine::where(['c_id' => $id])->first();
    	return view('admin.editcuisine')->with(compact('cuisines'));
    }
}
