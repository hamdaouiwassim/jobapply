<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JobApply') }}</title>

    <title>Jobpply</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/animate.css")}}">
    
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{ asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{ asset("css/jquery.timepicker.css")}}">

    
    <link rel="stylesheet" href="{{ asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/icomoon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/style.css")}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" >

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    JobApply
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->roles == "Admin")
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        Mon profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('usersListe') }}">
                                        Liste utilisateurs
                                    </a>
                                   
                                    @elseif (Auth::user()->roles == "Societe")
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        Mon profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('offers') }}">
                                        Mes Offres
                                    </a>
                                    <a class="dropdown-item" href="{{ route('SocieteDemandes')}}">
                                        Mes Demandes
                                    </a>
                                    @elseif ( Auth::user()->roles == "Condidate" )
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        Mon profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('mescondidatures') }}">
                                        Mes Condidatures
                                    </a>
                                    <a class="dropdown-item" href="{{ route('offersCondidates') }}">
                                        Les offres
                                    </a>
                                    <a class="dropdown-item" href="{{ route('SocieteAll') }}">
                                        Les societes
                                    </a>
                                    @else
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        Mon profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('mesdemandes') }}">
                                        Mes Demandes
                                    </a> 
                                    <a class="dropdown-item" href="{{ route('SocieteAll') }}">
                                        Les societes
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset("js/jquery.min.js")}}"></script>
    <script src="{{ asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
    <script src="{{ asset("js/popper.min.js")}}"></script>
    <script src="{{ asset("js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("js/jquery.easing.1.3.js")}}"></script>
    <script src="{{ asset("js/jquery.waypoints.min.js")}}"></script>
    <script src="{{ asset("js/jquery.stellar.min.js")}}"></script>
    <script src="{{ asset("js/owl.carousel.min.js")}}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{ asset("js/aos.js")}}"></script>
    <script src="{{ asset("js/jquery.animateNumber.min.js")}}"></script>
    <script src="{{ asset("js/scrollax.min.js")}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset("js/google-map.js")}}"></script>
    <script src="{{ asset("js/main.js")}}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
</body>
</html>
