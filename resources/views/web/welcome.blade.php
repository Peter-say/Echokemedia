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
                                         <div class="row  d-flex justify-content-center">
                                             <div class="col-6">
                                                 <div class="">
                                                     <img class="img-fluid  welcome-img" src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />
                                                 </div>
                                             </div>

                                             <div class="col-6">
                                                 <a class="text-success" href="{{route('post.show' , $post->id)}}">
                                                     <h4 class="text-success">{{$post->name}}</h4>
                                                 </a>
                                                 <span>Post By <b><a href="{{route('user.post' , $post->user)}}">{{$post->user->name}}</a></b> <a href="#">{{$post->created_at->diffForHumans()}}</a></span>

                                                 <a class="btn btn-success text-white w-100" href="{{route('post.show' , $post->id)}}">Download here</a></li>

                                                  <div class="">
                                                 <i style="padding-right: 10px;" class="fa fa-share-alt"></i>   
                                                 <span style="padding-right: 10px; font-size :30px">
                                                     <i style="color:blue;"  class="fa fa-facebook"></i>
                                                     <i style="color:green;" class="fa fa-whatsapp"></i>
                                                     <i style="color: cornflowerblue;" class="fa fa-twitter"></i>
                                                 </span>
                                             </div>
                                             </div>
                                            
                                         </div>
                                     </div>
                                    
                                     @endforeach

                                     @else

                                     <h1>No Content At The Mo ment</h1>

                                     @endif
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="main-button">
                                     <a href="{{route('/')}}">View All Posts</a>
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

                                         <input type="text" name="query" class="searchText" placeholder="type to search..." autocomplete="on" />
                                         <input type="submit" class="btn btn-primary btn-sm mt-3 text-white" value="Search" />

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