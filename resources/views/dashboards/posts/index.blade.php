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
                                        <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-sm "
                                            data-toggle="modal" data-target="#postType">Add New
                                            Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <th class="">Created At</th>
                                            <th class="">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($posts as $post)
                                            <tr>

                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->type }}
                                                <td>{{ $post->user->name }}</td>
                                                <td> <img class="img-fluid post-img-size-on-dashboard"
                                                        src="{{ asset($post->cover_image) }}" alt="..." />
                                                </td>
                                                <td>{{ $post->created_at }}
                                                <td>
                                                    @if ($post->type == 'music')
                                                        <div class=" d-flex justify-content-between">
                                                            <form action="{{ route('admin.post.destroy', $post->id) }}"
                                                                method="post"
                                                                onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger"onClick="$(this).parent().trigger('submit')">Delete</button>

                                                            </form>
                                                            <a href="{{ route('admin.post.edit', $post->id) }}"
                                                                class="btn btn-primary btn-sm ">edit</a>
                                                            <a href="#" class="btn btn-success">View Post</a>
                                                        </div>
                                                    @else
                                                        <div class=" d-flex justify-content-between">
                                                            <form action="{{ route('admin.video.destroy', $post->id) }}"
                                                                method="post"
                                                                onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger"onClick="$(this).parent().trigger('submit')">Delete</button>

                                                            </form>
                                                            <a href="{{ route('admin.video.edit', $post->id) }}"
                                                                class="btn btn-primary btn-sm ">edit</a>
                                                            <a href="#" class="btn btn-success">View Post</a>
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="postType" tabindex="-1" role="dialog" aria-labelledby="postTypeLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Post Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>What type of post do you want to make ?</h5>
                        <div class=" justify-content-space-between">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-secondary">Music</a>
                            <a href="{{ route('admin.video.create') }}" class="btn btn-secondary">Video</a>
                            <a href="{{ route('admin.news.create') }}" class="btn btn-secondary">News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
