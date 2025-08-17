@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">NFT</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">NFT</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-7 col-xl-12 col-lg-12">
                        <div class="card custom-card overflow-hidden nft-main-card">
                            <div class="card-body">
                                <div class="row gap-3 gap-sm-0 mx-0 py-3 rounded-3">
                                    <div class="col-xxl-8 col-xl-6 col-lg-8 col-12">
                                        <div class="p-2">
                                            <h6 class="fw-semibold mb-3 op-9 text-fixed-white"> Welcome Back, Anthony to our NFT page! &#128075;</h6>
                                            <h4 class="fw-semibold mb-2  text-fixed-white"> Unleash your creativity by minting your own <span class="text-secondary">NFT's</span> directly</h4>
                                            <p class="mb-4 text-fixed-white op-7 fs-12">
                                                Easily mint your own NFTs with our intuitive platform, empowering you to showcase your creativity. Join the vibrant NFT marketplace and turn your digital art into valuable assets!
                                            </p>
                                            <div class="d-flex gap-2 flex-wrap">
                                                <button class="btn btn-success btn-wave waves-effect waves-light">Explore NFTs</button>
                                                <button class="btn btn-secondary btn-wave waves-effect waves-light">Launch Your NFT</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-4 my-auto text-end">
                                        <div class="featured-nft text-end">
                                            <img src="../assets/images/nft-images/15.png" alt="" class="img-fluid nft-cardimg rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row gy-3 gy-sm-0">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card shadow-none mb-2">
                                            <div class="card-body p-0">
                                                <div class="d-flex p-3 flex-wrap border border-primary border-opacity-10 rounded-3 align-items-center gap-2">
                                                    <i class="ti ti-coins fs-1 text-primary"></i>
                                                    <div>
                                                        <p class="mb-1 fw-semibold">Total Sales: </p>
                                                        <p class="mb-0 text-pink fw-semibold ms-2"> 3,679</p>
                                                    </div>
                                                    <div class="ms-auto text-end">
                                                        <p class="text-success fw-semibold mb-0">+ 0.125%</p>
                                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card shadow-none mb-2">
                                            <div class="card-body p-0">
                                                <div class="d-flex p-3 flex-wrap border border-success border-opacity-10 rounded-3 align-items-center gap-2">
                                                    <i class="ti ti-coins fs-1 text-success"></i>
                                                    <div>
                                                        <p class="mb-1 fw-semibold">Total Value: </p>
                                                        <p class="mb-0 text-pink fw-semibold ms-2"> $685</p>
                                                    </div>
                                                    <div class="ms-auto text-end">
                                                        <p class="text-danger fw-semibold mb-0">- 2.10%</p>
                                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card shadow-none mb-0">
                                            <div class="card-body p-0">
                                                <div class="d-flex p-3 flex-wrap border border-success border-opacity-10 rounded-3 align-items-center gap-2">
                                                    <i class="ti ti-coins fs-1 text-secondary"></i>
                                                    <div>
                                                        <p class="mb-1 fw-semibold">Total Revenue: </p>
                                                        <p class="mb-0 text-pink fw-semibold ms-2"> $2,879</p>
                                                    </div>
                                                    <div class="ms-auto text-end">
                                                        <p class="text-success fw-semibold mb-0">+ 1.23%</p>
                                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 nft-bal-col p-2 rounded-3 border border-dashed d-flex align-items-start flex-column">
                                        <div class="d-flex p-3 border border-dashed rounded-3 align-items-center gap-2 bg-primary bg-opacity-10 mb-auto flex-wrap w-100">
                                            <i class="ti ti-coins fs-1 text-primary"></i>
                                            <div>
                                                <p class="mb-1 text-muted">Total Balance: </p>
                                                <p class="mb-0 fw-semibold ms-2 fs-15"> $66,875.4</p>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success">+ 0.125%</span>
                                                <div class="text-muted fw-medium fs-12 mt-1">from last month</div>
                                            </div>
                                        </div>
                                        <div id="nft-balance" class="w-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-5 col-xl-12 col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Live Auctions
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted">
                                    Explore More
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="p-2 border rounded-3 card custom-card">
                                            <img src="../assets/images/nft-images/1.png" alt="" class="img-fluid rounded-3 mb-3">
                                            <div class="d-flex mb-2 align-items-center flex-wrap gap-2 mb-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-sm">
                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">CryptoArt <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></p>
                                                    <p class="fs-11 text-muted mb-0">@cryptoart721</p>
                                                </div>
                                                <div>
                                                    <span class="text-muted">Bid: </span><span class="fs-14 fw-semibold ms-2">3.5ETH</span>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-primary-light w-100">
                                                Place a Bid
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="p-2 border rounded-3 card custom-card">
                                            <img src="../assets/images/nft-images/15.png" alt="" class="img-fluid rounded-3 mb-3">
                                            <div class="d-flex mb-2 align-items-center flex-wrap gap-2 mb-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-sm">
                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">CryptoArt <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></p>
                                                    <p class="fs-11 text-muted mb-0">@cryptoart721</p>
                                                </div>
                                                <div>
                                                    <span class="text-muted">Bid: </span><span class="fs-14 fw-semibold ms-2">3.5ETH</span>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-primary-light w-100">
                                                Place a Bid
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="p-2 border rounded-3 card custom-card">
                                            <img src="../assets/images/nft-images/6.png" alt="" class="img-fluid rounded-3 mb-3">
                                            <div class="d-flex mb-2 align-items-center flex-wrap gap-2 mb-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-sm">
                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">CryptoArt <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></p>
                                                    <p class="fs-11 text-muted mb-0">@cryptoart721</p>
                                                </div>
                                                <div>
                                                    <span class="text-muted">Bid: </span><span class="fs-14 fw-semibold ms-2">3.5ETH</span>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-primary-light w-100">
                                                Place a Bid
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-1 rounded bg-success-transparent text-center">
                                    <p class="mb-0 border border-success border-opacity-25 bg-success-transparent fw-medium nft-auction-time p-1 rounded">02hrs : 45m : 12s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title">
                                    Recent Activity
                                </div>
                                <a href="javascript:void(0);" class="text-muted fw-medium">View All</a>
                            </div>
                            <div class="card-body p-0 py-2">
                                <ul class="list-group list-group-flush mb-1">
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-primary-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">13</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@juliacamo</p>
                                                <p class="text-muted mb-0 fs-12 w-75 text-truncate">- Added new NFTs collection check <a href="javascript:void(0);" class="text-primary fw-medium">here</a>.</p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Mar 2024, 9:45PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-success-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">7</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@nft_artist</p>
                                                <p class="text-muted mb-0 fs-12 w-75 text-truncate">- Minted a new exclusive NFT artwork!</p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Oct 2024, 2:30PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-warning-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">15</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@Nft_art_collector
                                                    <span class="avatar avatar-xs avatar-rounded align-middle">
                                                        <img src="../assets/images/faces/12.jpg" alt="">
                                                    </span>
                                                </p>
                                                <p class="text-muted mb-0 fs-12 w-75 text-truncate">- Sold a rare NFT from the collection! 
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="../assets/images/nft-images/15.png" alt="">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Oct 2024, 4:15PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-danger-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">22</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@digital_artist</p>
                                                <p class="text-muted mb-0 fs-12 w-75 text-truncate">- Updated metadata for existing NFTs.</p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Oct 2024, 11:00AM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-info-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">9</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@nft_explorer</p>
                                                <p class="text-muted mb-0 fs-12 w-75 text-truncate">- Bid on an exclusive NFT art piece.
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/nft-images/14.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded shadow-sm">
                                                            <img src="../assets/images/nft-images/13.png" alt="">
                                                        </span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Oct 2024, 6:45PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="avatar avatar-md bg-secondary-gradient avatar-rounded flex-shrink-0 align-self-start">
                                                <div class="fs-15">5</div>
                                            </div>
                                            <div class="flex-fill text-truncate">
                                                <p class="fw-semibold mb-0">@nft_enthusiast</p>
                                                <p class="text-muted mb-0 fs-12 w-45 text-truncate">- Collaborated on a new NFT project.</p>
                                            </div>
                                            <div class="ms-auto text-end text-muted fw-medium flex-shrink-0 fs-11">
                                                <i class="ri-calendar-schedule-line text-pink fs-14"></i>
                                                Oct 2024, 3:00PM
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Top Selling NFTs (%)
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">View Stats</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales-nft" class="rounded-3 mb-2">
                                </div>
                                <div class="d-flex p-3 border border-dashed rounded bg-light align-items-center gap-2">
                                    <i class="ti ti-coins fs-1 text-primary"></i>
                                    <div>
                                        <p class="mb-1 fw-semibold">Total NFTs Sold: </p>
                                        <p class="mb-0 text-pink fw-semibold ms-2"> 2,879</p>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <p class="text-success fw-semibold mb-0">+ 0.14%</p>
                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-4 col-xl-12 col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">
                                    Top NFTs Collections
                                </div>
                            </div>
                            <div class="card-body p-0" id="top-collector">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-primary-transparent">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Space Animatior</p>
                                                            <p class="mb-0 text-muted fs-12">Collection</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                            <img src="../assets/images/nft-images/13.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                            <img src="../assets/images/nft-images/15.png" alt="">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                            <img src="../assets/images/nft-images/18.png" alt="">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$9,223.46</p>
                                                    <span class="fs-11 fw-normal text-success">0.214ETH</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-success-transparent">
                                                                <img src="../assets/images/faces/12.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Digital Artist</p>
                                                            <p class="mb-0 text-muted fs-12">Artworks</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-success-transparent">
                                                            <img src="../assets/images/nft-images/10.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-success-transparent">
                                                            <img src="../assets/images/nft-images/11.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-success-transparent">
                                                            <img src="../assets/images/nft-images/12.png" alt="NFT Image 3">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$12,456.78</p>
                                                    <span class="fs-11 fw-normal text-success">0.321ETH</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-danger-transparent">
                                                                <img src="../assets/images/faces/3.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">3D Modeler</p>
                                                            <p class="mb-0 text-muted fs-12">Designs</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-danger-transparent">
                                                            <img src="../assets/images/nft-images/7.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-danger-transparent">
                                                            <img src="../assets/images/nft-images/8.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-danger-transparent">
                                                            <img src="../assets/images/nft-images/9.png" alt="NFT Image 3">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$15,789.00</p>
                                                    <span class="fs-11 fw-normal text-success">0.456ETH</span>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-warning-transparent">
                                                                <img src="../assets/images/faces/4.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Concept Artist</p>
                                                            <p class="mb-0 text-muted fs-12">Illustrations</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-warning-transparent">
                                                            <img src="../assets/images/nft-images/4.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-warning-transparent">
                                                            <img src="../assets/images/nft-images/5.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-warning-transparent">
                                                            <img src="../assets/images/nft-images/6.png" alt="NFT Image 3">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$8,999.99</p>
                                                    <span class="fs-11 fw-normal text-success">0.200ETH</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-info-transparent">
                                                                <img src="../assets/images/faces/15.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Game Developer</p>
                                                            <p class="mb-0 text-muted fs-12">Game Assets</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-info-transparent">
                                                            <img src="../assets/images/nft-images/16.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-info-transparent">
                                                            <img src="../assets/images/nft-images/15.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary">
                                                            +3
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$18,450.00</p>
                                                    <span class="fs-11 fw-normal text-success">0.500ETH</span>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-secondary-transparent">
                                                                <img src="../assets/images/faces/16.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Music Producer</p>
                                                            <p class="mb-0 text-muted fs-12">Soundtracks</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-secondary-transparent">
                                                            <img src="../assets/images/nft-images/8.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-secondary-transparent">
                                                            <img src="../assets/images/nft-images/5.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-secondary-transparent">
                                                            <img src="../assets/images/nft-images/6.png" alt="NFT Image 3">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$5,250.75</p>
                                                    <span class="fs-11 fw-normal text-success">0.150ETH</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-dark-transparent">
                                                                <img src="../assets/images/faces/7.jpg" alt="Profile Picture">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Photographer</p>
                                                            <p class="mb-0 text-muted fs-12">Collections</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded bg-dark-transparent">
                                                            <img src="../assets/images/nft-images/1.png" alt="NFT Image 1">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-dark-transparent">
                                                            <img src="../assets/images/nft-images/4.png" alt="NFT Image 2">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded bg-dark-transparent">
                                                            <img src="../assets/images/nft-images/3.png" alt="NFT Image 3">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-semibold fs-14">$11,300.50</p>
                                                    <span class="fs-11 fw-normal text-success">0.320ETH</span>
                                                </td>
                                            </tr>                                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-12 col-lg-12">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-semibold mb-0">Trending Collections :</h5>
                            <div>
                                <a href="javascript:void(0);" class="text-primary fw-medium">View All</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/5.png" class="card-img mb-3" alt="...">
                                        </div>
                                        <div class="d-flex align-items-start gap-2 mb-3 pb-1 flex-wrap justify-content-between">
                                            <div class="text-truncate">
                                                <p class="fs-16 mb-0 fw-semibold text-truncate">Digital Collectible #721</p>
                                            </div>
                                            <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time px-2 rounded fs-15 flex-shrink-0">02hrs : 45m : 12s</p>
                                        </div>
                                        <div class="p-2 rounded bg-light d-flex mb-3 align-items-center flex-wrap gap-2 justify-content-between">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-sm">
                                                    <img src="../assets/images/faces/4.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-medium">CryptoArt Collection <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                <p class="fs-11 text-muted mb-0">#cryptoart721</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pt-1 gap-3 flex-wrap">
                                            <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                    <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                        <g transform="translate(227 93)"><g>
                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                    </g>
                                                </svg>
                                                5.250ETH
                                            </h6>
                                            <a href="javascript:void(0);" class="btn btn-primary w-100 mb-md-0 mb-4">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/3.png" class="card-img mb-3" alt="...">
                                        </div>
                                        <div class="d-flex align-items-start gap-2 mb-3 pb-1 flex-wrap justify-content-between">
                                            <div class="text-truncate">
                                                <p class="fs-16 mb-0 fw-semibold text-truncate">Abstract Digital Art</p>
                                            </div>
                                            <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time px-2 rounded fs-15"> 03hrs : 12m : 45s </p>
                                        </div>
                                        <div class="p-2 rounded bg-light d-flex mb-3 align-items-center flex-wrap gap-2 justify-content-between">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-sm">
                                                    <img src="../assets/images/faces/2.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <p class="mb-0  fw-medium">Manistics NFT <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i> </p>
                                                <p class="fs-11 text-muted mb-0">#manistics454</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pt-1 gap-3 flex-wrap">
                                            <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                    <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                        <g transform="translate(227 93)"><g>
                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                    </g>
                                                </svg>
                                                15.325ETH
                                            </h6>
                                            <a href="javascript:void(0);" class="btn btn-primary w-100 mb-md-0 mb-4">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/13.png" class="card-img mb-3" alt="...">
                                        </div>
                                        <div class="d-flex align-items-start gap-2 mb-3 pb-1 flex-wrap justify-content-between">
                                            <div class="text-truncate">
                                                <p class="fs-16 mb-0 fw-semibold text-truncate">Epic Fantasy Artwork</p>
                                            </div>
                                            <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time px-2 rounded fs-15 flex-shrink-0">01hrs : 30m : 55s</p>
                                        </div>
                                        <div class="p-2 rounded bg-light d-flex mb-3 align-items-center flex-wrap gap-2 justify-content-between">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-sm">
                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-medium">FantasyArt Studio <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                <p class="fs-11 text-muted mb-0">#fantasyart123</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pt-1 gap-3 flex-wrap">
                                            <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                    <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                        <g transform="translate(227 93)"><g>
                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                    </g>
                                                </svg>
                                                7.800ETH
                                            </h6>
                                            <a href="javascript:void(0);" class="btn btn-primary w-100 mb-md-0 mb-4">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/5.png" class="card-img mb-3" alt="...">
                                        </div>
                                        <div class="d-flex align-items-start gap-2 mb-3 pb-1 flex-wrap justify-content-between">
                                            <div class="text-truncate">
                                                <p class="fs-16 mb-0 fw-semibold text-truncate">Retro Gaming</p>
                                            </div>
                                            <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time px-2 rounded fs-15 flex-shrink-0">04hrs : 10m : 30s</p>
                                        </div>
                                        <div class="p-2 rounded bg-light d-flex mb-3 align-items-center flex-wrap gap-2 justify-content-between">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-sm">
                                                    <img src="../assets/images/faces/6.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <p class="mb-0 fw-medium">GamingNFT Hub <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                <p class="fs-11 text-muted mb-0">#gamingnft456</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pt-1 gap-3 flex-wrap">
                                            <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                    <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                        <g transform="translate(227 93)"><g>
                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                        <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                    </g>
                                                </svg>
                                                3.500ETH
                                            </h6>
                                            <a href="javascript:void(0);" class="btn btn-primary w-100 mb-md-0 mb-4">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="d-flex gap-2 justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Featured Creators</h6>
                        </div>
                        <div class="card custom-card overflow-hidden bg-transparent">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/1.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">Amanda Nanes<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted">amandananes@</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 53
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/12.jpg" alt="User Profile">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">John Doe<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 120
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/3.jpg" alt="User Profile">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">Emily Clark<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted">emilyclark@example.com</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 87
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/11.jpg" alt="User Profile">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">Michael Smith<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted text-break">michaelsmith@example.com</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 75
                                                </div>
                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">UnFollow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/5.jpg" alt="User Profile">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">Sophia Lee<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted">sophialee@example.com</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 64
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-3 rounded-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg">
                                                        <img src="../assets/images/faces/6.jpg" alt="User Profile">
                                                    </span>
                                                </div>
                                                <div class="align-items-center">
                                                    <p class="mb-0 fw-semibold">James Brown<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                    <span class="fs-12 text-muted text-break">jamesbrown@example.com</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="text-muted fs-12 mb-1 fw-medium">
                                                    Sold: 45
                                                </div>
                                                <button class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item rounded-3 text-center">
                                        <a href="javascript:void(0);" class="btn btn-success btn-sm w-100 text-nowrap">
                                            View All
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Latest Bids
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered text-nowrap nft-table">
                                        <thead class="border border-dashed">
                                            <tr class="border border-dashed">
                                                <th class="border border-dashed bg-light">Bid Item</th>
                                                <th class="border border-dashed bg-light">Amount</th>
                                                <th class="border border-dashed bg-light">Current Offer</th>
                                                <th class="border border-dashed bg-light">Submitted By</th>
                                                <th class="border border-dashed bg-light">Status</th>
                                                <th class="border border-dashed bg-light">Time Remaining</th>
                                                <th class="border border-dashed bg-light">Actions</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/1.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@irukasensei229</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">2.56ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">2.1ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/3.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Elisha Sean</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-primary">Open</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">03hrs : 12m : 45s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/3.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Urban Vibes NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@cityartist77</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">1.25ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">1.0ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/5.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Jordan Lee</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-primary">Open</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">05hrs : 45m : 30s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/4.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Mystic Forest NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@naturelover99</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">4.50ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">3.75ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/6.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Sophia Brown</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-warning">Pending</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">01hrs : 15m : 20s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/5.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Digital Harmony NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@musiclover88</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">2.90ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">2.60ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/7.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Lucas Gray</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-primary">Open</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">04hrs : 05m : 50s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/5.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Digital Harmony NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@musiclover88</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">2.90ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">2.60ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/7.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Lucas Gray</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-primary">Open</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">04hrs : 05m : 50s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-dashed">
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/nft-images/6.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Celestial Art NFT</a></p>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@starrynight12</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">5.20ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-semibold text-success">4.90ETH</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="../assets/images/faces/8.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0 fw-medium">Mia Johnson</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border border-dashed">
                                                    <span class="badge bg-danger">Closed</span>
                                                </td>
                                                <td class="border border-dashed"><span class="text-muted fs-medium">00hrs : 30m : 10s</span></td>
                                                <td class="border border-dashed">
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line lh-1 align-middle"></i></button> 
                                                        <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line lh-1 align-middle"></i></button> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
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
                </div>
                <!-- End::row-4 -->


    
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

    <!-- NFT-Dashboard JS -->
    <script src="{{asset('assets/js/nft-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
@endpush
