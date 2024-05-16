<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Myrick Mechanical')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    @yield('styles')
</head>
<body class="position-relative">
    @yield('content')
    <section class="footer" style="margin-top: 20rem">
        <div class="section-wrapper mx-3 mt-3 mx-md-5 mt-md-5 px-3 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <div class="partners row row-cols-1 row-cols-xl-6 gap-3">
                <div class="partner-card col flex-grow-1 mt-3 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('images/Partners/WGeo.png') }}" alt="">
                </div>
                <div class="partner-card col flex-grow-1 mt-3 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('images/Partners/Kwik.png') }}" alt="">
                </div>
                <div class="partner-card col flex-grow-1 mt-3 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('images/Partners/Pipefitters LU.png') }}" alt="">
                </div>
                <div class="partner-card col flex-grow-1 mt-3 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('images/Partners/Ruud.png') }}" alt="">
                </div>
                <div class="partner-card col flex-grow-1 mt-3 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('images/Partners/Evergy.png') }}" alt="">
                </div>
            </div>
            <div class="social-media d-flex justify-content-center align-items-center gap-3 mt-5">
                <a href="" class="text-decoration-none social-media-link"><img class="img-fluid" src="{{ asset('images/Icons/Fb.png') }}" alt=""></a>
                <a href="" class="text-decoration-none social-media-link"><img class="img-fluid" src="{{ asset('images/Icons/Ig.png') }}" alt=""></a>
                <a href="" class="text-decoration-none social-media-link"><img class="img-fluid" src="{{ asset('images/Icons/Tik.png') }}" alt=""></a>
            </div>
            <p class="text-center text-blue mt-2"> <a class="text-blue" href="{{ url('/') }}">Myrick Mechanical LLC | All Rights Reserved</a> | <a class="text-blue" href="{{ route('privacy_policy') }}">Privacy Policy | Terms</a></p>
        </div>
    </section>
    <img class="gear-bg w-100 position-absolute" src="{{asset('images/Elements/Footer Gear 2.svg')}}" alt="">
    @yield('script_content')
</body>
</html>