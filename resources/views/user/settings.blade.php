@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Settings</h2>

<div class="container p-0">
<div class="form-group row m-0 p-4">
        
        <div class="col-5">
            <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
        </div>
    
        <div class="col-7">
        
            <h3 class="h4">General</h3> 
                <p class="name mb-2">{{$user->firstName}} {{$user->lastName}}<i class="fas fa-edit ml-3"></i></p>
                <p>Email: {{$user->email}}</p>
                <p>Phone: {{$user->phone}}</p>
                <p>Rules: {{$user->keyword}}</p>
            <h3 class="h4">Driver Information</h3> 
            @if (isset($user->driverInfo))
                <p>Date of birth: {{$user->driverInfo->dob}}</p>
                <p>My licence Number: {{$user->driverInfo->licenceNumber}}</p>
                <p>Expiry Date: {{$user->driverInfo->expiryDate}}</p>
                <p>Province: {{$user->driverInfo->province}}</p>
                <p>My rating: {{$user->driverInfo->driverRating}}</p>
                <p>My rules: {{$user->driverInfo->driverRules}}</p>
            @endif
            <h3 class="h4">Car Information</h3> 
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
    
<!-- next section -->

<div class="form-group row m-0">
   <!-- <div class="col"> -->
    <ul  id="settings" class="list-group">
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-bell"></i>Notifications</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-heart"></i>Favourites</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 far fa-credit-card"></i>Payment methods</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-lock"></i>Privacy</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-question-circle"></i>Help</a></li>
    </ul>
      
</div>
</div>
