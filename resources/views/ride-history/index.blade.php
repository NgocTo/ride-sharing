@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4">Ride History</h2>

<div class="container p-0">

    <div class="form-group row m-0">
        <div class="btn-group btn-group-toggle col" data-toggle="buttons">
            <label class="btn btn-secondary active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"checked> Past
            </label>
           
            <label class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"> Upcoming
            </label>
        </div> 
    </div>
<!-- next section -->
<div class="form-group row m-0 p-2 shadow-sm border-green-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/angela-1.jpg') }}"></div>
    </div>

    <div class="col-8">
            <p>David Smithe</p>
    </div>     
        
</div>

<div class="form-group row m-0 p-2 shadow-sm border-blue-left mb-3">
        
    <div class="col-4">
        <div class="img-container"><img src="{{ asset('img/angela-1.jpg') }}"></div>
    </div>

    <div class="col-8">
            <p>David Smithe</p>
    </div>     
        
</div>






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