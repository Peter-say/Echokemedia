@extends('dashboards.layouts.app')

@section('contents')
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div id="tableCheckbox" class="">

                        @include('notifications.flash_messages')

                        <div class="statbox widget box box-shadow mt-5">
                            <div class="widget-header">
                                <div class="row ">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                        <h4>Change Password
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area d-flex justify-content-center">
                                <form enctype="multipart/form-data" class="form-row" action="{{route('dashboard.user.settings.update-password')}}" method="post">
                                    @csrf 

                                    <div class="form-group col-xl-8 col-md-8 col-sm-12 col-12">
                                        <label for="">Old Password<span class="required">*</span></label>
                                        <input class="form-control @error('old_password') is-invalid @enderror" type="password"
                                            name="old_password" placeholder="">
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           
                                        @enderror
                                    </div>

                                    <div class="form-group col-xl-8 col-md-8 col-sm-12 col-12">
                                        <label for="">Password<span class="required">*</span></label>
                                        <input class="form-control @error('new_password') is-invalid @enderror"
                                            type="password" name="new_password">
                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           
                                        @enderror
                                    </div>

                                    <div class="form-group col-xl-8 col-md-8 col-sm-12 col-12">
                                        <label for="">Re-type Password <span class="required">*</span></label>
                                        <input class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                            type="password" name="new_password_confirmation">
                                        @error('new_password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            
                                        @enderror
                                    </div>

                                    <div class="form-group col-xl-8 col-md-8 col-sm-12 col-12">
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
