@extends('layouts.main')

@section('content')
@foreach($currentRides as $c)
<ul class="list-group">

    <li class="list-group-item mx-4 p-0">
        <div class="col-3">
            <div class="img-containerSmall"><img src="{{ asset('img/man1.jpg') }}"></div>
            
        </div>

        <div class="col-6">
                <p class="name mb-0">David Smithe</p>
                <p class="ratingSmall">8.6</p>
                <i class="fas fa-star starSmall"></i>
                <p><strong>Rules: </strong>Please do not have any cat hair on you, I am allergic.</p>
        <!-- </div>     -->
            <div class="col-3">
                <p>Pickup: fdsf</p>
                <p>Drop off: fds</p>
                <p class="text-green greenPrice">fdsf</p>
            </div>
        </div>  
    </li>
</ul>  

   
<div class="col-3">
    <p>Pickup: ${d.startPos}</p>
    <p>Drop off: ${d.endPos}</p>
    <p>Date: ${d.date}</p>
    <p>Pickup time: ${d.startTime}</p>
    <p class="text-green greenPrice">${d.estimatedPrice}</p>
</div>
@endforeach
@endsection