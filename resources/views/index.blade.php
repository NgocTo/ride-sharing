@extends('layouts.main')
@section('sidebar')
    @parent
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

// toggle rider and driver
$( "#toggleBtn" ).click(function() {
  $( "#driverDate" ).toggle();
});
</script>

@endsection
<div class="flash-message alert alert-success alert-block text-center fixed-top" role="alert"></div>

<div class="switch-container">
<form action="users/checkDriver" method="post">
    <label class="switch">
        <input type="checkbox" id="toggleBtn" name="togBtn">
        <span class="slider round"></span>
    </label>
</form>
</div>

<div>
    <div class="direction" class="p-0">

        <h2 class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form id="directionForm">
            @csrf
                <div class="form-group mx-5 mt-4">
                    <label for="pickUp">Pickup</label>
                    <input type="text" class="form-control" id="pickUp" name="pickUp" placeholder="Your pickup location">
                    <div class="prediction-container"><div class="predictions"></div></div>
                </div>

                <div class="form-group mx-5 mt-4 ">
                    <label for="dropOff">Destination</label>
                    <input type="text" class="form-control" id="dropOff" name="dropOff" placeholder="Your destination">
                    <div class="prediction-container"><div class="predictions"></div></div>
                 </div>
                 <div id="" class="form-group mx-5 mt-4 ">
                    <label for="time">When are you going?</label>
                    <input type="datetime-local" class="form-control" id="time" name="time">
                 </div>
                 <div class="form-group mx-5 mb-4">
                    <button type="submit" id="submitTrip" class=" text-bold btn btn-primary text-center btn-block">
                        {{ __('Submit trip') }}
                    </button>
                 </div>
               
            </form>
                
    </div>
    <div id="map" class="p-0 m-0"></div>
</div>
<div id="directionResponse"></div>

@endsection
