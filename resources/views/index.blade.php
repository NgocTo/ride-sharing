@extends('layouts.main')
@section('sidebar')
    @parent
@endsection
@section('content')


<!-- google map -->
@section('script')
<script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js">
</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo&callback=initMap">
    </script>
@endsection


<div id="map" class="p-0 m-0"></div>
<div id="direction" class="p-0 pb-3 fixed-bottom bg-white">

        <h2 id="findbtn" class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form>
                <div class="form-group mx-5 mt-4">
                    <label for="pickup">Pickup</label>
                    <input type="text" class="form-control" id="pickup" placeholder="Your pickup location">
                </div>

                <div class="form-group mx-5 mt-4 ">
                    <label for="dropoff">Destination</label>
                    <input type="text" class="form-control" id="dropoff" placeholder="Your destination">
                 </div>
                 <div class="form-group mx-5 mt-4 ">
                    <label for="time">When are you going?</label>
                    <input type="date" class="form-control" id="time">
                 </div>
                 <div class="form-group mx-5 mt-4 mb-4">
                    <button type="submit" class=" text-bold btn btn-primary text-center btn-block">
                        {{ __('Submit trip') }}
                    </button>
                 </div>
               
                 <!-- <div class="form-group text-center m-3">
                   <p class="text-green">Your favourite destinations</p>
                 </div> -->
            </form>
</div>

@endsection

@component('alert')
    @slot('status')
        success
    @endslot
    <div>
    <strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.
    </div>
@endcomponent
<style>
.alert{
    display:none;
}
</style>

<script>

</script>