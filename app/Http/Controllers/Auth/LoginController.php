<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // some other functions go here

    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            //return redirect()->route('home');
            // return redirect('/dashboard');
           return redirect('admin');
       }

        // to user dashboard
       else{
        return view('layouts/master');
    }

    
}
public function __construct()
{
    $this->middleware('guest')->except('logout');
}


public function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();

}

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();



        $users = User::where(['email' => $user->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/');
        }else{
            $user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),

                'provider_id' => $user->getId(),
                'provider_name' => $provider,
            ]);

            Auth::Login($user,true);
              return redirect('/');
        }

    }
}