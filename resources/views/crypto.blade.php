@extends('layouts.app')

<link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">

<!-- Start::app-content -->
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Crypto</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Crypto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="swiper crypto-swiper swiper-basic">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-secondary border-opacity-25 bg-secondary-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/Bitcoin.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">Bitcoin</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">BTC</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-success mb-2 fs-14 fw-medium"><i class="ti ti-trending-up me-1 d-inline-block"></i>+0.57%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">$174.58 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $669B</span></p>
                                                    <div id="btc-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-primary border-opacity-25 bg-primary-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="Ethereum" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">Ethereum</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">ETH</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-success mb-2 fs-14 fw-medium"><i class="ti ti-trending-up me-1 d-inline-block"></i>+2.15%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">$875 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $220B</span></p>
                                                    <div id="eth-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-success border-opacity-25 bg-success-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/IOTA.svg" alt="IOTA" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">IOTA</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">MIOTA</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-success mb-2 fs-14 fw-medium"><i class="ti ti-trending-up me-1 d-inline-block"></i>+5.10%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">226.35 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $8,275M</span></p>
                                                    <div id="iota-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-info border-opacity-25 bg-info-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/Ripple.svg" alt="Ripple" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">Ripple</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">XRP</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-danger mb-2 fs-14 fw-medium"><i class="ti ti-trending-down me-1 d-inline-block"></i>-1.80%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">$56.48 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $24B</span></p>
                                                    <div id="xrp-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-dark border-opacity-25 bg-dark-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/Litecoin.svg" alt="Litecoin" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">Litecoin</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">LTC</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-success mb-2 fs-14 fw-medium"><i class="ti ti-trending-up me-1 d-inline-block"></i>+1.50%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">$10.45 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $7.5B</span></p>
                                                    <div id="ltc-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-4 justify-content-between flex-wrap">
                                                <div class="d-flex align-items-start gap-2 align-items-center">
                                                    <div class="lh-1 avatar avatar-xl p-2 border border-info border-opacity-25 bg-info-transparent avatar-rounded">
                                                        <img src="../assets/images/crypto-currencies/square-color/Dash.svg" alt="Dash" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-2">Dash</h6>
                                                        <p class="mb-0 text-muted fs-14 fw-medium">DASH</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-success mb-2 fs-14 fw-medium"><i class="ti ti-trending-up me-1 d-inline-block"></i>+4.00%</div>
                                                    <h6 class="mb-0 fw-medium text-muted">$238 USD</h6>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-2 fw-medium"><span class="text-muted fs-12">Market Cap:</span><span class="fs-14"> $5.10B</span></p>
                                                    <div id="dash-marketcap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title">
                                    Crypto Statistics
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">3M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="p-3 bg-light m-3 mb-0 rounded border">
                                    <div class="d-flex flex-wrap justify-content-sm-evenly flex-fill align-items-end">
                                        <div class="d-flex gap-3 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-secondary-transparent border border-secondary border-opacity-25">
                                                <img src="../assets/images/crypto-currencies/square-color/Bitcoin.svg" alt="Bitcoin">
                                            </span>
                                            <div class="m-sm-0 m-2">
                                                <span class="fs-14">Bitcoin</span>
                                                <p class="fw-semibold mb-0 fs-15">BTC</p>
                                            </div>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span class="text-muted fs-12">Price</span>
                                            <h4 class="mb-0">$34,283.53</h4>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <p class="text-success fw-semibold mb-0">+2.43% <i class="ti ti-arrow-big-up fs-16"></i></p>
                                            <span class="text-muted fs-12">Change</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <p class="fw-medium fs-14 mb-0">$669.65B</p>
                                            <span class="text-muted">Market Cap</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span class="text-muted">24h Trading Volume</span>
                                            <p class="fw-medium fs-14 mb-0">$32.58B</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="crypto" class="p-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block nav-justified p-1 rounded-3 bg-light" role="tablist">
                                            <li class="nav-item me-sm-2 me-0">
                                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#buy-crypto"
                                                    aria-current="page" href="#buy-crypto">Buy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sell-crypto"
                                                    href="#sell-crypto">Sell</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane border-0 active p-0" id="buy-crypto" role="tabpanel"
                                                aria-labelledby="buy-crypto">
                                                <div class="input-group d-flex flex-nowrap">
                                                    <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Select Currency">
                                                    <select class="form-control" data-trigger id="choices-single-default">
                                                        <option value="Choice 1">BTC</option>
                                                        <option value="Choice 2">ETH</option>
                                                        <option value="Choice 3">XRP</option>
                                                        <option value="Choice 4">DASH</option>
                                                        <option value="Choice 5">NEO</option>
                                                        <option value="Choice 6">LTC</option>
                                                        <option value="Choice 7">BSD</option>
                                                    </select>
                                                </div>
                                                <div class="text-center"> 
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary btn-icon btn-sm my-2 rounded-pill">
                                                        <i class="ti ti-arrows-down-up fs-16 align-middle"></i>
                                                    </a> 
                                                </div>
                                                <div class="input-group mb-3 d-flex flex-nowrap">
                                                    <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="36,335.00">
                                                   <select class="form-control" data-trigger id="choices-single-default1">
                                                        <option value="Choice 1">USD</option>
                                                        <option value="Choice 2">AED</option>
                                                        <option value="Choice 3">AUD</option>
                                                        <option value="Choice 4">ARS</option>
                                                        <option value="Choice 5">AZN</option>
                                                        <option value="Choice 6">BGN</option>
                                                        <option value="Choice 7">BRL</option>
                                                    </select>
                                                </div>
                                                <div class="bg-light p-3 rounded border">
                                                    <div class="pb-2">
                                                        <span class="fw-medium text-dark">Current Price:</span>
                                                        <span class="text-muted ms-2 d-inline-block">34,283.53</span>
                                                        <span class="text-dark fw-medium float-end">USD</span>
                                                    </div>
                                                    <div class="pb-2">
                                                        <span class="fw-medium text-dark">Amount:</span>
                                                        <span class="text-muted ms-2 d-inline-block">0.1</span>
                                                        <span class="text-dark fw-medium float-end">BTC</span>
                                                    </div>
                                                    <div class="fw-medium pb-2">Total: <span class="d-inline-block">3,428.35 USD</span></div>
                                                    <div class="fs-12 text-success">Additional Charges: 0.25% (0.00025 BTC)</div>
                                                </div>
                                                <div class="mb-3 mt-2">
                                                    <label class="fw-semibold fs-12 mb-2">SELECT PAYMENT METHOD:</label>
                                                    <select class="form-select" id="paymentMethod1" aria-label="Payment Method" data-trigger>
                                                        <option value="credit_debit" selected>Credit / Debit Cards</option>
                                                        <option value="paypal">PayPal</option>
                                                        <option value="bank_transfer">Bank Transfer</option>
                                                        <option value="crypto_wallet">Crypto Wallet</option>
                                                    </select>
                                                </div>
                                                <div class="d-grid mt-3 pt-1">
                                                    <button type="button" class="btn btn-primary btn-wave">BUY</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane border-0 p-0" id="sell-crypto" role="tabpanel"
                                                aria-labelledby="sell-crypto">
                                                <div class="input-group d-flex flex-nowrap">
                                                    <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Select Currency">
                                                    <select class="form-control" data-trigger id="choices-single-default2">
                                                        <option value="Choice 1">BTC</option>
                                                        <option value="Choice 2">ETH</option>
                                                        <option value="Choice 3">XRP</option>
                                                        <option value="Choice 4">DASH</option>
                                                        <option value="Choice 5">NEO</option>
                                                        <option value="Choice 6">LTC</option>
                                                        <option value="Choice 7">BSD</option>
                                                    </select>
                                                </div>
                                                <div class="text-center"> 
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary btn-icon btn-sm my-2 rounded-pill">
                                                        <i class="ti ti-arrows-down-up fs-16 align-middle"></i>
                                                    </a> 
                                                </div>
                                                <div class="input-group mb-3 d-flex flex-nowrap">
                                                    <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="36,335.00">
                                                   <select class="form-control" data-trigger id="choices-single-default3">
                                                        <option value="Choice 1">USD</option>
                                                        <option value="Choice 2">AED</option>
                                                        <option value="Choice 3">AUD</option>
                                                        <option value="Choice 4">ARS</option>
                                                        <option value="Choice 5">AZN</option>
                                                        <option value="Choice 6">BGN</option>
                                                        <option value="Choice 7">BRL</option>
                                                    </select>
                                                </div>
                                                <div class="bg-light p-3 rounded border">
                                                    <div class="pb-2">
                                                        <span class="fw-medium text-dark">Current Price:</span>
                                                        <span class="text-muted ms-2 d-inline-block">34,283.53</span>
                                                        <span class="text-dark fw-medium float-end">USD</span>
                                                    </div>
                                                    <div class="pb-2">
                                                        <span class="fw-medium text-dark">Amount:</span>
                                                        <span class="text-muted ms-2 d-inline-block">0.1</span>
                                                        <span class="text-dark fw-medium float-end">BTC</span>
                                                    </div>
                                                    <div class="fw-medium pb-2">Total: <span class="d-inline-block">3,428.35 USD</span></div>
                                                    <div class="fs-12 text-danger">Additional Charges: 0.25% (0.00025 BTC)</div>
                                                </div>
                                                <div class="mb-3 mt-2">
                                                    <label class="fw-semibold fs-12 mb-2">SELECT PAYMENT METHOD:</label>
                                                    <select class="form-select" id="paymentMethod2" aria-label="Payment Method" data-trigger>
                                                        <option value="credit_debit" selected>Credit / Debit Cards</option>
                                                        <option value="paypal">PayPal</option>
                                                        <option value="bank_transfer">Bank Transfer</option>
                                                        <option value="crypto_wallet">Crypto Wallet</option>
                                                    </select>
                                                </div>
                                                <div class="d-grid mt-3 pt-1">
                                                    <button type="button" class="btn btn-success btn-wave">SELL</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Activity
                                </div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap mb-0">
                                        <tbody class="active-tab">
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="avatar avatar-md p-1 bg-success bg-opacity-10 avatar-rounded border border-success border-opacity-10">
                                                            <i class="fe fe-arrow-up-right text-success"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-15">Received From</h6>
                                                            <p class="mb-0 fs-11 text-muted">Crypto Wallet XYZ</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted fs-12">
                                                        20-10-2024
                                                    </div>
                                                    <div class="fw-medium">
                                                        04:24 PM
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="text-success fw-semibold">0.0092312</span></p>
                                                    <span class="fs-12 text-muted">Currency:</span> Bitcoin
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted"><span class="fs-12 text-danger fw-medium">Sent</span></p>
                                                    <p class="mb-0 fw-medium fs-14">Emiley Jackson</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="avatar avatar-md p-1 bg-danger bg-opacity-10 avatar-rounded border border-danger border-opacity-10">
                                                            <i class="fe fe-arrow-down-left text-danger"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-15">Sent To</h6>
                                                            <p class="mb-0 fs-11 text-muted">Crypto Exchange ABC</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted fs-12">
                                                        19-10-2024
                                                    </div>
                                                    <div class="fw-medium">
                                                        03:15 PM
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="text-danger fw-semibold">0.0050000</span></p>
                                                    <span class="fs-12 text-muted">Currency:</span> Ethereum
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted"><span class="fs-12 text-success fw-medium">Received</span></p>
                                                    <p class="mb-0 fw-medium fs-14">John Doe</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="avatar avatar-md p-1 bg-info bg-opacity-10 avatar-rounded border border-info border-opacity-10">
                                                            <i class="fe fe-arrow-up-right text-info"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-15">Received From</h6>
                                                            <p class="mb-0 fs-11 text-muted">Wallet Address 123ABC</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted fs-12">
                                                        18-10-2024
                                                    </div>
                                                    <div class="fw-medium">
                                                        09:45 AM
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="text-success fw-semibold">1.2500000</span></p>
                                                    <span class="fs-12 text-muted">Currency:</span> Litecoin
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted"><span class="fs-12 text-danger fw-medium">Sent</span></p>
                                                    <p class="mb-0 fw-medium fs-14">Alice Smith</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="avatar avatar-md p-1 bg-warning bg-opacity-10 avatar-rounded border border-warning border-opacity-10">
                                                            <i class="fe fe-arrow-up-right text-warning"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-15">Received From</h6>
                                                            <p class="mb-0 fs-11 text-muted">Investor Group DEF</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted fs-12">
                                                        17-10-2024
                                                    </div>
                                                    <div class="fw-medium">
                                                        11:30 AM
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="text-success fw-semibold">0.1500000</span></p>
                                                    <span class="fs-12 text-muted">Currency:</span> Bitcoin
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted"><span class="fs-12 text-danger fw-medium">Sent</span></p>
                                                    <p class="mb-0 fw-medium fs-14">David Lee</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="avatar avatar-md p-1 bg-success bg-opacity-10 avatar-rounded border border-success border-opacity-10">
                                                            <i class="fe fe-arrow-down-left text-success"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-15">Sent To</h6>
                                                            <p class="mb-0 fs-11 text-muted">Wallet Address 456XYZ</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted fs-12">
                                                        16-10-2024
                                                    </div>
                                                    <div class="fw-medium">
                                                        02:00 PM
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0"><span class="text-danger fw-semibold">0.0500000</span></p>
                                                    <span class="fs-12 text-muted">Currency:</span> Ethereum
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted"><span class="fs-12 text-success fw-medium">Received</span></p>
                                                    <p class="mb-0 fw-medium fs-14">Sarah Johnson</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title">
                                    Market Cap
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap mb-0">
                                        <tbody class="active-tab">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md avatar-rounded me-2 p-2 bg-secondary-transparent border border-secondary border-opacity-25">
                                                                <img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="fw-semibold mb-0">Bitcoin</p>
                                                            <p class="mb-0 text-muted">BTC </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fs-15 fw-semibold">0.009231298 BTC</p>
                                                    <p class="mb-0 text-muted fw medium fs-12">0.415164 USD</p>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success fs-14">+02.3015%</span>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold">Market Cap:</p>
                                                    <p class="mb-0 text-muted fs-12">$87,685,000,000</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted fs-12">84,000,000 BTC</p>
                                                    <p class="mb-0 fw-medium">Supply:</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md avatar-rounded me-2 p-2 bg-primary-transparent border border-primary border-opacity-25">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="Ethereum">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="fw-semibold mb-0">Ethereum</p>
                                                            <p class="mb-0 text-muted">ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fs-15 fw-semibold">0.035671238 ETH</p>
                                                    <p class="mb-0 text-muted fw-medium fs-12">58.75 USD</p>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-danger fs-14">-1.15%</span>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold">Market Cap:</p>
                                                    <p class="mb-0 text-muted fs-12">$69,500,000,000</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted fs-12">84,000,000 ETH</p>
                                                    <p class="mb-0 fw-medium">Supply:</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md avatar-rounded me-2 p-2 bg-info-transparent border border-info border-opacity-25">
                                                                <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="Ripple">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="fw-semibold mb-0">Ripple</p>
                                                            <p class="mb-0 text-muted">XRP</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fs-15 fw-semibold">150.324 XRP</p>
                                                    <p class="mb-0 text-muted fw-medium fs-12">0.75 USD</p>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success fs-14">+3.25%</span>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold">Market Cap:</p>
                                                    <p class="mb-0 text-muted fs-12">$37,500,000,000</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted fs-12">84,000,000 XRP</p>
                                                    <p class="mb-0 fw-medium">Supply:</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md avatar-rounded me-2 p-2 bg-warning-transparent border border-warning border-opacity-25">
                                                                <img src="../assets/images/crypto-currencies/regular/monero.svg" alt="Monero">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="fw-semibold mb-0">Monero</p>
                                                            <p class="mb-0 text-muted">ADA</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fs-15 fw-semibold">200.546 ADA</p>
                                                    <p class="mb-0 text-muted fw-medium fs-12">1.50 USD</p>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-danger fs-14">-2.10%</span>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold">Market Cap:</p>
                                                    <p class="mb-0 text-muted fs-12">$48,000,000,000</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted fs-12">84,000,000 LTC</p>
                                                    <p class="mb-0 fw-medium">Supply:</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md avatar-rounded me-2 p-2 bg-dark-transparent border border-dark border-opacity-10">
                                                                <img src="../assets/images/crypto-currencies/regular/Litecoin.svg" alt="Litecoin">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="fw-semibold mb-0">Litecoin</p>
                                                            <p class="mb-0 text-muted">LTC</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fs-15 fw-semibold">0.075345 LTC</p>
                                                    <p class="mb-0 text-muted fw-medium fs-12">90.10 USD</p>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-success fs-14">+1.80%</span>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold">Market Cap:</p>
                                                    <p class="mb-0 text-muted fs-12">$12,500,000,000</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-muted fs-12">84,000,000 LTC</p>
                                                    <p class="mb-0 fw-medium">Supply:</p>
                                                </td>
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
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title mb-2 mb-sm-0">
                                    Cryptocurrency Market Overview
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">3M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover text-nowrap nft-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Coin</th>
                                                <th>Price</th>
                                                <th>Price Graph</th>
                                                <th>24h Volume</th>
                                                <th>24h Change</th>
                                                <th>Market Cap</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/Bitcoin.svg" alt="Bitcoin">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">Bitcoin - BTC</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $34,283.53
                                                </td>
                                                <td>
                                                    <div id="bitcoin-price-graph"></div>
                                                </td>
                                                <td>
                                                    21,457.02M
                                                </td>
                                                <td>
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>39.23%</span>
                                                </td>
                                                <td>
                                                    $669,649,033,571
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="Ethereum">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">Ethereum - ETH</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $1,875.42
                                                </td>
                                                <td>
                                                    <div id="etherium-price-graph"></div>
                                                </td>
                                                <td>
                                                    120,000.00M
                                                </td>
                                                <td>
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>22.15%</span>
                                                </td>
                                                <td>
                                                    $220,000,000,000
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/Dash.svg" alt="Dash">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">Dash - DASH</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $102.45
                                                </td>
                                                <td>
                                                    <div id="dash-price-graph"></div>
                                                </td>
                                                <td>
                                                    10,500.00M
                                                </td>
                                                <td>
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>15.80%</span>
                                                </td>
                                                <td>
                                                    $1,182,000,000
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ripple.svg" alt="Ripple">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">Ripple - XRP</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $0.48
                                                </td>
                                                <td>
                                                    <div id="ripple-price-graph"></div>
                                                </td>
                                                <td>
                                                    50,000.00M
                                                </td>
                                                <td>
                                                    <span class="text-danger"><i class="ri-arrow-down-s-fill me-1 fs-15 align-middle"></i>-3.25%</span>
                                                </td>
                                                <td>
                                                    $24,000,000,000
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/IOTA.svg" alt="IOTA">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">IOTA - MIOTA</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $0.35
                                                </td>
                                                <td>
                                                    <div id="iota-price-graph"></div>
                                                </td>
                                                <td>
                                                    2,500.00M
                                                </td>
                                                <td>
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>5.10%</span>
                                                </td>
                                                <td>
                                                    $875,000,000
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="../assets/images/crypto-currencies/square-color/Golem.svg" alt="Golem">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 fw-medium">Golem - GNT</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $0.20
                                                </td>
                                                <td>
                                                    <div id="golem-price-graph"></div>
                                                </td>
                                                <td>
                                                    1,500.00M
                                                </td>
                                                <td>
                                                    <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>3.45%</span>
                                                </td>
                                                <td>
                                                    $300,000,000
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-success-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0 py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
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
                                    Wallet Balance
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center p-2 border rounded bg-light mb-3">
                                    <p class="fw-medium mb-1 text-muted">Wallet Balance</p>
                                    <h4 class="mb-1">$8,720.45</h4>
                                    <p class="mb-0 text-success fw-medium">+ 01.82%</p>
                                </div>                                
                                <ul class="list-unstyled mb-0 pt-1">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-lg p-1 flex-shrink-0 avatar-rounded bg-secondary-transparent">
                                                    <img src="../assets/images/crypto-currencies/round-outline/Bitcoin.svg" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Bitcoin</p>
                                                    <p class="mb-0 text-muted fs-12">Bitcoin Wallet</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <p class="mb-0 fw-semibold text-success">
                                                    58.6225600 <span class="text-default">- BTC</span>
                                                </p>
                                                <p class="mb-0 fs-12 text-muted">
                                                    $9,772.46
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-lg p-1 flex-shrink-0 avatar-rounded bg-primary-transparent">
                                                    <img src="../assets/images/crypto-currencies/round-outline/Ethereum.svg" alt="Ethereum">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Ethereum</p>
                                                    <p class="mb-0 text-muted fs-12">Ethereum Wallet</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <p class="mb-0 fw-semibold text-success">
                                                    12.4537800 <span class="text-default">- ETH</span>
                                                </p>
                                                <p class="mb-0 fs-12 text-muted">
                                                    $1,580.47
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-lg p-1 flex-shrink-0 avatar-rounded bg-dark-transparent">
                                                    <img src="../assets/images/crypto-currencies/round-outline/Litecoin.svg" alt="Litecoin">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Litecoin</p>
                                                    <p class="mb-0 text-muted fs-12">Litecoin Wallet</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <p class="mb-0 fw-semibold text-success">
                                                    25.6489200 <span class="text-default">- LTC</span>
                                                </p>
                                                <p class="mb-0 fs-12 text-muted">
                                                    $2,563.12
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-lg p-1 flex-shrink-0 avatar-rounded bg-info-transparent">
                                                    <img src="../assets/images/crypto-currencies/round-outline/Ripple.svg" alt="Ripple">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Ripple</p>
                                                    <p class="mb-0 text-muted fs-12">Ripple Wallet</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <p class="mb-0 fw-semibold text-success">
                                                    1500.2345600 <span class="text-default">- XRP</span>
                                                </p>
                                                <p class="mb-0 fs-12 text-muted">
                                                    $1,080.75
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-lg p-1 flex-shrink-0 avatar-rounded bg-success-transparent">
                                                    <img src="../assets/images/crypto-currencies/round-outline/IOTA.svg" alt="IOTA">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">IOTA</p>
                                                    <p class="mb-0 text-muted fs-12">IOTA Wallet</p>
                                                </div>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <p class="mb-0 fw-semibold text-success">
                                                    200.5000000 <span class="text-default">- MIOTA</span>
                                                </p>
                                                <p class="mb-0 fs-12 text-muted">
                                                    $80.20
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

               
        <!-- End::app-content -->
        

       
        

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    @endsection
    <!-- Scroll To Top -->

    @push('scripts') 
    <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Swiper JS -->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Echarts JS -->
    <script src="../assets/libs/echarts/echarts.min.js"></script>

    <!-- Crypto Dashboard --> 
    <script src="../assets/js/crypto-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

    @endpush