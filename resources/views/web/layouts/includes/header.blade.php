<header class="">
    <nav class=" navbar navbar-expand-lg">
    <div class="container">
    {{-- <a class="navbar-brand" href="{{ route("media.about") }}">
        <img src="{{$admin_assets}}/assets/img/m-logo.png"  alt="">
        <h2>Media Creator<em>.</em></h2>
    </a> --}}
        <a class="navbar-brand" href="/">
            <h2>Media Creator<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('media.about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('media.blogs') }}">Blog </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact Us</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign-in</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign-up</a>
                        </li>

                    @endif

                @else

                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('media.about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('media.blogs') }}">Blog</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact Us</a>
                    </li>
                    {{-- <li class="nav-item">
                    <form action="{{ route('logout')}}" method="post">@csrf
                        <button class="nav-link" type="submit">LogOut</button>
                    </form>
                    </li> --}}

                @endguest
            </ul>
        </div>
    </div>
    </nav>
</header>
