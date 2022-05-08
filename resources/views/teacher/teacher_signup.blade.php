@extends('templet')

@section('containt')



				<div class="row ">
					<div class="p-4 p-sm-0 col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3 mt-5">
						<div class="panel panel-default">
							<div class="panel-heading">
							    <h3 class="panel-title text-center text-white t-sdo">Teacher Registration</h3>
						    </div>

						    <div class="panel-body">
									
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
										
                                <div class="form-group row d-none">

                                            <div class="col-md-6">
                                                <input id="user_type" type="text" class="form-control @error('user_type') is-invalid @enderror" name="user_type" value="Teacher_signup" required autocomplete="user_type" autofocus>

                                                @error('user_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                </div>




                                        <div class="form-group row">
                                        

                                            <div class="col-md-6">
                                                <input id="first_name" type="text" class="m-2 sdo form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">

                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                       
                                            

                                            <div class="col-md-6">
                                                <input id="last_name" type="text" class="m-2 sdo form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last Name">

                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">

                                            <div class="col-12">
                                                <input id="email" type="email" class="m-2 sdo form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="form-group row ">

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="m-2 sdo form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="m-2 sdo form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm Password">
                                            </div>

                                        </div>

										<!--<input type="submit" value="Register" class="btn btn-primary m-1 sdo btn-block">-->
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="m-2 col-12 sdo btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
										<p class="text-white text-center t-sdo">Already have an account? <a class="nav-link nlk t-sdo" href="{{route('teacher_signin')}}">Login</a></p>
				
									
                            </form>
						</div>
					</div>
				</div>
	
@endsection
