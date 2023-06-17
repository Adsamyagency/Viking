@extends('layouts.main')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center ">
                    <h1 class="modal-title w-100 fs-5" id="aboutModal">{{ __('messages.About') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="w-75">
                        {{ __('messages.aM') }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-2 d-flex align-items-center justify-content-center">
            <div class="modal-content modal-content-2 container">
                <div class="modal-header text-center ">
                    <h1 class="modal-title w-100 fs-5" id="contactModal">{{ __('messages.cM') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body flex-wrap d-flex align-items-start justify-content-center">
                    <div class="col-12 col-md-6">
                        <iframe class="{{ App::isLocale('ar') ? 'ps-3' : 'pe-3' }}"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.2842859100238!2d55.1422738!3d25.0922363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6ba241fcf121%3A0xaa6749f1d3bb4797!2sViking%20Water%20World!5e0!3m2!1sar!2sus!4v1687025194898!5m2!1sar!2sus"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="/">
                            <div class="mb-3">
                                <input type="name" class="form-control" name="name"
                                    placeholder="{{ __('messages.yourName') }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('messages.yourEmail') }}" required>
                            </div>
                            <div class="mb-3">
                                <textarea rows="10" name="message" class="form-control" placeholder="{{ __('messages.message') }}" required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="custom-contact-btn">{{ __('messages.sendM') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mx-auto mb-3">
                    <div class="contact-contact">
                        <p>+971508846694</p>
                        <a href="vikingwaterworld.com">vikingwaterworld.com</a>
                    </div>
                </div>
                <p class="text-center text-white">{{ __('messages.callUs') }}</p>
                <div class="d-flex align-items-center justify-content-center gap-2 bottom-form">
                    <form action="/">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" name="full_name"
                                    placeholder="{{ App::isLocale('ar') ? 'اسمك الكامل' : 'Full Name' }}" required>
                            </div>
                            <div class="mb-3 col-6">
                                <input type="tel" name="email" class="form-control"
                                    placeholder="{{ App::isLocale('ar') ? 'رقم الهاتف' : 'Phone Number' }}" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-primary mb-3 submit-bottom px-5">{{ __('messages.send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-header></x-header>
    <a style="position: fixed; bottom: 100px; left: 40px; z-index: 999"
        href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
        <img src="{{ asset('Assets/images/whats-fixed.png') }}" />
    </a>
    <section class="landing position-relative">
        <img src="{{ asset('Assets/images/graphic.png') }}" class="graphic-landing">
        <div class="landing-content">
            <h1 class="landing-content-title {{ App::isLocale('ar') ? 'f-cairo mb-3' : 'f-rocker' }}">
                {{ __('messages.Luxury') }}
            </h1>
            <p class="text-white">{{ __('messages.Experience') }}</p>
        </div>
    </section>
    <section class="book-now">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="book-now-left col-12 col-md-6">
                    <h1 class="{{ App::isLocale('ar') ? 'f-cairo' : 'f-rocker' }} text-center">{{ __('messages.Book') }}
                    </h1>
                    <p class="text-white pt-3">{{ __('messages.BookDescription') }}</p>
                </div>
                <div class="col-md-4 col-12 book-now-right">

                </div>
            </div>
        </div>
    </section>
    {{-- Yachts --}}
    <section class="yachts" id="yachts">
        <div class="{{ App::isLocale('ar') ? 'container' : 'container-fluid' }} overflow-hidden">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="left-yachts-side text-center col-md-3 col-12">
                    <h1 class="{{ App::isLocale('ar') ? 'f-cairo' : 'f-rocker' }}">{{ __('messages.VIKING') }}</h1>
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
                                            <h1>
                                                {{ __('messages.our') }}</h1>
                                            <a style=" position: absolute;
                                            top: -20px;
                                            left:{{ App::isLocale('ar') ? '20px' : '' }};
                                            right: {{ App::isLocale('ar') ? '' : '30px' }};"
                                                class="whats-app-yachts"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important"
                                                    alt="whatsapp">
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
                                            <h1>Event
                                                {{ __('messages.WaterSports') }}</h1>
                                            <a class="whats-app-yachts"
                                                style=" position: absolute;
                                                       top: -20px;
                                                 left:{{ App::isLocale('ar') ? '20px' : '' }};
                                                right: {{ App::isLocale('ar') ? '' : '30px' }};"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important"
                                                    alt="whatsapp">
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
                                            <h1>
                                                {{ __('messages.WaterSports') }}</h1>
                                            <a class="whats-app-yachts"
                                                style=" position: absolute;
                                                left:{{ App::isLocale('ar') ? '20px' : '' }};
                                            top: -20px;
                                            right: {{ App::isLocale('ar') ? '' : '30px' }};"
                                                href="https://api.whatsapp.com/send/?phone=971508846694&text&type=phone_number&app_absent=0">
                                                <img src="{{ asset('Assets/images/whatsapp.png') }}"
                                                    style="width: 130px !important; height: 30px !important"
                                                    alt="whatsapp">
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
            <p class="yacht-party-p {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }}"
                style="letter-spacing: {{ App::isLocale('ar') ? '0' : '4px' }}">{{ __('messages.Yacht') }}</p>
            <h1 class="yacht-party-h f-inter">{{ __('messages.BookYacht') }}</h1>
            <p style="letter-spacing: {{ App::isLocale('ar') ? '0' : '7px' }}"
                class="yacht-party-p-2 {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }}">{{ __('messages.PARTY') }}</p>
            <p style="letter-spacing: {{ App::isLocale('ar') ? '0' : '2px' }}"
                class="text-center yacht-party-p-3 {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }}">
                {{ __('messages.Ultimate') }}</p>
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

                <div class="{{ App::isLocale('ar') ? 'text-end' : '' }} col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">{{ __('messages.Location') }}</h5>

                    <ul class="{{ App::isLocale('ar') ? 'px-0' : '' }} list-unstyled mb-0">
                        <li>
                            <a href="#!"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Time') }}</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Dubai') }}</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Tel') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="{{ App::isLocale('ar') ? 'text-end' : '' }} col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">{{ __('messages.NAVIGATION') }}</h5>
                    <ul class="{{ App::isLocale('ar') ? 'px-0' : '' }} list-unstyled">
                        <li>
                            <a href="#yachts"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Private') }}</a>
                        </li>
                        <li>
                            <a href="#yachts"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Yacht') }}</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Contact') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="{{ App::isLocale('ar') ? 'text-end' : '' }} col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">{{ __('messages.QUICK') }}</h5>

                    <ul class="{{ App::isLocale('ar') ? 'px-0' : '' }} list-unstyled mb-0">
                        <li>
                            <a href="#!"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.Home') }}</a>
                        </li>
                        <li>
                            <a href="#!"
                                class="text-white {{ App::isLocale('ar') ? 'f-cairo' : 'f-mon' }} text-decoration-none">{{ __('messages.About') }}</a>
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
