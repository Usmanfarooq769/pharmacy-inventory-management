
@extends('layouts.app')

@section('content')
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">File Manager</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="file-manager-folders">
                                        <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                                            <div class="flex-fill">
                                                <h6 class="fw-medium mb-0">All Folders</h6>
                                            </div>
                                            <div class="d-flex gap-2 flex-lg-nowrap flex-wrap justify-content-sm-end w-75">
                                                <div class="input-group">
                                                    <input type="text" class="form-control w-50" placeholder="Search File" aria-describedby="button-addon01">
                                                    <button class="btn btn-primary-light" type="button" id="button-addon01"><i class="ri-search-line"></i></button>
                                                </div>
                                                <button class="btn btn-primary btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light text-nowrap"
                                                    data-bs-toggle="modal" data-bs-target="#create-folder">
                                                    <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                                                </button>
                                                <div class="modal fade" id="create-folder" tabindex="-1" aria-labelledby="create-folder" data-bs-keyboard="false">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                                                </h6>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="create-folder1" class="form-label">Folder Name</label>
                                                                <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-secondary-light btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#create-file">
                                                    <i class="ri-add-circle-line align-middle me-1"></i>Create File
                                                </button>
                                                <div class="modal fade" id="create-file" tabindex="-1"
                                                                aria-labelledby="create-file" data-bs-keyboard="false"
                                                                aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="staticBackdropLabel1">Create File
                                                                </h6>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="create-file1" class="form-label">File Name</label>
                                                                <input type="text" class="form-control" id="create-file1" placeholder="File Name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 file-folders-container">
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-semibold fs-15">Favourites</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted btn btn-light btn-sm"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-xl-3">
                                                    <div class="card custom-card border shadow-none bg-primary-transparent border-primary border-opacity-10">
                                                        <div class="card-body text-center">
                                                            <div class="mb-1 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <i class="ri-star-fill fs-14 lh-1 text-warning"></i>
                                                                <div>
                                                                    <div class="dropdown">
                                                                         <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> 
                                                                            <i class="ri-more-fill fw-semibold text-muted lh-1"></i> 
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" class="text-primary mb-3 p-2 bg-white rounded-circle shadow shadow-sm" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M5 19h14V5H5zm4-5.86l2.14 2.58l3-3.87L18 17H6z" opacity="0.3"/>
                                                                <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 16H5V5h14zm-4.86-7.14l-3 3.86L9 13.14L6 17h12z"/>
                                                            </svg>
                                                            <p class="mb-1 fw-semibold text-default fs-14"> All Images</p>
                                                            <p class="mb-0 fs-12 text-muted"> 245 files(26.14GB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="card custom-card border shadow-none bg-secondary-transparent border-secondary border-opacity-10">
                                                        <div class="card-body text-center">
                                                            <div class="mb-1 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <i class="ri-star-fill fs-14 lh-1 text-warning"></i>
                                                                <div>
                                                                    <div class="dropdown">
                                                                         <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> 
                                                                            <i class="ri-more-fill fw-semibold text-muted lh-1"></i> 
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" class="text-secondary mb-3 p-2 bg-white rounded-circle shadow shadow-sm" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M5 8h10v8H5z" opacity="0.3"/>
                                                                <path fill="currentColor" d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4zm-2 9H5V8h10z"/>
                                                            </svg>
                                                            <p class="mb-1 fw-semibold text-default fs-14"> All Videos</p>
                                                            <p class="mb-0 fs-12 text-muted"> 245 files(26.14GB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="card custom-card border shadow-none bg-success-transparent border-success border-opacity-10">
                                                        <div class="card-body text-center">
                                                            <div class="mb-1 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <i class="ri-star-fill fs-14 lh-1 text-warning"></i>
                                                                <div>
                                                                    <div class="dropdown">
                                                                         <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> 
                                                                            <i class="ri-more-fill fw-semibold text-muted lh-1"></i> 
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" class="text-success mb-3 p-2 bg-white rounded-circle shadow shadow-sm" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8 16h12V4H8zm4.5-6c.57 0 1.08.19 1.5.51V5h4v2h-3v5.5a2.5 2.5 0 0 1-5 0a2.5 2.5 0 0 1 2.5-2.5" opacity="0.3"/>
                                                                <path fill="currentColor" d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 14H8V4h12zm-7.5-1a2.5 2.5 0 0 0 2.5-2.5V7h3V5h-4v5.51c-.42-.32-.93-.51-1.5-.51a2.5 2.5 0 0 0 0 5M2 6v14c0 1.1.9 2 2 2h14v-2H4V6z"/>
                                                            </svg>
                                                            <p class="mb-1 fw-semibold text-default fs-14"> All Music</p>
                                                            <p class="mb-0 fs-12 text-muted"> 245 files(26.14GB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="card custom-card border shadow-none bg-info-transparent border-info border-opacity-10">
                                                        <div class="card-body text-center">
                                                            <div class="mb-1 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <i class="ri-star-fill fs-14 lh-1 text-warning"></i>
                                                                <div>
                                                                    <div class="dropdown">
                                                                         <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> 
                                                                            <i class="ri-more-fill fw-semibold text-muted lh-1"></i> 
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" class="text-info mb-3 p-2 bg-white rounded-circle shadow shadow-sm" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M13 4H6v16h12V9h-5z" opacity="0.3"/>
                                                                <path fill="currentColor" d="m20 8l-6-6H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2zm-2 12H6V4h7v5h5z"/>
                                                            </svg>
                                                            <p class="mb-1 fw-semibold text-default fs-14"> All Documents</p>
                                                            <p class="mb-0 fs-12 text-muted"> 245 files(26.14GB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-semibold fs-15">Folders</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted btn btn-light btn-sm"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-xxl-3 col-sm-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="../assets/images/media/file-manager/1.png" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-sm btn-light rounded-circle">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                                <div>
                                                                    <p class="fs-14 fw-medium mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Images</a>
                                                                    </p>
                                                                    <span class="text-muted fs-12">
                                                                        345 Files
                                                                    </span>
                                                                </div>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/11.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/5.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded lh-1 fs-12 align-middle bg- border border-dashed fw-medium shadow-sm bg-primary">
                                                                        <i class="ri-add-line align-middle fs-14"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="../assets/images/media/file-manager/1.png" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-sm btn-light rounded-circle">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <p class="fs-14 fw-medium mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Docs</a>
                                                                    </p>
                                                                    <span class="text-muted fs-12">
                                                                        45 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="avatar-list-stacked">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded lh-1 fs-12 align-middle bg- border border-dashed fw-medium shadow-sm bg-primary">
                                                                            <i class="ri-add-line align-middle fs-14"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="../assets/images/media/file-manager/1.png" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-sm btn-light rounded-circle">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <p class="fs-14 fw-medium mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Downloads</a>
                                                                    </p>
                                                                    <span class="text-muted fs-12">
                                                                        568 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="avatar-list-stacked">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/9.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded lh-1 fs-12 align-middle bg- border border-dashed fw-medium shadow-sm bg-primary">
                                                                            <i class="ri-add-line align-middle fs-14"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-sm-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="../assets/images/media/file-manager/1.png" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-sm btn-light rounded-circle">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <p class="fs-14 fw-medium mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Apps</a>
                                                                    </p>
                                                                    <span class="text-muted fs-12">
                                                                        247 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="avatar-list-stacked">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                                        </span>
                                                                        <span class="avatar avatar-sm avatar-rounded lh-1 fs-12 align-middle bg- border border-dashed fw-medium shadow-sm bg-primary">
                                                                            <i class="ri-add-line align-middle fs-14"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-semibold fs-15">Recent Files</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted btn btn-light btn-sm"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="table-responsive border border-bottom-0">
                                                        <table class="table text-nowrap table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">File Name</th>
                                                                    <th scope="col">Category</th>
                                                                    <th scope="col">Size</th>
                                                                    <th scope="col">Date Modified</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="files-list">
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-primary text-primary bg-primary-transparent avatar-rounded ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">MEETING_NOTES_2024.docx</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Documents</td>
                                                                    <td>1.2MB</td>
                                                                    <td>20 Mar 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success rounded-circle"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary rounded-circle"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-secondary text-secondary bg-secondary-transparent avatar-rounded ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">PROJECT_PLAN_MARCH_2024.pdf</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Documents</td>
                                                                    <td>2.3MB</td>
                                                                    <td>05 Apr 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success rounded-circle"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary rounded-circle"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-success text-success bg-success-transparent avatar-rounded ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M168,192h16a20,20,0,0,0,0-40H168v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="152" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="56 152 88 152 56 208 88 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">BUDGET_REPORT_2024.xlsx</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Spreadsheets</td>
                                                                    <td>550KB</td>
                                                                    <td>11 Jan 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success rounded-circle"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary rounded-circle"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table-active">
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-info text-info bg-info-transparent avatar-rounded ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" opacity="0.2"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,152a32.5,32.5,0,0,1,0,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,224h32a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">PROJECT_UPDATE_2024.mp4</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Videos</td>
                                                                    <td>1.5GB</td>
                                                                    <td>12, Jun 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success rounded-circle"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary rounded-circle"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-danger text-danger bg-danger-transparent avatar-rounded ">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="216 152 184 152 184 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="208" y1="184" x2="184" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,192H64a20,20,0,0,0,0-40H48v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M112,152v56h16a28,28,0,0,0,0-56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">FINANCIAL_REPORT_Q2.pdf</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Reports</td>
                                                                    <td>3.1MB</td>
                                                                    <td>05, Jun 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success rounded-circle"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary rounded-circle"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan="5">
                                                                        <nav aria-label="Page navigation">
                                                                            <nav aria-label="Page navigation" class="pagination-style-4 float-end">
                                                                                <ul class="pagination mb-0">
                                                                                    <li class="page-item disabled">
                                                                                        <a class="page-link" href="javascript:void(0)">
                                                                                            Prev
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                                                    <li class="page-item">
                                                                                        <a class="page-link text-primary" href="javascript:void(0)">
                                                                                            next
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </nav>
                                                                        </nav>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 p-3 bg-light rounded border mb-3">
                                        <div>
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-hard-drive-2-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div> Storage
                                                <p class="mb-0"><span class="fw-bold fs-14">68.12GB</span> Used</p>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <p class="fs-12 text-success fw-semibold mb-0">21.35GB free space</p>
                                            <p class="fs-12 text-muted fw-medium mb-0">Available:</p>
                                        </div>
                                    </div>
                                    <div id="file-manager-storage"></div>
                                </div>
                                <div class="card-footer p-0">
                                    <div class="m-3 mb-0">
                                        <span class="fs-12 text-muted">Storage Details</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon primary">
                                                    <div class="p-1 rounded-circle bg-primary-transparent border border-primary border-opacity-10">
                                                        <div class="avatar avatar-sm text-primary">
                                                            <i class="ti ti-photo fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Media</span>
                                                    <span class="text-muted fs-12 d-block">3,145 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-primary mb-0 fs-14">45GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-primary bg-opacity-10 mt-2" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon secondary">
                                                    <div class="p-1 rounded-circle bg-secondary-transparent border border-secondary border-opacity-10">
                                                        <div class="avatar avatar-sm text-secondary">
                                                            <i class="ti ti-download fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Downloads</span>
                                                    <span class="text-muted fs-12 d-block">568 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-secondary mb-0 fs-14">66GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-secondary bg-opacity-10 mt-3" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-secondary progress-bar-animated" style="width: 86%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon success">
                                                    <div class="p-1 rounded-circle bg-success-transparent border border-success border-opacity-10">
                                                        <div class="avatar avatar-sm text-success">
                                                            <i class="ti ti-layout-grid fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Apps</span>
                                                    <span class="text-muted fs-12 d-block">74 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-success mb-0 fs-14">55GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-success bg-opacity-10 mt-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon info">
                                                    <div class="p-1 rounded-circle bg-info-transparent border border-info border-opacity-10">
                                                        <div class="avatar avatar-sm text-info">
                                                            <i class="ti ti-file-description fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Documents</span>
                                                    <span class="text-muted fs-12 d-block">1,441 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-info mb-0 fs-14">34GB </span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-info bg-opacity-10 mt-3" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" style="width: 80%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="filemanager-upgrade-storage w-100 text-center"> 
                                        <span class="d-block mb-3 pb-1 bg-success-transparent rounded-2"> 
                                            <img src="../assets/images/media/file-manager/2.png" alt="" class="img-fluid"> 
                                        </span>
                                        <span class="fs-16 fw-semibold text-default">Unlock Premium Features Today!</span>
                                        <span class="d-block text-muted mt-2 fs-12">Upgrade now to enjoy unlimited storage and advanced tools for better management.</span> 
                                        <div class="mt-3 d-grid"> 
                                            <button class="btn btn-lg btn-primary btn-wave waves-effect waves-light"><i class="ri-vip-crown-line lh-1 text-warning me-1 fs-16 fw-medium"></i>Upgrade to Premium</button>
                                        </div> 
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

            <!-- End::app-content -->

            <!-- Start::mail information offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                <div class="offcanvas-body p-0">
                    <div class="selected-file-details">
                        <div class="d-flex p-3 align-items-center justify-content-between border-bottom">
                            <div>
                                <h6 class="fw-medium mb-0">File Details</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown me-1">
                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Copy</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Move</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Raname</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-sm btn-icon btn-outline-light border" data-bs-dismiss="offcanvas"
                                    aria-label="Close"><i class="ri-close-line"></i></button>
                            </div>
                        </div>
                        <div class="filemanager-file-details" id="filemanager-file-details">
                            <div class="p-3 text-center border-bottom border-block-end-dashed">
                                <div class="file-details mb-3">
                                    <img src="../assets/images/media/media-28.jpg" alt="">
                                </div>
                                <div>
                                    <p class="mb-0 fw-medium fs-16">IMG-11245892-SPK123.jpg</p>
                                    <p class="mb-0 text-muted fs-10">512KB | 25,Nov 2024</p>
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div>
                                            <span class="fw-medium">File Format : </span><span class="fs-12 text-muted">jpg</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div>
                                            <p class="fw-medium mb-0">File Description : </p>
                                            <span class="fs-12 text-muted">This file contains updated content for the "Luxury Collection" with a total of 55 images, along with new design layouts for product showcasing.</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fw-medium mb-0">File Location : </p>
                                        <span class="fs-12 text-muted">Device/Storage/Images/IMG-11245892-SPK123.jpg</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <p class="mb-1 fw-medium fs-14">Downloaded from :</p>
                                <a class="text-primary fw-medium text-break" href="https://www.example.com/portfolio" target="_blank">
                                    <u>https://www.example.com/portfolio</u>
                                </a>
                            </div>
                            <div class="p-3">
                                <p class="mb-2 fw-medium fs-14">Shared With :</p>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="../assets/images/faces/2.jpg" alt="">
                                        </span>
                                        <span class="fw-medium flex-fill">Sophia Reyes</span>
                                        <span class="badge bg-success-transparent fw-normal">29,Nov 2024</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="../assets/images/faces/6.jpg" alt="">
                                        </span>
                                        <span class="fw-medium flex-fill">Ethan Lee</span>
                                        <span class="badge bg-success-transparent fw-normal">18,Oct 2024</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="../assets/images/faces/3.jpg" alt="">
                                        </span>
                                        <span class="fw-medium flex-fill">Olivia Carter</span>
                                        <span class="badge bg-success-transparent fw-normal">12,Dec 2024</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center p-2">
                                        <span class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="../assets/images/faces/4.jpg" alt="">
                                        </span>
                                        <span class="fw-medium flex-fill">James Taylor</span>
                                        <span class="badge bg-success-transparent fw-normal">01,May 2024</span>
                                    </div>
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::mail information offcanvas -->

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

        <!-- Internal File Manager JS -->
        <script src="{{asset('assets/js/file-manager.js')}}"></script>

        <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
 

 @endpush