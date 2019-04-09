@extends('layouts.main')
@section('sidebar')

@endsection
@section('script')
<script src="{{ asset('js/script.js') }}"></script>
@endsection
@section('content')
<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Your Trip</h2>

<div>
    
</div>
<hr>

<!-- Pull in ride info from the database -->
<p for="pickUp">Pickup Location</p>
<p for="dropOff">Drop Off Location</p>

<!-- Horizontal Row Break -->
<hr> 
<h2 class="text-green bg-white text-center m-0 p-4">Driver Info</h2>

<div class="form-group row m-0 p-4">    
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/man1.jpg') }}" alt="Avatar"></div>
           <p class="rating">8.9</p>
           <i class="fas fa-star"></i>
    </div>
    <div class="col-8">
        <p><span class="name mb-2">{{ $ride->user->firstName }} {{ $ride->user->lastName }}</span> is going</p>
        <p><strong>From:</strong> {{ $ride->startPos }} </p>
        <p><strong>To:</strong> {{ $ride->endPos }}</p>
        <p><strong>Date:</strong> {{ $ride->date }} </p>
        <p><strong>Pickup time:</strong> {{ $ride->startTime }} </p>
    </div>   
    <div class="col-12">
        <p><strong>Rules:</strong>${{ $ride->estimatedPrice }}</p>
    </div>     
</div>

<div class="form-group mx-5 mt-4 ">
    <h2 class="text-center text-green">$5.55</h2>
</div>

<div class="form-group mx-5 mb-4">
    <button type="submit" id="confirmRide" class="text-bold btn btn-primary text-center btn-block">
        {{ __('Confirm Ride') }}
    </button>
</div>
