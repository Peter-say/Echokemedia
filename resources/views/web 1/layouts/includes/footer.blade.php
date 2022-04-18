<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/petpea.downloader">facebook</a></li>
                    <li><a href="https://instagram.com/pet_pea_downloader?utm_medium=copy_link">instagram</a></li>
                    {{-- <li><a href="#">Behance</a></li> --}}
                    <li><a href="#">linkedin</a></li>
                    {{-- <li><a href="#">Dribbble</a></li> --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item text-white" type="submit">sign-out</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright 2021 Media Downloader.

                </div>
            </div>
        </div>
    </div>
</footer>
