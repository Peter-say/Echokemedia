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
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                        <h4>Delete Account
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area ">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?
                                    </h6>
                                    <p class="mb-0">Once you delete your account, there is no going back. Please be
                                        certain.</p>
                                </div>
                                <form enctype="multipart/form-data" class="form-row"
                                    action="{{ route('dashboard.user.settings.delete-account', $user->id) }}"
                                    method="post">
                                    @csrf

                                    <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                        <label for=""> Password<span class="required">*</span></label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                                            name="password" placeholder="">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                        <input type="checkbox" id="confirm_delete_account"
                                            class="form-check-input ml-2 w-10 @error('confirm_delete_account') is-valid @enderror"
                                            name="confirm_delete_account" id=""
                                            {{ 'confirm_delete_account' ? 'checked' : '' }}>
                                        <span class="ml-5">I confirm my account deactivation</span>
                                        @error('confirm_delete_account')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                        <button id="delete-user-account" class="btn btn-danger btn-lg">Delete</button>
                                    </div>

                                    <script>
                                        const confirm_delete = document.getElementById('confirm_delete_account');
                                        document.getElementById('delete-user-account').addEventListener('click', function() {
                                           console.log(confirm_delete.checked);
                                           }
                                        })
                                    </script>

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
