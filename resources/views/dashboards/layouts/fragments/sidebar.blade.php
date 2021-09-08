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
                    <a href="dragndrop_dragula.html" aria-expanded="false" class="dropdown-toggle">
                   
                        <div class="">
                            <i class="fa fa-home" style="font-size:30px;color:black"></i>
                            <span>Home</span>
                        </div>
                       
                    </a>
                </li>
                <li class="menu">
                    <a href="{{route('admin.over_view')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-book" style="font-size:30px;color:black"></i>
                            <span>Create</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="fa fa-dollar" style="font-size:30px;color:black"></i>
                            <span>Earnings</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="charts_apex.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="fa fa-archive" style="font-size:30px;color:black"></i>
                            <span>Posts</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a target="_blank" href="" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="fa fa-users" style="font-size:30px;color:black"></i>
                            <span>Users</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="{{ route('logout') }}" aria-expanded="false" class="dropdown-toggle">
                        
                        <div class="">
                        <i class="fa fa-sign-out" style="font-size:30px;color:black"></i>
                            <span>Sign-Out</span>
                        </div>
                     
                    </a>
                   
                </li>

            </ul>

        </nav>

</div> 
  
