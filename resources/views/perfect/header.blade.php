 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">

        <a href="">
            <img src="{{$admin_assets}}/assets/img/m-icon.jpeg" alt="logo">
        </a>
        <a class="navbar-brand" href="#page-top">Media_Creator</a>



        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                @guest
                @if (Route::has('register'))
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>


                @endif

                @else
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                <li class="nav-item">
                    <form action="{{ route('logout')}}" method="post">@csrf
                        <button class="dropdown-item text-white" type="submit">Logout</button>
                    </form>
                </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>