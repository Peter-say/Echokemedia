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

                                    <h4>Create News Post
                                        <span class="fr">
                                            <a href="{{route('dashboard.category.create')}}" class="btn btn-primary btn-sm ">New Category</a>
                                        </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form enctype="multipart/form-data" class="form-row" action="{{route('dashboard.news.store')}}" method="POST"> @csrf


                                <div class="form-group col-md-4">
                                    <label for="">Cover Image <span class="required">*</span></label>
                                    <input class="form-control" type="file" name="cover_image" value="{{old('cover_image') ?? ''}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Audio <span class="">*</span></label>
                                    <input class="form-control" type="file" name="cover_music" value="{{old('cover_music') ?? ''}}">
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for=""> Category<span class="required">*</span></label>
                                    <select name="category_id" class="form-control" id="">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="form-group col-md-6">
                                    <label for="">Title <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="{{old('name') ?? '......'}}">
                                </div>

                    
                                
                                <div class="form-group col-md-12">
                                    <label for="">Body <span class="">*</span></label>
                                    <textarea id="'content_desccription'" type="text" name="content_desccription" class="form-control">{{old('content_desccription')}}</textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Is Sponsored <span class="required">*</span></label>
                                    <select name="is_sponsored" class="form-control" id="" required>
                                        <option value="" disabled selected>Select Option</option>
                                        @foreach ($boolOptions as $key => $value)
                                        <option value="{{old('$key') ?? $key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="">Is Top Story <span class="required">*</span></label>
                                    <select name="is_top_story" class="form-control" id="" required>
                                        <option value="" disabled selected>Select Option</option>
                                        @foreach ($boolOptions as $key => $value)
                                        <option value="{{old('$key') ?? $key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="">Is Featured <span class="required">*</span></label>
                                    <select name="is_featured" class="form-control" id="" required>
                                        <option value="" disabled selected>Select Option</option>
                                        @foreach ($boolOptions as $key => $value)
                                        <option value="{{old('$key') ?? $key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="">Is Published <span class="required">*</span></label>
                                    <select name="is_published" class="form-control" id="" required>
                                        <option value="" disabled selected>Select Option</option>
                                        @foreach ($boolOptions as $key => $value)
                                        <option value="{{old('$key') ?? $key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="">Enable Comments <span class="required">*</span></label>
                                    <select name="can_comment" class="form-control" id="" required>
                                        <option value="" disabled selected>Select Option</option>
                                        @foreach ($boolOptions as $key => $value)
                                        <option value="{{old('$key') ?? $key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <hr class="col-12">
                                <h5 class="col-12 mb-3">Seo Data</h5>
                                <div class="form-group col-md-5">
                                    <label for="">Meta Title <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="meta_title" required placeholder="{{old('meta_keywords') ?? 'Describe the post. if empty it uses the blog title...'}}">
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="">Meta Keywords <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="meta_keywords" required placeholder="{{old('meta_keywords') ?? 'Enter search keywords...'}}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Meta Description <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="meta_description" required placeholder="{{old('meta_keywords') ?? 'Summarize the blog post'}}">
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