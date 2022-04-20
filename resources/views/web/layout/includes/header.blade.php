<header id="masthead-pro">
    <div class="container">

        <h1><a href="index.html"><img src="{{ $admin_assets }}/skrn/images/logo.png" alt="Logo"></a></h1>

        <nav id="mobile-navigation-pro">

            <ul id="mobile-menu-pro">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="{{ route('media.newreleases')}}">New Releases</a>
                    <!-- Mobile Sub-Menu Example >
  
                       < End Mobile Sub-Menu Example -->
                </li>

            </ul>
            <div class="clearfix"></div>

            <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>

        </nav>
    </div>
</header>