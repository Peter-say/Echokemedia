@extends('web.layout.app' , ["meta_title" => "music"])


@section('contents')
<div id="sidebar-bg">

    @include('web.layout.nr_fragment.header')
    @include('web.layout.nr_fragment.sidebar')

    <main id="col-main">
        @include('web.layout.nr_fragment.video-fragments.video-flexslider')
        @include('web.layout.nr_fragment.video-container')

        <div class="clearfix"></div>


    </main>
</div><!-- close #sidebar-bg-->
@endsection