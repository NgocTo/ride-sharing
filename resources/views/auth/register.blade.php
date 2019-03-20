@extends('layouts.main')

@section('heading', 'Create an Account')
@section('sidebar')
@endsection
@section('content')



<section class="testimonials_area">
    <!-- <div class="form-group row">
        <div class="col offset">
            <h2 class="text-green text-center text-bold mt-5" id="register-heading">Create an account</h2>
            <div class="d-none text-center" id="register-pagination">
                <span class="dots"></span>
                <span class="dots inactive"></span>
            </div>
        </div>
    </div> -->
    <div class="testi_slider owl-carousel">
        <div>
            <div class="testi_item">
                <div class="container mt-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-4  mb-3">
                                <input placeholder="Enter first name" id="firstName" type="text" class="shadow form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-4 mb-3">
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

                            <div class="col-md-4  mb-3">
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

                            <div class="col-md-4  mb-3">
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

                            <div class="col-md-4  mb-3">
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

                            <div class="col-md-4 mb-3">
                                <input id="password-confirm" type="password" class="shadow form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-check row">
                            <div class="offset-md-4 col-md-2">
                                <input type="checkbox" id="driver" class="form-check-input" name="driver" value="driver">
                            </div>
                            <label for="driver" class="col-md-2 form-check-label mb-3">I am a driver</label>
                        </div>


                        <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4 mb-3">
                                <button type="submit" class="btn btn-primary text-center btn-block text-bold mb-3" id="register-submit">
                                    {{ __('Register') }}
                                </button>
                                <p class="text-center">OR</p>
                                <p class="text-center mb-4">Have an account?</p>
                                <a href="{{ route('login') }}" class="btn btn-block signup bg-green text-white align-middle text-bold">{{ __('Login') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div>
            <div class="testi_item">
                <div class="container mt-4">
                    <div class="form-group row">
                        <div class="col">
                            <h2 class="text-center text-green text-bold h3" id="register-heading">Driver Infomation</h2>
                            <div class="text-center" id="register-pagination">
                                <span class="dots"></span>
                                <span class="dots inactive"></span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                            <div class="col-md-4 mb-3">
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

                            <div class="col-md-4 mb-3">
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

                            <div class="col-md-4 mb-3">
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

                            <div class="col-md-4 mb-3">
                                <input id="licence" type="text" class="shadow form-control" name="licence" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="licence" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
                        <div class="col-md-4 mb-3">
                            <select id="licence" class="shadow form-control" name="licence" required>
                                <option value="">---</option>
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

                            <div class="col-md-4 mb-3 ">
                                <input id="expire" type="date" class="shadow form-control" name="expire" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4 mt-3">
                                <button type="submit" class=" text-bold btn btn-primary text-center btn-block" id="driver-submit">
                                    {{ __('Car info') }}
                                </button>
                                <p class="text-center p-3 mt-4"><a href="#" class="register-back">Back</a>   |   <a href="#">Skip this process</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div>
            <div class="testi_item">
                <div class="container mt-4">
                    <div class="form-group row">
                        <div class="col offset">
                            <h2 class="text-center text-green text-bold h3" id="register-heading">Car Infomation</h2>
                            <div class="text-center" id="register-pagination">
                                <span class="dots"></span>
                                <span class="dots"></span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-4 mb-3">
                                
                            <select id="year" class="shadow form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" required>
                                <option value="">---</option>
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
                            <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>

                            <div class="col-md-4 mb-3 ">
                                <input id="make" type="text" class="shadow form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" value="{{ old('make') }}" required>

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
                                <input id="dob" type="date" class="shadow form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" required>
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
                                <input id="licencePlate" type="text" class="shadow form-control" name="licencePlate" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kilometers" class="col-md-4 col-form-label text-md-right">{{ __('Kilometers') }}</label>
                            <div class="col-md-4 mb-3">
                                <select id="kilometers" class="shadow form-control" name="kilometers" required>
                                    <!-- make a text field -->
                                    <option value="">---</option>
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
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>
                            <!-- make color as a text field -->
                            <div class="col-md-4 mb-3">
                                <select id="color" class="shadow form-control" name="color" required>
                                    <option value="">---</option>
                                    <option value="Red">Red</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="Grey">Grey</option>
                                    <option value="White">White</option>
                                    <option value="Yellow">Yellow</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4 mt-3">
                                <button type="submit" class=" text-bold btn btn-primary text-center btn-block" id="car-submit">
                                    {{ __('Submit') }}
                                </button>
                                <p class="text-center p-3 mt-4"><a href="#" class="register-back">Back</a>   |   <a href="#">Skip this process</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection