<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ $admin_assets }}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    <style>
        .image-width {
            width: 400px;
            height: 400px;
        }

        .post-video-width {
            width: 200px;
            height: 200px;
        }

        @media only screen and (max-width:600px) {

            .welcome-img {
                width: 400px;
                height: 400px;
                margin-right: 0px;
            }

        }


        .social-media-share-icon i {
            font-size: 20px;
            padding-top: 15px;
            padding-right: 10px;
        }

        .image-width {
            width: 200px;
            max-height: 20vh;
        }

        .post-video-width {
            width: 400px;
            height: 400px;
        }

        .searchbtn {
            background: rgb(255, 136, 0);
            color: white;
        }

        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        div#social-links ul li {
            display: inline-block;
        }

        div#social-links ul li a {
            padding: 20px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
            color: #222;
            background-color: #ccc;
        }
    </style>

</head>

<body>
    @include('web.layouts.includes.head')
    @include('web.layouts.includes.header')
    {{-- @include('web.layouts.includes.side_bar') --}}


    @yield('contents')

    @include('web.layouts.includes.footer')
    @include('web.layouts.includes.script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
</body>

</html>