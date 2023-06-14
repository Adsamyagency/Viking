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
            <h1 class="landing-content-title f-rocker">{{ __('messages.Luxury') }}</h1>
            <p class="text-white">{{ __('messages.Experience') }}</p>
        </div>
    </section>
    <section class="book-now">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="book-now-left col-12 col-md-6">
                    <h1 class="f-rocker text-center">{{ __('messages.Book') }}</h1>
                    <p class="text-white pt-3">{{ __('messages.BookDescription') }}</p>
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
                    <h1 class="f-rocker">{{ __('messages.VIKING') }}</h1>
                    <p class="text-black">{{ __('messages.Impeccable') }}</p>
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
                                            <h1>{{ __('messages.Clients') }}</h1>
                                            <a style=" position: absolute;
                                            top: -20px;
                                            right: 30px;"
                                                class="whats-app-yachts"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important" alt="whatsapp">
                                            </a>

                                            @foreach ($vikings as $viking)
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-3">
                                                        <p style="white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis; class="d-flex
                                                            align-items-center gap-2"> <img
                                                                style="width: 20px !important; height: 20px !important"
                                                                class="yacht-icon"
                                                                src="{{ asset('Assets/images/yachtIcon.png') }}" />
                                                            {{ $viking->yacht }}
                                                        </p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>{{ $viking->feet }} </p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p style="white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;"
                                                            class="d-flex align-items-center gap-2">
                                                            <img style="width: 20px !important; height: 20px !important"
                                                                class="yacht-icon"
                                                                src="{{ asset('Assets/images/person.png') }}" />
                                                            {{ $viking->person }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach

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
                                                @foreach ($event as $e)
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/cocktail.png') }}" />
                                                        {{ $e->event }}
                                                    </p>
                                                @endforeach
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
                                                style=" position: absolute;
                                            top: -20px;
                                            right: 30px;"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important" alt="whatsapp">
                                            </a>
                                            <div>
                                                @foreach ($water as $w)
                                                    <p class="d-flex align-items-center gap-2"> <img
                                                            style="width: 20px !important; height: 20px !important"
                                                            class="yacht-icon"
                                                            src="{{ asset('Assets/images/taz.png') }}" />
                                                        {{ $w->title }}
                                                    </p>
                                                @endforeach
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
            <p class="text-center text-white">{{ __('messages.Clients') }}</p>
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
            <p class="yacht-party-p f-mon">{{ __('messages.Yacht') }}</p>
            <h1 class="yacht-party-h f-inter">{{ __('messages.BookYacht') }}</h1>
            <p class="yacht-party-p-2 f-mon">{{ __('messages.PARTY') }}</p>
            <p class="text-center yacht-party-p-3 f-mon">{{ __('messages.Ultimate') }}</p>
            <a href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0"
                class=" f-space custom-btn">{{ __('messages.BookNow') }}</a>
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
                    <h5 class="text-uppercase">{{ __('messages.Location') }}</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">{{ __('messages.Time') }}</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-white f-mon text-decoration-none">{{ __('messages.Dubai') }}</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">{{ __('messages.Tel') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">{{ __('messages.NAVIGATION') }}</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#yachts"
                                class="text-white f-mon text-decoration-none">{{ __('messages.Private') }}</a>
                        </li>
                        <li>
                            <a href="#yachts"
                                class="text-white f-mon text-decoration-none">{{ __('messages.Yacht') }}</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white f-mon text-decoration-none">{{ __('messages.Contact') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">{{ __('messages.QUICK') }}</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white f-mon text-decoration-none">{{ __('messages.Home') }}</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-white f-mon text-decoration-none">{{ __('messages.About') }}</a>
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
