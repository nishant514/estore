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

     $profile=User::find($id);
     //dd($profile);
     $profile->delete();
     return redirect('backend/profile');

}
public function edit(){

	return view('edit');
}
public function editprofile(Request $req){

}
}
