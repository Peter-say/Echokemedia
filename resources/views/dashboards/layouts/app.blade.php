<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 16:22:18 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Echokemedia||{{ Auth::user()->name }} </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $dashboard_assets }}/skrn/images/icon.png">
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>


    <!-- clone bootstrap -->

    <!-- <link rel="icon" type="image/x-icon" href="{{$dashboard_assets}}/dashboard/img/m-icon" /> -->
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ $dashboard_assets}}/css/styles.css" rel="stylesheet" />

    <!-- end copy bootstrap -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ $dashboard_assets}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $dashboard_assets}}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ $dashboard_assets}}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ $dashboard_assets}}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ $dashboard_assets}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <link href="{{ $dashboard_assets}}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ $dashboard_assets}}/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <link href="{{ $dashboard_assets}}/assets/css/pages/error/style-503.css" rel="stylesheet" type="text/css" />
    <link href="{{ $dashboard_assets}}/assets/css/pages/helpdesk.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>


    <x-head.tinymce-config />

    <style>
        .cat-img-size {
            width: 100px;
            height: 100px;
        }

        .post-img-size-on-dashboard {
            width: 100px;
            height: 50px;
        }
        #style-option{
            border-radius: 10px;
            font-size: 18px 
        }
        select{
            width: 100%;
            border-radius: 100px
            padding: 8px;
        }

        .profile-image-container{
            border: 2px solid white;
            padding: 6px;
        }
        .profile-image-container-img-fluid{
            width: 150px;
            height: 100px;
        }

        .list-users-image{
            width: 100px
        }
    </style>
</head>

<body>
    @include('dashboards.layouts.fragments.topnavbar')
    @include('dashboards.layouts.fragments.sidebar')

    @yield('contents')

    <!-- <script>
          var category = document.getElementById('category');
        var subcategory = document.getElementById('subcategory');
        category.onclick = function() {
            if(category.style.display === "block") {
                alert('yes')
                subcategory.style.display = "block";
            } else {
                subcategory.style.display = "none"
            }
        }
    </script> -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ $dashboard_assets}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ $dashboard_assets}}/bootstrap/js/popper.min.js"></script>
    <script src="{{ $dashboard_assets}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ $dashboard_assets}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ $dashboard_assets}}/assets/js/app.js"></script>

    <script src="https://cdn.tiny.cloud/1/9kceokxig3p7h7aj82ykjwy3ohrak2bq8wozjh90w23fr1mz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdn.tiny.cloud/1/9kceokxig3p7h7aj82ykjwy3ohrak2bq8wozjh90w23fr1mz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });

    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 16:28:10 GMT -->

</html>
