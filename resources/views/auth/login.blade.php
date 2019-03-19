@extends('layouts.main')
@section('sidebar')
@endsection
@section('content')
<div class="container mt-4 ">
<div class="form-group row">
    <div class="col-md-4 offset-md-4">
        <h2 class="text-green text-center text-bold mb-3 mt-3">Log in</h2>
    </div>
</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right mb-3">{{ __('Email') }}</label>
            <div class="col-md-4">    
                <input id="email" type="email" placeholder="Enter your email" class="shadow form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <div class="col-md-4">   
                <input id="password" placeholder="Enter password" type="password" class="shadow form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if (Route::has('password.request'))
                    <p class="mt-2">
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    <p>
                @endif
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-4 offset-md-4 mb-3">
                <button type="submit" class="btn btn-block btn-primary bg-blue text-center text-bold">
                    {{ __('Log in') }}
                </button>
               
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <p class=" text-center">OR</p>
                <p class="text-center mb-4">Don't have an account?</p>
                <a href="{{ route('register') }}" class="btn btn-block bg-green text-white align-middle text-bold">{{ __('Sign Up') }}</a>
            </div>
        </div>
    </form>
</div>
@endsection
