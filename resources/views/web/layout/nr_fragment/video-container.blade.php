<div class="dashboard-container">

    <h4 class="heading-extra-margin-bottom">Videos</h4>
    <div class="row">
       @foreach($videos as $video)
       <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="item-listing-container-skrn">
                <a href="{{route('post.show' , $video->name)}}"><img class="music-image" src="{{asset( $video->cover_image)}}" alt="Listing"></a>
                <div class="item-listing-text-skrn">
                   <div class="item-listing-text-skrn-vertical-align">
                        <h6><a href="{{route('post.show' , $video->name)}}">{{$video->name}}</a></h6>
                        <div class="circle-rating-pro" data-value="{{$video->views_count}}" data-animation-start-value="0" data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">{{$video->views_count}}</span></div>
                    </div><!-- close .item-listing-text-skrn-vertical-align -->
                </div><!-- close .item-listing-text-skrn -->
            </div><!-- close .item-listing-container-skrn -->
        </div><!-- close .col -->
       @endforeach
    </div><!-- close .row -->


    <ul class="page-numbers">
        <li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
        <li><span class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="#!">2</a></li>
        <li><a class="page-numbers" href="#!">3</a></li>
        <li><a class="page-numbers" href="#!">4</a></li>
        <li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li>
    </ul>


</div><!-- close .dashboard-container -->