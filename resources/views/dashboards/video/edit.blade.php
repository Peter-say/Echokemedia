@extends('dashboards.layouts.app')

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
                                        <h4>Edit video</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form enctype="multipart/form-data" class="form-row"
                                    action="{{ route('dashboard.video.update', $post->id) }}" method="post">
                                    @csrf @method('PUT')
                                    <div class="form-group col-md-4">
                                        <label for="">Cover Image <span class="required">*</span></label>
                                        <input class="form-control" type="file" name="cover_image"
                                            value="{{ asset($post->cover_Image) }}">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">Cover Video <span class="">*</span></label>
                                        <input class="form-control" type="file" name="cover_video"
                                            value="{{ asset($post->cover_video) }}">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for=""> Category<span class="required">*</span></label>
                                        <select name="category_id" class="form-control" id="">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="">Title <span class="required">*</span></label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ $post->name }}" placeholder="......">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">Type <span class="required">*</span></label>
                                        <input class="form-control" name="type" value="{{ $type }}"
                                            placeholder="{{ $type }}">
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label for="">Body <span class="">*</span></label>
                                        <textarea id="'content_desccription'" type="text" name="content_desccription" class="form-control">{!! old('body') ?? $post->content_desccription !!}</textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Is Sponsored <span class="required">*</span></label>
                                        <select name="is_sponsored" class="form-control" id="" required>
                                            <option value="" disabled selected>Select Option</option>
                                            @foreach ($boolOptions as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $post->is_sponsored ? 'selected' : '' }}>
                                                    {{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">Is Top Story <span class="required">*</span></label>
                                        <select name="is_top_story" class="form-control" id="" required>
                                            <option value="" disabled selected>Select Option</option>
                                            @foreach ($boolOptions as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $post->is_top_story ? 'selected' : '' }}>
                                                    {{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">Is Featured <span class="required">*</span></label>
                                        <select name="is_featured" class="form-control" id="" required>
                                            <option value="" disabled selected>Select Option</option>
                                            @foreach ($boolOptions as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $post->is_featured ? 'selected' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">Is Published <span class="required">*</span></label>
                                        <select name="is_published" class="form-control" id="" required>
                                            <option value="" disabled selected>Select Option</option>
                                            @foreach ($boolOptions as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $post->is_pubblished ? 'selected' : '' }}>
                                                    {{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">Enable Comments <span class="required">*</span></label>
                                        <select name="can_comment" class="form-control" id="" required>
                                            <option value="" disabled selected>Select Option</option>
                                            @foreach ($boolOptions as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $post->can_comment ? 'selected ' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <hr class="col-12">
                                    <h5 class="col-12 mb-3">Seo Data</h5>
                                    <div class="form-group col-md-5">
                                        <label for="">Meta Title <span class="required">*</span></label>
                                        <input class="form-control" type="text" name="meta_title" required
                                            value="{{ $post->meta_title }}"
                                            placeholder="Describe the video. if empty it uses the blog title...">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="">Meta Keywords <span class="required">*</span></label>
                                        <input class="form-control" type="text" name="meta_keywords" required
                                            value="{{ $post->meta_keywords }}" placeholder="Enter search keywords...">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="">Meta Description <span class="required">*</span></label>
                                        <input class="form-control" type="text" name="meta_description"
                                            value="{{ $post->meta_description }}" required
                                            placeholder="Summarize the blog video">
                                    </div>

                                    <div class="form-group col-12">
                                        <button class="btn btn-primary btn-lg">Submit</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--  END CONTENT PART  -->

    </div>
    </div>
@endsection
