@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')
<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Drivers</h2>

<div class="row m-0 p-4 mb-3">    
    <div class="col-3 col-lg-1 text-center offset-lg-4">
        <div class="img-container">
            <img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar">
        </div>
        <p class="rating">{{ $ride->driverInfo->driverRating }} <span><i class="fas fa-star"></i></span></p>
    </div>
    <div class="col-9 col-lg-3">
        <p><span class="name mb-2">{{ $ride->user->firstName }} {{ $ride->user->lastName }}</span> is going</p>
        <p><strong>From:</strong> {{ $ride->startPos }} </p>
        <p><strong>To:</strong> {{ $ride->endPos }}</p>
        <p><strong>Date:</strong> {{ $ride->date }} </p>
        <p><strong>Pickup time:</strong> {{ $ride->startTime }} </p>
    </div>   
    <div class="col-lg-4 offset-lg-4">
        <p><strong>Rules:</strong> {{ $ride->driverInfo->driverRules }} </p>
    </div>
    <hr class="col-lg-4 offset-lg-4"> 
</div>


<!-- next section -->
<h2 class="text-green bg-white text-center m-0 p-2">My Trip</h2>

<div>
    <div class="p-0">
        <form action="{{url('ride/updateCurrentRide/$ride->id')}}" method="post" id="directionForm">
        @csrf
        @method('PATCH')
            <div class="form-group row mx-5 mt-4">
                <label for="pickUp" class="col-lg-1 offset-lg-4">Pickup</label>
                <input type="text" class="form-control col-lg-3" id="pickUp" name="pickUp" value="{{ $ride->riderPos }}" placeholder="Your pickup location">
            </div>

            <div class="form-group row mx-5 mt-4 ">
                <label for="dropOff" class="col-lg-1 offset-lg-4">Destination</label>
                <input type="text" class="form-control col-lg-3" id="dropOff" name="dropOff" value="{{ $ride->riderDes }}" placeholder="Your destination">
            </div>

            <div class="form-group row mx-5 mt-4">
                <p class="h2 text-center text-green col-lg-4 offset-lg-4" id="price">${{ $ride->estimatedPrice }}</p>
            </div>

            <div class="form-group row mx-5 mb-4">
                <button type="submit" id="propose" class="text-bold btn btn-primary text-center btn-block col-lg-4 offset-lg-4">
                    {{ __('Propose') }}
                </button>
            </div>
        </form>
    </div>
</div>
