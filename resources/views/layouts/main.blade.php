<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#A52A2A" />
    <meta name="author" content="JAWA" />
    <meta name="description" content="An application for ride sharing">
    <meta name="keywords" content="ride sharing, carpool">
    <meta name="copyright" content="JAWA, 2019" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BeepBeep</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    
    <script src="{!! mix('js/app.js') !!}"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- OWL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/owl.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
@section('sidebar')
    <button class="openClick" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="openClick"><i class="fas fa-bars shadow"></i></span></button>
    <aside id="mySidenav" class="sidenav">
        @if (isset($user)) 
        <!-- Profile -->
        <div class="bg-green text-center text-white" id="profile">
            <div>
                <a href="{{ route( 'user.index' ) }}" class="text-center">
                   <img src="{{ asset('img/default-profile.jpg') }}" alt="profile picture">
                </a>
            </div>
            <h2 class="font-weight-bold h4">
                <a href="{{ route( 'user.index' ) }}">{{$user->firstName}} {{$user->lastName}}</a>
            </h2>
            
            <div class="switch-container">
            <form>
                <label class="switch">
                    @if (Auth::check() && ($user->ifDriver === 1) && Session::has('driverMode'))
                    <input type="checkbox" id="toggleBtn" name="toggleBtn" checked >
                    @else
                    <input type="checkbox" id="toggleBtn" name="toggleBtn" >
                    @endif
                    <span class="slider round"></span>
                </label>
            </form>
            </div>

            <!-- <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Become a rider</label>
            </div> -->
        </div>
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <ul class="navbar-nav flex-column pl-5 pl-lg-0 mt-2 lead">
            <li class="nav-item">
                <a class="nav-link" href="ride-history">My Ride history</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Payment methods</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Favourites</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Regulations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="settings">Settings</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
                <form id="frm-logout" class="text-right"action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        
        @else 
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <ul class="navbar-nav flex-column pl-5 pl-lg-0 mt-4 lead">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        </ul>
        @endif
    </aside>

   <div id="overlay"></div>
@show

<main>
    @yield('content')
</main>

    
    
@yield('script')
    
</body>
</html>