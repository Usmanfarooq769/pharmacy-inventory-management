@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Courses</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="course-card">
                                        <div class="p-4 ps-0 pb-0">
                                            <div class="d-flex gap-2 justify-content-between align-items-center flex-wrap">
                                                <div>
                                                    <img src="../assets/images/media/media-66.png" alt="" class="img-fluid course-card-img"> 
                                                </div>
                                                <div class="flex-grow-1 text-end">
                                                    <h5 class="fw-semibold mb-2 fs-18">Hi, Welcome Back, <span class="text-primary">Ashwin Seth! </span></h5> 
                                                    <p class="text-muted text-wrap">You're just 10% away from completing your goal<br> this month!
                                                        Explore more courses today.</p> 
                                                    <button type="button" class="btn btn-primary btn-w-md mb-3 mt-2">View Courses</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <div class="align-middle text-muted mb-1">Total Earnings</div>
                                                        <div class="d-flex gap-2 flex-wrap align-items-center">
                                                            <div class="fs-20 fw-semibold text-primary">8.56k</div>
                                                            <span class="badge bg-success-transparent text-success rounded-pill"><i class="fa fa-caret-up me-2"></i>0.25%</span>
                                                        </div>
                                                    </div>
                                                    <div class="avatar avatar-md rounded-4 bg-primary shadow shadow-primary text-fixed-white">
                                                        <i class="ti ti-currency-dollar fs-18"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <div class="align-middle text-muted mb-1">Total Students</div>
                                                        <div class="d-flex gap-2 flex-wrap align-items-center">
                                                            <span class="fs-20 fw-semibold text-secondary">1.56k</span>
                                                            <span class="badge bg-success-transparent text-success rounded-pill"><i class="fa fa-caret-up me-2"></i>0.25%</span>
                                                        </div>
                                                    </div>
                                                    <div class="avatar avatar-md rounded-4 bg-secondary shadow shadow-secondary text-fixed-white">
                                                        <i class="ti ti-school fs-18"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <div class="align-middle text-muted mb-1">Total Instructors</div>
                                                        <div class="d-flex gap-2 flex-wrap align-items-center">
                                                            <div class="fs-20 fw-semibold text-success">7.3k</div>
                                                            <span class="badge bg-danger-transparent text-danger rounded-pill"><i class="fa fa-caret-down me-2"></i>0.25%</span>
                                                        </div>
                                                    </div>
                                                    <div class="avatar avatar-md rounded-4 bg-success shadow shadow-success text-fixed-white">
                                                        <i class="ti ti-user-circle fs-18"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <div class="align-middle text-muted mb-1">Total Courses</div>
                                                        <div class="d-flex gap-2 flex-wrap align-items-center">
                                                            <div class="fs-20 fw-semibold text-info">8.56k</div>
                                                            <span class="badge bg-danger-transparent text-danger rounded-pill"><i class="fa fa-caret-down me-2"></i>0.25%</span>
                                                        </div>
                                                    </div>
                                                    <div class="avatar avatar-md rounded-4 bg-info shadow shadow-info text-fixed-white">
                                                        <i class="ti ti-book-2 fs-18"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Top Instructors</div>
                                        <button type="button" class="btn btn-light btn-sm">View All</button>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled courses-instructors mb-0">
                                            <li class="mb-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-primary bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Emily Clark</div>
                                                            <span class="text-muted fs-12">Ph.D(Computer Science)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">4.8/5</p>
                                                        <span>36</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-primary bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Jane Smith</div>
                                                            <span class="text-muted fs-12">M.S(Artificial Intelligence)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">4.1/5</p>
                                                        <span>45</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-success bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/8.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Trex Con</div>
                                                            <span class="text-muted fs-12">MBA (Data Analytics)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">4.0/5</p>
                                                        <span>28</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-primary bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">David Lee</div>
                                                            <span class="text-muted fs-12">Ph.D(Machine Learning)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">4.5/5</p>
                                                        <span>25</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-warning bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/5.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Mortal Yun</div>
                                                            <span class="text-muted fs-12">MBA (Data Analytics)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">4.5/5</p>
                                                        <span>34</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md p-1 bg-danger bg-opacity-25 avatar-rounded">
                                                                <img src="../assets/images/faces/15.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Ion Hau</div>
                                                            <span class="text-muted fs-12">M.B.A(Data Science)</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="text-success mb-0 fw-semibold">3.8/5</p>
                                                        <span>22</span>
                                                        <span class="text-muted">Courses</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Earnings Report</div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary btn-sm btn-wave">1M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">All</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="courses-earnings"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Financial Summary
                                </div>
                                <div>
                                    <button type="button" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-download-line"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center gap-2 p-2 border border-dashed rounded-2">
                                    <div>
                                      <span class="avatar avatar-md  bg-pink bg-opacity-10 text-pink">
                                        <i class="ti ti-wallet fs-20"></i>
                                      </span>
                                    </div>
                                    <div>
                                      <p class="mb-0">Your Balance</p>
                                    </div>
                                    <h5 class="fw-semibold mb-0 ms-auto">
                                        $66,784.00  
                                    </h5>
                                  </div>
                                <div id="financial-summary"></div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center gap-3 p-3 border border-primary border-dashed border-opacity-10 rounded bg-light bg-opacity-50 flex-wrap">
                                    <div class="flex-fill d-flex gap-2 align-items-center">
                                        <div class="avatar avatar-lg bg-success bg-opacity-25 avatar-rounded">
                                            <div class="avatar avatar-md bg-primary avatar-rounded">
                                                <i class="ri-opera-fill fs-5"></i>
                                            </div>
                                        </div>  
                                        <div>
                                            <div class="fw-medium mb-0">New Visitors </div> 
                                            <div class="fw-semibold fs-20">
                                                6,986
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-end ms-auto">
                                        <div id="new-visitors"></div>
                                        <div class="d-flex gap-2 align-items-center mt-3">
                                            <span class="fs-11 fw-medium text-success d-block"><i class="ti ti-arrow-up"></i>2.95%</span>
                                            <span class="fw-medium fs-11 text-muted"> Last Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Monthly Payout Overview
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div id="course-payouts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    New Students
                                </div>
                                <div>
                                    <button type="button" class="btn btn-sm btn-light">View All</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/faces/13.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Richard Dom</div>
                                                            <div class="fw-normal text-muted">richarddom1116@demo.com</div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="">9 Courses</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15 justify-content-end">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-success-transparent"><i class="ri-edit-line me-1"></i> Edit</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-danger-transparent btn-icon"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Alex Johnson</div>
                                                            <div class="fw-normal text-muted">alexjohnson2024@demo.com</div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="">5 Courses</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15 justify-content-end">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-success-transparent"><i class="ri-edit-line me-1"></i> Edit</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-danger-transparent btn-icon"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/faces/14.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Emma Watson</div>
                                                            <div class="fw-normal text-muted">emmawatson2023@demo.com</div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="">7 Courses</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15 justify-content-end">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-success-transparent"><i class="ri-edit-line me-1"></i> Edit</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-danger-transparent btn-icon"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/faces/7.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Michael Brown</div>
                                                            <div class="fw-normal text-muted">michaelbrown@demo.com</div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="">12 Courses</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15 justify-content-end">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-success-transparent"><i class="ri-edit-line me-1"></i> Edit</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-danger-transparent btn-icon"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="fw-semibold">Sophia Lee</div>
                                                            <div class="fw-normal text-muted">sophialee789@demo.com</div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="">3 Courses</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15 justify-content-end">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-success-transparent"><i class="ri-edit-line me-1"></i> Edit</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-danger-transparent btn-icon"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Trending Courses
                                </div>
                                <div>
                                    <button type="button" class="btn btn-light btn-sm">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled courses-instructors mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex gap-3 flex-fill align-items-center latest-courses flex-wrap">
                                                <img src="../assets/images/media/media-1.jpg" alt="">
                                                <div>
                                                    <div class="fw-semibold mb-1">UI/UX Designing</div>
                                                    <span class="text-muted fs-12">Category:</span><span class="badge bg-primary-transparent ms-1 rounded-pill"> Computer Science</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center justify-content-between flex-fill">
                                                <div>
                                                    <p class="mb-0 fw-semibold">45</p>
                                                    <span>Classes</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="text-success mb-0 fs-14">$25</p>
                                                    <span class="fs-12 text-muted">Costs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex gap-3 flex-fill align-items-center latest-courses flex-wrap">
                                                <img src="../assets/images/media/media-2.jpg" alt="Course Image">
                                                <div>
                                                    <div class="fw-semibold mb-1">3D Modeling with CAD Software</div>
                                                    <span class="text-muted fs-12">Category:</span><span class="badge bg-warning-transparent ms-1 rounded-pill">CAD & Design</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center justify-content-between flex-fill">
                                                <div>
                                                    <p class="mb-0 fw-semibold">72</p>
                                                    <span>Classes</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="text-success mb-0 fs-14">$40</p>
                                                    <span class="fs-12 text-muted">Course Fee</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex gap-3 flex-fill align-items-center latest-courses flex-wrap">
                                                <img src="../assets/images/media/media-3.jpg" alt="Course Image">
                                                <div>
                                                    <div class="fw-semibold mb-1">Advanced CAD for Architecture</div>
                                                    <span class="text-muted fs-12">Category:</span><span class="badge bg-info-transparent ms-1 rounded-pill">Architecture</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center justify-content-between flex-fill">
                                                <div>
                                                    <p class="mb-0 fw-semibold">54</p>
                                                    <span>Classes</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="text-success mb-0 fs-14">$55</p>
                                                    <span class="fs-12 text-muted">Course Fee</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex gap-3 flex-fill align-items-center latest-courses flex-wrap">
                                                <img src="../assets/images/media/media-4.jpg" alt="Course Image">
                                                <div>
                                                    <div class="fw-semibold mb-1">CAD for Mechanical Engineering</div>
                                                    <span class="text-muted fs-12">Category:</span><span class="badge bg-success-transparent ms-1 rounded-pill">Engineering</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center justify-content-between flex-fill">
                                                <div>
                                                    <p class="mb-0 fw-semibold">88</p>
                                                    <span>Classes</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="text-success mb-0 fs-14">$60</p>
                                                    <span class="fs-12 text-muted">Course Fee</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex gap-3 flex-fill align-items-center latest-courses flex-wrap">
                                                <img src="../assets/images/media/media-2.jpg" alt="Course Thumbnail" class="rounded">
                                                <div>
                                                    <div class="fw-semibold mb-1">Advanced Web Development</div>
                                                    <span class="text-muted fs-12">Category:</span>
                                                    <span class="badge bg-secondary-transparent ms-1 rounded-pill"> Programming</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center justify-content-between flex-fill">
                                                <div>
                                                    <p class="mb-0 fw-semibold">50</p>
                                                    <span>Modules</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="text-success mb-0 fs-14">$50</p>
                                                    <span class="fs-12 text-muted">Price</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    All Courses
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown m-1">
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
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Classes</th>
                                                <th scope="col">Last Updated</th>
                                                <th scope="col">Instructor</th>
                                                <th scope="col">Students</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-1.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>Introduction to 3D CAD Modeling</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">CAD & Design</span>
                                                </td>
                                                <td>
                                                    45
                                                </td>
                                                <td>
                                                    15-06-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="">
                                                        </span>
                                                        Alex J. Carter
                                                    </div>
                                                </td>
                                                <td>
                                                    30
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-2.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>Advanced CAD for Mechanical Engineering</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">Engineering</span>
                                                </td>
                                                <td>
                                                    55
                                                </td>
                                                <td>
                                                    10-07-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="">
                                                        </span>
                                                        Maria L. Benson
                                                    </div>
                                                </td>
                                                <td>
                                                    40
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-3.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>Architectural Design with CAD</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Architecture</span>
                                                </td>
                                                <td>
                                                    40
                                                </td>
                                                <td>
                                                    23-08-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="">
                                                        </span>
                                                        John M. Roberts
                                                    </div>
                                                </td>
                                                <td>
                                                    60
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-4.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>Introduction to Civil Engineering CAD</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-info-transparent">Civil Engineering</span>
                                                </td>
                                                <td>
                                                    30
                                                </td>
                                                <td>
                                                    12-09-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="">
                                                        </span>
                                                        Emily P. Granger
                                                    </div>
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-5.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>Basics of Electrical Engineering with CAD</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Electrical Engineering</span>
                                                </td>
                                                <td>
                                                    35
                                                </td>
                                                <td>
                                                    01-10-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="">
                                                        </span>
                                                        Samuel L. Brooks
                                                    </div>
                                                </td>
                                                <td>
                                                    45
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/media/media-1.jpg" alt="Course Image">
                                                            </span>
                                                        </div>
                                                        <div>CAD for Product Design and Prototyping</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-purple-transparent">Product Design</span>
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                    18-11-2023
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="">
                                                        </span>
                                                        Olivia R. Simmons
                                                    </div>
                                                </td>
                                                <td>
                                                    55
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-wrap align-items-center">
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

    <!-- Courses Dashboard --> 
    <script src="{{asset('assets/js/courses-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 
    @endpush