<?php

namespace App\Http\Controllers;
use App\Cart;
use Auth;
use Illuminate\Http\Request;
class CartController extends Controller
{
	public function addcart(Request $req){
		$cart=new Cart;
		$userId = Auth::id();
		$cart->userid=$userId;
		$cart->productname=$req->productname;
		$cart->price=$req->price;
		$cart->image=$req->image;
		$cart->save();
		return redirect('/cart');
	}

	public function cart(){
		$userId = Auth::id();
		$cart=Cart::all()->where('userid',$userId);
		return view('frontend/cart',compact('cart'));
	}
	public function destroy($id){
		$destroy=Cart::find($id);
		$destroy->delete();
		return redirect('/cart');
	}
}
