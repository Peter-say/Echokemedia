<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{$admin_assets}}/assets/img/m-icon.jpeg" >


    <title>{{ config('', 'Media-Creator') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ $admin_assets}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/fontawesome.css">
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/owl.css">
    <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
    <style>
        .popup-desktopmenu-area {
            border-radius: 20px;
            box-shadow: #444;
            padding: 30px;
            text-align: left;
            margin-left: 20px;
            height: 100vh;
            width: 100%;
        }

        .popup-desktopmenu-area li {
            border-bottom: 1px solid #929394;
            margin: 0;
            padding: 15px 0;
        }

        .popup-desktopmenu-area ul {
            list-style-type: none;
        }

        .scrollable-area {
            height: 100vh;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .scrollable-area::-webkit-scrollbar {
            width: 0px;
            display: none;
        }

        .scrollable-area::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .scrollable-area::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        .sticky-top {
            position: fixed;
            width: 100%;
        }

        .header-content {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .font-large-2 {
            font-size: 40px;
        }

        .myAvatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
        }

        .modal-footer {
            flex-wrap: unset;
        }


        .myAvatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: inline-block;
        }

        .modal-footer {
            flex-wrap: unset;
        }

        select.form-control {
            border: 0 none;
            border-radius: 4px;
            height: 50px;
            font-size: var(--font-size-b2);
            padding: 0 20px;
            background-color: var(--color-lightest);
            border: 1px solid transparent;
        }

    </style>

    <style>
        .color-card-2 {
            background: #FDFEFF;
        }



        .title-2 {
            color: #2D354A;
            font-family: roboto;
            weight: 300;
        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }



        .b {
            color: #2F3B4B;
        }

        hr {
            border-color: #7C8097;
            width: 90%;
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .hr-2 {
            border-color: #E4E8ED;
        }


        .content {
            display: center;
        }

        * {
            font-family: Roboto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .top {
            margin-top: 16px;
        }

        .color-a {
            background: linear-gradient(to top right, #8162CE, #F54BA5);
        }

        .color-b {
            background: linear-gradient(to bottom right, #C90A6D, #FF48A0);
        }

        .color-c {
            background: linear-gradient(to bottom right, #5E5AEC, #3F9EFC);
        }

        .color-d {
            background: linear-gradient(to bottom right, #6452E9, #639FF9);
        }


        .mybtn {
            border: none;
            height: 40px;
            color: #ffffff;
            width: 35%;
            font-size: 16px;
            border-radius: 30px;
            box-shadow: 0 13px 26px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .mybtn:hover {
            border: solid 1px #DA59B1;
            height: 40px;
            font-size: 16px;
            font-family: Roboto;
            color: #DA59B1;
            background: #ffffff;
            width: 35%;
            border-color: linear-gradient(to top right, #8162CE, #F54BA5);
            ;
            border-radius: 30px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .mybtn2 {
            border: solid 1px #DA59B1;
            height: 40px;
            font-size: 16px;
            font-family: Roboto;
            color: #DA59B1;
            background: #ffffff;
            width: 35%;
            border-color: linear-gradient(to top right, #8162CE, #F54BA5);
            ;
            border-radius: 30px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .circule {
            border-radius: 50%;
            border: none;
            height: 60px;
            width: 60px;
            color: #ffffff;
            box-shadow: 0 13px 26px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.16);

        }

         .up {
            margin-top: 40px;
        }

        .img {
            width: 280px;
        }


        /*cards*/
        body {
            background: #e2e1e0;
            text-align: center;
        }

        .profile_card {
            border-radius: 5px;
            display: inline-block;
            height: 600px;
            position: relative;
            width: 90%;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.16), 0 12px 13px rgba(0, 0, 0, 0.16);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        .profile_item_card {
            border-radius: 5px;
            display: inline-block;
            width: 100%;
            position: relative;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.16), 0 12px 13px rgba(0, 0, 0, 0.16);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        .profile {
            border-radius: 100%;
            width: 132px;
            height: 128px;
        }

        .element-animation {
            animation: animationFrames ease 2s;
            animation-iteration-count: 2;
            transform-origin: 50% 50%;
            animation-fill-mode: forwards;
            /*when the spec is finished*/
            -webkit-animation: animationFrames ease 1.5s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -webkit-animation-fill-mode: forwards;
            /*Chrome 16+, Safari 4+*/
        }

        .btn{
            height: 40px;
    font-size: 16px;
        }

    </style>
</head>
