@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4">Ride History</h2>

<div class="container p-0">
    <div class="form-group row m-0">
        <div class="btn-group btn-group-toggle col" data-toggle="buttons">
            <label class="btn btn-white text-primary active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"checked> Past
            </label>
           
            <label class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"> Upcoming
            </label>
        </div> 
    </div>
<!-- next section -->
<div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/man1.jpg') }}" alt="Avatar"></div>
        <p class="rating">8.9</p>
    </div>

    <div class="col-8">
        
            <p class="name mb-2">David Smithe</p>
            <p class="mb-1">Pickup: Sheridan College Trafalgar campus</p>
            <p class="mb-1">Drop off: Square One Go bus terminal</p>
            <p class="mb-1">Date: April 5 2019</p>
            <p class="mb-1">Pickup time: 1:15pm</p>

    </div>     
        
</div>

<div class="form-group row m-0 p-4 shadow-sm border-blue-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/woman1.jpg') }}"></div>
        <p class="rating">8.6</p>

    </div>

    <div class="col-8">
            <p class="name">Julia Doe</p>
            <p>Pickup:Sheridan College Trafalgar campus</p>
            <p>Drop off:Square One Go bus terminal</p>
            <p>Date:April 5 2019</p>
            <p>Pickup time:1:15pm</p>
    </div>     
      
</div>

<div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/woman2.jpg') }}"></div>
        <p class="rating">9.1</p>

    </div>

    <div class="col-8">
            <p class="name">Allison Chung</p>
            <p>Pickup:Sheridan College Trafalgar campus</p>
            <p>Drop off:Square One Go bus terminal</p>
            <p>Date:April 5 2019</p>
            <p>Pickup time:1:15pm</p>
    </div>     
      
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