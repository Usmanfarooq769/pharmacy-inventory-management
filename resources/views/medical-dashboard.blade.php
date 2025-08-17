@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Medical</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Medical</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

               <!-- Start::Row-1 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card rounded-md overflow-hidden p-2">
                            <div class="card-body bg-primary bg-opacity-10 rounded-2 ps-4 medical-cards">
                                <div class="d-flex gap-2 align-items-center ps-2">
                                    <div class="align-self-start">
                                        <div class="fw-medium mb-2">Total Patients</div>
                                        <h4 class="fw-semibold mb-0 lh-1">15,879</h4>
                                    </div>
                                    <div class="ms-auto text-end align-self-end">
                                        <div class="avatar avatar-md avatar-rounded bg-primary shadow shadow-primary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med text-fixed-white" fill="currentColor" viewBox="0 0 256 256"><path d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z" opacity="0.2"></path><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                                        </div>
                                        <div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-danger fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-down"></i>0.96%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card rounded-md overflow-hidden p-2">
                            <div class="card-body bg-secondary bg-opacity-10 rounded-2 ps-4 medical-cards secondary">
                                <div class="d-flex gap-2 align-items-center ps-2">
                                    <div class="align-self-start">
                                        <div class="fw-medium mb-2">Total Doctors</div>
                                        <h4 class="fw-semibold mb-0 lh-1">2,035</h4>
                                    </div>
                                    <div class="ms-auto text-end align-self-end">
                                        <div class="avatar avatar-md avatar-rounded bg-secondary shadow shadow-secondary mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med text-fixed-white" fill="currentColor" viewBox="0 0 256 256"><path d="M240,160a32,32,0,1,1-32-32A32,32,0,0,1,240,160Z" opacity="0.2"></path><path d="M220,160a12,12,0,1,1-12-12A12,12,0,0,1,220,160Zm-4.55,39.29A48.08,48.08,0,0,1,168,240H144a48.05,48.05,0,0,1-48-48V151.49A64,64,0,0,1,40,88V40a8,8,0,0,1,8-8H72a8,8,0,0,1,0,16H56V88a48,48,0,0,0,48.64,48c26.11-.34,47.36-22.25,47.36-48.83V48H136a8,8,0,0,1,0-16h24a8,8,0,0,1,8,8V87.17c0,32.84-24.53,60.29-56,64.31V192a32,32,0,0,0,32,32h24a32.06,32.06,0,0,0,31.22-25,40,40,0,1,1,16.23.27ZM232,160a24,24,0,1,0-24,24A24,24,0,0,0,232,160Z"></path></svg>
                                        </div>
                                        <div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-success fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-up"></i>0.96%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card rounded-md overflow-hidden p-2">
                            <div class="card-body bg-success bg-opacity-10 rounded-2 ps-4 medical-cards success">
                                <div class="d-flex gap-2 align-items-center ps-2">
                                    <div class="align-self-start">
                                        <div class="fw-medium mb-2">Total Appointments</div>
                                        <h4 class="fw-semibold mb-0 lh-1">5,324</h4>
                                    </div>
                                    <div class="ms-auto text-end align-self-end">
                                        <div class="avatar avatar-md avatar-rounded bg-success shadow shadow-success mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med text-fixed-white" fill="currentColor" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-48-56a8,8,0,0,1-8,8H136v16a8,8,0,0,1-16,0V160H104a8,8,0,0,1,0-16h16V128a8,8,0,0,1,16,0v16h16A8,8,0,0,1,160,152Z"></path></svg>
                                        </div>
                                        <div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-danger fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-down"></i>0.96%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card rounded-md overflow-hidden p-2">
                            <div class="card-body bg-info bg-opacity-10 rounded-2 ps-4 medical-cards info">
                                <div class="d-flex gap-2 align-items-center ps-2">
                                    <div class="align-self-start">
                                        <div class="fw-medium mb-2">Total Staff</div>
                                        <h4 class="fw-semibold mb-0 lh-1">8,157</h4>
                                    </div>
                                    <div class="ms-auto text-end align-self-end">
                                        <div class="avatar avatar-md avatar-rounded bg-info shadow shadow-info mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med text-fixed-white" fill="currentColor" viewBox="0 0 256 256"><path d="M168,144a40,40,0,1,1-40-40A40,40,0,0,1,168,144ZM64,56A32,32,0,1,0,96,88,32,32,0,0,0,64,56Zm128,0a32,32,0,1,0,32,32A32,32,0,0,0,192,56Z" opacity="0.2"></path><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1,0-16,24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.85,8,57,57,0,0,0-98.15,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                                        </div>
                                        <div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-danger fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-down"></i>1.6%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::Row-1 -->
                
                <!-- Start::Row-2 -->
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Doctors List
                                </div>
                                <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body p-0">
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead class="bg-light">
											<tr>
												<th class="bg-light" scope="col">Doctor</th>
                                                <th class="bg-light" scope="col">Status</th>
												<th class="bg-light" scope="col">Specialization</th>
												<th class="bg-light" scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center gap-2">
														<img src="../assets/images/faces/doctors/1.jpg" alt="" class="avatar avatar-sm avatar-rounded">
														<div class="">
															<span class="d-block fw-semibold lh-1">
																Dr. Smith
															</span>
															<span class="text-muted fs-12">MBBS, Ph.D</span>
														</div>
													</div>
												</td>
												<td>
                                                    <span class="badge bg-success-transparent">Available</span>  
                                                </td>
												<td>
                                                    <span class="fw-medium">Cardiology  </span>
                                                </td>
												<td>
													<div class="btn-list">
														<a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
														<a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
													</div>
												</td>
											</tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/2.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Jane Doe
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, MD</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Available</span>  
                                                </td>
                                                <td>
                                                    <span class="fw-medium">Dermatology</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/3.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Michael Lee
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, MS </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Busy</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">Orthopedics</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/4.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Emily Clark
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, FRCS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Unavailable</span>  
                                                </td>
                                                <td>
                                                    <span class="fw-medium">General Surgery</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/5.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Robert King
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, DNB</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Available</span>  
                                                </td>
                                                <td>
                                                    <span class="fw-medium">Pediatrics</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/6.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Olivia Martinez
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, MSc</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Available</span>  
                                                </td>
                                                <td>
                                                    <span class="fw-medium">Neurology</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/faces/doctors/1.jpg" alt="" class="avatar avatar-sm avatar-rounded">
                                                        <div class="">
                                                            <span class="d-block fw-semibold lh-1">
                                                                Dr. Daniel Thompson
                                                            </span>
                                                            <span class="text-muted fs-12">MBBS, DCP </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Busy</span>  
                                                </td>
                                                <td>
                                                    <span class="fw-medium">Pathology</span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-phone"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>                                            
										</tbody>
									</table>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Revenue Statistics
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="p-3 bg-light d-flex gap-2 rounded align-items-center flex-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="flex-shrink-0 text-primary bg-primary-transparent rounded-circle" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z"></path></svg>
                                    <div>
                                        <h5 class="mb-0ld">$87,847.00</h5>
                                        <div class="fw-medium text-muted">Total Revenue
                                        </div>
                                    </div>
                                    <span class="fw-normal ms-1 badge bg-success ms-auto"> + 5.03% 
                                        <i class="ri-arrow-up-s-fill"></i>
                                    </span>
                                </div>
                                <div id="medical-revenue"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::Row-2 -->

				<!-- Start::Row-3 -->
				<div class="row">
					<div class="col-xxl-4 col-xl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Patients Visits
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        This Week<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body ps-xl-0">
                                <div class="row align-items-center gx-xxl-0">
                                    <div class="col-xl-8">
                                        <div id="patientsdailyvisit"></div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="p-2 border-primary border-opacity-10 border border-dashed rounded-2 mb-4">
                                            <div class="d-flex gap-2 align-items-start mb-1 justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded mb-3 bg-primary">
                                                        <i class="ti ti-gender-female fs-18"></i>
                                                    </span>
                                                    <div class="fw-medium">Female</div>
                                                </div>
                                                <div class="fs-18 fw-medium text-primary py-2 pe-2">15.5k</div>
                                            </div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-danger fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-down"></i>1.6%
                                            </span>
                                        </div>
                                        <div class="p-2 border-success border-opacity-10 border border-dashed rounded-2">
                                            <div class="d-flex gap-2 align-items-start mb-1 justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded mb-3 bg-success">
                                                        <i class="ti ti-gender-male fs-18"></i>
                                                    </span>
                                                    <div class="fw-medium">Male</div>
                                                </div>
                                                <div class="fs-18 fw-medium text-success py-2 pe-2">10.2k</div>
                                            </div>
                                            <span class="text-muted fw-medium fs-12 opacity-1">from last month</span>
                                            <span class="text-danger fw-medium fs-13 mb-2">
                                                <i class="ti ti-arrow-down"></i>1.6%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xxl-4 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Upcoming Appointments</div>
                                <div class="dropdown">
                                    <div class="btn btn-light border btn-full btn-sm" data-bs-toggle="dropdown">Vew All<i class="ti ti-chevron-down ms-1"></i>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
							<div class="card-body">
                                <div class="upcoming-shedule">
                                    <ul class="nav nav-pills mb-3 justify-content-center gap-4 align-items-center pb-1" role="tablist">
                                        <li>
                                            <a class="text-center text-muted fs-12" href="javascript:void(0);">
                                                <i class="ri-arrow-left-line fw-normal me-1"></i>Back
                                            </a>
                                        </li>
                                        <li class="nav-item fw-medium" role="presentation">
                                            <a href="#day01" class="nav-link sh-link text-center med-upcoming rounded-circle" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                <p class="sh-dt mb-0">01</p>
                                                <span class="sh-day">Thu</span>
                                            </a>
                                        </li>
                                        <li class="nav-item fw-medium" role="presentation">
                                            <a href="#day02" class="nav-link sh-link text-center med-upcoming rounded-circle active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                                <p class="sh-dt mb-0">02</p>
                                                <span class="sh-day">Fri</span>
                                            </a>
                                        </li>
                                        <li class="nav-item fw-medium" role="presentation">
                                            <a href="#day03" class="nav-link sh-link text-center med-upcoming rounded-circle" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                <p class="sh-dt mb-0">03</p>
                                                <span class="sh-day">Sat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-center fs-12" href="javascript:void(0);">
                                                more<i class="ri-arrow-right-line fw-normal ms-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content"> 
                                        <div class="tab-pane p-0 border-0" id="day01" role="tabpanel">
                                            <ul class="list-unstyled mb-0 sh-shedule-container">
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md bg-orange-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Meeting with <a href="javascript:void(0);" class="tx-primary">Xion Shan</a></p>
                                                            <span class="text-muted">G - Meets</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>09:00</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>11:00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Updating UI Of Dashboard</p>
                                                            <span class="text-muted">Dashboard Xin</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>12:50</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>13:20</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md bg-success-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Assigning Tasks To Members</p>
                                                            <span class="text-muted">Task MWU</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>15:45</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>16:00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 border-0 active show" id="day02" role="tabpanel">
                                            <ul class="list-unstyled mb-0 sh-shedule-container">
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-teal-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Medical Billing Workshop</p>
                                                            <span class="text-muted">Online session</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>09:00 AM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>11:00 AM</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-purple-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Staff Training: Medical Records</p>
                                                            <span class="text-muted">Online seminar</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>11:00 AM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>01:00 PM</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-orange-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Emergency Response Drill</p>
                                                            <span class="text-muted">Simulation exercise</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>02:00 PM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>04:00 PM</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="day03" role="tabpanel">
                                            <ul class="list-unstyled mb-0 sh-shedule-container">
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-yellow-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Medical Equipment Meeting</p>
                                                            <span class="text-muted">Conference room</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>10:30 AM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>12:00 PM</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 mb-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-teal-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Internal Audit Review</p>
                                                            <span class="text-muted">Departmental review meeting</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>01:30 PM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>03:00 PM</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="sh-shedule d-sm-flex flex-wrap align-items-start gap-2 border rounded-3 bg-light p-2 bg-opacity-50">
                                                        <span class="avatar avatar-md flex-shrink-0 bg-danger-transparent">
                                                            <i class="ri-calendar-line fs-16"></i>
                                                        </span>
                                                        <div class="ms-sm-2 mb-1 mb-sm-0">
                                                            <p class="mb-sm-1 mb-0 fw-medium">Patient Care Quality Review</p>
                                                            <span class="text-muted">Cross-department discussion</span>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                            <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                            <span>04:00 PM</span>
                                                            <span class="mx-2 text-muted">-</span>
                                                            <span>05:30 PM</span>
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
                    <div class="col-xxl-4 col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Treatments</div>
                                <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled my-2">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start flex-wrap"> 
                                            <span class="avatar avatar-md avatar-rounded bg-danger-transparent">
                                                <i class="ri-heart-pulse-line fs-20 leading-none"></i>
                                            </span>
                                            <div class="flex-auto ms-3"> 
                                                <span class="fw-semibold mb-0 d-block">Cardiology</span> 
                                                <span class="text-muted mb-0 d-block">500+ Patients Treated</span> 
                                            </div>
                                            <div class="ms-auto"> 
                                                <div class="d-flex gap-5 align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-semibold text-success">85%</h6>
                                                        <div class="fs-11 text-muted">
                                                            Success Rate:
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-medium">3 Sessions
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start flex-wrap"> 
                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                <i class="ri-syringe-line fs-20 leading-none"></i>
                                            </span>
                                            <div class="flex-auto ms-3"> 
                                                <span class="fw-semibold mb-0 d-block">Immunology</span> 
                                                <span class="text-muted mb-0 d-block">700+ Vaccinations</span> 
                                            </div>
                                            <div class="ms-auto"> 
                                                <div class="d-flex gap-5 align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-semibold text-info">92%</h6>
                                                        <div class="fs-11 text-muted">
                                                            Success Rate:
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-medium">1 Follow-up
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start flex-wrap"> 
                                            <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                <i class="ri-brain-line fs-20 leading-none"></i>
                                            </span>
                                            <div class="flex-auto ms-3"> 
                                                <span class="fw-semibold mb-0 d-block">Neurology</span> 
                                                <span class="text-muted mb-0 d-block">300+ Brain Surgeries</span> 
                                            </div>
                                            <div class="ms-auto"> 
                                                <div class="d-flex gap-5 align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-semibold text-success">88%</h6>
                                                        <div class="fs-11 text-muted">
                                                            Success Rate:
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-medium">4 Sessions
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start flex-wrap"> 
                                            <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                                <i class="ti ti-mood-kid fs-20 leading-none"></i>
                                            </span>
                                            <div class="flex-auto ms-3"> 
                                                <span class="fw-semibold mb-0 d-block">Pediatrics</span> 
                                                <span class="text-muted mb-0 d-block">1,000+ Pediatric Patients</span> 
                                            </div>
                                            <div class="ms-auto"> 
                                                <div class="d-flex gap-5 align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-semibold text-primary">95%</h6>
                                                        <div class="fs-11 text-muted">
                                                            Success Rate:
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-medium">2 Sessions
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start flex-wrap"> 
                                            <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                                <i class="ri-stethoscope-line fs-20 leading-none"></i>
                                            </span>
                                            <div class="flex-auto ms-3"> 
                                                <span class="fw-semibold mb-0 d-block">Dermatology</span> 
                                                <span class="text-muted mb-0 d-block">800+ Skin Treatments</span> 
                                            </div>
                                            <div class="ms-auto"> 
                                                <div class="d-flex gap-5 align-items-center">
                                                    <div>
                                                        <h6 class="mb-0 fw-semibold text-success">90%</h6>
                                                        <div class="fs-11 text-muted">
                                                            Success Rate:
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mb-0 fw-medium">3 Sessions
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- End::Row-3 -->

				<!-- Start::Row-4 -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Patients List
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="row" class="text-center">S.No</th>
                                                <th scope="col">Patient ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Doctor</th>
                                                <th scope="col">Disease</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">Appointment</th>
                                                <th scope="col">Room No</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">01</td>
                                                <td>PATI-9XYZ</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/15.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <span class="fw-medium mb-0 d-flex align-items-center">Alice Brown</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Female
                                                </td>
                                                <td>29</td>
                                                <td>Dr. Sarah Lee</td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">Anemia</span>
                                                </td>
                                                <td><i class="ri-phone-line fs-15 text-pink me-1"></i>321-654-9870</td>
                                                <td>
                                                    2024-01-10
                                                </td>
                                                <td>201</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">02</td>
                                                <td>PATI-8LMN</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/16.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <span class="fw-medium mb-0 d-flex align-items-center">Daniel Green</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Male
                                                </td>
                                                <td>40</td>
                                                <td>Dr. James White</td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Chronic Migraine</span>
                                                </td>
                                                <td><i class="ri-phone-line fs-15 text-pink me-1"></i>456-123-7890</td>
                                                <td>
                                                    2023-12-15
                                                </td>
                                                <td>202</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">03</td>
                                                <td>PATI-5ASD</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/12.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <span class="fw-medium mb-0 d-flex align-items-center">Ethan Walker</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Male
                                                </td>
                                                <td>50</td>
                                                <td>Dr. Rachel Clark</td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Arthritis</span>
                                                </td>
                                                <td><i class="ri-phone-line fs-15 text-pink me-1"></i>567-890-1234</td>
                                                <td>
                                                    2023-11-12
                                                </td>
                                                <td>203</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">04</td>
                                                <td>PATI-2QRF</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/5.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <span class="fw-medium mb-0 d-flex align-items-center">Sophia Harris</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Female
                                                </td>
                                                <td>32</td>
                                                <td>Dr. Michael Brown</td>
                                                <td>
                                                    <span class="badge bg-orange-transparent">Food Allergies</span>
                                                </td>
                                                <td><i class="ri-phone-line fs-15 text-pink me-1"></i>678-901-2345</td>
                                                <td>
                                                    2023-10-05
                                                </td>
                                                <td>204</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">05</td>
                                                <td>PATI-4JTU</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/6.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <span class="fw-medium mb-0 d-flex align-items-center">Liam Martinez</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Male
                                                </td>
                                                <td>42</td>
                                                <td>Dr. Elizabeth Taylor</td>
                                                <td>
                                                    <span class="badge bg-info-transparent">High Blood Pressure</span>
                                                </td>
                                                <td><i class="ri-phone-line fs-15 text-pink me-1"></i>345-678-9012</td>
                                                <td>
                                                    2023-09-30
                                                </td>
                                                <td>205</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2ld"></i> </div>
                                    <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0">
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
                </div>
				<!-- End::Row-4 -->
                
            </div>
        </div> 
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

    <!-- Medical Dashboard --> 
    <script src="{{asset('assets/js/medical-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 
@endpush
