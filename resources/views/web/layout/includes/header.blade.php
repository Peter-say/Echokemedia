<header id="masthead-pro">
    <div class="container">

        <h1><a href="index.html"><img src="{{ $admin_assets }}/skrn/images/logo.png" alt="Logo"></a></h1>

        <nav id="mobile-navigation-pro">
            @guest
                <ul id="mobile-menu-pro">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('media.newreleases') }}">New Releases</a>
                        <!-- Mobile Sub-Menu Example >
      
                           < End Mobile Sub-Menu Example -->
                    </li>

                </ul>
                <div class="clearfix"></div>

                <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal"
                    role="button">Sign In</button>
            @else
                <ul id="mobile-menu-pro">

                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('media.newreleases') }}">New Releases</a>
                        <!-- Mobile Sub-Menu Example >
      
                           < End Mobile Sub-Menu Example -->
                    </li>

                </ul>

                @if (Auth::user()->role == 'Admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.dashboard.index') }}">Dashboard</a>
                    </li>
                @endif

            @endguest
        </nav>
    </div>
</header>
