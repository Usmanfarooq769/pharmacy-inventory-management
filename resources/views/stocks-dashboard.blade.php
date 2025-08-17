@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Stocks</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="swiper swiper-basic swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        Bitcoin <span class="text-muted">(BTC)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $15,248 
                                                        <span class="fs-12 fw-normal ms-1 text-success">
                                                            <i class="ti ti-trending-up"></i> 0.14%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-warning avatar-md">
                                                        <i class="bi bi-currency-bitcoin fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-success fw-semibold">1.8% 
                                                        <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$58,25.00B 
                                                        <i class="ri-arrow-down-s-fill text-danger lh-1 align-middle fs-20 ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        Tesla <span class="text-muted">(TSLA)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $250.15 
                                                        <span class="fs-12 fw-normal ms-1 text-danger">
                                                            <i class="ti ti-trending-down"></i> 1.25%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-primary avatar-md">
                                                        <i class="bi bi-battery-charging fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-danger fw-semibold">2.1% 
                                                        <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$800.00B 
                                                        <i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        Apple <span class="text-muted">(AAPL)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $175.00 
                                                        <span class="fs-12 fw-normal ms-1 text-success">
                                                            <i class="ti ti-trending-up"></i> 0.75%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-success avatar-md">
                                                        <i class="bi bi-apple fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-success fw-semibold">3.0% 
                                                        <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$2.8500T 
                                                        <i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        NVIDIA <span class="text-muted">(NVDA)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $500.00 
                                                        <span class="fs-12 fw-normal ms-1 text-success">
                                                            <i class="ti ti-trending-up"></i> 2.10%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-info avatar-md">
                                                        <i class="bi bi-graph-up fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-success fw-semibold">4.5% 
                                                        <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$3.520T 
                                                        <i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        Samsung <span class="text-muted">(SSNLF)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $1,400.00 
                                                        <span class="fs-12 fw-normal ms-1 text-success">
                                                            <i class="ti ti-trending-up"></i> 0.50%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-pink avatar-md">
                                                        <i class="bi bi-broadcast fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-success fw-semibold">2.0% 
                                                        <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$450.00B 
                                                        <i class="ri-arrow-down-s-fill text-danger lh-1 align-middle fs-20 ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between mb-1">
                                                <div>
                                                    <div class="fs-14 mb-1">
                                                        AliExpress <span class="text-muted">(BABA)</span>
                                                    </div>
                                                    <div class="fw-semibold fs-18">
                                                        $100.25 
                                                        <span class="fs-12 fw-normal ms-1 text-danger">
                                                            <i class="ti ti-trending-down"></i> -0.30%
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="avatar avatar-rounded bg-teal avatar-md">
                                                        <i class="bi bi-shop fs-22 lh-1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                <div>
                                                    <span class="text-danger fw-semibold">-1.5% 
                                                        <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i>
                                                    </span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                                <div class="text-end">
                                                    <div class="text-muted fs-12 fw-medium">Market Cap:</div>
                                                    <div class="ms-auto fs-16 fw-semibold">$270.00B 
                                                        <i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i>
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
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    My Watchlist
                                </div>
                                <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-primary border-opacity-10 bg-primary flex-shrink-0">
                                            <i class="bi bi-battery-charging fs-20 lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">Tesla (TSLA)</div>
                                            <span class="text-muted fs-12">Current Price: $250.15</span>
                                        </div>
                                        <span class="text-success ms-auto fw-semibold">+1.25%</span>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-secondary border-opacity-10 bg-secondary flex-shrink-0">
                                            <i class="bi bi-apple fs-20 lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">Apple (AAPL)</div>
                                            <span class="text-muted fs-12">Current Price: $175.00</span>
                                        </div>
                                        <span class="text-success ms-auto fw-semibold">+0.75%</span>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-success border-opacity-10 bg-success flex-shrink-0">
                                            <i class="bi bi-broadcast fs-20 lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">NVIDIA (NVDA)</div>
                                            <span class="text-muted fs-12">Current Price: $500.00</span>
                                        </div>
                                        <span class="text-success ms-auto fw-semibold">+2.10%</span>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-info border-opacity-10 bg-info flex-shrink-0">
                                            <i class="bi bi-phone fs-20 lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">Samsung (SSNLF)</div>
                                            <span class="text-muted fs-12">Current Price: $1,400.00</span>
                                        </div>
                                        <span class="text-danger ms-auto fw-semibold">-0.50%</span>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-pink border-opacity-10 bg-pink flex-shrink-0">
                                            <i class="bi bi-shop fs-20 lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">AliExpress (BABA)</div>
                                            <span class="text-muted fs-12">Current Price: $100.25</span>
                                        </div>
                                        <span class="text-danger ms-auto fw-semibold">-0.30%</span>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 align-items-center">
                                        <span class="avatar avatar-lg p-2 avatar-rounded border border-teal border-opacity-10 bg-teal flex-shrink-0">
                                            <i class="bi bi-graph-up fs-20 lh-1"></i> 
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium">Meta Platforms (META)</div>
                                            <span class="text-muted fs-12">Current Price: $320.50</span>
                                        </div>
                                        <span class="text-success ms-auto fw-semibold">+1.50%</span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Stock Price Overview</div>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1D</button> 
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1W</button> 
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1M</button> 
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">3M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button> 
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button> 
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-end gap-xl-5 gap-3 flex-wrap px-sm-3">
                                    <div class="min-w-fit-content me-sm-3">
                                        <div class="d-flex align-items-end mb-1 gap-3 flex-wrap">
                                            <span class="avatar avatar-sm bg-primary align-self-start">
                                                <i class="ti ti-pig-money fs-16"></i>
                                            </span>
                                            <div>
                                                <h4 class="fw-medium mb-1">$22,246.25</h4>
                                                <p class="mb-0 fs-12">Total Investment</p>
                                            </div>
                                            <div>
                                                <span class="text-success fw-semibold"> 1.8% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content">
                                        <div class="d-flex align-items-end mb-1 gap-3 flex-wrap">
                                            <span class="avatar avatar-sm bg-success align-self-start">
                                                <i class="ti ti-chart-infographic fs-16"></i>
                                            </span>
                                            <div>
                                                <h4 class="fw-medium mb-1">$110,784.06</h4>
                                                <p class="mb-0 fs-12">Market Cap</p>
                                            </div>
                                            <div>
                                                <span class="text-danger fw-semibold"> 0.28% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 text-sm-end mt-2 mt-sm-0 ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-w-lg btn-sm btn-secondary"><i class="ti ti-plus me-1"></i>Compare</a>
                                    </div>
                                </div>
                                <div id="stockCap-area">
                                </div>
                                <div id="stockCap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Transaction History
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                        All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Buy</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Sell</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0 pt-2 pb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border-0 d-flex gap-3 align-items-center flex-wrap">
                                        <span class="avatar flex-shrink-0 avatar-lg p-2 avatar-rounded border border-success border-opacity-25 bg-success-transparent">
                                            <i class="ti ti-arrow-up fs-20 fw-semibold lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fw-medium mb-1">Tesla (TSLA)</div>
                                            <span class="text-muted fs-12 fw-medium"><i class="ri-calendar-line fs-14 me-1"></i>12 Apr, 2024</span>
                                        </div>
                                        <div class="d-flex ms-auto align-items-end justify-content-between gap-4">
                                            <span class="badge bg-primary-transparent me-2 fs-10 align-middle">Buy</span>
                                            <div>
                                                <div class="fw-semibold fs-14">$150.00</div>
                                                <div class="text-muted">Value: $7,500.00</div>
                                            </div>
                                            <span class="text-success ms-auto fw-semibold">+1.25%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 d-flex gap-3 align-items-center flex-wrap">
                                        <span class="avatar flex-shrink-0 avatar-lg p-2 avatar-rounded border border-primary border-opacity-25 bg-primary-transparent">
                                            <i class="ti ti-arrow-down fs-20 fw-semibold lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fw-medium mb-1">Apple (AAPL)</div>
                                            <span class="text-muted fs-12 fw-medium"><i class="ri-calendar-line fs-14 me-1"></i>15 Apr, 2024</span>
                                        </div>
                                        <div class="d-flex ms-auto align-items-end justify-content-between gap-4">
                                            <span class="badge bg-secondary-transparent me-2 fs-10 align-middle">Sell</span>
                                            <div>
                                                <div class="fw-semibold fs-14">$200.00</div>
                                                <div class="text-muted">Value: $10,000.00</div>
                                            </div>
                                            <span class="text-danger ms-auto fw-semibold">-0.75%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 d-flex gap-3 align-items-center flex-wrap">
                                        <span class="avatar flex-shrink-0 avatar-lg p-2 avatar-rounded border border-success border-opacity-25 bg-success-transparent">
                                            <i class="ti ti-arrow-up fs-20 fw-semibold lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fw-medium mb-1">Microsoft (MSFT)</div>
                                            <span class="text-muted fs-12 fw-medium"><i class="ri-calendar-line fs-14 me-1"></i>16 Apr, 2024</span>
                                        </div>
                                        <div class="d-flex ms-auto align-items-end justify-content-between gap-4">
                                            <span class="badge bg-success-transparent me-2 fs-10 align-middle">Buy</span>
                                            <div>
                                                <div class="fw-semibold fs-14">$250.00</div>
                                                <div class="text-muted">Value: $12,500.00</div>
                                            </div>
                                            <span class="text-success ms-auto fw-semibold">+2.00%</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 d-flex gap-3 align-items-center flex-wrap">
                                        <span class="avatar flex-shrink-0 avatar-lg p-2 avatar-rounded border border-warning border-opacity-25 bg-warning-transparent">
                                            <i class="ti ti-arrow-up fs-20 fw-semibold lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fw-medium mb-1">Amazon (AMZN)</div>
                                            <span class="text-muted fs-12 fw-medium"><i class="ri-calendar-line fs-14 me-1"></i>17 Apr, 2024</span>
                                        </div>
                                        <div class="d-flex ms-auto align-items-end justify-content-between gap-4">
                                            <span class="badge bg-warning-transparent me-2 fs-10 align-middle">Buy</span>
                                            <div>
                                                <div class="fw-semibold fs-14">$180.00</div>
                                                <div class="text-muted">Value: $9,000.00</div>
                                            </div>
                                            <span class="text-success ms-auto fw-semibold">+1.50%</span>
                                        </div>
                                    </li>
                                    
                                    <li class="list-group-item border-0 d-flex gap-3 align-items-center flex-wrap">
                                        <span class="avatar flex-shrink-0 avatar-lg p-2 avatar-rounded border border-danger border-opacity-25 bg-danger-transparent">
                                            <i class="ti ti-arrow-down fs-20 fw-semibold lh-1"></i>
                                        </span>
                                        <div>
                                            <div class="fw-medium mb-1">Alphabet (GOOGL)</div>
                                            <span class="text-muted fs-12 fw-medium"><i class="ri-calendar-line fs-14 me-1"></i>18 Apr, 2024</span>
                                        </div>
                                        <div class="d-flex ms-auto align-items-end justify-content-between gap-4">
                                            <span class="badge bg-danger-transparent me-2 fs-10 align-middle">Sell</span>
                                            <div>
                                                <div class="fw-semibold fs-14">$300.00</div>
                                                <div class="text-muted">Value: $15,000.00</div>
                                            </div>
                                            <span class="text-danger ms-auto fw-semibold">-1.20%</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <h6 class="card-title">Weekly Stock Earnings</h6>
                                <button type="button" class="btn btn-sm btn-primary-light"><i class="ti ti-download me-1"></i> Report</button>
                            </div>
                            <div class="card-body">
                                <div class="px-2 d-flex gap-4 align-items-end mb-2">
                                    <div>
                                        <p class="fw-semibold mb-0 fs-18">$2,624.00</p>
                                        <span class="fs-12 text-muted">Profit Earned:</span>
                                    </div>
                                    <div class="ms-auto text-muted text-end">
                                        <span class="fw-medium fs-12">From Last Week </span>
                                        <span class="text-success fw-semibold fs-12"> 2.6% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                    </div>
                                </div>
                                <div id="stocks-earnings"></div>
                                <div class="text-center d-flex gap-4 justify-content-center">
                                    <div>
                                        <i class="ri-circle-fill lh-1 fs-11 rounded-2 bg-success-transparent text-success"></i>
                                        <span class="text-muted fs-12 mb-1 rounded-dot dot-success d-inline-block ms-2 fw-medium">Profit Gained</span>
                                    </div>
                                    <div>
                                        <i class="ri-circle-fill lh-1 fs-11 rounded-2 bg-danger-transparent text-danger"></i>
                                        <span class="text-muted fs-12 mb-1 rounded-dot dot-danger d-inline-block ms-2 fw-medium">Loss</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Top Stock Performers
                                </div>
                                <a class="text-primary fw-medium text-decoration-underline"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Company</th>
                                                <th scope="col">Change</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">% Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-secondary border-opacity-10 bg-secondary-transparent">
                                                            <i class="bi bi-apple fs-18 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fs-14 fw-medium mb-1">Apple Inc. (AAPL)</div>
                                                        </div>
                                                        <span class="text-muted fs-12">Vol: 1,000,000</span>
                                                    </div>
                                                </td>
                                                <td><span class="text-success">$5.00</span></td>
                                                <td class="fw-medium fs-14">$150.00</td>
                                                <td><span class="text-success">+3.45%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-primary border-opacity-10 bg-primary-transparent">
                                                            <i class="bi bi-google fs-18 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fs-14 fw-medium mb-1">Alphabet Inc. (GOOGL)</div>
                                                        </div>
                                                        <span class="text-muted fs-12">Vol: 850,000</span>
                                                    </div>
                                                </td>
                                                <td><span class="text-danger">$4.25</span></td>
                                                <td class="fw-medium fs-14">$130.00</td>
                                                <td><span class="text-danger">-2.65%</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-warning border-opacity-10 bg-warning-transparent">
                                                            <i class="bi bi-microsoft fs-18 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fs-14 fw-medium mb-1">Microsoft Corp. (MSFT)</div>
                                                        </div>
                                                        <span class="text-muted fs-12">Vol: 1,200,000</span>
                                                    </div>
                                                </td>
                                                <td><span class="text-success">$6.75</span></td>
                                                <td class="fw-medium fs-14">$160.00</td>
                                                <td><span class="text-success">+4.20%</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-success border-opacity-10 bg-success-transparent">
                                                            <i class="bi bi-amazon fs-18 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fs-14 fw-medium mb-1">Amazon.com Inc. (AMZN)</div>
                                                        </div>
                                                        <span class="text-muted fs-12">Vol: 950,000</span>
                                                    </div>
                                                </td>
                                                <td><span class="text-danger">$3.90</span></td>
                                                <td class="fw-medium fs-14">$125.00</td>
                                                <td><span class="text-danger">-1.80%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-danger border-opacity-10 bg-danger-transparent">
                                                            <i class="bi bi-facebook fs-18 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fs-14 fw-medium mb-1">Meta Platforms (META)</div>
                                                        </div>
                                                        <span class="text-muted fs-12">Vol: 1,100,000</span>
                                                    </div>
                                                </td>
                                                <td><span class="text-danger">$4.10</span></td>
                                                <td class="fw-medium fs-14">$140.00</td>
                                                <td><span class="text-danger">-2.25%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header  justify-content-between">
                                <div class="card-title">My Stocks</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        All Stocks<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"> All Stocks</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Wishlist</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Stocks</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Crypto</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">ETFs</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Bonds</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="bg-light">Stock</th>
                                                <th class="bg-light">Quantity</th>
                                                <th class="bg-light">Stock Price</th>
                                                <th class="bg-light">Change</th>
                                                <th class="bg-light">Total Value</th>
                                                <th class="bg-light">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-primary border-opacity-10 bg-primary-transparent">
                                                            <i class="bi bi-apple fs-16 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium mb-1">Apple Inc.(AAPL)</div>
                                                            <span class="text-muted fs-12">NASDAQ</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium">500</td>
                                                <td><span class="fw-medium">$150.00</span></td>
                                                <td><span class="text-success fw-semibold">+1.75%</span></td>
                                                <td class="fw-medium">$75,000.00</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                    <button class="btn btn-sm btn-success">Sell</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-secondary border-opacity-10 bg-secondary-transparent">
                                                            <i class="bi bi-microsoft fs-16 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium mb-1">Microsoft Corp. (MSFT)</div>
                                                            <span class="text-muted fs-12">NASDAQ</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium">300</td>
                                                <td><span class="fw-medium">$250.00</span></td>
                                                <td><span class="text-danger fw-semibold">-0.85%</span></td>
                                                <td class="fw-medium">$75,000.00</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                    <button class="btn btn-sm btn-success">Sell</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-success border-opacity-10 bg-success-transparent">
                                                            <i class="bi bi-google fs-16 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium mb-1">Alphabet Inc. (GOOGL)</div>
                                                            <span class="text-muted fs-12">NASDAQ</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium">200</td>
                                                <td><span class="fw-medium">$130.00</span></td>
                                                <td><span class="text-success fw-semibold">+2.15%</span></td>
                                                <td class="fw-medium">$26,000.00</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                    <button class="btn btn-sm btn-success">Sell</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-info border-opacity-10 bg-info-transparent">
                                                            <i class="bi bi-amazon fs-16 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium mb-1">Amazon.com Inc. (AMZN)</div>
                                                            <span class="text-muted fs-12">NASDAQ</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium">150</td>
                                                <td><span class="fw-medium">$200.00</span></td>
                                                <td><span class="text-danger fw-semibold">-1.35%</span></td>
                                                <td class="fw-medium">$30,000.00</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                    <button class="btn btn-sm btn-success">Sell</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <span class="avatar avatar-md p-2 avatar-rounded border border-danger border-opacity-10 bg-danger-transparent">
                                                            <i class="bi bi-github fs-16 lh-1"></i>
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium mb-1">Gituhb, Demo Inc (GTHB)</div>
                                                            <span class="text-muted fs-12">NASDAQ</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium">100</td>
                                                <td><span class="fw-medium">$700.00</span></td>
                                                <td><span class="text-success fw-semibold">+0.65%</span></td>
                                                <td class="fw-medium">$70,000.00</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                    <button class="btn btn-sm btn-success">Sell</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <h6 class="card-title">Balance Summary</h6>
                                <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div id="stock-balance"></div>
                                    <div class="p-3 text-default rounded border border-dashed flex-fill bg-light mt-3 d-flex align-items-end gap-2 justify-content-between flex-wrap">
                                        <div class="flex-fill text-center">
                                            <div class="avatar avatar-sm bg-primary avatar-rounded mb-3">
                                                <i class="ti ti-currency-dollar fs-18 fw-medium lh-1"></i>
                                            </div>
                                            <p class="text-muted mb-2">My Balance</p>
                                            <h5 class="fw-semibold lh-1 mb-2">$ 18,780.00</h5>
                                            <span class="fs-11 text-success"> 1.52% <i class="ri-arrow-up-line lh-1 align-middle fw-normal"></i></span><span class="fw-medium fs-11 text-muted"> Last Month</span>
                                        </div>
                                        <div class="flex-fill text-center">
                                            <div class="avatar avatar-sm bg-primary bg-opacity-10 avatar-rounded mb-3 text-primary">
                                                <i class="ti ti-coins fs-18 fw-medium lh-1"></i>
                                            </div>
                                            <p class="text-muted mb-2">Investment </p>
                                            <h5 class="fw-semibold lh-1 mb-2">$16,890.00</h5>
                                            <span class="fs-11 text-danger"> 0.12% <i class="ri-arrow-down-line lh-1 align-middle fw-normal"></i></span><span class="fw-medium fs-11 text-muted"> Last Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

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
<!-- Custom JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>
  <!-- Stocks Dashboard JS -->
<script src="{{asset('assets/js/stocks-dashboard.js')}}"></script>

 @endpush
