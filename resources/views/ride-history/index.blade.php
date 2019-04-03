@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4">Ride History</h2>

<div class="container p-0 rhContainer">
    <div class="form-group row m-0">
        <div class="btn-group btn-group-toggle col p-0" data-toggle="buttons">
            <label class="btn btn-primary text-white active p-4">
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
           <i class="fas fa-star"></i>
    </div>

    <div class="col-8">
        
            <p class="name mb-2">David Smithe</p>
            <p><strong>Pickup:</strong> Sheridan College Trafalgar campus</p>
            <p><strong>Drop off:</strong> Square One Go bus terminal</p>
            <p><strong>Date:</strong> April 5 2019</p>
            <p><strong>Pickup time:</strong> 1:15pm</p>

    </div>     
        
</div>

<div class="form-group row m-0 p-4 shadow-sm border-blue-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/woman1.jpg') }}"></div>
        <p class="rating">8.6</p>
        <i class="fas fa-star"></i>

    </div>

    <div class="col-8">
            <p class="name mb-2">Julia Doe</p>
            <p><strong>Pickup: </strong>Sheridan College Trafalgar campus</p>
            <p><strong>Drop off: </strong>Square One Go bus terminal</p>
            <p><strong>Date: </strong>April 5 2019</p>
            <p><strong>Pickup time: </strong>1:15pm</p>
    </div>     
      
</div>

<div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
        
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