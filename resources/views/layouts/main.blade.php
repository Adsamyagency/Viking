<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Viking</title>

    {{-- Fav Icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('Assets/images/site.webmanifest') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('Assets/css/main.css?v=1a040064279b') }}">

    {{-- Bootstrap Link --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@100;200;300;400;500;600;700&family=New+Rocker&family=Roboto:wght@300;400;500;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body style="font-family: {{ App::isLocale('ar') ? 'cairo' : '' }}" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}"
    class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    {{-- Bootstrap --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('Assets/js/app.js') }}"></script>

</html>
