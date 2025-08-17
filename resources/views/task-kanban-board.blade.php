<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Rixzo - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="template dashboard, dashboard admin template, admin panel, dashboard admin, bootstrap admin dashboard, bootstrap admin panel, template admin, dashboard, html css, html css js, template css and html, bootstrap 5 admin template, admin dashboard ui, admin, html and css template">
    
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="../assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="../assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">


<link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

<link rel="stylesheet" href="../assets/libs/dragula/dragula.min.css">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center canvas-footer flex-nowrap gap-2"> 
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger text-nowrap">Reset</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element mx-lg-0 mx-2">
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-lg-block d-none my-auto auto-complete-search">
                        <!-- Start::header-link -->
                        <input type="text" class="header-search-bar form-control rounded-pill" id="header-search" placeholder="Search for Results..." spellcheck=false autocomplete="off" autocapitalize="off">
                        <a href="javascript:void(0);" class="header-search-icon border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                        </a>
                        <!-- End::header-link -->
                    </div>
            
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element d-lg-none d-flex">
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#responsive-searchModal">
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                            <!-- End::header-link-icon -->
                        </a>  
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element country-selector dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <span class="avatar avatar-xs avatar-rounded">
                                <img src="../assets/images/flags/us_flag.jpg" alt="img">
                            </span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/us_flag.jpg" alt="img">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/spain_flag.jpg" alt="img" >
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/french_flag.jpg" alt="img" >
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/germany_flag.jpg" alt="img" >
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/italy_flag.jpg" alt="img" >
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs avatar-rounded lh-1 me-2">
                                        <img src="../assets/images/flags/russia_flag.jpg" alt="img" >
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><rect fill="none" height="24" width="24"/><path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1zM11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408zm-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                            <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">4</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3 bg-light bg-opacity-75">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fw-semibold">Cart Items</p>
                                    <span class="badge bg-pink" id="cart-data">4 Items</span>
                                </div>
                            </div>
                            <div><hr class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="../assets/images/media/media-92.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="fw-medium"><a href="cart.html">EliteChair Pro</a></div>
                                            <span class="text-muted fs-12 fw-normal">
                                                Furniture
                                            </span>
                                            <div class="fs-11 fw-medium text-default"><span class="text-muted">Qty: </span>01</div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            <div class="fw-semibold fs-14 text-default">$1,299.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="../assets/images/media/media-95.jpg" alt="Sunglasses">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="fw-medium"><a href="cart.html">Sunglasses</a></div>
                                            <span class="text-muted fs-12 fw-normal">
                                                Accessories
                                            </span>
                                            <div class="fs-11 fw-medium text-default"><span class="text-muted">Qty: </span>01</div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            <div class="fw-semibold fs-14 text-default">$249.99</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="../assets/images/media/media-93.jpg" alt="StellarPhone X">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="fw-medium"><a href="cart.html">StellarPhone X</a></div>
                                            <span class="text-muted fs-12 fw-normal">
                                                Smartphones
                                            </span>
                                            <div class="fs-11 fw-medium text-default"><span class="text-muted">Qty: </span>01</div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            <div class="fw-semibold fs-14 text-default">$1,199.08</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="../assets/images/media/media-96.jpg" alt="PowerBeats Pro">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="fw-medium"><a href="cart.html">PowerBeats Pro</a></div>
                                            <span class="text-muted fs-12 fw-normal">
                                                Audio Accessories
                                            </span>
                                            <div class="fs-11 fw-medium text-default"><span class="text-muted">Qty: </span>01</div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            <div class="fw-semibold fs-14 text-default">$249.95</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid">
                                    <a href="checkout.html" class="btn btn-primary">Proceed to checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy </span>
                                    <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>
                            <span class="header-icon-pulse bg-secondary rounded pulse pulse-secondary"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3 bg-light bg-opacity-75">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fw-semibold">Notifications</p>
                                    <span class="badge bg-pink" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-primary-transparent avatar-rounded">
                                                <img src="../assets/images/faces/1.jpg" alt="Sonia Agarwal">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="chat.html">Sonia Agarwal</a></p>
                                                <div class="fw-normal header-notification-text text-muted">
                                                    <span class="fw-medium fs-12 text-success">Approval</span> for the Insurance
                                                </div>
                                                <span class="text-muted header-notification-text fs-11">7 mins ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-primary-transparent avatar-rounded">
                                                <img src="../assets/images/faces/12.jpg" alt="Rajesh Kumar">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="chat.html">Rajesh Kumar</a></p>
                                                <div class="fw-normal header-notification-text text-muted">
                                                    <span class="fw-medium fs-12 text-warning">Urgent Request</span> for project
                                                </div>
                                                <span class="text-muted header-notification-text fs-11">3 hours ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-success-transparent avatar-rounded">
                                                <img src="../assets/images/faces/3.jpg" alt="Ayesha Malik">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="chat.html">Ayesha Malik</a></p>
                                                <div class="fw-normal header-notification-text text-muted">
                                                    <span class="fw-medium fs-12 text-info">Task Completed</span> for redesign
                                                </div>
                                                <span class="text-muted header-notification-text fs-11">2 hours ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md online bg-danger-transparent avatar-rounded">
                                                <img src="../assets/images/faces/14.jpg" alt="Mohan Desai">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="chat.html">Mohan Desai</a></p>
                                                <div class="fw-normal header-notification-text text-muted">
                                                    <span class="fw-medium fs-12 text-danger">New Message</span> about client meeting
                                                </div>
                                                <span class="text-muted header-notification-text fs-11">15 mins ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-warning-transparent avatar-rounded">
                                                <img src="../assets/images/faces/5.jpg" alt="Priya Sharma">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="chat.html">Priya Sharma</a></p>
                                                <div class="fw-normal header-notification-text text-muted">
                                                    <span class="fw-medium fs-12 text-warning">Meeting Reminder</span> scheduled for 3:00 PM
                                                </div>
                                                <span class="text-muted header-notification-text fs-11">30 mins ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="text-muted me-1 dropdown-item-close1">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="chat.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z"/></g></g></g></svg>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end" aria-labelledby="notificationDropdown">
                            <div class="p-3 bg-light bg-opacity-75">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fw-semibold">Related Apps</p>
                                    <span class="badge bg-pink">6 Apps</span>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-3" id="header-shortcut-scroll">
                               <div class="row g-2">
                                   <div class="col-4">
                                       <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app pink bg-pink-transparent border border-pink border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-pink bg-opacity-10 border border-pink border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/figma.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">Figma</span>
                                            </div>
                                        </a>
                                   </div>
                                   <div class="col-4">
                                        <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app success bg-success-transparent border border-success border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-success bg-opacity-10 border border-success border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/microsoft-powerpoint.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">PowerPoint</span>
                                            </div>
                                        </a>
                                   </div>
                                   <div class="col-4">
                                        <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app primary bg-primary-transparent border border-primary border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-primary bg-opacity-10 border border-primary border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/microsoft-word.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">MS Word</span>
                                            </div>
                                        </a>
                                   </div>
                                   <div class="col-4">
                                        <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app info bg-info-transparent border border-info border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-info bg-opacity-10 border border-info border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/calender.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">Calendar</span>
                                            </div>
                                        </a>
                                   </div>
                                   <div class="col-4">
                                        <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app secondary bg-secondary-transparent border border-secondary border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-secondary bg-opacity-10 border border-secondary border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/sketch.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">Sketch</span>
                                            </div>
                                        </a>
                                   </div>
                                   <div class="col-4">
                                        <a href="javascript:void(0);" class="related-apps">
                                            <div class="text-center p-3 related-app danger bg-danger-transparent border border-danger border-opacity-10">
                                                <span class="avatar avatar-md avatar-rounded bg-danger bg-opacity-10 border border-danger border-opacity-10 p-2 mb-2">
                                                    <img src="../assets/images/apps/google.png" alt="">
                                                </span>
                                                <span class="d-block fs-12">Google</span>
                                            </div>
                                        </a>
                                   </div>
                               </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid">
                                    <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon d-none" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></svg>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <span class="avatar avatar-sm avatar-rounded">
                                <img src="../assets/images/faces/14.jpg" alt="img" class="img-fluid">
                            </span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li class="p-3 bg-light bg-opacity-75 border-bottom">
                                <div class="d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <p class="mb-0 fw-semibold lh-1">Ashwin Seth</p>
                                        <span class="fs-11 text-muted">ashwinseth@mail.com</span>
                                    </div>
                                    <span class="badge bg-pink align-self-end mb-1">Pro</span>
                                </div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 text-gray fw-normal"></i>My Profile</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="mail.html"><i class="ti ti-inbox fs-18 me-2 text-gray fw-normal"></i>Mail Inbox <span class="badge bg-success ms-auto">06</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 text-gray fw-normal"></i>Account Settings</a></li>
                            <li> <hr class="dropdown-divider"> </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.html"><i class="ti ti-logout fs-18 me-2 text-gray fw-normal"></i>Sign Out</a></li>
                        </ul>
                    </div>  
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg>
                                <span class="side-menu__label">Dashboards</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Dashboards</a>
                                </li>
                                <li class="slide">
                                    <a href="index.html" class="side-menu__item">Sales</a>
                                </li>
                                <li class="slide">
                                    <a href="index2.html" class="side-menu__item">Ecommerce</a>
                                </li>
                                <li class="slide">
                                    <a href="index3.html" class="side-menu__item">Crypto</a>
                                </li>
                                <li class="slide">
                                    <a href="index4.html" class="side-menu__item">Jobs</a>
                                </li>
                                <li class="slide">
                                    <a href="index5.html" class="side-menu__item">NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="index6.html" class="side-menu__item">CRM</a>
                                </li>
                                <li class="slide">
                                    <a href="index7.html" class="side-menu__item">Analytics</a>
                                </li>
                                <li class="slide">
                                    <a href="index8.html" class="side-menu__item">Projects</a>
                                </li>
                                <li class="slide">
                                    <a href="index9.html" class="side-menu__item">HRM</a>
                                </li>
                                <li class="slide">
                                    <a href="index10.html" class="side-menu__item">Stocks</a>
                                </li>
                                <li class="slide">
                                    <a href="index11.html" class="side-menu__item">Courses</a>
                                </li>
                                <li class="slide">
                                    <a href="index12.html" class="side-menu__item">Medical</a>
                                </li>
                                <li class="slide">
                                    <a href="index13.html" class="side-menu__item">POS System</a>
                                </li>
                                <li class="slide">
                                    <a href="index14.html" class="side-menu__item">Podcast</a>
                                </li>
                                <li class="slide">
                                    <a href="index15.html" class="side-menu__item">School</a>
                                </li>
                                <li class="slide">
                                    <a href="index16.html" class="side-menu__item">Social Media</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Pages</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                <span class="side-menu__label">Pages</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-create.html" class="side-menu__item">Create Blog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chat.html" class="side-menu__item">Chat</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="add-products.html" class="side-menu__item">Add Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.html" class="side-menu__item">Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                        <li class="slide">
                                            <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="order-details.html" class="side-menu__item">Order Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="orders.html" class="side-menu__item">Orders</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products.html" class="side-menu__item">Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="product-details.html" class="side-menu__item">Product Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products-list.html" class="side-menu__item">Products List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Email
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="mail.html" class="side-menu__item">Mail App</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Empty</a>
                                </li>
                                <li class="slide">
                                    <a href="faqs.html" class="side-menu__item">FAQ's</a>
                                </li>
                                <li class="slide">
                                    <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Invoice
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                        </li>
                                        <li class="slide">
                                            <a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="landing.html" class="side-menu__item">Landing</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Pricing</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="profile-settings.html" class="side-menu__item">Profile Settings</a>
                                </li>
                                <li class="slide">
                                    <a href="reviews.html" class="side-menu__item">Reviews</a>
                                </li>
                                <li class="slide">
                                    <a href="search-results.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="team.html" class="side-menu__item">Team</a>
                                </li>
                                <li class="slide">
                                    <a href="terms-conditions.html" class="side-menu__item">Terms & Conditions</a>
                                </li>
                                <li class="slide">
                                    <a href="timeline.html" class="side-menu__item">Timeline</a>
                                </li>
                                <li class="slide">
                                    <a href="to-do-list.html" class="side-menu__item">To Do List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg>
                                <span class="side-menu__label">Authentication</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide">
                                    <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Create Password
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>      
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>     
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="reset-password-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="reset-password-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>     
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="sign-up-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="sign-up-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li>  
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Sign In
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="sign-in-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="sign-in-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="two-step-verification-basic.html" class="side-menu__item">Basic</a>
                                        </li>
                                        <li class="slide">
                                            <a href="two-step-verification-cover.html" class="side-menu__item">Cover</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 13h-2v-2h2v2zm0-4h-2V7h2v6z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-5h2v2h-2zm0-8h2v6h-2z"/></svg>
                                <span class="side-menu__label">Error</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Error</a>
                                </li>
                                <li class="slide">
                                    <a href="401-error.html" class="side-menu__item">401 - Error</a>
                                </li>
                                <li class="slide">
                                    <a href="404-error.html" class="side-menu__item">404 - Error</a>
                                </li>
                                <li class="slide">
                                    <a href="500-error.html" class="side-menu__item">500 - Error</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24"/></g><g><g><rect height="4" opacity=".3" width="4" x="5" y="5"/><rect height="4" opacity=".3" width="4" x="5" y="15"/><rect height="4" opacity=".3" width="4" x="15" y="15"/><rect height="4" opacity=".3" width="4" x="15" y="5"/><path d="M3,21h8v-8H3V21z M5,15h4v4H5V15z"/><path d="M3,11h8V3H3V11z M5,5h4v4H5V5z"/><path d="M13,21h8v-8h-8V21z M15,15h4v4h-4V15z"/><path d="M13,3v8h8V3H13z M19,9h-4V5h4V9z"/></g></g></svg>
                                <span class="side-menu__label">Apps</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Projects
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="projects-overview.html" class="side-menu__item">Project Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="projects-create.html" class="side-menu__item">Create Project</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Task
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                                        </li>
                                        <li class="slide">
                                            <a href="task-list-view.html" class="side-menu__item">List View</a>
                                        </li>
                                        <li class="slide">
                                            <a href="task-details.html" class="side-menu__item">Task Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Jobs
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="job-details.html" class="side-menu__item">Job Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-company-search.html" class="side-menu__item">Search Company</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-search.html" class="side-menu__item">Search Jobs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-post.html" class="side-menu__item">Job Post</a>
                                        </li>
                                        <li class="slide">
                                            <a href="jobs-list.html" class="side-menu__item">Jobs List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-candidate-search.html" class="side-menu__item">Search Candidate</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-candidate-details.html" class="side-menu__item">Candidate Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">NFT
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-wallet-integration.html" class="side-menu__item">Wallet Integration</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">CRM
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Crypto
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-currency-exchange.html" class="side-menu__item">Currency Exchange</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-buy-sell.html" class="side-menu__item">Buy & Sell</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg>
                                <span class="side-menu__label">Nested Menu</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon opacity=".3" points="4,7 20,7 20,3.98 4,4"/><path d="M5,20h14V9H5V20z M9,12h6v2H9V12z" opacity=".3"/><path d="M20,2H4C3,2,2,2.9,2,4v3.01C2,7.73,2.43,8.35,3,8.7V20c0,1.1,1.1,2,2,2h14c0.9,0,2-0.9,2-2V8.7c0.57-0.35,1-0.97,1-1.69V4 C22,2.9,21,2,20,2z M19,20H5V9h14V20z M20,7H4V4l16-0.02V7z"/><rect height="2" width="6" x="9" y="12"/></g></g></svg>
                                <span class="side-menu__label">Ui Elements</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ui Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="images-figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="links-interactions.html" class="side-menu__item">Links & Interactions</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navs-tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24" y="0"/></g><g><g><polygon opacity=".3" points="12.35,16.18 7.82,11.65 5.3,18.7"/><path d="M2,22l14-5L7,8L2,22z M12.35,16.18L5.3,18.7l2.52-7.05L12.35,16.18z"/><path d="M14.53,12.53l5.59-5.59c0.49-0.49,1.28-0.49,1.77,0l0.59,0.59l1.06-1.06l-0.59-0.59c-1.07-1.07-2.82-1.07-3.89,0 l-5.59,5.59L14.53,12.53z"/><path d="M9.47,7.47l1.06,1.06l0.59-0.59c1.07-1.07,1.07-2.82,0-3.89l-0.59-0.59L9.47,4.53l0.59,0.59c0.48,0.48,0.48,1.28,0,1.76 L9.47,7.47z"/><path d="M17.06,11.88l-1.59,1.59l1.06,1.06l1.59-1.59c0.49-0.49,1.28-0.49,1.77,0l1.61,1.61l1.06-1.06l-1.61-1.61 C19.87,10.81,18.13,10.81,17.06,11.88z"/><path d="M15.06,5.88l-3.59,3.59l1.06,1.06l3.59-3.59c1.07-1.07,1.07-2.82,0-3.89l-1.59-1.59l-1.06,1.06l1.59,1.59 C15.54,4.6,15.54,5.4,15.06,5.88z"/></g></g></svg>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions-collpase.html" class="side-menu__item">Accordions & Collapse</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="media-player.html" class="side-menu__item">Media Player</a>
                                </li>
                                <li class="slide">
                                    <a href="modals-closes.html" class="side-menu__item">Modals & Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="sortable-list.html" class="side-menu__item">Sortable JS</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                                <li class="slide">
                                    <a href="treeview.html" class="side-menu__item">Treeview</a>
                                </li>
                                <li class="slide">
                                    <a href="tour.html" class="side-menu__item">Tour</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24" y="0"/><path d="M5,5v14h14V5H5z M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z" opacity=".3"/><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z M17,13H7v-2h10 V13z M17,9H7V7h10V9z M14,17H7v-2h7V17z"/></g></svg>
                                <span class="side-menu__label">Forms</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide">
                                    <a href="form-advanced.html" class="side-menu__item">Form Advanced</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-check-radios.html" class="side-menu__item">Checks & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-file-uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-datetime-pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-color-pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating-labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form-layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide">
                                    <a href="form-wizards.html" class="side-menu__item">Form Wizards</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill-editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form-select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><rect fill="none" height="24" width="24"/><path d="M12,4c-3.31,0-6,2.69-6,6s2.69,6,6,6s6-2.69,6-6S15.31,4,12,4z M14.31,13.69L12,11.93l-2.32,1.76l0.88-2.85 L8.25,9h2.84L12,6.19L12.91,9h2.84l-2.32,1.84L14.31,13.69z M12,19l-4,1.02v-3.1C9.18,17.6,10.54,18,12,18s2.82-0.4,4-1.08v3.1 L12,19z" opacity=".3"/><path d="M9.68,13.69L12,11.93l2.31,1.76l-0.88-2.85L15.75,9h-2.84L12,6.19L11.09,9H8.25l2.31,1.84L9.68,13.69z M20,10 c0-4.42-3.58-8-8-8s-8,3.58-8,8c0,2.03,0.76,3.87,2,5.28V23l6-2l6,2v-7.72C19.24,13.87,20,12.03,20,10z M12,4c3.31,0,6,2.69,6,6 s-2.69,6-6,6s-6-2.69-6-6S8.69,4,12,4z M12,19l-4,1.02v-3.1C9.18,17.6,10.54,18,12,18s2.82-0.4,4-1.08v3.1L12,19z"/></svg>
                                <span class="side-menu__label">Utilities</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="css-grid.html" class="side-menu__item">Css Grid</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 17h16v2H4zm13-6.17L15.38 12 12 7.4 8.62 12 7 10.83 9.08 8H4v6h16V8h-5.08z" opacity=".3"/><path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 12 7.4l3.38 4.6L17 10.83 14.92 8H20v6z"/></svg>
                                <span class="side-menu__label">Widgets</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Tables & Charts</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V5H5zm4 12H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                                <span class="side-menu__label">Charts</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-funnel-charts.html" class="side-menu__item">Funnel Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-slope-charts.html" class="side-menu__item">Slope charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg>
                                <span class="side-menu__label">Tables</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps & Icons</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M6.44,9.86L7.02,5H5.05L4.04,9.36c-0.1,0.42-0.01,0.84,0.25,1.17C4.43,10.71,4.73,11,5.23,11 C5.84,11,6.36,10.51,6.44,9.86z" opacity=".3"/><path d="M9.71,11C10.45,11,11,10.41,11,9.69V5H9.04L8.49,9.52c-0.05,0.39,0.07,0.78,0.33,1.07 C9.05,10.85,9.37,11,9.71,11z" opacity=".3"/><path d="M14.22,11c0.41,0,0.72-0.15,0.96-0.41c0.25-0.29,0.37-0.68,0.33-1.07L14.96,5H13v4.69 C13,10.41,13.55,11,14.22,11z" opacity=".3"/><path d="M18.91,4.99L16.98,5l0.58,4.86c0.08,0.65,0.6,1.14,1.21,1.14c0.49,0,0.8-0.29,0.93-0.47 c0.26-0.33,0.35-0.76,0.25-1.17L18.91,4.99z" opacity=".3"/><path d="M21.9,8.89l-1.05-4.37c-0.22-0.9-1-1.52-1.91-1.52H5.05C4.15,3,3.36,3.63,3.15,4.52L2.1,8.89 c-0.24,1.02-0.02,2.06,0.62,2.88C2.8,11.88,2.91,11.96,3,12.06V19c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-6.94 c0.09-0.09,0.2-0.18,0.28-0.28C21.92,10.96,22.15,9.91,21.9,8.89z M13,5h1.96l0.54,4.52c0.05,0.39-0.07,0.78-0.33,1.07 C14.95,10.85,14.63,11,14.22,11C13.55,11,13,10.41,13,9.69V5z M8.49,9.52L9.04,5H11v4.69C11,10.41,10.45,11,9.71,11 c-0.34,0-0.65-0.15-0.89-0.41C8.57,10.3,8.45,9.91,8.49,9.52z M4.29,10.53c-0.26-0.33-0.35-0.76-0.25-1.17L5.05,5h1.97L6.44,9.86 C6.36,10.51,5.84,11,5.23,11C4.73,11,4.43,10.71,4.29,10.53z M19,19H5v-6.03C5.08,12.98,5.15,13,5.23,13 c0.87,0,1.66-0.36,2.24-0.95c0.6,0.6,1.4,0.95,2.31,0.95c0.87,0,1.65-0.36,2.23-0.93c0.59,0.57,1.39,0.93,2.29,0.93 c0.84,0,1.64-0.35,2.24-0.95c0.58,0.59,1.37,0.95,2.24,0.95c0.08,0,0.15-0.02,0.23-0.03V19z M19.71,10.53 C19.57,10.71,19.27,11,18.77,11c-0.61,0-1.14-0.49-1.21-1.14L16.98,5l1.93-0.01l1.05,4.37C20.06,9.78,19.97,10.21,19.71,10.53z"/></g></g></svg>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 18.31l3-1.16V5.45L5 6.46zm11 .24l3-1.01V5.69l-3 1.17z" opacity=".3"/><path d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM8 17.15l-3 1.16V6.46l3-1.01v11.7zm6 1.38l-4-1.4V5.47l4 1.4v11.66zm5-.99l-3 1.01V6.86l3-1.16v11.84z"/></svg>
                                <span class="side-menu__label">Maps</span>
                                <i class="ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content kanban-bgimage">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Kanban Board</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kanban Board</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-10">
                        <div class="card custom-card">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <div class="d-flex align-items-center flex-wrap gap-2 flex-xxl-nowrap" role="search">
                                        <span class="fw-medium fs-15 text-nowrap flex-nowrap me-2">WorkSpace :</span>
                                        <input class="form-control me-1" type="search" placeholder="Search Tasks" aria-label="Search">
                                        <button class="btn btn-success-light btn-w-lg" type="submit">Search</button>
                                    </div>
                                    <div class="ms-auto d-flex gap-4 align-items-center flex-wrap">
                                        <div class="d-flex gap-2 kanban-board flex-wrap">
                                            <div class="flex-fill">
                                                <select class="form-control kanban-sortby" data-trigger name="choices-single-default" id="choices-single-default">
                                                    <option value="">Sort By</option>
                                                    <option value="Newest">Newest</option>
                                                    <option value="Date Added">Date Added</option>
                                                    <option value="Type">Type</option>
                                                    <option value="A - Z">A - Z</option>
                                                </select>
                                            </div> 
                                            <button class="btn btn-primary"><i class="ri-filter-3-line me-1 fw-medium align-middle"></i>Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SPK-kanban-board">
                            <div class="kanban-tasks-type todo">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-primary border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                        <div class="d-flex gap-1 align-items-center">
                                            <div class="d-block fw-medium fs-15 text-primary">Todo Tasks </div>
                                            <div class="text-muted fs-11">(50)</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-primary text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-tasks rounded-bottom" id="todo-tasks">
                                    <div id="todo-tasks-draggable" data-view-btn="todo-tasks">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU115</span>
                                                    <span class="badge bg-secondary-transparent">Authentication</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton04">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <h6 class="fw-medium mb-1 fs-15">Create Wireframes.</h6>
                                                </a>
                                                <p class="kanban-task-description">Outline the project goals, objectives, and requirements.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">30% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Jessica</div>
                                                            <div class="text-muted fs-10">Team Lead</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">08</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">04</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU117</span>
                                                    <span class="badge bg-success-transparent">Marketing</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton05">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Optimize Query Performance</h6>
                                                <p class="kanban-task-description">Improve the efficiency and speed of DB queries.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">10% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Smith Ki</div>
                                                            <div class="text-muted fs-10">Project Manager</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">23</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-wave flex-fill">View More</a>
                                </div>
                            </div>
                            <div class="kanban-tasks-type in-progress">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-secondary border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                        <div class="d-flex gap-1 align-items-center">
                                            <div class="d-block fw-medium fs-15 text-secondary">In Progress Tasks </div>
                                            <div class="text-muted fs-11">(24)</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-secondary text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-tasks rounded-bottom" id="inprogress-tasks">
                                    <div id="inprogress-tasks-draggable" data-view-btn="inprogress-tasks">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU124</span>
                                                    <span class="badge bg-danger-transparent">UI Design</span>
                                                    <span class="badge bg-success-transparent">Development</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton06">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Update User Access Permissions</h6>
                                                <p class="kanban-task-description">Revise and manage user access levels to ensure</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-warning">Medium</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">40% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Daniel D</div>
                                                            <div class="text-muted fs-10">Team Head</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">10</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">18</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU247</span>
                                                    <span class="badge bg-success-transparent">Design</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton07">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Ensure Dashboard Security</h6>
                                                <p class="kanban-task-description"> Protect the dashboard from unauthorized access to safeguard.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">15% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Sonia Nerwal</div>
                                                            <div class="text-muted fs-10">Team Lead</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">05</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">02</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-wave flex-fill">View More</a>
                                </div>
                            </div>
                            <div class="kanban-tasks-type inreview">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-success border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                        <div class="d-flex gap-1 align-items-center">
                                            <div class="d-block fw-medium fs-15 text-success">In Review Tasks </div>
                                            <div class="text-muted fs-11">(67)</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-success text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-tasks rounded-bottom" id="inreview-tasks">
                                    <div id="inreview-tasks-draggable" data-view-btn="inreview-tasks">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU345</span>
                                                    <span class="badge bg-success-transparent">Review</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton08">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Analyze Dashboard Performance</h6>
                                                <p class="kanban-task-description">Evaluate the efficiency and effectiveness of the dashboard.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-warning">Medium</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">22% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Monish</div>
                                                            <div class="text-muted fs-10">Project Lead</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-success btn-wave flex-fill">View More</a>
                                </div>
                            </div>
                            <div class="kanban-tasks-type completed">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-danger border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                        <div class="d-flex gap-1 align-items-center">
                                            <div class="d-block fw-medium fs-15 text-danger">Completed Tasks</div>
                                            <div class="text-muted fs-11">(57)</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-danger text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-tasks rounded-bottom" id="completed-tasks">
                                    <div id="completed-tasks-draggable" data-view-btn="completed-tasks">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU553</span>
                                                    <span class="badge bg-success-transparent">Review</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton09">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Test Dashboard Usability</h6>
                                                <p class="kanban-task-description">Assess the ease of use, accessibility, and overall user experience.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/7.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Arora</div>
                                                            <div class="text-muted fs-10">Team Manager</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU665</span>
                                                    <span class="badge bg-success-transparent">Development</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Update Security Certifications</h6>
                                                <p class="kanban-task-description">Ensure that all security certifications are current and meet.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">kerindh</div>
                                                            <div class="text-muted fs-10">Project Lead</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">22</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="task-badges">
                                                    <span class="badge bg-primary-transparent">ID: #SPRU205</span>
                                                    <span class="badge bg-success-transparent">Discussion</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-medium mb-1 fs-15">Test Integration Stability</h6>
                                                <p class="kanban-task-description">Ensure that integrated components or systems work together.</p>
                                                <div class="mb-1">
                                                    <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                        <div>
                                                            <div class="fw-medium">Iswar</div>
                                                            <div class="text-muted fs-10">Project Manager</div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="me-2 text-success">
                                                            <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-2 text-secondary">
                                                            <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">11</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="text-info">
                                                            <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-danger btn-wave flex-fill">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="card custom-card">
                            <div class="card-body"> 
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">
                                        <div class="fs-14 fw-medium pb-2">Menu</div>
                                    </li>
                                    <li class="active bg-primary-transparent px-2 py-1 mb-1 rounded-1">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <i class="ri-dashboard-fill fs-16 text-primary"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap text-primary">
                                                    Board Tasks
                                                </span>
                                                <span class="badge bg-primary ms-auto">78</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 mb-2   ">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-history-fill fs-16"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Pending Tasks
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 mb-2   ">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-error-warning-line fs-15 lh-1"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Overdue
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 mb-2">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-checkbox-circle-line fs-15 lh-1"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Upcoming Tasks
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 mb-2">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-timeline-view fs-15 lh-1"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Timeline
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 mb-2">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-equalizer-2-line fs-15 lh-1"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Activity
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-2 py-1">
                                        <a href="javascript:void(0)" class="hover-color-primary">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="ri-hourglass-line fs-15 lh-1"></i>
                                                </div>
                                                <span class="flex-fill text-nowrap">
                                                    Priority Tasks
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top border-block-start-dashed">
                                <div class="fs-14 fw-medium pb-2">On Board Members</div>
                                <div class="p-3 bg-light rounded-3 mb-3">
                                    <div>
                                        <span class="avatar avatar-sm avatar-rounded align-center">
                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded align-center">
                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm online avatar-rounded align-center">
                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded align-center">
                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded align-center">
                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm online avatar-rounded align-center">
                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded align-center">
                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm online avatar-rounded align-center">
                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 text-nowrap flex-wrap">
                                    <button class="btn btn-primary flex-fill"><i class="ri-add-line me-1 fw-medium align-middle"></i>Member</button>
                                    <button class="btn btn-primary flex-fill" data-bs-toggle="modal" data-bs-target="#add-board"><i class="ri-add-line me-1 fw-semibold align-middle"></i>Board</button>
                                </div>
                            </div>
                            <div class="card-body border-top border-block-start-dashed">
                                <div class="fs-14 fw-medium pb-2">Labels</div>
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <span class="badge bg-success-transparent">Development</span>
                                    <span class="badge bg-secondary-transparent">Marketing</span>
                                    <span class="badge bg-primary-transparent">UX Design</span>
                                    <span class="badge bg-info-transparent">UX Design</span>
                                    <span class="badge bg-purple-transparent">Design</span>
                                    <span class="badge bg-warning-transparent">UI</span>
                                    <span class="badge bg-danger-transparent">Development</span>
                                    <span class="badge bg-primary-transparent">UX Design</span>
                                    <span class="badge bg-pink-transparent">React</span>
                                    <span class="badge bg-info-transparent">front End</span>
                                </div>
                                <button class="btn btn-success-light w-100"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add Label</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::add board modal -->
                <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Board</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="board-title" class="form-label">Task Board Title</label>
                                        <input type="text" class="form-control" id="board-title" placeholder="Board Title">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Board</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add board modal -->

                <!-- Start::add task modal -->
                <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Task</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row gy-2">
                                    <div class="col-xl-6">
                                        <label for="task-name" class="form-label">Task Name</label>
                                        <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="task-id" class="form-label">Task ID</label>
                                        <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Description</label>
                                        <textarea class="form-control" id="text-area" rows="2" placeholder="Write Description"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Images</label>
                                        <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Assigned To</label>
                                        <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                            <option value="Choice 1">Angelina May</option>
                                            <option value="Choice 2">Sarah Ruth</option>
                                            <option value="Choice 3">Hercules Jhon</option>
                                            <option value="Choice 4">Mayor Kim</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Target Date</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Tags</label>
                                        <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                            <option value="">Select Tag</option>
                                            <option value="UI/UX">UI/UX</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Designing">Designing</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Authentication">Authentication</option>
                                            <option value="Product">Product</option>
                                            <option value="Development">Development</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn m-0 me-2 btn-secondary-light"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn m-0 btn-primary">Add Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add task modal -->

            </div>
        </div>
        <!-- End::app-content -->

        <!-- Start::mail information offcanvas -->
        <div class="offcanvas offcanvas-end mail-info-offcanvas" tabindex="-1" id="offcanvasRight"> 
            <div class="offcanvas-body p-0">
                <div class="mails-information">
                        <div class="mail-info-header d-flex flex-wrap gap-2 align-items-center">
                            <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar me-1">
                                <img src="../assets/images/faces/12.jpg" alt="">
                            </span>
                            <div class="flex-fill">
                                <h6 class="mb-0 fw-medium">Raiden stevie</h6>
                                <span class="text-muted fs-11">raidenstevie777@gmail.com</span>
                            </div>
                            <div class="mail-action-icons">
                                <button class="btn btn-icon btn-outline-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Starred">
                                    <i class="ri-star-line"></i>
                                </button>
                                <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                                    <i class="ri-inbox-archive-line"></i>
                                </button>
                                <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Report spam">
                                    <i class="ri-spam-2-line"></i>
                                </button>
                                <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                                <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                    <i class="ri-reply-line"></i>
                                </button>
                                <button type="button" class="btn-close btn btn-sm btn-icon border" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="responsive-mail-action-icons">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-star-line me-1 align-middle d-inline-block"></i>Starred</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line me-1 align-middle d-inline-block"></i>Archive</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-spam-2-line me-1 align-middle d-inline-block"></i>Report Spam</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-reply-line me-1 align-middle d-inline-block"></i>Reply</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-icon btn-light ms-1 close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mail-info-body p-3" id="mail-info-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                                <div>
                                    <p class="fs-20 fw-medium mb-0">Strategic Insights Webinar: Navigating Future Trends.</p>
                                </div>
                                <div class="float-end">
                                    <span class="fs-12 text-muted">Oct-22-2024,03:05PM</span>
                                </div>
                            </div>
                            <div class="main-mail-content mb-3">
                                <p class="fs-14 fw-medium mb-3">Greetings Mr Jack &#128400;,</p>
                                <p class="mb-2 text-muted">We're excited to invite you to our upcoming webinar, "Navigating Future Trends," where industry experts will share strategic insights to help you stay ahead in an ever-evolving landscape. Join us on [Date] at [Time] for an engaging session that promises to provide actionable knowledge and valuable perspectives.</p>
                                <span class="d-block text-muted fw-meidum">Key Highlights :</span>
                                <ul class="text-muted my-3">
                                    <li class="mb-2">Expert analysis of emerging trends</li>
                                    <li class="mb-2">Practical strategies for staying competitive</li>
                                    <li class="mb-2">Q&A session for personalized insights</li>
                                </ul>
                                <p class="mb-2 text-muted">Earth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, making the true shape of the Earth an "oblate spheroid.".</p>
                                <p class="mb-0 mt-4">
                                    <span class="d-block">Best Regards,</span>
                                    <span class="d-block">Raiden stevie</span>
                                </p>
                            </div>
                            <div class="mail-attachments mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2"> 
                                        <span class="fs-14 fw-medium"><i class="ri-attachment-2 me-1 align-middle"></i>Attachments (5.8KB):</span>
                                    </div>
                                    <div class="btn-list">
                                        <button class="btn btn-sm btn-primary-light">Download All</button>
                                    </div>
                                </div>    
                                <div class="mt-2 d-flex flex-wrap gap-3">
                                    <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                        <div class="me-1 lh-1">
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-file-pdf-2-line fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 fs-12 fw-medium">
                                                    Instructions_file.pdf
                                                </p>
                                            </a>
                                            <div class="fs-12 text-muted text-wrap">2.1KB</div>  
                                        </div>
                                        <div class="ms-auto btn btn-sm btn-secondary-light rounded-circle btn-icon">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                        <div class="me-1 lh-1">
                                            <span class="avatar avatar-md bg-primary">
                                                <i class="ri-file-pdf-line fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);">
                                                <p class="mb-1 fs-12 fw-medium">
                                                    Complete_Folder.doc
                                                </p>
                                            </a>
                                            <div class="fs-12 text-muted text-wrap">1.5KB</div>  
                                        </div>
                                        <div class="ms-auto btn btn-sm btn-secondary-light rounded-circle btn-icon">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-images mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2"> 
                                        <span class="fs-14 fw-medium"><i class="ri-image-line me-1 align-middle"></i>Images:</span>
                                    </div>
                                    <div class="btn-list">
                                        <button class="btn btn-sm btn-primary-light">Download All</button>
                                    </div>
                                </div>    
                                <div class="mt-2 d-flex flex-wrap gap-3">
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="../assets/images/media/media-74.jpg" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="../assets/images/media/media-75.jpg" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg shadow-sm">
                                            <img src="../assets/images/media/media-77.jpg" alt="">
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <span class="avatar avatar-lg bg-primary-transparent">
                                            5+
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <span class="fs-14 fw-medium"><i class="ri-reply-all-line me-1 align-middle d-inline-block"></i>Reply:</span>
                            </div>
                            <div class="mail-reply">
                                <div id="mail-reply-editor"></div>
                            </div>
                        </div>
                        <div class="mail-info-footer d-flex flex-wrap gap-2 align-items-center justify-content-between">
                            <div>
                                <button class="btn btn-icon btn-primary-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print">
                                    <i class="ri-printer-line"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mark as read">
                                    <i class="ri-mail-open-line"></i>
                                </button>
                                <button class="btn btn-icon btn-success-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload">
                                    <i class="ri-refresh-line"></i>
                                </button>
                            </div>
                            <div>
                                <button class="btn btn-secondary">
                                    <i class="ri-share-forward-line me-1 d-inline-block align-middle"></i>Forward
                                </button>
                                <button class="btn btn-danger ms-1">
                                    <i class="ri-reply-all-line me-1 d-inline-block align-middle"></i>Reply
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End::mail information offcanvas -->
        

        
        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted">
                    Copyright © <span id="year"></span> 
                    <a href="javascript:void(0);" class="text-dark fw-semibold">Rixzo</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by 
                    <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                    </a>. 
                    All rights reserved.
                </span>        
            </div>
        </footer>
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

    </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.js"></script>

    <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>

    <!-- Auto Complete JS -->
    <script src="../assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    
    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.js"></script>

    <!-- Filepond JS -->
    <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Flat Picker JS -->
    <script src="../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Dragula JS -->
    <script src="../assets/libs/dragula/dragula.min.js"></script>

    <!-- Internal Task  JS -->
    <script src="../assets/js/task-kanban-board.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>