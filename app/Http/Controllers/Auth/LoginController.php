<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth; // Add this for the authentication
use Illuminate\Http\Request; //Add this to request
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME; //comment to this to make redirect the go to Authenticate users
    protected function authenticated(Request $request, $user)
    {
        if(Auth::user()->role_as == '1')
        {
            if(Auth::user()->role_as == '1')
            {
                return redirect('/posts')->with('status', 'Welcome Admin');
            }
            elseif(Auth::user()->role_as == '0')
            {
                return redirect('/home')->with('status', 'Logged in Succesfully');
            }
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('email')))
        {
            return ['phone'=>$request->get('email'),'password'=> $request->get('password')];
        }
        return $request->only($this->username(), 'password');
    }

}
