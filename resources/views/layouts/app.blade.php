<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head1`1>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{$admin_assets}}/assets/img/m-icon.jpeg" />
    <meta name="description" content="Echokemedia is an entertaining platform, where you get your trending, latest, favorite music, music videos and movies.">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ $web_source }}/assets/css/main.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Echokemedia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="container">
        @yield('content')
    </body>



    <script src="{{ $web_source }}/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ $web_source }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ $web_source }}/assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ $web_source }}/assets/js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6539fd1ef8b8c500","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>

    </body>

</html>