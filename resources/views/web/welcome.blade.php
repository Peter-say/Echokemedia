 @extends('web.layouts.app')


 @section('contents')

 <body>

     <!-- ***** Preloader Start ***** -->
     <div id="preloader">
         <div class="jumper">
             <div></div>
             <div></div>
             <div></div>
         </div>
     </div>
     <!-- ***** Preloader End ***** -->


     <!-- Page Content -->
     <!-- Banner Starts Here -->


     <div class="container-fluid mt-5">
         <h1 class="popular-post d-flex justify-content-center">Trending Today</h1>
         @include('web.layouts.includes.popular-post')
     </div>


     <section class="blog-posts">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="all-blog-posts">
                         <div class="row">
                             <div class="">
                                 <div class="blog-post">
                                     <div class="blog-thumb">
                                         <img src="assets/images/blog-post-01.jpg" alt="">
                                     </div>
                                     @if($posts->count())
                                     @foreach($posts as $post)

                                     <div class="container">
                                         <div class="row mb-2 d-flex justify-content-center">
                                             <div class="col-6 ">
                                                 <div class="">
                                                     <img class="img-fluid image-width " src="{{asset( $post->cover_image)}}" alt="..." />
                                                 </div>
                                             </div>

                                             <div class="col-6">
                                                 <a class="text-success" href="{{route('post.show' , $post->name)}}">
                                                     <h6 class="text-success">{{$post->name}}</h6>
                                                 </a>
                                                 <span><small>Posted By </small>
                                                     <h6 style="font-size: 14px;"><a href="{{route('user.post' , $post->user)}}">{{$post->user->name}}</a></h6> <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                 </span>

                                             </div>

                                             <div class="col-6 mt-2">
                                                 <a class="btn btn-success text-white col-4-md" href="{{route('post.show' , $post->name)}}">Download here</a></li>

                                             </div>
                                             <!-- <div class="col-6">
                                                 <div class="social-media-share-icon">
                                                     <a href="{{ route('media.share' , ['id' => $post->id , 'platform' => 'facebook'])}}" target="_blank"><i style="color: blue;" class="fa fa-facebook"></i></a>
                                                     <a href="{{ route('media.share' , [ 'id' => $post->id , 'platform' => 'whatsapp' ])}}" target="blank"><i style="color:green;" class="fa fa-whatsapp"></i></a>
                                                 </div>
                                             </div> -->
                                             <hr style="font-size:8px; color:green">

                                         </div>


                                     </div>

                                     @endforeach

                                     @else
                                     <div class="container">
                                         <h1>No content at the moment :)</h1>
                                     </div>


                                     @endif
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mt-4 mb-4">
                     <div class="sidebar">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="sidebar-item search">
                                     <form id="search_form" method="GET" action="{{route('web.search')}}">

                                         <input type="text" name="query" class="searchText" placeholder="Type to search..." autocomplete="on" />
                                         <input type="submit" class="searchbtn btn-sm mt-3 text-orange" value="Search" />

                                     </form>
                                 </div>
                             </div>

                             <div class="mt-4" id="social-links">
                                 <!-- <form action="{{ route('media.share')}}" method="post">
                                     @csrf
                                     <button type="submit" class="btn btn-primary btn-sm">Share</button>
                                 </form> -->

                             </div>

                             @include('web.layouts.includes.pages-sidebar')
                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </section>

 </body>

 @endsection