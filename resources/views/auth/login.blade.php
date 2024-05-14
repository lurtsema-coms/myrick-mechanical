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
    .login-container{
        width: 87rem;
        padding: 20px;
        margin: auto;
    }
    .main-card-body{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        max-width: 87rem;
        min-height: 70vh;
        overflow: auto;
    }
    .login-card-container{
        max-width: 43.5rem;
        width: 100%
    }
    .login-card-container img {
        max-width: 100%;
        width: 500px;
    }
    .login-card-body{
        width: 100%;
        max-width: 500px;
        height: 450px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        overflow: auto;
        padding:20px;
        background: #ffffff;
        border-radius: 20px;
    }
    .background-container-gradient {
        background: linear-gradient(to left, #1F51A4, #0987CF);
    }

    .login-input{
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: var(--bs-body-color);
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
    }

    .login-input:focus {
        outline: none;
        border-color: #1C58A9; 
    }
    .login-title-text{
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }
    .login-title-text span{
        font-family: 'Roboto', sans-serif;
    }

    .remember-password-containter{
        gap: 5px;
    }

    .button-container button{
        width: 100%;
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
                            <div class="remember-password-containter mb-4">
                                <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                &nbsp
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="button-container">
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
