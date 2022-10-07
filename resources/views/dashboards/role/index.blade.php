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
                                        <h4>user Information</h4>
                                        <a href="{{route('admin.user-role')}}" class="btn btn-primary btn-lg">Add user</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area col-12">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Role</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($users as $user)
                                           <th class="">{{$user->user->name}}</th>
                                           <th class="">{{$user->user->role}}</th>
                                           @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!--  END CONTENT PART  -->

                </div>
            </div>
        @endsection
