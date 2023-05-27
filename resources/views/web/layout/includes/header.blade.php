<header id="masthead-pro">
    <h1><a href="/"><img src="{{ $admin_assets }}/skrn/images/log.png" alt="Logo"></a></h1>
    <div class="container">

        @guest
            <nav id="site-navigation-pro">
                <ul class="sf-menu">
                    <li class="normal-item-pro current-menu-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="{{ route('media.music') }}">New Releases</a>
                        <!-- Sub-Menu Example >
                                        <ul class="sub-menu">
                                            <li class="normal-item-pro">
                                                <a href="#!">Sub-menu item 1</a>
                                            </li>
                                            <li class="normal-item-pro">
                                                <a href="#!">Sub-menu item 2</a>
                                            </li>
                                            <li class="normal-item-pro">
                                                <a href="#!">Sub-menu item 3</a>
                                            </li>
                                        </ul>
                                    < End Sub-Menu example -->
                    </li>
                    <li class="normal-item-pro current-menu-item">
                        <a href="{{ route('media.news.index') }}">Celebrity News</a>
                    </li>

                </ul>
            </nav>

            <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign
                In</button>

            <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

            <div class="clearfix"></div>


            <nav id="mobile-navigation-pro">

                <ul id="mobile-menu-pro">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('media.music') }}">New Releases</a>
                        <!-- Mobile Sub-Menu Example >
                                            <ul>
                                                <li class="normal-item-pro">
                                                    <a href="#!">Sub-menu item 1</a>
                                                </li>
                                                <li class="normal-item-pro">
                                                    <a href="#!">Sub-menu item 2</a>
                                                </li>
                                                <li class="normal-item-pro">
                                                    <a href="#!">Sub-menu item 3</a>
                                                </li>
                                            </ul>
                                            < End Mobile Sub-Menu Example -->
                    </li>
                    <li class="normal-item-pro current-menu-item">
                        <a href="{{ route('media.news.index') }}">Celebrity News</a>
                    </li>

                </ul>
                <div class="clearfix"></div>

                <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal"
                    role="button">Sign In</button>

            </nav>
        @else
            <nav id="site-navigation-pro">
                <ul class="sf-menu">
                    <li class="normal-item-pro current-menu-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="{{ route('media.music') }}">New Releases</a>
                        <!-- Sub-Menu Example >
                                                    <ul class="sub-menu">
                                                        <li class="normal-item-pro">
                                                            <a href="#!">Sub-menu item 1</a>
                                                        </li>
                                                        <li class="normal-item-pro">
                                                            <a href="#!">Sub-menu item 2</a>
                                                        </li>
                                                        <li class="normal-item-pro">
                                                            <a href="#!">Sub-menu item 3</a>
                                                        </li>
                                                    </ul>
                                    < End Sub-Menu example -->
                    </li>
                    <li class="normal-item-pro current-menu-item">
                        <a href="{{ route('media.news.index') }}">Celebrity News</a>
                    </li>
                    @if (Auth::user()->role == 'Super Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                    @endif
                        @if (Auth::user()->role == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.dashboard.index') }}">Dashboard</a>
                            </li>
                        @endif

                </ul>
            </nav>

            <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign
                In</button>

            <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

            <div class="clearfix"></div>


            <nav id="mobile-navigation-pro">

                <ul id="mobile-menu-pro">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('media.music') }}">New Releases</a>
                        <!-- Mobile Sub-Menu Example >
                                                <ul>
                                                    <li class="normal-item-pro">
                                                        <a href="#!">Sub-menu item 1</a>
                                                    </li>
                                                    <li class="normal-item-pro">
                                                        <a href="#!">Sub-menu item 2</a>
                                                    </li>
                                                    <li class="normal-item-pro">
                                                        <a href="#!">Sub-menu item 3</a>
                                                    </li>
                                                </ul>
                                                < End Mobile Sub-Menu Example -->
                    </li>
                    <li class="normal-item-pro current-menu-item">
                        <a href="{{ route('media.news.index') }}">Celebrity News</a>
                    </li>
                    @if (Auth::user()->role == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.dashboard.index') }}">Dashboard</a>
                        </li>
                    @endif

                </ul>
                <div class="clearfix"></div>

                <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal"
                    role="button">Sign In</button>

            </nav>
        @endguest
    </div>
</header>
