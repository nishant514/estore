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
//multiple image
// if($request->hasfile('image'))
// {
// foreach($request->file('image') as $file)
// {
// $name = time().rand(1,100).'.'.$file->extension();
// //$file->move(public_path('products'), $name);
// $file->move(public_path().'/products/', $name);
// $data[] = $name;
// }
// }

// $create->prouct_name=$request->prouct_name;
// $create->prouct_desc=$request->prouct_desc;
// $create->price=$request->price;
// $create->qty=$request->qty;

// // $file->filenames=json_encode($data);
// // $imageName = $request->image->getClientOriginalName();
// // $request->image->move(public_path('products'), $imageName);
// $create->image=json_encode($data);
// $create->save();

// return redirect('admin/product');