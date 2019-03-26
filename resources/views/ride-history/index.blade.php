@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')
<div>
<h2 class="text-white bg-green text-center m-0 p-4">Ride History</h2>
</div>

<div class="container p-0">
    <div class="row">
    <!-- Toggle buttons -->
        <div class="btn-group btn-group-toggle col" data-toggle="buttons">
            <label class="btn btn-primary active p-4">
                <input type="radio" name="options" id="past" autocomplete="off"checked> Past
            </label>
            <label class="btn btn-primary p-4">
                <input type="radio" name="options" id="upcoming" autocomplete="off"> Upcoming
            </label>
            
        </div>
    </div>
</div>