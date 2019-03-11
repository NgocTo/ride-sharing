@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"> -->
                <h2 class="text-green text-center font-weight-bold">Create an account</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('First name') }}</label>

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Last name') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!-- <div class="form-group row mb-0"> -->
                            <!-- <div class="col-md-6 offset-md-4"> -->
                            <button type="submit" class="btn btn-primary text-center btn-block">
                                    {{ __('Register') }}
                                </button>
                                <p class=" text-center p-3 m-3">OR</p>
                            </div>
                        </div>
                    </form>
                    <p class="text-center">Have an account?</p>
                    <button class="text-center signup bg-green">
                        Log In
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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