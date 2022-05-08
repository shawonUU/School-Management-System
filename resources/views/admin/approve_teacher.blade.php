<?php
   use Illuminate\Support\Facades\DB;
   use App\Models\User;
   //$teachers = DB::select('select * from users WHERE user_type = "Teacher"')->toArray();
   $teachers = User::all();

?>

@extends('loginhome')

@section('containt')


@extends('admin.drawer')


<div class="p-5" style="display: inline-block float: left">

    <div class="">
        <div class="row">
             

     


                        <div class="table table-sm " style="color: white; margin-top: 3rem !important;">
                            <div class="row">
                                <div class="col-12 bg-primary text-center text-bold py-3">Teachers Request</div>
                            </div>



                            @foreach($teachers as $teacher)
                                @if($teacher['user_type']=='Teacher_fillup')
                                    <?php 
                                        $uid = $teacher['uid'];
                                        $teacherinfo = DB::table('teachers')->where('uid',$uid)->get(); 
                                    ?>
                                    <div class="row sdo bg-success py-2" style="color: white;">
                                        <div class="col-12 col-lg-8 col-sm-6"> {{$teacher['first_name']}} {{$teacher['last_name']}}</div>
                                        <div class=" col-6 col-lg-4 col-sm-6  d-flex justify-content-end"><span id="{{$teacherinfo[0]->id.'btn'}}" onclick="infolist(<?php echo(json_encode($teacherinfo[0]->id)); ?>)" style="background-color: #007bff;" class="ex btn btn-primary">View</span></div>
                                        
                                    </div>

                                   

                                   


                                    
                                        <div id="{{$teacherinfo[0]->id}}" style="display: none;">

                                                <div class="form-group row ">
                                                    <div class="col-md-6">
                                                        <input id="age" type="text" class="m-2 sdo form-control @error('age') is-invalid @enderror" name="age" value="{{('Age: ')}}{{$teacherinfo[0]->age}}"  readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="degree" type="text" class="m-2 sdo form-control @error('degree') is-invalid @enderror" name="degree" value="{{('Eegree: ')}}{{$teacherinfo[0]->degree}}" required autocomplete="degree" placeholder="Degree" readonly> 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input id="experience" type="text" class="m-2 sdo form-control @error('experience') is-invalid @enderror" name="experience" value="{{('Experience: ')}}{{$teacherinfo[0]->experience}} {{('year(s) ')}}"   readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="adress" type="text" class="m-2 sdo form-control @error('adress') is-invalid @enderror" name="adress" value="{{('Address: ')}}{{$teacherinfo[0]->adress}}" required autocomplete="adress" placeholder="Address" readonly>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input id="gender" type="tex" class="m-2 sdo form-control @error('gender') is-invalid @enderror" name="gender" value="{{('Gender: ')}}{{$teacherinfo[0]->gender}}" required autocomplete="gender" placeholder="Gender" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input id="religion" type="text" class="m-2 sdo form-control @error('religion') is-invalid @enderror" name="religion" value="{{('Religion: ')}}{{$teacherinfo[0]->religion}}" required autocomplete="religion" placeholder="Religion" readonly>
                                                    </div>

                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input  id="email" type="email" class="m-2 sdo form-control @error('email') is-invalid @enderror" name="email" value="{{('E-Mail: ')}}{{$teacherinfo[0]->email}}" required autocomplete="email" placeholder="Email Address" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <input id="phone" type="text" class="m-2 sdo form-control @error('phone') is-invalid @enderror" name="phone" value="{{('Phone: ')}}{{$teacherinfo[0]->phone}}"  readonly>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="m-2"><a  href="{{'/approve_teacher/'.$teacher['id']}}" class="sdo ex btn btn-primary w-100">Approve</a></div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="m-2"><a href="{{'/delete_teacher_from_approve/'.$teacher['id']}}" class="sdo ex btn btn-danger w-100">Delete</a></div>
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
    function openDwyar(){
        document.getElementById("openbtn").style.display = "none";
        document.getElementById("dwyar").style.display = "inline-block";
    }
    function crosBtnClk(){
        document.getElementById("openbtn").style.display = "inline-block";
        document.getElementById("dwyar").style.display = "none";
    }
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












                                        