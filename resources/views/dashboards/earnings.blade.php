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
                        <h4></h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                        <thead>
                            <tr>
                                <th class="">S/N</th>
                                <th class="">User</th>
                                <th class="">Referrence</th>
                                <th class="">Amount</th>
                                <th class="">Fee</th>
                                <th class="">Total</th>
                                <th class="">Type</th>
                                <th class="">Description</th>
                                <th class="">Status</th>
                                <th class="">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                                <tr>
                                    <td></td>
                                    <td>
                                     
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>td>
                                    <td </td>
                                    <td></td>
                                    <td>

                                        <ul class="table-controls">
                                            <li class="mb-3">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Change Status
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                       
                                                            <a class="dropdown-item" onclick="return confirm('Are you sure of the action?')"
                                                               
                                                            </a>
                                                       
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                           
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