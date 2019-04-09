@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Rides</h2>

<div class="container p-0">
    <div class="form-group row m-0">
        <div class="btn-group btn-group-toggle col" data-toggle="buttons">
            <label class="btn btn-white text-primary active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"> Past
            </label>
           
            <label class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"checked> Upcoming
            </label>
        </div> 
    </div>
<!-- next section -->

@foreach($currentRides as $c)
<div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
    
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/woman2.jpg') }}"></div>
        <p>9.1</p>
    </div>
    
    <div class="col-8">
            <p>Pickup: {{ $c->startPos }}</p>
            <p>Drop off: {{ $c->endPos }}</p>
            <p>Date: {{ $c->date }}</p>
            <p>Pickup time:{{ $c->startTime }}</p>
    </div> 
      
</div>
@endforeach  






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