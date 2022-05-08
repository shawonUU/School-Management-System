

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->


    <link href="{{asset('css/mystyle.css')}}" rel="stylesheet" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body style="background-color: #54715a">

<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-success">
    
  <div class="container-fluid">
  
    <div>
      <button id="openbtn" onclick="openDwyar()" class=" d-sm-none sdo navbar-dark navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" navbar-toggler-icon"></span>
      </button>
      <img src="{{asset('img/logo.jpg')}}" href="{{url('/')}}" class="float-left d-inline navbar-brand logo" alt="">
    </div>

    <!--
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
-->
    <div class="collapse navbar-collapse" id="navbarText">
      
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}"><p>{{ Auth::user()->first_name }}
              {{ Auth::user()->last_name }} </p> </a>
        </li>
      </ul>
      <a  class="nav-link text-white btn btn-primary" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>   
          
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
              </form>

                                  
              
    </div>
  </div>
</nav>
              
              
         

@yield('containt');


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>