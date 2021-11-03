<div class="row">
  @foreach($trendingTopics as $topic)
  <div class="col-xl-6 col-md-12 col-sm-12">
    <div class="cover-image">
      <a href="{{route('post.show' , $topic->id)}}">
        <img style="border-radius: 10px ;" class="img-fluid mt-3" src="{{asset('postImages/' . $topic->cover_image)}}" alt="..." />
      <span style="border-radius: 50px 50px 10px 50px;" class=" top-title "><b>{{$topic->name}}</b></span>
      <span style="border-radius: 50px 50px 10px 50px;" class=" top-title "><p>{{$topic->content_disccription}}</p></span>

      </a>
    </div>

  </div>
  @endforeach
</div>