<style>
    .go-dashboard-button hover{
        background-color: white;
    }
</style>

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
            <button class="btn text-dark btn-header-pro go-dashboard-button ">
                <a href="{{ route('dashboard.home') }}">Dashboard</a>
            </button>
        @else
            <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal"
                role="button">Sign
                In</button>

            <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
        @endif


        <div class="clearfix"></div>


    </div>
</header>
