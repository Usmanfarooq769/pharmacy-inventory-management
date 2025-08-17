@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">POS System</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">POS System</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start Row-1 -->
                <div class="row">
                    <div class="d-flex align-Items-center justify-content-between mb-3">
                        <h6 class="fw-medium mb-0">Categories</h6>
                        <button type="button" class="btn btn-sm btn-pink"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                    </div>
                    <div class="col-xxl-12">
                        <div class="row pos-category" id="filter">
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card active">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter="*">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/1.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">All Products</span>
                                                    <span class="d-block op-7 fs-12">200 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".fruits">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/2.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Fruits</span>
                                                    <span class="d-block op-7 fs-12">45 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".vegetables">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/3.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Vegetables</span>
                                                    <span class="d-block op-7 fs-12">60 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".daily-products">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/4.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Dairy Products</span>
                                                    <span class="d-block op-7 fs-12">30 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".bakery">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/5.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Bakery</span>
                                                    <span class="d-block op-7 fs-12">25 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-xl-4 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".beverages">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/7.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Beverages</span>
                                                    <span class="d-block op-7 fs-12">35 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-12">
                                <div class="card custom-card">
                                    <div class="card-body p-3">
                                        <a href="javascript:void(0);" class="stretched-link categories" data-filter=".snacks">
                                            <div class="d-flex gap-2 flex-column justify-content-center text-center categories-content">
                                                <span class="avatar avatar-lg menu-icon mx-auto bg-transparent rounded-circle">
                                                    <img src="../assets/images/pos-system/6.png" alt="">
                                                </span>
                                                <div>
                                                    <span class="fw-medium">Snacks</span>
                                                    <span class="d-block op-7 fs-12">50 Items</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between mb-3 p-3 bg-white rounded-3 flex-wrap gap-2">
                                    <div class="flex-fill">
                                        <h5 class="fw-medium mb-1">Items List</h5>
                                        <p class="mb-0 text-muted fs-12">Get your list below</p>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex gap-2 rounded-3 flex-fill align-items-center flex-wrap flex-sm-nowrap">
                                            <input type="text" class="form-control" placeholder="Search Here ...">
                                            <div class="btn btn-primary">Search</div>
                                            <div class="btn btn-success">Filter</div>
                                            <a href="#viewcart" class="btn btn-info-light text-nowrap" data-bs-toggle="offcanvas" aria-controls="viewcart"> View Cart<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row list-wrapper bg-white rounded-3 py-4 mx-0 row-cols-xxl-4">
                                    <div class="col-xxl col-xl-4 col-md-6 card-item fruits" data-category="fruits">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-danger">15% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/9.jpg" class="img-fluid possystem-img card-img-top" alt="Strawberry">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Fresh Fruits</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Avaliable</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Strawberry</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$15.99</s><h4 class="fw-semibold mb-0 d-inline-block">$12.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item vegetables" data-category="vegetables">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <img src="../assets/images/pos-system/18.jpg" class="img-fluid possystem-img card-img-top" alt="Lettuce">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Fresh Vegetables</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Avaliable</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Fresh Lettuce</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$5.99</s><h4 class="fw-semibold mb-0 d-inline-block">$3.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item beverages" data-category="beverages">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-info">30% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/15.jpg" class="img-fluid possystem-img card-img-top" alt="Orange Juice">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Beverages</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Orange Juice</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$3.49</s><h4 class="fw-semibold mb-0 d-inline-block">$2.49</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item bakery" data-category="bakery">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <img src="../assets/images/pos-system/11.jpg" class="img-fluid possystem-img card-img-top" alt="Biscuit with Choco Chips">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Bakery</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Biscuit with Choco Chips</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$4.99</s><h4 class="fw-semibold mb-0 d-inline-block">$3.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item daily-products" data-category="daily-products">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-pink">30% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/19.jpg" class="img-fluid possystem-img card-img-top" alt="Paneer">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Daily Products</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Paneer</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$5.99</s><h4 class="fw-semibold mb-0 d-inline-block">$4.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item bakery" data-category="bakery">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-info">30% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/10.jpg" class="img-fluid possystem-img card-img-top" alt="Croissants">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Bakery</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Croissants</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$6.99</s><h4 class="fw-semibold mb-0 d-inline-block">$5.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item beverages" data-category="beverages">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <img src="../assets/images/pos-system/8.jpg" class="img-fluid possystem-img card-img-top" alt="Lime Soda">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Beverages</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Lime Soda</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$2.99</s><h4 class="fw-semibold mb-0 d-inline-block">$1.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item snacks" data-category="snacks">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-danger">30% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/13.jpg" class="img-fluid possystem-img card-img-top" alt="Potato Chips">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Snacks</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Potato Chips</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$3.49</s><h4 class="fw-semibold mb-0 d-inline-block">$2.49</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item snacks" data-category="snacks">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <img src="../assets/images/pos-system/12.jpg" class="img-fluid possystem-img card-img-top" alt="Salt Biscuits">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Snacks</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Salt Biscuits</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$2.99</s><h4 class="fw-semibold mb-0 d-inline-block">$1.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-4 col-md-6 card-item vegetables" data-category="vegetables">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-danger">30% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/16.jpg" class="img-fluid possystem-img card-img-top" alt="Cabbage">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Fresh Vegetables</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Avaliable</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Fresh Cabbage</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$6.50</s><h4 class="fw-semibold mb-0 d-inline-block">$4.50</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-xxl col-xl-4 col-md-6 card-item daily-products" data-category="daily-products">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <div class="pos-offer-badge"> 
                                                <span class="badge bg-info">25% Off</span> 
                                            </div>
                                            <img src="../assets/images/pos-system/17.jpg" class="img-fluid possystem-img card-img-top" alt="Toned Milk">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Daily Products</span>
                                                    <span class="float-end badge bg-success-transparent"><i class="ti ti-circle-filled me-1"></i>Available</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Toned Milk</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$3.99</s><h4 class="fw-semibold mb-0 d-inline-block">$2.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-xxl col-xl-4 col-md-6 card-item fruits" data-category="fruits">
                                        <div class="card custom-card shadow-none border pos-card-items-card p-3 overflow-hidden">
                                            <img src="../assets/images/pos-system/14.jpg" class="img-fluid possystem-img card-img-top" alt="Oranges">
                                            <div class="card-body bg-white rounded-bottom shadow-sm">
                                                <div class="mb-3">
                                                    <span class="text-muted">Fresh Fruits</span>
                                                    <span class="float-end badge bg-danger-transparent"><i class="ti ti-circle-filled me-1"></i>Not Avaliable</span><br>
                                                    <a href="javascript:void(0);" class="fw-medium fs-18">Oranges</a>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="bx bx-cart fs-18 mb-1 align-middle me-1"></i>Add To Cart</button>
                                                    </div>
                                                    <div>
                                                        <s class="me-2 text-muted fw-medium fs-14">$10.99</s><h4 class="fw-semibold mb-0 d-inline-block">$8.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0 float-end mb-4 mt-3">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-1 -->

				<!-- Start::offcanvas viewcart -->
                <div class="offcanvas offcanvas-end pos-cart-summary" tabindex="-1" id="viewcart" aria-labelledby="viewcartLabel">
                    <div class="offcanvas-header border-bottom">
                        <h6 class="offcanvas-title" id="viewcartLabel">Cart <span class="badge bg-success-transparent ms-2">05 items</span></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-0">
                        <ul class="list-group mb-0 border-0 rounded-0">
                            <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                <div class="d-flex gap-3 align-items-start flex-wrap">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-success bg-opacity-25 avatar-rounded p-1">
                                            <img src="../assets/images/pos-system/9.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="fw-semibold mb-0 fs-15">Strawberry<span class="badge bg-primary-transparent ms-2 fs-9 align-middle">30% Off</span></p>
                                        <p class="text-muted fs-12 mb-2">Fruits</p>
                                        <div class="product-quantity-container">
                                            <div class="input-group flex-nowrap">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="2">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ms-auto">
                                        <p class="text-end">
                                            <a aria-label="anchor" href="javascript:void(0)">
                                                <i class="ri-close-line fs-14 p-1 text-danger lh-1 bg-danger-transparent rounded-circle align-middle"></i>
                                            </a>
                                        </p>
                                        <h5 class="mb-0 fw-medium mt-auto pt-3"><s class="text-muted fs-12">$4.3</s> $3.99</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                <div class="d-flex gap-3 align-items-start flex-wrap">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-success bg-opacity-25 avatar-rounded p-1">
                                            <img src="../assets/images/pos-system/18.jpg" alt="Lettuce">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="fw-semibold mb-0 fs-15">Lettuce<span class="badge bg-info-transparent ms-2 fs-9 align-middle">20% Off</span></p>
                                        <p class="text-muted fs-12 mb-2">Vegetables</p>
                                        <div class="product-quantity-container">
                                            <div class="input-group flex-nowrap">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="2">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ms-auto">
                                        <p class="text-end">
                                            <a aria-label="anchor" href="javascript:void(0)">
                                                <i class="ri-close-line fs-14 p-1 text-danger lh-1 bg-danger-transparent rounded-circle align-middle"></i>
                                            </a>
                                        </p>
                                        <h5 class="mb-0 fw-medium mt-auto pt-3"><s class="text-muted fs-12">$3.99</s> $3.19</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                <div class="d-flex gap-3 align-items-start flex-wrap">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-warning bg-opacity-25 avatar-rounded p-1">
                                            <img src="../assets/images/pos-system/10.jpg" alt="Croissants">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="fw-semibold mb-0 fs-15">Croissants<span class="badge bg-orange-transparent ms-2 fs-9 align-middle">15% Off</span></p>
                                        <p class="text-muted fs-12 mb-2">Bakery</p>
                                        <div class="product-quantity-container">
                                            <div class="input-group flex-nowrap">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="2">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ms-auto">
                                        <p class="text-end">
                                            <a aria-label="anchor" href="javascript:void(0)">
                                                <i class="ri-close-line fs-14 p-1 text-danger lh-1 bg-danger-transparent rounded-circle align-middle"></i>
                                            </a>
                                        </p>
                                        <h5 class="mb-0 fw-medium mt-auto pt-3"><s class="text-muted fs-12">$5.00</s> $4.25</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                <div class="d-flex gap-3 align-items-start flex-wrap">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-info bg-opacity-25 avatar-rounded p-1">
                                            <img src="../assets/images/pos-system/8.jpg" alt="Lime Soda">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="fw-semibold mb-0 fs-15">Lime Soda<span class="badge bg-secondary-transparent ms-2 fs-9 align-middle">10% Off</span></p>
                                        <p class="text-muted fs-12 mb-2">Beverages</p>
                                        <div class="product-quantity-container">
                                            <div class="input-group flex-nowrap">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="2">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ms-auto">
                                        <p class="text-end">
                                            <a aria-label="anchor" href="javascript:void(0)">
                                                <i class="ri-close-line fs-14 p-1 text-danger lh-1 bg-danger-transparent rounded-circle align-middle"></i>
                                            </a>
                                        </p>
                                        <h5 class="mb-0 fw-medium mt-auto pt-3"><s class="text-muted fs-12">$2.99</s> $2.69</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex gap-3 align-items-start flex-wrap">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-danger bg-opacity-25 avatar-rounded p-1">
                                            <img src="../assets/images/pos-system/13.jpg" alt="Potato Chips">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="fw-semibold mb-0 fs-15">Potato Chips<span class="badge bg-pink-transparent ms-2 fs-9 align-middle">5% Off</span></p>
                                        <p class="text-muted fs-12 mb-2">Snacks</p>
                                        <div class="product-quantity-container">
                                            <div class="input-group flex-nowrap">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="2">
                                                <button type="button" aria-label="button" class="btn btn-icon btn-sm btn-wave btn-primary product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ms-auto">
                                        <p class="text-end">
                                            <a aria-label="anchor" href="javascript:void(0)">
                                                <i class="ri-close-line fs-14 p-1 text-danger lh-1 bg-danger-transparent rounded-circle align-middle"></i>
                                            </a>
                                        </p>
                                        <h5 class="mb-0 fw-medium mt-auto pt-3"><s class="text-muted fs-12">$1.99</s> $1.89</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="p-3 border-top border-block-start-dashed mt-5 bg-light">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">Total Items</div>
                                <div class="fw-medium fs-14">05</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">Sub Total</div>
                                <div class="fw-medium fs-14">$389.00</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">Discount</div>
                                <div class="fw-medium fs-14">15% - $58.35</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted">GST (12%)</div>
                                <div class="fw-medium fs-14">+ $16.68</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-muted">Service Tax (18%)</div>
                                <div class="fw-medium fs-14">- $22.05</div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fw-medium fs-15">Total :</div>
                                <div class="fw-semibold fs-16 text-dark">$340.28</div>
                            </div>
                            <div class="mt-4">
                                <a href="checkout.html" class="btn btn-success btn-wave d-grid waves-effect waves-light">Proceed to Pay</a>
                            </div>
                        </div>                        
                    </div>
                  </div>
				<!-- End::offcanvas viewcart -->

        <!-- End::app-content -->

        <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="input-group">
                          <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                              aria-label="Search Anything ..." aria-describedby="button-addon2">
                          <button class="btn btn-primary" type="button"
                              id="button-addon2"><i class="bi bi-search"></i></button>
                      </div>
                  </div>
              </div>
          </div>
        </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    @endsection


@push('scripts')

   


    <!-- Apex Charts JS -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Isotope-layout JS -->
    <script src="{{asset('assets/libs/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Internal POS-Dashboard JS -->
    <script src="{{asset('assets/js/pos-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

@endpush