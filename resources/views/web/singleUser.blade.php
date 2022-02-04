@extends('web.layouts.app')


@section('contents')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4> welcome To <b style="color:blue;">{{$user->name}} </b> Posts</h4>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Banner Ends Here -->




<section class="blog-posts grid-system">

  <div class="container">
    <div class="row">

      @foreach($posts as $post)
      <div class="col-lg-8">

        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ $admin_assets}}/assets/images/blog-post-02.jpg" alt="">
                </div>
                <div class="down-content">

                  <div>
                  </div>

                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">

                          <li>
                          <img class="img-fluid " src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />

                          </li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">
                              <a class="text-success">
                                <h4>{{$post->name}}</h4>
                              </a>
                            </a></li>
                          <li><a href="#">
                          <li><a class="btn btn-success text-white" href="{{route('post.download' , $post->id)}}">Download</a></li>
                          </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</section>


 <div class="justify-center">
 {{ $posts->links()}}
 </div>
@endsection