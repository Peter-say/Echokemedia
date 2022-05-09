<div class="dashboard-container">

    <h4 class="heading-extra-margin-bottom">Musics</h4>
    <div class="row">
       @foreach($posts as $post)
       <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="item-listing-container-skrn">
                <a href="{{route('post.show' , $post->name)}}"><img class="music-image" src="{{asset( $post->cover_image)}}" alt="Listing"></a>
                <div class="item-listing-text-skrn">
                   <div class="item-listing-text-skrn-vertical-align">
                        <h6><a href="{{route('post.show' , $post->name)}}">{{$post->name}}</a></h6>
                        <div class="circle-rating-pro" data-value="{{$post->views_count}}" data-animation-start-value="0" data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">{{$post->views_count}}</span></div>
                    </div><!-- close .item-listing-text-skrn-vertical-align -->
                </div><!-- close .item-listing-text-skrn -->
            </div><!-- close .item-listing-container-skrn -->
        </div><!-- close .col -->
       @endforeach
    </div><!-- close .row -->


    {!! $posts->links('pagination::bootstrap-4') !!}


</div><!-- close .dashboard-container -->