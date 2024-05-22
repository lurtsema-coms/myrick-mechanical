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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sideNav.css') }}">

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
    <div class="toggle_top" style="display: none">
        <i id="sidebar-menu-btn2">
            <span class="material-symbols-outlined menu_top" style="color: #039bf4">menu</span>
        </i>
    </div>
    <div class="u-sidebar" >
        <div class="sidebar-top">
            <div class="sidebar-logo">
                <img src="{{ asset('img/logo.png') }}" class="logo-img" alt="">
            </div>
            <i class="bx" id="sidebar-menu-btn"><span class="material-symbols-outlined">menu</span></i>
        </div>
        <div class="sidebar-user">
            @if (auth()->user()->img == null)
                <img class="user-img" src="{{ asset('img/user.png') }}" alt="" id="img_user_photo" loading="lazy">
            @else
                <img class="user-img" src="{{ asset('profile_picture/img/'.auth()->user()->img ) }}" alt="" id="img_user_photo" loading="lazy">
            @endif
            <div>
                <p class="sidebar-username">{{ Auth::user()->name }}</p>
                <p class="sidebar-role">Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="{{ url('/') }}">
                    <i class="bx"><span class="material-symbols-outlined">team_dashboard</span></i>
                    <span class="nav-item">Website</span>
                </a>
                <span class="tooltip">Website</span>
            </li>
            <li >
                <a href="{{ route('login') }}" class="{{ Request::is('home') ? ' active-nav' : '' }}">
                    <i class="bx"><span class="material-symbols-outlined">dashboard</span></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('manageAccount')}}" class="{{ Request::is('manage_account') ? ' active-nav' : '' }}">
                    <i class="bx"><span class="material-symbols-outlined">person_add</span></i>
                    <span class="nav-item">Acounts</span>
                </a>
                <span class="tooltip">Manage Accounts</span>
            </li>
            <li>
                <a href="{{ route('profile')}}" class="{{ Request::is('profile') ? ' active-nav' : '' }}">
                    <i class="bx"><span class="material-symbols-outlined">manage_accounts</span></i>
                    <span class="nav-item">Profile</span>
                </a>
                <span class="tooltip">My Profile</span>
            </li>
            <li class="logout-container">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="bx"><span class="material-symbols-outlined">logout</span></i>
                    <span class="nav-item">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
    
    <div class="main-content-wrapper">
        <div class="main-content">
            <div class="u-topbar">
                <div class="topbar-container">
                    <span>Welcome To Myrick Mechanical System Access</span>
                    <h3>@yield('module-name')</h3>
                </div>
            </div>
            <div class="u-body-content">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleResize() {
            const sidebar = document.querySelector('.u-sidebar');
            if (window.innerWidth <= 1099) {
                sidebar.classList.remove('active');
            }
        }
        window.addEventListener('resize', handleResize);
        handleResize();

        let btn = document.querySelector('#sidebar-menu-btn')
        let btn2 = document.querySelector('#sidebar-menu-btn2')
        let siderbar = document.querySelector('.u-sidebar')
    
        btn.onclick = function (){
            console.log("test");
            siderbar.classList.toggle('active')
        }

        btn2.onclick = function(){
            siderbar.classList.toggle('display-side')
        } 
    </script>
    @yield('script_content')

</body>
</html>
