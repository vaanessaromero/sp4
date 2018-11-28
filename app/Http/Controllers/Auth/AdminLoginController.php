<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
    // protected function guard(){
    //     return Auth::guard('admin');
    // }

    // public function login(Request $request)
    // {
    //     echo '<script>console.log("bobobo")</script>';
        
    //     if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
    //     {
    //        return view('admin-home');
    //     }
    //     return back()->withErrors(['username' => 'Email or password are wrong.']);
    // }

    public function login(Request $request){
        //return true;
        echo '<script>console.log("bobobo ka padin")</script>';
        //validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to login user

        // if( Auth::check() && Auth::user()->isAdmin()){
        //     return $next($request);
        // }

        // return redirect('home');

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }
            //return redirect()->intended(route('admin.dashboard'));
        return redirect()->back()->withInput($request->only('email', 'remember'));
        
        //if successful, redirect to intended location
    }

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
}
