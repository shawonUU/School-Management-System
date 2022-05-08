<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use Auth;

class viewController extends Controller
{


    public function adminHome(){

        if(Auth::guest()){
            return view('admin.admin_home');
        }
        else{
            if(auth()->user()->user_type == 'Admin_signup'){
                return redirect()->route('admin_acount'); 
            }
            else if(auth()->user()->user_type == 'Admin'){
                return view('admin.admin_dashbord');
            }
            else{
                return view('admin.admin_home');
            }
        }

    }

    public function teacherHome(){
        if(Auth::guest()){
            return view('teacher.teacher_home');
        }
        else{
            if(auth()->user()->user_type == 'Teacher_signup' || 
               auth()->user()->user_type == 'Teacher_fillup'){
                return redirect()->route('teacher_acount'); 
            }
            else if(auth()->user()->user_type == 'Teacher'){
                return view('teacher.teacher_dashbord');
            }
            else{
                return view('teacher.teacher_home');
            }
        } 

    }

    public function studentHome(){
        if(Auth::guest()){
            return view('student.student_home');
        }
        else{
            if(auth()->user()->user_type == 'Student_signup' || auth()->user()->user_type == 'Student_fillup'){
                return redirect()->route('student_acount'); 
            }
            else if(auth()->user()->user_type == 'Student'){
                // go to dash bord
            }
            else{
                return view('student.student_home');
            }
        }

    }
}
