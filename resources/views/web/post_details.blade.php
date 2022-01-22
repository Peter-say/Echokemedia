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

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="jumbotron bg-alert">
                <h4> feature ads</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Banner Ends Here -->

<div class="col-12">
  <a href="{{route('/')}}">
    <i class="fa fa-arrow-left d-flex w-50 " aria-hidden="true"></i></a>
</div>
<section class="blog-posts grid-system mt-1">
  <div class="container ">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ $admin_assets}}/assets/images/blog-post-02.jpg" alt="">
                </div>
                <div class="down-content">

                  <h4 class="text-success">{{$post->name}}</h4>
                  </a>
                  <span>Post By <b><a href="{{route('user.post' , $post->user)}}">{{$post->user->name}}</a></b> <a href="#"></a>{{$post->created_at->diffForHumans()}}</span>

                  <div>
                    <img class="img-fluid "src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />
                  </div>

                  <div class="post-options">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                        <a class="btn btn-success text-white btn-lg mt-3 " href="{{route('post.download' , $post->id)}}">Download</a>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                        <audio  controls class="mt-3">
                          <source src="{{asset('postVideos/' . $post->cover_video)}}" type="audio/ogg">
                          <source src="{{asset('postVideos/' . $post->cover_video)}}" type="audio/mpeg">
                        </audio>
                      </div>
                      <div class="col-12">
                        <div class="">
                          <i style="padding-right: 10px;" class="fa fa-share-alt"></i>
                          <span style="padding-right: 10px; font-size :20px">
                            <a href="{{ route('media.share' , [ 'id' => $post->id , 'platform' => 'facebook' ])}}" target="blank"><i style="color:blue;" class="fa fa-facebook"></i></a>
                            <i style="color:green;" class="fa fa-whatsapp"></i>
                            <i style="color: cornflowerblue;" class="fa fa-twitter"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-12">
                        <p>{{$post->content_desccription}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="sidebar-item comments">
                <div class="sidebar-heading">
                  <!-- comments lists -->
                </div>
                <div class="content">
                  <ul>
                    @foreach($comments as $comment)
                    <li>
                      <div class="author-thumb">
                        <img src="{{ $admin_assets}}/assets/images/comment-author-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>{{$comment->username}}<span>{{$comment->created_at->diffForHumans()}}<span></h4>
                        <p>{{$comment->body}}</p>
                      </div>
                      @endforeach
                    </li>
                    <li class="replied">
                      <div class="author-thumb">
                        <img src="{{ $admin_assets}}/assets/images/comment-author-02.jpg" alt="">
                      </div>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="sidebar-item submit-comment">
                <div class="sidebar-heading">
                  <h2>Your comment</h2>
                </div>
                <div class="content">
                  <form id="comment" action="{{route('media.comment')}}" method="post">
                    <div class="row">
                      @csrf

                      @auth
                      {{-- No need to fill name and email --}}
                      @else
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="username" type="text" id="name" disabled placeholder="Your name" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="email" type="text" id="email" disabled placeholder="Your email will not be publish" required="">
                        </fieldset>
                      </div>

                      @endauth
                      <div class="col-md-12 col-sm-12">
                        <fieldset>
                          <input name="body" disabled type="text" id="subject" placeholder="Your Comment">
                          <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </fieldset>
                      </div>

                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" disabled class="main-button">Submit</button>
                        </fieldset>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection