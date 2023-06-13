@extends('layouts.main')

@section('content')
    <x-header></x-header>
    <a style="position: fixed; bottom: 100px; left: 40px; z-index: 999"
        href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
        <img src="{{ asset('Assets/images/whats-fixed.png') }}" />
    </a>
    <section class="landing position-relative">
        <img src="{{ asset('Assets/images/graphic.png') }}" class="graphic-landing">
        <div class="landing-content">
            <h1 class="landing-content-title f-rocker">Luxury Yacht in Dubai</h1>
            <p class="text-white">Experience the Arabian Sea in Style with our Premier Yacht Charter Services</p>
        </div>
    </section>
    <section class="book-now">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="book-now-left col-12 col-md-6">
                    <h1 class="f-rocker text-center">Book Now for an Unforgettable Journey on the Arabian Sea</h1>
                    <p class="text-white pt-3">Renting a boat is definitely an experience that you won’t forget. Observe
                        unique
                        and breathtaking
                        views
                        from your charter boat, take in nature and absorb those summer rays in complete tranquility, away
                        from
                        the hustle and bustle of crowded places. A boat rental allows you to explore secret locations that
                        can't
                        be reached by land where you can sunbath and swim in the open sea with family or friends.</p>
                </div>
                <div class="col-md-4 col-12 book-now-right">

                </div>
            </div>
        </div>
    </section>
    {{-- Yachts --}}
    <section class="yachts" id="yachts">
        <div class="container-fluid overflow-hidden">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="left-yachts-side text-center col-md-3 col-12">
                    <h1 class="f-rocker">VIKING WATER WORLD</h1>
                    <p class="text-black">impeccable service for an unforgettable journey on the Arabian Sea.</p>
                </div>
                <div class="right-yachts-side col-12 col-md-8">

                    <section id="tranding">
                        <div class="swiper tranding-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img position-relative">
                                        <img src="{{ asset('Assets/images/yachts.png') }}">
                                        <div class="tranding-slide-content">
                                            <h1>Our Top Yachts</h1>
                                            <a class="whats-app-yachts"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important" alt="whatsapp">
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="col-3">
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/yachtIcon.png') }}" /> VIKING 1
                                                    </p>
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/yachtIcon.png') }}" />VIKING 2</p>
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/yachtIcon.png') }}" />VIKING 3</p>
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/yachtIcon.png') }}" />VIKING 4</p>
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/yachtIcon.png') }}" />VIKING 5</p>
                                                </div>
                                                <div class="col-3">
                                                    <p>36 feet </p>
                                                    <p>43 feet </p>
                                                    <p>63 feet </p>
                                                    <p>88 feet </p>
                                                    <p>88 feet (House) </p>
                                                </div>
                                                <div class="col-3">
                                                    <p class=" d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/person.png') }}" /> 12 Person
                                                    </p>
                                                    <p class=" d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/person.png') }}" /> 12 Person
                                                    </p>
                                                    <p class=" d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/person.png') }}" /> 25 Person
                                                    </p>
                                                    <p class=" d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/person.png') }}" /> 60 Person
                                                    </p>
                                                    <p class=" d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/person.png') }}" /> 100 Person
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{ asset('Assets/images/yachts2.png') }}">
                                        <div class="tranding-slide-content">
                                            <h1>Event and Boat Party</h1>
                                            <a class="whats-app-yachts"
                                                style=" position: absolute;
                                            top: -20px;
                                            right: 30px;"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important" alt="whatsapp">
                                            </a>
                                            <div>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />
                                                    EVENT
                                                </p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />BIRTHDAYS</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />WEDDINGS</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />THURSDAYS WHITE
                                                    DRESS PARTY</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />FASHION MODELS
                                                    YACHT PRO PHOTOSHOOTS</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/cocktail.png') }}" />BUSINESS
                                                    MEETINGS ON YACHT NETWORKINGS</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{ asset('Assets/images/yachts3.png') }}">
                                        <div class="tranding-slide-content">
                                            <h1>Water Sports</h1>
                                            <a class="whats-app-yachts"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important"
                                                    alt="whatsapp">
                                            </a>
                                            <div>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon" src="{{ asset('Assets/images/taz.png') }}" />
                                                    JET SKI
                                                </p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/taz.png') }}" />FLY
                                                    FISH</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/taz.png') }}" />FLY
                                                    BOARD</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/taz.png') }}" />DONUT
                                                    RIDE</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/taz.png') }}" />BANANA BOAT</p>
                                                <p class="d-flex align-items-center gap-2"> <img
                                                        style="width: 20px !important; height: 20px !important"
                                                        class="yacht-icon"
                                                        src="{{ asset('Assets/images/taz.png') }}" />PARASAILING</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- SLide ENd --}}
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

    {{-- Google --}}
    <section class="google-section">
        <div class="container">
            <div class="mx-auto w-100 d-flex align-items-center justify-content-center">
                <img src="{{ asset('Assets/images/google.png') }}" style="max-width: 100%" alt="google rate">
            </div>
            <p class="text-center text-white">This is what our clients say…</p>
            <div class="cards">
                <div class="swiper cards-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="custom-card bg-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('Assets/images/google/1.png') }}" />
                                    <div class="text-white">
                                        <p class="mb-0">Jun Barber</p>
                                        <p style="color: rgba(0, 0, 0, 0.5)">March 7, 2023.</p>
                                    </div>
                                    <img src="{{ asset('Assets/images/google/google.png') }}" width="40px" />
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('Assets/images/google/star.png') }}" width="20px" />
                                    @endfor
                                </div>
                                <p>Juan David was the captain ! 100%
                                    recommended</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-card bg-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('Assets/images/google/2.png') }}" />
                                    <div class="text-white">
                                        <p class="mb-0">Sandra “SandraHomeDec</p>
                                        <p style="color: rgba(0, 0, 0, 0.5)">March 6, 2023.</p>
                                    </div>
                                    <img src="{{ asset('Assets/images/google/google.png') }}" width="40px" />
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('Assets/images/google/star.png') }}" width="20px" />
                                    @endfor
                                </div>
                                <p>It was a fantastic day on the water! Thank
                                    you Juan for this great experience! Would
                                    definitely do it again!</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="custom-card bg-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('Assets/images/google/3.png') }}" />
                                    <div class="text-white">
                                        <p class="mb-0">Ashley Baffa</p>
                                        <p style="color: rgba(0, 0, 0, 0.5)">March 5, 2023.</p>
                                    </div>
                                    <img src="{{ asset('Assets/images/google/google.png') }}" width="40px" />
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('Assets/images/google/star.png') }}" width="20px" />
                                    @endfor
                                </div>
                                <p>Captain Jack was awesome and had a great
                                    personalized trip for us!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-card bg-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('Assets/images/google/2.png') }}" />
                                    <div class="text-white">
                                        <p class="mb-0">rachel Mormol</p>
                                        <p style="color: rgba(0, 0, 0, 0.5)">March 4, 2023.</p>
                                    </div>
                                    <img src="{{ asset('Assets/images/google/google.png') }}" width="40px" />
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('Assets/images/google/star.png') }}" width="20px" />
                                    @endfor
                                </div>
                                <p>We had the best experience today for my
                                    friend’s bachelorette!!!! Jack, the captain,
                                    was AMAZING! He was very easy to
                                    communicate with, he took us to the best</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="custom-card bg-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('Assets/images/google/4.png') }}" />
                                    <div class="text-white">
                                        <p class="mb-0">Michael Landsiedel</p>
                                        <p style="color: rgba(0, 0, 0, 0.5)">February 25, 2023.</p>
                                    </div>
                                    <img src="{{ asset('Assets/images/google/google.png') }}" width="40px" />
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('Assets/images/google/star.png') }}" width="20px" />
                                    @endfor
                                </div>
                                <p>Captain Jack Richardson was an amazing
                                    host and an even better person!! My family
                                    had a great time and would highly
                                    recommend it!</p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>

                </div>
                <div class="text-white d-block text-center mt-5 pb-3">
                    <span class="fw-bold">Google</span>
                    <span> rating score:</span>
                    <span class="fw-bold">4.9</span>
                    <span> of 5, based on </span>
                    <span class="fw-bold">484 reviews</span>
                </div>
            </div>
        </div>
    </section>
    {{-- book down --}}
    <div class="yacht-party position-relative">
        <img src="{{ asset('Assets/images/graphic.png') }}" class="graphic-down">
        <div class="container text-center">
            <p class="yacht-party-p f-mon">Yacht Party In Dubai</p>
            <h1 class="yacht-party-h f-inter">Book your
                yacht party right now</h1>
            <p class="yacht-party-p-2 f-mon">A PARTY LIKE NO OTHER!</p>
            <p class="text-center yacht-party-p-3 f-mon">Book your ultimate Dubai yacht party today. Our 88-foot
                split-level houseboat
                offers a
                luxurious setting with
                state-of-the-art audio
                and lighting systems, a Jacuzzi, and two fully stocked bars to execute your perfect event Don't miss out on
                the opportunity to
                indulge in the ultimate luxury yacht experience in Dubai. Book your Yacht party right now and make your
                event a unique and
                unforgettable experience.</p>
            <a href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0"
                class=" f-space custom-btn">Book now</a>
        </div>
    </div>

    {{-- Footer --}}
    <footer class=" text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('Assets/images/logo.png') }}" alt="">
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">location</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">Mon - Sun: 12.00 pm- 00.00
                                am</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">Dubai Marina -
                                Dubai - United Arab Emirates</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">Tel:+971 50 88 466 94</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Navigation</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#yachts" class="text-white f-mon text-decoration-none">Private Party</a>
                        </li>
                        <li>
                            <a href="#yachts" class="text-white f-mon text-decoration-none">The Yacht</a>
                        </li>
                        <li>
                            <a href="#" class="text-white f-mon text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Quick Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: Copyright © 2022. Design and developed by
            <a style="color: #F4D750" href="https://adsamy.net/"> Adsamy
                Marketing Agency</a>
        </div>
    </footer>
@endsection
