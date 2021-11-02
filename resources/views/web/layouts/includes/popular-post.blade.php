<div class="container-fluid">
  <h1 class="popular-post">Trending Today</h1>
  @foreach($trendingTopics as $topic)
    <div class="cover-image">
    <span class="tt">{{$topic->content_desccription}}</span>
    <a href= "{{route('post.show' , $topic->id)}}">
    <img class="img-fluid" src="{{asset('postImages/' . $topic->cover_image)}}" alt="..." />

    </a>
 </div>
 @endforeach
</div>