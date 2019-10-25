<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
   

    <!-- Styles -->
    
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
    <style>
        body{
            padding-top: 110px !important;
        }
    </style>
</head>
<body>
    <div  class="main-page-wrapper">

       @include('inc.navbar3')
       


        <div class="container">
            
            @yield('content')
        </div>
        
    </div>
    
  
   

    
        <script src="{{ asset('vendor/jquery.2.2.3.min.js') }}" ></script>
        <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.layeranimation.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.navigation.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.actions.min.js') }}" ></script>
        <script src="{{ asset('vendor/revolution/revolution.extension.video.min.js') }}" ></script>
        <script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}" ></script>
        <script src="{{ asset('vendor/jquery.mixitup.min.js') }}" ></script>
        <script src="{{ asset('vendor/skills-master/jquery.skills.js') }}" ></script>
        <script src="{{ asset('vendor/contact-form/validate.js') }}" ></script>
        <script src="{{ asset('vendor/contact-form/jquery.form.js') }}" ></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
        <script src="{{ asset('bootstrap4/popper.js') }}" ></script>
        <script src="{{ asset('bootstrap4/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}" ></script>
        <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}" ></script>
        <script src="{{ asset('plugins/easing/easing.js') }}" ></script>
        <script src="{{ asset('js/custom.js') }}" ></script>
        <script src="{{ asset('js/theme.js') }}" ></script>
        <script src="{{ asset('js/map-script.js') }}" ></script>
        <script src="{{ asset('') }}" ></script>
        <script src="{{ asset('') }}" ></script>
        <script src="{{ asset('') }}" ></script>
        <script src="{{ asset('') }}" ></script>
        <script src="{{ asset('') }}" ></script>
        
</body>
</html>