  @extends('layouts.main')


@section('sidebar')
@endsection
@section('content')
<h2 class="text-green text-center mt-5 @yield('show-heading')">Create an account</h2>
<section class="testimonials_area">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="testi_slider owl-carousel">
            <div>
                <div class="testi_item"> <!-- Create An Account -->
                    <div class="container mt-4">
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
                                <input placeholder="Enter last name" id="lastName" type="text" class="shadow form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

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
                                <input placeholder="Enter email address" id="email" type="text" class="shadow form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input placeholder="Enter phone number" id="phone" type="text" class="shadow form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

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
                                <input placeholder="Enter password" id="password" type="password" class="shadow form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                <input placeholder="Re-enter password" id="password-confirm" type="password" class="shadow form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-check row">
                            <div class="offset-md-4 col-md-2">
                            <input type="checkbox" id="ifDriver" class="form-check-input" name="ifDriver">
                            <label for="ifDriver" class="form-check-label mb-3">I am a driver</label>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4 mb-3">
                            <div id="register-submit">
                                <button type="submit" class="btn btn-primary text-center btn-block text-bold mb-3">Register</button>
                            </div>
                                <p class="text-center">OR</p>
                                <p class="text-center mb-4"><a href="{{ route('login') }}" >Have an account?</a></p>
                                <a href="{{ route('login') }}" class="btn btn-block signup bg-green text-white align-middle text-bold">{{ __('Login') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="testi_item"> <!-- Driver Info -->
                    <div class="container mt-4">
                        <div class="form-group row">
                            <div class="col">
                                <h2 class="text-center text-green text-bold h3">Driver Infomation</h2>
                                <div class="text-center">
                                    <span class="dots"></span>
                                    <span class="dots inactive"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth ') }}</label>

                            <div class="col-md-4 mb-3">
                                <input id="dob" type="date" class="shadow form-control" name="dob">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="licenceNumber" class="col-md-4 col-form-label text-md-right">{{ __('Driver licence number') }}</label>

                            <div class="col-md-4 mb-3">
                                <input placeholder="Enter drivers licence number" id="licenceNumber" type="text" class="shadow form-control" name="licenceNumber">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
                            <div class="col-md-4 mb-3">
                                <select id="province" class="shadow form-control" name="province">
                                    <option value="" disabled selected>Select your province</option>
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
                        </div>

                        <div class="form-group row">
                            <label for="expiryDate" class="col-md-4 col-form-label text-md-right">{{ __('Date of expiration') }}</label>

                            <div class="col-md-4 mb-3 ">
                                <input id="expiryDate" type="date" class="shadow form-control" name="expiryDate">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4 mt-3">
                                <a href="#" class="btn btn-primary text-center btn-block text-bold mb-3" id="driver-submit">Car info</a>
                                
                                <p class="text-center p-3 mt-4"><a href="#" class="register-back">Back</a>   |   <a href="#">Skip this process</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="testi_item"> <!-- Car Info -->
                    <div class="container mt-4">
                        <div class="form-group row">
                            <div class="col offset">
                                <h2 class="text-center text-green text-bold h3">Car Infomation</h2>
                                <div class="text-center">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carYear" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-4 mb-3">
                                
                            <select id="carYear" class="shadow form-control{{ $errors->has('carYear') ? ' is-invalid' : '' }}" name="carYear">
                                <option value="" disabled selected>Select vehicle year</option>
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
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>

                            <div class="col-md-4 mb-3 ">
                                <input placeholder="Enter make (Ex: Honda)" id="make" type="text" class="shadow form-control" name="make" value="{{ old('make') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>
                            <div class="col-md-4 mb-3">
                                <input placeholder="Enter model (Ex: Civic)" id="model" type="text" class="shadow form-control" name="model">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="licencePlate" class="col-md-4 col-form-label text-md-right">{{ __('Licence plate') }}</label>

                            <div class="col-md-4 mb-3">
                                <input placeholder="Enter licence plate" id="licencePlate" type="text" class="shadow form-control" name="licencePlate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kilometers" class="col-md-4 col-form-label text-md-right">{{ __('Kilometers') }}</label>
                            <div class="col-md-4 mb-3">
                                <input placeholder="Enter odometer value" id="kilometers" type="text" class="shadow form-control" name="kilometers">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>
                            <div class="col-md-4 mb-3">
                                <input placeholder="Enter vehicle colour" id="color" type="text" class="shadow form-control" name="color">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4 mt-3">
                                <button type="submit" class="text-bold btn btn-primary text-center btn-block" id="car-submit">
                                    {{ __('Submit') }}
                                </button>
                                <p class="text-center p-3 mt-4"><a href="#" class="register-back">Back</a>   |   <a href="#">Skip this process</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection