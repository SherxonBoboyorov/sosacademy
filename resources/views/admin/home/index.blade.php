
@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">SosAcademy</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 align-self-center text-right">
                                            <div class="m-l-10">
                                                <h5 class="mt-0">18090</h5>
                                                <p class="mb-0 text-muted">Visits Today <span class="badge bg-soft-success"><i class="mdi mdi-arrow-up"></i>2.35%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-3" style="height:3px;">
                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-account-multiple-plus"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 text-right align-self-center">
                                            <div class="m-l-10 ">
                                                <h5 class="mt-0">562</h5>
                                                <p class="mb-0 text-muted">New Users</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-3" style="height:3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="search-type-arrow"></div>
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round ">
                                                <i class="mdi mdi-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 align-self-center text-right">
                                            <div class="m-l-10 ">
                                                <h5 class="mt-0">7514</h5>
                                                <p class="mb-0 text-muted">New Orders</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-3" style="height:3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div><!-- container -->

    </div>

@endsection