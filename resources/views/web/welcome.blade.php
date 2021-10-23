 @extends('web.layouts.app')


 @section('contents')

 <body>

     <!-- ***** Preloader Start ***** -->
     <!-- <div id="preloader">
             <div class="jumper">
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
         </div> -->
     <!-- ***** Preloader End ***** -->


     <!-- Page Content -->
     <!-- Banner Starts Here -->
     <div class="main-banner header-text">
         <div class="container-fluid">
             <div class="owl-banner owl-carousel">
                 <div class="item">
                     <img src="{{ $admin_assets}}/assets/images/banner-item-01.jpg" alt="">
                     <div class="item-content">
                         <div class="main-content">
                             <div class="meta-category">
                                 <span>Fashion</span>
                             </div>
                             <a href="post-details.html">
                                 <h4>Morbi dapibus condimentum</h4>
                             </a>
                             <ul class="post-info">
                                 <li><a href="#">Admin</a></li>
                                 <li><a href="#">May 12, 2020</a></li>
                                 <li><a href="#">12 Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <img src="{{ $admin_assets}}/assets/images/banner-item-02.jpg" alt="">
                     <div class="item-content">
                         <div class="main-content">
                             <div class="meta-category">
                                 <span>Nature</span>
                             </div>
                             <a href="post-details.html">
                                 <h4>Donec porttitor augue at velit</h4>
                             </a>
                             <ul class="post-info">
                                 <li><a href="#">Admin</a></li>
                                 <li><a href="#">May 14, 2020</a></li>
                                 <li><a href="#">24 Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <img src="{{ $admin_assets}}/assets/images/banner-item-03.jpg" alt="">
                     <div class="item-content">
                         <div class="main-content">
                             <div class="meta-category">
                                 <span>Lifestyle</span>
                             </div>
                             <a href="post-details.html">
                                 <h4>Best HTML Templates on TemplateMo</h4>
                             </a>
                             <ul class="post-info">
                                 <li><a href="#">Admin</a></li>
                                 <li><a href="#">May 16, 2020</a></li>
                                 <li><a href="#">36 Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <img src="{{ $admin_assets}}/assets/images/banner-item-04.jpg" alt="">
                     <div class="item-content">
                         <div class="main-content">
                             <div class="meta-category">
                                 <span>Fashion</span>
                             </div>
                             <a href="post-details.html">
                                 <h4>Responsive and Mobile Ready Layouts</h4>
                             </a>
                             <ul class="post-info">
                                 <li><a href="#">Admin</a></li>
                                 <li><a href="#">May 18, 2020</a></li>
                                 <li><a href="#">48 Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <img src="{{ $admin_assets}}/assets/images/banner-item-05.jpg" alt="">
                     <div class="item-content">
                         <div class="main-content">
                             <div class="meta-category">
                                 <span>Nature</span>
                             </div>
                             <a href="post-details.html">
                                 <h4>Cras congue sed augue id ullamcorper</h4>
                             </a>
                             <ul class="post-info">
                                 <li><a href="#">Admin</a></li>
                                 <li><a href="#">May 24, 2020</a></li>
                                 <li><a href="#">64 Comments</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <!-- Banner Ends Here -->

     <section class="call-to-action">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="main-content">
                         <div class="row">
                             <div class="col-lg-8">
                                 <span></span>
                                 <h4>!</h4>
                             </div>
                             <div class="col-lg-4">
                                 <div class="main-button">
                                     <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <section class="blog-posts">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="all-blog-posts">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="blog-post">
                                     <div class="blog-thumb">
                                         <img src="assets/images/blog-post-01.jpg" alt="">
                                     </div>
                                     @if($posts->count())
                                     @foreach($posts as $post)
                                     <div class="down-content">

                                         <a class="text-success" href="{{route('post.show' , $post->id)}}">
                                             <h4 class="text-success">{{$post->name}}</h4>
                                         </a>
                                         <ul class="post-info">
                                             <span><img class="rounded-profile width-50" src="avatar\default-avatar-profile-icon.jpg"></span>
                                             <li><a href="{{route('user.post' , $post->user)}}">{{$post->user->name}}</a></li>
                                             <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                                             <li><a href="#">12 Comments</a></li>
                                         </ul>
                                         
                                         <div class="mb-5">
                                             <img class="img-fluid rounded-" src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />
                                         </div>
                                         <div class="post-options">
                                             <div class="row">
                                                 <div class="col-6">
                                                     <ul class="post-tags">
                                                         <li><i class="fa fa-tags"></i></li>
                                                         <li><a class="btn btn-success text-white" href="{{route('post.show' , $post->id)}}"> click here to Download</a></li>
                                                         <li><a href="#">Nature</a></li>
                                                     </ul>
                                                 </div>
                                                 <div class="col-6">
                                                     <ul class="post-share">
                                                         <li><i disabled class="fa fa-share-alt"></i></li>
                                                         <li><a href="#">Facebook</a>,</li>
                                                         <li><a href="#"> Twitter</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     @endforeach

                                     @else

                                     <h1>No Content At The Momment</h1>

                                     @endif
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="main-button">
                                     <a href="{{route('media.blogs')}}">View All Posts</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="sidebar">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="sidebar-item search">
                                     <form id="search_form" name="gs" method="GET" action="{{route('web.search')}}">
                                         <input type="text" name="q" disabled class="searchText" placeholder="type to search..." autocomplete="on" value="{{ $searchKeyword ?? "" }}">
                                     </form>
                                 </div>
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