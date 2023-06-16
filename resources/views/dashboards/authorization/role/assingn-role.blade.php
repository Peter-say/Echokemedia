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
                                        <h4>Assign Role</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">User Email</th>
                                                <th class="">Role</th>
                                                <th class="">Change Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role }}</td>

                                                    <td>
                                                        <ul class="table-controls">
                                                            <li class="mb-3">
                                                                <div class="dropdown">
                                                                    <button class="btn dropdown-toggle btn-sm"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Change Role
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        @foreach (['Super-Admin', 'Admin', 'Moderator', 'Author'] as $role)
                                                                            <a class="dropdown-item"
                                                                                onclick="return  confirm ('Are you sure of the action?')"
                                                                                href="{{ route('dashboard.authorization.assign.role', ['id' => $user->id, 'role' => $role]) }}">
                                                                               Assign as {{ $role }}
                                                                            </a>
                                                                       @endforeach
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <td>
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
