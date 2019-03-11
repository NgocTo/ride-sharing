@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
   
        <h2 class="text-green text-center font-weight-bold">Log in</h2>
            <form method="POST" action="{{ route('login') }}">
             @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __('Phone number') }}</label>
                    <input id="exampleInputEmail1" type="tel" placeholder="Enter phone number" class="form-control shadow p-3 mb-5{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                    <div class="form-group">
                            <label for="password" >{{ __('Password') }}</label>       
                            <input id="password"  placeholder="Enter password" type="password" class="form-control shadow p-3 mb-5{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                             @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>     
                                <div class="form-check">
                                    <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->

                                    <!-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> -->
                                </div>
                                             
                                <button type="submit" class="btn btn-primary text-center btn-block">
                                    {{ __('Log in') }}
                                </button>
                                <p class=" text-center p-3 m-3">OR</p>
                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                        
                    </form>
                    
                    <p class="text-center">Don't have an account?</p>
                    <button class="text-center signup bg-green">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

  .signup{
    margin:0;
    text-decoration: none;
    border:none;
    font-weight:bold;
    font-size:20px;
    color:white;
    width:100%;
    padding:10x;
    height:60px;
  }
  .shadow{
      height:50px;
      /* border:none; */
  }
  
  .btn{
    /* font-weight:600; */
    font-size:20px;
    padding:8px;
  }
/* .or{
    margin:10px;
  } */
  h2{
 margin-top:20px;
  margin-bottom:40px;
  }
  form{
    margin:25px;
    padding:20px;
  }


  </style>
@endsection
