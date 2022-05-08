<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            if(auth()->user()->user_type=='Admin_signup' || auth()->user()->user_type=='Admin'){
                return redirect()->route('admin_home');
            }
            if(auth()->user()->user_type=='Teacher_signup' 
             || auth()->user()->user_type=='Teacher_fillup'
             || auth()->user()->user_type=='Teacher'){
                 return redirect()->route('teacher_home');
            }

            if(auth()->user()->user_type=='Student_signup' 
             || auth()->user()->user_type=='Student_fillup'
             || auth()->user()->user_type=='Student'){
                return redirect()->route('student_home');
            }
           
        }

        else{
           if($request->user_type == "Admin"){
             return redirect()->route('admin_signin');
           }
           else if($request->user_type == "Teacher"){
            return redirect()->route('teacher_signin');
            }
            else if($request->user_type == "Student"){
                return redirect()->route('student_signin');
            }
        }
    }
    
}
