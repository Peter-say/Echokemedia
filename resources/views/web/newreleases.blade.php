@extends('web.layout.app')


@section('contents')
    <div id="sidebar-bg">

        @include('web.layout.nr_fragment.header')


        @include('web.layout.nr_fragment.sidebar')




            <div id="search-mobile-nav-pro">
                <input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
            </div>

        </nav>

    </header>



    <nav id="sidebar-nav">
        <!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
        <ul id="vertical-sidebar-nav" class="sf-menu">
            <li class="normal-item-pro current-menu-item">
                <a href="dashboard-home.html">
                    <span class="icon-Old-TV"></span>
                    TV Series
                </a>
            </li>
            <li class="normal-item-pro">
                <a href="dashboard-movies.html">
                    <span class="icon-Reel"></span>
                    Movies
                </a>
            </li>
            <li class="normal-item-pro">
                <a href="dashboard-playlists.html">
                    <span class="icon-Movie"></span>
                    Playlists
                </a>
            </li>
            <li class="normal-item-pro">
                <a href="dashboard-new-arrivals.html">
                    <span class="icon-Movie-Ticket"></span>
                    New Arrivals
                </a>
            </li>
            <li class="normal-item-pro">
                <a href="dashboard-coming-soon.html">
                    <span class="icon-Clock"></span>
                    Coming Soon
                </a>
            </li>

        </ul>
        <div class="clearfix"></div>
    </nav>

    <main id="col-main">



        <div class="flexslider progression-studios-dashboard-slider">
            <ul class="slides">
                <li class="progression_studios_animate_left">
                    <div class="progression-studios-slider-dashboard-image-background" style="background-image:url({{ $admin_assets }}/skrn/images/demo/dashboard-slide-1.jpg);">
                        <div class="progression-studios-slider-display-table">
                            <div class="progression-studios-slider-vertical-align">

                                <div class="container">

                                    <a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i></a>

                                    <video id="VideoLightbox-1" poster="../files/View_From_A_Blue_Moon_Trailer-HD.jpg" width="960" height="540">
                                        <source src="http://progression-studios.com/files/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4">
                                    </video>

                                    <div class="circle-rating-pro" data-value="0.86" data-animation-start-value="0.86" data-size="70" data-thickness="6" data-fill="{
                                                  &quot;color&quot;: &quot;#42b740&quot;
                                                  }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">8.6</span></div>

                                    <div class="progression-studios-slider-dashboard-caption-width">
                                        <div class="progression-studios-slider-caption-align">
                                            <h6>TV Series</h6>
                                            <ul class="progression-studios-slider-rating">
                                                <li>PG-13</li>
                                                <li>HD</li>
                                            </ul>
                                            <h2><a href="dashboard-movie-profile.html">Seven Days in Ibiza</a></h2>
                                            <ul class="progression-studios-slider-meta">
                                                <li>15 August, 2016 (UK)</li>
                                                <li>163 min.</li>
                                                <li>Documentary</li>
                                            </ul>
                                            <p class="progression-studios-slider-description">A sex columnist,
                                                Carrie Bradshaw, and her three friends Samantha, Charlotte
                                                and Miranda explore Manhattan's dating scene, chronicling the mating
                                                habits of
                                                single New Yorkers.</p>

                                            <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i> Watch
                                                Trailer</a>


                                            <div class="progression-studios-slider-more-options">
                                                <i class="fas fa-ellipsis-h"></i>
                                                <ul>
                                                    <li><a href="#!">Add to Favorites</a></li>
                                                    <li><a href="#!">Add to Watchlist</a></li>
                                                    <li><a href="#!">Add to Playlist</a></li>
                                                    <li><a href="#!">Share...</a></li>
                                                    <li><a href="#!">Write A Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>

                                            <h5>Starring</h5>
                                            <ul class="progression-studios-staring-slider">
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-1.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-2.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-3.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-4.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-5.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-6.jpg" alt="Starring"></a></li>
                                            </ul>

                                        </div><!-- close .progression-studios-slider-caption-align -->
                                    </div><!-- close .progression-studios-slider-caption-width -->

                                </div><!-- close .container -->

                            </div><!-- close .progression-studios-slider-vertical-align -->
                        </div><!-- close .progression-studios-slider-display-table -->

                                        <div class="circle-rating-pro" data-value="0.86" data-animation-start-value="0.86"
                                            data-size="70" data-thickness="6" data-fill="{
                    &quot;color&quot;: &quot;#42b740&quot;
                    }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">8.6</span></div>

                                        <div class="progression-studios-slider-dashboard-caption-width">
                                            <div class="progression-studios-slider-caption-align">
                                                <h6>TV Series</h6>
                                                <ul class="progression-studios-slider-rating">
                                                    <li>PG-13</li>
                                                    <li>HD</li>
                                                </ul>
                                                <h2><a href="dashboard-movie-profile.html">Seven Days in Ibiza</a></h2>
                                                <ul class="progression-studios-slider-meta">
                                                    <li>15 August, 2016 (UK)</li>
                                                    <li>163 min.</li>
                                                    <li>Documentary</li>
                                                </ul>
                                                <p class="progression-studios-slider-description">A sex columnist,
                                                    Carrie Bradshaw, and her three friends Samantha, Charlotte
                                                    and Miranda explore Manhattan's dating scene, chronicling the mating
                                                    habits of
                                                    single New Yorkers.</p>

                                                <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow"
                                                    href="#VideoLightbox-1"><i class="fas fa-play"></i> Watch
                                                    Trailer</a>


                                                <div class="progression-studios-slider-more-options">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                    <ul>
                                                        <li><a href="#!">Add to Favorites</a></li>
                                                        <li><a href="#!">Add to Watchlist</a></li>
                                                        <li><a href="#!">Add to Playlist</a></li>
                                                        <li><a href="#!">Share...</a></li>
                                                        <li><a href="#!">Write A Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>

                                                <h5>Starring</h5>
                                                <ul class="progression-studios-staring-slider">
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-1.jpg"
                                                                alt="Starring"></a></li>
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-2.jpg"
                                                                alt="Starring"></a></li>
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-3.jpg"
                                                                alt="Starring"></a></li>
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-4.jpg"
                                                                alt="Starring"></a></li>
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-5.jpg"
                                                                alt="Starring"></a></li>
                                                    <li><a href="#!"><img
                                                                src="{{ $admin_assets }}/skrn/images/demo/user-6.jpg"
                                                                alt="Starring"></a></li>
                                                </ul>

                                <div class="container">

                                    <a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i></a>

                                    <video id="VideoLightbox-2" poster="../files/View_From_A_Blue_Moon_Trailer-HD.jpg" width="960" height="540">
                                        <source src="http://progression-studios.com/files/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4">
                                    </video>

                            <div class="progression-studios-slider-mobile-background-cover"></div>
                        </div><!-- close .progression-studios-slider-image-background -->
                    </li>
                    <li class="progression_studios_animate_in">
                        <div class="progression-studios-slider-dashboard-image-background"

                                        <a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-2"><i
                                                class="fas fa-play"></i></a>

                                        <video id="VideoLightbox-2" poster="../files/View_From_A_Blue_Moon_Trailer-HD.jpg"
                                            width="960" height="540">
                                            <source
                                                src="http://progression-studios.com/files/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                                type="video/mp4">
                                        </video>

                                        <div class="circle-rating-pro" data-value="0.82" data-animation-start-value="0.82"
                                            data-size="70" data-thickness="6" data-fill="{
                    &quot;color&quot;: &quot;#42b740&quot;
                    }" data-empty-fill="#203521" data-reverse="true"><span style="color:#42b740;">8.2</span></div>

                                    <div class="progression-studios-slider-dashboard-caption-width">
                                        <div class="progression-studios-slider-caption-align">
                                            <h6 class="light-fonts-pro">TV Series</h6>
                                            <ul class="progression-studios-slider-rating">
                                                <li>PG-13</li>
                                                <li>HD</li>
                                            </ul>
                                            <h2 class="light-fonts-pro"><a href="dashboard-movie-profile.html">Made
                                            <ul class="progression-studios-slider-meta">
                                                <li>15 August, 2016 (UK)</li>
                                                <li>163 min.</li>
                                                <li>Documentary</li>
                                            </ul>
                                            <p class="progression-studios-slider-description light-fonts-pro">A sex
                                                columnist, Carrie Bradshaw, and her three friends Samantha,
                                                Charlotte
                                                and Miranda explore Manhattan's dating scene, chronicling the mating
                                                habits of
                                                single New Yorkers.</p>

                                            <a class="btn btn-green-pro btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i> Watch
                                                Trailer</a>
                                            <div class="progression-studios-slider-more-options">
                                                <i class="fas fa-ellipsis-h"></i>
                                                <ul>
                                                    <li><a href="#!">Add to Favorites</a></li>
                                                    <li><a href="#!">Add to Watchlist</a></li>
                                                    <li><a href="#!">Add to Playlist</a></li>
                                                    <li><a href="#!">Share...</a></li>
                                                    <li><a href="#!">Write A Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>

                                            <h5 class="light-fonts-pro">Starring</h5>
                                            <ul class="progression-studios-staring-slider">
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-1.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-2.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-3.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-4.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-5.jpg" alt="Starring"></a></li>
                                                <li><a href="#!"><img src="{{ $admin_assets }}/skrn/images/demo/user-6.jpg" alt="Starring"></a></li>
                                            </ul>

                                        </div><!-- close .progression-studios-slider-caption-align -->
                                    </div><!-- close .progression-studios-slider-caption-width -->

                                </div><!-- close .container -->

                            </div><!-- close .progression-studios-slider-vertical-align -->
                        </div><!-- close .progression-studios-slider-display-table -->

            @include('web.layout.nr_fragment.dashboard_genres')


            <div class="clearfix"></div>

            @include('web.layout.nr_fragment.dashboard-container')

            <!-- close .dashboard-container -->
        </main>


    </div><!-- close #sidebar-bg-->

    <!-- Required Framework JavaScript -->
@endsection
