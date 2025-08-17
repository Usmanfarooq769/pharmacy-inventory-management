@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">HRM</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">HRM</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card hrm-main-card primary">
                                    <div class="card-body">
                                        <div class="d-flex gap-3">
                                            <div class="avatar bg-primary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                                <i class="ti ti-users fs-20"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium text-muted mb-2">Total Employees</p>
                                                <h4 class="fw-semibold mb-2">22,124</h4>
                                                <div>
                                                    <span class="text-success fw-semibold"> 1.8% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card hrm-main-card secondary">
                                    <div class="card-body">
                                        <div class="d-flex gap-3">
                                            <div class="avatar bg-secondary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                                <i class="ti ti-user-x fs-20"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium text-muted mb-2">Employees On Leave</p>
                                                <h4 class="fw-semibold mb-2">1,457</h4>
                                                <div>
                                                    <span class="text-danger fw-semibold"> 0.7% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card  hrm-main-card success">
                                    <div class="card-body">
                                        <div class="d-flex gap-3">
                                            <div class="avatar bg-success mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                                <i class="ti ti-heart-handshake fs-20"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium text-muted mb-2">Total Clients</p>
                                                <h4 class="fw-semibold mb-2">6,983</h4>
                                                <div>
                                                    <span class="text-success fw-semibold"> 1.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card  hrm-main-card info">
                                    <div class="card-body">
                                        <div class="d-flex gap-3">
                                            <div class="avatar bg-info mb-3 avatar-rounded shadow-sm flex-shrink-0">
                                                <i class="ti ti-id-badge-2 fs-20"></i>
                                            </div>
                                            <div>
                                                <p class="fw-medium text-muted mb-2">New Employee</p>
                                                <h4 class="fw-semibold mb-2">2,542</h4>
                                                <div>
                                                    <span class="text-danger fw-semibold"> 0.5% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                    <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between align-items-center d-sm-flex d-block">
                                        <div class="card-title mb-sm-0 mb-2">
                                            Performance By Category
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                            <button type="button" class="btn btn-primary btn-sm btn-wave">1Y</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="performanceReport"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between align-items-center d-sm-flex d-block">
                                        <div class="card-title mb-sm-0 mb-2">
                                            Employee Performance
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">View All</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="bg-light">Name</th>
                                                        <th scope="col" class="bg-light">Score</th>
                                                        <th scope="col" class="bg-light">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center lh-1">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="../assets/images/faces/2.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-semibold mb-1">Diana Aise</span>
                                                                    <span class="d-block text-muted fs-12">C.E.O</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 hrm-small-charts">
                                                                <span class="fs-12 text-muted">Score %:</span>
                                                                <span class="fw-semibold fs-14">40%</span>
                                                                <div id="employee01"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <button aria-label="button" type="button" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                                <button aria-label="button" type="button" class="btn btn-sm btn-success-light btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center lh-1">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="../assets/images/faces/3.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-semibold mb-1">Michael</span>
                                                                    <span class="d-block text-muted fs-12">HR Manager</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 hrm-small-charts">
                                                                <span class="fs-12 text-muted">Score %:</span>
                                                                <span class="fw-semibold fs-14">72%</span>
                                                                <div id="employee02"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <button aria-label="Edit" type="button" class="btn btn-sm btn-primary-light btn-icon">
                                                                    <i class="ri-pencil-line"></i>
                                                                </button>
                                                                <button aria-label="Delete" type="button" class="btn btn-sm btn-success-light btn-icon">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center lh-1">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-semibold mb-1">Sarah JEn</span>
                                                                    <span class="d-block text-muted fs-12">MD(Marketing)</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 hrm-small-charts">
                                                                <span class="fs-12 text-muted">Score %:</span>
                                                                <span class="fw-semibold fs-14">66%</span>
                                                                <div id="employee03"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <button aria-label="Edit" type="button" class="btn btn-sm btn-primary-light btn-icon">
                                                                    <i class="ri-pencil-line"></i>
                                                                </button>
                                                                <button aria-label="Delete" type="button" class="btn btn-sm btn-success-light btn-icon">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center lh-1">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="../assets/images/faces/5.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-semibold mb-1">David Lee</span>
                                                                    <span class="d-block text-muted fs-12">Software Engineer</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 hrm-small-charts">
                                                                <span class="fs-12 text-muted">Score %:</span>
                                                                <span class="fw-semibold fs-14">72%</span>
                                                                <div id="employee04"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <button aria-label="Edit" type="button" class="btn btn-sm btn-primary-light btn-icon">
                                                                    <i class="ri-pencil-line"></i>
                                                                </button>
                                                                <button aria-label="Delete" type="button" class="btn btn-sm btn-success-light btn-icon">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center lh-1">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="../assets/images/faces/6.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block fw-semibold mb-1">Emma Brown</span>
                                                                    <span class="d-block text-muted fs-12">Sales Associate</span>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 hrm-small-charts">
                                                                <span class="fs-12 text-muted">Score %:</span>
                                                                <span class="fw-semibold fs-14">72%</span>
                                                                <div id="employee05"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <button aria-label="Edit" type="button" class="btn btn-sm btn-primary-light btn-icon">
                                                                    <i class="ri-pencil-line"></i>
                                                                </button>
                                                                <button aria-label="Delete" type="button" class="btn btn-sm btn-success-light btn-icon">
                                                                    <i class="ri-delete-bin-line"></i>
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
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body text-center hrm-event-content">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <p class="fw-semibold mb-2 fs-15">
                                            Upcoming Company Event
                                        </p>
                                        <p class="text-muted fs-12 fw-medium mb-3 ">
                                            Join us for the annual team-building retreat on Nov 15th. <a href="javascript:void(0);" class="text-success fw-medium text-decoration-underline">Create Now</a>
                                        </p>
                                    </div>
                                    <div class="col-xl-5 col-5">
                                        <img src="../assets/images/media/media-69.png" alt="" class="img-fluid card-img-top">     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Acquisitions
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="progress progress-xl mb-3">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    <div class="progress-bar progress-bar-striped bg-secondary bg-opacity-25 text-secondary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    <div class="progress-bar progress-bar-striped bg-info bg-opacity-25 text-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                                    <div class="progress-bar progress-bar-striped bg-pink" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">8%</div>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fa-regular fa-folder-open me-2 text-primary"></i> 
                                        <span class="fw-medium">Total Applications</span>
                                        <span class="badge float-end bg-primary-transparent">1,982</span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa-regular fa-check-circle me-2 text-success"></i> 
                                        <span class="fw-medium">Short Listed</span>
                                        <span class="badge float-end bg-success-transparent">214</span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa-regular fa-clock me-2 text-secondary"></i>
                                        <span class="fw-medium"> On-Hold</span>
                                        <span class="badge float-end bg-secondary-transparent">262</span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa-regular fa-times-circle me-2 text-info"></i> 
                                        <span class="fw-medium">Rejected</span>
                                        <span class="badge float-end bg-warning-transparent">395</span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-ban me-2 text-pink"></i> 
                                        <span class="fw-medium">Blocked</span>
                                        <span class="badge float-end bg-pink-transparent">79</span>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Hiring Sources
                                </div>
                            </div>
                            <div id="hiring-src" class="py-3"></div>
                            <div class="card-body">
                                <div class="row row-cols-12">
                                    <div class="col p-0">
                                        <div class="text-center">
                                            <div class="mb-2"><i class="ri-dashboard-fill p-2 fs-15 bg-primary-transparent rounded-circle lh-1 align-middle"></i></div>
                                            <div class="text-muted fs-12 mb-1 hrm-jobs-legend jobboards d-inline-block ms-2">Job Boards</div>
                                            <div><span class="fs-16 fw-semibold">2,450</span></div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center">
                                            <div class="mb-2"><i class="ri-exchange-funds-line p-2 fs-15 bg-secondary-transparent rounded-circle lh-1 align-middle"></i></div>
                                            <div class="text-muted fs-12 mb-1 hrm-jobs-legend referrals d-inline-block ms-2">Referrals</div>
                                            <div><span class="fs-16 fw-semibold">980</span></div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center">
                                            <div class="mb-2"><i class="ri-record-circle-line p-2 fs-15 bg-success-transparent rounded-circle lh-1 align-middle"></i></div>
                                            <div class="text-muted fs-12 mb-1 hrm-jobs-legend socialmedia d-inline-block ms-2">Media</div>
                                            <div><span class="fs-16 fw-semibold">350</span></div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center">
                                            <div class="mb-2"><i class="ri-building-2-line p-2 fs-15 bg-info-transparent rounded-circle lh-1 align-middle"></i></div>
                                            <div class="text-muted fs-12 mb-1 hrm-jobs-legend campus d-inline-block ms-2">Campus</div>
                                            <div><span class="fs-16 fw-semibold">670</span></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Recent Job Applications</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Applicant</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"> Applied</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded avatar-sm">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-semibold">John Doe</div>
                                                    </div>
                                                </td>
                                                <td class="fs-12 fw-medium">Engineer</td>
                                                <td><span class="badge bg-primary-transparent">Short Listed</span></td>
                                                <td>20 Oct,2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon me-1"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded avatar-sm">
                                                                <img src="../assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-semibold">Jane Smith</div>
                                                    </div>
                                                </td>
                                                <td class="fs-12 fw-medium">React Developer</td>
                                                <td><span class="badge bg-warning-transparent">On-Hold</span></td>
                                                <td>19 Oct,2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon me-1"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded avatar-sm">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-semibold">Joshna Kite</div>
                                                    </div>
                                                </td>
                                                <td class="fs-12 fw-medium">UX Designer</td>
                                                <td><span class="badge bg-success-transparent">Accepted</span></td>
                                                <td>18 Oct,2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon me-1"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded avatar-sm">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-semibold">Emily Brown</div>
                                                    </div>
                                                </td>
                                                <td class="fs-12 fw-medium">Data Analyst</td>
                                                <td><span class="badge bg-danger-transparent">Rejected</span></td>
                                                <td>17 Oct,2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon me-1"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded avatar-sm">
                                                                <img src="../assets/images/faces/15.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-semibold">David Lee</div>
                                                    </div>
                                                </td>
                                                <td class="fs-12 fw-medium">Marketing Head</td>
                                                <td><span class="badge bg-pink-transparent">Under Review</span></td>
                                                <td>16 Oct,2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon me-1"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Upcoming Interviews</div>
                            </div>
                            <div class="card-body p-0 py-1">
                                <ul class="list-group list-group-flush my-1">
                                    <li class="list-group-item d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                        <span class="avatar avatar-rounded flex-shrink-0 avatar-md">
                                            <img src="../assets/images/faces/2.jpg" alt="">
                                        </span>
                                        <div>
                                            <strong>John Doe</strong><br>
                                            <small class="text-muted">Position: Software Engineer</small>
                                        </div>
                                        <div class="align-self-end">
                                           <span class="badge bg-success-transparent fs-11 fw-medium">10:30 PM</span>
                                        </div>
                                        <div class="fw-medium fs-12 ms-auto"><i class="ri-calendar-check-line text-pink fs-14 me-1"></i>Date: 30 Oct,2024</div>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                        <span class="avatar avatar-rounded flex-shrink-0 avatar-md">
                                            <img src="../assets/images/faces/12.jpg" alt="">
                                        </span>
                                        <div>
                                            <strong>Jane Smith</strong><br>
                                            <small class="text-muted">Position: Marketing Manager</small>
                                        </div>
                                        <div class="align-self-end">
                                           <span class="badge bg-secondary-transparent fs-11 fw-medium">10:30 PM</span>
                                        </div>
                                        <div class="fw-medium fs-12 ms-auto"><i class="ri-calendar-check-line text-pink fs-14 me-1"></i>Date: 02 Nov,2024</div>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                        <span class="avatar avatar-rounded flex-shrink-0 avatar-md">
                                            <img src="../assets/images/faces/3.jpg" alt="">
                                        </span>
                                        <div>
                                            <strong>Michael Johnson</strong><br>
                                            <small class="text-muted">Position: UX Designer</small>
                                        </div>
                                        <div class="align-self-end">
                                           <span class="badge bg-success-transparent fs-11 fw-medium">10:30 PM</span>
                                        </div>
                                        <div class="fw-medium fs-12 ms-auto"><i class="ri-calendar-check-line text-pink fs-14 me-1"></i>Date: 08 Nov,2024</div>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                        <span class="avatar avatar-rounded flex-shrink-0 avatar-md">
                                            <img src="../assets/images/faces/13.jpg" alt="">
                                        </span>
                                        <div>
                                            <strong>Emily Brown</strong><br>
                                            <small class="text-muted">Position: Data Analyst</small>
                                        </div>
                                        <div class="align-self-end">
                                           <span class="badge bg-danger-transparent fs-11 fw-medium">10:30 PM</span>
                                        </div>
                                        <div class="fw-medium fs-12 ms-auto"><i class="ri-calendar-check-line text-pink fs-14 me-1"></i>Date: 10 Nov,2024</div>
                                    </li>
                                    <li class="list-group-item d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                        <span class="avatar avatar-rounded flex-shrink-0 avatar-md">
                                            <img src="../assets/images/faces/1.jpg" alt="">
                                        </span>
                                        <div>
                                            <strong>David Lee</strong><br>
                                            <small class="text-muted">Position: Sales Associate</small>
                                        </div>
                                        <div class="align-self-end">
                                           <span class="badge bg-info-transparent fs-11 fw-medium">10:30 PM</span>
                                        </div>
                                        <div class="fw-medium fs-12 ms-auto"><i class="ri-calendar-check-line text-pink fs-14 me-1"></i>Date: 11 Nov,2024</div>
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
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title">
                                   Bills Summary
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="me-3">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
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
                                                <th scope="col">Bill ID</th>
                                                <th scope="col">Employee Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Bill Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#B001</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold mb-1">Rena Mark</span>
                                                            <span class="text-muted fs-12">renamark123@demo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-primary fw-medium">Marketing</td>
                                                <td class="fw-semibold">$1,200</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>2024-10-15</td>
                                                <td><i class="ri-bank-card-line me-1 fs-14 text-pink"></i>Credit Card</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#B002</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold mb-1">Suri Jen</span>
                                                            <span class="text-muted fs-12">surijen@demo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success fw-medium">Finance</td>
                                                <td class="fw-semibold">$2,500</td>
                                                <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                <td>2024-10-05</td>
                                                <td><i class="ri-bank-line me-1 fs-14 text-success"></i>Bank Transfer</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#B003</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/5.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold mb-1">SriKavya </span>
                                                            <span class="text-muted fs-12">sriKavya@demo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-secondary fw-medium">HR</td>
                                                <td class="fw-semibold">$750</td>
                                                <td><span class="badge bg-danger-transparent">Overdue</span></td>
                                                <td>2024-10-25</td>
                                                <td><i class="ri-cash-line me-1 fs-14 text-info"></i>Cash</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#B002</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold mb-1">Rahul Sharma</span>
                                                            <span class="text-muted fs-12">rahul.sharma@demo.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success fw-medium">Finance</td>
                                                <td class="fw-semibold">$3,200</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>2024-09-25</td>
                                                <td><i class="ri-bank-line me-1 fs-14 text-success"></i>Net Banking</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#B003</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/5.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold mb-1">Ananya Gupta</span>
                                                            <span class="text-muted fs-12">ananya.gupta@demo.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-secondary fw-medium">HR</td>
                                                <td class="fw-semibold">$1,500</td>
                                                <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                <td>2024-09-30</td>
                                                <td><i class="ri-cash-line me-1 fs-14 text-info"></i>Cash</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
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

    <!-- HRM Dashboard JS -->
    <script src="{{asset('assets/js/hrm-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
@endpush