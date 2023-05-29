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

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5> Change Password</h5>
                            </div>
                            <div class="card-body d-flex justify-content-between mb-2">
                                Noticed unusual attempt on your password
                                <a href="{{route('dashboard.user.settings.change-password')}}" class="btn btn-primary p-2">Change Password</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5> Change Email Address</h5>
                            </div>
                            <div class="card-body d-flex justify-content-between mb-2">
                                Want to switch your email?
                                <a href="{{route('dashboard.user.settings.change-email')}}" class="btn btn-primary p-2">Change Email</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Delete Account</h5>
                            </div>
                            <div class="card-body d-flex justify-content-between mb-2">
                               Don't want to continue using this product? 
                                <a href="" class="btn btn-danger p-2">Remove Account</a>
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
