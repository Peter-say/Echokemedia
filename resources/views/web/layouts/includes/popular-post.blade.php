<div class="row">
  @foreach($trendingTopics as $topic)
  <div class="col-xl-6 col-md-12 col-sm-12">
    <div class="cover-image">
      <span style="border-radius: 50px 50px 10px 50px;" class="p-3 bg-warning mb-3">{{$topic->content_desccription}}</span>
      <a href="{{route('post.show' , $topic->id)}}">
        <img style="border-radius: 10px ;" class="img-fluid mt-3" src="{{asset('postImages/' . $topic->cover_image)}}" alt="..." />
      </a>
    </div>

  </div>
  @endforeach
</div>