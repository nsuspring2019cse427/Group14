<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        //$user = Socialite::driver('google')->user();

        // dd($user);
        try {
            
        
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email',$googleUser->email)->first();
            
            if(!$user) {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->password = bcrypt(rand(1,10000));
                $user->save();
            }

            auth()->login($user, true);

            return redirect()->to('/dashboard');
        } 
        catch (Exception $e) {
            return 'error';
        }
    }
}
