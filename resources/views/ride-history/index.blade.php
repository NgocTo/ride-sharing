@extends('layouts.main')
@section('sidebar')
@endsection
@section('script')

<script src="{{ asset('js/script.js') }}"></script>
<script>
console.log("hi");

</script>
@endsection
@section('content')
<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Ride History</h2>

<div class="container p-0 rhContainer">
    <!-- buttons -->
    <div class="form-group row m-0">
        <div  class="btn-group btn-group-toggle col p-0 " data-toggle="buttons">
            <label id="pastBtn" class="btn btn-primary text-white active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"checked> Past
            </label>
        
            <label id="upcomingBtn" class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"> Upcoming
            </label>
        </div> 
    </div>

    <!-- past rides -->
    <div id="pastRides">
        @if (Auth::check() && Session::has('driverMode'))
            @foreach ($rides->pastRidesAsDriver as $pastRidesAsDriver)
            <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
                <div class="col-4 col-lg-2">
                    <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
                    <!-- <p class="rating">8.9</p>
                    <i class="fas fa-star"></i> -->
                </div>
                <div class="col-4 col-lg-4">
                    <p class="name mb-2">{{$pastRidesAsDriver->driver->firstName}} {{$pastRidesAsDriver->driver->lastName}}</p>
                    <p><strong>Rider: </strong>{{$pastRidesAsDriver->rider-firstName}} {{$pastRidesAsDriver->rider->lastName}}</p>
                    <p><strong>Pick up: </strong>{{$pastRidesAsDriver->startPos}}</p>
                    <p><strong>Drop off: </strong>{{$pastRidesAsDriver->endPos}}</p>
                    <p><strong>Date: </strong>{{$pastRidesAsDriver->date}}</p>
                    <p><strong>Pickup time: </strong>{{$pastRidesAsDriver->startTime}}</p>
                    <p><strong>End time: </strong>{{$pastRidesAsDriver->endTime}}</p>
                    <p><strong>Price: </strong>${{$pastRidesAsDriver->price}}</p>
                </div>
            </div>
            @endforeach
        @else 
            @foreach ($rides->pastRidesAsRider as $pastRideAsRider)
            <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
                <div class="col-4 col-lg-2">
                    <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
                    <!-- <p class="rating">8.9</p>
                    <i class="fas fa-star"></i> -->
                </div>

                <div class="col-4 col-lg-10">
                    <p class="name mb-2">{{$pastRideAsRider->driver->firstName}} {{$pastRideAsRider->driver->lastName}}</p>
                    <p><strong>Pick up: </strong>{{$pastRideAsRider->startPos}}</p>
                    <p><strong>Drop off: </strong>{{$pastRideAsRider->endPos}}</p>
                    <p><strong>Date: </strong>{{$pastRideAsRider->date}}</p>
                    <p><strong>Pickup time: </strong>{{$pastRideAsRider->startTime}}</p>
                    <p><strong>End time: </strong>{{$pastRideAsRider->endTime}}</p>
                    <p><strong>Price: </strong>${{$pastRideAsRider->price}}</p>
                </div>
            </div>
            @endforeach
        @endif

        <!-- <div class="col-4 col-lg-2 offset-lg-3">
                <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
                <p class="rating">8.9</p>
                <i class="fas fa-star"></i>
            </div>

            <div class="col-8 col-lg-4">
                <p class="name mb-2">David Smithe</p>
                <p><strong>Pickup:</strong> Sheridan College Trafalgar campus</p>
                <p><strong>Drop off:</strong> Square One Go bus terminal</p>
                <p><strong>Date:</strong> April 5 2019</p>
                <p><strong>Pickup time:</strong> 1:15pm</p>
            </div>   
         </div>
        <div class="form-group row m-0 p-4 shadow-sm border-blue-left mb-3">
            <div class="col-4">
                <div class="img-container"><img src="{{ asset('img/woman1.jpg') }}"></div>
                <p class="rating">8.6</p>
                <i class="fas fa-star"></i>
            </div>
            <div class="col-5">
                    <p class="name mb-2">Julia Doe</p>
                    <p><strong>Pickup: </strong>Sheridan College Trafalgar campus</p>
                    <p><strong>Drop off: </strong>Square One Go bus terminal</p>
                    <p><strong>Date: </strong>April 2 2019</p>
                    <p><strong>Pickup time: </strong>3:30pm</p>
            </div>
        </div>

        <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
            <div class="col-4">
                <div class="img-container"><img src="{{ asset('img/woman2.jpg') }}"></div>
                <p class="rating">9.1</p>
                <i class="fas fa-star"></i>
            </div>

            <div class="col-5">
                    <p class="name mb-2">Allison Chung</p>
                    <p><strong>Pickup: </strong>Sheridan College Trafalgar campus</p>
                    <p><strong>Drop off: </strong>Square One Go bus terminal</p>
                    <p><strong>Date: </strong>May 28 2019</p>
                    <p><strong>Pickup time: </strong>4:00pm</p>
            </div>
        </div> -->
    </div>
    <!-- upcoming rides -->
    <div  id="upcomingRides">    
    @if (Auth::check() && Session::has('driverMode'))
        @foreach ($rides->currentRidesAsDriver as $currentRideAsDriver)
        <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
            <div class="col-4 col-lg-2">
                <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
                <!-- <p class="rating">8.9</p>
                <i class="fas fa-star"></i> -->
            </div>

            <div class="col-4 col-lg-10">
                <p class="name mb-2">Rider: {{$currentRideAsDriver->rider->firstName}} {{$currentRideAsDriver->rider->lastName}}</p>
                <p><strong>Pick up: </strong>{{$currentRideAsDriver->startPos}}</p>
                <p><strong>Drop off: </strong>{{$currentRideAsDriver->endPos}}</p>
                <p><strong>Date: </strong>{{$currentRideAsDriver->date}}</p>
                <p><strong>Pickup time: </strong>{{$currentRideAsDriver->startTime}}</p>
                <button id="" class="text-bold btn btn-primary text-center">
                    {{ __('Mark As Complete') }}
                </button> 
            </div>
        </div>
        @endforeach
    @else 
        @foreach ($rides->currentRidesAsRider as $currentRideAsRider)
        <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
            <div class="col-4 col-lg-2">
                <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
                <!-- <p class="rating">8.9</p>
                <i class="fas fa-star"></i> -->
            </div>

            <div class="col-4 col-lg-10">
                <p class="name mb-2">{{$currentRideAsRider->driver->firstName}} {{$currentRideAsRider->driver->lastName}}</p>
                <p><strong>Pick up: </strong>{{$currentRideAsRider->startPos}}</p>
                <p><strong>Drop off: </strong>{{$currentRideAsRider->endPos}}</p>
                <p><strong>Date: </strong>{{$currentRideAsRider->date}}</p>
                <p><strong>Pickup time: </strong>{{$currentRideAsRider->startTime}}</p>
                <button id="" class="text-bold btn btn-primary text-center">
                    {{ __('Cancel Trip') }}
                </button> 
            </div>
        </div>
        @endforeach
    @endif
    </div>


</div>
@endsection
