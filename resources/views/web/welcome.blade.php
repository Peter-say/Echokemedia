@extends('web.layout.app' , ["meta_title" => "Echokemedia"])


@section('contents')

    @include('web.layout.includes.header')

    @include('notifications.flash_messages')
    @include('web.layout.includes.slider')
    <!-- close .progression-studios-slider - See /js/script.js file for options -->

    <div id="content-pro">

        <div class="container">


            <div class="row">
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <img src="{{ $dashboard_assets }}/skrn/images/demo/home-1.jpg" class="img-fluid"
                        alt="Watch in Any Devices">
                </div>
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <h2 class="short-border-bottom">Watch On Any Device</h2>
                    <p>The media you view and listen to from or on <em>Echokemedia</em> doesn't select a particular device cause it's an anchor of equality😉 </p>
                    <div style="height:15px;"></div>
                    <p><a class="btn btn-green-pro" href="{{route('media.music')}}" role="button">Learn More</a></p>
                </div>
            </div><!-- close .row -->


            <div class="row">
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <h2 class="short-border-bottom">Make Your Own Playlist</h2>
                    <p><em>Echokemedia</em> allows you to be able to create your own playlist and be the master with your masterpiece ♨️</p>
                    <div style="height:15px;"></div>
                    <p><a class="btn btn-green-pro" href="{{route('media.music')}}" role="button">Start Watching</a></p>
                </div>
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <img src="{{ $dashboard_assets }}/skrn/images/demo/home-2.jpg" class="img-fluid"
                        alt="Make Your Own Playlist">
                </div>
            </div><!-- close .row -->


            <div class="row">
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <img src="{{ $dashboard_assets }}/skrn/images/demo/home-3.jpg" class="img-fluid"
                        alt="Watch in Ultra HD">
                </div>
                <div class="col-md my-auto">
                    <!-- .my-auto vertically centers contents -->
                    <h2 class="short-border-bottom">Watch in Ultra HD</h2>
                    <p> Be our guest and be the one to choose your screen, we'll be here to ensure it goes as planned 👐🏻🦾</p>
                    <div style="height:15px;"></div>
                    <p><a class="btn btn-green-pro" href="{{route('media.music')}}" role="button">Latest Jam</a></p>
                </div>
            </div><!-- close .row -->

            <div style="height:35px;"></div>

            <div class="clearfix"></div>
        </div><!-- close .container -->


        <hr>

        {{-- <div class="progression-pricing-section-background">
            <div class="container">

                <div class="row">
                    <div class="mx-auto">
                        <div style="height:70px;"></div>
                        <h2 class="short-border-bottom">Our Plans &amp; Pricing</h2>
                    </div>
                </div><!-- close .row -->

                <div style="height:25px;"></div>

                <div class="row">
                    <div class="col-md">
                        <ul class="checkmark-list-pro">
                            <li>1 month unlimited access!</li>
                            <li>Thousands of TV shows, movies &amp; more.</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <ul class="checkmark-list-pro">
                            <li>Stream on your phone, laptop, tablet or TV.</li>
                            <li>You can even Download & watch offline.</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <ul class="checkmark-list-pro">
                            <li>1 month unlimited access!</li>
                            <li>Thousands of TV shows, movies &amp; more.</li>
                        </ul>
                    </div>
                </div><!-- close .row -->


                <div class="pricing-table-pro">
                    <div class="row">
                        <div class="col-md">
                            <div class="pricing-table-col">
                                <h6>FREE TRIAL</h6>
                                <h2>Free</h2>
                                <ul>
                                    <li>720p Available</li>
                                    <li>Watch on any Device</li>
                                    <li>20 Movies and Shows</li>
                                    <li>Download Available</li>
                                </ul>
                                <p><a class="btn" href="signup-step2.html" role="button">Choose Plan</a></p>
                            </div><!-- close .pricing-table-col -->
                        </div><!-- close .col-md-12 -->
                        <div class="col-md">
                            <div class="pricing-table-col pricing-table-col-shadow-pro">
                                <h6>STARTER</h6>
                                <h2><sup>$</sup>10<span> / month</span></h2>
                                <ul>
                                    <li>HD Available</li>
                                    <li>Watch on any Device</li>
                                    <li>70 Movies and Shows</li>
                                    <li>Download Available</li>
                                </ul>
                                <p><a class="btn btn-green-pro" href="signup-step2.html" role="button">Choose Plan</a>
                                </p>
                            </div><!-- close .pricing-table-col -->
                        </div><!-- close .col-md-12 -->
                        <div class="col-md">
                            <div class="pricing-table-col">
                                <h6>PREMIUM</h6>
                                <h2><sup>$</sup>14<span> / month</span></h2>
                                <ul>
                                    <li>Ultra HD Available</li>
                                    <li>Watch on any Device</li>
                                    <li>Unlimited Movies and Shows</li>
                                    <li>Download Available</li>
                                </ul>
                                <p><a class="btn" href="signup-step2.html" role="button">Choose Plan</a></p>
                            </div><!-- close .pricing-table-col -->
                        </div><!-- close .col-md-12 -->
                    </div><!-- close .row -->
                </div><!-- close .pricing-table-pro -->


                <div class="clearfix"></div>
            </div><!-- close .container -->

        </div><!-- close .progression-pricing-section-background --> --}}

    </div><!-- close #content-pro -->

    @include('web.layout.includes.footer')


    <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


    <!-- Modal -->
    @include('web.layout.includes.modal')
    <!-- close .modal -->
@endsection
