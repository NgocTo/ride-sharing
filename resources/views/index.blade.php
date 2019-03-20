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
@endsection


<div id="map" class="p-0 m-0"></div>
<div id="direction" class="p-0 fixed-bottom bg-white">

        <h2 class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form>
                <div class="form-group mx-5 mt-4">
                    <label for="pickup">Pickup</label>
                    <input type="text" class="form-control" id="pickup" placeholder="Your pickup location">
                </div>

                <div class="form-group mx-5 mt-4 ">
                    <label for="dropoff">Destination</label>
                    <input type="text" class="form-control" id="dropoff" placeholder="Your destination">
                 </div>

                 <div class="form-group mx-5 mt-4 mb-5">
                    <button type="submit" class=" text-bold btn btn-primary text-center btn-block">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
   
</div>




<style>
    /* body{background-color:red;} */
</style>
@endsection

@component('alert')
    @slot('status')
        success
    @endslot
    <div><strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.</div>
@endcomponent
