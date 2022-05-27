<!doctype html>
<html lang="en">

<!-- Mirrored from progression-studios.com/skrn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 11:16:56 GMT -->

@include('web.layout.includes.head' , ["metaData" => $metaData ?? []])


<style>
    #text{
        color: rgb(1, 75, 1);
    }
    #form-submit {
        background-color: rgb(1, 75, 1);
    }

    .text-content{
        color: rgb(1, 75, 1);
    }

    .music-image {
        width: 100%;
        height: 40vh;
    }

    .popular-title {
        color: green;
    }

    .post-title {
        text-transform: uppercase;
        color: green;
    }

    .share-button{
        margin-right: 8px;
    }

</style>

<body>

    @yield('contents')

    @include('web.layout.includes.script')

</body>

<!-- Mirrored from progression-studios.com/{{ $admin_assets }}/skrn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 11:17:28 GMT -->

</html>
