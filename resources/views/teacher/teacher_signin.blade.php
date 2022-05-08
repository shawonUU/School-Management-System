@extends('templet')
@section('containt')
<div class="row p-4 pt-3 p-sm-0">
<div class="container sdo bg-success mt-50 p-2 p-sm-4 col-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

<div class="form-inline">

      <div class="form-group">
          <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row">
          <input id="user_type" type="text" class="m-2 form-control " name="user_type" value="Teacher"  hidden>


                            <div class="col-12">
                                <input id="email" type="email" class="m-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Adress">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">
                                <input id="password" type="password" class="m-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                        <div clas=" ">
                                        <a class="m-2 text-white nav-link d-inline" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        </div>
                                @endif
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-white form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
                               
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="m-2 btn col-12 btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

             
              <a  href="{{route('teacher_signup')}}"  class="nav-link d-inline text-white text-left t-sdo">Creat a new account.</a>
          </form>
      </div>
</div>
</div>
</div>

@endsection