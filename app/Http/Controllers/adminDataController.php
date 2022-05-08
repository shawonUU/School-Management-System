<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\User;
use App\Models\student;
use App\Models\notice;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Datetime;
use Auth;

class adminDataController extends Controller
{

  


  function deleteTeacher($id){
    $data = User::find($id);
    $uid = $data['uid'];
    $teacher = DB::table('teachers')->where('uid',$uid);


    $data->delete();

   $teacher->delete();

    return view('admin.total_teacher');
  }

  function deleteTeacherFromApprove($id){
    $data = User::find($id);
    $uid = $data['uid'];
    $teacher = DB::table('teachers')->where('uid',$uid);


    $data->delete();

   $teacher->delete();

    return view('admin.apprive_teacher');
  }




  function deleteStudent($id){
    $data = User::find($id);
    $uid = $data['uid'];
    $teacher = DB::table('students')->where('uid',$uid);


    $data->delete();

   $teacher->delete();

    return view('admin.total_student');
  }

  function deleteStudentFromApprove($id){
    $data = User::find($id);
    $uid = $data['uid'];
    $teacher = DB::table('students')->where('uid',$uid);


    $data->delete();

   $teacher->delete();

    return view('admin.apprive_student');
  }




  function addTeacher(Request $data){
      

    $data->validate([
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],


      'age' => ['required', 'int'],
      'experience' => ['required', 'int'],

      'degree' => ['required', 'string', 'max:255'],
      'adress' => ['required', 'string', 'max:255'],
      'gender' => ['required', 'string', 'max:255'],
      'religion' => ['required', 'string', 'max:255'],
      'phone' => ['required', 'string', 'max:255'],

  ]);

      $user = new User;
      $user->user_type = 'Teacher';
      $user->first_name = $data->first_name;
      $user->last_name = $data->last_name;
      $user->email = $data->email;
      $user->password = Hash::make($data['password']);
      $user->uid = dechex(time()+date("Ymd"));
      $user->save();

      $teacher = new teacher;
        $teacher->first_name = $data->first_name;
        $teacher->last_name = $data->last_name;
        $teacher->age = $data->age;
        $teacher->degree = $data->degree;
        $teacher->experience = $data->experience;
        $teacher->adress = $data->adress;
        $teacher->gender = $data->gender;
        $teacher->religion = $data->religion;
        $teacher->email = $data->email;
        $teacher->phone = $data->phone;
        $teacher->uid = $user->uid;
        $teacher->save();

        $data->session()->flash('notification', 'Added Successfully..!');
        return view('admin.add_teacher');
  }




  function addStudent(Request $data){
      

    $data->validate([
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['required', 'string', 'max:255'],
      'father_name' => ['required', 'string', 'max:255'],
      'mother_name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'class' => ['required', 'string', 'max:255', "in:One,Two,Three,Four,Five,Six,Seven,Eight,Nine,Ten"],

      'age' => ['required', 'int'],
      'birth_day' => ['required', 'string', 'max:255'],
      
      'adress' => ['required', 'string', 'max:255'],
      'gender' => ['required', 'string', 'max:255'],
      'religion' => ['required', 'string', 'max:255'],
      'phone' => ['required', 'string', 'max:255'],

  ]);

      $user = new User;
      $user->user_type = 'Student';
      $user->first_name = $data->first_name;
      $user->last_name = $data->last_name;
      $user->email = $data->email;
      $user->password = Hash::make($data['password']);
      $user->uid = dechex(time()+date("Ymd"));
      $user->save();

      $student = new student;
        $student->first_name = $data->first_name;
        $student->last_name = $data->last_name;
        $student->father_name = $data->father_name;
        $student->mother_name = $data->mother_name;
        $student->class = $data->class;
        $student->birth_day = $data->birth_day;
        $student->age = $data->age;
        $student->adress = $data->adress;
        $student->gender = $data->gender;
        $student->religion = $data->religion;
        $student->email = $data->email;
        $student->phone = $data->phone;
        $student->uid = $user->uid;
        $student->save();

        $data->session()->flash('notification', 'Added Successfully..!');
        return view('admin.add_student');
  }




  function addNotice(Request $data){
    $data->validate([
      'teacher_reng' => ['required', 'string', 'max:255'],
      'student_reng' => ['required', 'string', 'max:255'],
      'message' => ['required', 'string', 'max:255'],

    ]);

    date_default_timezone_set('Asia/Dhaka');
    $now = new DateTime();
    $curentTime = $now->format('d/m/Y H:i');
    $senderId = Auth::user()->uid;
    $serial = dechex(time()+date("Ymd"));


    



    $allUesrs = User::all();
    $i=0;
    foreach($allUesrs as $user){
        
        $notice = new notice;
        $notice->body = $data->message;
        $notice->time = $curentTime;
        $notice->sender = $senderId;
        $notice->status = 'sent';
        $notice->serial = $serial;
        $uid = $user->uid;
       
       if($user->user_type=='Student'&&$data->student_reng != 'No'){
        
          $class =  student::where('uid', $uid)->get()[0]->class;
          if($class == $data->student_reng){
            
            $uniqueId = dechex(time("hmsu")+date("Ymd")). $senderId.++$i;
            $notice->notice_id = $uniqueId; 
            $notice->uid = $uid;
            $notice->save();
          }
          else if($data->student_reng == 'All'){
            
            $uniqueId = dechex(time()+date("Ymd")). $senderId;
            $notice->notice_id = $uniqueId;
            $notice->uid = $uid;
            $notice->save();
          }
       }
       if($user->user_type=='Teacher'&&$data->teacher_reng != 'No'){
          $uniqueId = dechex(time()+date("Ymd")). $senderId;
          $notice->notice_id = $uniqueId;
          $notice->uid = $uid;
          $notice->save();
       }
    }

    //return back();
    return view('admin.myNOtice');
  }



  function approveTeacher($id){
    $user = User::find($id);

    if($user) {
        $user->user_type = 'Teacher';
        $user->save();
    }

    return view('admin.approve_teacher');
  }

  function approveStudent($id){
    $user = User::find($id);

    if($user) {
        $user->user_type = 'Student';
        $user->save();
    }

    return view('admin.approve_student');
  }


  function deleteMyNotice(Request $dat){
    $id = $dat->input('id');
   $data = DB::table('notices')->where('serial',$id);
   //
   if($data->delete()){
    return view('admin.myNOtice');
   }
  }

  
}

