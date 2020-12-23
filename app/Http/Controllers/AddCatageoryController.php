<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
class AddCatageoryController extends Controller
{
    public function category(){
       if( Auth::check() )
                {
                
                if ( Auth::user()->isAdmin() ) {
                
                return view('backend/addcategory');
                }

            
                else {
               
                return redirect('/');
                }
                }   
     
    
    }

    public function addcategory(Request $req){
    	//dd($req->all());
    	 $addcategory=new Category;
    	 $addcategory->name=$req->name;
    	  $addcategory->discription=$req->discription;
        $addcategory->price=$req->price;
       
      // $imageName=$req->image->getClientOriginalName();  
      // $req->image->move(public_path('images'), $imageName);
      //  $addcategory->image=$imageName;
      
    	 $addcategory->save();
          return response()->json(
                    [
                    'success' => true,
                    'message' => 'Data inserted successfully'
                    ]
                    );
           
       // return redirect('addcategory');
         
    	
    }

    public function viewcategory(){
         if( Auth::check() )
                {
                
                if ( Auth::user()->isAdmin() ) {
    	$viewcategory=Category::all();
    	return view('backend.viewcategory',compact('viewcategory'));
        }

            
                else {
               
                return redirect('/');
                }
                }   
              
    }
  
}
