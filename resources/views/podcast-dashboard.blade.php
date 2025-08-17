
@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Podcast</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start Row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Favourites list
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled podcast-recently-played-list mb-0">
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/7.jpg" class="bg-primary bg-opacity-25" alt="Innovation Insights Podcast">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Innovation Insights</a>
                                                        <p class="mb-0 text-muted mt-1">Emily Davis</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">32 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">342 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">120 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/6.jpg" class="bg-secondary bg-opacity-25" alt="Marketing Mastery Podcast">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Marketing Mastery</a>
                                                        <p class="mb-0 text-muted mt-1">Lisa Reynolds</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">60 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">1,032 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">215 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/8.jpg" class="bg-success bg-opacity-25" alt="The Startup Journey Podcast">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">The Startup Journey</a>
                                                        <p class="mb-0 text-muted mt-1">Michael Johnson</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">50 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">845 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">98 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/9.jpg" class="bg-info bg-opacity-25" alt="Design Disruptors Podcast">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Design Disruptors</a>
                                                        <p class="mb-0 text-muted mt-1">Sarah Mitchell</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">40 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">1,120 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">180 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/12.jpg" class="bg-danger bg-opacity-25" alt="Sunset">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Sunset Lights</a>
                                                        <p class="mb-0 text-muted mt-1">Armaan Leo</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">35 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">879 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">445 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/7.jpg" class="bg-primary bg-opacity-25" alt="Endorphin Flow">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Endorphin Flow</a>
                                                        <p class="mb-0 text-muted mt-1">Live Lipi</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">86 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">1,457 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">10 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fav-pod-list">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="fav-podcast">
                                                            <img src="../assets/images/podcast/6.jpg" class="bg-success bg-opacity-25" alt="Under the sky">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="fw-semibold">Under the sky</a>
                                                        <p class="mb-0 text-muted mt-1">Bruno Math</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted">63 Mins</div>
                                                        <div class="d-flex gap-2 align-items-center mt-1">
                                                            <div class="fw-semibold me-1">603 <a href="javascript:void(0);" class="fw-medium text-primary"><i class="ti ti-thumb-up-filled fs-13 lh-1"></i></a></div>
                                                            <div class="fw-semibold">25 <a href="javascript:void(0);" class="fw-medium text-pink"><i class="ti ti-heart-filled fs-13 lh-1"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-8">
                                <div class="card custom-card overflow-hidden podcast-banner">
                                    <div class="card-body p-4">
                                        <div class="row gy-3 gy-xl-0">
                                            <div class="col-lg-10 my-auto">
                                                <h5 class="fw-semibold text-fixed-white">
                                                    Manage Your <span class="text-secondary">Podcast</span> Effectively
                                                </h5>
                                                <p class="fw-medium mb-4 pb-1 text-fixed-white op-7">Effortlessly manage, distribute, and track your podcast episodes to maximize reach and engagement.</p>
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-success shadow">
                                                        <i class="ri-volume-up-line me-2 fs-20 lh-1 align-middle"></i> Preview Your Latest Episodes
                                                    </button>
                                                </div>
                                            </div>                                    
                                            <div class="col-lg-2">
                                                <div class="podcast-img text-end">
                                                    <img src="../assets/images/podcast/11.jpg" class="img-fluid rounded-3" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Popular Artists
                                        </div>
                                        <button class="btn btn-primary btn-sm" type="button">View All</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="list-unstyled row mt-1">
                                            <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
                                                <div class="border border-primary border-opacity-10 align-items-center gap-2 p-3 text-center rounded-3 pod-artist">
                                                    <div class="lh-1 mb-3 rounded-circle">
                                                        <span class="podcast-author rounded-circle d-inline-block">
                                                            <span class="avatar avatar-xxl p-1 bg-white avatar-rounded">
                                                                <img src="../assets/images/podcast/1.jpg" alt="">
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-semibold">Tech Trends</a>
                                                        <p class="text-muted mb-2">Sarah Johnson</p>
                                                        <span class="text-primary fw-semibold">598 Posts</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
                                                <div class="border border-secondary border-opacity-10 align-items-center gap-2 p-3 text-center rounded-3 pod-artist">
                                                    <div class="lh-1 mb-3">
                                                        <span class="podcast-author secondary rounded-circle d-inline-block">
                                                            <span class="avatar avatar-xxl p-1 bg-white avatar-rounded">
                                                                <img src="../assets/images/podcast/2.jpg" alt="">
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-semibold">History Rewind</a>
                                                        <p class="text-muted mb-2">James Patterson</p>
                                                        <span class="text-secondary fw-semibold">598 Posts</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
                                                <div class="border border-success border-opacity-10 align-items-center gap-2 p-3 text-center rounded-3 pod-artist">
                                                    <div class="lh-1 mb-3">
                                                        <span class="podcast-author success rounded-circle d-inline-block">
                                                            <span class="avatar avatar-xxl p-1 bg-white avatar-rounded">
                                                                <img src="../assets/images/podcast/3.jpg" alt="">
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-semibold">Business Blow</a>
                                                        <p class="text-muted mb-2">Sona Kivinth</p>
                                                        <span class="text-success fw-semibold">598 Posts</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border border-info border-opacity-10 align-items-center gap-2 p-3 text-center rounded-3 pod-artist">
                                                    <div class="lh-1 mb-3">
                                                        <span class="podcast-author info rounded-circle d-inline-block">
                                                            <span class="avatar avatar-xxl p-1 bg-white avatar-rounded">
                                                                <img src="../assets/images/podcast/4.jpg" alt="">
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-semibold">Creativity</a>
                                                        <p class="text-muted mb-2">Afrith Davis</p>
                                                        <span class="text-info fw-semibold">598 Posts</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Activity by Week</div>
                                <button class="btn btn-light btn-sm" type="button">View All</button>
                            </div>
                            <div class="card-body my-1">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-primary-transparent border border-primary border-opacity-25 avatar-rounded">
                                            Mo
                                        </span>
                                    </div>
                                    <div class="flex-fill mt-1">
                                        <div class="d-flex align-items-top justify-content-between mb-2">
                                            <div>
                                                <div class="fw-semibold mb-1 lh-1">Episode 12</div>
                                                <p class="mb-0 text-muted">"How to Grow Your Podcast"</p>
                                            </div>
                                            <div class="text-muted fw-medium fs-12">Last Played</div>
                                        </div>
                                        <div class="d-flex align-items-top gap-3 justify-content-between">
                                            <div class="progress progress-lg p-1 rounded-pill progress-animate custom-progress-4 flex-fill" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-primary" style="width: 50%"></div>
                                            </div>
                                            <div><strong>24</strong><span class="text-muted"> mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-secondary-transparent border border-secondary border-opacity-25 avatar-rounded">
                                            Tu
                                        </span>
                                    </div>
                                    <div class="flex-fill mt-1">
                                        <div class="d-flex align-items-top justify-content-between mb-2">
                                            <div>
                                                <div class="fw-semibold mb-1 lh-1">Episode 13</div>
                                                <p class="mb-0 text-muted">"Monetization Strategie"</p>
                                            </div>
                                            <div class="text-muted fw-medium fs-12">Last Played</div>
                                        </div>
                                        <div class="d-flex align-items-top gap-3 justify-content-between">
                                            <div class="progress progress-lg p-1 rounded-pill progress-animate custom-progress-4 flex-fill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-secondary" style="width: 75%"></div>
                                            </div>
                                            <div><strong>36</strong><span class="text-muted"> mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-success-transparent border border-success border-opacity-25 avatar-rounded">
                                            We
                                        </span>
                                    </div>
                                    <div class="flex-fill mt-1">
                                        <div class="d-flex align-items-top justify-content-between mb-2">
                                            <div>
                                                <div class="fw-semibold mb-1 lh-1">Episode 14</div>
                                                <p class="mb-0 text-muted">"Growing Your"</p>
                                            </div>
                                            <div class="text-muted fw-medium fs-12">Last Played</div>
                                        </div>
                                        <div class="d-flex align-items-top gap-3 justify-content-between">
                                            <div class="progress progress-lg p-1 rounded-pill progress-animate custom-progress-4 flex-fill" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-success" style="width: 60%"></div>
                                            </div>
                                            <div><strong>30</strong><span class="text-muted"> mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-info-transparent border border-info border-opacity-25 avatar-rounded">
                                            Th
                                        </span>
                                    </div>
                                    <div class="flex-fill mt-1">
                                        <div class="d-flex align-items-top justify-content-between mb-2">
                                            <div>
                                                <div class="fw-semibold mb-1 lh-1">Episode 15</div>
                                                <p class="mb-0 text-muted">"How to Collaborate"</p>
                                            </div>
                                            <div class="text-muted fw-medium fs-12">Last Played</div>
                                        </div>
                                        <div class="d-flex align-items-top gap-3 justify-content-between">
                                            <div class="progress progress-lg p-1 rounded-pill progress-animate custom-progress-4 flex-fill" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-info" style="width: 40%"></div>
                                            </div>
                                            <div><strong>20</strong><span class="text-muted"> mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-0">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-pink-transparent border border-pink border-opacity-25 avatar-rounded">
                                            Fr
                                        </span>
                                    </div>
                                    <div class="flex-fill mt-1">
                                        <div class="d-flex align-items-top justify-content-between mb-2">
                                            <div>
                                                <div class="fw-semibold mb-1 lh-1">Episode 16</div>
                                                <p class="mb-0 text-muted">"Podcast SEO"</p>
                                            </div>
                                            <div class="text-muted fw-medium fs-12">Last Played</div>
                                        </div>
                                        <div class="d-flex align-items-top gap-3 justify-content-between">
                                            <div class="progress progress-lg p-1 rounded-pill progress-animate custom-progress-4 flex-fill" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-pink" style="width: 80%"></div>
                                            </div>
                                            <div><strong>40</strong><span class="text-muted"> mins</span></div>
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
                    <div class="col-xxl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Most Popular 
                                </div>
                                <button class="btn btn-light btn-sm" type="button">View All</button>
                            </div>
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/7.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Tech Trends </h6></a>
                                                                <p class="text-muted fs-12">Sarah Johnson</p>
                                                                <span class="fw-medium">1,234 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/8.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Mindful</h6></a>
                                                                <p class="text-muted fs-12">Emma Thompson</p>
                                                                <span class="fw-medium">4,567 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/9.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Startup Stories</h6></a>
                                                                <p class="text-muted fs-12">David Clark</p>
                                                                <span class="fw-medium">3,230 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/6.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">History Rewind</h6></a>
                                                                <p class="text-muted fs-12">James Patterson</p>
                                                                <span class="fw-medium">12,098 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6"> 
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/7.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Future Vision</h6></a>
                                                                <p class="text-muted fs-12">by Dr. Stone</p>
                                                                <span class="fw-medium">15,432 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-6"> 
                                        <div class="card custom-card shadow-none border bg-primary-transparent overflow-hidden mb-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="../assets/images/podcast/12.jpg" class="img-fluid h-100 w-100" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-start gap-2 flex-wrap">
                                                            <div>
                                                                <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Tech Sound</h6></a>
                                                                <p class="text-muted fs-12">By Mark Davis</p>
                                                                <span class="fw-medium">9,876 likes</span>
                                                            </div>
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                                <i class="ri-play-fill lh-1 align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                     Recently Played
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled podcast-played-list mb-2">
                                    <li class="played-list">
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/podcast/6.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Exploring Space</a>
                                                <span class="d-block fs-13 text-muted">By Dr. Neil Armstrong</span>
                                            </div>
                                            <div class="flex-fill text-center">
                                                <div class="text-muted fw-medium"><i class="ri-star-fill text-warning me-1 align-end lh-1"></i>4.5</div>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-gray-3"><i class="ri-heart-fill fs-18 lh-1 text-gray-3"></i></a>
                                                <span class="d-block fs-13 text-muted">60 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="played-list">
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/podcast/7.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Digital Nomads</a>
                                                <span class="d-block fs-13 text-muted">By Alex Green</span>
                                            </div>
                                            <div class="flex-fill text-center">
                                                <div class="text-muted fw-medium"><i class="ri-star-fill text-warning me-1 align-end lh-1"></i>4.5</div>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-danger"><i class="ri-heart-fill fs-18 lh-1 text-danger"></i></a>
                                                <span class="d-block fs-13 text-muted">50 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="played-list">
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/podcast/8.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Music & Culture</a>
                                                <span class="d-block fs-13 text-muted">By Olivia Harris</span>
                                            </div>
                                            <div class="flex-fill text-center">
                                                <div class="text-muted fw-medium"><i class="ri-star-fill text-warning me-1 align-end lh-1"></i>4.5</div>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-gray-3"><i class="ri-heart-fill fs-18 lh-1 text-gray-3"></i></a>
                                                <span class="d-block fs-13 text-muted">45 Mins</span>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="played-list">
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="../assets/images/podcast/9.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Culinary Creations</a>
                                                <span class="d-block fs-13 text-muted">By Chef Rachel Green</span>
                                            </div>
                                            <div class="flex-fill text-center">
                                                <div class="text-muted fw-medium"><i class="ri-star-fill text-warning me-1 align-end lh-1"></i>4.5</div>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-danger"><i class="ri-heart-fill fs-18 lh-1 text-danger"></i></a>
                                                <span class="d-block fs-13 text-muted">40 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary-light d-grid">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-2 -->
                
				<!-- Start::Row-3 -->
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between bg-light p-2 px-3 rounded-3">
                                    <h6 class="fw-semibold mb-0">Categories :</h6>
                                    <button class="btn btn-primary btn-sm" type="button">View All</button>
                                </div>
                                <div class="row row-cols-md-4 row-cols-sm-3 row-cols-xxl-auto personal-favourite-contacts mb-0 gap-2 flex-wrap">
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-primary-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-primary p-2">
                                                    <i class="ri-macbook-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Art & Creativity</div>
                                                <span class="text-muted">185</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-secondary-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-secondary p-2">
                                                    <i class="ri-briefcase-2-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Business</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-success-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-success p-2">
                                                    <i class="ri-heart-pulse-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Health</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-info-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-info p-2">
                                                    <i class="ri-football-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Sports</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-warning-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-warning p-2">
                                                    <i class="ri-briefcase-2-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Business</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-teal-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-teal p-2">
                                                    <i class="ri-flask-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Science</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col flex-fill">
                                        <div class="d-flex align-items-center bg-pink-transparent rounded-pill p-2 pe-5">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded bg-pink p-2">
                                                    <i class="ri-book-line fs-18 lh-1"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="fw-semibold mb-0 text-default">Education</div>
                                                <span class="text-muted">236</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Play List
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-light">Podcast Name</th>
                                                <th scope="col" class="bg-light">duration</th>
                                                <th scope="col" class="bg-light">Category</th>
                                                <th scope="col" class="bg-light">Latest Episode</th>
                                                <th scope="col" class="bg-light">Rating</th>
                                                <th scope="col" class="bg-light">Favourites</th>
                                                <th scope="col" class="bg-light">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="../assets/images/podcast/7.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Tech Talk Today</a>
                                                            <span class="fs-12 d-block text-muted">John Carter</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    200s
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Technology</span>
                                                </td>
                                                <td>
                                                    <span>#32:</span> AI Innovations and Future Trends
                                                </td>
                                                <td>
                                                    <span class="text-success fs-15 fw-semibold">4.8</span>
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="../assets/images/podcast/8.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Mindful Moments</a>
                                                            <span class="fs-12 d-block text-muted">Sophia Lee</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    180s
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">Wellness</span>
                                                </td>
                                                <td>
                                                    <span>#45:</span> Meditative Practices for Busy Minds
                                                </td>
                                                <td>
                                                    <span class="text-success fs-15 fw-semibold">4.7</span>
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="../assets/images/podcast/9.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">History Unfolded</a>
                                                            <span class="fs-12 d-block text-muted">Michael Thompson</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    220s
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">History</span>
                                                </td>
                                                <td>
                                                    <span>#66:</span> The Fall of the Roman Empire
                                                </td>
                                                <td>
                                                    <span class="text-success fs-15 fw-semibold">4.9</span>
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="../assets/images/podcast/10.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">The Startup Journey</a>
                                                            <span class="fs-12 d-block text-muted">David Nguyen</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    170s
                                                </td>
                                                <td>
                                                    <span class="badge bg-info-transparent">Business</span>
                                                </td>
                                                <td>
                                                    <span>#63:</span> Building a Brand from Scratch
                                                </td>
                                                <td>
                                                    <span class="text-success fs-15 fw-semibold">4.6</span>
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div> Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
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
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden bg-playing-image">
                            <div class="card-body p-4 text-fixed-white">
                                <h5 class="fw-semibold text-fixed-white mb-1 mt-2">Player</h5>
                                <p class="op-8 fs-12 mb-4">Enjoy the unlimited misic tracks</p>
                                <div class="text-center mb-4">
                                    <div class="mb-4 pod-player-img">
                                        <img src="../assets/images/podcast/1.jpg" alt="" class="rounded-circle shadow-sm">
                                    </div>
                                    <a href="javascript:void(0);"><h6 class="fw-semibold mb-1 text-fixed-white">Mindful Living</h6></a>
                                    <span class=" op-8 fs-12">By Wanderlost Explorers</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center mb-4">
                                    <div class="fs-12">12.25</div>
                                    <div class="progress progress-xs progress-custom progress-animate podcast-playing-progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="fs-12">23.45</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center pt-3 mb-2 flex-wrap gap-3 lh-1">
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-repeat-2-line fs-18 p-3 rounded-circle text-fixed-white pod-icons shadow-sm"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-skip-back-line fs-18 p-3 rounded-circle text-fixed-white pod-icons shadow-sm"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-pause-line fs-18 p-3 rounded-circle text-fixed-white pod-icons shadow-sm"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-skip-forward-line fs-18 p-3 rounded-circle text-fixed-white pod-icons shadow-sm"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-shuffle-line fs-18 p-3 rounded-circle text-fixed-white pod-icons shadow-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-3 -->

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

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 
    
    <!-- Custom-Switcher JS -->
    <script src="{{asset('assets/js/custom-switcher.js')}}"></script>
@endpush