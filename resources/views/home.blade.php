@extends('layouts.app')
@section('content')
<!-- Small boxes (Stat box) -->

        <!-- Page Header -->
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
                <span class="text-muted">Track your sales activity, leads and deals here.</span>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-text bg-white border"> <i class="ri-calendar-line"></i> </div>
                        <input type="text" class="form-control breadcrumb-input" id="daterange"
                            placeholder="Search By Date Range">
                    </div>
                </div>
                <button class="btn btn-primary btn-wave">
                    <i class="ri-share-forward-line me-1 rtl-icon-transform lh-1 d-inline-block"></i> Export
                </button>
            </div>
        </div>
        <!-- End::page-header -->
        <div class="row">

            <div class="col-xl-3">
                <div class="card custom-card hrm-main-card primary">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-primary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-users fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">System Users</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\User::count() }}</h4>
                                <div>
                                    <a href="/user">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card hrm-main-card secondary">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-secondary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-user-x fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Category</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Category::count() }}</h4>
                                <div>
                                    <a href="{{ route('categories.index') }}" class="fw-medium fs-12">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card  hrm-main-card success">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-success mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-heart-handshake fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Product</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Product::count() }}</h4>
                                <div>
                                    <a href="{{ route('products.index') }}" class="fw-medium fs-12">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card  hrm-main-card info">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-info mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-id-badge-2 fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Customer</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Customer::count() }}</h4>
                                <div>
                                    <a href="{{ route('customers.index') }}" class="fw-medium fs-12">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Log on to codeastro.com for more projects! -->


        <div class="row">




            <div class="col-xl-3">
                <div class="card custom-card hrm-main-card secondary">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-secondary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-user-x fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Outgoing</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\ProductOut::count()  }}</h4>
                                <div>
                                    <a href="{{ route('productsOut.index') }}" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card  hrm-main-card success">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-success mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-heart-handshake fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Purchase</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\ProductIn::count() }}</h4>
                                <div>
                                    <a href="{{ route('productsIn.index') }}" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card  hrm-main-card info">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="avatar bg-info mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                <i class="ti ti-id-badge-2 fs-20"></i>
                            </div>
                            <div>
                                <p class="fw-medium text-muted mb-2">Total Supplier</p>
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Supplier::count() }}</h4>
                                <div>
                                    <a href="{{ route('suppliers.index') }}" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
            <div id="container" class=" col-xl-3"></div>
        </div><!-- Log on to codeastro.com for more projects! -->







         <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary shadow shadow-primary">
                                                    <i class="ti ti-shopping-bag fs-5"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block">Total Orders</span>
                                                    <span class="badge bg-success-transparent rounded-pill">0.25%<i class="ti ti-arrow-up"></i></span>
                                                </div>
                                                <h4 class="fw-semibold mb-3 lh-1">31,862</h4>
                                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">View All Orders</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-secondary shadow shadow-secondary">
                                                    <i class="ti ti-currency-dollar fs-5"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block">Total Earnings</span>
                                                    <span class="badge bg-success-transparent rounded-pill">5.44%<i class="ti ti-arrow-up"></i></span>
                                                </div>
                                                <h4 class="fw-semibold mb-3 lh-1">$1.38M</h4>
                                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">Complete Revenue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-success shadow shadow-success">
                                                    <i class="ti ti-box fs-5"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block">Products Sold</span>
                                                    <span class="badge bg-danger-transparent rounded-pill">12.34%<i class="ti ti-arrow-down"></i></span>
                                                </div>
                                                <span class="d-block mb-2"></span>
                                                <h4 class="fw-semibold mb-3 lh-1">1,09,255</h4>
                                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">All Sales</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-info shadow shadow-info">
                                                    <i class="ti ti-moneybag fs-5"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block">Profit Percentage</span>
                                                    <span class="badge bg-success-transparent rounded-pill">2.12%<i class="ti ti-arrow-up"></i></span>
                                                </div>
                                                <span class="d-block mb-2"></span>
                                                <h4 class="fw-semibold mb-3 lh-1">36.75%</h4>
                                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">Total Profit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card profit-analysis-card">
                                    <div class="card-body p-0">
                                        <div class="p-4 pb-1"> 
                                            <h4 class="mb-1 d-flex align-items-center fw-semibold flex-wrap">$32,198<span class="text-success fw-medium fs-12 ms-2"><i class="ti ti-arrow-up align-middle me-1"></i>0.25%</span> </h4> 
                                            <span class="fs-14 d-block">Profit Earned</span> 
                                        </div>
                                        <div id="profit-analysis"></div>
                                        <div id="profit-analysis1"></div>
                                        <div id="profit-analysis2"></div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Sales By Traffic
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="progress-stacked progress-sm mb-4 mt-2 gap-1">
                                            <div class="progress-bar rounded" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <ul class="list-unstyled sales-traffic-list">
                                            <li>
                                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                    <div class="fw-semibold">Organic</div>
                                                    <div class="fw-semibold"><span class="text-success fs-11 fw-medium me-2 d-inline-block"><i class="ti ti-arrow-up alilgn-middle me-1"></i>0.56%</span>32,164</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                    <div class="fw-semibold">Paid</div>
                                                    <div class="fw-semibold"><span class="text-success fs-11 fw-medium me-2 d-inline-block"><i class="ti ti-arrow-up alilgn-middle me-1"></i>4.23%</span>16,343</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                    <div class="fw-semibold">Referral</div>
                                                    <div class="fw-semibold"><span class="text-danger fs-11 fw-medium me-2 d-inline-block"><i class="ti ti-arrow-down alilgn-middle me-1"></i>6.88%</span>18,564</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Sales Statistics
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light btn-wave fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="sales-statistics" class="p-3"></div>
                                        <div id="sales-statistics1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Revenue Statistics
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light btn-wave fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body text-center p-0">
                                        <div id="revenue-statistics1"></div>
                                        <div class="revenue-statistics">
                                            <div id="revenue-statistics"></div>
                                            <div class="chart-circle-value"></div>
                                        </div>
                                        <div class="row justify-content-center mt-4 p-3 gx-xl-1 gx-xxl-3">
                                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                                <span class="d-block text-muted mb-1 fs-12">Today</span>
                                                <span class="fw-semibold h6 mb-0 text-center">$0.65k<i class="ti ti-arrow-up text-success"></i></span>
                                            </div>
                                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                                <span class="d-block text-muted mb-1 fs-12">Target</span>
                                                <span class="fw-semibold h6 mb-0 text-center">$0.55k<i class="ti ti-arrow-down text-danger"></i></span>
                                            </div>
                                            <div class="col col-xl-4">
                                                <span class="d-block text-muted mb-1 fs-12">This Year</span>
                                                <span class="fw-semibold h6 mb-0 text-center">$0.36M<i class="ti ti-arrow-up text-success"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card income-card">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center flex-wrap gap-2 lh-1 p-3">
                                            <div class="circle-content">
                                                <div id="income"></div>
                                                <i class='bx bx-wallet fs-5 text-success'></i>
                                            </div>
                                            <div class="d-flex flex-column flex-fill">
                                                <span class="fw-semibold h6 mb-2">+12,345$</span>
                                                <p class="fs-13 mb-0">Total Income Earned</p>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block text-danger fw-medium fs-13 mb-2">
                                                    <i class="ti ti-arrow-down"></i>0.96%
                                                </span>
                                                <span>This Month</span>
                                            </div>
                                        </div>
                                        <div id="income-chart"></div>
                                    </div>
                                </div>
                                <div class="card custom-card expense-card">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center flex-wrap gap-2 lh-1 p-3">
                                            <div class="circle-content">
                                                <div id="expense"></div>
                                                <i class='bx bx-dollar-circle fs-5 text-secondary'></i>
                                            </div>
                                            <div class="d-flex flex-column flex-fill">
                                                <span class="fw-semibold h6 mb-2">-16,345$</span>
                                                <p class="fs-13 mb-0">Total Expenditure</p>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block text-success fw-medium fs-13 mb-2">
                                                    <i class="ti ti-arrow-up"></i>4.27%
                                                </span>
                                                <span>This Month</span>
                                            </div>
                                        </div>
                                        <div id="expenditure-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card overflow-hidden"> 
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Browser Statistics </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light btn-wave fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="card-body"> 
                                <ul class="list-unstyled browser-statistics-list">
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-primary border-dashed border-opacity-25 rounded">
                                            <div> 
                                                <span class="avatar avatar-md bg-primary-transparent">
                                                    <i class="ri-chrome-fill fs-4"></i> 
                                                </span> 
                                            </div> 
                                            <div class="flex-fill"> 
                                                <span class="fw-medium">Google</span> 
                                                <span class="d-block text-muted fs-12">Google,Inc</span> 
                                            </div> 
                                            <div class="text-end ms-auto">
                                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i class="ri-circle-fill fs-8 me-1 text-primary"></i>Sales</span> - 14,123</span>
                                                <span class="fs-11 fw-medium text-success d-block"><i class="ti ti-arrow-up"></i>3.26%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-secondary border-dashed border-opacity-25 rounded">
                                            <div> 
                                                <span class="avatar avatar-md bg-secondary-transparent">
                                                    <i class="ri-edge-fill fs-4"></i> 
                                                </span> 
                                            </div> 
                                            <div class="flex-fill"> 
                                                <span class="fw-medium">Edge</span> 
                                                <span class="d-block text-muted fs-12">Microsoft Corp,Inc</span> 
                                            </div> 
                                            <div class="text-end ms-auto">
                                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i class="ri-circle-fill fs-8 me-1 text-secondary"></i>Sales</span> - 12,324</span>
                                                <span class="fs-11 fw-medium text-success d-block"><i class="ti ti-arrow-up"></i>15.27%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-success border-dashed border-opacity-25 rounded">
                                            <div> 
                                                <span class="avatar avatar-md bg-success-transparent">
                                                    <i class="ri-firefox-fill fs-4"></i>
                                                </span> 
                                            </div> 
                                            <div class="flex-fill"> 
                                                <span class="fw-medium">Firefox</span> 
                                                <span class="d-block text-muted fs-12">Mozilla,Inc</span> 
                                            </div> 
                                            <div class="text-end ms-auto">
                                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i class="ri-circle-fill fs-8 me-1 text-success"></i>Sales</span> - 7,422</span>
                                                <span class="fs-11 fw-medium text-danger d-block"><i class="ti ti-arrow-down"></i>7.43%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-pink border-dashed border-opacity-25 rounded">
                                            <div> 
                                                <span class="avatar avatar-md bg-pink-transparent">
                                                    <i class="ri-safari-fill fs-4"></i>
                                                </span> 
                                            </div> 
                                            <div class="flex-fill"> 
                                                <span class="fw-medium">Safari</span> 
                                                <span class="d-block text-muted fs-12">Apple Corp,Inc</span> 
                                            </div> 
                                            <div class="text-end ms-auto">
                                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i class="ri-circle-fill fs-8 me-1 text-pink"></i>Sales</span> - 4,833</span>
                                                <span class="fs-11 fw-medium text-success d-block"><i class="ti ti-arrow-up"></i>5.21%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3 p-2 border border-info border-dashed border-opacity-25 rounded">
                                            <div> 
                                                <span class="avatar avatar-md bg-info-transparent">
                                                    <i class="ri-opera-fill fs-4"></i>
                                                </span> 
                                            </div> 
                                            <div class="flex-fill"> 
                                                <span class="fw-medium">Opera</span> 
                                                <span class="d-block text-muted fs-12">Opera,Inc</span> 
                                            </div> 
                                            <div class="text-end ms-auto">
                                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i class="ri-circle-fill fs-8 me-1 text-info"></i>Sales</span> - 6,986</span>
                                                <span class="fs-11 fw-medium text-success d-block"><i class="ti ti-arrow-up"></i>2.95%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Top Selling Products
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled top-products-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-91.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">VisionPro 55" 4K TV</span>
                                                <span class="text-muted fs-12">
                                                    Electronics
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">100</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-92.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">EliteChair Pro</span>
                                                <span class="text-muted fs-12">
                                                    Furniture
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">200</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-93.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">StellarPhone X</span>
                                                <span class="text-muted fs-12">
                                                    Electronics
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">150</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-94.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Gourmet Chef Knife</span>
                                                <span class="text-muted fs-12">
                                                    Kitchen
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">300</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-95.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Fashionista Sunglasses</span>
                                                <span class="text-muted fs-12">
                                                    Fashion
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">350</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light">
                                                    <img src="../assets/images/media/media-96.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">PowerBeats Pro</span>
                                                <span class="text-muted fs-12">
                                                    Electronics
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fw-semibold d-block">150</span>
                                                <span class="text-muted fs-12 d-block">Sales</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>                     
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recent Activity
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled recent-activity-list">
                                    <li>
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="d-block fw-semibold mb-1 text-primary">New Lead</span>
                                                    <span class="text-muted fs-12">12:24pm</span>
                                                </div>
                                                <span class="d-block pe-5">John Smith from Acme Corp. submitted a lead for <span class="fw-semibold">Beekipo.</span></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="d-block fw-semibold mb-1 text-secondary">Quote Sent</span>
                                                    <span class="text-muted fs-12">10:18am</span>
                                                </div>
                                                <span class="d-block pe-5">Quote <span class="fw-semibold text-decoration-underline">#12345</span> for Hexno sent to Sarah Lee this tuesday.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="d-block fw-semibold mb-1 text-success">Meeting Scheduled</span>
                                                    <span class="text-muted fs-12">11:45am</span>
                                                </div>
                                                <span class="d-block pe-5">Follow-up meeting with David Kim regarding proposal for <span class="fw-semibold">Spruko</span> scheduled.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="d-block fw-semibold mb-1 text-pink">Invoice Paid</span>
                                                    <span class="text-muted fs-12">04:30pm</span>
                                                </div>
                                                <span class="d-block pe-5">Invoice <span class="fw-semibold">#54321</span> for Meebom paid by Michael Jackson.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="d-block fw-semibold mb-1 text-info">New Orders</span>
                                                    <span class="text-muted fs-12">12:23am</span>
                                                </div>
                                                <span class="d-block pe-5">Highest order value: <span class="fw-semibold">$2,500</span> for Stellar X</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Country Statistics
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">Export</a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled country-stats-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/india_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">India</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-danger me-1"><i class="ti ti-arrow-down align-middle"></i></span><span>$32,879</span> (65%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 65%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/russia_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">Russia</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-success me-1"><i class="ti ti-arrow-up align-middle"></i></span><span>$22,710</span> (55%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-secondary" style="width: 55%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/canada_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">Canada</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-danger me-1"><i class="ti ti-arrow-down align-middle"></i></span><span>$56,291</span> (69%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-success" style="width: 69%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/uae_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">UAE</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-success me-1"><i class="ti ti-arrow-up align-middle"></i></span><span>$34,209</span> (60%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-pink" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/us_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">United States</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-success me-1"><i class="ti ti-arrow-up align-middle"></i></span><span>$8,110</span> (86%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-info" style="width: 86%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-light p-2">
                                                    <img src="../assets/images/flags/germany_flag.jpg" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-semibold d-block">Germany</span>
                                                    </div>
                                                    <div class="fw-medium"><span class="text-success me-1"><i class="ti ti-arrow-up align-middle"></i></span><span>$67,357</span> (73%)</div>
                                                </div>
                                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-warning" style="width: 73%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Products Summary
                                </div>
                                <div class="d-flex flex-wrap ms-auto gap-2">
                                    <div class="me-1">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                                <th>Client Name</th>
                                                <th>Date</th>
                                                <th>Product</th>
                                                <th>Transaction ID</th>
                                                <th>Status</th>
                                                <th>Cost</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob2" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm shadow">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold">Sania Deo</span>
                                                            <span class="fs-12 text-muted">saniadeo231@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1-02-2024</td>
                                                <td>
                                                    Soft Toys
                                                </td>
                                                <td>#18027169169</td>
                                                <td>
                                                    <span class="badge badge-pill bg-success-transparent">Delivered</span>
                                                </td>
                                                <td>$3,278</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-success-light btn-icon btn-wave"><i
                                                                class="fe fe-edit"></i></a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                                class="fe fe-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob3" value="" aria-label="..." checked=""></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm shadow">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold">Labina Martina</span>
                                                            <span class="fs-12 text-muted">labinamartina@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>10-03-2024</td>
                                                <td>
                                                    Mobiles Phone
                                                </td>
                                                <td>#15263748493</td>
                                                <td>
                                                    <span class="badge badge-pill bg-success-transparent">Out for Delivery</span>
                                                </td>
                                                <td>$36,628</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-success-light btn-icon btn-wave"><i
                                                                class="fe fe-edit"></i></a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                                class="fe fe-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob4" value="" aria-label="..." checked=""></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm shadow">
                                                                <img src="../assets/images/faces/4.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold">Sania Martina</span>
                                                            <span class="fs-12 text-muted">saniamartina@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5-04-2024</td>
                                                <td>
                                                    Photo Frame
                                                </td>
                                                <td>#17890345670</td>
                                                <td>
                                                    <span class="badge badge-pill bg-warning-transparent">Pending</span>
                                                </td>
                                                <td>$978</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-success-light btn-icon btn-wave"><i
                                                                class="fe fe-edit"></i></a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                                class="fe fe-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob5" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm shadow">
                                                                <img src="../assets/images/faces/8.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold">Carmen Goh</span>
                                                            <span class="fs-12 text-muted">carmengoh32@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28-02-2024</td>
                                                <td>
                                                    Decorative Flower
                                                </td>
                                                <td>#50935467837</td>
                                                <td>
                                                    <span class="badge badge-pill bg-secondary-transparent">Shipped</span>
                                                </td>
                                                <td>$10,243</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-success-light btn-icon btn-wave"><i
                                                                class="fe fe-edit"></i></a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                                class="fe fe-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob6" value="" aria-label="..." checked=""></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm shadow">
                                                                <img src="../assets/images/faces/14.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold">Barry Kade</span>
                                                            <span class="fs-12 text-muted">barrykade22@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>17-03-2024</td>
                                                <td>
                                                    Bag
                                                </td>
                                                <td>#23687364789</td>
                                                <td>
                                                    <span class="badge badge-pill bg-danger-transparent">Cancelled</span>
                                                </td>
                                                <td>$4,897</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-success-light btn-icon btn-wave"><i
                                                                class="fe fe-edit"></i></a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-icon btn-danger-light btn-wave"><i
                                                                class="fe fe-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 6 Entries
                                        </div>
                                        <div class="transform-arrow ms-2">
                                            <i class="bi bi-arrow-right fw-semibold"></i>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Valuable Customers
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled valuable-customers-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">John Doe</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #1902545</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary">$2,000</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/1.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">Emiley</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #1902533</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-secondary">$2,360</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/14.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">Leo Phillip</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #1902241</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">$2,500</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">Jane smith</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #1902613</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-info">$3,000</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/10.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">Josh Matthews</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #1902111</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-pink">$2,500</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 p-2 rounded border border-dashed flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/faces/7.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold">Taylor Jackson</span>
                                                <span class="d-block fs-12 text-muted">Customer ID - #19022311</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-teal">$2,833</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->


@endsection
