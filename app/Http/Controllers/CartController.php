<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Cuisine;
use App\Dish;
use DB;

class CartController extends Controller
{
    public function index()
    {
        
        return view('cart');
    }
    public function addItems(Request $request,$d_id)
    {
        $dishes = Dish::findorfail($d_id);
        Cart::add($id,$dishes->d_name,$dishes->qty,$dishes->price,'stock','=',$dishes->qty);
        return back();
    }
}
