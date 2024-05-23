@extends('layouts.app-layout')
@section('title', 'Myrick Mechanical')
@section('content')
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-absolute top-0 w-100" role="alert">
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
        <div class="section-wrapper hero-content m-3 m-sm-5">
            <h1 class="text-white fw-light fs-2">
                EXCEPTIONAL HVAC SERVICES FOR <br/>
                <span class="fw-bold text-white fs-1">INDUSTRIAL, COMMERCIAL, AND RESIDENTIAL</span> 
            </h1>
            <p class="text-white fs-6">Whether it’s HVAC installation, maintenance, or repairs, we’ve got you covered.</p>
            <a href="#contact-us-section" class="button-action text-blue text-decoration-none bg-light fw-bold fs-4 rounded-pill px-3 px-sm-5 py-2 mt-3 border-0 text-nowrap">BOOK NOW</a>
        </div>
    </section>
    <section class="logo-section">
        <div class="logo-wrapper bg-light d-flex justify-content-center align-items-center p-3 m-auto">
            <img class="logo-photo img-fluid" src="{{ asset('images/Partners/Logo.png') }}" alt="">
        </div>
    </section>
    <nav class="navbar-list w-100 p-3 px-sm-5 bg-light">
        <button class="nav-hamburger rounded d-flex d-lg-none  flex-column justify-content-center align-items-center gap-1" type="button">
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
        </button>
        <ul class="navbar-ul w-100 m-0 px-md-3 d-lg-flex flex-column flex-lg-row justify-content-between align-items-center list-unstyled">
            <li class="text-center"><a href="#services-section" class="text-decoration-none text-blue fw-bold fs-4" href="">SERVICES</a></li>
            <li class="text-center"><a href="#" class="text-decoration-none text-blue fw-bold fs-4" href="">HOME</a></li>
            <li class="text-center"><a href="#customer-satisfaction-section" class="text-decoration-none text-blue fw-bold fs-4" href="">ABOUT</a></li>
            <li class="text-center"><a href="#contact-us-section" class="text-decoration-none text-blue fw-bold fs-4" href="">CONTACT</a></li>
            <li class="text-center"><a href="#our-works-section" class="text-decoration-none text-blue fw-bold fs-4" href="">WORKS</a></li>
        </ul>
    </nav>
    <section id="promo-section" class="promo-section">
        <div class="section-wrapper m-3 m-sm-5">
            <div class="promo-card-wrapper m-0 px-0 py-3 rounded-4 bg-dark">
                <div class="promo-card bg-light py-2 px-3 rounded-4 d-flex flex-column">
                    <div class="d-flex flex-column flex-xl-row align-items-center justify-content-center justify-content-xl-around">
                        <div class="promo-left-side d-flex flex-column align-items-center">
                            <div class="promo-details">
                                <h2 class="contact-us-today fw-semibold text-blue text-center m-0">Contact us today <br/><span class="fw-bold text-blue fs-1">and receive a</span></h2>
                                <div class="voucher-card my-3 bg-blue rounded-3 p-3 d-flex flex-column">
                                    <h1 class="cash-value text-center">$200</h1>
                                    <h2 class="text-center fw-semibold">Restaurant Cash<br/>Value Voucher.</h2>
                                </div>
                            </div>
                            <a href="#contact-us-section" class="button-action promo-book-btn text-light py-2 px-3 px-sm-5 fs-1 fw-bolder rounded-pill border-0 text-nowrap text-decoration-none">GIVE US A CALL</a>
                        </div>
                        <div class="promo-right-side">
                            <img class="promo-guy img-fluid" src="{{ asset('images/Photos/Promo Guy.png') }}" alt="">
                        </div>

                    </div>
                    <p class="text-center text-blue mt-3 fw-semibold fst-italic">For over 80,000 participating restaurants worldwide</p>
                </div>
            </div>
        </div>
    </section>
    <section id="customer-satisfaction-section" class="customer-satisfaction-section">
        <div class="section-wrapper m-3 m-sm-5 px-lg-5 d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 mb-1 fst-italic text-center">“This is why we do what we do”</p>
            <h1 class="fw-bold fs-2 text-center">CUSTOMER SATISFACTION GUARANTEED!</h1>
            <div class="my-5 d-flex flex-column flex-xl-row customer-satisfaction-content justify-content-center align-items-center">
                <div class="customer-satisfaction-left-side mx-auto align-self-xl-end">
                    <img width="1200" class="aircon-guy img-fluid rounded-4" src="{{ asset('images/Photos/First pic.png') }}" alt="">
                </div>
                <div class="accreditation-wrapper">
                    <p class="py-3 ps-3 fs-6 lh-sm ">With our team of skilled technicians
                        and commitment to going beyond
                        expectations, you can trust us to keep
                        your indoor environment comfortable
                        and safe.
                    </p>
                    <div class="accreditation-img-wrapper bg-light px-4 py-3 mx-auto mx-xl-0">
                        <img class="accreditation-img img-fluid w-100" src="{{ asset('images/Icons/BBB Accreditation.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-section" class="services-section mb-5">
        <div class="section-wrapper m-3 m-md-5 px-3 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="section-title text-center fw-bold">SERVICES</h1>
            <p class="text-center px-1 mx-0">
                Whether you’re a homeowner seeking efficient heating and cooling solutions or a commercial developer requiring large-scale HVAC systems, our dedicated team is committed to delivering you a top-notch service.
            </p>
            <div class="row gap-5 row-cols-lg-3 row-cols-xxl-4 justify-content-between mb-5">
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/AC.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">AIR CONDITIONING</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Expert installation, repair, and maintenance for cool, comfortable indoor environments in homes and businesses.</p>
                    </div>
                </div>
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Heating.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">HEATING</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Comprehensive solutions for efficient heating systems, ensuring warmth and comfort during colder seasons. </p>
                    </div>
                </div>
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Ref.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">REFRIGERATION</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Installation, upkeep, and repair of commercial refrigeration units for optimal storage and display.</p>
                    </div>
                </div>
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Humidification.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">HUMIDIFICATION</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Tailored humidifier/dehumidifier installations and maintenance to enhance indoor air quality and comfort.</p>
                    </div>
                </div>
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper position-relative">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Geo.png') }}" alt="">
                                <img class="waterless-geo-img img-fluid rounded-1" src="{{ asset('images/Partners/WGeo.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">GEOTHERMAL</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Sustainable geothermal heating and cooling systems for eco-friendly temperature control solutions.</p>
                    </div>
                </div>
                <div class="services-card-border d-flex flex-column justify-content-center align-items-center flex-grow-1 py-4 px-0 bg-dark rounded-5 position-relative">
                    <div class="services-card flex-grow-1 position-relative rounded-5 d-flex flex-column align-items-center justify-content-center p-3">
                        <div class="services-img-wrapper">
                            <div class="service-img-border h-100 rounded-3">
                                <img class="services-img h-100 img-fluid rounded-3" src="{{ asset('images/Services/Maintenance.png') }}" alt="">
                            </div>
                        </div>
                        <h6 class="services-title text-blue fw-bold">MAINTENANCE</h6>
                        <p class="text-blue fs-6 lh-sm text-center">Proactive upkeep services to maximize HVAC system efficiency and lifespan, minimizing downtime and repair costs.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="button-action text-blue bg-light text-decoration-none fw-bold fs-4 rounded-pill mt-3 px-3 px-sm-5 py-2 mt-3 border-0 text-nowrap">LEARN MORE</a>
        </div>
    </section>
    <section id="our-works-section" class="our-works-section py-lg-5">
        <div class="section-wrapper m-3 m-md-5 px-3 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center fw-bold mb-3">OUR WORKS</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
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
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section id="testimonials-section" class="testimonials-section">
        <div class="section-wrapper m-1 m-lg-5 px-1 px-md-5 py-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center fw-bold mb-2 mb-lg-5">TESTIMONIALS</h1>
            {{-- <div class="row row-cols-1 row-cols-xxl-4 gap-3"> --}}
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-wrapper col p-0 py-4 rounded-5 flex-grow-1">
                            <div class="testimonial-card h-100 p-1 p-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="material-icons fs-1 text-white bg-blue rounded-circle p-2">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Stacy V.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-dark text-center fs-6 lh-sm">
                                    We built a log home and were at a loss on what to do for heating and cooling. Travis Myrick came to our house gave us ideas and solved our problem. We love our mini splits. We highly recommend him, his workers and his company. They are the best!                        
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-wrapper col p-0 py-4 rounded-5 flex-grow-1">
                            <div class="testimonial-card h-100 py-5 px-1 px-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="material-icons fs-1 text-white bg-blue rounded-circle p-2">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Nancy H.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-dark text-center fs-6 lh-sm">
                                    Myrick Mechanical LLC of Pleasanton KS. The Company installed the HVAC vents to the East side of the House. He was very professional, did the job quickly and reasonably priced. I would Highly recommend this company. Very good experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-wrapper col p-0 py-4 rounded-5 flex-grow-1">
                            <div class="testimonial-card h-100 py-5 px-1 px-lg-5 w-100 bg-light rounded-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">
                                <i class="material-icons fs-1 text-white bg-blue rounded-circle p-2">person</i>
                                <h5 class="customer-name text-dark fw-semibold">Stephanie S.</h5>
                                <p class="stars text-warning">★★★★★</p>
                                <p class="text-dark text-center fs-6 lh-sm">
                                    Travis gave us an estimate and then was able to complete the job in good time. He was thorough and things were picked up and clean when he was done. I highly recommend Myrick Mechanical.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            {{-- </div> --}}
        </div>
    </section>
    <section id="contact-us-section" class="contact-us-section">
        <div class="section-wrapper m-1 m-md-5 px-1 px-md-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="section-title text-center fw-bold">SPEAK TO US TODAY!</h1>
            <p class="text-center px-1 mx-0 text-white mb-5">For more information on our HVAC services, contact our technicians today. <br/>
                Call us for a free, no-obligation estimate for residential and commercial HVAC services.
            </p>
            <div class="w-100 row row-cols-xl-3 gap-5">
                <div class="contact-left-side p-0 col d-flex flex-column justify-content-start align-items-center flex-grow-1 gap-3">
                    <h3 class="text-center">Pleasanton, KS</h3>
                    <div style="overflow:hidden;resize:none;max-width:100%;width:90%; min-height: 500px; aspect-ratio: 5 / 3;">
                        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%; overflow:hidden border-radius: 1rem;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=myrick+mechanical+&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="my-codefor-googlemap" href="https://www.bootstrapskins.com/themes" id="auth-map-data">premium bootstrap themes</a>
                        <style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style>
                    </div>
                    <h3 class="text-center">CALL</h3>
                    <button class="text-blue fw-bold fs-4 rounded-pill px-3 px-sm-5 py-2 mt-3 border-0 text-nowrap">(913) 713-3734</button>
                </div>
                <div class="contact-right-side col">
                    <h3 class="text-center">Contact Form</h3>
                    <iframe
                        src="
                        https://api.leadconnectorhq.com/widget/form/oZFky6ro0teiH10GBdRQ"
                        style="width:100%;height:100%;border:none;border-radius:3px"
                        id="inline-oZFky6ro0teiH10GBdRQ" 
                        data-layout="{'id':'INLINE'}"
                        data-trigger-type="alwaysShow"
                        data-trigger-value=""
                        data-activation-type="alwaysActivated"
                        data-activation-value=""
                        data-deactivation-type="neverDeactivate"
                        data-deactivation-value=""
                        data-form-name="$200 Restaurant - Certificate"
                        data-height="575"
                        data-layout-iframe-id="inline-oZFky6ro0teiH10GBdRQ"
                        data-form-id="oZFky6ro0teiH10GBdRQ"
                        title="$200 Restaurant - Certificate"
                        >
                        </iframe>
                        <script src="
                        https://link.msgsndr.com/js/form_embed.js"></script>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('ad_section')
<div class="_ad-section">
    <a target="_blank" href="#" class="_ad-link">
        <img class="img-fluid" src="https://plus.unsplash.com/premium_photo-1661439660359-3bf491320728?q=80&w=2060&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
    </a>
</div>
@endsection

@section('script_content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
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
  </script>
@endsection