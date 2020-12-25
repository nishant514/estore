<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
class AddProductController extends Controller
{
    public function products(){
      if( Auth::check() )
      {
        
        if ( Auth::user()->isAdmin() ) {
            
            return view('backend/addproduct');
        }

        
        else {
         
            return redirect('/');
        }
    }   
    
}

public function addproduct(Request $req){

   $addproduct= new Product;
   $addproduct->name=$req->name;
   $imagename=$req->image->getClientOriginalName();
   $req->image->move(public_path('images'), $imagename);
   $addproduct->image=$imagename;
   $addproduct->price=$req->price;
   $addproduct->save();
   return redirect('products');
}

public function viewproduct(){
   if( Auth::check() )
   {
    
    if ( Auth::user()->isAdmin() ) {
        $viewproduct=Product::all();
        return view('backend/viewproduct',compact('viewproduct'));
    }

    
    else {
     
        return redirect('/');
    }
}   


}
}
