<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function productlist(){
    	$productlist=Product::all();
    	return view('frontend/productlist',compact('productlist'));
    }
}
