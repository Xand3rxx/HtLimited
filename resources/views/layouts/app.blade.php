<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="HT-Limited is Business Management Consulting firm, offering support in business development, human resources management and administration." />
    <meta name="keywords" content="Business Management Consultants" />
    <meta name="author" content="Anthony O. Joboy" />
    <link rel="shortcut icon" href="{{ config('site-settings.site_icon') ?? asset('img/favicon.png') }}" />
    <title>@yield('title') | {{ config('site-settings.site_title') ?? config('app.name', 'HT Limited') }}</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/icomoon.css') }}" />

    <!-- Mian and Login css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>
<body class="login-bg">
    @include('layouts.partials._messages')
    @yield('content')
    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            © {{ date('Y') }} HT Limited. All Rights Reserved.
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script>
        //Feedback from session message to be displayed with Sweet Alert
        function displayMessage(message, type) {
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 8000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            Toast.fire({
                icon: type,
                //   type: 'success',
                title: message
            });
        }
    </script>
    @stack('scripts')

</body>
</html>
