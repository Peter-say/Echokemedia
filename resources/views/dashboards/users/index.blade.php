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
                                    <h4>Users Information</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                    <thead>
                                        <tr>
                                            <th class="">S/N</th>
                                            <th class="">User-name</th>
                                            <th class="">User Email</th>
                                            <th class="">Role</th>
                                            <th class="">Username</th>
                                            <th class="">Profile</th>
                                            <th class="">Status</th>
                                            <th class="">Created At</th>
                                            <th class="">no. of post</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @foreach($users as $user)
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>
                                                <a href="{{ asset(auth()->user()->avatar) }}" target="_blank" rel="noopener noreferrer">
                                                    <img class="img-fluid" src="{{ asset(auth()->user()->avatar) }}" alt="avatar">
                                                </a>
                                            </td>
                                            <td></td>
                                            <td>{{$user->created_at}}
                                            <td>
                                            <td></td>
                                            <td>

                                                <ul class="table-controls">
                                                    <li class="mb-3">
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Change Status
                                                            </button>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a href="" class="btn btn-success mb-3  ml-4 mt-3">Admin</a>
                                                                <a href="" class="btn btn-success mb-3  ml-4">User</a>

                                                                <a class="dropdown-item" onclick="return confirm('Are you sure of the action?')" </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onClick="$(this).parent().trigger('submit')">Delete</button>
                                                </form>
                                                <button class="btn btn-primary">Edit</button>
                                            </td>
                                        </tr>
                                        @endforeach

                                        {{$users->links () }}
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