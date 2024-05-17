<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Myrick</title>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield('styles') <!-- Include custom styles here -->

</head>

<style>
    body{
        background: #F5F6FA;
    }
    .navbar {
        padding: 1.5rem;
    }
    .navbar-brand{
        font-size: 18px;
    }
    .dropdown-menu{
        background-color: #3873c5 !important;
    }

    .navbar-toggler,
    .nav-item a,
    .navbar a{
        color: white !important;
    }
    .nav-item a,
    .navbar a:hover {
    color: white;
    }
    .nav-item a:focus {
    color: white !important; /* Or any other color you want */
    }
    .navbar-nav a{
        text-decoration: none;
        font-size: 16px
    }
    .navbar-nav span {
        position: relative;
    }
    .navbar-nav span::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0%;
        width: 0;
        height: 2px;
        background-color: white;
        transition: width 0.3s ease; /* Transition for the width */
    }
    .navbar-nav span:hover::after {
        width: 100%; /* Expand the width on hover */
    }
    .navbar-nav.active-nav span::after {
        width: 100%;
    }
    .dropdown-menu a{
        padding-left: 10px
    }
    .dropdown-menu a:hover{
        background: rgba(0, 0, 0, 0.103) !important;
    }

    @media (max-width: 767px) {
        .navbar-nav span{
            margin-left: 0px !important; 
        }
    }

</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm background-container-gradient" >
            <div class="container">
                <a class="navbar-brand d-flex u-mr-16 " href="{{ url('/') }}">
                    <div><span class="material-icons">grid_view</span></div>
                    <span class="ps-1">View Home Page</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="border: 2px solid white;">
                    <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);" aria-hidden="true"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav {{ Request::is('home') ? ' active-nav' : '' }} me-auto">
                        <a class=" d-flex " href="{{ route('home')}}">
                        <span class=" u-ml-80">Dashboard</span>
                        </a>
                    </ul>
                    <ul class="navbar-nav {{ Request::is('manage_account') ? ' active-nav' : '' }} me-auto">
                        <a class=" d-flex " href="{{ route('manageAccount')}}">
                            <span class=" u-ml-80">Manage Accounts</span>
                        </a>
                    </ul>
                    <ul class="navbar-nav {{ Request::is('form_response') ? ' active-nav' : '' }} me-auto">
                        <a class=" d-flex " href="{{route('formResponse')}}">
                            <span class=" u-ml-80">Form Response</span>
                        </a>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown u-pr-16">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item u-p-5" href="#">
                                        Profile
                                    </a>
                                    <a class="dropdown-item u-p-5" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    <script>

    </script>
    @yield('script_content')

</body>
</html>
