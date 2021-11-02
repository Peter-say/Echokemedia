<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ $admin_assets}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

</head>

<style>
    .rounded-profile {
        width: 80px;
        height: 80px;
        background: gray;
        border-radius: 40px;
    }

    /* slideout css */
    .cover-image {
        width: 100%;
        margin-top: 5%;
        margin-bottom: 30%;
        height: 40vh;
        background: white;
        border-radius: 10px;
    }

    .cover-image img {
        width: 100%;
        height: 80vh;
        border-radius: 20px;
    }

    .tt {
        top: 310px;
        font-size: 20px;
        text-transform: uppercase;
        color: blue;

    }

    .popular-post,
    h1 {
        width: 20%;
        text-align: center;
        align-content: center;
        font-size: 30px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        background: orange;
        padding: 10px;
        margin-top: 10%;
        margin-left: 35%;
        color: white;
        border-radius: 100px 100px 10px 100px;
    }

    @media screen and (max-width:600px) {
        .cover-image {
            width: 100%;
            margin-top: 10%;
            margin-bottom: 30%;
            height: 40vh;
            background: red;
            
        }

        .cover-image img {
            width: 100%;
            height: 60vh;
            border-radius: 10px;
            margin-bottom: 20%;
        }

        .popular-post,
        h1 {
            width: 50%;
            text-align: center;
            align-content: center;
            font-size: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background: orange;
            color: white;
            border-radius: 100px 100px 10px 100px;
        }
    }
</style>
@include('web.layouts.includes.head')
@include('web.layouts.includes.header')
{{-- @include('web.layouts.includes.side_bar') --}}


@yield('contents')

@include('web.layouts.includes.footer')
@include('web.layouts.includes.script')


</html>