<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function dashboard(){
    	return view('dashboard');
    }
    public function adminlogout(){
    	Auth::logout();
       return redirect('/');
    }
}
