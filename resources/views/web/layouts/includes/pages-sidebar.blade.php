<div class="col-lg-12">
                                 <div class="sidebar-item recent-posts">
                                     <div class="sidebar-heading">
                                         <h2>Recent Posts</h2>
                                     </div>
                                     <div class="content">
                                         <ul>
                                             @if ($posts->count())
                                             @foreach($posts as $post)
                                             <li><a href="post-details.html">
                                                     <h5>{{$post->name}}
                                                     </h5>
                                                     <span>{{$post->created_at->diffForHumans()}}</span>
                                                 </a></li>
                                             @endforeach
                                             @else
                                             <div>no post</div>
                                             @endif

                                         </ul>
                                     </div>
                                 </div>
                             </div>
                            
                             <div class="col-lg-12">
                                 <div class="sidebar-item tags">
                                     <div class="sidebar-heading">
                                         <h2>Categories</h2>
                                     </div>
                                     <div class="content">
                                         <ul>
                                             @foreach($posts as $post)
                                             <li><a href="#">-{{$post->category->name}}</a></li>
                                             @endforeach
                                             <li><a href="#">Creative</a></li>
                                             <li><a href="#">HTML5</a></li>
                                             <li><a href="#">Inspiration</a></li>
                                             <li><a href="#">Motivation</a></li>
                                             <li><a href="#">PSD</a></li>
                                             <li><a href="#">Responsive</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>