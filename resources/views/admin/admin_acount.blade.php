
@extends('loginhome')

@section('containt')

<div class="pt5 container">
<p class="display-6 text-white text-center t-sdo mt-5">
You are not approved as an admin to the School. If you will be approved as an admin you can access admin panel.
</p>

        
<div class="mt-5 " style="display: flex;justify-content: center;">
    
<a style="margin: 0 auto;" class=" px-5 btn btn-primary sdo" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
   
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        </div>        
@endsection