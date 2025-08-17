
 
@extends('layouts.app')
<!-- GLightbox CSS -->
<link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css')}}">

@section('content')
       

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Blog Details</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-1">
                                            <div>
                                                <p class="h5 fw-semibold">Deliciously Divine: The Ultimate Guide to Perfecting Your Cake Making Skills and Techniques</p>
                                                <p class="text-muted mb-0">Perfecting Your Cake Making Skills:  The Joyful Journey of Cake Making from Classic Recipes to Modern Masterpieces</p>
                                            </div>
                                            <div class="btn rounded-pill btn-pink btn-sm"><i class="ti ti-share me-1"></i> Share</div>
                                        </div>
                                        <div class="mt-2 mb-3">
                                            <span class="badge bg-success fs-13 me-1">Cakes</span>
                                            <span class="badge bg-primary fs-13">Pastries</span>
                                        </div>
                                        <div class="d-sm-flex align-items-center mb-3">
                                            <div class="d-flex align-items-center flex-fill gap-3 flex-wrap">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="../assets/images/faces/12.jpg" alt="Baker Image">
                                                </span>
                                                <p class="mb-0 fw-medium">Sophie Baker</p>
                                                <div class="fs-12 text-muted"><i class="ti ti-calendar me-1 d-inline-block"></i>3rd October, 2024</div>
                                                <span class="text-muted fs-12"><i class="ti ti-clock me-1 d-inline-block"></i>10:30</span>
                                            </div>
                                            <div class="btn-list mt-sm-0 mt-2">
                                                <div class="d-flex gap-2 fs-11 ms-auto">
                                                    <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1 d-inline-block"></i>68 Comments</div>
                                                    <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1 d-inline-block"></i>34 Likes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{asset('assets/images/media/media-19.jpg')}}" class="rounded-3 img-fluid mb-4 w-100" alt="...">
                                        <p class="mb-4">
                                            Embark on a delightful journey through the world of cake making, where creativity meets flavor. This blog is a haven for those passionate about baking and indulging in the sweet art of cake design.
                                        </p>
                                        <p class="mb-4">
                                            From classic recipes to modern twists, <span class="fs-14 fw-medium"> "Deliciously Divine" </span> celebrates the joy of creating cakes that not only taste heavenly but also look stunning. Whether you're a seasoned baker or a curious beginner, this blog offers inspiration and guidance to elevate your cake-making skills.
                                        </p>
                                        
                                        <p class="mb-4">Let the aromas of freshly baked cakes fill your kitchen and ignite your passion for baking. "Deliciously Divine" invites you to explore the transformative experience of creating delectable cakes that bring joy and connection to your loved ones. Discover the power of a beautifully crafted cake to celebrate life's special moments.</p>
                                        <div class="row align-items-center mb-4 gy-3 gy-xl-0">
                                            <div class="col-xl-3">
                                                <span class="avatar-xxl avatar rounded me-1">
                                                    <img src="../assets/images/media/media-33.jpg" alt="" class="img-fluid">
                                                </span>
                                                <span class="avatar-xxl avatar rounded me-1">
                                                    <img src="../assets/images/media/media-56.jpg" alt="" class="img-fluid">
                                                </span>
                                                <span class="avatar-xxl avatar rounded me-1">
                                                    <img src="../assets/images/media/media-45.jpg" alt="" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="col-xl-9">
                                                <div class="p-1 border border-success rounded">
                                                    <blockquote class="blockquote custom-blockquote primary text-center mb-0 border border-primary border-opacity-10">
                                                        <h5 class="lh-base">"A cake is not just a dessert; it's a celebration of life and love." </h5>
                                                        <footer class="blockquote-footer mt-3 text-primary mb-0">Someone famous as <cite title="Source Title">- Sophie Baker</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">
                                            From classic recipes to modern twists, <span class="fs-14 fw-medium"> "Deliciously Divine" </span> celebrates the joy of creating cakes that not only taste heavenly but also look stunning. Whether you're a seasoned baker or a curious beginner, this blog offers inspiration and guidance to elevate your cake-making skills. 
                                            With step-by-step tutorials, tips on choosing the best ingredients, and insights into the latest baking trends, you will find everything you need to craft the perfect cake for any occasion. 
                                        </p>
                                        
                                        <p class="mb-0">
                                            Through detailed recipes, creative decorating tips, and heartfelt stories, we delve into the myriad ways in which cakes can enhance our celebrations and bring happiness to our gatherings. Whether you're baking for a birthday, a wedding, or just because, "Deliciously Divine" is your go-to source for all things cake.
                                        </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Comments <span class="badge bg-info rounded-pill fs-11">02</span>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush" id="blog-details-comment-list">
                                            <li class="list-group-item border-0">
                                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="User Image">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <div class="fw-semibold mb-1">Sarah Johnson</div>
                                                        <p class="mb-3">I absolutely love this cake recipe! It turned out so delicious, and my family couldn't get enough of it. Thank you for sharing!</p>
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-sm btn-success-light btn-wave"><i class="ti ti-thumb-up fs-14"></i></button>
                                                            <button class="btn btn-icon btn-sm btn-danger-light btn-wave"><i class="ti ti-thumb-down"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary btn-wave">Reply<i class="ti ti-send fs-14 ms-1 d-inline-block"></i></button>
                                                        <button class="btn btn-sm btn-secondary btn-wave btn-icon"><i class="ri-error-warning-line"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 flex-wrap ms-5 p-3 mt-3 mb-1 bg-light rounded">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="User Image">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <div class="fw-semibold mb-1">James Smith</div>
                                                        <p class="mb-3">Your cake decoration tips are fantastic! I tried the buttercream technique you mentioned, and it made all the difference. Can't wait to bake again!</p>
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-sm btn-success-light btn-wave"><i class="ti ti-thumb-up fs-14"></i></button>
                                                            <button class="btn btn-icon btn-sm btn-danger-light btn-wave"><i class="ti ti-thumb-down"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-primary btn-wave">Reply<i class="ti ti-send fs-14 ms-1 d-inline-block"></i></button>
                                                        <button class="btn btn-sm btn-secondary btn-icon btn-wave"><i class="ri-error-warning-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Recent Posts
                                        </div>
                                        <a href="javascript:void(0);" class="fs-12 text-muted"> View More</a>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                                    <span class="avatar avatar-xl flex-shrink-0">
                                                        <img src="../assets/images/media/media-52.jpg" class="img-fluid" alt="Milkshake Recipe">
                                                    </span>
                                                    <div class="flex-fill text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-decoration-underline text-info fs-12">Milkshakes</a>
                                                        <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                            <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                            <span><i class="ti ti-clock me-1 d-inline-block"></i>10:33</span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                            The Ultimate Chocolate Milkshake Recipe
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                                    <span class="avatar avatar-xl flex-shrink-0">
                                                        <img src="../assets/images/media/media-53.jpg" class="img-fluid" alt="Milkshake Varieties">
                                                    </span>
                                                    <div class="flex-fill text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-decoration-underline text-pink fs-12">Beverages</a>
                                                        <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                            <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                            <span><i class="ti ti-clock me-1 d-inline-block"></i>14:45</span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                            Exploring Different Milkshake Varieties
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                                    <span class="avatar avatar-xl flex-shrink-0">
                                                        <img src="../assets/images/media/media-54.jpg" class="img-fluid" alt="Healthy Milkshake Options">
                                                    </span>
                                                    <div class="flex-fill text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-decoration-underline text-primary fs-12">Health</a>
                                                        <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                            <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                            <span><i class="ti ti-clock me-1 d-inline-block"></i>11:23</span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                            Healthy Milkshake Options for a Balanced Diet
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                                    <span class="avatar avatar-xl flex-shrink-0">
                                                        <img src="../assets/images/media/media-55.jpg" class="img-fluid" alt="Milkshake Toppings">
                                                    </span>
                                                    <div class="flex-fill text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-decoration-underline text-secondary fs-12">Desserts</a>
                                                        <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                            <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                            <span><i class="ti ti-clock me-1 d-inline-block"></i>15:11</span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                            Tasty Toppings to Elevate Your Milkshake Experience
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Related Topics  
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-action list-group-item-secondary border-secondary border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-drinks-2-fill fs-13 rounded-2 d-inline-block align-middle lh-1 text-primary"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Milkshakes</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary rounded-pill">25</span>
                                                        </div>
                                                    </div>    
                                                </a>
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-primary border-primary border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-goblet-2-fill rounded-2 d-inline-block align-middle lh-1 text-secondary"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Ice Cream</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-secondary rounded-pill">18</span>
                                                        </div>
                                                    </div>    
                                                </a>                                           
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-success border-success border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-blender-fill rounded-2 d-inline-block align-middle lh-1 text-danger"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Smoothies</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-danger rounded-pill">12</span>
                                                        </div>
                                                    </div>    
                                                </a>       
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-danger border-danger border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-cake-2-fill rounded-2 d-inline-block align-middle lh-1 text-info"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Desserts</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-info rounded-pill">20</span>
                                                        </div>
                                                    </div>    
                                                </a>      
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-info border-info border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-drinks-fill rounded-2 d-inline-block align-middle lh-1 text-pink"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Beverages</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-pink rounded-pill">30</span>
                                                        </div>
                                                    </div>    
                                                </a>      
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-warning border-warning border-opacity-10">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <i class="ri-bubble-chart-fill rounded-2 d-inline-block align-middle lh-1 text-success"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Snacks</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success rounded-pill">15</span>
                                                        </div>
                                                    </div>    
                                                </a>      
                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Gallery
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-sm-6 col-6">
                                                <a href="../assets/images/media/media-52.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-52.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-6">
                                                <a href="../assets/images/media/media-56.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-56.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-6">
                                                <a href="../assets/images/media/media-55.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-55.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-6">
                                                <a href="../assets/images/media/media-53.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-53.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <a href="../assets/images/media/media-54.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-54.jpg" alt="image" >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body text-center">
                                        <span class="avatar avatar-md bg-success-transparent rounded-circle border border-success border-opacity-25"><i class="ri-send-plane-fill fs-18 lh-1 align-middle"></i></span>
                                        <h6 class="mt-3">Join Our Community</h6>
                                        <label class="form-check-label mb-3 px-3 text-muted">
                                            Subscribe for Delicious Milkshake Recipes and Updates
                                        </label>
                                        <div class="input-group text-start">
                                            <input type="email" class="form-control" placeholder="Enter_Your_Email" aria-label="milkshake-email" aria-describedby="milkshake-subscribe" required>
                                            <button class="btn btn-primary btn-wave" type="button" id="milkshake-subscribe">Subscribe</button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Popular Tags
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="blog-popular-tags">
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#milkshake</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#recipes</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#desserts</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#beverages</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#smoothies</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#toppings</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#summerdrinks</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#creamy</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#chocolate</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#fruity</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#healthy</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#homemade</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#milkshakeart</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-muted">#flavors</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!--Start::row-2 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Add Your Comments
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="blog-comment" class="form-label">Write Comment</label>
                                        <textarea class="form-control" id="blog-comment" rows="4" placeholder="Write Here......."></textarea>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                                    </div>
                                    <div class="col-xl-6"> 
                                        <label for="blog-email" class="form-label">Email ID</label>
                                        <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-4">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Popular Posts
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                            <span class="avatar avatar-xl flex-shrink-0">
                                                <img src="../assets/images/media/media-52.jpg" class="img-fluid" alt="Milkshake Recipe">
                                            </span>
                                            <div class="flex-fill text-truncate w-75">
                                                <a href="javascript:void(0);" class="text-decoration-underline text-info fs-12">Milkshakes</a>
                                                <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                    <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                    <span><i class="ti ti-clock me-1 d-inline-block"></i>10:15</span>
                                                </div>
                                                <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                    The Ultimate Chocolate Milkshake Recipe
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                            <span class="avatar avatar-xl flex-shrink-0">
                                                <img src="../assets/images/media/media-53.jpg" class="img-fluid" alt="Milkshake Varieties">
                                            </span>
                                            <div class="flex-fill text-truncate w-75">
                                                <a href="javascript:void(0);" class="text-decoration-underline text-pink fs-12">Beverages</a>
                                                <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                    <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                    <span><i class="ti ti-clock me-1 d-inline-block"></i>14:45</span>
                                                </div>
                                                <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                    Exploring Different Milkshake Varieties
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex gap-3 flex-wrap flex-xl-nowrap align-items-center">
                                            <span class="avatar avatar-xl flex-shrink-0">
                                                <img src="../assets/images/media/media-55.jpg" class="img-fluid" alt="Milkshake Toppings">
                                            </span>
                                            <div class="flex-fill text-truncate w-75">
                                                <a href="javascript:void(0);" class="text-decoration-underline text-secondary fs-12">Desserts</a>
                                                <div class="text-muted fs-11 my-1 text-break d-flex gap-1 flex-wrap align-items-center">
                                                    <i class="ti ti-calendar me-1 d-inline-block"></i>3rd October 2024 - 
                                                    <span><i class="ti ti-clock me-1 d-inline-block"></i>15:11</span>
                                                </div>
                                                <a href="javascript:void(0);" class="popular-blog-content text-truncate fw-medium fs-15">
                                                    Tasty Toppings to Elevate Your Milkshake Experience
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center pb-3">
                                    <a href="javascript:void(0);" class="fs-12 text-success text-decoration-underline text-center fw-medium"> View More Post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

   
       
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


        @endsection


@push('scripts')

    <!-- Gallery JS -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Blog Details JS -->
    <script src="{{ asset('assets/js/blog-details.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

@endpush

    




    
