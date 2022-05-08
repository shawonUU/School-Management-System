<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\User;

use Auth;

class teacherFormContoller extends Controller
{
    //

    function teacherFormUpload(Request $req){

        $req->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
      
      
            'age' => ['required', 'int'],
            'experience' => ['required', 'int'],
      
            'degree' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'religion' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
      
        ]);
        $teacher = new teacher;
        $teacher->first_name = $req->first_name;
        $teacher->last_name = $req->last_name;
        $teacher->age = $req->age;
        $teacher->degree = $req->degree;
        $teacher->experience = $req->experience;
        $teacher->adress = $req->adress;
        $teacher->gender = $req->gender;
        $teacher->religion = $req->religion;
        $teacher->email = $req->email;
        $teacher->phone = $req->phone;
        $teacher->uid = auth()->user()->uid;
        $teacher->save();

        $data =  User::find(auth()->user()->id);

        $data->first_name =  auth()->user()->first_name;
        $data->last_name =  auth()->user()->last_name;
        $data->email =  auth()->user()->email;
        $data->password =  auth()->user()->password;
        $data->user_type = 'Teacher_fillup';
        $data->save();

        return redirect()->route('teacher_acount');
        

        
    }
}
