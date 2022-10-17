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
                                    <div class="col-12 d-flex justify-content-between">
                                        <h4>Category Information</h4>
                                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm">Create
                                            New</a>

<<<<<<< HEAD
                <div id="tableCheckbox" class="">
                    <div class="statbox widget box box-shadow mt-5">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Category Information
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                    <thead>
                                        <tr>
                                            <th class="">S/N</th>
                                            <th class="">Category Image</th>
                                            <th class="">Category Name</th>
                                            <th class="">sub-category ID</th>
                                            <th class="">Created At</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr 
                                        @foreach($categories as $cat)
                                           <td>{{$cat->id}}</td>
                                            <td> <img class="img-fluid cat-img-size" src="{{asset('CategoryImages/' . $cat->cat_image)}}" alt="..." /></td>
                                            <td>{{$cat->name}}</td>

                                            <td>
                                                <select name="parent_Id" class="form-control" id="">
                                                    <option value="" disabled selected>SubCategory</option>
                                                    @if($cat->subcategory)
                                                    @foreach ($cat->subcategory as $subcategory)
                                                    <option disabled selected value="">{{ $subcategory->name }}</option>
                                                    @endforeach
                                                    @else
                                                   N/A
                                                    @endif
                                                </select>
                                            </td>
                                            <td>{{$cat->created_at}}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
=======
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                        <thead>
                                            <tr>
                                                <th class="">S/N</th>
                                                <th class="">Category Image</th>
                                                <th class="">Category Name</th>
                                                <th class="">Created At</th>
                                                <th class="">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                @foreach ($categories as $cat)
                                                    <td>{{ $cat->id }}</td>
                                                    <td> <img class="img-fluid cat-img-size"
                                                            src="{{ asset('CategoryImages/' . $cat->cat_image) }}"
                                                            alt="..." /></td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>{{ $cat->created_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between ml-2">

                                                            <a href="{{ route('admin.subcategory.create', $cat->id) }}"
                                                                class="btn btn-primary btn-sm">Add Subcategory</a>

                                                            <a href="{{route('admin.category.edit', $cat->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                        <select class=" mt-2 d-flex justify-content-center"
                                                            id="style-subcategory-select"
                                                            style="border-radius: 20px; padding:10px">
                                                            <option class="selected" value="">View Subcategory
                                                            </option>
                                                            @if (count($cat->subcategory))
                                                                @foreach ($cat['subcategory'] as $subcategory)
                                                                    @if (count($cat->subcategory) > 0)
                                                                        <option id="style-option" value="">
                                                                            {{ $subcategory->name }}</option>
                                                                    @else
                                                                        Not Available
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>

                                                    </td>

>>>>>>> 51c8e3731772ff21de2e2fd374f1bf2c9dd1ffec

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
<<<<<<< HEAD
        </div>
        @endsection
=======
        @endsection
>>>>>>> 51c8e3731772ff21de2e2fd374f1bf2c9dd1ffec
