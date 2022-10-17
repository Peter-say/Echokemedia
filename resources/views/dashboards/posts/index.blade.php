@extends('dashboards.layouts.app', ['meta_title' => 'Posts'])

@section('contents')
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    @include('notifications.flash_messages')


                    <div id="tableCheckbox" class="">
                        <div class="statbox widget box box-shadow mt-5">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex justify-content-between">
                                        <h4>Post Information</h4>
                                        <a href="{{route('admin.post.create')}}" class="btn btn-primary btn-sm ">Add New Post</a>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                    <thead>
                                        <tr>
                                            <th class="">S/N</th>
                                            <th class="">Post Type</th>
                                            <th class="">Post By</th>
                                            <th class="">Cover Image</th>
                                            <th class="">Cover Music</th>
                                            <th class="">Cover Video</th>
                                            <th class="">Description</th>
                                            <th class="">Created At</th>
                                            <th class="">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <tr>
                                            @foreach($posts as $post)
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->type}}
                                            <td>{{$post->user->name}}</td>
                                            <td> <img class="img-fluid" src="{{asset($post->cover_image)}}" alt="..." />
                                            </td>
                                            <td>
                                                <a href="" target="_blank" rel="noopener noreferrer">
                                                    <audio controls class="img-fluid">
                                                        <source class="img-fluid" src="{{asset($post->cover_music) ?? 'Not available'}}" type="music/mp3">
                                                    </audio></a>
                                            </td>
                                            <td>
                                                <a href="" target="_blank" rel="noopener noreferrer">
                                                    <video controls class="img-fluid">
                                                        <source class="img-fluid" src="{{asset($post->cover_video) ?? 'Not available'}}" type="music/mp4">
                                                    </video></a>
                                            </td>
                                            <td>{!! Str::of($post->content_desccription)->limit(50) !!}</td>
                                            <td>{{$post->created_at}}


                                            <td>
                                                <form action="{{ route('admin.post.destroy', $post->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onClick="$(this).parent().trigger('submit')">Delete</button>
                                                </form>
                                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary btn-sm mt-2">edit</a>
                                            </td>
                                            @endforeach
                                        </tr>
                                        


                                    </tbody>
                                </table>
=======
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                        <thead>
                                            <tr>
                                                <th class="">S/N</th>
                                                <th class="">Post Type</th>
                                                <th class="">Post By</th>
                                                <th class="">Cover Image</th>
                                                <th class="">Cover Music</th>
                                                <th class="">Cover Video</th>
                                                <th class="">Description</th>
                                                <th class="">Created At</th>
                                                <th class="">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr>
                                                @foreach ($posts as $post)
                                                    <td>{{ $post->id }}</td>
                                                    <td>{{ $post->type }}
                                                    <td>{{ $post->user->name }}</td>
                                                    <td> <img class=" post-img-size-on-dashboard img-fluid"
                                                            src="{{ asset($post->cover_image) }}" alt="..." />
                                                    </td>
                                                    <td>
                                                        <a href="" target="_blank" rel="noopener noreferrer">
                                                            <audio controls class="img-fluid">
                                                                <source class="img-fluid"
                                                                    src="{{ asset($post->cover_music) ?? 'Not available' }}"
                                                                    type="music/mp3">
                                                            </audio></a>
                                                    </td>
                                                    <td>
                                                        <a href="" target="_blank" rel="noopener noreferrer">
                                                            <video controls class="img-fluid">
                                                                <source class="img-fluid"
                                                                    src="{{ asset($post->cover_video) ?? 'Not available' }}"
                                                                    type="music/mp4">
                                                            </video></a>
                                                    </td>
                                                    <td id="hid-and-show description">{!! $post->content_desccription !!} </td>
                                                    <td>{{ $post->created_at }}

                                                    <td>
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-3">
                                                                <form action="{{ route('admin.post.destroy', $post->id) }}"
                                                                    method="post"
                                                                    onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a 
                                                                        class="btn btn-danger btn-sm "
                                                                        onClick="$(this).parent().trigger('submit')">Delete</a>
                                                                </form>
                                                            </div>
                                                            <div class="col-3">
                                                                <a  href="{{ route('admin.post.edit', $post->id) }}"
                                                                    class="btn btn-primary btn-sm ">edit</a>

                                                            </div>
                                                        </div>

                                                    </td>

                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
>>>>>>> 51c8e3731772ff21de2e2fd374f1bf2c9dd1ffec

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  END CONTENT PART  -->

                </div>
            </div>
        @endsection
