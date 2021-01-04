<?php

namespace App\Http\Controllers;
use App\Cart;
use Auth;
use session;
use Illuminate\Http\Request;
class CartController extends Controller
{
	public function addcart(Request $req){

		$cart=new Cart;
		$userId = Auth::id();
		if($userId==null){
			$req->session()->put('price',$req->price);
			$req->session()->put('productname',$req->productname);
			$req->session()->put('image',$req->image);
			// $req->session()->has('productname');
		    //echo $req->session()->get('productname');
		    //$req->session()->has('image');
		    //echo $req->session()->get('image');
			return redirect('/cart');

		}else{
			$cart->userid=$userId;
			$cart->productname=$req->productname;
			$cart->price=$req->price;
			$cart->image=$req->image;
			$cart->save();
			return redirect('/cart');
		}
	}

	public function cart(Request $req){
		$userId = Auth::id();
		if($userId==null){
			$cart = $req->session()->all();
			dd($cart);

			return view('frontend/cart',compact('cart'));
			
		}else{
			$cart=Cart::all()->where('userid',$userId);
			return view('frontend/cart',compact('cart'));
		}
	}
	public function destroy($id){
		$destroy=Cart::find($id);
		$destroy->delete();
		return redirect('/cart');
	}
}
