@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">CRM Deals</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM Deals</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-medium fs-16 me-2">CRM Deals</span><span class="badge bg-primary align-middle">15 Active Deals</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                        <div class="d-flex flex-grow-1" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search Deal" aria-label="Search">
                                            <button class="btn btn-secondary" type="submit">Search</button>
                                        </div>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-deal"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add New Deal</button>
                                        <button class="btn btn-success">Download as CSV</button>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Filter By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most Recent</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Modified</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Priority Level</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row mb-3">
                    <div class="col-xxl-2">
                        <div class="bg-primary-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-primary border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium lead-discovered mb-0">Leads Discovered</h6>
                                            <span class="text-muted fs-11">Initial Contact</span>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <span class=" badge bg-primary">24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="leads-discovered">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Alpha Tech Solutions</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $75,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 15 Oct, 2024</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">TechCorp Ltd</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Zeta Innovations</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $120,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 10 Nov, 2024</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">InnovateX</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/13.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Alpha Technologies</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $85,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 15 Oct, 2024</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">TechFusion Inc.</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/14.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Gamma Solutions</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $200,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 5 Dec, 2024</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">FutureTech</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/15.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="bg-secondary-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-secondary border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium lead-qualified mb-0">Qualified Leads</h6>
                                            <span class="text-muted fs-11">Sales Qualified Lead (SQL)</span>
                                        </div>
                                        <div>
                                            <span class=" badge bg-secondary text-fixed-white">17</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="leads-qualified">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Alpha Innovations</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $300,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 10 Jan, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">TechSphere Inc.</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/16.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Beta Dynamics</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $150,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 15 Feb, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Quantum Corp.</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Delta Enterprises</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $500,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 22 Mar, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Inno Solutions</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/7.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Epsilon Technologies</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $250,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 30 Apr, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">NexGen Systems</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="bg-success-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-success border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium contact-initiated mb-0">Contact Initiated</h6>
                                            <span class="text-muted fs-11">First Interaction</span>
                                        </div>
                                        <div>
                                            <span class=" badge bg-success text-fixed-white">06</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-initiated">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Zeta Solutions</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $400,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 5 Jun, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">OmniTech Group</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/1.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Theta Enterprises</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $350,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 12 Jul, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Pinnacle Ltd</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="bg-info-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-info border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium need-identified mb-0">Needs Identified</h6>
                                            <span class="text-muted fs-11">Requirement Gathering</span>
                                        </div>
                                        <div>
                                            <span class=" badge bg-info text-fixed-white">33</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="needs-identified">                    
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Iota Innovations</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $600,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 20 Aug, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Visionary Tech</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Kappa Solutions</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $450,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 25 Sep, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">AlphaCorp</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/3.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Lambda Group</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $700,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 18 Oct, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Megaions</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Mu Solutions</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $550,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 14 Nov, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Delta Dynamics</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="bg-danger-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-danger border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium negotiation mb-0">Negotiation</h6>
                                            <span class="text-muted fs-11">Deal Negotiation</span>
                                        </div>
                                        <div>
                                            <span class=" badge bg-danger text-fixed-white">22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="negotiation">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Nu Technologies</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $800,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 22 Dec, 2025</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Innovative Corp</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/14.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Xi Dynamics</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $900,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 30 Jan, 2026</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Omega Systems</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/5.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Pi Consulting</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $1,200,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 15 Feb, 2026</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Tech Innovators</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/11.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="bg-warning-transparent rounded p-3 pb-1">
                            <div class="card custom-card border border-warning border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium deal-finalized mb-0">Deal Finalized</h6>
                                            <span class="text-muted fs-11">Closed-Won Deal</span>
                                        </div>
                                        <div>
                                            <span class=" badge bg-warning text-fixed-white">53</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="deal-finalized">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Rho Innovations</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $1,500,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 28 Mar, 2026</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">IQ Technologies</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <div>
                                                <p class="fw-medium mb-1 fs-14 deal-title">Sigma Enterprises</p>
                                                <p class="fw-medium mb-1"><span class="text-muted fw-normal"><i class="ri-money-dollar-circle-line text-success me-1 fs-14"></i>Amount:</span> $2,000,000</p> 
                                                <p class="fw-medium mb-0"><span class="text-muted fw-normal"><i class="ri-calendar-line text-pink"></i> Date:</span> 10 Apr, 2026</p> 
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a aria-label="More Options" href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-line lh-1 align-middle fs-16"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between flex-wrap">
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Company" class="company-name px-2 rounded fs-10 py-1">Pinnacle Group</a>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/9.jpg" alt="Company Representative">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start:: New Deal -->
                <div class="modal fade" id="create-deal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">New Deal</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="mb-0 text-center">
                                            <span class="avatar avatar-xxl avatar-rounded">
                                                <img src="../assets/images/faces/9.jpg" alt="" id="profile-img">
                                                <span class="badge rounded-pill bg-primary avatar-badge">
                                                    <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                    <i class="fe fe-camera"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="deal-name" class="form-label">Contact Name</label>
                                        <input type="text" class="form-control" id="deal-name" placeholder="Contact Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="deal-lead-score" class="form-label">Deal Value</label>
                                        <input type="number" class="form-control" id="deal-lead-score" placeholder="Deal Value">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="company-name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Last Contacted</label>
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Create Deal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: New Deal -->


    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    @endsection


@push('scripts')
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- CRM Dashboard --> 
<script src="{{asset('assets/js/crm-dashboard.js')}}"></script>

@endpush