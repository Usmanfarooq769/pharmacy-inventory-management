@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Check Out</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: Row-1 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-body product-checkout">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="p-3 border border-dashed rounded mb-5">
                                            <ul class="nav nav-tabs flex-column nav-style-5 gap-3 checkout-tabs" id="myTab1" role="tablist">
                                                <li class="nav-item m-0 flex-fill" role="presentation">
                                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2 active" id="order-tab" data-bs-toggle="tab"
                                                        data-bs-target="#order-tab-pane" type="button" role="tab"
                                                        aria-controls="order-tab" aria-selected="true">
                                                        <i class="ri-truck-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                                        Shipping
                                                    </button>
                                                </li>
                                                <li class="nav-item m-0 flex-fill" role="presentation">
                                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2 flex-wrap" id="confirmed-tab" data-bs-toggle="tab"
                                                        data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                        aria-controls="confirmed-tab" aria-selected="false">
                                                        <i class="ri-user-3-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                                        Personal Details
                                                    </button>
                                                </li>
                                                <li class="nav-item m-0 flex-fill" role="presentation">
                                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2 flex-wrap" id="shipped-tab" data-bs-toggle="tab"
                                                        data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                        aria-controls="shipped-tab" aria-selected="false">
                                                        <i class="ri-bank-card-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                                        Payment
                                                    </button>
                                                </li>
                                                <li class="nav-item m-0 flex-fill" role="presentation">
                                                    <button class="nav-link w-100 fw-medium fs-13 d-flex align-items-center gap-2 flex-wrap" id="delivered-tab" data-bs-toggle="tab"
                                                        data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                        aria-controls="delivered-tab" aria-selected="false">
                                                        <i class="ri-checkbox-circle-line align-middle p-2 lh-1 rounded-circle checkout-tab-icon"></i>
                                                        Complete Order
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center mx-auto">
                                            <img src="../assets/images/ecommerce/png/15.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content border border-dashed" id="myTabContent">
                                            <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                aria-labelledby="order-tab-pane" tabindex="0">
                                                <div class="p-3">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                                    <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                        <div class="text-success">Shipping Address :</div>
                                                        <div class="mt-sm-0 mt-2">
                                                            <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modal-new-address"><i class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>Add New Address</button>
                                                            <div class="modal fade"  id="modal-new-address" tabindex="-1" aria-labelledby="modal-new-address" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="staticBackdropLabel">New Address
                                                                            </h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row gy-3">
                                                                                <div class="col-xl-6">
                                                                                    <label for="fullname-new" class="form-label">Full Name</label>
                                                                                    <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="email-new" class="form-label">Email</label>
                                                                                    <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                                    <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="address-new" class="form-label">Address</label>
                                                                                    <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div class="row gy-3 gy-xl-0">
                                                                                        <div class="col-xl-3">
                                                                                            <label for="pincode-new" class="form-label">Pincode</label>
                                                                                            <input type="number" class="form-control" id="pincode-new" placeholder="Pincode">
                                                                                        </div>
                                                                                        <div class="col-xl-3">
                                                                                            <label for="city-new" class="form-label">City</label>
                                                                                            <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                        </div>
                                                                                        <div class="col-xl-3">
                                                                                            <label for="state-new" class="form-label">State</label>
                                                                                            <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                        </div>
                                                                                        <div class="col-xl-3">
                                                                                            <label for="country-new" class="form-label">Country</label>
                                                                                            <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-success">Save
                                                                                Address</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ps-2">
                                                        <div class="col-xl-12">
                                                            <div class="card custom-card card-style-6 border shadow-none">
                                                                <div class="card-body p-3">
                                                                    <div class="d-flex gap-2 mb-2">
                                                                        <input class="form-check-input" type="radio" id="address1" name="default-address" checked="">
                                                                        <label class="form-check-label cursor-pointer" for="address1">Set as Default</label>
                                                                    </div>
                                                                    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                                                                        <div class="flex-grow-1">
                                                                            <h6 class="fs-16 mb-0 fw-semibold">Shipping Address</h6>
                                                                        </div>
                                                                        <div class="ms-auto">
                                                                            <a class="btn btn-info-light btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                                                                            <a class="btn btn-danger-light btn-sm"><i class="ri-delete-bin-line"></i> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex gap-5 flex-wrap">
                                                                        <div>
                                                                            <p class="mb-1 fw-semibold">Johnathan Williams</p>
                                                                            <p class="mb-1  fs-13">johnwilliams@example.com</p>
                                                                            <p class="mb-2  fs-13">+1-234-567-8910</p>
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            1234 Maple Street, Apt 12B,<br>
                                                                            Downtown, Block 47,<br>
                                                                            Opp. Grand Plaza Mall, 12345,New York, USA
                                                                        </p>
                                                                    </div>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="card custom-card card-style-6 border shadow-none">
                                                                <div class="card-body p-3">
                                                                    <div class="d-flex gap-2 mb-2">
                                                                        <input class="form-check-input" type="radio" id="address2" name="default-address">
                                                                        <label class="form-check-label cursor-pointer" for="address2">Set as Default</label>
                                                                    </div>
                                                                    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                                                                        <div class="flex-grow-1">
                                                                            <h6 class="fs-16 mb-0 fw-semibold">Billing Address</h6>
                                                                        </div>
                                                                        <div class="ms-auto">
                                                                            <a class="btn btn-info-light btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                                                                            <a class="btn btn-danger-light btn-sm"><i class="ri-delete-bin-line"></i> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex gap-5 flex-wrap">
                                                                        <div>
                                                                            <p class="mb-1 fw-semibold">Sophia Mitchell</p>
                                                                            <p class="mb-1  fs-13">sophiamitchell@billing.mail</p>
                                                                            <p class="mb-0  fs-13">+44-7896-123456</p>
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            55B Baker Street, Suite 22,<br>
                                                                            Kensington Square,<br>
                                                                            Near City Tower, 45678, London, UK
                                                                        </p>
                                                                    </div>                                              
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="fs-15 fw-semibold mb-3 text-success">Shipping Methods :</p>
                                                    <div class="row gy-3 ps-2 mb-4">
                                                        <div class="col-xl-6">
                                                            <div class="border rounded border-dashed p-2 bg-light">
                                                                <div class="form-check mb-0">
                                                                    <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input mt-3" checked="">
                                                                    <div class="form-check-label">
                                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-lg">
                                                                                <img src="../assets/images/ecommerce/png/22.png" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="shipping-partner-details me-0">
                                                                            <p class="mb-0 fw-semibold">Standard Shipping</p>
                                                                            <p class="text-muted fs-11 mb-0">Delivered within 7 Days</p>
                                                                        </div>
                                                                        <div class="fw-semibold ms-auto">
                                                                            $0.00
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="border rounded border-dashed p-2 bg-light">
                                                                <div class="form-check mb-0">
                                                                    <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input mt-3">
                                                                    <div class="form-check-label">
                                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-lg">
                                                                                <img src="../assets/images/ecommerce/png/23.png" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="shipping-partner-details me-sm-5 me-0">
                                                                            <p class="mb-0 fw-semibold">Expedited Shipping</p>
                                                                            <p class="text-muted fs-11 mb-0">Delivered within 1 Day</p>
                                                                        </div>
                                                                        <div class="fw-semibold ms-auto">
                                                                            $10.49
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button class="btn btn-success" id="personal-details-trigger">Next<i class="ri-arrow-right-fill ms-2 align-middle d-inline-block"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane"
                                                role="tabpanel" aria-labelledby="confirm-tab-pane" tabindex="0">
                                                <div class="p-3">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">02</p>
                                                    <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                        <div>Personal Details :</div>
                                                    </div>
                                                    <div class="row gy-3">
                                                        <div class="col-xl-6">
                                                            <label for="firstname-personal" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="firstname-personal" placeholder="First Name" value="Johnathan ">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="lastname-personal" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname-personal" placeholder="Last Name" value="Williams">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="email-personal" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email-personal" placeholder="johnathanwilliams@mail.com" value="">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="phoneno-personal" class="form-label">Phone no</label>
                                                            <input type="text" class="form-control" id="phoneno-personal" placeholder="794-24-8494" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                    <button class="btn btn-primary" id="back-shipping-trigger"><i class="ri-arrow-left-fill me-2 align-middle d-inline-block"></i>Back</button>
                                                    <button class="btn btn-success mt-sm-0 mt-2" id="payment-trigger">Continue To Payment<i class="ri-arrow-right-fill align-middle ms-2 d-inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                                aria-labelledby="shipped-tab-pane" tabindex="0">
                                                <div class="p-3">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">03</p>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                                <div>Choose Payment Methods </div>
                                                            </div>
                                                            <div class="ps-2">
                                                                <div class="text-success fs-13 fw-semibold mb-3">Express Checkout:</div>
                                                                <div class="mb-3 ps-3">
                                                                    <div class="row gy-3">
                                                                        <div class="col-xl-6">
                                                                            <a href="javascript:void(0);" class="pay-options-checkout">
                                                                                <div class="border rounded border-dashed p-1 py-0 text-center py-1 pay-opt">
                                                                                    <span class="w-100 text-center">
                                                                                        <img src="../assets/images/ecommerce/png/25.png" alt="">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <a href="javascript:void(0);" class="pay-options-checkout">
                                                                                <div class="border rounded border-dashed p-1 py-0 text-center py-1 pay-opt">
                                                                                    <span class="w-100 text-center">
                                                                                        <img src="../assets/images/ecommerce/png/14.png" alt="">
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="text-success fs-13 fw-semibold mb-3">Pay with card(Credit/Debit Card):</div>
                                                                <div class="ps-3">
                                                                    <div class="row gy-3 mb-3">
                                                                        <div class="col-xl-12">
                                                                            <label for="payment-card-number" class="form-label">Card Number</label>
                                                                            <input type="text" class="form-control" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                            <input type="text" class="form-control" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                            <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-cvv" class="form-label">CVV</label>
                                                                            <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-security" class="form-label">O.T.P</label>
                                                                            <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                            <label for="payment-security" class="form-label mt-1 mb-0 text-danger fs-11"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="payment-card-save" checked="">
                                                                                <label class="form-check-label" for="payment-card-save">
                                                                                    Save this card
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-3 border border-dashed rounded">
                                                                        <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                                            <div class="lh-1">Saved Cards :</div>
                                                                        </div>
                                                                        <div class="row gy-3 justify-content-center">
                                                                            <div class="col-xxl-4 col-xl-6">
                                                                                <div class="border rounded border-dashed p-1 px-2 bg-light">
                                                                                    <div class="form-check mb-0">
                                                                                        <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input mt-3" checked="">
                                                                                        <div class="form-check-label">
                                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                <div class="me-2">
                                                                                                    <span class="avatar avatar-lg">
                                                                                                        <img src="../assets/images/ecommerce/png/20.png" alt="">
                                                                                                    </span>
                                                                                                </div>
                                                                                                <p class="mb-0 fw-semibold ms-auto">Master Card</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-xl-6">
                                                                                <div class="border rounded border-dashed p-1 px-2 bg-light">
                                                                                    <div class="form-check mb-0">
                                                                                        <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input mt-3">
                                                                                        <div class="form-check-label">
                                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                <div class="me-2">
                                                                                                    <span class="avatar avatar-lg">
                                                                                                        <img src="../assets/images/ecommerce/png/21.png" alt="">
                                                                                                    </span>
                                                                                                </div>
                                                                                                <p class="mb-0 fw-semibold ms-auto">VISA Card</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-xl-6">
                                                                                <div class="border rounded border-dashed p-1 px-2 bg-light">
                                                                                    <div class="form-check mb-0">
                                                                                        <input id="payment-card3" name="payment-cards" type="radio" class="form-check-input mt-3">
                                                                                        <div class="form-check-label">
                                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                                <div class="me-2">
                                                                                                    <span class="avatar avatar-lg">
                                                                                                        <img src="../assets/images/ecommerce/png/24.png" alt="">
                                                                                                    </span>
                                                                                                </div>
                                                                                                <p class="mb-0 fw-semibold ms-auto">Discover Card</p>
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
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                    <button class="btn btn-primary" id="back-personal-trigger"><i class="ri-arrow-left-fill me-2 align-middle d-inline-block"></i>Back</button>
                                                    <button class="btn btn-success mt-sm-0 mt-2" id="continue-payment-trigger">Continue Payment<i class="ri-arrow-right-fill align-middle ms-2 d-inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                                aria-labelledby="delivery-tab-pane" tabindex="0">
                                                <div class="p-3 checkout-payment-success py-5">
                                                    <div class="mb-4">
                                                        <h5 class="text-success fw-semibold">Payment Successful!</h5>
                                                    </div>
                                                    <div class="mb-4 p-3 bg-success-transparent d-inline-block rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88" id="thumbs-up" width="150" height="150" class="p-4 rounded-circle bg-success bg-opacity-25">
                                                            <g>
                                                              <rect width="14" height="40" x="4" y="42" fill="rgb(var(--success-rgb))" rx="1" ry="1"></rect>
                                                              <path fill="#ffddd4" d="M84,49a6.0066,6.0066,0,0,0-6-6H57.0723A14.7238,14.7238,0,0,0,60,34.209V25a6,6,0,0,0-12,0v5.3428A12.6565,12.6565,0,0,1,35.3433,43H33a1,1,0,0,0-1,1V80a1,1,0,0,0,.4453.832A24.7361,24.7361,0,0,0,46.2109,85H64a5.99,5.99,0,0,0,4.46-10H70a5.99,5.99,0,0,0,4.4393-10.0222,5.9846,5.9846,0,0,0,4-10A6.0034,6.0034,0,0,0,84,49Z"></path>
                                                              <path fill="#e5b7b1" d="M79.65 57H68a1 1 0 010-2H78.46A5.875 5.875 0 0179.65 57zM75.65 67H64a1 1 0 010-2H74.46A5.875 5.875 0 0175.65 67zM69.65 77H58a1 1 0 010-2H68.46A5.875 5.875 0 0169.65 77z"></path>
                                                              <rect width="18" height="46" x="16" y="39" fill="rgba(var(--success-rgb), 0.5)" rx="1" ry="1"></rect>
                                                              <path fill="rgb(var(--success-rgb))" d="M54 15a1 1 0 01-1-1V4a1 1 0 012 0V14A1 1 0 0154 15zM44.8076 18.2217L37.7368 11.15a1 1 0 111.4141-1.4141l7.0708 7.0713a1 1 0 11-1.4141 1.4141zM42 27H32a1 1 0 010-2H42a1 1 0 010 2zM61.7783 18.2217a1 1 0 010-1.4141L68.85 9.7363A1 1 0 0170.2637 11.15l-7.0713 7.0713A1 1 0 0161.7783 18.2217zM76 27H66a1 1 0 010-2H76a1 1 0 010 2z"></path>
                                                              <circle cx="26" cy="77" r="3" fill="rgb(var(--success-rgb))"></circle>
                                                            </g>
                                                          </svg>                                                          
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="mb-1 fs-14">Your payment has been processed successfully. You can track your order with Order ID <b>ORD#123456</b> from <a class="link-primary" href="javascript:void(0);"><u>Track Order</u></a></p>
                                                        <p class="text-muted">We appreciate your business and look forward to serving you again!</p>
                                                    </div>
                                                    <a href="{{route('products')}}" class="btn btn-primary">Continue Shopping <i class="bi bi-cart ms-2"></i></a>
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
                                <div class="card-title">
                                    Checkout Summary
                                </div>
                                <div class="badge bg-info">03 Items</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="p-3 text-center">
                                    <div class="list-group mb-3 rounded text-start">
                                        <div class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-secondary-transparent me-2">
                                                    <img src="../assets/images/ecommerce/png/3.png" alt="">
                                                </span>
                                                <div class="flex-fill">
                                                    <p class="mb-1 fw-semibold">Printed Designer Top <span class="fs-12 fw-normal text-muted"> (1 qty)</span></p>
                                                    <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>20 OFF</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)" class="close-item">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 fs-14 fw-semibold text-pink">$68
                                                        <span class="ms-1 text-muted fs-11 d-inline-block fw-normal"><s>$80</s></span>
                                                    </p>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-primary-transparent me-2">
                                                    <img src="../assets/images/ecommerce/png/5.png" alt="">
                                                </span>
                                                <div class="flex-fill">
                                                    <p class="mb-1 fw-semibold">Flower Pot <span class="fs-12 fw-normal text-muted"> (1 qty)</span></p>
                                                    <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>20 OFF</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)" class="close-item">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 fs-14 fw-semibold text-pink">$68
                                                        <span class="ms-1 text-muted fs-11 d-inline-block fw-normal"><s>$80</s></span>
                                                    </p>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-primary-transparent me-2">
                                                    <img src="../assets/images/ecommerce/png/4.png" alt="">
                                                </span>
                                                <div class="flex-fill">
                                                    <p class="mb-1 fw-semibold">Men's Casual Sneakers <span class="fs-12 fw-normal text-muted"> (1 qty)</span></p>
                                                    <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>20 OFF</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)" class="close-item">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 fs-14 fw-semibold text-pink">$68
                                                        <span class="ms-1 text-muted fs-11 d-inline-block fw-normal"><s>$80</s></span>
                                                    </p>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 justify-content-between mb-3 align-items-center p-3 bg-light rounded">
                                        <div class="fw-medium">Coupon Applied :</div>
                                        <span class="badge bg-pink fs-11 ms-3">ATYV897G00AA</span>
                                    </div>
                                    <div class="list-group list-group-flush p-2 bg-light rounded mb-3">
                                        <div class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="text-muted">Sub Total</div>
                                            <div class="fw-semibold fs-14">$680.98</div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="text-muted">Discount</div>
                                            <div class="fw-semibold fs-14 text-success">20% - $136.20</div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="text-muted">Delivery Charges</div>
                                            <div class="fw-semibold fs-14 text-danger">- $5</div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="text-muted">Service Tax (18%)</div>
                                            <div class="fw-semibold fs-14">- $119.56</div>
                                        </div>
                                    </div>
                                    <div class="text-muted mb-2 fs-14">
                                        Total:
                                    </div>
                                    <h3 class="mb-3">$420.22
                                        <s class="text-muted fs-12 fw-normal">
                                            $680.98
                                        </s>
                                    </h3>
                                    <a href="{{ route('products') }}" class="btn btn-primary-light btn-wave d-grid">Continue Shopping</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- End:: Row-1 -->
    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    @endsection