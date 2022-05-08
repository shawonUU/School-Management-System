<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        if(auth()->user()->user_type=='Admin_signup'){
            return redirect()->route('admin_acount');
        }
        if(auth()->user()->user_type=='Admin'){
            return view('admin.admin_dashbord');
        }

        if(auth()->user()->user_type=='Teacher_signup'){
            return redirect()->route('teacher_acount');
        }
        if(auth()->user()->user_type=='Teacher_fillup'){
            return redirect()->route('teacher_acount');
        }
        if(auth()->user()->user_type=='Student_signup'){
            return redirect()->route('student_acount');
        }
        if(auth()->user()->user_type=='Student_fillup'){
            return redirect()->route('student_acount');
        }
       
    }

    public function admin_acount()
    {
        return view('admin.admin_acount');
    }
    public function teacher_acount()
    {
        return view('teacher.teacher_acount');
    }
    public function student_acount()
    {
        return view('student.student_acount');
    }
}
