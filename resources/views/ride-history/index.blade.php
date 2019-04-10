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
            <div  class="btn-group btn-group-toggle col p-0" data-toggle="buttons">
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
        <div class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
            <div class="col-4">
                <div class="img-container"><img src="{{ asset('img/man1.jpg') }}" alt="Avatar"></div>
                <p class="rating">8.9</p>
                <i class="fas fa-star"></i>
            </div>

            <div class="col-5">
                <p class="name mb-2">David Smithe</p>
                <p><strong>Pickup:</strong> Sheridan College Trafalgar campus</p>
                <p><strong>Drop off:</strong> Square One Go bus terminal</p>
                <p><strong>Date:</strong> April 5 2019</p>
                <p><strong>Pickup time:</strong> 1:15pm</p>
            </div>

            <div class="col-3">
            @if (Auth::check() && Session::has('driverMode'))
                <button id="" class="text-bold btn btn-primary text-center btn-block">
                    {{ __('Mark As Complete') }}
                </button> 
            @else
                <label for="rating">Rating</label>
                <input type="radio" name="rating" id="rating" value="1">1
                <input type="radio" name="rating" id="rating" value="2">2
                <input type="radio" name="rating" id="rating" value="3">3
                <input type="radio" name="rating" id="rating" value="4">4
                <input type="radio" name="rating" id="rating" value="5">5
                <button id="" class="text-bold btn btn-secondary text-center btn-block">
                {{ __('Leave a Rating') }}
            </button> 
            @endif
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

        <div class="col-3">
        @if (Auth::check() && Session::has('driverMode'))
            <button id="" class="text-bold btn btn-primary text-center btn-block">
                {{ __('Mark As Complete') }}
            </button> 
        @else
            <label for="rating">Rating</label>
                <input type="radio" name="rating" id="rating" value="1">1
                <input type="radio" name="rating" id="rating" value="2">2
                <input type="radio" name="rating" id="rating" value="3">3
                <input type="radio" name="rating" id="rating" value="4">4
                <input type="radio" name="rating" id="rating" value="5">5
            <button id="" class="text-bold btn btn-secondary text-center btn-block">
                {{ __('Leave a Rating') }}
            </button> 
        @endif
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

        <div class="col-3">
        @if (Auth::check() && Session::has('driverMode'))
            <button id="" class="text-bold btn btn-primary text-center btn-block">
                {{ __('Mark As Complete') }}
            </button> 
        @else 
            <label for="rating">Rating</label>
                <input type="radio" name="rating" id="rating" value="1">1
                <input type="radio" name="rating" id="rating" value="2">2
                <input type="radio" name="rating" id="rating" value="3">3
                <input type="radio" name="rating" id="rating" value="4">4
                <input type="radio" name="rating" id="rating" value="5">5
            <button id="" class="text-bold btn btn-secondary text-center btn-block">
                {{ __('Leave a Rating') }}
            </button> 
        </div>
        @endif      
        
    </div>
    </div>
    <!-- upcoming rides -->
    <div  id="upcomingRides" class="form-group row m-0 p-4 shadow-sm border-green-left mb-3">
            
        <div class="col-4">
            <div class="img-container"><img src="{{ asset('img/man-with-dog.jpg') }}" alt="Avatar"></div>
            <p class="rating">8.9</p>
            <i class="fas fa-star"></i>
        </div>

        <div class="col-4">
                <p class="name mb-2">Noah Browne</p>
                <p><strong>Pickup:</strong>Erin Mills Town Centre</p>
                <p><strong>Drop off:</strong>374 Blue Creek Crt</p>
                <p><strong>Date:</strong> April 5 2019</p>
                <p><strong>Pickup time:</strong> 12:00pm</p>
        </div>

        <div class="col-4">
            <button id="" class="text-bold btn btn-primary text-center btn-block">
                {{ __('Mark As Complete') }}
            </button> 
        </div>      
            
    </div>


</div>
@endsection
