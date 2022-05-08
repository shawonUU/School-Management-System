@extends('loginhome')

@section('containt')

<?php
   use Illuminate\Support\Facades\DB;

   $data = DB::select('select * from users WHERE user_type = "Teacher_fillup"');
   $panding_teacher = sizeof($data);

   $data1 = DB::select('select * from users WHERE user_type = "Student_fillup"');
   $panding_student = sizeof($data1);
?>

@extends('admin.drawer')

<div class="pt5 pt-5" style="display: inline-block float: left">

    <div class="pt5">
        <div class="row">
                <div   class="  col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('total_teacher')}}" style="text-decoration: none;" class="custom-bg1 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Total Teacher</h5>

                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>

                        </a>
                </div>
                <div  class="col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('add-teacher-page')}}" style="text-decoration: none;" class="custom-bg2 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Add Teacher</h5>
                               
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </a>
                </div>

                <div  class="col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('approve_teacher')}}" style="text-decoration: none;" class=" custom-bg3 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Approve Teacher (<?php echo $panding_teacher ?>)</h5>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </a>
                    </div>

        </div>





        <div class="row mt-5">
                <div  class=" col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('total_student')}}" style="text-decoration: none;" class="custom-bg1 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Total Student</h5>

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </a>
                    </div>
                <div  class="col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('add-student-page')}}" style="text-decoration: none;" class="custom-bg2 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Add Student</h5>
                               
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </a>
                </div>

                <div class="col-12 col-lg-4   d-flex justify-content-center">
                        <a href="{{route('approve_student')}}" style="text-decoration: none;" class="custom-bg3 py-4 sdo bg-success mb-3 w-80" >
                            <div class="card-body text-white">
                                <h5 class="card-title text-center pb-2">Approve Student (<?php echo $panding_student ?>)</h5>
                               
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </a>
                    </div>

        </div>







    </div>

</div>






<!-- notice section -->

<div style="width:50px; margin: auto; margin-top: 50px;">
    <h2 class="text_center text-white">Notice</h2>
</div>


<!-- end notice section -->











@endsection








