<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.png') }}">

</head>
<style>
   * {
        
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        display: flex; 
        justify-content: center;
        align-items: center; 
    }

</style>
<body class="">
    <div class="login-container">
        <div class="main-card-body d-flex">
            <div class="login-card-container d-flex justify-content-center align-items-center background-container-gradient">
                <div class="login-card-body d-flex justify-content-center align-items-center">
                    <form method="POST" class="login-form p-4 w-100" action="{{ route('login') }}">
                        @csrf
                        <div class="login-title-text">
                            <label><span >System</span>&nbsp<span style="color: #1C58A9">Access</span></label>
                        </div>
                        <label for="email" class="mb-1">{{ __('Email Address') }}</label>
                        <div>
                            <input id="email" type="email" class="login-input mb-2  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="password" class="mb-1">{{ __('Password') }}</label>
                        <div>
                            <input id="password" type="password" class="login-input mb-1  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="button-container mt-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-card-container d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
