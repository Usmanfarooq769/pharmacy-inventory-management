
@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/libs/prismjs/themes/prism-coy.min.css') }}">

@section('content')


                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Blog</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <a href=" {{route('blog-details')}}" class="stretched-link"></a>
                                    <div class="carousel-inner rounded-0">
                                        <div class="carousel-item active">
                                            <img src="{{asset('assets/images/media/media-25.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/images/media/media-24.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/images/media/media-23.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h5 class="fw-semibold"><a href="{{route('blog-details')}}">Adventure Awaits: Unveiling the Hidden Gems of Travel</a></h5>
                                    <p class="mb-3">Travel is more than just visiting new places; it's about immersing yourself in unfamiliar cultures, uncovering hidden treasures, and embracing the beauty.</p>
                                    <p class="mb-3">Exploring the remote corners of the world, where untouched landscapes and authentic cultures await the curious traveler.</p>
                                    <p class="mb-3">From the vibrant streets of bustling cities to the serene beauty of hidden gems, every journey offers a new perspective, a deeper connection with nature, and an unforgettable experience.</p>
                                    <p class="mb-3">As travel writer Pico Iyer beautifully puts it, “The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.”<a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More</a></p>
                                    <div class="d-flex align-items-center justify-content-between mb-1 flex-wrap">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="../assets/images/faces/5.jpg" alt="Sophia">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-semibold"> Sophia<i class="ti ti-writing ms-1 d-inline-block align-middle text-primary"></i></p>
                                                <p class="text-muted fs-11 mb-0">3rd October 2024 - 
                                                    <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>10:30</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                            <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>42</div>
                                            <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>12</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Categories :
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush list-style mb-2">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <span class="fw-medium">
                                                <i class="ri-leaf-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary-transparent text-primary"></i>Eco-Friendly Living
                                            </span>
                                            <span class="badge bg-primary-transparent">22 posts</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <span class="fw-medium">
                                                <i class="ri-flight-takeoff-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-secondary-transparent text-secondary"></i>Adventure & Travel
                                            </span>
                                            <span class="badge bg-secondary-transparent">57 articles</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <span class="fw-medium">
                                                <i class="ri-global-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-success-transparent text-success"></i>Innovation & Tech
                                            </span>
                                            <span class="badge bg-success-transparent">88 updates</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <span class="fw-medium">
                                                <i class="ri-home-wifi-fill p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-pink-transparent text-pink"></i>Smart Homes
                                            </span>
                                            <span class="badge bg-pink-transparent">30 articles</span>
                                        </div>
                                    </li>
                                </ul>                                
                            </div>
                        </div>
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header d-flex align-items-center justify-content-between flex-wrap">
                                <div class="card-title">
                                    Related Blogs:
                                </div>
                                <div>
                                    <span class="badge bg-primary-transparent rounded-pill">08 Blogs</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush"> 
                                    <li class="list-group-item border-bottom-0">
                                        <div class="d-flex flex-wrap text-truncate align-items-center gap-2">
                                            <span class="avatar avatar-lg flex-shrink-0 me-1">
                                                <img src="../assets/images/media/media-31.jpg" class="img-fluid" alt="...">
                                            </span>
                                            <div class="flex-fill text-wrap w-75">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Sophia Green</a>
                                                    <span class="badge bg-success rounded-pill">Books</span>
                                                </div>
                                                <p class="mb-1 popular-blog-content text-truncate text-muted w-75">
                                                    Exploring the future of sustainable architecture and green living practices in modern cities.
                                                </p>
                                                <span class="text-muted fs-10">12, Nov 2024 - 10:15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-bottom-0">
                                        <div class="d-flex flex-wrap text-truncate align-items-center gap-2">
                                            <span class="avatar avatar-lg flex-shrink-0 me-1">
                                                <img src="../assets/images/media/media-32.jpg" class="img-fluid" alt="...">
                                            </span>
                                            <div class="flex-fill text-wrap w-75">
                                                <div class="d-flex gap-2 justify-content-between align-items-start flex-wrap">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Liam Carter</a>
                                                    <span class="badge bg-pink rounded-pill">Food</span>
                                                </div>
                                                <p class="mb-1 popular-blog-content text-truncate text-muted w-75">
                                                    How virtual reality is transforming travel experiences, allowing us to explore destinations from home.
                                                </p>
                                                <span class="text-muted fs-10">11, Nov 2024 - 15:45</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="p-3 pt-2 mt-1">
                                    <button class="btn mx-auto btn-primary btn-loader text-center justify-content-center w-100">
                                        <span class="me-2">Load More</span>
                                        <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start::row-2 -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-semibold">Top Topics:</h5>
                    <p class="mb-0 fw-semibold">
                        <a href="javascript:void(0);" class="text-primary"><u>View All</u></a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card bg-dark overlay-card text-fixed-white border-0 blog-first-cards"> 
                            <img src="../assets/images/media/media-31.jpg" class="card-img rounded-0" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0 over-content-top justify-content-between">
                                <div class="card-body pb-0">
                                    <span class="fs-11 badge bg-pink mb-2">Books & Literature</span>
                                </div>
                                <div class="card-footer border-top-0 text-fixed-white">
                                    <a href="{{route('blog-details')}}" class="text-fixed-white fw-medium mb-2">
                                        The Magic of Books: How Stories Shape Our World
                                    </a>
                                    <div class="d-flex text-fixed-white op-7 gap-1">
                                        <div><i class="ti ti-writing text-secondary me-1 align-middle"></i>By </div>
                                        <a href="javascript:void(0);" class="text-fixed-white"><i class="ti ti-user-circle mx-1 lh-1 text-secondary"></i>Book Enthusiast</a>
                                    </div>
                                    <div class="d-flex gap-2 mt-2 fs-11">
                                        <div class="text-fixed-white op-6"><i class="ti ti-message me-1"></i>52</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-thumb-up me-1"></i>18</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-calendar me-1"></i>3rd October, 2024</div>
                                    </div>
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline float-end">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card bg-dark overlay-card text-fixed-white border-0 blog-first-cards"> 
                            <img src="../assets/images/media/media-32.jpg" class="card-img rounded-0" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0 over-content-top justify-content-between">
                                <div class="card-body pb-0">
                                    <span class="fs-11 badge bg-warning mb-2">Nature & Health</span>
                                </div>
                                <div class="card-footer border-top-0 text-fixed-white">
                                    <a href="{{route('blog-details')}}" class="text-fixed-white fw-medium mb-2">
                                        The Golden Elixir: Unveiling the Health Benefits of Honey
                                    </a>
                                    <div class="d-flex text-fixed-white op-7 gap-1">
                                        <div><i class="ti ti-writing text-secondary me-1 align-middle"></i>By </div>
                                        <a href="javascript:void(0);" class="text-fixed-white"><i class="ti ti-user-circle mx-1 lh-1 text-secondary"></i>Honey Enthusiast</a>
                                    </div>
                                    <div class="d-flex gap-2 mt-2 fs-11">
                                        <div class="text-fixed-white op-6"><i class="ti ti-message me-1"></i>58</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-thumb-up me-1"></i>45</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-calendar me-1"></i>3rd October, 2024</div>
                                    </div>
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline float-end">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card bg-dark overlay-card text-fixed-white border-0 blog-first-cards"> 
                            <img src="../assets/images/media/media-33.jpg" class="card-img rounded-0" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0 over-content-top justify-content-between">
                                <div class="card-body pb-0">
                                    <span class="fs-11 badge bg-pink mb-2">Cakes & Celebrations</span>
                                </div>
                                <div class="card-footer border-top-0 text-fixed-white">
                                    <a href="{{route('blog-details')}}" class="text-fixed-white fw-medium mb-2">
                                        Sweet Moments: The Art of Crafting Perfect Birthday Cakes
                                    </a>
                                    <div class="d-flex text-fixed-white op-7 gap-1">
                                        <div><i class="ti ti-writing text-secondary me-1 align-middle"></i>By </div>
                                        <a href="javascript:void(0);" class="text-fixed-white"><i class="ti ti-user-circle mx-1 lh-1 text-secondary"></i>Cake Lover</a>
                                    </div>
                                    <div class="d-flex gap-2 mt-2 fs-11">
                                        <div class="text-fixed-white op-6"><i class="ti ti-message me-1"></i>82</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-thumb-up me-1"></i>47</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-calendar me-1"></i>3rd October, 2024</div>
                                    </div>
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline float-end">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card bg-dark overlay-card text-fixed-white border-0 blog-first-cards"> 
                            <img src="../assets/images/media/media-30.jpg" class="card-img rounded-0" alt="...">
                            <div class="card-img-overlay d-flex flex-column p-0 over-content-top justify-content-between">
                                <div class="card-body pb-0">
                                    <span class="fs-11 badge bg-orange mb-2">Autumn Vibes</span>
                                </div>
                                <div class="card-footer border-top-0 text-fixed-white">
                                    <a href="{{route('blog-details')}}" class="text-fixed-white fw-medium mb-2">
                                        The Magic of Autumn Leaves: Nature's Colorful
                                    </a>
                                    <div class="d-flex text-fixed-white op-7 gap-1">
                                        <div><i class="ti ti-writing text-secondary me-1 align-middle"></i>By </div>
                                        <a href="javascript:void(0);" class="text-fixed-white"><i class="ti ti-user-circle mx-1 lh-1 text-secondary"></i>Autumn Lover</a>
                                    </div>
                                    <div class="d-flex gap-2 mt-2 fs-11">
                                        <div class="text-fixed-white op-6"><i class="ti ti-message me-1"></i>76</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-thumb-up me-1"></i>58</div>
                                        <div class="text-fixed-white op-6"><i class="ti ti-calendar me-1"></i>3rd October, 2024</div>
                                    </div>
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline float-end">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>                        
                    </div>
               </div>
               <!--End::row-2 -->

               <!--Start::row-3 -->
               <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <span class="fs-11 badge bg-success mb-2">Spiritual Celebration</span>
                            <a href="{{route('blog-details')}}" class="fw-semibold fs-18 text-dark mb-1 d-block">The Vibrant Spirit of Holi</a>
                            <p class="card-text text-muted mb-3">
                                Holi, the festival of colors, symbolizes the victory of good over evil and the arrival of spring. It is a time to forgive, celebrate, and spread joy among friends and family.
                                <a href="{{route('blog-details')}}" class="text-success text-decoration-underline fw-medium">Read More 
                                    <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                </a> 
                            </p>
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                        <img src="../assets/images/faces/5.jpg" alt="Sophia">
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-semibold"> Sophia<i class="ti ti-writing ms-1 d-inline-block align-middle text-primary"></i></p>
                                        <p class="text-muted fs-11 mb-0">3rd October 2024 - 
                                            <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>10:30</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                    <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>42</div>
                                    <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>12</div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);">
                            <img src="../assets/images/media/media-36.jpg" class="card-img-bottom" alt="Celebrating Colors of Holi">
                        </a>
                    </div>                        
                </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <span class="fs-11 badge bg-primary mb-2">Mountain Exploration</span>
                                <a href="{{route('blog-details')}}" class="fw-semibold fs-18 text-dark mb-1 d-block">Peaks of the World</a>
                                <p class="card-text text-muted mb-3"> From the towering heights of the Himalayas to the rugged beauty of the Andes, mountains have long been a source of awe and adventure. Discover the stories.
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline fw-medium">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                            <img src="../assets/images/faces/10.jpg" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-semibold"> John Explorer<i class="ti ti-writing ms-1 d-inline-block align-middle text-primary"></i></p>
                                            <p class="text-muted fs-11 mb-0">3rd October 2024 - 
                                                <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>15:30</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                        <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>58</div>
                                        <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>34</div>
                                    </div>
                                </div>
                            </div> 
                            <a href="javascript:void(0);">
                                <img src="../assets/images/media/media-86.jpg" class="card-img-bottom" alt="...">
                            </a>                           
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <span class="fs-11 badge bg-secondary mb-2">Art & Creativity</span>
                                <a href="{{route('blog-details')}}" class="fw-semibold fs-18 text-dark mb-1 d-block">Celebrating Creative Minds</a>
                                <p class="card-text text-muted mb-3"> Artists shape our culture and emotions through their work. Explore the diverse expressions of creativity, from paintings to sculptures and everything in between.
                                    <a href="{{route('blog-details')}}" class="text-success text-decoration-underline fw-medium">Read More 
                                        <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                    </a> 
                                </p>
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                            <img src="../assets/images/faces/10.jpg" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-semibold"> Emma Artist<i class="ti ti-writing ms-1 d-inline-block align-middle text-primary"></i></p>
                                            <p class="text-muted fs-11 mb-0">3rd October 2024 - 
                                                <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>14:30</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                        <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>58</div>
                                        <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>25</div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);">
                                <img src="../assets/images/media/media-34.jpg" class="card-img-bottom" alt="...">
                            </a>
                        </div>                        
                    </div>
               </div>
               <!--End::row-3 -->

               <!--Start::row-4 -->
               <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row align-items-center gy-3 gy-xl-0">
                                <div class="col-xl-4">
                                    <div class="text-center">
                                        <img src="../assets/images/media/media-42.jpg" alt="" class="img-fluid rounded-3">
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <span class="fs-11 badge bg-info mb-2">Beauty & Elegance</span>
                                    <a href="{{route('blog-details')}}" class="fs-15 fw-semibold mb-1 d-block">The Allure of Pearls: Nature's Timeless Gem</a>
                                    <p class="text-muted mb-2">
                                        Pearls have fascinated humanity for centuries, symbolizing purity and elegance. From ancient royalty to modern. 
                                        <a href="{{route('blog-details')}}" class="text-success text-decoration-underline fw-medium">Read More 
                                            <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                        </a>  
                                    </p>
                                    <div class="d-flex gap-1">
                                        <div><i class="ti ti-writing me-1 d-inline-block align-middle text-primary"></i>By </div>
                                        <a href="javascript:void(0);" class=""><i class="ti ti-user-circle mx-1 lh-1 text-primary d-inline-block"></i>Jewelry Expert</a>
                                    </div>
                                    <div class="d-flex gap-3 mt-1 fs-12 flex-wrap">
                                        <div class="d-flex gap-3 align-self-end">
                                            <span><i class="ti ti-calendar me-1 text-muted d-inline-block"></i>3rd October, 2024</span>
                                            <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>10:30</span>
                                        </div>
                                        <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                            <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>58 Comments</div>
                                            <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>25 Likes</div>
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row align-items-center gy-3 gy-xl-0">
                                <div class="col-xl-8">
                                    <span class="fs-11 badge bg-success mb-2">Delicious Treats</span>
                                    <a href="{{route('blog-details')}}" class="fs-15 fw-semibold mb-1 d-block">Indulge in the Creamy Delight of Milkshakes</a>
                                    <p class="text-muted mb-2">
                                        Milkshakes are the perfect blend of nostalgia and indulgence. From classic flavors like chocolate and vanilla to innovative.
                                        <a href="{{route('blog-details')}}" class="text-success text-decoration-underline fw-medium">Read More 
                                            <i class="ri-arrow-right-double-line d-inline-block rtl-icon-transform align-middle ms-1 d-inline-block"></i>
                                        </a>  
                                    </p>
                                    <div class="d-flex gap-1">
                                        <div><i class="ti ti-writing me-1 d-inline-block align-middle text-primary"></i>By </div>
                                        <a href="javascript:void(0);" class=""><i class="ti ti-user-circle mx-1 lh-1 text-primary d-inline-block"></i>Foodie Blogger</a>
                                    </div>
                                    <div class="d-flex gap-3 mt-1 fs-12 flex-wrap">
                                        <div class="d-flex gap-3 align-self-end">
                                            <span><i class="ti ti-calendar me-1 text-muted d-inline-block"></i>3rd October, 2024</span>
                                            <span><i class="ti ti-clock me-1 text-muted d-inline-block"></i>14:30</span>
                                        </div>
                                        <div class="d-flex gap-2 fs-11 ms-auto flex-wrap">
                                            <div class="btn btn-sm btn-info-light"><i class="ti ti-message me-1"></i>58 Comments</div>
                                            <div class="btn btn-sm btn-danger-light"><i class="ti ti-thumb-up me-1"></i>25 Likes</div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-xl-4">
                                    <div class="text-center">
                                        <img src="../assets/images/media/media-45.jpg" alt="" class="img-fluid rounded-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <!--End::row-4 -->

               <!-- Start: pagination -->
               <div class="float-end mb-4">
                   <nav aria-label="Page navigation" class="">
                       <ul class="pagination mb-0">
                           <li class="page-item disabled">
                               <a class="page-link" href="javascript:void(0);">
                                   Prev
                               </a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                           <li class="page-item">
                               <a class="page-link" href="javascript:void(0);">
                                   <i class="bi bi-three-dots"></i>
                               </a>
                           </li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                           <li class="page-item">
                               <a class="page-link text-primary" href="javascript:void(0);">
                                   next
                               </a>
                           </li>
                       </ul>
                   </nav>
               </div>
               <!-- End: pagination -->

   
               @endsection


@push('scripts')
<!-- Prism JS -->
<script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endpush

    

