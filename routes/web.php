<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherFormContoller;
use App\Http\Controllers\studentFormController;
use App\Http\Controllers\adminDataController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\addTeacherController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 


Route::get('/', function () {
    return view('mainhome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* mail veryfication */

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

/******** */



//// Admin

/*Route::get('/admin/home', function (){
    return view('admin.admin_home');
})->name('admin_home');*/
Route::get('/admin/signup', function (){
    return view('admin.admin_signup');
})->name('admin_signup');

Route::get('/admin/signin', function (){
    return view('admin.admin_signin');
})->name('admin_signin');

Route::get('/admin/total_teacher', function (){
    return view('admin.total_teacher');
})->middleware(['adminPages'])->name('total_teacher');

Route::get('/admin/approve_teacher', function (){
    return view('admin.approve_teacher');
})->middleware(['adminPages'])->name('approve_teacher');

Route::get('/admin/add_teacher', function (){
    return view('admin.add_teacher');
})->middleware(['adminPages'])->name('add-teacher-page');


Route::get('/admin/total_student', function (){
    return view('admin.total_student');
})->middleware(['adminPages'])->name('total_student');

Route::get('/admin/approve_student', function (){
    return view('admin.approve_student');
})->middleware(['adminPages'])->name('approve_student');

Route::get('/admin/add_student', function (){
    return view('admin.add_student');
})->middleware(['adminPages'])->name('add-student-page');
Route::get('/admin/notice_page', function (){
    return view('admin.notice_page');
})->middleware(['adminPages'])->name('notice_page');




Route::get('delete_teacher/{id}', [App\Http\Controllers\adminDataController::class, 'deleteTeacher'])->middleware(['adminPages']);
Route::get('delete_teacher_from_approve/{id}', [App\Http\Controllers\adminDataController::class, 'deleteTeacherFromApprove'])->middleware(['adminPages']);
Route::get('approve_teacher/{id}', [App\Http\Controllers\adminDataController::class, 'approveTeacher'])->middleware(['adminPages']);
Route::post('add-teacher',[adminDataController::class,'addTeacher'])->name('add-teacher')->middleware(['adminPages']);

Route::get('delete_student/{id}', [App\Http\Controllers\adminDataController::class, 'deleteStudent'])->middleware(['adminPages']);
Route::get('delete_student_from_approve/{id}', [App\Http\Controllers\adminDataController::class, 'deleteStudentFromApprove'])->middleware(['adminPages']);
Route::get('approve_student/{id}', [App\Http\Controllers\adminDataController::class, 'approveStudent'])->middleware(['adminPages']);
Route::post('add-student',[adminDataController::class,'addStudent'])->name('add-student')->middleware(['adminPages']);

Route::post('add-notice',[adminDataController::class,'addNotice'])->name('add-notice')->middleware(['adminPages']);
Route::get('admin/delete/my/notice',[adminDataController::class,'deleteMyNotice'])->name('admin/delete_my_notice')->middleware(['adminPages']);









/// student
/*Route::get('/student/home', function (){
    return view('student.student_home');
})->name('student_home');*/

Route::get('/student/signup', function (){
    return view('student.student_signup');
})->name('student_signup');

Route::get('/student/signin', function (){
    return view('student.student_signin');
})->name('student_signin');


/// teacher
/*Route::get('/teacher/home', function (){
    return view('teacher.teacher_home');
})->name('teacher_home');*/

Route::get('/teacher/signup', function (){
    return view('teacher.teacher_signup');
})->name('teacher_signup');

Route::get('/teacher/signin', function (){
    return view('teacher.teacher_signin');
})->name('teacher_signin');








Route::get('/teacher/home',[viewController::class,'teacherHome'])->name('teacher_home');
Route::get('/student/home',[viewController::class,'studentHome'])->name('student_home');
Route::get('/admin/home',[viewController::class,'adminHome'])->name('admin_home');


Route::get('/admin_acount_home', [App\Http\Controllers\HomeController::class, 'admin_acount'])->name('admin_acount');
Route::get('/teacher_acount_home', [App\Http\Controllers\HomeController::class, 'teacher_acount'])->name('teacher_acount');
Route::get('/student_acount_home', [App\Http\Controllers\HomeController::class, 'student_acount'])->name('student_acount');

Route::post('teacher-form',[teacherFormContoller::class,'teacherFormUpload']);
Route::post('student-form',[studentFormController::class,'studentFormUpload']);