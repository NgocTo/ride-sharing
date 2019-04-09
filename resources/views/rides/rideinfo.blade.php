@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')
<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Drivers</h2>

<div class="form-group row m-0 p-4 mb-3">    
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
           <p class="rating">{{ $ride->driverInfo->driverRating }}</p>
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
        <p><strong>Rules:</strong> {{ $ride->driverInfo->driverRules }} </p>
    </div>     
</div>
<!-- next section -->
<hr>
<h2 class="text-green bg-white text-center m-0 p-4">My Trip</h2>

<div>
    <div class="p-0">
        <form id="directionForm">
        <!-- @csrf -->
            <div class="form-group mx-5 mt-4">
                <label for="pickUp">Pickup</label>
                <input type="text" class="form-control" id="pickUp" name="pickUp" placeholder="Your pickup location">
            </div>

            <div class="form-group mx-5 mt-4 ">
                <label for="dropOff">Destination</label>
                <input type="text" class="form-control" id="dropOff" name="dropOff" placeholder="Your destination">
            </div>

            <div class="form-group mx-5 mt-4 ">
                <h2 class="text-center text-green" id="price">$5.55</h2>
            </div>

            <div class="form-group mx-5 mb-4">
                <button type="submit" id="propose" class="text-bold btn btn-primary text-center btn-block">
                    {{ __('Propose') }}
                </button>
            </div>
        </form>
    </div>
</div>
