@extends('layouts.app')

@section('content')
<div class="container">

<h2 class="text-green text-center font-weight-bold mb-5">Create an account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="firstName" type="text" class="shadow form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

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
                <input id="lastName" type="text" class="shadow form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                @if ($errors->has('lastName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="text" class="shadow form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="shadow form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="shadow form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="shadow form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary text-center btn-block">
                    {{ __('Register') }}
                </button>
                <p class="text-center p-3 m-3">OR</p>
                <p class="text-center">Have an account?</p>
                <a href="{{ route('login') }}" class="btn btn-block signup bg-green text-white align-middle text-bold">{{ __('Login') }}</a>
            </div>
        </div>
    </form>
</div>
@endsection