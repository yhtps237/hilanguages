<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('meta')

</head>

<body>



    <!-- Header area start -->
    {{-- <div id="header-placeholder"></div> --}}
    @include('layouts.header')

    <!-- Header area end -->

    <!-- Body main wrapper start -->
    @yield('content')

    <!-- Body main wrapper end -->

    <!-- footer area start -->
    {{-- <div id="footer-placeholder"></div> --}}
    @include('layouts.footer')

    <!-- footer area end -->

    <!-- back to top -->
    <div class="backtotop-wrap cursor-pointer ">
        <svg class="backtotop-circle svg-content " width="100% " height="100% " viewBox="-1 -1 102 102 ">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98 " />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- JS here -->

    <script src="{{ asset('js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.js') }}"></script>
    <script src="{{ asset('js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('js/plugins/easypie.js') }}"></script>
    <script src="{{ asset('js/vendor/purecounter.js') }}"></script>
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/pages/slider.js') }}"></script>

    @yield('custom-js')
</body>

</html>
