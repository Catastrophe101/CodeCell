<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
//use App\UserController;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = '/home';

    protected $check=False;


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
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        if($user) {

            //Session::put('user',$user);
            Session::put('name',$user->name);
            Session::put('email',$user->email);
            Session::put('avatar',$user->avatar);
            Session::put('avatar_original',$user->avatar_original);
            Session::put('token',$user->token);
            $bug = new UserController();
            $bug->store($user, $user->token);
            //UserController::store($user,$user->id);

            return redirect()->route('notices');

        }
        else{

            return redirect()->route('home');
        }
        // $user->token;
    }

    public function handleLogout(){

        if(Session::has('token')){
            //Socialite::driver('google');
            Session::flush();
            return view('home');
        }

        else{
            dd('There has been some problem');
        }

    }

}
