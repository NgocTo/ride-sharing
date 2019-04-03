@extends('layouts.main')
@section('sidebar')
 
@endsection
@section('content')

<!-- google map -->
@section('script')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo&callback=initMap">
</script>
<script>
    // shows the alert

// toggle rider and driver
$( "#toggleBtn" ).click(function() {
  $( "#driverDate" ).toggle();
});
</script>

@endsection
@component('alert')
    @slot('status')
        success
    @endslot
    <div>
    <strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.
    </div>
@endcomponent
<div class="switch-container">
<form action="users/setSession" method="post">
    <label class="switch">
        <input type="checkbox" id="toggleBtn" name="togBtn">
        <span class="slider round">
</span>
    </label>
</form>
</div>

<div>
    <div class="direction" class="p-0">

        <h2 class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form id="directionForm">
                <div class="form-group mx-5 mt-4">
                @if(Session::has('user'))
                    //{{ Session::get('user')->ifDriver }}
                    //show driver fields
                @endif
                </div>

                <div class="form-group mx-5 mt-4">
                    <label for="pickUp">Pickup</label>
                    <input type="text" class="form-control" id="pickUp" name="pickUp" placeholder="Your pickup location">
                    <div class="prediction-container"><div class="predictions"></div></div>
                </div>

                <div class="form-group mx-5 mt-4 ">
                    <label for="dropOff">Destination</label>
                    <input type="text" class="form-control" id="dropOff" placeholder="Your destination">
                    <div class="prediction-container"><div class="predictions"></div></div>
                 </div>
                 <div id="driverDate" class="form-group mx-5 mt-4 ">
                    <label for="time">When are you going?</label>
                    <input type="datetime-local" class="form-control" id="time">
                 </div>
                 <div class="form-group mx-5 mb-4">
                    <button type="submit" id="submitTrip" class=" text-bold btn btn-primary text-center btn-block">
                        {{ __('Submit trip') }}
                    </button>
                 </div>
               
                 <!-- <div class="form-group text-center m-3">
                   <p class="text-green">Your favourite destinations</p>
                 </div> -->
            </form>
                
    </div>
    <div id="map" class="p-0 m-0"></div>
</div>
<div id="directionResponse"></div>

@endsection
