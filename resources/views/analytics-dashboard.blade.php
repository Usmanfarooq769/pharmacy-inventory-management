@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Analytics</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-body pb-2">
                                        <div class="d-flex flex-wrap align-items-start gap-3">
                                            <div class="avatar avatar-lg bg-primary bg-opacity-25 text-primary"><i class="ti ti-user fs-22 fw-medium"></i></div>
                                            <div>
                                                <p class="text-muted mb-1">Total Users</p>
                                                <h5 class="fw-semibold mb-0">$12,432
                                                </h5>
                                            </div>
                                            <div class="text-end ms-auto">
                                                <span class="text-success fw-semibold fs-12 mb-0 ms-1">+ 2.10%</span>
                                                <span class="text-muted fw-medium fs-12">last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-users"></div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body pb-2">
                                        <div class="d-flex flex-wrap align-items-start gap-3">
                                            <div class="avatar avatar-lg bg-success bg-opacity-25 text-success"><i class="ti ti-currency-dollar fs-22 fw-medium"></i></div>
                                            <div>
                                                <p class="text-muted mb-1">Income</p>
                                                <h5 class="fw-semibold mb-0">$35,897
                                                </h5>
                                            </div>
                                            <div class="text-end ms-auto">
                                                <span class="text-danger fw-semibold fs-12 mb-0 ms-1">- 1.03%</span>
                                                <span class="text-muted fw-medium fs-12">last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-income"></div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body pb-2">
                                        <div class="d-flex flex-wrap align-items-start gap-3">
                                            <div class="avatar avatar-lg bg-secondary bg-opacity-25 text-secondary"><i class="ti ti-moneybag fs-22 fw-medium"></i></div>
                                            <div>
                                                <p class="text-muted mb-1">Revenue</p>
                                                <h5 class="fw-semibold mb-0">$35,897
                                                </h5>
                                            </div>
                                            <div class="text-end ms-auto">
                                                <span class="text-success fw-semibold fs-12 mb-0 ms-1">+ 0.45%</span>
                                                <span class="text-muted fw-medium fs-12">last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Audience Overview
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary-light btn-wave btn-sm"><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Export</button>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div id="audienceReport"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-xxl-7 col-lg-6">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Impression Overview
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary-light btn-sm">View Details</button>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-0">
                                        <div id="impression" class="mb-2"></div>
                                        <div class="pb-2 p-3 mb-1">
                                            <div class="row mb-3 gy-2 gy-md-0">
                                                <div class="col-md-6 col-12 d-flex gap-2 align-items-center flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" class="avatar flex-shrink-0 avatar-sm avatar-rounded p-1 bg-primary-transparent text-primary" viewBox="0 0 24 24">
                                                        <rect width="16" height="12" x="4" y="6" fill="currentColor" fill-opacity="0.3" rx="2"/>
                                                        <path fill="currentColor" d="M4 16V9.243a.15.15 0 0 1 .217-.134l6.441 3.22a3 3 0 0 0 2.684 0l6.44-3.22a.15.15 0 0 1 .218.134V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2"/>
                                                    </svg>
                                                    <div>
                                                        <div class="fw-medium text-muted">Email:</div>
                                                    </div>
                                                    <span class="fw-semibold fs-15 ms-auto">25,000</span>
                                                </div>
                                                <div class="col-md-6 col-12 d-flex gap-2 align-items-center flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" class="avatar flex-shrink-0 avatar-sm avatar-rounded p-1 bg-secondary-transparent text-secondary" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-width="1.2">
                                                            <circle cx="11" cy="11" r="6" fill="currentColor" fill-opacity="0.3"/>
                                                            <path stroke-linecap="round" d="M11 8a3 3 0 0 0-3 3m12 9l-3-3"/>
                                                        </g>
                                                    </svg>
                                                    <div>
                                                        <div class="fw-medium text-muted">Search:</div>
                                                    </div>
                                                    <span class="fw-semibold fs-15 ms-auto">35,500</span>
                                                </div>
                                            </div> 
                                            <div class="row gy-2 gy-md-0">
                                                <div class="col-md-6 col-12 d-flex gap-2 align-items-center flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" class="avatar flex-shrink-0 avatar-sm avatar-rounded p-1 bg-success-transparent text-success" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-opacity="0.3" d="M3 11c0-3.771 0-5.657 1.172-6.828S7.229 3 11 3h2c3.771 0 5.657 0 6.828 1.172S21 7.229 21 11v2c0 3.771 0 5.657-1.172 6.828S16.771 21 13 21h-2c-3.771 0-5.657 0-6.828-1.172S3 16.771 3 13z"/>
                                                        <circle cx="17" cy="7" r="1" fill="currentColor"/><circle cx="12" cy="12" r="3" fill="currentColor"/>
                                                    </svg>
                                                    <div>
                                                        <div class="fw-medium text-muted">Social:</div>
                                                    </div>
                                                    <span class="fw-semibold fs-15 ms-auto">18,750</span>
                                                </div>
                                                <div class="col-md-6 col-12 d-flex gap-2 align-items-center flex-wrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" class="avatar flex-shrink-0 avatar-sm avatar-rounded p-1 bg-info-transparent text-info" viewBox="0 0 24 24">
                                                        <g fill="none">
                                                            <path fill="currentColor" fill-opacity="0.3" fill-rule="evenodd" d="M2.455 11.116C3.531 9.234 6.555 5 12 5c5.444 0 8.469 4.234 9.544 6.116c.221.386.331.58.32.868c-.013.288-.143.476-.402.852C20.182 14.694 16.706 19 12 19s-8.182-4.306-9.462-6.164c-.26-.376-.39-.564-.401-.852c-.013-.288.098-.482.318-.868M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6" clip-rule="evenodd"/><path stroke="currentColor" stroke-width="1.2" d="M12 5c-5.444 0-8.469 4.234-9.544 6.116c-.221.386-.331.58-.32.868c.013.288.143.476.402.852C3.818 14.694 7.294 19 12 19s8.182-4.306 9.462-6.164c.26-.376.39-.564.401-.852s-.098-.482-.319-.868C20.47 9.234 17.444 5 12 5Z"/>
                                                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.2"/>
                                                        </g>
                                                    </svg>
                                                    <div>    
                                                        <div class="fw-medium text-muted">Direct:</div>
                                                    </div>
                                                    <span class="fw-semibold fs-15 ms-auto">20,000</span>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-6">
                                <div class="card custom-card bg-primary text-fixed-white analytics-card">
                                    <div class="p-4 text-center text-fixed-white">
                                        <img src="../assets/images/media/media-70.png" alt="" class="img-fluid mb-4 py-2">
                                        <p class="fw-medium mb-3 fs-18">
                                            Unlock Premium Features for Enhanced Performance
                                        </p>
                                        <p class="fw-medium mb-4 op-5 text-fixed-white fs-12">
                                            Upgrade now to access advanced tools and boost productivity.
                                        </p>
                                        <div class="btn btn-success mb-2">
                                            <i class="ti ti-crown fs-16 text-secondary fw-semibold me-1 align-middle"></i>Upgrade to Pro
                                        </div>
                                    </div>
                                    <div class="circles">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Acitivity
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <div class="d-flex mb-3 gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-danger-transparent">
                                            <i class="ri ri-error-warning-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>Session Time</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Avg. Time:</span> 3m 1s</div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 55%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-secondary-transparent">
                                            <i class="ri ri-map-pin-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>Geo Area</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Top Location:</span> USA</div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: 70%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-purple-transparent">
                                            <i class="ri ri-time-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>Bounce rate</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Rate:</span> 45%</div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-purple" role="progressbar" style="width: 45%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-success-transparent">
                                            <i class="ri ri-walk-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>Returning-visitors</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Return:</span>1,250 </div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 60%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-info-transparent">
                                            <i class="ri ri-user-add-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>New-users</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Users: </span>500 </div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 40%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar avatar-md flex-shrink-0 avatar-rounded bg-warning-transparent">
                                            <i class="ri ri-cursor-line fs-15"></i>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex mb-1"> 
                                                <div>New-clicks</div> 
                                                <div class="ms-auto fs-14 fw-semibold"><span class="fs-12 text-muted fw-medium">Clicks: </span>800 </div> 
                                            </div>
                                            <div class="progress progress-md p-1">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 50%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body mb-2 p-4">
                                        <div class="mb-3 fs-16 fw-semibold">Bounce Rate :</div>
                                        <div class="d-flex gap-3 flex-wrap align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-primary bg-primary-transparent rounded-1 px-1" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"></path><path d="M6 6H4v12h2zm14 1H8v4h12z"></path></g></svg>
                                            <div>
                                                <h6 class="fw-medium mb-0">76.5%</h6>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Month</div>
                                                <span class="text-success fw-semibold"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-bouncerate" class="mt-1 w-100"></div>
                                </div>
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body mb-2 p-4">
                                        <div class="mb-3 fs-16 fw-semibold">Sessions :</div>
                                        <div class="d-flex gap-3 flex-wrap align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-success bg-success-transparent rounded-1 px-1" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"></path><path d="M6 6H4v12h2zm14 1H8v4h12z"></path></g></svg>
                                            <div>
                                                <h6 class="fw-medium mb-0">33.5K</h6>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Month</div>
                                                <span class="text-danger fw-semibold"> 1.25% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-session" class="mt-1 w-100"></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-4 pb-2">
                                        <div class="mb-3 fs-16 fw-semibold">Avg sessions :</div>
                                        <div class="d-flex gap-3 flex-wrap align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-primary bg-primary-transparent rounded-1 px-1" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"></path><path d="M6 6H4v12h2zm14 1H8v4h12z"></path></g></svg>
                                            <div>
                                                <h6 class="fw-medium mb-0">3m 45s</h6>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Week</div>
                                                <span class="text-success fw-semibold"> 1.25% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                        <div id="analytics-avgsession" class="mt-4 w-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Browser Usage
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Browser</th>
                                                <th scope="col">Sessions</th>
                                                <th scope="col">Traffic (%)</th>
                                                <th scope="col">Bounce (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-light me-2">
                                                            <i class="ri-google-fill fs-18 text-primary"></i>
                                                        </span>
                                                        <div class="fw-semibold">Google</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>23,379<i class="ri-arrow-up-fill ms-1 text-success align-middle fs-14"></i></span>
                                                </td>
                                                <td>
                                                    65%
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>65% <span class="badge bg-success align-middle ms-2">2.5%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-light me-2">
                                                            <i class="ri-safari-line fs-18 text-secondary"></i>
                                                        </span>
                                                        <div class="fw-semibold">Safari</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>78,973<i class="ri-arrow-up-fill ms-1 text-success align-middle fs-14"></i></span>
                                                </td>
                                                <td>
                                                    25%
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>35%  <span class="badge bg-danger-transparent align-middle ms-2">2.5%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-light me-2">
                                                            <i class="ri-opera-fill fs-18 text-success"></i>
                                                        </span>
                                                        <div class="fw-semibold">Opera</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>12,457<i class="ri-arrow-down-fill ms-1 text-danger align-middle fs-14"></i></span>
                                                </td>
                                                <td>85%
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>75% <span class="badge bg-success align-middle ms-2">2.5%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-light me-2">
                                                            <i class="ri-edge-fill fs-18 text-info"></i>
                                                        </span>
                                                        <div class="fw-semibold">Edge</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>8,570<i class="ri-arrow-up-fill ms-1 text-success align-middle fs-14"></i></span>
                                                </td>
                                                <td>35%
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25%  <span class="badge bg-danger-transparent align-middle ms-2">2.5%</span></td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-light me-2">
                                                            <i class="ri-firefox-fill fs-18 text-danger"></i>
                                                        </span>
                                                        <div class="fw-semibold">Firefox</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>6,135<i class="ri-arrow-down-fill ms-1 text-danger align-middle fs-14"></i></span>
                                                </td>
                                                <td class="border-bottom-0">55
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">25% <span class="badge bg-success align-middle ms-2">2.5%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Visitors by Channel
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown my-1">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Channel</th>
                                                <th scope="col">Sessions</th>
                                                <th scope="col">Bounce Rate</th>
                                                <th scope="col">Avg Session Duration</th>
                                                <th scope="col">Goal Completed</th>
                                                <th scope="col">Pages/Visit</th>
                                                <th scope="col">% Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-primary-transparent avatar-rounded">
                                                            <i class="ri-search-2-line fs-15 fw-semibold text-primary"></i>
                                                        </span>
                                                        <span class="ms-2">Organic Search</span>
                                                    </div>
                                                </td>
                                                <td>850</td> 
                                                <td>28.45%</td>
                                                <td>0 hrs : 1 mins : 15 secs</td>
                                                <td class="text-center">
                                                    <span class="badge bg-primary">300</span>
                                                </td>
                                                <td>3.2</td>
                                                <td><span class="fw-semibold text-success">+7.1%</span></td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                            <i class="ri-share-line fs-15 fw-semibold text-success"></i>
                                                        </span>
                                                        <span class="ms-2">Direct Traffic</span>
                                                    </div>
                                                </td>
                                                <td class="text-info fw-medium">900</td>
                                                <td>25.50%</td>
                                                <td>0 hrs : 2 mins : 30 secs</td>
                                                <td class="text-center">
                                                    <span class="badge bg-success">150</span>
                                                </td>
                                                <td>4.0</td>
                                                <td><span class="fw-semibold text-success">+3.8%</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                            <i class="ri-facebook-line fs-15 fw-semibold text-info"></i>
                                                        </span>
                                                        <span class="ms-2">Social Media</span>
                                                    </div>
                                                </td>
                                                <td>500</td>
                                                <td><span class="fw-semibold text-pink">40.00%</span></td>
                                                <td>0 hrs : 1 mins : 10 secs</td>
                                                <td class="text-center">
                                                    <span class="badge bg-info">80</span>
                                                </td>
                                                <td>2.5</td>
                                                <td><span class="fw-semibold text-danger">-2.0%</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-warning-transparent avatar-rounded">
                                                            <i class="ri-mail-line fs-15 fw-semibold text-warning"></i>
                                                        </span>
                                                        <span class="ms-2">Email Campaign</span>
                                                    </div>
                                                </td>
                                                <td>350</td>
                                                <td>20.00%</td>
                                                <td class="text-success fw-medium">0 hrs : 3 mins : 5 secs</td>
                                                <td class="text-center">
                                                    <span class="badge bg-warning">60</span>
                                                </td>
                                                <td>4.8</td>
                                                <td><span class="fw-semibold text-success">+4.5%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                            <i class="ri-error-warning-line fs-15 fw-semibold text-danger"></i>
                                                        </span>
                                                        <span class="ms-2">Referral</span>
                                                    </div>
                                                </td>
                                                <td>450</td>
                                                <td class="text-primary fw-semibold">35.00%</td>
                                                <td>0 hrs : 2 mins : 15 secs</td>
                                                <td class="text-center">
                                                    <span class="badge bg-danger">50</span>
                                                </td>
                                                <td>3.1</td>
                                                <td><span class="fw-semibold text-danger">-1.5%</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                            <i class="ri-global-line fs-15 fw-semibold text-secondary"></i>
                                                        </span>
                                                        <span class="ms-2">Paid Search</span>
                                                    </div>
                                                </td>
                                                <td>300</td>
                                                <td>20.50%</td>
                                                <td><span class="fw-medium text-info">0 hrs : 2 mins : 50 secs</span></td>
                                                <td class="text-center">
                                                    <span class="badge bg-secondary">75</span>
                                                </td>
                                                <td>4.2</td>
                                                <td><span class="fw-semibold text-success">+6.0%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
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
                                    Visitors by Region
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center p-3 bg-primary text-fixed-white rounded mb-4">
                                    <div>
                                        <p class="mb-2 fs-13">Top Visitors</p>
                                        <div class="d-flex gap-3 align-items-end">
                                            <h4 class="mb-0 text-fixed-white">3,254</h4>
                                            <div>
                                                <span class="fw-semibold fs-12 mb-0 ms-1">+ 1.03%</span>
                                                <span class="op-7 fw-medium fs-12">last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/flags/us_flag.jpg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0 analytics-visitors-countries">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/us_flag.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">United States</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">32,190</span>
                                                <span class="fw-semibold text-success fs-11 mb-0 ms-1">+ 1.03%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/germany_flag.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">Germany</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">8,798</span>
                                                <span class="fw-semibold text-danger fs-11 mb-0 ms-1">- 0.03%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/canada_flag.jpg" alt="Canada Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">Canada</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">15,450</span>
                                                <span class="fw-semibold text-success fs-11 mb-0 ms-1">+ 2.15%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/uae_flag.jpg" alt="UK Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">UAE</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">20,763</span>
                                                <span class="fw-semibold text-danger fs-11 mb-0 ms-1">- 0.89%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/french_flag.jpg" alt="France Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">France</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">12,540</span>
                                                <span class="fw-semibold text-success fs-11 mb-0 ms-1">+ 1.50%</span>
                                            </div>
                                        </div>
                                    </li>                                 
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/china_flag.jpg" alt="China Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">China</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">9,672</span>
                                                <span class="fw-semibold text-success fs-11 mb-0 ms-1">+ 3.20%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/russia_flag.jpg" alt="Russia Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">Russia</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">18,245</span>
                                                <span class="fw-semibold text-danger fs-11 mb-0 ms-1">- 1.25%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded text-default">
                                                    <img src="../assets/images/flags/mexico_flag.jpg" alt="Mexico Flag">
                                                </span>
                                            </div>
                                            <div class="ms-3 flex-fill lh-1">
                                                <span class="fs-14 fw-medium">Mexico</span>
                                            </div>
                                            <div>
                                                <span class="text-default badge bg-light fw-medium mt-2 fs-11">7,839</span>
                                                <span class="fw-semibold text-success fs-11 mb-0 ms-1">+ 4.10%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

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

    <!-- Analytics-Dashboard JS -->
    <script src="{{asset('assets/js/analytics-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @endpush
