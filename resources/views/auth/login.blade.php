@extends('layouts.main')
@section('sidebar')
@endsection
@section('content')
<div class="container">
<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <h2 class="text-green text-center text-bold mb-5">Log in</h2>
    </div>
</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
            <div class="col-md-6">    
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
            <div class="col-md-6">   
                <input id="password" placeholder="Enter password" type="password" class="shadow form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-block btn-primary bg-blue text-center">
                    {{ __('Log in') }}
                </button>
                @if (Route::has('password.request'))
                    <p class="text-center">
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    <p>
                @endif
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <p class=" text-center p-3 m-3">OR</p>
                <p class="text-center">Don't have an account?</p>
                <a href="{{ route('register') }}" class="btn btn-block bg-green text-white align-middle text-bold">{{ __('Sign Up') }}</a>
            </div>
        </div>
    </form>
</div>
@endsection
