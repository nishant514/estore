<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
     public function productdetail(){
    	return view('frontend/productdetail');
    }
}
