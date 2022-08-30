<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="{{ route('admin.dashboard') }}" aria-expanded="false" class="dropdown-toggle">

                        <div class="">
                            <i class="fa fa-dashboard" style="font-size:30px;color:black"></i>
                            <span>Dashboard</span>
                        </div>

                    </a>
                </li>
                <li class="menu">
                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="">
                                <span>Create</span>
                            </svg>
                        </div>
                        <div>

                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                        <li>
                            <a href="{{ route('admin.post.create') }}"> Music </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.video.create') }}"> Video </a>
                        </li>
                    </ul>
                </li>

                </li>


                <li class="menu">
                    <a href="{{ route('admin.news.create') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-book" style="font-size:30px;color:black"></i>
                            <span>Create News</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="{{ route('admin.news.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-book" style="font-size:30px;color:black"></i>
                            <span>News</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{ route('admin.earnings.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-dollar" style="font-size:30px;color:black"></i>
                            <span>Earnings</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{ route('admin.category.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-archive" style="font-size:30px;color:black"></i>
                            <span>Category</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{ route('admin.post.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-archive" style="font-size:30px;color:black"></i>
                            <span>Posts</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{ route('admin.users.index') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-users" style="font-size:30px;color:black"></i>
                            <span>Users</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="/" aria-expanded="false" class="dropdown-toggle">

                        <div class="">
                            <i class="fa fa-home" style="font-size:30px;color:black"></i>
                            <span>Home</span>
                        </div>

                    </a>
                </li>

                <li class="menu">

                    <i class="fa fa-sign-out" style="font-size:30px;color:black"></i>

                    <form action="{{ route('logout') }}" method="post">@csrf
                        <button class="dropdown-item text-danger" type="submit">Sign-Out</button>
                    </form>
                </li>

            </ul>

        </nav>

    </div>
