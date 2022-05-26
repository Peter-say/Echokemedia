<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $metaData['meta_description'] ?? '' }}">
    <meta name="keywords" content="{{ $metaData['meta_keywords'] ?? '' }}">

    <!--  Essential META Tags -->
    <meta property="og:title" content="{{ $metaData['og_title'] ?? '' }}">
    <meta property="og:description" content="{{ $metaData['og_description'] ?? '' }}">
    <meta property="og:image" content="{{ $metaData['og_image'] ?? '' }}">
    <meta property="og:url" content="{{ $metaData['og_url'] ?? '' }}">
    <meta name="twitter:card" content="{{ $metaData['twitter_card'] ?? '' }}">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="{{ $metaData['og_site_name'] ?? '' }}">
    <meta name="twitter:image:alt" content="{{ $metaData['twitter_image_alt'] ?? '' }}">

    <meta property="og:image:width" content="{{ $metaData['og_image_width'] ?? '500' }}">
    <meta property="og:image:width" content="{{ $metaData['og_image_height'] ?? '500' }}">
    <meta property="og:type" content="{{ $metaData['og_type'] ?? 'music' }}">



    <link rel="stylesheet" href="{{ $admin_assets }}/skrn/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ $admin_assets }}/skrn/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

    <link rel="stylesheet" href="{{ $admin_assets }}/skrn/icons/fontawesome/css/fontawesome-all.min.css">
    <link href="{{ $admin_assets }}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{ $admin_assets }}/skrn/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css">
    <!-- iconsmind.com Icons -->
    <link href="{{ $admin_assets}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $admin_assets }}/skrn/images/icon.png">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/fontawesome.css">
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="{{ $admin_assets}}/asap/css/owl.css">

    <title>Echokemedia</title>
</head>