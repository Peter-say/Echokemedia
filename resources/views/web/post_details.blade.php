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




<section class="blog-posts grid-system">
  <div class="container">
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
                  <a class="text-success">
                    <h4>{{$post->name}}</h4>
                  </a>
                  <ul class="post-info">
                    <span><img class="rounded-profile width-50" src="avatar\default-avatar-profile-icon.jpg"></span>
                    <li><a href="#">{{$post->user->name}}</a></li>
                    <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                    <li><a href="#">10 Comments</a></li>
                  </ul>
                  <div>
                    <img class="img-fluid" src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />
                  </div>

                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">


                          <li class="mt-5"><a class="btn btn-success text-white  btn-xl " href="{{route('post.download' , $post->id)}}">Download</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i disabled class="fa fa-share-alt"></i></li>
                          <li disabled><a disabled href="#">Facebook</a>,</li>
                          <li disabled><a disabled href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="sidebar-item comments">
                <div class="sidebar-heading">
                  <h2>4 comments</h2>
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

      <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12">
        <div class="jumbotron bg-alert">
          <h4> feature ads</h4>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection