<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class adminPages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
            if(auth()->user()->user_type=='Admin_signup'){
                return view('admin.admin_acount');
            }
            else if(auth()->user()->user_type!='Admin'){
                return view('admin.admin_signin');
            }
            return $next($request);
        }
        else{
            return view('admin.admin_signin');
        }
       
    }
}
