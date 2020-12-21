<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use Socialite;

class FacebookController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback(Request $request)
    {
        try {

            $facebookAccount = Socialite::driver('facebook')->user();

            // your logic here...

            return redirect()->route('your.route.name');


        } catch (Exception $e) {


            return redirect()->route('auth.facebook');
        }
   
    
}
}