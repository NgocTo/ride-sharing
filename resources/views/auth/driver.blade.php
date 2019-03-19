@extends('layouts.main')

@section('username', 'test' )
@section('sidebar')
@endsection

@section('content')
<div class="container mt-4">
<div class="form-group row">
    <div class="col offset">
    <!-- <div class="col-md-6 offset-md-4"> -->
    </div>
</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="text-green text-center text-bold mb-3 mt-3">Driver info</h2>

        <div class="form-group row">
            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

            <div class="col-md-4">
                <input id="firstName" type="text" class="shadow form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required>

                @if ($errors->has('firstName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

            <div class="col-md-4">
                <input id="lastName" type="text" class="shadow form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                @if ($errors->has('lastName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth ') }}</label>

            <div class="col-md-4">
                <input id="dob" type="date" class="shadow form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" required>
                <!-- <input id="dob" type="password" class="shadow form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" required> -->

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="licence" class="col-md-4 col-form-label text-md-right">{{ __('Driver licence number') }}</label>

            <div class="col-md-4">
                <input id="licence" type="text" class="shadow form-control" name="licence" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
        <div class="col-md-4">
            <select id="licence" type="number" class="shadow form-control" name="licence" required>
                <option value="Ontario">Ontario</option>
                <option value="Manitoba">Manitoba</option>
                <option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Newfoundland">Newfoundland</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="New Brunswick">New Brunswick</option>
         </select>
        </div>
            <!-- <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

            <div class="col-md-6">
                <input id="province" type="number" class="shadow form-control" name="province" required>
            </div> -->
        </div>
        

        <div class="form-group row">
            <label for="expire" class="col-md-4 col-form-label text-md-right">{{ __('Date of expiration') }}</label>

            <div class="col-md-4">
                <input id="expire" type="date" class="shadow form-control" name="expire" required>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-4 offset-md-4 mt-3">
                <button type="submit" class=" text-bold btn btn-primary text-center btn-block">
                    {{ __('Car info') }}
                </button>
                <p class="text-center p-3 mt-4"><a href="#">Skip this process</a></p>
            </div>
        </div>
    </form>
</div>
@endsection