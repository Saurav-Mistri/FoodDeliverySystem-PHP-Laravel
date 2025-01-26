<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cuisine;
use App\Dish;
use Illuminate\Support\Facades\DB;

class DishController extends Controller
{
    public function index()
    {
        $data = DB::table('dishes')->join('cuisines','cuisines.c_id','=','dishes.c_id')->paginate(5);
        return view('admin.dish', compact('data'));
    }
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('dishes')->paginate(5);
      return view('admin.dish', compact('data'))->render();
     }
    }
    public function addDish(Request $request)
    {
        if($request->isMethod('POST'))
    	{
            $this->validate($request, [
                'd_name' => 'required',
                'd_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
                'c_id' => 'required',
                'd_discription' => 'required',
                'qty' => 'required',
                'price' => 'required',
            ]);
            
            $fileName = date('Ymd_His').'.'.$request->d_img->extension();
            $request->d_img->move(public_path('/img/dishes/'), $fileName);

    		$data = $request->all();
            $dishes = new Dish;
            $dishes->d_img = $fileName;
            $dishes->d_name = $data['d_name'];
            $dishes->c_id = $data['c_id'];
            $dishes->d_discription = $data['d_discription'];
            $dishes->qty = $data['qty'];
            $dishes->price = $data['price'];
			
			$dishes->save();
    		return redirect('main-dishes');
        }
        $cuisines = Cuisine::all();
        return view('admin.dishadd')->with('cuisines',$cuisines);
    }
    public function delDish($id=null)
    {
        Dish::where(['id' => $id])->delete();
    	return redirect()->back();
    }
    public function editDishes(Request $request, $id)
    {
        $dishes = DB::table('dishes')->find($id);
        $cuisines = Cuisine::get();
        return view('admin.editdishes')->with(compact('dishes',$dishes,'cuisines',$cuisines));
    }
    public function updateDishes(Request $request,$id)
    {
        $dishes = Dish::find($id);
        $dishes->c_id = $request->input('c_id');
        $dishes->d_name = $request->input('d_name');
        $dishes->d_discription = $request->input('d_discription');
        $dishes->qty = $request->input('qty');
        $dishes->price = $request->input('price');

        if($request->hasfile('d_img'))
        {
            $fileName = date('Ymd_His').'.'.$request->d_img->extension();
            $request->d_img->move(public_path('/img/dishes/'), $fileName);
            $dishes->d_img = $fileName;
        }
        $dishes->save();
        return redirect('main-dishes')->with('status','Your data Updated Successfully..!');
    }
}
