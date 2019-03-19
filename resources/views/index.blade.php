@extends('layouts.main')
@section('sidebar')
@endsection
@section('content')

<div>
<!-- google map -->
@section('script')
    <script src="{{ asset('../public/js/script.js') }}"></script>
    <script src="{{ asset('../public/js/map.js') }}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQWLvcO1cPisBkY_Bo3w2YxbRk6pm9pVo&callback=initMap">
    </script>
@endsection
</div>


<div class="container p-0 fixed-bottom bg-white">
   
        <h2 class="bg-green text-white p-3 text-center m-0">Where are you going?</h2>
            <form>
                <div class="form-group mx-5 mt-4">
                    <label for="pickup">Pickup </label>
                    <input type="text" class="form-control" id="pickup" placeholder="Your pickup location">
                </div>

                <div class="form-group mx-5 mt-4 mb-5">
                    <label for="dropoff">Destination </label>
                    <input type="text" class="form-control" id="dropoff" placeholder="Your destination">
                 </div>
            </form>
   
</div>




<style>
    /* body{background-color:red;} */
</style>
@endsection
