@extends('company.layouts.master')
@section('title', 'Dashboard')
@section('main-content')
    <!-- Page Container START -->
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-blue">
                                <i class="anticon anticon-dollar"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0">{{ $total_campaign }}</h2>
                                <p class="m-b-0 text-muted">Total Point's Earned</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-blue">
                                <i class="anticon anticon-dollar"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0">{{ $total_campaign }}</h2>
                                <p class="m-b-0 text-muted">Number of Active Tasks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-gold">
                                <i class="anticon anticon-profile"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0">{{ $total_campaignReq }}</h2>
                                <p class="m-b-0 text-muted">Campaign Approval Request</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-b-0">Referral Tasks</h5>
                            <div>
                                <a href="{{ route('company.campaign.list')}}" class="btn btn-sm btn-info">View All</a>
                                <a href="{{ route('company.campaign.create')}}" class="btn btn-sm btn-success">Add New</a>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on facebook</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on instagram</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on thread</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$600</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Subscribe to our chanel on youtube</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-b-0">Social Share Tasks</h5>
                            <div>
                                <div>
                                    <a href="{{ route('company.campaign.list')}}" class="btn btn-sm btn-info">View All</a>
                                    <a href="{{ route('company.campaign.create')}}" class="btn btn-sm btn-success">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on facebook</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on instagram</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Follow us on thread</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$600</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Subscribe to our chanel on youtube</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-b-0">Custom Tasks</h5>
                            <div>
                                <a href="{{ route('company.campaign.list')}}" class="btn btn-sm btn-info">View All</a>
                                <a href="{{ route('company.campaign.create')}}" class="btn btn-sm btn-success">Add New</a>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Comment on our blog</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Share blog on instagram</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Like our post</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$600</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-25">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">
                                                <a class="text-dark" href="javascript:void(0);">Subscribe to our chanel on youtube</a>
                                            </h6>
                                            <p class="text-muted m-b-0">$100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Total Revenue</h5>
                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-default active">
                                        <span>Month</span>
                                    </button>
                                    <button class="btn btn-default">
                                        <span>Year</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-50" style="height: 330px">
                            <canvas class="chart" id="revenue-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="m-b-0">Users</h5>
                        <div class="m-v-60 text-center" style="height: 200px">
                            <canvas class="chart" id="customers-chart"></canvas>
                        </div>
                        <div class="row border-top p-t-25">
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div class="media align-items-center">
                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                        <div class="m-l-5">
                                            <h4 class="m-b-0">350</h4>
                                            <p class="m-b-0 muted">New</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div class="media align-items-center">
                                        <span class="badge badge-secondary badge-dot m-r-10"></span>
                                        <div class="m-l-5">
                                            <h4 class="m-b-0">450</h4>
                                            <p class="m-b-0 muted">Returning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div class="media align-items-center">
                                        <span class="badge badge-warning badge-dot m-r-10"></span>
                                        <div class="m-l-5">
                                            <h4 class="m-b-0">100</h4>
                                            <p class="m-b-0 muted">Others</p>
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
