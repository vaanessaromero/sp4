<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = 'user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request)
    // {
    //     echo '<script>console.log("bobobo ka padin")</script>';
        
    //     // if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
    //     // {
    //     //    return view('home');
    //     // }
    //     // return back()->withErrors(['username' => 'Email or password are wrong.']);

    //         // $email = $request->username;
    //         // $password = $request->password;
    //         // // Get user data

    //         // $user = \App\User::where('username', $username)
    //         //         ->where('password', $password)
    //         //         ->select('id', 'username', 'password')
    //         //         ->get();
    //         // // Check
    //         // if (!empty($user[0])) {
    //         //     // logged in
    //         // } else {
    //         //     // Eorror
    //         // }
    // }
}
