<header class="">
    <nav class=" navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link" href="{{ route('media.blogs') }}">Blog Entries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('media.posts') }}">Post Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('media.contact_us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a>
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
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a href=""  class="nav-link " type="submit">Logout</a>
                        </form>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
    </nav>
</header>
