@extends('layouts.main')

@section('username', 'test' )
@section('sidebar')
@endsection

@section('content')
<div class="container mt-4">
<div class="form-group row">
<div class="col-md-4 offset-md-4">
    <h2 class="text-green text-center text-bold mb-3 mt-3">Car info</h2>
    </div>
</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

            <div class="col-md-4 mb-3">
                
            <select id="year" type="text" class="shadow form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
             </select>
                <!-- <input id="year" type="text" class="shadow form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required> -->

                @if ($errors->has('year'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="Make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>

            <div class="col-md-4 mb-3 ">
                <input placeholder="Ex: Hyundai" id="make" type="text" class="shadow form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" value="{{ old('make') }}" required>

                @if ($errors->has('make'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('make') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>
<!-- like 'civic''prius' look up on google. make is the brand.model is type of car -->
            <div class="col-md-4 mb-3">
                <input placeholder="Ex: Prius"id="dob" type="text" class="shadow form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" required>
                <!-- <input id="dob" type="password" class="shadow form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" required> -->

                @if ($errors->has('model'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('model') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="licencePlate" class="col-md-4 col-form-label text-md-right">{{ __('Licence plate') }}</label>

            <div class="col-md-4 mb-3">
                <input placeholder="Ex: ABZM 264" id="licencePlate" type="text" class="shadow form-control" name="licencePlate" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="kilometers" class="col-md-4 col-form-label text-md-right">{{ __('Kilometers') }}</label>
        <div class="col-md-4 mb-3">
            <input placeholder="Ex: 34954km" id="kilometers" type="text" class="shadow form-control" name="kilometers" required>
        </div>
            <!-- <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

            <div class="col-md-6">
                <input id="province" type="number" class="shadow form-control" name="province" required>
            </div> -->
        </div>
        

        <div class="form-group row">
            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>
<!-- make color as a text field -->
            <div class="col-md-4 mb-3">
            <input placeholder="Ex: Red" id="color" type="text" class="shadow form-control" name="color" required>
                
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-4 offset-md-4 mt-3">
                <button type="submit" class=" text-bold btn btn-primary text-center btn-block">
                    {{ __('Submit') }}
                </button>
                <p class="text-center p-3 mt-4"><a href="#">Skip this process</a></p>
            </div>
        </div>
    </form>
</div>
@endsection