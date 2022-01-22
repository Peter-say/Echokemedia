<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ $admin_assets }}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    <style>
        .image-width {
            width: 400px;
            height: 400px;
        }
    
        @media only screen and (max-width:600px) {
    
            .welcome-img {
                width: 400px;
                height: 400px;
                margin-right: 0px;
            }
    
        }
    
        /* .rounded-profile {
            width: 80px;
            height: 80px;
            background: gray;
            border-radius: 40px;
        } */
    
        /* slideout css
        .cover-image {
            width: 100%;
            margin-top: 5%;
            margin-bottom: 30%;
            height: 40vh;
            background: white;
            border-radius: 10px;
        } */
    
        /* .cover-image img {
            width: 100%;
            height: 80vh;
            border-radius: 20px;
        } */
    
        /* .tt {
            top: 310px;
            font-size: 20px;
            text-transform: uppercase;
            color: blue;
    
        } */
    
        /* .popular-post,
        h1 {
            width: 20%;
            text-align: center;
            align-content: center;
            font-size: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background: rgb(255, 136, 0);
            padding: 10px;
            margin-top: 10%;
            margin-left: 35%;
            color: white;
            border-radius: 100px 100px 10px 100px;
        } */
    
        /* @media screen and (max-width:600px) {
            .cover-image {
                width: 100%;
                margin-top: 10%;
                margin-bottom: 30%;
                height: 40vh;
                background: red;
                
            } */
    
        /* .cover-image img {
                width: 100%;
                height: 60vh;
                border-radius: 10px;
                margin-bottom: 20%;
            } */
    
        /* .popular-post,
            h1 {
                width: 50%;
                text-align: center;
                align-content: center;
                font-size: 30px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                background: rgb(255, 153, 0);
                color: white;
                border-radius: 100px 100px 10px 100px;
            } */
    
        
    
        /* .top-title {
    
            padding: 10px;
            margin: 20px 0px 5px 0px;
            font-size: 20px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        } */
    
        /* @media screen and (max-width:600px) {
            .top-title {
                display: block;
                width: 100%;
    
                padding: 10px;
                margin: 20px 0px 5px 0px;
                font-size: 20px;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            } */

             .social-media-share-icon i{
                 font-size: 20px;
                 padding-top: 15px;
                 padding-right: 10px;
             }
            .image-width{
              width: 200px;
              max-height: 20vh;
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
