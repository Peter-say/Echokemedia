@extends('users.layouts.app')


@section('content')


<div class="main-container " id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                @include('notifications.flash_messages')

                <form action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data" method="post">
                    @csrf @method("put")

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <label for="validationCustom01">Upload Your Profile</label>
                            <input type="file" name="avatar" class="form-control" id="" value="{{ asset(auth()->user()->avatar) }}">

                        </div>

                       

                        <div class="col-md-6 mb-4">
                            <label for="validationCustom01">Full Name</label>
                            <input type="text" name="name" class="form-control" id="" value="{{auth()->user()->name}}">
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="validationCustom01">Username</label>
                            <input type="text" name="username" class="form-control" id="" value="{{auth()->user()->username}}">
                        </div>


                        <div class="col-md-6 mb-4">
                            <label for="validationCustom01">Email</label>
                            <input type="text" name="email" class="form-control" id="" value="{{auth()->user()->email}}" >
                        </div>
                    </div>




                    <button class="btn btn-primary mt-3" type="submit">Update form</button>
                </form>



            </div>
        </div>


    </div>

    @endsection