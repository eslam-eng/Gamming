@extends('dashboard.app')
@section('title','home')
@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">dashboard</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
                <div class="card px-3 ps-4">
                    <div class="row index1">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-2">
                            <div class="row border-end bd-xs-e-0 p-3">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div
                                        class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
                                        <i class="fe fe-users tx-15 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-9 py-0">
                                    <div class="pt-4 pb-3">
                                        <div class="d-flex">
                                            <h6 class="mb-2 tx-12">users</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <h4 class="tx-18 font-weight-semibold mb-0">{{\App\Models\User::query()->count()}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-2">
                            <div class="row border-end bd-md-e-0 bd-xs-e-0 bd-lg-e-0 bd-xl-e-0  p-3">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div
                                        class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
                                        <i class="fe fe-file-text tx-15 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="pt-4 pb-3">
                                        <div class="d-flex">
                                            <h6 class="mb-2 tx-12">contact-us</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <h4 class="tx-18 font-weight-semibold mb-0">{{\App\Models\Contactus::query()->where('is_replied',0)->count()}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

