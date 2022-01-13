<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ config('site-settings.site_description') }}" />
    <meta name="keywords" content="Business Development Services, Business Advisory, Business Management Consulting, Manpower Services, Training, Recruitment, SME Optimisation, and Coaching" />
    <meta name="author" content="Anthony O. Joboy" />
    <link rel="shortcut icon" href="{{ config('site-settings.site_icon') ?? asset('img/favicon.png') }}" />
    <title>@yield('title') | {{ config('site-settings.site_title') ?? config('app.name', 'HT Limited') }}</title>

    <!-- Common CSS -->
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

</head>
<body>
    @yield('content')
    
</body>
</html>
