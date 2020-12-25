<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class ProfileController extends Controller
{
	public function profile(){
     if( Auth::check() )
     {
        
        if ( Auth::user()->isAdmin() ) {
           
           $profile=User::All();
           return view('backend/profile',compact('profile'));
       }
       else {
        
        return redirect('/');
    }
}
}   

public function destroy($id){
   // dd($id);
   $profile=User::find($id);
   
   $profile->delete();
   return redirect('profile');

} 
public function edit($id){
  
   $prof=User::all()->where('id',$id);
	return view('backend/edit',compact('prof'));
}
  public function profileupdate(Request $req){
  
  
   //$profile=User::where('id',$id)->update();
}
}
