@extends('layouts.main')

@section('heading', 'Users')
@section('sidebar')

@endsection
@section('content')
    <!-- @if (isset($user)) 
        <p>{{$user->firstName}} {{$user->lastName}}</p>
    @else 
        <p>Unauthorized</p>
    @endif -->
@endsection
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
<h2 class="text-white bg-green text-center m-0 p-4">
    <a class="backBtn" href="{{ route('/') }}">
        <i class="fas fa-chevron-left"></i>
    </a>Your Profile
</h2>



<div class="mt-4">
    <div class="form-group row col-md-4 offset-md-4">
        <div class="col-5">
            <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
        </div>
        <div class="col-7">
            <p class="name mb-2">{{$user->firstName}} {{$user->lastName}}<a href="#"><i class="fas fa-edit ml-3"></i></a></p>
            <p>Email: {{$user->email}}</p>
            <p>Phone: {{$user->phone}}</p>
                    <!-- <p>Rules: {{$user->keyword}}</p> -->
        </div>
    </div>    

        <div id="driverCarCont" class="form-group row col-md-8 offset-md-3 mt-4">
            <div class="col-6 mt-4">
                    <h3 class="name">Driver Information<a href="#"><i class="fas fa-edit ml-3"></i></a></h3> 
                    @if (isset($user->driverInfo))
                        <p>Date of birth: {{$user->driverInfo->dob}}</p>
                        <p>My licence Number: {{$user->driverInfo->licenceNumber}}</p>
                        <p>Expiry Date: {{$user->driverInfo->expiryDate}}</p>
                        <p>Province: {{$user->driverInfo->province}}</p>
                        <p>My rating: {{$user->driverInfo->driverRating}}</p>
                        <p>My rules: {{$user->driverInfo->driverRules}}</p>
                    @endif
        
            </div>
        
        
            <div class="col-6 mt-4">
                    <h3 class="name">Car Information <a href="#"><i class="fas fa-edit ml-3"></i></a></h3> 
                    @if (isset($user->vehicleInfo))
                        <p>Model: {{$user->vehicleInfo->model}}</p>
                        <p>Car year: {{$user->vehicleInfo->carYear}}</p>
                        <p>Make: {{$user->vehicleInfo->make}}</p>
                        <p>Kilometers: {{$user->vehicleInfo->kilometers}}</p>
                        <p>Color: {{$user->vehicleInfo->color}}</p>
                        <p>Licence Plate: {{$user->vehicleInfo->licencePlate}}</p>
                    @endif
            </div>        
        </div>
    
</div>



