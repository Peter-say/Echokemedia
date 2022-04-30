@extends('web.layout.app' , ["meta_title" => "newreleases"])


@section('contents')
<div id="sidebar-bg">

  @include('web.layout.nr_fragment.header')
  @include('web.layout.nr_fragment.sidebar')

  <main id="col-main">

    <div class="flexslider progression-studios-dashboard-slider">
      <ul class="slides">

        <li class="progression_studios_animate_left">
          <div class="progression-studios-slider-dashboard-image-background" style="background-image:url({{asset($post->cover_image)}});">
            <div class="progression-studios-slider-display-table">
              <div class="progression-studios-slider-vertical-align">

                <div class="container">

                  <a class="progression-studios-slider-play-btn afterglow" href="{{route('post.download' , $post->id)}}"><i class="fas fa-play"></i></a>

                  <audio id="VideoLightbox-1" poster="../files/View_From_A_Blue_Moon_Trailer-HD.jpg" width="960" height="540">
                    <source src="{{asset($post->cover_music)}}" type="audio/mp3">
                  </audio>

                  <div class="circle-rating-pro" data-value="0.86" data-animation-start-value="0.86" data-size="70" data-thickness="6" data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">8.6</span></div>

                  <div class="progression-studios-slider-dashboard-caption-width">
                    <div class="progression-studios-slider-caption-align">
                      <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="{{route('post.download' , $post->id)}}"><i class="fas fa-play"></i> Download</a>


                      <div class="clearfix"></div>


                    </div><!-- close .progression-studios-slider-caption-align -->
                  </div><!-- close .progression-studios-slider-caption-width -->

                </div><!-- close .container -->

              </div><!-- close .progression-studios-slider-vertical-align -->
            </div><!-- close .progression-studios-slider-display-table -->

            <div class="progression-studios-slider-mobile-background-cover"></div>
          </div><!-- close .progression-studios-slider-image-background -->
        </li>

      </ul>
    </div><!-- close .progression-studios-slider - See /js/script.js file for options -->

    @include('web.layout.nr_fragment.post-details-description')
    @include('web.layout.nr_fragment.post-details-container')

    <div class="clearfix"></div>


  </main>
</div><!-- close #sidebar-bg-->
@endsection