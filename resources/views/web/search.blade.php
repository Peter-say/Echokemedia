@extends('web.layout.app' , ["meta_title" => "newreleases"])


@section('contents')
<div id="sidebar-bg">

    @include('web.layout.nr_fragment.header')
    @include('web.layout.nr_fragment.sidebar')

    <main id="col-main">
        <div class="dashboard-container">
            @if($posts->count())
            <h4 class="heading-extra-margin-bottom mt-3">All Results</h4>
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


            <ul class="page-numbers">
                <li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
                <li><span class="page-numbers current">1</span></li>
                <li><a class="page-numbers" href="#!">2</a></li>
                <li><a class="page-numbers" href="#!">3</a></li>
                <li><a class="page-numbers" href="#!">4</a></li>
                <li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li>
            </ul>

            @else
            <div class="container-fluid justify-content-center mt-5">
                <h3>Sorry, no posts at the moment. If you searched for something, please try again with some
                    different keywords.</h3>
                    
            </div>
            @endif
        </div><!-- close .dashboard-container -->
        <div class="clearfix"></div>


    </main>
</div><!-- close #sidebar-bg-->
@endsection