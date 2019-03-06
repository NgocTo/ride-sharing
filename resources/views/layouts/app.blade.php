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
    <title>BeepBeep</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid row">
        <aside>
            <nav class="navbar-expand-lg navbar-light">
            <button class="navbar-toggler" id="sidebarCollapse" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <!-- <i class="fas fa-bars"></i> -->
            </button>
            
            <div class="collapse navbar-collapse flex-column" id="navbarNav">
                <!-- Profile -->
                <div class="bg-green text-center text-white" id="profile">
                    <div><img src="{{ asset('img/default-profile.jpg') }}" alt="profile picture"></div>
                    <h2 class="font-weight-bold h4">@yield('username')</h2>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Become a rider</label>
                    </div>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your ride history</a>
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
        <main class="col">
            <h1 class="text-green text-center">@yield('heading')</h1>
            @yield('content')
        </main>
        <!-- Dark Overlay element -->
        <div class="overlay"></div>
    </div>
    <hr />
    <script src="{{ asset('js/script.js') }}"></script>
    <footer class="container-fluid text-right">
        <p>Copyright by JAWA</p>
    </footer>
</body>
</html>