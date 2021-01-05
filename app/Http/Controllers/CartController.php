<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Auth;
use session;
use Illuminate\Http\Request;
class CartController extends Controller
{
	public function addcart(Request $req){

		$cart=new Cart;
		// $userId = Auth::id();
		// $cart->userid=$userId;
		$cart->id=$req->id;
		$cart->productname=$req->productname;
		$cart->price=$req->price;
		$cart->image=$req->image;
		$req->session()->put('productid',$cart->id);

		return redirect('/cart');
		
	}

	public function cart(Request $req){
		  //$userId = Auth::id();
		if($req->session()->has('productid')){
			echo $session_id=$req->session()->get('productid');

		}else{
			echo '<script>alert("Welcome to Geeks for Geeks")</script>';
		}

		$cart=Product::all()->where('id', $session_id);
		
		return view('frontend/cart',compact('cart'));
		
	}
	public function destroy($id){
		$destroy=Cart::find($id);
		$destroy->delete();
		return redirect('/cart');
	}

	public function deleteSessionData(Request $request) {
		$request->session()->forget('productid');
		echo "Data has been removed from session.";
	}
}
