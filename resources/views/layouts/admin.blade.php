<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ config('site-settings.site_description') }}" />
    <meta name="keywords" content="Business Development Services, Business Advisory, Business Management Consulting, Manpower Services, Training, Recruitment, SME Optimisation, and Coaching" />
    <meta name="author" content="Anthony O. Joboy" />
    <link rel="shortcut icon" href="{{ config('site-settings.site_icon') ?? asset('img/favicon.png') }}" />
    <title>@yield('title') | {{ config('site-settings.site_title') ?? config('app.name', 'HT Limited') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bs4-custom.css') }}" />
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
    <style>
        div.dt-buttons {
            margin-top: 1em;
            margin-left: 1.5em;
        }

        button.dt-button,
        div.dt-button,
        a.dt-button,
        input.dt-button {
            font-size: inherit !important;
            color: #fff !important;
            background-color: #30D5C8 !important;
            background: linear-gradient(to bottom, rgb(48 213 200) 0%, rgb(48 213 200) 100%);
            border-color: #30D5C8 !important;
            display: inline-block !important;
            font-weight: 400 !important;
            text-align: center !important;
            vertical-align: middle !important;
            user-select: none !important;
            background-color: transparent !important;
            border: 1px solid transparent !important;
            padding: 0.46875rem 0.9375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.5 !important;
            border-radius: 0.25rem !important;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
            line-height: 1.5 i !important;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
            cursor: pointer;
        }

        button.dt-button:hover,
        div.dt-button:hover,
        a.dt-button:hover,
        input.dt-button:hover {
            color: #fff !important;
            background-color: #30D5C8 !important;
            background: linear-gradient(to bottom, rgb(48 213 200) 0%, rgb(48 213 200) 100%);
            border-color: #30D5C8 !important;
        }

        .position-top{
            position:fixed;
            left:0;
            width:100%;
        z-index: 30000;
        background: #8392a5;;
        border-color: #8392a5;;
        border-radius: 0;
        color:#fff;
            display: flex;
            justify-content: space-evenly;
            top:40px
        }

    </style>
    <!-- Loading starts -->
		<div id="loading-wrapper">
			<div id="loader">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div>
	<!-- Loading ends -->

    <!-- BEGIN .app-wrap -->
	<div class="app-wrap">
        @include('layouts.partials._admin_navbar')
        <!-- BEGIN .app-container -->
        <div class="app-container">
            @include('layouts.partials._user_sidebars')
            @include('layouts.partials._messages')
            @yield('content')
        </div>
        @include('layouts.partials._admin_footer')
    </div>

    <!-- jQuery first, then Tether, then other JS. -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/unifyMenu/unifyMenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/onoffcanvas/onoffcanvas.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Common JS -->
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/lightgallery-all.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function(){
            //Replace broken blog images with default picture
            setInterval(function() {
              $('img').each(function() {
                if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                  // image was broken, replace with your new image
                  this.src = "{{ asset('img/no-image-available.png') }}";
                }
              });
            }, 5000);

          });
      </script>
    @stack('scripts')
</body>
</html>
