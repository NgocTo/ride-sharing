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
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- OWL JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/owl.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
@section('sidebar')
<aside class="sidebar">
    <button class="navbar-toggler" id="sidebarCollapse" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars"></i></span>
    </button>
    <nav class="navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse flex-column" id="navbar">
            <!-- Profile -->
            <div class="bg-green text-center text-white" id="profile">
                <div>
                    <a href="{{ route( 'profile', [ 'id' => 1 ] ) }}">
                        <img src="{{ asset('img/default-profile.jpg') }}" alt="profile picture">
                    </a>
                </div>
                <h2 class="font-weight-bold h4">
                    <a href="{{ route( 'profile', [ 'id' => 1 ] ) }}">
                        @yield('username')
                    </a>
                </h2>

                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Become a rider</label>
                </div>
            </div>
            <ul class="navbar-nav flex-column pl-5 pl-lg-0 mt-2 lead">
                <li class="nav-item">
                    <a class="nav-link" href="#">My ride history</a>
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
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
@show

<main>
    <h1 class="text-green text-center mt-5">@yield('heading')</h1>
    @yield('content')
</main>

<!-- Dark Overlay element -->
<div class="overlay"></div>
    
    
@yield('script')
    
</body>
</html>