<header id="masthead-pro">
    <h1><a href="/"><img src="{{ $dashboard_assets }}/skrn/images/log.png" alt="Logo"></a></h1>
    <div class="container">


        <nav id="site-navigation-pro">
            <ul class="sf-menu">
                <li class="normal-item-pro current-menu-item">
                    <a href="/">Home</a>
                </li>
                <li class="normal-item-pro">
                    <a href="{{ route('media.music') }}">Music</a>

                </li>
                <li class="normal-item-pro ">
                    <a href="{{ route('media.videos') }}">Videos</a>
                </li>

            </ul>
        </nav>

        @if (Auth::user() == true)
            <a class="btn btn-header-pro noselect" href="{{ route('dashboard.home') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-header-pro noselect">Sign In</a>
        @endif

        <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

        <div class="clearfix"></div>


        <nav id="mobile-navigation-pro">

            <ul id="mobile-menu-pro">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                <li class="normal-item-pro">
                    <a href="{{ route('media.music') }}">Music</a>

                </li>
                <li class="normal-item-pro ">
                    <a href="{{ route('media.videos') }}">Videos</a>
                </li>


            </ul>
            <div class="clearfix"></div>

            @if (Auth::user() == true)
                <a class="btn btn-header-pro noselect" href="{{ route('dashboard.home') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-mobile-pro btn-green-pro noselect" role="button">Sign
                    In</a>
            @endif



        </nav>

    </div>
</header>
