<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password

            ]))

        {

            $user = User::where('email', $request->email)->first();
            if($user->is_admin() == 0){
                return redirect()->route('admin');
            }else if($user->is_admin() == 1){
                return redirect()->route('home');
            }
        }

        return redirect()->back();
    }
}
