<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorePagesController extends Controller
{
     public function wishlist(){
    	return view('frontend/wishlist');
    }
}
