


@extends('loginhome')

@section('containt')
@if(Auth::user()->user_type=='Teacher_signup')
<div class="row ">
					<div class="p-4 p-sm-0 col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3 mt-5">
						<div class="panel panel-default">
							<div class="panel-heading">
							    <h3 class="panel-title text-center text-white t-sdo">Apply for job</h3>
						    </div>

						    <div class="panel-body">
									
                            <form method="POST" action="teacher-form">
                                @csrf
										
                        




                                        <div class="form-group row">
                                        

                                            <div class="col-md-6">
                                                <input  id="first_name" type="text" class="m-2 sdo form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ Auth::user()->first_name }}" required autocomplete="first_name" autofocus placeholder="First Name" readonly>

                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                       
                                            

                                            <div class="col-md-6">
                                                <input  id="last_name" type="text" class="m-2 sdo form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ Auth::user()->last_name }}" required autocomplete="last_name" autofocus placeholder="Last Name" readonly> 

                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>




                                        <div class="form-group row ">

                                            <div class="col-md-6">
                                                <input id="age" type="text" class="m-2 sdo form-control @error('age') is-invalid @enderror" name="age" required autocomplete="age" placeholder="Age">

                                                @error('age')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    

                                            <div class="col-md-6">
                                                <input id="degree" type="text" class="m-2 sdo form-control @error('degree') is-invalid @enderror" name="degree" required autocomplete="degree" placeholder="Degree">

                                                @error('degree')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <input id="experience" type="text" class="m-2 sdo form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" placeholder="Job Experience(Year)">

                                                @error('experience')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <input id="adress" type="text" class="m-2 sdo form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" placeholder="Address">

                                                @error('adress')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input id="gender" type="tex" class="m-2 sdo form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" placeholder="Gender">

                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                    <input id="religion" type="text" class="m-2 sdo form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion" placeholder="Religion">

                                                    @error('religion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input  id="email" type="email" class="m-2 sdo form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Email Address" readonly>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                    <input id="phone" type="text" class="m-2 sdo form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">

                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                        </div>


										<!--<input type="submit" value="Register" class="btn btn-primary m-1 sdo btn-block">-->
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="m-2 col-12 sdo btn btn-primary">
                                                    {{ __('Apply') }}
                                                </button>
                                            </div>
                                        </div>
								
				
									
                            </form>
						</div>
					</div>
				</div>

            @elseif(Auth::user()->user_type=='Teacher_fillup')
                <div class="container">
                    <p class="display-6 text-white text-center t-sdo mt-5">
                    You are not approved as a Teacher to the School. If you will be approved as an admin you can access Teacher dashbord.
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

             @endif

@endsection