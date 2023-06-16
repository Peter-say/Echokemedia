@extends('web.layout.app' , ["meta_title" => "subcategory"])


@section('contents')
<div id="sidebar-bg">

    @include('web.layout.nr_fragment.header')
    @include('web.layout.nr_fragment.sidebar')

    <main id="col-main">
        <div class="dashboard-container">

            <h4 class="heading-extra-margin-bottom"></h4>
            <div class="row">
                @foreach($subcategories as $subcategory)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="item-listing-container-skrn">
                        <a href="{{route('media.music', $subcategory->posts)}}"><img class="music-image" src="{{asset( 'categoryImages/'. $subcategory->cat_image)}}" alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align">
                                <h6><a href="">{{$subcategory->name}}</a></h6>
                                <div class="circle-rating-pro" data-value="" data-animation-start-value="0" data-size="32" data-thickness="3" data-fill="{
                                  &quot;color&quot;: &quot;#42b740&quot;
                                }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;"></span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
                @endforeach
            </div><!-- close .row -->



        </div><!-- close .dashboard-container -->

        <div class="clearfix"></div>


    </main>
</div><!-- close #sidebar-bg-->
@endsection