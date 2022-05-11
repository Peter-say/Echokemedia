@extends('web.layout.app' , ["meta_title" => "Echokemedia"])


@section('contents')

@include('web.layout.includes.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2><b>ABOUT US</b></h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Banner Ends Here -->


    <section class="about-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ $admin_assets }}/skrn/images/m1.jpeg" alt="" width="100px" height="150px">
                    <p><b>Listen And View The Unexpected</b>
                        <a rel="nofollow" href="{{route('media.newreleases')}}" target="_parent">Lastest Jam</a>, <a rel="nofollow" href="{{route('media.news.index')}}"
                            target="_parent">Celebrity News</a>

                    </p>
                </div>
            </div>
            <div class="container" style="background-color:rgb(201, 198, 198)">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Our mission</b></h4>
                        <p>
                        <ul>This site is well equipped and ready to serve your lastest,favorite,most trending,slow
                            groove,street anthems,top-ten bangers,
                            and next rated music/songs </ul>


                        <ul>we aren't going to leaving you with just extreme music to enjoy but also with your latest and
                            most interesting music video and more importantly enjoyable movie </ul>

                        <ul>we aren't stopping here more are yet to come.<strong> stay tune!!</strong></ul>
                        </p>


                    </div>
                    <div class="col-lg-6">
                        <h4><b>Our essence</b></h4>
                        <p>
                        <ul>As a Media Creator we'll ensure best offer of music and movie,Be Assure!!</ul>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Our promise</b></h4>
                        <p>we'll be here to always ensure that those music and movie you love the most or will love to see
                            or listen to, will always! always!! be here</p>
                    </div>
                    <div class="col-lg-6">
                        <h4><b>Our vibe</b></h4>
                        <p>Nothing interest us more than seeing you being able to post what you view as nextrated,most
                            trending,slow groove,street anthems,top-ten bangers,your lastest and favorite songs, that's why
                            here you can post and become a creator.
                            more things to share with you like it was said in our mission<strong>(e.g earnings as a
                                user).</strong> </p>
                    </div>
                </div>
            </div>


            <!-- <div class="row">
                        <div class="col-lg-4 col-md-6">
                        <h4>1-03 Donec porttitor augue</h4>
                            <p>.</p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        <h4>2-03 Donec porttitor augue</h4>
                            <p>.</p>
                        </div>
                        <div class="col-lg-4">
                        <h4>3-03 Donec porttitor augue</h4>
                            <p>.</p>
                        </div>
                      </div>
                      
                      
                      <div class="row">
                        <div class="col-lg-3 col-md-6">
                        <h4>01 Four Columns</h4>
                            <p>.</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        <h4>02 Four Columns</h4>
                            <p>.</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        <h4>03 Four Columns</h4>
                            <p>.</p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        <h4>04 Four Columns</h4>
                            <p>.</p>
                        </div> -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/petpea.downloader"><i class="fa fa-facebook"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    <li><a href="https://instagram.com/pet_pea_downloader?utm_medium=copy_link"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>


        </div>
    </section>

@endsection
