
@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">CRM</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex gap-2 justify-content-between">
                                    <div class="d-flex flex-column justify-content-between gap-2">
                                        <div class="pt-1">
                                            <span class="text-success fw-semibold me-2"> 1.23% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span><br>
                                            <span class="text-muted fw-medium fs-12">from last month</span>
                                        </div>
                                        <div id="crmchart01"></div>
                                    </div>
                                    <div class="text-end">
                                        <div class="avatar avatar-md bg-primary bg-opacity-25 avatar-rounded mb-2">
                                            <div class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded">
                                                <i class="ri-bar-chart-box-line fs-18"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fw-semibold mb-2">$12,432</h4>
                                            <div class="text-muted mb-0">Total Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex gap-2 justify-content-between">
                                    <div class="d-flex flex-column justify-content-between gap-2">
                                        <div class="pt-1">
                                            <span class="text-danger fw-semibold me-2"> 0.3% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span><br>
                                            <span class="text-muted fw-medium fs-12">from last month</span>
                                        </div>
                                        <div id="crmchart02"></div>
                                    </div>
                                    <div class="text-end">
                                        <div class="avatar avatar-md bg-secondary bg-opacity-25 avatar-rounded mb-2">
                                            <div class="avatar avatar-sm bg-secondary text-fixed-white avatar-rounded">
                                                <i class="ri-user-add-line fs-18"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fw-semibold mb-2">5.87K</h4>
                                            <div class="text-muted mb-0">Active Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex gap-2 justify-content-between">
                                    <div class="d-flex flex-column justify-content-between gap-2">
                                        <div class="pt-1">
                                            <span class="text-success fw-semibold me-2"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span><br>
                                            <span class="text-muted fw-medium fs-12">from last month</span>
                                        </div>
                                        <div id="crmchart03"></div>
                                    </div>
                                    <div class="text-end">
                                        <div class="avatar avatar-md bg-success bg-opacity-25 avatar-rounded mb-2">
                                            <div class="avatar avatar-sm bg-success text-fixed-white avatar-rounded">
                                                <i class="ri-shake-hands-line fs-18"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fw-semibold mb-2">8,654</h4>
                                            <div class="text-muted mb-0">Total Deals</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex gap-2 justify-content-between">
                                    <div class="d-flex flex-column justify-content-between gap-2">
                                        <div class="pt-1">
                                            <span class="text-danger fw-semibold me-2"> 1.2% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span><br>
                                            <span class="text-muted fw-medium fs-12">from last month</span>
                                        </div>
                                        <div id="crmchart04"></div>
                                    </div>
                                    <div class="text-end">
                                        <div class="avatar avatar-md bg-info bg-opacity-25 avatar-rounded mb-2">
                                            <div class="avatar avatar-sm bg-info text-fixed-white avatar-rounded">
                                                <i class="ri-hourglass-line fs-18"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="fw-semibold mb-2">3.6%</h4>
                                            <div class="text-muted mb-0">Conversion Ratio</div>
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
                    <div class="col-xxl-8">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Revenue Statistics
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex p-3 border rounded-3 border-dashed align-items-center gap-4 mb-2 bg-light flex-wrap justify-content-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <p class="mb-0 fw-semibold text-muted">Total Revenue: </p>
                                        <div class="fs-22 fw-semibold text-success">$150.75k</div>
                                    </div>
                                    <div class="op-4 text-muted"> || </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <p class="mb-0 fw-semibold text-muted">Total Income: </p>
                                        <div class="fs-22 fw-medium">$45.30k</div>
                                    </div>
                                    <div class="op-4 text-muted"> || </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <p class="mb-0 fw-semibold text-muted">Conversion Rate: </p>
                                        <div class="fs-22 fw-medium">4.25%</div>
                                    </div>
                                    <div class="op-4 text-muted"> || </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <p class="mb-0 fw-semibold text-muted">Change: </p>
                                        <div class="fw-medium text-success fs-20">2.5% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></div>
                                    </div>
                                </div>                                
                                <div id="salerevenue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card crm-upgrade-card">
                            <div class="card-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-sm-5">
                                        <img src="../assets/images/media/media-71.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="text-end">
                                            <p class="fw-semibold mb-1">
                                                Unlock Premium Features for Enhanced Performance
                                            </p>
                                            <p class="text-muted fs-12 fw-medium mb-4 op-7">
                                                Upgrade now to access advanced tools and boost productivity.
                                            </p>
                                            <div class="btn btn-success btn-w-lg">
                                                <i class="ti ti-crown fs-18 text-secondary fw-semibold me-2 align-middle"></i>Upgrade to Pro
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Profit Report
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary-light btn-sm">View Details</button>
                                </div>
                            </div>
                            <div class="card-body pe-xl-0">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="d-flex gap-3 flex-wrap align-items-center mb-3 pb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-primary bg-primary-transparent" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"/><path d="M6 6H4v12h2zm14 1H8v4h12z"/></g></svg>
                                            <div>
                                                <h6 class="fw-semibold mb-1">$3.56K</h6>
                                                <div class="text-muted mb-0">Profit</div>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Month</div>
                                                <span class="text-success fw-semibold"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 flex-wrap align-items-center mb-3 pb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-success bg-success-transparent" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"/><path d="M6 6H4v12h2zm14 1H8v4h12z"/></g></svg>
                                            <div>
                                                <h6 class="fw-semibold mb-1">$4.25K</h6>
                                                <div class="text-muted mb-0">Revenue</div>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Month</div>
                                                <span class="text-danger fw-semibold"> 3.1% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 flex-wrap align-items-center pb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" class="text-secondary bg-secondary-transparent" viewBox="0 0 24 24"><g fill="currentColor"><path fill-opacity="0.5" d="M8 13h6v4H8z"/><path d="M6 6H4v12h2zm14 1H8v4h12z"/></g></svg>
                                            <div>
                                                <h6 class="fw-semibold mb-1">$2.77K</h6>
                                                <div class="text-muted mb-0">Expenses</div>
                                            </div>
                                            <div class="ms-auto text-muted fs-11 text-end">
                                                <div class="fw-medium">From Last Month</div>
                                                <span class="text-success fw-semibold"> 2.6% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div id="crmprofit-report"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Closed Deals
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary-light btn-sm">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-primary p-2 avatar-rounded flex-shrink-0">
                                                AC
                                            </span>
                                            <div>
                                                <div class="mb-1">Acme Corp.<span class="fw-semibold">- $50,000</span></div>
                                                <div class="fs-11 text-muted">12th Oct,2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-secondary p-2 avatar-rounded flex-shrink-0">
                                                XY
                                            </span>
                                            <div>
                                                <div class="mb-1">XYZ Ltd<span class="fw-semibold">- $75,000</span></div>
                                                <div class="fs-11 text-muted">12th Oct,2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-success p-2 avatar-rounded flex-shrink-0">
                                                BR
                                            </span>
                                            <div>
                                                <div class="mb-1">BrightTech<span class="fw-semibold">- $120,000</span></div>
                                                <div class="fs-11 text-muted">25th Oct,2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-info p-2 avatar-rounded flex-shrink-0">
                                                DI
                                            </span>
                                            <div>
                                                <div class="mb-1">Digital Innovations<span class="fw-semibold"> - $120,000</span></div>
                                                <div class="fs-11 text-muted">20th Oct, 2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-warning p-2 avatar-rounded flex-shrink-0">
                                                NE
                                            </span>
                                            <div>
                                                <div class="mb-1">NextGen Solutions<span class="fw-semibold"> - $65,000</span></div>
                                                <div class="fs-11 text-muted">19th Oct, 2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md bg-pink p-2 avatar-rounded flex-shrink-0">
                                                FU
                                            </span>
                                            <div>
                                                <div class="mb-1">Future Innovations<span class="fw-semibold">- $65,000</span></div>
                                                <div class="fs-11 text-muted">30th Oct,2024</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-success">Closed</span>
                                    </li>
                                </ul>         
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Website Traffic
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary-light btn-sm">View Details</button>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div id="crm-webtraffic"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Recent Activity
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary-light btn-sm">View Details</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0 crm-recent-activity">
                                            <li class="d-flex mb-4">
                                                <div class="avatar-md p-1 bg-primary-transparent avatar avatar-rounded flex-shrink-0 me-3">
                                                    <span class="avatar-sm avatar avatar-rounded bg-primary">
                                                        <i class="ti ti-user fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fs-14 fw-medium">New user registered</p>
                                                            <p class="text-muted fs-12 mb-0">A new customer has signed up for an account.</p>
                                                        </div>
                                                        <div class="ms-auto text-end flex-shrink-0">
                                                            <p class="text-muted fs-11 mb-0">John Doe <br> - 10 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar-md p-1 bg-secondary-transparent avatar avatar-rounded flex-shrink-0 me-3">
                                                    <span class="avatar-sm avatar avatar-rounded bg-secondary">
                                                        <i class="ti ti-file-invoice fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fs-14 fw-medium">Invoice #INV-00124 created</p>
                                                            <p class="text-muted fs-12 mb-0">An invoice has been generated for a recent order.</p>
                                                        </div>
                                                        <div class="ms-auto text-end flex-shrink-0">
                                                            <p class="text-muted fs-11 mb-0">- 30 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar-md p-1 bg-success-transparent avatar avatar-rounded flex-shrink-0 me-3">
                                                    <span class="avatar-sm avatar avatar-rounded bg-success">
                                                        <i class="ti ti-message fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fs-14 fw-medium">New support ticket</p>
                                                            <p class="text-muted fs-12 mb-0">A customer has submitted a new request.</p>
                                                        </div>
                                                        <div class="ms-auto text-end flex-shrink-0">
                                                            <p class="text-muted fs-11 mb-0">Jane Smith <br>- 1 hour ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar-md p-1 bg-info-transparent avatar avatar-rounded flex-shrink-0 me-3">
                                                    <span class="avatar-sm avatar avatar-rounded bg-info">
                                                        <i class="ti ti-shopping-cart fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fs-14 fw-medium">Order #ORD-00256 canceled</p>
                                                            <p class="text-muted fs-12 mb-0">An order has been canceled by the customer.</p>
                                                        </div>
                                                        <div class="ms-auto text-end flex-shrink-0">
                                                            <p class="text-muted fs-11 mb-0">- 2 hours ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1">
                                                <div class="avatar-md p-1 bg-pink-transparent avatar avatar-rounded flex-shrink-0 me-3">
                                                    <span class="avatar-sm avatar avatar-rounded bg-pink">
                                                        <i class="ti ti-check fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-1 fs-14 fw-medium">Task completed</p>
                                                            <p class="text-muted fs-12 mb-0">Task has been successfully completed.</p>
                                                        </div>
                                                        <div class="ms-auto text-end flex-shrink-0">
                                                            <p class="text-muted fs-11 mb-0">Sarah Lee <br>- 3 hours ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Upcoming Meetings
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-wave btn-sm waves-effect waves-light">View All</a>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-group mb-1">
                                            <li class="list-group-item border-0 p-0 mb-3">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">23 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Meeting with XYZ Ltd.</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Discuss the upcoming partnership </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        9:30 AM
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 p-0 mb-3">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border fs-15 text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">24 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Demo with BrightTech</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Latest product features and </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        11:30 AM
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 p-0 mb-3">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border fs-15 text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">25 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Meeting with Acme Corp</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Latest product features and </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        2:00 PM
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 p-0 mb-3">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border fs-15 text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">25 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Meeting with Acme Corp</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Latest product features and </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        2:00 PM
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 p-0 mb-3">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border fs-15 text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">26 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Meeting with Acme Corp</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Latest product features and </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        03:00 PM
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 p-0 ">
                                                <div class="d-flex align-items-center gap-3 text-truncate">
                                                    <div class="avatar bg-light border fs-15 text-muted flex-shrink-0 flex-column">
                                                        <div class="fs-11">27 </div> <span class="fs-11">Oct</span>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <div class="fw-medium text-truncate w-75">Strategy Meeting with Team Alpha</div>
                                                        <div class="fs-12 text-truncate w-75 text-muted">Latest product features and </div>
                                                    </div>
                                                    <div class="text-muted ms-auto fs-12">
                                                        05:30PM
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recent Deals Status
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary-light btn-sm">View Details</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Deal ID</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">Deal Value</th>
                                                <th scope="col">Deal Status</th>
                                                <th scope="col">Closing Date</th>
                                                <th scope="col">Salesperson</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-medium">#001234</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded bg-secondary-transparent">
                                                            <img src="../assets/images/company-logos/1.png" alt="">
                                                        </span>
                                                        <div class="fw-medium">Acme Corp.</div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium fs-14">$50,000</td>
                                                <td><span class="badge bg-success">Closed</span></td>
                                                <td>Oct 18, 2024<i class="ri-calendar-check-line text-pink fs-14 ms-1"></i></td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">John Doe</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </button>                                                          
                                                        <button class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                            <i class="ti ti-download fs-16"></i>
                                                        </button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">#001235</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded bg-pink-transparent">
                                                            <img src="../assets/images/company-logos/2.png" alt="">
                                                        </span>
                                                        <div class="fw-medium">Susenz Ltd.</div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium fs-14">$75,000</td>
                                                <td><span class="badge bg-warning">In Progress</span></td>
                                                <td>Oct 16, 2024<i class="ri-calendar-check-line text-pink fs-14 ms-1"></i></td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Jane Smith</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </button> 
                                                        <button class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                            <i class="ti ti-download fs-16"></i>
                                                        </button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">#001236</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded bg-success-transparent">
                                                            <img src="../assets/images/company-logos/3.png" alt="">
                                                        </span>
                                                        <div class="fw-medium">BrightTech</div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium fs-14">$120,000</td>
                                                <td><span class="badge bg-danger">Lost</span></td>
                                                <td>Oct 12, 2024<i class="ri-calendar-check-line text-pink fs-14 ms-1"></i></td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Peter Johnson</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </button> 
                                                        <button class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                            <i class="ti ti-download fs-16"></i>
                                                        </button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">#001237</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded bg-info-transparent">
                                                            <img src="../assets/images/company-logos/5.png" alt="">
                                                        </span>
                                                        <div class="fw-medium">Future Innovations</div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium fs-14">$65,000</td>
                                                <td><span class="badge bg-primary">Pending</span></td>
                                                <td>Oct 10, 2024<i class="ri-calendar-check-line text-pink fs-14 ms-1"></i></td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Emily Davis</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </button> 
                                                        <button class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                            <i class="ti ti-download fs-16"></i>
                                                        </button> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">#001238</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded bg-teal-transparent">
                                                            <img src="../assets/images/company-logos/6.png" alt="">
                                                        </span>
                                                        <div class="fw-medium">Global Ventures</div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium fs-14">$90,000</td>
                                                <td><span class="badge bg-success">Closed</span></td>
                                                <td>Oct 08, 2024<i class="ri-calendar-check-line text-pink fs-14 ms-1"></i></td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs flex-shrink-0 avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Mark Lee</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center"> 
                                                        <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="ti ti-eye fs-16"></i>
                                                        </button> 
                                                        <button class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                            <i class="ti ti-download fs-16"></i>
                                                        </button> 
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>           
                <!-- End::row-4 -->

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

    <!-- CRM Dashboard --> 
    <script src="{{asset('assets/js/crm-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 
 @endpush
    
