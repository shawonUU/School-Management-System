@extends('loginhome')

@section('containt')


@extends('admin.drawer')


<div class="row pt-5">
					<div class="p-4 p-sm-0 col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3 mt-5">
						<div class="panel panel-default">
							<div class="panel-heading">
							    <h3 class="panel-title text-center text-white t-sdo">Add Student</h3>
						    </div>

						    <div class="panel-body">


                            <form  method="POST" action="{{route('add-student')}}">  
                                @csrf
										

                                        <div class="form-group row">
                                        

                                            <div class="col-md-6">
                                                <input id="first_name" type="text" class="m-2 sdo form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">

                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-white">{{ $message }}</strong>
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


                                        



                                        <div class="form-group row ">

                                            <div class="col-md-6">
                                                <input id="father_name" type="text" class="m-2 sdo form-control @error('father_name') is-invalid @enderror" name="father_name"  value="{{ old('father_name') }}" required autocomplete="father_name" placeholder="Father Name">

                                                @error('father_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="col-md-6">
                                                <input id="mother_name" type="text" class="m-2 sdo form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}" required autocomplete="mother_name" placeholder="Mother Name">

                                                @error('mother_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <input id="age" type="text" class="m-2 sdo form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" placeholder="Age">

                                                @error('age')
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
                                                <select id="class" name="class"class="m-2 sdo form-select" value="{{ old('class') }}" aria-label="Default select example">
                                                    <option selected>Class</option>
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                    <option value="Four">Four</option>
                                                    <option value="Five">Five</option>
                                                    <option value="Six">Six</option>
                                                    <option value="Seven">Seven</option>
                                                    <option value="Eight">Eight</option>
                                                    <option value="Nine">Nine</option>
                                                    <option value="Ten">Ten</option>
                                                </select>
                                                @error('class')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                    <input id="birth_day" type="date" class="m-2 sdo form-control @error('birth_day') is-invalid @enderror" name="birth_day" value="{{ old('birth_day') }}" required autocomplete="birth_day" placeholder="Date of Birth">

                                                    @error('birth_day')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="m-2 sdo form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong  class="text-white">{{ $message }}</strong>
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
                                                    {{ __('Add Student') }}
                                                </button>
                                            </div>
                                        </div>

                                        
                                        @if (session()->has('notification'))
                                            <div class="form-group row text-white text-center">
                                                <div class="col-12">
                                                    <p  style="background-color: #198754;" class="m-2 py-2 col-12 sdo">
                                                    {!! session('notification') !!}
                                                    <?php session()->flash('notification', null); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                             </form>


                        </div>
					</div>
				</div>

@endsection