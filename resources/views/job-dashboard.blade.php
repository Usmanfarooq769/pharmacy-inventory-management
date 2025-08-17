@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Jobs</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="flex-fill fs-13 text-muted mb-2">Total Job Listings</div>
                                                <h4 class="fw-semibold mb-0">12,432</h4>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded bg-primary shadow-primary flex-shrink-0">
                                                <i class="ti ti-briefcase fs-18"></i>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2">Compare this month <span class="badge bg-success-transparent rounded-pill"><i class="ri-arrow-left-down-line fs-11"></i> 0.8%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="flex-fill fs-13 text-muted mb-2">Total Applications</div>
                                                <h4 class="fw-semibold mb-0">12,432</h4>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded bg-secondary shadow-secondary flex-shrink-0">
                                                <i class="ti ti-news fs-18"></i>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2">Compare this month <span class="badge bg-danger-transparent rounded-pill"><i class="ri-arrow-left-down-line fs-11"></i> 0.8%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="flex-fill fs-13 text-muted mb-2">Total Recruited</div>
                                                <h4 class="fw-semibold mb-0">12,432</h4>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded bg-success shadow-success flex-shrink-0">
                                                <i class="ti ti-user-check fs-18"></i>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2">Compare this month <span class="badge bg-success-transparent rounded-pill"><i class="ri-arrow-left-down-line fs-11"></i> 0.8%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="flex-fill fs-13 text-muted mb-2">Candidates Interviewed</div>
                                                <h4 class="fw-semibold mb-0">12,432</h4>
                                            </div>
                                            <div class="avatar avatar-md avatar-rounded bg-info shadow-info flex-shrink-0">
                                                <i class="ti ti-align-box-right-top fs-18"></i>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2">Compare this month <span class="badge bg-danger-transparent rounded-pill"><i class="ri-arrow-left-down-line fs-11"></i> 0.8%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Gender Analysis</div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="candidates-chart" class="p-3"></div>
                                        <div class="row row-cols-12 border-top border-block-start-dashed">
                                            <div class="col">
                                                <div class="p-3 border-end border-inline-end-dashed text-center mb-2">
                                                    <span class="avatar avatar-sm bg-primary-transparent mb-2">
                                                        <i class="ti ti-gender-female fs-18"></i>
                                                    </span>
                                                    <div class="text-muted fs-12 text-center mb-1">Female Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-3"> 
                                                        <div class="fs-22 fw-semibold">1,234</div> 
                                                        <span class="text-success fw-semibold"><i class="ri-arrow-up-s-fill align-middle me-1"></i>0.23%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3 text-center">
                                                    <span class="avatar avatar-sm bg-success-transparent mb-2">
                                                        <i class="ti ti-gender-male fs-18"></i>
                                                    </span>
                                                    <div class="text-muted fs-12 text-center mb-1">Male Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-3">
                                                        <div class="fs-22 fw-semibold">1,754</div> 
                                                        <span class="text-danger fw-semibold"><i class="ri-arrow-down-s-fill align-middle me-1"></i>0.11%</span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Recruitment Stats</div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pb-1">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-12">
                                                <div class="d-flex gap-3 align-items-center flex-wrap px-3">
                                                    <div class="avatar avatar-md bg-primary-transparent">
                                                        <i class="ti ti-news fs-18"></i>
                                                    </div>
                                                    <div class="">
                                                        <p class="mb-0 text-muted">Total Applications</p>
                                                        <p class="fs-20 fw-semibold mb-0">2,345</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="d-flex gap-3 align-items-center flex-wrap px-3">
                                                    <div class="avatar avatar-md bg-secondary-transparent">
                                                        <i class="ti ti-ban fs-18"></i>
                                                    </div>
                                                    <div class="">
                                                        <p class="mb-0 text-muted">Total Rejected</p>
                                                        <p class="fs-20 fw-semibold mb-0">465</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="salerevenue" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-primary avatar-rounded">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                    <g>
                                                        <path
                                                            d="M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z" />
                                                    </g>
                                                    <path
                                                        d="M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="mb-1 text-muted">Resume Upload Percentage</p>
                                        <div class="d-flex align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">58%</h5>
                                            <div class="text-success fw-semibold">+0.165%
                                                <i class="ri-arrow-up-line me-1 align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-lg p-1 progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-primary" style="width: 65%"></div>
                                </div>
                                <div class="d-flex align-items-center my-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-success avatar-rounded">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                    <g>
                                                        <path
                                                            d="M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z" />
                                                    </g>
                                                    <path
                                                        d="M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <p class="mb-1 text-muted">Total Candidate subscribed</p>
                                        <div class="d-flex align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">58%</h5>
                                            <div class="text-danger fw-semibold">+0.165%
                                                <i class="ri-arrow-up-line me-1 align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-lg p-1 progress-animate" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-success" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recent Jobs
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush" id="recent-jobs">
                                    <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary-transparent border border-primary border-opacity-10">
                                                        <i class="ti ti-briefcase fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Data Scientist</p>
                                                    <p class="fs-11 text-muted mb-0">Posted: Today, 2 hours ago</p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="badge bg-info-transparent">Experienced</span>
                                                    <p class="mb-0 mt-1 fs-12 fw-medium">22 <span class="text-muted fw-normal fs-10">Applied</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-start-0 border-end-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-secondary-transparent border border-secondary border-opacity-10">
                                                        <i class="ti ti-briefcase fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Product Manager</p>
                                                    <p class="fs-11 text-muted mb-0">Posted: Today, 3 hours ago</p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="badge bg-warning-transparent">Mid-Level</span>
                                                    <p class="mb-0 mt-1 fs-12 fw-medium">15 <span class="text-muted fw-normal fs-10">Applied</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-start-0 border-end-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-success-transparent border border-success border-opacity-10">
                                                        <i class="ti ti-briefcase fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Software Engineer</p>
                                                    <p class="fs-11 text-muted mb-0">Posted: Today, 4 hours ago</p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="badge bg-success-transparent">Fresher</span>
                                                    <p class="mb-0 mt-1 fs-12 fw-medium">30 <span class="text-muted fw-normal fs-10">Applied</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-start-0 border-end-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-info-transparent border border-info border-opacity-10">
                                                        <i class="ti ti-briefcase fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">UI/UX Designer</p>
                                                    <p class="fs-11 text-muted mb-0">Posted: Today, 5 hours ago</p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="badge bg-primary-transparent">Experienced</span>
                                                    <p class="mb-0 mt-1 fs-12 fw-medium">10 <span class="text-muted fw-normal fs-10">Applied</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-start-0 border-end-0 border-bottom-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center flex-wrap gap-1">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-pink-transparent border border-pink border-opacity-10">
                                                        <i class="ti ti-briefcase fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Product Manager</p>
                                                    <p class="fs-11 text-muted mb-0">Posted: Today, 3 hours ago</p>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <span class="badge bg-warning-transparent">Mid-Level</span>
                                                    <p class="mb-0 mt-1 fs-12 fw-medium">15 <span class="text-muted fw-normal fs-10">Applied</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Trending Job Applicants
                                </div>
                                <button class="btn btn-primary-light btn-sm">View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Applications</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Experience Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <p class="mb-1 fw-semibold">Alice Johnson</p>
                                                            <span class="fs-13 text-muted">Software Engineer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold fs-15">05</td>
                                                <td>
                                                    <span class="fw-medium text-success badge fs-11 bg-success-transparent">Full Stack Developer</span>
                                                </td>
                                                <td class="fw-medium">Mid-Level<br><span class="fs-11 text-muted fw-normal"> 3-5 years</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </div>  
                                                        <div>
                                                            <p class="mb-1 fw-semibold">James Smith</p>
                                                            <span class="fs-13 text-muted">Data Analyst</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold fs-15">03</td>
                                                <td>
                                                    <span class="fw-medium text-info badge fs-11 bg-info-transparent">Data Science</span>
                                                </td>
                                                <td class="fw-medium">Senior <br><span class="fs-11 text-muted fw-normal">5+ years</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <p class="mb-1 fw-semibold">Emily Davis</p>
                                                            <span class="fs-13 text-muted">UI/UX Designer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold fs-15">04</td>
                                                <td>
                                                    <span class="fw-medium text-primary badge fs-11 bg-primary-transparent">Product Design</span>
                                                </td>
                                                <td class="fw-medium">Entry-Level <br><span class="fs-11 text-muted fw-normal"> less than 2 years</span></td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="../assets/images/faces/16.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <p class="mb-1 fw-semibold">Michael Brown</p>
                                                            <span class="fs-13 text-muted">Frontend Developer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0 fw-semibold fs-15">02</td>
                                                <td class="border-bottom-0">
                                                    <span class="fw-medium text-secondary badge fs-11 bg-secondary-transparent">Web Development</span>
                                                </td>
                                                <td class="fw-medium">Junior<br><span class="fs-11 text-muted fw-normal">1-3 years</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Acquisitions
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-2 pt-1">
                                    <li class="mb-3">
                                        <div class="d-flex mb-2 gap-2 align-items-center justify-content-between">
                                            <p class="fw-medium mb-0">1. New Job Opportunities</p>
                                            <div class="text-success fs-11 fw-medium ms-auto"><span class="text-muted">Increase: </span> +5%</div>
                                        </div>
                                        <div class="progress progress-lg p-1 progress-animate">
                                            <div class="progress-bar fs-9 align-middle lh-1 progress-bar-striped bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> 
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex mb-2 gap-2 align-items-center justify-content-between">
                                            <p class="fw-medium mb-0">2. Skill Gaps</p>
                                            <div class="text-danger fs-11 ms-auto"><span class="text-muted">Decrease: </span>-2%</div>
                                        </div>
                                        <div class="progress progress-lg p-1 progress-animate">
                                            <div class="progress-bar fs-9 align-middle lh-1 progress-bar-striped bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> 
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex mb-2 gap-2 align-items-center justify-content-between">
                                            <p class="fw-medium mb-0">23. Employee Retention</p>
                                            <div class="text-success fs-11 ms-auto"><span class="text-muted">Increase: </span>+30%</div>
                                        </div>
                                        <div class="progress progress-lg p-1 progress-animate">
                                            <div class="progress-bar fs-9 align-middle lh-1 progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> 
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex mb-2 gap-2 align-items-center justify-content-between">
                                            <p class="fw-medium mb-0">4. Cultural Integration</p>
                                            <div class="text-success fs-11 ms-auto"><span class="text-muted">Increase: </span>+13%</div>
                                        </div>
                                        <div class="progress progress-lg p-1 progress-animate">
                                            <div class="progress-bar fs-9 align-middle lh-1 progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="d-flex mb-2 gap-2 align-items-center justify-content-between">
                                            <p class="fw-medium mb-0">5. Market Positioning</p>
                                            <div class="text-danger fs-11 ms-auto"><span class="text-muted">Decrease: </span>-16%</div>
                                        </div>
                                        <div class="progress progress-lg p-1 progress-animate">
                                            <div class="progress-bar fs-9 align-middle lh-1 progress-bar-striped bg-pink" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Registers By Country
                                </div>
                                <button class="btn btn-primary-light btn-sm">View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Country</th>
                                                <th scope="col">Registered</th>
                                                <th scope="col">% of Total</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/flags/us_flag.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold">
                                                                U.S.A
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="fw-medium">687</td>
                                                <td>
                                                    <span class="fw-medium text-success fs-12">25% <i class="ri-arrow-up-line lh-1 align-middle"></i></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/20.jpg" alt="">
                                                        </div>
                                                        <p class="mb-0 fw-medium">25 Users</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info-light btn-icon rounded-circle btn-sm"><i class="ri-arrow-right-up-line fs-14"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded border">
                                                                <img src="../assets/images/flags/canada_flag.jpg" alt="Canada Flag">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold">
                                                                Canada
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="fw-medium">550</td>
                                                <td>
                                                    <span class="fw-medium text-danger fs-12">20% <i class="ri-arrow-down-line lh-1 align-middle"></i></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/20.jpg" alt="User Image">
                                                        </div>
                                                        <p class="mb-0 fw-medium">30 Users</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info-light btn-icon rounded-circle btn-sm"><i class="ri-arrow-right-up-line fs-14"></i></button>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded border">
                                                                <img src="../assets/images/flags/germany_flag.jpg" alt="Germany Flag">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold">
                                                                Germany
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="fw-medium">590</td>
                                                <td>
                                                    <span class="fw-medium text-success fs-12">18% <i class="ri-arrow-up-line lh-1 align-middle"></i></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/20.jpg" alt="User Image">
                                                        </div>
                                                        <p class="mb-0 fw-medium">22 Users</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info-light btn-icon rounded-circle btn-sm"><i class="ri-arrow-right-up-line fs-14"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded border">
                                                                <img src="../assets/images/flags/french_flag.jpg" alt="France Flag">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold">
                                                                France
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="fw-medium">1,200</td>
                                                <td>
                                                    <span class="fw-medium text-danger fs-12">30% <i class="ri-arrow-down-line lh-1 align-middle"></i></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/20.jpg" alt="User Image">
                                                        </div>
                                                        <p class="mb-0 fw-medium">100 Users</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info-light btn-icon rounded-circle btn-sm"><i class="ri-arrow-right-up-line fs-14"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded border">
                                                                <img src="../assets/images/flags/uae_flag.jpg" alt="U.A.E Flag">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold">
                                                                U.A.E
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="fw-medium">800</td>
                                                <td>
                                                    <span class="fw-medium text-danger fs-12">12% <i class="ri-arrow-down-line lh-1 align-middle"></i></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/20.jpg" alt="User Image">
                                                        </div>
                                                        <p class="mb-0 fw-medium">50 Users</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info-light btn-icon rounded-circle btn-sm"><i class="ri-arrow-right-up-line fs-14"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    New Applicants Overview
                                </div>
                                <div class="d-flex flex-wrap gap-1">
                                    <div class="me-2">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <div class="card-body pb-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Applicant Name</th> 
                                                <th scope="col">Role Category</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Contact Email</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Actions</th>
                                            </tr>                                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>kiran Sharma
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Development</span></td>
                                                <td><span class="fw-medium">Senior Developer</span></td>
                                                <td>kiransharma@example.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center">
                                                        <i class="ri-map-pin-line text-pink"></i>
                                                        <span class="ms-1">Canada</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning">Part Time</span></td>
                                                <td>15 Nov 2024</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light"><i class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Priya Singh
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-secondary-transparent">Marketing</span></td>
                                                <td><span class="fw-medium">Marketing Manager</span></td>
                                                <td>priyasingh@example.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center">
                                                        <i class="ri-map-pin-line text-pink"></i>
                                                        <span class="ms-1">Australia</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success">Full Time</span></td>
                                                <td>30 Dec 2024</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light"><i class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">03</th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                        </span>Ravi Kumar
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Design</span></td>
                                                <td><span class="fw-medium">Graphic Designer</span></td>
                                                <td>ravikumar@example.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center">
                                                        <i class="ri-map-pin-line text-pink"></i>
                                                        <span class="ms-1">India</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger">Intern</span></td>
                                                <td>31 Dec 2024</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light"><i class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">04</th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-medium">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                        </span>Mohammed Ali
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent">HR, Manager</span></td>
                                                <td><span class="fw-medium">HR Specialist</span></td>
                                                <td>mohammedali@example.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center">
                                                        <i class="ri-map-pin-line text-pink"></i>
                                                        <span class="ms-1">UAE</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-secondary">Contract</span></td>
                                                <td>05 Nov 2024</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light"><i class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between border-bottom-0">
                                <div class="card-title">
                                    Top Firms
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
                            <div class="card-body p-0">
                                <div class="list-group rounded-top-0">
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-primary bg-opacity-10 border border-primary border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/9.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">Synergy Group</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 400
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 2024
                                        </p>
                                    </div>
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-info bg-opacity-10 border border-info border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/4.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">Tech Solutions Inc.</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 648
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 1999
                                        </p>
                                    </div>
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-secondary bg-opacity-10 border border-secondary border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/5.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">Innovatech Ltd.</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 150
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 2020
                                        </p>
                                    </div>
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-success bg-opacity-10 border border-success border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/7.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">Global Tech Corp.</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 500
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 2022
                                        </p>
                                    </div>
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-primary bg-opacity-10 border border-primary border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/8.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">Future Innovations LLC</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 250
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 2024
                                        </p>
                                    </div>
                                    <div class="list-group-item d-flex gap-2 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md p-1 bg-danger bg-opacity-10 border border-danger border-opacity-25 avatar-rounded">
                                                    <img src="../assets/images/company-logos/6.png" alt="Company Logo">
                                                </span>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0">NextGen Systems</p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted">Employees:</span> 75
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-muted">Since:</span> 2024
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->


    
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

    <!-- Jobs-Dashboard -->
    <script src="{{asset('assets/js/jobs-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
@endpush

  