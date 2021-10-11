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
                  <h4>Post Details</h4>
                  <h2>Single blog post</h2>
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
                      
                        <a href="post-details.html"><h4>{{$posts->name}}</h4></a>
                        <ul class="post-info">
                          <li><a href="#">{{$posts->user->name}}</a></li>
                          <li><a href="#">{{$posts->created_at->diffForHumans()}}</a></li>
                          <li><a href="#">10 Comments</a></li>
                        </ul>
                         <div>
                         <img class="img-fluid" src="{{asset('postImages/' . $posts->cover_image)}}" alt="..." />
                         </div>
                        <p>You can browse different tags such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi. Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuere nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam blandit felis sollicitudin vestibulum feugiat.
                        <br><br>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id nibh at erat pulvinar malesuada et non ipsum. Suspendisse id ipsum leo.</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                              
                                <li><a  class="btn btn-success text-white" href="#">Download</a></li>
                              </ul>
                            </div>
                            <div class="col-6">
                              <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
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
                          <li>
                            <div class="author-thumb">
                              <img src="{{ $admin_assets}}/assets/images/comment-author-01.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4><span>May 16, 2020</span></h4>
                              <p>{{$posts->comments->comment}}</p>
                            </div>
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
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your email will not be publish" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="comment" type="text" id="subject" placeholder="Your Comment">
                              </fieldset>
                            </div>
                           
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
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