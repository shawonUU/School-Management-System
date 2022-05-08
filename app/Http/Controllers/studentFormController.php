<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;

class studentFormController extends Controller
{
    function studentFormUpload(Request $req){


        $req->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
      
      
            'age' => ['required', 'int'],

    
            'adress' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'religion' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],

            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255', "in:One,Two,Three,Four,Five,Six,Seven,Eight,Nine,Ten"],
            'birth_day' => ['required', 'string', 'max:255'],
      
        ]);
        
        $student = new student;
        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;

        $student->father_name = $req->father_name;
        $student->mother_name = $req->mother_name;
        $student->age = $req->age;
        
        $student->adress = $req->adress;
        $student->gender = $req->gender;
        $student->religion = $req->religion;
        $student->email = $req->email;
        $student->phone = $req->phone;

        $student->class = $req->class;
        $student->birth_day = $req->birth_day;
        $student->uid = auth()->user()->uid;
        $student->save();

        $data =  User::find(auth()->user()->id);

        $data->first_name =  auth()->user()->first_name;
        $data->last_name =  auth()->user()->last_name;
        $data->email =  auth()->user()->email;
        $data->password =  auth()->user()->password;
        $data->user_type = 'Student_fillup';
        $data->save();

        return redirect()->route('student_acount');
        

        
    }
}
