<div class="jumbotron bg-default mt-3">
    <div class="row">
        <div class="col-12">
            <h4>{{ $post->name }}</h4>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-5">

            <div>
                <div class="d-flex justify-content-end ">
                    @if ($post->cover_music)
                        <a class="btn btn-success" href="{{ route('post.download', $post->slug) }}"><i
                                class="fas fa-play"></i>
                            Download</a>
                    @else
                        <a class="btn btn-success" href="{{ route('video.download', $post->slug) }}"><i
                                class="fas fa-play"></i>
                            Download</a>
                    @endif

                    <span><i style="font-size:30px;" class=" ml-5  mr-5 fa fa-share-alt" data-toggle="modal"
                            data-target="#exampleModal">
                        </i></span>

                </div>
            </div>
        </div>
    </div>

    <hr>
    <p>{!! $post->content_desccription !!}. </p>

</div>
