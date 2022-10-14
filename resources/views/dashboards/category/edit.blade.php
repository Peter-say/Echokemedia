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
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex justify-content-between">
                                        <h4>Create New Category</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form enctype="multipart/form-data" class="form-row"
                                    action="{{ route('admin.category.update', $category->id) }}" method="POST"> @csrf
                                    @method('PUT') @csrf
                                    <div class="form-group col-md-4">
                                        <label for="">Image<span class="required">*</span></label>
                                        <input class="form-control" type="file" name="cat_image">

                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="">Category <span class="required">*</span></label>
                                        <input class="form-control" value="{{ old('name') ?? $category->name}}" type="text" name="name">
                                    </div>

                                    <div class="form-group col-12">
                                        <button class="btn btn-primary btn-lg">Submit</button>
                                    </div>


                                </form>

                            </div>
                        </div>

                    </div>



                </div>
            @endsection