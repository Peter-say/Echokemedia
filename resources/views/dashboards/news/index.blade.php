@extends('dashboards.layouts.app' , ["meta_title" => "Posts"])

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
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>News Information</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                    <thead>
                                        <tr>
                                            <th class="">S/N</th>
                                            <th class="">Post By</th>
                                            <th class="">Cover Image</th>
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
                                            <td>{{$post->user->name}}</td>
                                            <td> <img class="img-fluid" src="{{asset($post->cover_image)}}" alt="..." />
                                            </td>
                                            <td>
                                                <a href="" target="_blank" rel="noopener noreferrer">
                                                    <video controls class="img-fluid">
                                                        <source class="img-fluid" src="{{asset($post->cover_music)}}" type="music/mp3">
                                                    </video></a>
                                            </td>
                                           
                                            <td>{{$post->content_desccription}}</td>
                                            <td>{{$post->created_at}}


                                            <td>
                                                <form action="{{route('dashboard.post.destroy' , $post->id)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a href="{{route('dashboard.post.edit' , $post->id )}}"><i class="fa fa-edit" style="font-size:30px;color:green"></i></a>
                                                        </div>
                                                        <div class="col-6">
                                                        <a href=""onClick="$(this).parent().trigger('submit')"> <i type="submit" class="fa fa-trash-o" style="font-size:30px;color:red"></i></a>

                                                        </div>
                                                    </div>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <!--  END CONTENT PART  -->

            </div>
        </div>
        @endsection