 <style>
     .searchText_nav {
         width: 60%;
         padding: 8px;
         border-radius: 8px;
         border: solid rgb(255, 145, 0);
     }

     .searchText_nav input {
         font-size: 20px;
         text-transform: uppercase;
     }

     .navbar-item {
         margin-top: 10%;
     }

     @media only screen and (min-width:600px) {
         .navbar-item {
             margin-top: 10px;
         }
     }

     @media only screen and (max-width:600px) {
         .navbar-item {
             margin-bottom: 10%;
         }
     }

     .nav-submit {
         padding: 8px;
         background: rgb(255, 136, 0);
         color: white;
         border-radius: 8px;
         border: none;
     }

     .btn-primary {
         color: #292521;

     }

 </style>

 <header class="">

     <nav class=" navbar navbar-expand-lg ">
         <div class="container">
             {{-- <a class="navbar-brand" href="{{ route("media.about") }}">
            <img src="{{$admin_assets}}/assets/img/m-logo.png" alt="">
            </a> --}}

             <a class="navbar-brand" href="/">
                 <h2>Echokemedia<em>.</em></h2>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     @guest

                         <li class="nav-item active">
                             <a class="nav-link" href="/">Home
                                 <span class="sr-only">(current)</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('media.about') }}">About Us</a>
                         </li>
                         <!-- <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('media.blogs') }}">Blog </a>
                                                    </li> -->

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('media.contact') }}">Contact Us</a>
                         </li>
                         <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign-in</a>
                         </li>
                         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign-up</a>
                         </li>


                     @else

                         <li class="nav-item active">
                             <a class="nav-link" href="/">Home
                                 <span class="sr-only">(current)</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('media.about') }}">About Us</a>
                         </li>
                         <!-- <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('media.blogs') }}">Blog</a>
                                                </li> -->

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('media.contact') }}">Contact Us</a>
                         </li>
                         <!-- <li class="nav-item">
                                                <form action="{{ route('logout') }}" method="post">@csrf
                                                    <button class="nav-link" type="submit">LogOut</button>
                                                </form>
                                                
                                                </li>  -->
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
                 </ul>

             </div>
     </nav>

     <div class="row">
         <div class="col-lg-12">
             <div class="navbar-item search">
                 <form id="search_form" method="GET" action="{{ route('web.search') }}">

                     <input type="text" name="query" class="searchText_nav" placeholder="type to search..."
                         autocomplete="on" />
                     <input type="submit" class="nav-submit" value="Search" />

                 </form>
             </div>
         </div>
     </div>
 </header>
