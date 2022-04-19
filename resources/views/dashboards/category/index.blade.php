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
                                    <h4>Category Information</h4>
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
                                            <th class="">Created At</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @foreach($categories as $cat)
                                            <td>{{$cat->id}}</td>
                                            <td> <img class="img-fluid cat-img-size" src="{{asset('CategoryImages/' . $cat->cat_image)}}" alt="..." /></td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->created_at}}</td>

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