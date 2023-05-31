	<div class="flexslider progression-studios-dashboard-slider">
		<ul class="slides">
			@foreach($popularPosts as $popularPost)
			<li class="progression_studios_animate_left">
				<div class="progression-studios-slider-dashboard-image-background" style="background-image:url( '{{asset($popularPost->cover_image)}} ');">
					<div class="progression-studios-slider-display-table">
						<div class="progression-studios-slider-vertical-align">

							<div class="container">

								<a class="progression-studios-slider-play-btn afterglow" href="{{asset($popularPost->cover_music)}}">

								<audio id="AudioLightbox-1"  width="100%" height="10">
									<source src="{{asset($popularPost->cover_music)}}" type="video/mp3">
								</audio>

								

								<div class="progression-studios-slider-dashboard-caption-width">
									<div class="progression-studios-slider-caption-align">

										<h2 class="popular-title"><a href="dashboard-movie-profile.html"></a>{{$popularPost->name}}</h2>
										<ul class="progression-studios-slider-meta">
											<li>{{date('d-m-y', strtotime($popularPost->created_at))}} (NG)</li>

										</ul>
										
										 <p class="progression-studios-slider-description">{!! Str::of($popularPost->content_desccription)->limit(160) !!}.</p>

										
										<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="{{asset($popularPost->cover_music)}}"><i class="fas fa-play"></i>Play Music</a>

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

										<h5>Related</h5>
										<ul class="progression-studios-staring-slider">

										</ul>

									</div><!-- close .progression-studios-slider-caption-align -->
								</div><!-- close .progression-studios-slider-caption-width -->

							</div><!-- close .container -->

						</div><!-- close .progression-studios-slider-vertical-align -->
					</div><!-- close .progression-studios-slider-display-table -->

					<div class="progression-studios-slider-mobile-background-cover"></div>
				</div><!-- close .progression-studios-slider-image-background -->
			</li>
			@endforeach
		</ul>
	</div><!-- close .progression-studios-slider - See /js/script.js file for options -->

	@include('web.layout.nr_fragment.genres-pro')
	<div class="clearfix"></div>