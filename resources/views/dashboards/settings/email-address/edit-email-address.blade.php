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

                                        <h4>Change Email Address
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area d-flex justify-content-center">
                                <form enctype="multipart/form-data" class="form-row"
                                    action="{{ route('dashboard.user.settings.update-email', $user->id) }}" method="post">
                                    @csrf @method('PUT')

                                    <div class="row">
                                        <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                            <label for="">Enter Password<span class="required">*</span></label>
                                            <input class="form-control @error('password') is-invalid @enderror" required
                                                type="password" name="password" 
                                                placeholder="">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                            <label for="">Email<span class="required">*</span></label>
                                            <input class="form-control @error('email') is-invalid @enderror" required
                                                type="email" name="email" value="{{ $user->email }}"
                                                placeholder="">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-xl-4 col-md-4 col-sm-12 col-12">
                                            <button class="btn btn-primary btn-lg">Submit</button>
                                        </div>
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
