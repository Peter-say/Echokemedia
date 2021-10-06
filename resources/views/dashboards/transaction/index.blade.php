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
                                    <h4>Witdral Request</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form enctype="multipart/form-data" class="form-row" action="" method="POST"> @csrf


                                <div class="form-group col-md-4">
                                    <label for="">Name <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="name">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Bank <span class="">*</span></label>
                                    <input class="form-control" type="text" name="bank_name" placeholder="FCMB">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Account Number<span class="">*</span></label>
                                    <input class="form-control" type="number" name=" account_number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Amount<span class="">*</span></label>
                                    <input class="form-control" type="number" name="amount">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Reference<span class="">*</span></label>
                                    <input class="form-control" type="text" name="amount">
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