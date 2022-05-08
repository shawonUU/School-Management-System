

@extends('templet')

@section('containt')



<div class="mainDv" style="background-image: url('{{ asset('img/school.jpg')}}');">
   <div class="opasey text-white">
    <p class="display-6 text-white pt-5">Welcome to</p>
     <h1 class="display-3 text-white">S.S.L High-School</h1>
     <p class="btn btn-primary mt-5 sdoh">Take Admission</p>



     <div class="mrow bs mt-5 w-100 container">


<div class=" col-4 col-sm-4 mb-5">
<div class="card bg-success sdoh card">
  <img class="card-img-top " src="{{asset('img/admin.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h6 class="">Admin</h6>
    <a href="{{route('admin_home')}}" class="btn btn-primary sdo w-100">View</a>
  </div>
</div>
</div>



<div class=" col-4 col-sm-4 mb-5">
<div class="card bg-success sdoh card">
  <img class="card-img-top " src="{{asset('img/teacher.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h6 class="">Teacher</h6>
    <a href="{{route('teacher_home')}}" class="btn btn-primary sdo w-100">View</a>
  </div>
</div>
</div>



<div class=" col-4 col-sm-4 mb-5">
<div class="card bg-success sdoh card">
  <img class="card-img-top " src="{{asset('img/student.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h6 class="">Student</h6>
    <a href="{{route('student_home')}}" class="btn btn-primary sdo w-100">View</a>
  </div>
</div>
</div>



</div>



   </div>
</div>

@endsection