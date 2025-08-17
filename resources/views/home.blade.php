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
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Product_Keluar::count()  }}</h4>
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
                                <h4 class="fw-semibold mb-2">{{ \App\Models\Product_Masuk::count() }}</h4>
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
    

@endsection