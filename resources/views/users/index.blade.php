@extends('layouts.main')

@section('username', "Test")
@section('heading', 'Users')
@section('sidebar')
    @parent
@endsection
@section('content')

<div>
    <div class="circle"></div>
    <div class="circle"></div>
    <hr />
</div>

    @foreach($users as $u)
        <p>{{ $u->firstName }}</p>
        <p>{{ $u->licenseNumber }}</p>
    @endforeach
    
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex enim eligendi laudantium, nostrum dignissimos dolorum quis, iste dolorem reprehenderit perspiciatis tempora cum dicta expedita excepturi exercitationem dolore consequatur aspernatur fugiat!</p>
    <div id="map"></div>
    <form method="GET">
        <input type="hidden" id="origin" name="origin" value="Sheridan College">
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination">
        <a id="submit" name="submit" class="btn btn-outline-primary">Go</a>
    </form>
    <div id="directionResponse">

    </div>
@endsection
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_WYIcHlgh6jQEN_NMP31U92tbBbWqFRg&callback=initMap">
    </script> -->
@endsection
<!-- @component('alert')
    @slot('status')
        success
    @endslot
    <div><strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.</div>
@endcomponent -->