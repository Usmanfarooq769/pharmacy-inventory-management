@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">School</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">School</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

               <!-- Start::Row-1 -->
                <div class="row">
                    <div class="col-sm-6 col-xxl">
                        <div class="card custom-card school-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="avatar avatar-md bg-primary avatar-rounded shadow shadow-primary mb-3">
                                            <i class="ti ti-school fs-5"></i>
                                        </div>
                                        <div>
                                            <p class="mb-1">Total Students</p>
                                            <h4 class="mb-0 fw-semibold">69,325</h4>
                                        </div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="text-success fw-semibold fs-12 mb-0">+ 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div class="chart-cards">
                                    <div id="schl-chart1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl">
                        <div class="card custom-card school-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="avatar avatar-md bg-secondary avatar-rounded shadow shadow-secondary mb-3">
                                            <i class="ti ti-user-circle fs-5"></i>
                                        </div>
                                        <div>
                                            <p class="mb-1">Total Teachers</p>
                                            <h4 class="mb-0 fw-semibold">2,658</h4>
                                        </div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="text-danger fw-semibold fs-12 mb-0">- 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div class="chart-cards">
                                    <div id="schl-chart2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl">
                        <div class="card custom-card school-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="avatar avatar-md bg-success avatar-rounded shadow shadow-success mb-3">
                                            <i class="ti ti-id fs-5"></i>
                                        </div>
                                        <div>
                                            <p class="mb-1">Total Staff</p>
                                            <h4 class="mb-0 fw-semibold">3,266</h4>
                                        </div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="text-danger fw-semibold fs-12 mb-0">- 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div class="chart-cards">
                                    <div id="schl-chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl">
                        <div class="card custom-card school-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="avatar avatar-md bg-info avatar-rounded shadow shadow-info mb-3">
                                            <i class="ti ti-moneybag fs-5"></i>
                                        </div>
                                        <div>
                                            <p class="mb-1">Total Revenue</p>
                                            <h4 class="mb-0 fw-semibold">$88,357</h4>
                                        </div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <span class="text-success fw-semibold fs-12 mb-0">+ 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div class="chart-cards">
                                    <div id="schl-chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::Row-1 -->

                <!-- Start::Row-2 -->
				<div class="row">
                    <div class="col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Total Earnings
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" > Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body ps-2 pb-0 text-center"> 
                                <div class="d-inline-flex flex-wrap align-items-start gap-2 me-lg-5 me-sm-3 ps-lg-5 mb-3">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-primary-transparent">
                                            <i class="ti ti-coins fs-19 lh-1"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div class="text-muted">Total Income</div>
                                        <h5 class="fw-semibold mt-1 mb-0 lh-1">$56,897</h5>
                                    </div>
                                    <div class="text-end ms-auto align-self-end">
                                        <span class="text-success fw-semibold fs-12 mb-0">+ 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div class="d-inline-flex flex-wrap align-items-start gap-2 me-xl-5">
                                    <div class="lh-1">
                                        <span class="avatar avatar-lg bg-success-transparent">
                                            <i class="ti ti-coins fs-19 lh-1"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div class="text-muted">Total Expenses</div>
                                        <h5 class="fw-semibold mt-1 mb-0 lh-1">$35,578</h5>
                                    </div>
                                    <div class="text-end ms-auto align-self-end">
                                        <span class="text-danger fw-semibold fs-12 mb-0">- 2.10%</span>
                                        <span class="text-muted fw-medium fs-12">last month</span>
                                    </div>
                                </div>
                                <div id="audienceMetric"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Today's Acitivity List
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-default"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-teal-transparent">
                                                <i class="ri-tools-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Science Workshop</p>
                                                <span class="text-muted">6th to 10th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>09:00 AM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>11:00 AM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">50 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-purple-transparent">
                                                <i class="ri-infinity-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Math Olympiad</p>
                                                <span class="text-muted">8th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>10:00 AM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>12:00 PM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">30 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-orange-transparent">
                                                <i class="ri-image-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Art Exhibition</p>
                                                <span class="text-muted">7th to 12th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>01:00 PM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>03:00 PM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">40 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-info-transparent">
                                                <i class="ri-volume-up-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Literature Debate</p>
                                                <span class="text-muted">9th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>02:30 PM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>04:00 PM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">20 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-secondary-transparent">
                                                <i class="ri-run-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Sports Meet</p>
                                                <span class="text-muted">All Standards</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>03:00 PM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>05:00 PM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">100+ Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-2 flex-wrap mb-1">
                                            <span class="avatar avatar-md bg-primary-transparent">
                                                <i class="ri-question-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">History Quiz</p>
                                                <span class="text-muted">9th to 12th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="min-w-fit-content d-flex align-items-center text-muted">
                                                    <span><i class="fe fe-clock me-1"></i></span>
                                                    <span>12:30 PM</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>01:30 PM</span>
                                                </div>
                                                <div class="text-end mt-1">
                                                    <span class="badge bg-success-transparent">40 Students</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- End::Row-2 -->

				<!-- Start::Row-3 -->
				<div class="row">
                    <div class="col-xxl-5">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Teachers List
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-default"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap teachers-list">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-light">Teacher</th>
                                                <th scope="col" class="bg-light">Subject</th>
                                                <th scope="col" class="bg-light">Qualification</th>
                                                <th scope="col" class="bg-light">Experience</th>
                                                <th scope="col" class="bg-light">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/16.jpg" alt="Alice Walker" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">Alice Walker</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-orange-transparent">Geography</div>
                                                </td>
                                                <td><span class="fw-semibold">M.A. Geography</span></td>
                                                <td><span class="text-muted">4 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/11.jpg" alt="John Smith" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">John Smith</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-success-transparent">Mathematics</div>
                                                </td>
                                                <td><span class="fw-semibold">M.Ed</span></td>
                                                <td><span class="text-muted">2 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/2.jpg" alt="Emily Adams" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">Emily Adams</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-primary-transparent">Science</div>
                                                </td>
                                                <td><span class="fw-semibold">M.Sc</span></td>
                                                <td><span class="text-muted">5 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/13.jpg" alt="Mark Johnson" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">Mark Johnson</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-warning-transparent">History</div>
                                                </td>
                                                <td><span class="fw-semibold">Ph.D.</span></td>
                                                <td><span class="text-muted">8 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/1.jpg" alt="Sarah Lee" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">Sarah Lee</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-info-transparent">English</div>
                                                </td>
                                                <td><span class="fw-semibold">B.A. English</span></td>
                                                <td><span class="text-muted">3 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/15.jpg" alt="David Brown" class="avatar avatar-sm avatar-rounded">
                                                        <a href="javascript:void(0);" class="fw-medium">David Brown</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-pink-transparent">Physics</div>
                                                </td>
                                                <td><span class="fw-semibold">B.P.Ed</span></td>
                                                <td><span class="text-muted">6 yrs</span></td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-pencil-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
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
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Attendance
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div id="attendance"></div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="fw-semibold"><i class="ri-gradienter-fill fs-15 text-primary lh-1 me-2"></i>Students Present</div>
                                            <div class="fw-semibold">
                                                <span class="text-success fs-11 fw-medium me-2"><i class="ti ti-arrow-up alilgn-middle me-1"></i>0.56%</span>
                                                800
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="fw-semibold"><i class="ri-gradienter-fill fs-15 text-success lh-1 me-2"></i>Students Absent</div>
                                            <div class="fw-semibold">
                                                <span class="text-success fs-11 fw-medium me-2"><i class="ti ti-arrow-up alilgn-middle me-1"></i>4.23%</span>
                                                300
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="fw-semibold"><span class="text-primary"><i class="ri-gradienter-fill fs-15 lh-1 me-2 op-2"></i></span>On Leave</div>
                                            <div class="fw-semibold">
                                                <span class="text-danger fs-11 fw-medium me-2"><i class="ti ti-arrow-down alilgn-middle me-1"></i>6.88%</span>
                                                347
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Star Students
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-default"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="bg-light">S.ID</th>
                                                <th class="bg-light">Student</th>
                                                <th class="bg-light">Marks %</th>
                                                <th class="bg-light">GPA</th>
                                                <th class="bg-light">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">#1123</td>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </a>
                                                        <div>
                                                            <a href="javascript:void(0);">Sophia Davis</a><br>
                                                            <span class="text-muted fs-11">X-A</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold text-success">92%</td>
                                                <td class="">9.2</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-eye-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="">#1124</td>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </a>
                                                        <div>
                                                            <a href="javascript:void(0);">Liam Johnson</a><br>
                                                            <span class="text-muted fs-11">X-A</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold text-success">89%</td>
                                                <td class="">8.9</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-eye-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="">#1125</td>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </a>
                                                        <div>
                                                            <a href="javascript:void(0);">Emma Wilson</a><br>
                                                            <span class="text-muted fs-11">IX-C</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold text-success">87%</td>
                                                <td class="">8.7</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-eye-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">#1126</td>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </a>
                                                        <div>
                                                            <a href="javascript:void(0);">Olivia Martinez</a><br>
                                                            <span class="text-muted fs-11">X-B</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold text-success">95%</td>
                                                <td class="">9.5</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-eye-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">#1127</td>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                        </a>
                                                        <div>
                                                            <a href="javascript:void(0);">Mason Brown</a><br>
                                                            <span class="text-muted fs-11">IX-A</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fw-semibold text-success">90%</td>
                                                <td class="">9.0</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle">
                                                            <i class="ri-eye-line lh-1 align-middle"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle">
                                                            <i class="ri-delete-bin-line lh-1 align-middle"></i>
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
				<!-- End::Row-3 -->

				<!-- Start::Row-4 -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between border-bottom-0">
                                <div class="card-title">
                                    Students Fee Details
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Standard</th>
                                                <th>Total Fee</th>
                                                <th>Status</th>
                                                <th>Paid</th>
                                                <th>Pending</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>Sophia Davis</td>
                                                <td>X-A</td>
                                                <td>$1000</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>$800</td>
                                                <td>$200</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary-light">
                                                            <i class="ri-eye-line lh-1 align-middle"></i> View
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary-light">
                                                            <i class="ri-edit-line lh-1 align-middle"></i> Update
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#1235</td>
                                                <td>Liam Johnson</td>
                                                <td>X-A</td>
                                                <td>$1000</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>$1000</td>
                                                <td>$0</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary-light">
                                                            <i class="ri-eye-line lh-1 align-middle"></i> View
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary-light">
                                                            <i class="ri-edit-line lh-1 align-middle"></i> Update
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#1236</td>
                                                <td>Emma Wilson</td>
                                                <td>IX-C</td>
                                                <td>$150</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>$150</td>
                                                <td>$0</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary-light">
                                                            <i class="ri-eye-line lh-1 align-middle"></i> View
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary-light">
                                                            <i class="ri-edit-line lh-1 align-middle"></i> Update
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#1237</td>
                                                <td>Olivia Martinez</td>
                                                <td>X-B</td>
                                                <td>$200</td>
                                                <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                <td>$150</td>
                                                <td>$50</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary-light">
                                                            <i class="ri-eye-line lh-1 align-middle"></i> View
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary-light">
                                                            <i class="ri-edit-line lh-1 align-middle"></i> Update
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#1238</td>
                                                <td>Mason Brown</td>
                                                <td>IX-A</td>
                                                <td>$50</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>$50</td>
                                                <td>$0</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary-light">
                                                            <i class="ri-eye-line lh-1 align-middle"></i> View
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary-light">
                                                            <i class="ri-edit-line lh-1 align-middle"></i> Update
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center rounded">
                                    <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i> </div>
                                    <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0 gap-1">
                                            <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Exam Results
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <span class="avatar avatar-md bg-primary-transparent">
                                                <i class="ri-pencil-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Half Yearly Exams</p>
                                                <span class="text-muted">6th to 10th Standard</span>
                                            </div>
                                            <div class="ms-auto">
                                               <div class="btn btn-light btn-sm"><i class="ri-download-cloud-2-line me-1"></i> Download Results</div>
                                            </div>
                                        </div>
                                        <div class="progress progress-lg p-1">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <span class="avatar avatar-md bg-success-transparent">
                                                <i class="ri-pencil-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Annual Exam Results</p>
                                                <span class="text-muted">10th Standard - Science Stream</span>
                                            </div>
                                            <div class="ms-auto">
                                               <div class="btn btn-light btn-sm"><i class="ri-download-cloud-2-line me-1"></i> Download Results</div>
                                            </div>
                                        </div>
                                        <div class="progress progress-lg p-1">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <span class="avatar avatar-md bg-blue-transparent">
                                                <i class="ri-pencil-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Mid-Term Exam Results</p>
                                                <span class="text-muted">9th Standard - Mathematics</span>
                                            </div>
                                            <div class="ms-auto">
                                               <div class="btn btn-light btn-sm"><i class="ri-download-cloud-2-line me-1"></i> Download Results</div>
                                            </div>
                                        </div>
                                        <div class="progress progress-lg p-1">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex align-items-start gap-2 mb-3 flex-wrap">
                                            <span class="avatar avatar-md bg-orange-transparent">
                                                <i class="ri-pencil-fill fs-18"></i>
                                            </span>
                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                <p class="mb-sm-1 mb-0 fw-medium">Unit Test Results</p>
                                                <span class="text-muted">8th Standard - English</span>
                                            </div>
                                            <div class="ms-auto">
                                               <div class="btn btn-light btn-sm"><i class="ri-download-cloud-2-line me-1"></i> Download Results</div>
                                            </div>
                                        </div>
                                        <div class="progress progress-lg p-1">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-orange" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-4 -->

        <!-- Footer End -->
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

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- School Dashboard JS -->
    <script src="{{asset('assets/js/school-dashboard.js')}}"></script>

    @endpush
