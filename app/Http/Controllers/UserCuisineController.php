<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuisine;
use App\Dish;
use DB;

class UserCuisineController extends Controller
{
    public function index()
    {
        $cuisine = Cuisine::get();
        $dish = Dish::all();
        $data = DB::table('dishes')->join('cuisines','cuisines.c_id','=','dishes.c_id')->get();
        return view('usercuisine',compact(['cuisine',$cuisine,'data',$data,'dish',$dish]));
    }
    public function cartedit(Request $request, $id)
    {
        $carts = Dish::findorfail($id);
        return view('cart')->with('carts',$carts);
    }

    public function cart(Request $request)
    {
        $dish_details = $request->data;
        
        
        //$request->session()->put('dish', $dish_details);
        return $dish_details;
    }

    
    public function cartDetails(Request $request)
    {
        // $cartData = $request->session()->get('dish');
        // return $cartData;
    
        return view('cart');
    }

}
