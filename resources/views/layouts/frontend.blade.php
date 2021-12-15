<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Favicons -->
    <link href="{{ config('site-settings.site_icon')}}" rel="icon">
    <link href="{{ config('site-settings.site_icon')}}" rel="apple-touch-icon">
    <link rel="shortcut icon" href="{{ config('site-settings.site_icon')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ config('site-settings.site_description') }}" />
    <meta name="keywords" content="Business Development Services, Business Advisory, Business Management Consulting, Manpower Services, Training, Recruitment, SME Optimisation, and Coaching" />
    <meta name="author" content="Anthony Joboy (+2349035547107)" />
    <meta name="copyright" content="HT Limited.  All Rights Reserved" />
    <meta name="country" content="Nigeria" />
    <meta name="city" content="Lagos" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="INDEX,FOLLOW" />

    <title>@yield('title') | {{ config('site-settings.site_title') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    @include('layouts.partials._messages')

    @include('layouts.partials._frontend_navbar')

    @yield('content')

    @include('layouts.partials._frontend_footer')

</body>
</html>
