@foreach($popularPosts as $popularPost)
	        <li class="progression_studios_animate_in">
	            <div class="progression-studios-slider-dashboard-image-background" style="background-image:url({{ $dashboard_assets }}/skrn/images/demo/dashboard-slide-2.jpg);">
	                <div class="progression-studios-slider-display-table">
	                    <div class="progression-studios-slider-vertical-align">

	                        <div class="container">

	                            <a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i></a>

	                            <video id="VideoLightbox-2" poster="../files/View_From_A_Blue_Moon_Trailer-HD.jpg" width="960" height="540">
	                                <source src="http://progression-studios.com/files/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4">
	                            </video>

	                            <div class="circle-rating-pro" data-value="0.82" data-animation-start-value="0.82" data-size="70" data-thickness="6" data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }" data-empty-fill="#203521" data-reverse="true"><span style="color:#42b740;">8.2</span></div>

	                            <div class="progression-studios-slider-dashboard-caption-width">
	                                <div class="progression-studios-slider-caption-align">
	                                    <h6 class="light-fonts-pro">TV Series</h6>
	                                    <ul class="progression-studios-slider-rating">
	                                        <li>PG-13</li>
	                                        <li>HD</li>
	                                    </ul>
	                                    <h2 class="light-fonts-pro"><a href="dashboard-movie-profile.html">{{$popularPost->name}}</a></h2>
	                                    <ul class="progression-studios-slider-meta">
	                                        <li>{{date('d-m-y', strtotime($popularPost->created_at))}} (NG)</li>
	                                        <li>163 min.</li>
	                                    </ul>
	                                    <p class="progression-studios-slider-description light-fonts-pro">{{Str::of($popularPost->content_desccription)->limit(160)}}.</p>

	                                    <a class="btn btn-green-pro btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i> Watch Trailer</a>
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
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-1.jpg" alt="Starring"></a></li>
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-2.jpg" alt="Starring"></a></li>
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-3.jpg" alt="Starring"></a></li>
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-4.jpg" alt="Starring"></a></li>
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-5.jpg" alt="Starring"></a></li>
	                                        <li><a href="#!"><img src="{{ $dashboard_assets }}/skrn/images/demo/user-6.jpg" alt="Starring"></a></li>
	                                    </ul>

	                                </div><!-- close .progression-studios-slider-caption-align -->
	                            </div><!-- close .progression-studios-slider-caption-width -->

	                        </div><!-- close .container -->

	                    </div><!-- close .progression-studios-slider-vertical-align -->
	                </div><!-- close .progression-studios-slider-display-table -->

	                <div class="progression-studios-slider-mobile-background-cover-dark"></div>
	            </div><!-- close .progression-studios-slider-image-background -->
	        </li>
	        @endforeach