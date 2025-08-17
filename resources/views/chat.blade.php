
@extends('layouts.app')
<link rel="stylesheet" href="../assets/libs/glightbox/css/glightbox.min.css">
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Chat</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chat</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                
                <div class="main-chart-wrapper gap-lg-2 gap-0 mb-2 d-lg-flex">
                    <div class="chat-info border">
                        <a aria-label="anchor" href="javascript:void(0)" class="btn btn-secondary btn-icon rounded-circle chat-add-icon"> <i class="ri-add-line"></i> </a>
                        <div class="chat-search p-3 border-bottom"> 
                            <div class="input-group"> 
                                <input type="text" class="form-control" placeholder="Search Chat" aria-describedby="button-addon01"> 
                                <button aria-label="button" class="btn btn-primary" type="button" id="button-addon01">
                                    <i class="ri-search-line"></i>
                                </button> 
                            </div> 
                        </div>
                        <ul class="nav nav-tabs tab-style-2 d-flex flex-nowrap overflow-x-auto"
                            id="myTab1" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link active" id="users-tab" data-bs-toggle="tab"
                                    data-bs-target="#users-tab-pane" type="button" role="tab"
                                    aria-controls="users-tab-pane" aria-selected="true">Chat
                                </button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link text-nowrap" id="groups-tab" data-bs-toggle="tab"
                                    data-bs-target="#groups-tab-pane" type="button" role="tab"
                                    aria-controls="groups-tab-pane" aria-selected="false">Groups
                                    <i class="ri-circle-fill text-success fs-7 align-middle lh-1 ms-1"></i>
                                </button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link text-nowrap" id="status-tab" data-bs-toggle="tab"
                                    data-bs-target="#status-tab-pane" type="button" role="tab"
                                    aria-controls="status-tab-pane" aria-selected="false">Status
                                    <i class="ri-circle-fill text-danger fs-7 align-middle lh-1 ms-1"></i>
                                </button>
                            </li>
                            <li class="nav-item flex-fill ms-auto" role="presentation">
                                <button class="nav-link w-100" id="call-tab" data-bs-toggle="tab"
                                    data-bs-target="#call-tab-pane" type="button" role="tab"
                                    aria-controls="call-tab-pane" aria-selected="false">Call
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content border-top" id="myTabContent">
                            <div class="tab-pane show active border-0 chat-users-tab" id="users-tab-pane"
                                role="tabpanel" aria-labelledby="users-tab" tabindex="0">
                                <ul class="list-unstyled mb-0 mt-2 chat-users-tab" id="chat-msg-scroll">
                                    <li class="pb-0">
                                        <p class="text-muted fs-11 fw-medium mb-2 op-7">Active Chats</p>
                                    </li>
                                    <li class="checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Alex Turner','7','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/7.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Alex Turner <span class="float-end text-muted fw-normal fs-11">12:30PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Hey! How's everything going? &#128522;</span>
                                                        <span class="badge bg-info rounded-pill float-end">5</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-msg-unread checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Ella Fitzgerald','6','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/6.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Ella Fitzgerald <span class="float-end text-muted fw-normal fs-11">08:45AM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0 chat-msg-typing ">
                                                        <span class="chat-msg text-truncate">Typing... &#8986;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ti ti-checks"></i></span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ti ti-checks"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Liam Neeson','2','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Liam Neeson <span class="float-end text-muted fw-normal fs-11">11:05AM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Excited for our meeting later! &#9749;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ti ti-checks"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="checkforactive active">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Natalie Portman','1','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/1.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Natalie Portman <span class="float-end text-muted fw-normal fs-11">09:30AM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Can't wait to discuss our project! &#127881;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pb-0">
                                        <p class="text-muted fs-11 fw-medium mb-2">All Chats</p>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Sophia Loren','4','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/4.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Sophia Loren <span class="float-end text-muted fw-normal fs-11">05:30PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Let's catch up soon! &#11088;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'James Dean','9','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/9.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        James Dean <span class="float-end text-muted fw-normal fs-11">10:30PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Can you send me the files? &#128196;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Emma Watson','8','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Emma Watson <span class="float-end text-muted fw-normal fs-11">07:45AM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Thanks for your help! &#128522;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Brad Pitt','5','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/5.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Brad Pitt <span class="float-end text-muted fw-normal fs-11">02:20PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Let's meet next week! &#128197;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Scarlett Johansson','6','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/6.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Scarlett Johansson <span class="float-end text-muted fw-normal fs-11">03:30PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Can you confirm our schedule? &#128197;</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane border-0 chat-groups-tab" id="groups-tab-pane"
                                role="tabpanel" aria-labelledby="groups-tab" tabindex="0">
                                <ul class="list-unstyled mb-0 mt-2 ">
                                    <li class="pb-0">
                                        <p class="text-muted fs-11 fw-medium mb-1 op-7">MY CHAT GROUPS</p>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium">
                                                    <i class="ri-checkbox-blank-circle-fill lh-1 text-primary me-1 fs-8 align-middle"></i>Adventure Seekers
                                                    <span class="badge bg-success-transparent ms-1">6</span>
                                                </p>
                                            </div>
                                            <div class="avatar-list-stacked my-auto">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/7.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                    href="javascript:void(0);">
                                                    +10
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium">
                                                    <i class="ri-checkbox-blank-circle-fill lh-1 text-success me-1 fs-8 align-middle"></i>Art Enthusiasts
                                                    <span class="badge bg-secondary-transparent ms-1">4</span>
                                                </p>
                                            </div>
                                            <div class="avatar-list-stacked my-auto">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/9.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                    href="javascript:void(0);">
                                                    +50
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium">
                                                    <i class="ri-checkbox-blank-circle-fill lh-1 text-secondary me-1 fs-8 align-middle"></i>Nature Lovers
                                                    <span class="badge bg-primary-transparent ms-1">7</span>
                                                </p>
                                            </div>
                                            <div class="avatar-list-stacked my-auto">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                    href="javascript:void(0);">
                                                    +25
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium">
                                                    <i class="ri-checkbox-blank-circle-fill lh-1 text-secondary me-1 fs-8 align-middle"></i>Book Club
                                                    <span class="badge bg-secondary-transparent ms-1">8</span>
                                                </p>
                                            </div>
                                            <div class="avatar-list-stacked my-auto">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                    href="javascript:void(0);">
                                                    +30
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>    
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium">
                                                    <i class="ri-checkbox-blank-circle-fill lh-1 text-warning me-1 fs-8 align-middle"></i>Tech Updates
                                                    <span class="badge bg-warning-transparent ms-1">5</span>
                                                </p>
                                            </div>
                                            <div class="avatar-list-stacked my-auto">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                    href="javascript:void(0);">
                                                    +40
                                                </a>
                                            </div>
                                        </div>
                                    </li>                                    
                                </ul>
                                <ul class="list-unstyled mb-0 mt-2 ">
                                    <li class="pb-0">
                                        <p class="text-muted fs-11 fw-medium mb-1 op-7">GROUP CHATS</p>
                                    </li>
                                    <li class="checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Adventure Seekers','7','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/7.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Adventure Seekers <span class="float-end text-muted fw-normal fs-11">12:24PM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0 chat-msg-typing ">
                                                        <span class="chat-msg text-truncate">Mony Typing...</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                        <span class="badge bg-info rounded-circle float-end">2</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-msg-unread checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Art Enthusiasts','8','online')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md online me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Art Enthusiasts <span class="float-end text-muted fw-normal fs-11">06:16AM</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate"><span class="group-individual">Kin:</span> Have any updates today?</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Nature Lovers &#127794;','9','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/9.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Nature Lovers &#127794; <span class="float-end text-muted fw-normal fs-11">2 days ago</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Samantha, Adam, Jessica, Emily, Alex</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Book Club','10','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/10.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Book Club <span class="float-end text-muted fw-normal fs-11">3 days ago</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Elsa, Henry, Susan, Emily, Ashlin</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-inactive checkforactive">
                                        <a href="javascript:void(0);" onclick="changeTheInfo(this,'Tech Updates','11','offline')">
                                            <div class="d-flex align-items-top">
                                                <div class="me-1 lh-1">
                                                    <span class="avatar avatar-md offline me-2 p-1 border border-secondary avatar-rounded">
                                                        <img src="../assets/images/faces/11.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">
                                                        Tech Updates <span class="float-end text-muted fw-normal fs-11">10 days ago</span>
                                                    </p>
                                                    <p class="fs-12 mb-0">
                                                        <span class="chat-msg text-truncate">Emanuel, Rony, Alina, Lilly, Rush</span>
                                                        <span class="chat-read-icon float-end align-middle"><i class="ri-check-double-fill"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane border-0 chat-status-tab py-3 px-3" id="status-tab-pane" role="tabpanel"
                                aria-labelledby="status-tab" tabindex="0">
                                <ul class="list-unstyled mb-0 chat-status-tab">
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/9.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">My Status</div>
                                                <p class="mb-0 text-muted fs-11">Tap to add status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <p class="text-muted fs-11 fw-medium mb-2 op-7">YOUR STATUS</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/9.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">You</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Today, 09:03</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="mb-0 text-muted fs-12"><i class="ri-eye-line lh-1 me-1"></i> 12</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/9.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">You</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Today, 08:36</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="mb-0 text-muted fs-12"><i class="ri-eye-line lh-1 me-1"></i> 35</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <p class="text-muted fs-11 fw-medium mb-2 op-7">NEW STATUS</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/2.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Advitha</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Today, 13:45</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/13.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Revanth</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Today, 12:15</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/5.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Samista Roy</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Today, 09:32</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/12.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Govardhan</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Yesterday, 15:45</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/6.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Lavanya</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Yesterday, 14:11</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md avatar-rounded p-1 border border-secondary border-dashed">
                                                <img src="../assets/images/faces/11.jpg" alt="">
                                            </span>
                                            <div>
                                                <div class="fw-semibold">Sunil</div>
                                                <p class="mb-0 text-muted fs-12"><i class="ri-time-line lh-1 me-1"></i> Yesterday, 04:12</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade border-0 call-tab" id="call-tab-pane" role="tabpanel"
                                aria-labelledby="call-tab" tabindex="0">
                                <ul class="list-unstyled mb-0 mt-2 call-tab">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md online me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Aarav Sharma
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">Today, 12:47PM</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md online me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Priya Gupta
                                                    <span class="ms-1 outgoing-call-failed"><i class="ti ti-arrow-up-right"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">Today, 10:27AM</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Vikram Malhotra
                                                    <span class="ms-1 outgoing-call-success"><i class="ti ti-arrow-up-right"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">Yesterday, 12:45PM</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ti ti-video"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Neha Kapoor
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">3 Days ago</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Rahul Desai
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">2 Days ago</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ti ti-video"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Priyanka Singh
                                                    <span class="ms-1 outgoing-call-failed"><i class="ti ti-arrow-up-right"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">24, Oct 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md online me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/7.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Deepika Mehta
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">22, Oct 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md online me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Rohan Khanna
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">13, Oct 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ti ti-video"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/9.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Sameer Choudhary
                                                    <span class="ms-1 outgoing-call-failed"><i class="ti ti-arrow-up-right"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">13, Sep 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Kavya Iyer
                                                    <span class="ms-1 outgoing-call-success"><i class="ti ti-arrow-up-right"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">10, July 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md offline me-2 avatar-rounded p-1 border border-secondary">
                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                </span>
                                            </div>
                                            <div class="flex-fill my-auto">
                                                <p class="mb-0 fw-semibold">
                                                    Neeraj Tiwari
                                                    <span class="ms-1 incoming-call-success"><i class="ti ti-arrow-down-left"></i></span>
                                                </p>
                                                <p class="fs-12 mb-0">
                                                    <span class="text-muted text-truncate">1, Apr 2023</span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                    <i class="ti ti-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-chat-area border">
                        <div class="d-flex align-items-center border-bottom main-chat-head flex-wrap p-3 gap-2">
                            <span class="avatar avatar-md online chatstatusperson me-2 lh-1 p-1 border border-secondary avatar-rounded">
                                    <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                                </span>
                            <div class="flex-fill">
                                <p class="mb-0 fw-semibold fs-15">
                                    <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="chatnameperson responsive-userinfo-open">Ella Fitzgerald</a>
                                </p>
                                <p class="text-muted mb-0 chatpersonstatus fs-12">Last seen: Today, 8:45AM</p>
                            </div>
                            <div class="d-flex flex-wrap rightIcons gap-2">
                                <button aria-label="button" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Call" class="btn btn-icon btn-secondary my-0 btn-sm rounded-circle">
                                    <i class="ti ti-phone"></i>
                                </button>
                                <button aria-label="button" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Video" class="btn btn-icon btn-success my-0 d-none d-sm-block btn-sm rounded-circle">
                                    <i class="ti ti-video"></i>
                                </button>
                                <button aria-label="button" type="button" class="btn btn-icon btn-primary btn-sm rounded-circle responsive-userinfo-open">
                                    <i class="ti ti-user-circle" id="responsive-chat-close"></i>
                                </button>
                                <div class="dropdown">
                                    <button aria-label="button" class="btn btn-icon btn-info btn-sm rounded-circle btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-user-3-line me-1"></i>Profile</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-format-clear me-1"></i>Clear Chat</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-user-unfollow-line me-1"></i>Delete User</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-user-forbid-line me-1"></i>Block User</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-error-warning-line me-1"></i>Report</a></li>
                                    </ul>
                                </div>
                                <button aria-label="button" type="button" class="btn btn-icon btn-primary btn-sm rounded-circle my-0 responsive-chat-close">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </div>
                        <div class="chat-content" id="main-chat-content">
                            <ul class="list-unstyled">
                                <li class="chat-day-label">
                                    <span>Today</span>
                                </li>
                                <li class="chat-item-start">
                                    <div class="chat-list-inner">
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson p-1 border border-secondary avatar-rounded">
                                                <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="ms-3">
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">Hey! &#128522; Have you tried that new restaurant in town? I heard their biryani is fantastic!</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="chatnameperson">Kerina Cherish</span> <span class="msg-sent-time">Today, 10:20 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-end">
                                    <div class="chat-list-inner">
                                        <div class="me-3">
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">Oh, hey! &#128516; I've been meaning to go! I'm free this weekend, maybe we can check it out together?</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="msg-sent-time"><span class="chat-read-mark align-middle d-inline-flex"><i class="ti ti-checks"></i></span>Today, 11:50 PM</span> You
                                            </span>
                                        </div>
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online p-1 border border-secondary avatar-rounded">
                                                <img src="../assets/images/faces/9.jpg" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-start">
                                    <div class="chat-list-inner">
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson p-1 border border-secondary avatar-rounded">
                                                <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="ms-3">
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">Absolutely! I've heard the ambience is great too. Let's decide on a time!</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="chatnameperson">Kerina Cherish</span> <span class="msg-sent-time">Today, 11:51 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-end">
                                    <div class="chat-list-inner">
                                        <div class="me-3">
                                            <div class="main-chat-msg">
                                                <div class="">
                                                    <p class="mb-0">How about Saturday afternoon? I can pick you up around 3 PM. &#127881;</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="msg-sent-time"><span class="chat-read-mark align-middle d-inline-flex"><i class="ti ti-checks"></i></span>Today, 11:52 PM</span> You
                                            </span>
                                        </div>
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online p-1 border border-secondary avatar-rounded">
                                                <img src="../assets/images/faces/9.jpg" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-start">
                                    <div class="chat-list-inner">
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online chatstatusperson p-1 border border-secondary avatar-rounded">
                                                <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="ms-3">
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">Sounds perfect! Can't wait to try their food. &#127830;</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="chatnameperson">Kerina Cherish</span> <span class="msg-sent-time">Today, 11:55 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-end">
                                    <div class="chat-list-inner">
                                        <div class="me-3">
                                            <div class="main-chat-msg">
                                                <div class="">
                                                    <p class="mb-0">Great! I'll text you the details later. Looking forward to it! &#128241;</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1">
                                                <span class="msg-sent-time"><span class="chat-read-mark align-middle d-inline-flex"><i class="ti ti-checks"></i></span>Today, 11:56 PM</span> You
                                            </span>
                                        </div>
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online p-1 border border-secondary avatar-rounded">
                                                <img src="../assets/images/faces/9.jpg" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="chat-item-start">
                                    <div class="chat-list-inner">
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online p-1 border border-secondary avatar-rounded">
                                                <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="ms-3">
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">Awesome! Talk later. &#128516;</p>
                                                </div>
                                            </div>
                                            <span class="chatting-user-info mt-1 chatnameperson">
                                                Kerina Cherish <span class="msg-sent-time">Today, 11:57 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="chat-footer">
                            <a aria-label="anchor" class="btn btn-secondary-light me-2 btn-icon btn-send" href="javascript:void(0)">
                                <i class="ri-attachment-2"></i>
                            </a>
                            <a aria-label="anchor" class="btn btn-icon me-2 btn-success emoji-picker" href="javascript:void(0)">
                                <i class="ri-emotion-line"></i>
                            </a>
                            <input class="form-control chat-message-space" placeholder="Type your message here..." type="text">
                            <a aria-label="anchor" class="btn btn-primary ms-2 btn-icon btn-send" href="javascript:void(0)">
                                <i class="ri-send-plane-2-line"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
           
        <!-- End::app-content -->

        <!-- Start::chat user details offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-body">
                <button type="button" class="btn btn-sm btn-icon btn-outline-light border float-end mb-3" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="ri-close-line lh-1 align-center"></i></button>
                <div class="chat-user-details" id="chat-user-details">
                    <div class="text-center mb-4 p-3 bg-primary-transparent rounded">
                        <span class="avatar avatar-rounded online avatar-xxl me-2 mb-3 chatstatusperson p-1 border border-secondary">
                            <img class="chatimageperson" src="../assets/images/faces/6.jpg" alt="img">
                        </span>
                        <p class="mb-1 fs-15 fw-semibold text-dark lh-1 chatnameperson">Ella Fitzgerald</p>
                        <p class="fs-12 text-muted"><span class="chatnameperson">ellafitzgerald99</span>@gmail.com</p>
                        <p class="text-center mb-0">
                            <button type="button" aria-label="button" class="btn btn-icon rounded-pill btn-primary"><i
                                    class="ri-phone-line"></i></button>
                            <button type="button" aria-label="button" class="btn btn-icon rounded-pill btn-secondary ms-2"><i
                                    class="ri-video-add-line"></i></button>
                            <button type="button" aria-label="button" class="btn btn-icon rounded-pill btn-success ms-2"><i
                                    class="ri-chat-1-line"></i></button>
                        </p>
                    </div>
                    <div class="mb-2">
                        <div class="fw-semibold mb-4 fs-15">Photos & Media
                            <span class="badge bg-primary-transparent rounded-circle ms-1">22</span>
                            <span class="float-end fs-11"><a href="javascript:void(0);" class="link-primary text-underline"><u>View All</u></a></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-40.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-41.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-41.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-42.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-43.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-43.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-44.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-44.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-45.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-45.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-46.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-60.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-60.jpg" alt="image" >
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <a href="../assets/images/media/media-61.jpg" class="glightbox card" data-gallery="gallery1">
                                    <img src="../assets/images/media/media-61.jpg" alt="image" >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="fw-semibold mb-4 fs-15">Shared Files
                            <span class="badge bg-primary-transparent rounded-circle ms-1">4</span>
                            <span class="float-end fs-11"><a href="javascript:void(0);" class="link-primary text-underline"><u>View All</u></a></span>
                        </div>
                        <ul class="list-group shared-files">
                            <li class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md bg-primary avatar-rounded">
                                        <i class="ti ti-file-text"></i>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <p class="fs-12 fw-semibold mb-0">Project_Report_2024.pdf</p>
                                    <p class="mb-0 text-muted fs-11">01,Sep 2024 - 09:15AM</p>
                                </div>
                                <div class="fs-18">
                                    <a aria-label="download" href="javascript:void(0)"><i class="ti ti-download text-muted"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md bg-info avatar-rounded">
                                        <i class="ti ti-video"></i>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <p class="fs-12 fw-semibold mb-0">Project_Overview_Video.mp4</p>
                                    <p class="mb-0 text-muted fs-11">30,Aug 2024 - 11:18AM</p>
                                </div>
                                <div class="fs-18">
                                    <a aria-label="download" href="javascript:void(0)"><i class="ti ti-download text-muted"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md bg-secondary avatar-rounded">
                                        <i class="ti ti-photo"></i>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <p class="fs-12 fw-semibold mb-0">Design_Mockup_2024.jpg</p>
                                    <p class="mb-0 text-muted fs-11">30,Aug 2024 - 11:22AM</p>
                                </div>
                                <div class="fs-18">
                                    <a aria-label="download" href="javascript:void(0)"><i class="ti ti-download text-muted"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md bg-success avatar-rounded">
                                        <i class="ti ti-photo"></i>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <p class="fs-12 fw-semibold mb-0">Final_Illustration_2024.png</p>
                                    <p class="mb-0 text-muted fs-11">30,Aug 2024 - 11:20AM</p>
                                </div>
                                <div class="fs-18">
                                    <a aria-label="download" href="javascript:void(0)"><i class="ti ti-download text-muted"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::chat user details offcanvas -->

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
    <script src="{{asset('assets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>
    
    <!-- Gallery JS -->
    <script src="{{asset('assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Chat JS -->
    <script src="{{asset('assets/js/chat.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    @depends 
