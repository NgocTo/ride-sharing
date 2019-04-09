@extends('layouts.main')
@section('sidebar')

@endsection
@section('content')

<h2 class="text-white bg-green text-center m-0 p-4"><a class="backBtn" href="{{ route('/') }}"><i class="fas fa-chevron-left"></i></a>Settings</h2>

<div class="container p-0">
<div class="form-group row m-0 p-4">
        
        <div class="col-5">
            <div class="img-container"><img src="{{ asset('img/default-profile.jpg') }}" alt="Avatar"></div>
        </div>
    
        <div class="col-7">
            <p class="name mb-2">John Doe<i class="fas fa-edit ml-3"></i></p>
                <p>Toronto, ON</p>
        </div>     
            
</div>
    
<!-- next section -->

<div class="form-group row m-0">
   <!-- <div class="col"> -->
    <ul  id="settings" class="list-group">
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-bell"></i>Notifications</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-heart"></i>Favourites</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 far fa-credit-card"></i>Payment methods</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-lock"></i>Privacy</a></li>
        <li class="list-group-item"><a href="#"><i class="mr-3 fas fa-question-circle"></i>Help</a></li>
    </ul>
      
</div>
</div>
