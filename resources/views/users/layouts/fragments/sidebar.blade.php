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
<<<<<<< HEAD
                    <a href="/" aria-expanded="false" class="dropdown-toggle">
=======
<<<<<<< HEAD
                    <a href="/" aria-expanded="false" class="dropdown-toggle">
=======
                    <a href="{{route('user.dashboard.index')}}" aria-expanded="false" class="dropdown-toggle">
>>>>>>> 78cdeddc6b0f2ec03bafb7635f9178e800932631
>>>>>>> 7bd2ae88f6d0715684296711d5dcec8592017ab9

                        <div class="">
                            <i class="fa fa-home" style="font-size:30px;color:black"></i>
                            <span>Home</span>
                        </div>

                    </a>
                </li>
                <li class="menu">
                    <a href="{{route('user.post.index')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-book" style="font-size:30px;color:black"></i>
                            <span>Create</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{route('user.earnings')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-dollar" style="font-size:30px;color:black"></i>
                            <span>Earnings</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{route('user.posts_list')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-archive" style="font-size:30px;color:black"></i>
                            <span>Posts</span>
                        </div>
                    </a>
                </li>

               

                <li class="menu">

                    <i class="fa fa-sign-out" style="font-size:30px;color:black"></i>

                    <form action="{{ route('logout')}}" method="post">@csrf
                        <button class="dropdown-item text-danger" type="submit">Sign-Out</button>
                    </form>
                </li>

            </ul>

        </nav>

    </div>