@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">


<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Dashboard</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <div class="col-md-6 col-xl-3 col-12 mb-20">
            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Add-Cart im-icon-set float-right bg-primary"></i>
                <h3>55</h3>
                <p>Active Task Orders</p>
                <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>New: 10</span> <span class="float-right pr-15">Active TOs: 35</span></p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3>45</h3>
                <p>TOPs</p>
                <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Submitted TOs: </span> <span class="float-right pr-15">17</span>
                </p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                <h3>26</h3>
                <p>Invoices</p>
                <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Under PM: 15</span> <span class="float-right pr-15">RCSE: 6</span></p>
            </div>
        </div>


        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                <h3>20</h3>
                <p>Material Requests</p>
                <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Quotations: 15</span> <span class="float-right pr-15">+72%</span>
                </p>
            </div>
        </div>
    </div>


    {{--<div class="col-12">--}}
    <div class="row">
        <div class="col-md-12 col-lg-7 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Task Orders Analysis</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <canvas id="myChart" width="400" height="200"></canvas>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-5 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Expenses Report</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Names</th>
                                    <th>Weekly Expenses</th>
                                    <th>Monthly Expenses</th>
                                    <th>Yearly Expenses</th>
                                </tr>
                                <tr>
                                    <td>Task Orders</td>
                                    <td>250K</td>
                                    <td>180K</td>
                                    <td>1500K</td>
                                </tr>
                                <tr>
                                    <td>Gadoi Plaza</td>
                                    <td>130</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Office Expenses</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Salaries & Wages</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="row">
        <div class="col-xl-7 col-12 mt-20 ">
            <div class="bg-white dashboard-col">
                <h5 class="card-header">IAG Activity Tracker for All Staff</h5>
                {{--<div class="card">--}}
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Person Resposible</th>
                                <th scope="col"Location</th>
                                <th scope="col">Activity</th>
                                <th scope="col">Date Due</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lawrence Omanyo</td>
                                <td>Johwar</td>
                                <td>Camp renovation for IAG Johwar Camp</td>
                                <td>April 27,2025</td>
                                <td><span class="badge badge-success float-left">Ongoing</span></td>


                            </tr>
                            <tr>
                                <td>Ahmed Rashid</td>
                                <td>IAG Headquarters</td>
                                <td>Submission of all WATSAN Invoices</td>
                                <td>April 25,2024</td>
                                <td>

                                    <span class="badge badge-warning float-left">Pending</span></td>


                            </tr>
                            <tr>
                                <td>Arthur Kintu</td>
                                <td>IAG Headquarters</td>
                                <td>Uploading the IAG ERP</td>
                                <td>Mar 25,2024</td>
                                <td><span class="badge badge-danger float-left">Under Review</span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            {{--</div>--}}
        </div>
        <div class="col-xl-5 col-12 mt-20 ">
            <div class="card p-0">
                <div class="bg-white dashboard-col">
                    <div class="card-header bg-primary">
                        <h5 class="text-white my-0">Sector Reports</h5>
                    </div>
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item border-bottom-1 border-0">
                                <div class="row">
                                    <div class="col-sm-4 col-12 align-self-center">
                                        <img src="{{asset('img/images/blog3.jpg')}}" alt="images missing"
                                            class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <h6>IAG Weekly Meeting Minutes</h6>
                                        <p>Attached minutes for the IAG Weekly Meetings</p>
                                    </div>
                                    <div class="col-sm-3 col-12 align-self-center">
                                        <a href="" class="btn btn-secondary">View</a>
                                    </div>
                                </div>
                                <hr>
                            </li>

                            <li class="list-group-item  border-0">
                                <div class="row">
                                    <div class="col-sm-4 col-12 align-self-center">
                                        <img src="{{asset('img/images/blog1.jpg')}}" alt="images missing"
                                            class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <h6>IAG Base Camp Renovation Updates</h6>
                                        <p>Progress report on the cosntruction project for the new accomodation at the base camp</p>
                                    </div>
                                    <div class="col-sm-3 col-12 align-self-center">
                                        <a href="" class="btn btn-secondary">View</a>
                                    </div>
                                </div>
                                <hr>
                            </li>


                        </ul>
                    </div>
                    <a href="" class="card-footer text-center bg-white d-block ">View All Blogs</a>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

<!-- end of page level js -->
@stop
