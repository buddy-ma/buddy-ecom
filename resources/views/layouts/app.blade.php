<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Unice" name="description">
        <meta content="Unice" name="keywords">
        <meta content="Unice" name="author">
        <title>Buddy - @yield('title')</title>

        <!-- Fav icon -->
        <link href="{{ asset('assets/images/logo/favicon.png') }}" rel="shortcut icon">

        <!-- Font Family-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

        <!--bootstrap css-->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

        <!--keyframe css-->
        <link href="{{ asset('assets/css/keyframes.css') }}" rel="stylesheet">

        <!--owl carousel css-->
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

        <!-- AOS CSS -->
        <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">

        <!-- Icons -->
        <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/themify.css') }}" rel="stylesheet" type="text/css">

        <!-- flat Icons -->
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">

        <!--magnific popup css-->
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/flag.css') }}" rel="stylesheet" type="text/css">

        @livewireStyles

        <!-- color css -->
        @yield('css')

    </head>

    <body data-offset="50" data-spy="scroll" data-bs-target=".navbar" class="{{ App::getLocale() == 'ar' ? "rtl" : "ltr" }} @yield('bodyClass') ">

        {{-- @include('partials.svg') --}}
        @include('partials.loader')
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        @include('partials.poppup')

        <!-- all js here -->
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

        <!-- popper js-->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <!--  costamizer option -->
        <script src="{{ asset('assets/js/custamizer-option.js') }}"></script>

        <!--magnific popup js-->
        <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>

        <script src="{{ asset('assets/js/isotope.min.js') }}"></script>

        <!--owl js-->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('assets/js/typed.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
        <!-- AOS JS -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>

        <!-- tilt JS -->
        <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>

        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <!-- script js-->
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/aos-init.js') }}"></script>

        <script src="{{ asset('assets/js/layout-fix.js') }}"></script>

        @livewireScripts

        @yield('js')
    </body>
</html>
