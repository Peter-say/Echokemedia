@extends('web.layout.app')


@section('contents')
<div id="sidebar-bg">

    @include('web.layout.nr_fragment.header')
    @include('web.layout.nr_fragment.sidebar')

    <main id="col-main">
        @include('web.layout.nr_fragment.flexslider')
        @include('web.layout.nr_fragment.dashboard-container')

        <div class="clearfix"></div>


    </main>
</div><!-- close #sidebar-bg-->
@endsection