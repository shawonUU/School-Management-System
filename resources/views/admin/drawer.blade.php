<div id="dwyar" class="mr-5 pt5 d-non position d-sm-inline-block  bg-black sdoh text-white" style="height: 100vh; float: left;">
    <div class=" d-flex flex-row-reverse bd-highlight  pb-2 m-1">
        <button id="crosBtn" onclick="crosBtnClk()" type="button" class="d-sm-none pl-5 bd-highlight   btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
    </div>
   <div class="" >
            <img class="mx-5  mb-2"src="{{asset('img/admin.jpg')}}" alt="" style="height: 100px; width: 100px; border-radius: 100%;">
            <ul class="navbar-nav me-auto mb-lg-0 px-2">
            <li class="nav-item text-center">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}"><p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </p> </a>

            </li>
            </ul>
            <ul style="color: white !important"class="navbar-nav me-auto mb-2 mb-lg-0 m-3 mr-2">
            
                <li class="nav-item my-2"><a href="{{ route('admin_home') }}" class="navLink d-inline">Dashbord</a></li>
                <li class="nav-item my-2"><a onclick="displaY('teacher')" class="navLink d-inline">Teacher</a>
                        <ul id="teacher" class="display-non sdo ml-5">
                            <li class="nav-item my-2"><a href="{{route('total_teacher')}}" class="navLink d-inline">Total Teacher</a></li>
                            <li class="nav-item my-2"><a href="{{route('add-teacher-page')}}" class="navLink d-inline">Add teacher</a></li>
                            <li class="nav-item my-2"><a href="{{route('approve_teacher')}}" class="navLink d-inline">Approve Teacher</a></li>
                        </ul>
                </li>
                <li class="nav-item my-2"><a onclick="displaY('student')" class="navLink d-inline">Student</a>
                <ul id="student" class="display-non sdo ml-5">
                            <li class="nav-item my-2"><a href="{{route('total_student')}}" class="navLink d-inline">Total Student</a></li>
                            <li class="nav-item my-2"><a href="{{route('add-student-page')}}" class="navLink d-inline">Add Student</a></li>
                            <li class="nav-item my-2"><a href="{{route('approve_student')}}" class="navLink d-inline">Approve Student</a></li>
                        </ul>
                </li>
                <li class="nav-item my-2"><a href="{{route('notice_page')}}" class="navLink d-inline">Notice</a></li>
                <li class="nav-item my-2"><a href="" class="navLink d-inline">Attendance</a></li>
                <li class="nav-item my-2"><a href="" class=" navLink d-inline">Settings</a></li>
                <li class="nav-item my-2">
                    <a  class="nav-item hbb snavLink text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>   
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            </ul>
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
</script>


<script>

    function displaY(iD){

        //alert(document.getElementById(iD).style.display);
        //console.log(document.getElementById(iD).style.display);

        if( document.getElementById(iD).classList.contains('display-non')){
           document.getElementById(iD).classList.remove('display-non');
            document.getElementById(iD).classList.add('display-inl');
        }
        else{

            document.getElementById(iD).classList.remove('display-inl')
            document.getElementById(iD).classList.add('display-non');
            
        }
        
       
    }
</script>