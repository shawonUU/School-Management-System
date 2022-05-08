<?php
   use Illuminate\Support\Facades\DB;
   use App\Models\User;
   $students = User::all();

?>

@extends('loginhome')

@section('containt')

@extends('admin.drawer')





<div class="p-5" style="display: inline-block float: left">

    <div class="">
        <div class="row">
             

     


                        <div class="table table-sm " style="color: white; margin-top: 3rem !important;">
                            <div class="row">
                                <div class="col-12 bg-primary text-center text-bold py-3">Student List</div>
                            </div>



                            @foreach($students as $student)
                                @if($student['user_type']=='Student')
                                    <?php 
                                        $uid = $student['uid'];
                                        $studentinfo = DB::table('students')->where('uid',$uid)->get(); 
                                    ?>
                                    <div class="row sdo bg-success py-2" style="color: white;">
                                        <div class="col-12 col-lg-8 col-sm-6"> {{$student['first_name']}} {{$student['last_name']}}</div>
                                        <div class=" col-6 col-lg-2 col-sm-3  d-flex justify-content-end"><span id="{{$studentinfo[0]->id.'btn'}}" onclick="infolist(<?php echo(json_encode($studentinfo[0]->id)); ?>)" style="background-color: #007bff;" class="ex btn btn-primary">View</span></div>
                                        <div class=" col-6 col-lg-2 col-sm-3 d-flex justify-content-end"><a  style="background-color: #dc3545;" href="{{'/delete_student/'.$student['id']}}" class="ex btn btn-danger">Delete</a></div>
                                    </div>

                                   

                                   


                                    <div id="{{$studentinfo[0]->id}}" style="display: none;">

                                                <div class="form-group row ">
                                                    <div class="col-md-6">
                                                        <input id="father_name" type="text" class="m-2 sdo form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{('Father Name: ')}}{{$studentinfo[0]->father_name}}"  readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="mother_name" type="text" class="m-2 sdo form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{('Mother Name: ')}}{{$studentinfo[0]->mother_name}}" required  readonly> 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input id="birth_day" type="text" class="m-2 sdo form-control @error('birth_day') is-invalid @enderror" name="birth_day" value="{{('Birthday: ')}}{{$studentinfo[0]->birth_day}}"   readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="age" type="text" class="m-2 sdo form-control @error('age') is-invalid @enderror" name="age" value="{{('Age: ')}}{{$studentinfo[0]->age}}" required autocomplete="adress" placeholder="Address" readonly>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input id="gender" type="tex" class="m-2 sdo form-control @error('gender') is-invalid @enderror" name="gender" value="{{('Gender: ')}}{{$studentinfo[0]->gender}}" required autocomplete="gender" placeholder="Gender" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input id="religion" type="text" class="m-2 sdo form-control @error('religion') is-invalid @enderror" name="religion" value="{{('Religion: ')}}{{$studentinfo[0]->religion}}" required autocomplete="religion" placeholder="Religion" readonly>
                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input  id="class" type="text" class="m-2 sdo form-control @error('class') is-invalid @enderror" name="class" value="{{('Class: ')}}{{$studentinfo[0]->class}}" required readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input id="adress" type="text" class="m-2 sdo form-control @error('adress') is-invalid @enderror" name="adress" value="{{('Address: ')}}{{$studentinfo[0]->adress}}"  readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input  id="email" type="email" class="m-2 sdo form-control @error('email') is-invalid @enderror" name="email" value="{{('E-Mail: ')}}{{$studentinfo[0]->email}}" required autocomplete="email" placeholder="Email Address" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input id="phone" type="text" class="m-2 sdo form-control @error('phone') is-invalid @enderror" name="phone" value="{{('Phone: ')}}{{$studentinfo[0]->phone}}"  readonly>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="m-2"><a  href="{{'/approve_student/'.$student['id']}}" class="sdo ex btn btn-primary w-100">Approve</a></div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="m-2"><a href="{{'/delete_student_from_approve/'.$student['id']}}" class="sdo ex btn btn-danger w-100">Delete</a></div>
                                                    </div>
                                                </div>


                                                
                                        </div>

                                @endif
                            @endforeach
                        </div>
                            

                            
           



        </div>

    </div>

</div>




<script>
    function infolist(id){
        if(document.getElementById(id).style.display == 'none'){
            document.getElementById(id+"btn").innerHTML = "Hide";
            document.getElementById(id).style.display = '';
            //document.getElementById(id).className = 'viw';
        }
        else{ 
            document.getElementById(id+"btn").innerHTML = "View";
            document.getElementById(id).style.display = 'none';
            //document.getElementById(id).className = 'hid';
        }
    }
</script> 
@endsection












                                        