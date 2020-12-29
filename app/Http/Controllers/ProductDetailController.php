<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductDetailController extends Controller
{
     public function productdetail($id){
     
     	$productdetail=Product::all()->where('id',$id);
    	return view('frontend/productdetail',compact('productdetail'));
    }
}
	