@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4">Settings</h2>

<div class="container p-0">
<div class="form-group row m-0 p-4">
        
        <div class="col-5">
            <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
        </div>
    
        <div class="col-7">
            <p class="name mb-2">John Doe<i class="fas fa-edit ml-3"></i></p>
                <p>Toronto, ON</p>
        </div>     
            
</div>
    
<!-- next section -->

<div class="form-group row m-0">
   <!-- <div class="col"> -->
    <ul  id="settings" class="list-group">
        <li class="list-group-item"><a href="#">Notifications</a></li>
        <li class="list-group-item"><a href="#">Favourites</a></li>
        <li class="list-group-item"><a href="#">Payment methods</a></li>
        <li class="list-group-item"><a href="#">Privacy</a></li>
        <li class="list-group-item"><a href="#">Help</a></li>
    </ul>
<!-- </div>      -->
      
</div>

<!-- <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/woman2.jpg') }}"></div>
        <p class="rating">9.1</p>
        <i class="fas fa-star"></i>
    </div>

    <div class="col-8">
            <p class="name mb-2">Allison Chung</p>
            <p><strong>Pickup: </strong>Sheridan College Trafalgar campus</p>
            <p><strong>Drop off: </strong>Square One Go bus terminal</p>
            <p><strong>Date: </strong>April 5 2019</p>
            <p><strong>Pickup time: </strong>1:15pm</p>
    </div>      -->
      
</div>






<!-- 
     <div class="btn-group btn-group-toggle col" data-toggle="buttons">
            <label class="btn btn-primary active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"checked> Past
            </label>
            <label class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"> Upcoming
            </label>
            
        </div>
 -->