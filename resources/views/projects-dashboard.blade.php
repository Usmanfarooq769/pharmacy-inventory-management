

@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Projects</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card project-cards">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-image" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700" style="overflow: hidden; display: block;" width="700" height="700"><defs></defs><g transform="matrix(1 0 0 1 0 0)" opacity="1"><path transform="matrix(1 0 0 1 350 350)" d="M 313.575145 77.289331 C 327.418325 100.888095 325.88607 142.960095 304.220117 159.667034 C 265.072813 189.854105 203.777781 150.746207 155.968211 138.175778 C 127.632454 130.725541 97.286126 89.366794 73.200321 106.048974 C 48.904535 122.876591 101.253505 183.744908 74.18203 195.601938 C 50.517987 205.966548 43.060308 142.254872 17.228565 141.890005 C 0.152177 141.648805 -9.538631 164.041187 -21.409051 176.319393 C -51.356227 207.295347 -62.021731 272.752031 -104.928243 276.673037 C -128.295041 278.808409 -152.210092 253.451797 -159.565292 231.170234 C -171.75374 194.247013 -139.774237 154.720649 -131.708436 116.683492 C -128.052249 99.441436 -110.820892 77.599717 -122.186888 64.128625 C -152.811603 27.831908 -234.291089 100.858257 -266.089398 65.585146 C -280.675169 49.405495 -272.372712 16.880257 -258.603808 0 C -234.209946 -29.906132 -156.561687 1.159049 -147.444544 -36.341816 C -138.14693 -74.585002 -246.708634 -85.16433 -231.136647 -121.309871 C -218.5408 -150.547225 -165.464401 -111.184376 -134.686904 -119.322185 C -120.91794 -122.962806 -104.114407 -128.748541 -97.616554 -141.421993 C -74.961221 -185.609088 -150.883499 -262.459729 -110.492285 -291.344211 C -87.215157 -307.990102 -59.209242 -250.863798 -31.131535 -256.391251 C 2.097484 -262.932804 6.257205 -331.490286 40.101991 -330.269613 C 70.242514 -329.18254 72.151765 -274.510405 98.634602 -260.078072 C 120.402562 -248.215202 158.518591 -270.897147 173.197115 -250.919341 C 196.314453 -219.456117 129.211822 -166.340668 151.870597 -134.54561 C 167.557709 -112.533272 207.484031 -131.557043 232.845411 -122.2067 C 260.090725 -112.161779 309.849734 -104.774154 307.621019 -75.821772 C 302.707805 -11.996088 128.913373 -64.01432 129.069612 -0.000001 C 129.230729 66.012946 280.174093 20.349848 313.575145 77.289331 Z " fill="rgba(var(--primary-rgb), 1)" stroke="undefined" stroke-width="1" stroke-opacity="1" fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="4"></path></g></svg>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 fs-14">Completed Projects</p>
                                        <h4 class="mb-0 fw-semibold mb-2">109</h4>
                                        <div class="">
                                            <span class="text-success fw-semibold"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-lg bg-primary avatar-rounded p-2 shadow-sm">
                                            <i class="ti ti-file-check fs-21"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card project-cards">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-image" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700" style="overflow: hidden; display: block;" width="700" height="700"><defs></defs><g transform="matrix(1 0 0 1 0 0)" opacity="1"><path transform="matrix(1 0 0 1 350 350)" d="M 313.575145 77.289331 C 327.418325 100.888095 325.88607 142.960095 304.220117 159.667034 C 265.072813 189.854105 203.777781 150.746207 155.968211 138.175778 C 127.632454 130.725541 97.286126 89.366794 73.200321 106.048974 C 48.904535 122.876591 101.253505 183.744908 74.18203 195.601938 C 50.517987 205.966548 43.060308 142.254872 17.228565 141.890005 C 0.152177 141.648805 -9.538631 164.041187 -21.409051 176.319393 C -51.356227 207.295347 -62.021731 272.752031 -104.928243 276.673037 C -128.295041 278.808409 -152.210092 253.451797 -159.565292 231.170234 C -171.75374 194.247013 -139.774237 154.720649 -131.708436 116.683492 C -128.052249 99.441436 -110.820892 77.599717 -122.186888 64.128625 C -152.811603 27.831908 -234.291089 100.858257 -266.089398 65.585146 C -280.675169 49.405495 -272.372712 16.880257 -258.603808 0 C -234.209946 -29.906132 -156.561687 1.159049 -147.444544 -36.341816 C -138.14693 -74.585002 -246.708634 -85.16433 -231.136647 -121.309871 C -218.5408 -150.547225 -165.464401 -111.184376 -134.686904 -119.322185 C -120.91794 -122.962806 -104.114407 -128.748541 -97.616554 -141.421993 C -74.961221 -185.609088 -150.883499 -262.459729 -110.492285 -291.344211 C -87.215157 -307.990102 -59.209242 -250.863798 -31.131535 -256.391251 C 2.097484 -262.932804 6.257205 -331.490286 40.101991 -330.269613 C 70.242514 -329.18254 72.151765 -274.510405 98.634602 -260.078072 C 120.402562 -248.215202 158.518591 -270.897147 173.197115 -250.919341 C 196.314453 -219.456117 129.211822 -166.340668 151.870597 -134.54561 C 167.557709 -112.533272 207.484031 -131.557043 232.845411 -122.2067 C 260.090725 -112.161779 309.849734 -104.774154 307.621019 -75.821772 C 302.707805 -11.996088 128.913373 -64.01432 129.069612 -0.000001 C 129.230729 66.012946 280.174093 20.349848 313.575145 77.289331 Z " fill="rgba(var(--secondary-rgb), 1)" stroke="undefined" stroke-width="1" stroke-opacity="1" fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="4"></path></g></svg>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 fs-14">Overdue Projects</p>
                                        <h4 class="mb-0 fw-semibold mb-2">65</h4>
                                        <div class="">
                                            <span class="text-danger fw-semibold"> 2.1% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-lg bg-secondary avatar-rounded p-2 shadow-sm">
                                            <i class="ti ti-briefcase fs-21"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card project-cards">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-image" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700" style="overflow: hidden; display: block;" width="700" height="700"><defs></defs><g transform="matrix(1 0 0 1 0 0)" opacity="1"><path transform="matrix(1 0 0 1 350 350)" d="M 313.575145 77.289331 C 327.418325 100.888095 325.88607 142.960095 304.220117 159.667034 C 265.072813 189.854105 203.777781 150.746207 155.968211 138.175778 C 127.632454 130.725541 97.286126 89.366794 73.200321 106.048974 C 48.904535 122.876591 101.253505 183.744908 74.18203 195.601938 C 50.517987 205.966548 43.060308 142.254872 17.228565 141.890005 C 0.152177 141.648805 -9.538631 164.041187 -21.409051 176.319393 C -51.356227 207.295347 -62.021731 272.752031 -104.928243 276.673037 C -128.295041 278.808409 -152.210092 253.451797 -159.565292 231.170234 C -171.75374 194.247013 -139.774237 154.720649 -131.708436 116.683492 C -128.052249 99.441436 -110.820892 77.599717 -122.186888 64.128625 C -152.811603 27.831908 -234.291089 100.858257 -266.089398 65.585146 C -280.675169 49.405495 -272.372712 16.880257 -258.603808 0 C -234.209946 -29.906132 -156.561687 1.159049 -147.444544 -36.341816 C -138.14693 -74.585002 -246.708634 -85.16433 -231.136647 -121.309871 C -218.5408 -150.547225 -165.464401 -111.184376 -134.686904 -119.322185 C -120.91794 -122.962806 -104.114407 -128.748541 -97.616554 -141.421993 C -74.961221 -185.609088 -150.883499 -262.459729 -110.492285 -291.344211 C -87.215157 -307.990102 -59.209242 -250.863798 -31.131535 -256.391251 C 2.097484 -262.932804 6.257205 -331.490286 40.101991 -330.269613 C 70.242514 -329.18254 72.151765 -274.510405 98.634602 -260.078072 C 120.402562 -248.215202 158.518591 -270.897147 173.197115 -250.919341 C 196.314453 -219.456117 129.211822 -166.340668 151.870597 -134.54561 C 167.557709 -112.533272 207.484031 -131.557043 232.845411 -122.2067 C 260.090725 -112.161779 309.849734 -104.774154 307.621019 -75.821772 C 302.707805 -11.996088 128.913373 -64.01432 129.069612 -0.000001 C 129.230729 66.012946 280.174093 20.349848 313.575145 77.289331 Z " fill="rgba(var(--success-rgb), 1)" stroke="undefined" stroke-width="1" stroke-opacity="1" fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="4"></path></g></svg>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 fs-14">Total Projects</p>
                                        <h4 class="mb-0 fw-semibold mb-2">2,487</h4>
                                        <div class="">
                                            <span class="text-success fw-semibold"> 1.8% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-lg bg-success avatar-rounded p-2 shadow-sm">
                                            <i class="ti ti-album fs-21"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card project-cards">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-image" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700" style="overflow: hidden; display: block;" width="700" height="700"><defs></defs><g transform="matrix(1 0 0 1 0 0)" opacity="1"><path transform="matrix(1 0 0 1 350 350)" d="M 313.575145 77.289331 C 327.418325 100.888095 325.88607 142.960095 304.220117 159.667034 C 265.072813 189.854105 203.777781 150.746207 155.968211 138.175778 C 127.632454 130.725541 97.286126 89.366794 73.200321 106.048974 C 48.904535 122.876591 101.253505 183.744908 74.18203 195.601938 C 50.517987 205.966548 43.060308 142.254872 17.228565 141.890005 C 0.152177 141.648805 -9.538631 164.041187 -21.409051 176.319393 C -51.356227 207.295347 -62.021731 272.752031 -104.928243 276.673037 C -128.295041 278.808409 -152.210092 253.451797 -159.565292 231.170234 C -171.75374 194.247013 -139.774237 154.720649 -131.708436 116.683492 C -128.052249 99.441436 -110.820892 77.599717 -122.186888 64.128625 C -152.811603 27.831908 -234.291089 100.858257 -266.089398 65.585146 C -280.675169 49.405495 -272.372712 16.880257 -258.603808 0 C -234.209946 -29.906132 -156.561687 1.159049 -147.444544 -36.341816 C -138.14693 -74.585002 -246.708634 -85.16433 -231.136647 -121.309871 C -218.5408 -150.547225 -165.464401 -111.184376 -134.686904 -119.322185 C -120.91794 -122.962806 -104.114407 -128.748541 -97.616554 -141.421993 C -74.961221 -185.609088 -150.883499 -262.459729 -110.492285 -291.344211 C -87.215157 -307.990102 -59.209242 -250.863798 -31.131535 -256.391251 C 2.097484 -262.932804 6.257205 -331.490286 40.101991 -330.269613 C 70.242514 -329.18254 72.151765 -274.510405 98.634602 -260.078072 C 120.402562 -248.215202 158.518591 -270.897147 173.197115 -250.919341 C 196.314453 -219.456117 129.211822 -166.340668 151.870597 -134.54561 C 167.557709 -112.533272 207.484031 -131.557043 232.845411 -122.2067 C 260.090725 -112.161779 309.849734 -104.774154 307.621019 -75.821772 C 302.707805 -11.996088 128.913373 -64.01432 129.069612 -0.000001 C 129.230729 66.012946 280.174093 20.349848 313.575145 77.289331 Z " fill="rgba(var(--info-rgb), 1)" stroke="undefined" stroke-width="1" stroke-opacity="1" fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="4"></path></g></svg>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 fs-14">Pending Projects</p>
                                        <h4 class="mb-0 fw-semibold mb-2">307</h4>
                                        <div class="">
                                            <span class="text-danger fw-semibold"> 0.5% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-lg bg-info avatar-rounded p-2 shadow-sm">
                                            <i class="ti ti-chart-pie-2 fs-21"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-5">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Project Analysis
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
                            <div class="card-body pb-0">
                                <div id="projectAnalysis"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Projects Overview
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="mb-3 d-flex justify-content-between gap-2 align-items-center">
                                    <div>
                                        <div class="fw-medium mb-1">Percentage of Project Completion</div>
                                        <span class="text-danger fw-semibold"> 2.1% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                        <span class="fw-medium fs-11 text-muted">From Last Month</span>
                                    </div>
                                    <span class="fw-semibold fs-16">75%</span>
                                </div>
                                <div class="progress progress-lg mb-4">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-primary-transparent avatar-rounded me-2">
                                                <i class="ri-folder-2-line fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">Total Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-success fw-medium fs-11"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-primary ms-1">1,982</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                <i class="ri-loader-2-fill fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">Ongoing Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-danger fw-medium fs-11"> 1.3% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-secondary ms-1">214</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                <i class="ri-pause-fill fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">On-Hold Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-success fw-medium fs-11"> 2.0% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-success ms-1">262</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                <i class="ri-time-line fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">Pending Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-danger fw-medium fs-11"> 0.3% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-info ms-1">395</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-pink-transparent avatar-rounded">
                                                <i class="ri-close-fill fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">Inactive Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-success fw-medium fs-11"> 2.6% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-pink ms-1">395</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-1 py-1 p-0 mb-2">
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <span class="avatar avatar-sm bg-purple-transparent avatar-rounded">
                                                <i class="ri-check-fill fw-medium fs-18"></i> 
                                            </span>
                                            <span class="fw-medium">Finished Projects</span>
                                            <div class="ms-auto">
                                                <span class="text-danger fw-medium fs-11"> 0.2% <i class="ri-arrow-down-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="badge bg-purple ms-1">79</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="text-center p-3 border border-primary border-opacity-10 rounded-3 projects-active-card">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary mb-3">
                                                <i class="ri-file-list-3-line fs-20"></i>
                                            </span>
                                            <div class="mb-3">
                                                <div class="text-muted mb-2 fs-16">Active Projects</div>
                                                <h4 class="fw-semibold">6,289</h4>
                                            </div>
                                            <div class="text-muted fs-12">
                                                <span class="fw-medium">From Last Month</span>
                                                <span class="text-success fw-semibold"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                            <div id="projects-active" class="mt-3 mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="text-center p-3 border border-success border-opacity-25 rounded-3 projects-new-card">
                                            <span class="avatar avatar-lg avatar-rounded bg-success mb-3">
                                                <i class="ri-file-list-3-line fs-20"></i>
                                            </span>
                                            <div class="mb-3">
                                                <div class="text-muted mb-2 fs-16">New Projects</div>
                                                <h4 class="fw-semibold">1,056</h4>
                                            </div>
                                            <div class="text-muted fs-12">
                                                <span class="fw-medium">From Last Month</span>
                                                <span class="text-success fw-semibold"> 1.25% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                            </div>
                                            <div id="projects-new" class="mt-3 mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Todo Projects List
                                </div>
                                <a href="javascript:void(0);" class="btn btn-icon btn-primary rounded-circle btn-sm"><i class="ri-add-line lh-1 align-middle"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled projects-maintask-card mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-top flex-wrap">
                                            <div class="d-flex align-items-top flex-fill">
                                                <span class="me-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <span class="fw-medium fs-14">
                                                        Designing a landing page
                                                    </span>
                                                    <p class="mb-0 text-muted fs-12 mt-2">
                                                        <span class="avatar avatar-xs avatar-rounded align-middle">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        Ashwin Crown
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center ms-auto">
                                                <div>
                                                    <span class="d-block mt-1">
                                                        <span class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/2.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/8.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/2.jpg" alt="img">
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="fw-medium fs-11 text-muted">24 Oct,2024</span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-primary-transparent ms-2">
                                                        In progress
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pt-1">
                                        <div class="d-flex align-items-top flex-wrap">
                                            <div class="d-flex align-items-top flex-fill">
                                                <span class="me-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..." checked>
                                                </span>
                                                <div class="flex-fill">
                                                    <span class="fw-medium fs-14">
                                                        Implementing user authentication
                                                    </span>
                                                    <p class="mb-0 text-muted fs-12 mt-2">
                                                        <span class="avatar avatar-xs avatar-rounded align-middle">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        Ravi Sharma
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center ms-auto">
                                                <div>
                                                    <span class="d-block mt-1">
                                                        <span class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/4.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/5.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/6.jpg" alt="img">
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="fw-medium fs-11 text-muted">26 Oct, 2024</span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success-transparent ms-2">
                                                        Completed
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pt-1">
                                        <div class="d-flex align-items-top flex-wrap">
                                            <div class="d-flex align-items-top flex-fill">
                                                <span class="me-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <span class="fw-medium fs-14">
                                                        Finalizing the Project Budget
                                                    </span>
                                                    <p class="mb-0 text-muted fs-12 mt-2">
                                                        <span class="avatar avatar-xs avatar-rounded align-middle">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        Vikram Rao
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center ms-auto">
                                                <div>
                                                    <span class="d-block mt-1">
                                                        <span class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/11.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/12.jpg" alt="img">
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="fw-medium fs-11 text-muted">30 Oct, 2024</span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-primary-transparent ms-2">
                                                        In progress
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pt-1">
                                        <div class="d-flex align-items-top flex-wrap">
                                            <div class="d-flex align-items-top flex-fill">
                                                <span class="me-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="..." checked>
                                                </span>
                                                <div class="flex-fill">
                                                    <span class="fw-medium fs-14 text-muted op-7">
                                                        <s>Conducting User Testing</s>
                                                    </span>
                                                    <p class="mb-0 text-muted fs-12 mt-2">
                                                        <span class="avatar avatar-xs avatar-rounded align-middle">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                        Sneha Patel
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center ms-auto">
                                                <div>
                                                    <span class="d-block mt-1">
                                                        <span class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/14.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/15.jpg" alt="img">
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="fw-medium fs-11 text-muted">31 Oct, 2024</span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-danger-transparent ms-2">
                                                        Removed list
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-top flex-wrap">
                                            <div class="d-flex align-items-top flex-fill">
                                                <span class="me-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <span class="fw-medium fs-14">
                                                        Creating API Documentation
                                                    </span>
                                                    <p class="mb-0 text-muted fs-12 mt-2">
                                                        <span class="avatar avatar-xs avatar-rounded align-middle">
                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                        </span>
                                                        Ananya Verma
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center ms-auto">
                                                <div>
                                                    <span class="d-block mt-1">
                                                        <span class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/8.jpg" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="../assets/images/faces/9.jpg" alt="img">
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="fw-medium fs-11 text-muted">28 Oct, 2024</span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success-transparent ms-2">
                                                        Completed
                                                    </span>
                                                </div>
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
                                    Team Members
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/11.jpg" alt="Rahul Sharma">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Rahul Sharma</span>
                                                            <span class="d-block fs-11 text-muted mt-2">Project Manager</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">rahul.sharma@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/2.jpg" alt="Ananya Verma">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Ananya Verma</span>
                                                            <span class="d-block fs-11 text-muted mt-2">Developer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">ananya.verma@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/3.jpg" alt="Sneha Patel">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Sneha Patel</span>
                                                            <span class="d-block fs-11 text-muted mt-2">UI/UX Designer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">sneha.patel@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/14.jpg" alt="Vikram Rao">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Vikram Rao</span>
                                                            <span class="d-block fs-11 text-muted mt-2">Quality Analyst</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">vikram.rao@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/5.jpg" alt="Pooja Gupta">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Pooja Gupta</span>
                                                            <span class="d-block fs-11 text-muted mt-2">Business Analyst</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">pooja.gupta@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-top">
                                                        <span class="avatar avatar-sm flex-shrink-0 lh-1">
                                                            <img src="../assets/images/faces/15.jpg" alt="Amit Kumar">
                                                        </span>
                                                        <div class="ms-3 lh-1">
                                                            <span class="fw-semibold">Amit Kumar</span>
                                                            <span class="d-block fs-11 text-muted mt-2">Frontend Developer</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="fs-11 text-muted">amit.kumar@example.com</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
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
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Team Tasks
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-light">Tasks</th>
                                                <th scope="col" class="bg-light">Team</th>
                                                <th scope="col" class="bg-light">Timeline</th>
                                                <th scope="col" class="bg-light">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-medium">Design Mockups</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 05h:12m:05s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">API Development</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 08h:30m:15s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">User Testing</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 04h:45m:00s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Deployment</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 02h:30m:00s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 30%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-info-transparent">Scheduled</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Implementation</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 07h:20m:10s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                            </tr>  
                                            <tr>
                                                <td class="fs-12 fw-medium">Code Review</td>
                                                <td>
                                                    <span class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="fs-11 text-muted me-2">Track Time:</span>
                                                    <span class="fw-medium fs-12"> 03h:45m:25s</span>
                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">In Progress</span></td>
                                            </tr>                                                                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Projects Summary
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
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Project ID</th>
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Progress (%)</th>
                                                <th scope="col">End Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Budget</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#15481</td>
                                                <td>Website Redesign</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +5
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>2024-01-15</td>
                                                <td>100%
                                                    <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium text-pink">2024-03-30</td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                                <td class="fw-semibold">$10,000</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#15482</td>
                                                <td>Mobile App Development</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>2024-02-01</td>
                                                <td>75%
                                                    <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 35%"></div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium text-pink">2024-05-15</td>
                                                <td><span class="badge bg-warning-transparent">In Progress</span></td>
                                                <td class="fw-semibold">$15,000</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#15483</td>
                                                <td>Marketing Campaign</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>2024-03-10</td>
                                                <td>40%
                                                    <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium text-pink">2024-04-20</td>
                                                <td><span class="badge bg-danger-transparent">On Hold</span></td>
                                                <td class="fw-semibold">$5,000</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#15724</td>
                                                <td>Landing Page Redesign</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>2024-02-15</td>
                                                <td>100%
                                                    <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium text-pink">2024-05-30</td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                                <td class="fw-semibold">$12,000</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-sm btn-icon"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-success-light btn-sm btn-icon"><i class="ri-edit-line"></i></button>
                                                    <button class="btn btn-danger-light btn-sm btn-icon"><i class="ri-delete-bin-line"></i></button>
                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <td>#15484</td>
                                                <td>Data Analysis</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>2024-04-05</td>
                                                <td>86%
                                                    <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="fw-medium text-pink">2024-06-10</td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                                <td class="fw-semibold">$8,000</td>
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
                            <div class="card-footer border-top-0">
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
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Recent Transactions
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <ul class="list-unstyled project-transactions-card mb-0">
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-primary-transparent">
                                                            R
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Riya Malhotra</span>
                                                        <span class="d-block text-muted fs-11">Oct 10, 2024 - 11:30AM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$15,200</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-secondary-transparent">
                                                            A
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Ajay Singh</span>
                                                        <span class="d-block text-muted fs-11">Oct 12, 2024 - 02:45PM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$9,800</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-success-transparent">
                                                            S
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Sofia Khan</span>
                                                        <span class="d-block text-muted fs-11">Oct 14, 2024 - 09:20AM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$12,350</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-warning-transparent">
                                                            M
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Meera Sharma</span>
                                                        <span class="d-block text-muted fs-11">Oct 16, 2024 - 01:15PM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$4,500</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-danger-transparent">
                                                            T
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Tanvi Mehta</span>
                                                        <span class="d-block text-muted fs-11">Oct 20, 2024 - 10:00AM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$8,900</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-info-transparent">
                                                            N
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Sowmya Patel</span>
                                                        <span class="d-block text-muted fs-11">Oct 22, 2024 - 05:45PM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$5,600</h6>
                                                    </div>
                                                </div>
                                            </li>                                            
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-rounded fw-bold avatar-md bg-purple-transparent">
                                                            K
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Karan Bansal</span>
                                                        <span class="d-block text-muted fs-11">Oct 18, 2024 - 03:30PM</span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold">$6,250</h6>
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

    <!-- Projects Dashboard JS -->
    <script src="{{asset('assets/js/projects-dashboard.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 
    @endpush

    
