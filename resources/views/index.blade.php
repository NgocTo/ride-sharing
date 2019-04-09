@extends('layouts.main')
@section('sidebar')
    @parent
@endsection
@section('content')

<!-- google map -->
@section('script')
<script src="{{ asset('js/script.js') }}"></script>
<!-- <script src="{{ asset('js/map.js') }}"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo&callback=initMap">
</script> -->
<script>

// toggle rider and driver
$("#driversList").hide();
$( "#toggleBtn" ).click(function() {
  $( "#driverDate" ).toggle();
});
$("#checkRide").click(function(){
  $("#driversList").show();
  $('.direction').css('height', '100%');
})

</script>

@endsection
<div class="flash-message alert alert-success alert-block text-center fixed-top" role="alert"></div>



    <div class="direction" class="p-0">

        <h2 class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form>
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

                @if (Auth::check() && ($user->ifDriver === 1) && Session::has('driverMode'))
                <div class="form-group mx-5 mt-4 ">
                    <label for="time">When are you going?</label>
                    <input type="datetime-local" class="form-control" id="time" name="time">
                </div>
                <div class="form-group mx-5 mb-4">
                    <button type="submit" id="submitTrip" class="text-bold btn btn-primary text-center btn-block">
                        {{ __('Submit trip') }}
                    </button>
                </div>
                @else
                <div class="form-group mx-5 mb-4">
                    <button type="submit" id="checkRide" class="text-bold btn btn-primary text-center btn-block">
                        {{ __('See rides') }}
                    </button>
                </div>
                @endif
            </form>
  <!-- display available rides -->
  <!-- list -->
  <div id="driversList" class="row p-0 mb-2">
<ul class="list-group">
    <li class="list-group-item mx-4 p-0">
        <div class="col-3">
            <div class="img-containerSmall"><img src="{{ asset('img/man1.jpg') }}"></div>
            
        </div>

        <div class="col-6">
                <p class="name mb-0">David Smithe</p>
                <p class="ratingSmall">8.6</p>
                <i class="fas fa-star starSmall"></i>
                <p><strong>Rules: </strong>Please do not have any cat hair on you, I am allergic.</p>
        </div>    
            <div class="col-3">
                <p class="text-green greenPrice">$5.55</p>
                <p>5 minutes away</p>
            </div>
    </div>
    </li>
</ul>    
    
</div>


<!-- old one commented out, just in case -->
<!-- <div id="driversList" class="row p-0 mx-2 mb-2">

  
        <div class="col-3">
            <div class="img-containerSmall"><img src="{{ asset('img/man1.jpg') }}"></div>
            
        </div>

        <div class="col-6">
                <p class="name mb-0">David Smithe</p>
                <p class="ratingSmall">8.6</p>
                <i class="fas fa-star starSmall"></i>
                <p><strong>Rules: </strong>Please do not have any cat hair on you, I am allergic.</p>
        </div>    
            <div class="col-3">
                <p class="text-green greenPrice">$5.55</p>
                <p>5 minutes away</p>
            </div>
    </div>
 
    
</div> -->

    <div id="map" class="p-0 m-0"></div>

<div id="directionResponse"></div>

@endsection
