<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return redirect()->route('login');
        }else{

        $userID = \Auth::id();

        $user = User::find($userID);

        if($user->admin == 2){
            return redirect()->back();
        }else if($user->admin == 1){
            return redirect()->back();
        }

        }

        return $next($request);
    }
}
