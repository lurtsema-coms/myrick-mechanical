@extends('layouts.app-layout')
@section('title', 'Myrick Mechanical')
@section('content')
    @if(session('success'))
    <div class="top-0 alert alert-success alert-dismissible fade show position-absolute w-100" role="alert">
        <span class="fw-semibold text-dark">Thank you for contacting us!</span class="fw-semibold"> We'll get back to you as soon as possible.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <section class="hero-section d-flex flex-column align-item-center justify-content-center position-relative">
        <div class="video-background">
            <video autoplay muted loop>
                <source src="{{ asset('videos/video-background.mp4') }}" />
            </video>
        </div>
        <div class="m-3 section-wrapper hero-content m-sm-5">
            <h1 class="text-white fw-light fs-2">
                EXCEPTIONAL HVAC SERVICES FOR <br/>
                <span class="text-white fw-bold fs-1">INDUSTRIAL, COMMERCIAL, AND RESIDENTIAL</span> 
            </h1>
            <p class="text-white fs-6">Whether it’s HVAC installation, maintenance, or repairs, we’ve got you covered.</p>
            <a href="#contact-form-section" class="px-3 py-2 mt-3 border-0 button-action text-blue text-decoration-none bg-light fw-bold fs-4 rounded-pill px-sm-5 text-nowrap">BOOK NOW</a>
        </div>
    </section>
    <section class="logo-section">
        <div class="p-3 m-auto logo-wrapper bg-light d-flex justify-content-center align-items-center">
            <img class="logo-photo img-fluid" src="{{ asset('images/Partners/Logo.png') }}" alt="">
        </div>
    </section>
    <nav class="p-3 navbar-list w-100 px-sm-5 bg-light">
        <button class="gap-1 rounded nav-hamburger d-flex d-lg-none flex-column justify-content-center align-items-center" type="button">
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
        </button>
        <ul class="m-0 navbar-ul w-100 px-md-3 d-lg-flex flex-column flex-lg-row justify-content-between align-items-center list-unstyled">
            <li class="text-center"><a href="#" class="text-decoration-none text-blue fw-bold fs-4" href="">HOME</a></li>
            <li class="text-center"><a href="#services-section" class="text-decoration-none text-blue fw-bold fs-4" href="">SERVICES</a></li>
            <li class="text-center"><a href="#customer-satisfaction-section" class="text-decoration-none text-blue fw-bold fs-4" href="">ABOUT</a></li>
            <li class="text-center"><a href="#contact-us-section" class="text-decoration-none text-blue fw-bold fs-4" href="">CONTACT</a></li>
            <li class="text-center"><a href="#our-works-section" class="text-decoration-none text-blue fw-bold fs-4" href="">WORKS</a></li>
            @if (env('BLOG_LINK'))
            <li class="text-center"><a href="{{ env('BLOG_LINK') }}" class="text-decoration-none text-blue fw-bold fs-4" href="">BLOGS</a></li>
            @endif
        </ul>
    </nav>
    <section id="promo-section" class="promo-section">
        <div class="m-3 section-wrapper m-sm-5">
            <div class="px-0 py-3 m-0 promo-card-wrapper rounded-4 bg-dark">
                <div class="px-3 py-2 promo-card bg-light rounded-4 d-flex flex-column">
                    <div class="d-flex flex-column flex-xl-row align-items-center justify-content-center justify-content-xl-around">
                        <div class="promo-left-side d-flex flex-column align-items-center">
                            <div class="promo-details">
                                <h2 class="m-0 text-center contact-us-today fw-semibold text-blue">Contact us today <br/><span class="fw-bold text-blue fs-1">and receive a</span></h2>
                                <div class="p-3 my-3 voucher-card bg-blue rounded-3 d-flex flex-column">
                                    <h1 class="text-center cash-value">$200</h1>
                                    <h2 class="text-center fw-semibold">Restaurant Cash<br/>Value Voucher.</h2>
                                </div>
                            </div>
                            <a target="_blank" href="{{ url('/promo-contact-form') }}" class="px-3 py-2 border-0 button-action promo-book-btn text-light px-sm-5 fs-1 fw-bolder rounded-pill text-nowrap text-decoration-none">SIGN UP HERE</a>
                        </div>
                        <div class="promo-right-side">
                            <img class="promo-guy img-fluid" src="{{ asset('images/Photos/Promo Guy.png') }}" alt="">
                        </div>

                    </div>
                    <p class="mt-3 text-center text-blue fw-semibold fst-italic">For over 80,000 participating restaurants worldwide</p>
                </div>
            </div>
        </div>
    </section>
    <section id="customer-satisfaction-section" class="customer-satisfaction-section">
        <div class="m-3 section-wrapper m-sm-5 px-lg-5 d-flex flex-column align-items-center justify-content-center">
            <p class="mb-1 text-center fs-5 fst-italic">“This is why we do what we do”</p>
            <h1 class="text-center fw-bold fs-2">CUSTOMER SATISFACTION GUARANTEED!</h1>
            <div class="my-5 d-flex flex-column flex-xl-row customer-satisfaction-content justify-content-center align-items-center">
                <div class="mx-auto customer-satisfaction-left-side align-self-xl-center d-flex align-items-center justify-content-center">
                    <img width="1200" class="aircon-guy rounded-4" src="{{ asset('images/Photos/team-photo.png') }}" alt="">
                </div>
                <div class="accreditation-wrapper">
                    <p class="py-3 m-0 ps-3 fs-6 lh-sm">With our team of skilled technicians
                        and commitment to going beyond
                        expectations, you can trust us to keep
                        your indoor environment comfortable
                        and safe.
                    </p>
                    <div class="px-4 py-3 mx-auto accreditation-img-wrapper bg-light mx-xl-0">
                        <img class="accreditation-img img-fluid w-100" src="{{ asset('images/Icons/BBB Accreditation.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-section" class="mb-5 services-section">
        <div class="px-3 m-3 section-wrapper m-md-5 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center section-title fw-bold">SERVICES</h1>
            <p class="px-1 mx-0 text-center">
                Whether you’re a homeowner seeking efficient heating and cooling solutions or a commercial developer requiring large-scale HVAC systems, our dedicated team is committed to delivering you a top-notch service.
            </p>
            <div class="gap-5 mb-5 row row-cols-lg-3 row-cols-xxl-4 justify-content-between">
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/AC.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">AIR CONDITIONING</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Expert installation, repair, and maintenance for cool, comfortable indoor environments in homes and businesses.</p>
                    </div>
                </div>
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Heating.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">HEATING</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Comprehensive solutions for efficient heating systems, ensuring warmth and comfort during colder seasons. </p>
                    </div>
                </div>
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Ref.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">REFRIGERATION</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Installation, upkeep, and repair of commercial refrigeration units for optimal storage and display.</p>
                    </div>
                </div>
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Humidification.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">HUMIDIFICATION</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Tailored humidifier/dehumidifier installations and maintenance to enhance indoor air quality and comfort.</p>
                    </div>
                </div>
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper position-relative">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Geo.png') }}" alt="">
                                <img class="waterless-geo-img img-fluid rounded-1" src="{{ asset('images/Partners/WGeo.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">GEOTHERMAL</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Sustainable geothermal heating and cooling systems for eco-friendly temperature control solutions.</p>
                    </div>
                </div>
                <div class="px-0 py-4 services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 bg-dark rounded-5 position-relative">
                    <div class="p-3 services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Maintenance.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">MAINTENANCE</h6>
                        <p class="text-center text-blue fs-6 lh-sm">Proactive upkeep services to maximize HVAC system efficiency and lifespan, minimizing downtime and repair costs.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="px-3 py-2 mt-3 border-0 button-action text-blue bg-light text-decoration-none fw-bold fs-4 rounded-pill px-sm-5 text-nowrap">LEARN MORE</a>
        </div>
    </section>
    <section style="margin-top: 5rem;">
        <h1 class="text-center section-title fw-bold">HVAC SYSTEMS</h1>
        <div class="px-3 m-3 section-wrapper m-md-5 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <div class="swiper" id="swiper-work-photos">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-4 position-relative" style="max-width: 500px; min-width: 30%; aspect-ratio: 1; margin: auto;">
                            <img style="min-height:100%; min-width: 100%; object-fit:cover" class=" position-absolute" src="{{ asset('images/works/1.jpeg') }}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-4 position-relative" style="max-width: 500px; min-width: 30%; aspect-ratio: 1; margin: auto;">
                            <img style="min-height:100%; min-width: 100%; object-fit:cover" class=" position-absolute" src="{{ asset('images/works/2.jpeg') }}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-4 position-relative" style="max-width: 500px; min-width: 30%; aspect-ratio: 1; margin: auto;">
                            <img style="min-height:100%; min-width: 100%; object-fit:cover" class=" position-absolute" src="{{ asset('images/works/3.jpeg') }}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-4 position-relative" style="max-width: 500px; min-width: 30%; aspect-ratio: 1; margin: auto;">
                            <img style="min-height:100%; min-width: 100%; object-fit:cover" class=" position-absolute" src="{{ asset('images/works/4.jpeg') }}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-4 position-relative" style="max-width: 500px; min-width: 30%; aspect-ratio: 1; margin: auto;">
                            <img style="min-height:100%; min-width: 100%; object-fit:cover" class=" position-absolute" src="{{ asset('images/works/5.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section id="our-works-section" class="our-works-section py-lg-5">
        <div class="px-3 m-3 section-wrapper m-md-5 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <div class="mb-5 d-flex flex-column flex-md-row align-items-center justify-content-center w-100 gap-md-3">
                <h1 class="text-center fw-bold text-nowrap">WE WORK WITH</h1>
                <img height="70px" src="{{ asset('images/Partners/ruud-logo.png') }}" alt="ruud logo">
            </div>
            <div class="swiper" id="swiper-works">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-Htg-Blankets (1).mp4') }}" />
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-PP-Gen_XtremeHob (1).mp4') }}" />
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-Htg-Bundled (1).mp4') }}" />
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-Clg-IceRink (1).mp4') }}" />
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-Clg-Picnic (1).mp4') }}" />
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video class="w-100 rounded-4" autoplay muted loop>
                            <source src="{{ asset('videos/RU-SM-Gen-EcoNet (1).mp4') }}" />
                        </video>
                    </div>
                    {{-- <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/BG_Roof-1.webp') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/DSC_4151-RUUD-Logo.webp') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/BG_Roof-18.webp') }}" />
                    </div> --}}
                    {{-- <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/photos from old web (2).webp') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/photos from old web (3).webp') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/photos from old web (4).webp') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded-4" src="{{ asset('images/Photos/photos from old web (5).webp') }}" />
                    </div> --}}
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section id="testimonials-section" class="testimonials-section">
        <div class="px-1 py-5 m-1 section-wrapper m-lg-5 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-2 text-center fw-bold mb-lg-5">TESTIMONIALS</h1>
            <div class="swiper" id="swiper-testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="p-0 py-4 testimonial-card-wrapper col rounded-5 flex-grow-1">
                            <div class="p-1 testimonial-card h-100 p-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="p-2 text-white material-icons fs-1 bg-blue rounded-circle">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Stacy V.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-center text-dark fs-6 lh-sm">
                                    We built a log home and were at a loss on what to do for heating and cooling. Travis Myrick came to our house gave us ideas and solved our problem. We love our mini splits. We highly recommend him, his workers and his company. They are the best!                        
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-0 py-4 testimonial-card-wrapper col rounded-5 flex-grow-1">
                            <div class="px-1 py-5 testimonial-card h-100 px-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="p-2 text-white material-icons fs-1 bg-blue rounded-circle">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Nancy H.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-center text-dark fs-6 lh-sm">
                                    Myrick Mechanical LLC of Pleasanton KS. The Company installed the HVAC vents to the East side of the House. He was very professional, did the job quickly and reasonably priced. I would Highly recommend this company. Very good experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-0 py-4 testimonial-card-wrapper col rounded-5 flex-grow-1">
                            <div class="px-1 py-5 testimonial-card h-100 px-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="p-2 text-white material-icons fs-1 bg-blue rounded-circle">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Stephanie S.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-center text-dark fs-6 lh-sm">
                                    Travis gave us an estimate and then was able to complete the job in good time. He was thorough and things were picked up and clean when he was done. I highly recommend Myrick Mechanical.
                                </p>
                            </div>
                        </div>
                    </div>
                    @if ($reviews)
                    @foreach ($reviews['reviews'] as $review)
                    <div class="swiper-slide">
                        <div class="p-0 py-4 testimonial-card-wrapper col rounded-5 flex-grow-1">
                            <div class="px-1 py-5 testimonial-card h-100 px-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="p-2 text-white material-icons fs-1 bg-blue rounded-circle">person</i>
                                <h5 class="customer-name text-dark fw-semibold">{{ $review['author_name'] }}</h5>
                                <p class="stars text-warning">{{ str_repeat('★', $review['rating']) }}{{ str_repeat('☆', 5 - $review['rating']) }}</p>
                                <p class="text-center text-dark fs-6 lh-sm">
                                    {!! nl2br(e($review['text']))  !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section id="contact-us-section" class="contact-us-section">
        <div class="px-1 m-1 section-wrapper m-md-5 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center section-title fw-bold">SPEAK TO US TODAY!</h1>
            <p class="px-1 mx-0 mb-5 text-center text-white">For more information on our HVAC services, contact our technicians today. <br/>
                Call us for a free, no-obligation estimate for residential and commercial HVAC services.
            </p>
            <div class="gap-5 w-100 row row-cols-xl-3">
                <div class="gap-3 p-0 contact-left-side col d-flex flex-column justify-content-start align-items-center flex-grow-1">
                    <div>
                        <p class="mb-0 text-center">We also serve the greater Kansas City metro area!</p>
                        <h3 class="text-center">Pleasanton, Kansas</h3>
                    </div>
                    <div style="overflow:hidden;resize:none;max-width:100%;width:90%; min-height: 500px; aspect-ratio: 5 / 3;">
                        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%; overflow:hidden border-radius: 1rem;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=myrick+mechanical+&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="my-codefor-googlemap" href="https://www.bootstrapskins.com/themes" id="auth-map-data">premium bootstrap themes</a>
                        <style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style>
                    </div>
                    <h3 class="text-center">CALL</h3>
                    <button class="px-3 py-2 mt-3 border-0 text-blue fw-bold fs-4 rounded-pill px-sm-5 text-nowrap">(913) 713-3734</button>
                </div>
                <div id="contact-form-section" class="contact-right-side col">
                    <h3 class="text-center">Contact Form</h3>
                    <form action="{{ route('formResponse.store') }}" method="POST" class="gap-2 d-flex flex-column justify-content-start align-items-center flex-grow-1" autocomplete="off">
                        @csrf
                        <div class="px-0 py-1 rounded contact-input-wrapper w-100">
                            <input class="p-2 rounded contact-form-input w-100" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="px-0 py-1 rounded contact-input-wrapper w-100">
                            <input class="p-2 rounded contact-form-input w-100" name="email" type="email" placeholder="Email" required>
                        </div>
                        <div class="px-0 py-1 rounded contact-input-wrapper w-100">
                            <textarea class="p-2 rounded contact-form-input w-100" name="message" name="" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <button class="px-3 py-2 mt-3 border-0 button-action text-blue fw-bold fs-4 rounded-pill px-sm-5 text-nowrap">SEND</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

@if(count($Ads1))
    <section class="ad_container">
        <div class="ad_slider-wrapper">
            <div class="ad_slider">
                @foreach ($Ads1 as $index => $Ad1)
                <a href="{{$Ad1->link}}" target="_blank"><img id="ad_{{$Ad1->id}}" src="{{ asset($Ad1->file_path) }}" alt=""></a>
                @endforeach
            </div>
            <div class="ad_slider-nav">
                @foreach ($Ads1 as $index => $Ad1)
                <a href="#ad_{{$Ad1->id}}"></a>
                @endforeach
            </div>
        </div>
    </section>
@endif
@endsection


@section('script_content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiperWorks = new Swiper("#swiper-works", {
            grabCursor: true,
            centeredSlides: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });

        const swiperWorksPhotos = new Swiper("#swiper-work-photos", {
            grabCursor: true,
            centeredSlides: false,
            autoplay: {
                delay: 2500, 
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });

        const swiperTestimonials = new Swiper("#swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 500,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
            },
        });

        
        $('.nav-hamburger').on('click', function() {
            $('.navbar-ul').slideToggle();
        });

        $('.navbar-ul a').on('click', function() {
            $('.navbar-ul').slideToggle();
        });

        let timeout;
        let lastScrollTop = $(window).height() + $('.navbar-list').height();

        $(window).scroll(function(event) {

            $('.gauge-section').stop(true, true).fadeIn();
            
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                $('.gauge-section').stop(true, true).fadeOut();
            }, 1000); 


        //     const windowWidth = $(window).width();
        //     const isVisible = checkVisibility();
        //     if (windowWidth >= 992 && !isVisible) {
        //         let st = $(window).height() + $('.navbar-list').height() + $(this).scrollTop();
        //         if (st > lastScrollTop){
        //             $('.navbar-list').css('transform', 'translateY(-100%)');
        //         } else {
        //             $('.navbar-list').css('transform', 'translateY(0)');
        //         }
        //         lastScrollTop = st;
        //     }
        });

        function checkVisibility() {
            const $box = $('.hero-section');
            const $window = $(window);

            const viewportTop = $window.scrollTop();
            const viewportBottom = viewportTop + $window.height();

            const boxTop = $box.offset().top;
            const boxBottom = boxTop + $box.height();
            return boxBottom > viewportTop && boxTop < viewportBottom;
        }

        $(document).ready(function () {
            const $slider = $('.ad_slider');
            const $slides = $('.ad_slider a'); // Select the anchor tags instead of img
            let currentIndex = 0;
            const intervalTime = 3000;

            function slideToIndex(index) {
                const slideWidth = $slider.width();
                $slider.animate({
                    scrollLeft: index * slideWidth
                }, 'smooth');
            }

            function autoSlide() {
                currentIndex = (currentIndex + 1) % $slides.length;
                slideToIndex(currentIndex);
            }

            let slideInterval = setInterval(autoSlide, intervalTime);

            $slider.on('mouseover', () => clearInterval(slideInterval));
            $slider.on('mouseout', () => slideInterval = setInterval(autoSlide, intervalTime));
        });

    </script>
@endsection