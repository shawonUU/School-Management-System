@extends('templet')

@section('containt')


<div class="container">

<h1 class="mt-5 display-2 t-sdo text-white text-center">S.S.L High-School</h1>
<h1 class="mt-5 display-6 t-sdo text-white text-center">You can Sign in or Sign up as a student</h1>

<div class="mt-5 " style="display: flex;justify-content: center;">
    <a  href="{{route('student_signin')}}" style="margin-right: 5px;" class="btn btn-success sdo px-1 px-md-5">Sing In</a>
    
    <a  href="{{route('student_signup')}}" style="margin-left: 5px;" class="btn btn-primary sdo px-1 px-md-5">Sign Up</a>
</div>


</div>


@endsection