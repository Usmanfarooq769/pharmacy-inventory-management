    <!-- Sweet Alerts Css -->
<link rel="stylesheet" href="../assets/libs/sweetalert2/sweetalert2.min.css">
@extends('layouts.app')
@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Cart</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: Row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card overflow-hidden" id="cart-container-delete">
                            <div class="card-header">
                                <div class="card-title">
                                    Cart Items <span class="text-pink fs-11">(05 Items)</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Availability
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th class="text-center">
                                                    Total
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <img src="../assets/images/ecommerce/png/1.png" alt="" class="product-img p-2 bg-secondary-transparent">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="mb-2 fs-16 fw-semibold">
                                                                <a href="javascript:void(0);">Women's Slim Bag</a>
                                                            </div>
                                                            <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>20 OFF</span>
                                                            <div class="my-2">
                                                                <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Grey</span>
                                                            </div>
                                                            <div>
                                                                <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">Compact</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-20 text-pink">
                                                            $545
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $854.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success"> In Stock</span>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light"><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="1">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="fs-15 fw-semibold">
                                                        $545
                                                    </div>
                                                </td>
                                                <td>
                                                   <a href= "{{route('wishlist')}}" class="btn btn-icon btn-secondary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Move To Wishlist"><i class="ri-heart-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save For Later"><i class="ri-bookmark-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <img src="../assets/images/ecommerce/png/2.png" alt="" class="product-img p-2 bg-pink-transparent">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="mb-2 fs-16 fw-semibold">
                                                                <a href="javascript:void(0);">Beautiful Candle Set</a>
                                                            </div>
                                                            <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>15% OFF</span>
                                                            <div class="my-2">
                                                                <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Blue</span>
                                                            </div>
                                                            <div>
                                                                <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">42</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-20 text-pink">
                                                            $85
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $100.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success"> In Stock</span>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light"><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="1">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="fs-15 fw-semibold">
                                                        $85
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('wishlist')}}" class="btn btn-icon btn-secondary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Move To Wishlist"><i class="ri-heart-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save For Later"><i class="ri-bookmark-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <img src="../assets/images/ecommerce/png/3.png" alt="" class="product-img p-2 bg-danger-transparent">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="mb-2 fs-16 fw-semibold">
                                                                <a href="javascript:void(0);">Printed Designer Top</a>
                                                            </div>
                                                            <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>25% OFF</span>
                                                            <div class="my-2">
                                                                <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Red</span>
                                                            </div>
                                                            <div>
                                                                <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">Large</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-20 text-pink">
                                                            $120
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $160.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger"> Out of Stock</span>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light" disabled><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="0" disabled>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light" disabled><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="fs-15 fw-semibold">
                                                        N/A
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('wishlist')}}" class="btn btn-icon btn-secondary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Move To Wishlist"><i class="ri-heart-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save For Later"><i class="ri-bookmark-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <img src="../assets/images/ecommerce/png/4.png" alt="" class="product-img p-2 bg-primary-transparent">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="mb-2 fs-16 fw-semibold">
                                                                <a href="javascript:void(0);">Men's Casual Sneakers</a>
                                                            </div>
                                                            <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>10% OFF</span>
                                                            <div class="my-2">
                                                                <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Green</span>
                                                            </div>
                                                            <div>
                                                                <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">Medium</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-20 text-pink">
                                                            $15
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $17.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success"> In Stock</span>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light"><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="1">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="fs-15 fw-semibold">
                                                        $15
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('wishlist')}}" class="btn btn-icon btn-secondary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Move To Wishlist"><i class="ri-heart-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save For Later"><i class="ri-bookmark-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <img src="../assets/images/ecommerce/png/5.png" alt="" class="product-img p-2 bg-orange-transparent">
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="mb-2 fs-16 fw-semibold">
                                                                <a href="javascript:void(0);">Flower Pot</a>
                                                            </div>
                                                            <span class="badge bg-success-transparent fs-11"><i class="ri-discount-percent-line fs-10"></i>30% OFF</span>
                                                            <div class="my-2">
                                                                <span class="me-1 fw-medium text-muted">Color:</span><span class="fw-medium">Black</span>
                                                            </div>
                                                            <div>
                                                                <span class="me-1 fw-medium text-muted">Size:</span><span class="fw-medium">M</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-semibold fs-20 text-pink">
                                                            $35
                                                        </div>
                                                        <s class="text-muted fs-12">
                                                            $50.00
                                                        </s>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success"> In Stock</span>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group flex-nowrap rounded-pill cart-input-group">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-minus waves-effect waves-light"><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center p-0" aria-label="quantity" value="1">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm btn-primary product-quantity-plus waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="fs-15 fw-semibold">
                                                        $35
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('wishlist')}}" class="btn btn-icon btn-secondary btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Move To Wishlist"><i class="ri-heart-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Save For Later"><i class="ri-bookmark-line lh-1 align-middle"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line lh-1 align-middle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card d-none" id="cart-empty-cart">
                            <div class="card-header">
                                <div class="card-title">
                                    Empty Cart
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="cart-empty text-center">
                                    <span class="svg-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewbox="0 0 24 24"><path d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z"/><path d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z"/><path d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z"/><path d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z"/></svg>
                                    </span>
                                    <h3 class="fw-bold mb-1">Your Cart is Empty</h3>
                                    <h5 class="mb-3">Add some items to make me happy :)</h5>
                                    <a href="{{route('wishlist')}}" class="btn btn-primary btn-wave m-3" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">	
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Order Summary
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="p-3 text-center border-bottom border-block-end-dashed">
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
                                    <div class="text-muted mb-2 fs-15">
                                        Total:
                                    </div>
                                    <h3 class="mb-3">$420.22
                                        <s class="text-muted fs-12 fw-normal">
                                            $680.98
                                        </s>
                                    </h3>
                                    <a href="{{ route('check-out') }}" class="btn btn-primary d-grid">
                                        Checkout
                                    </a>
                                </div>
                                <div class="p-3 border-bottom border-block-end-dashed">
                                    <label for="promo-code" class="fw-semibold fs-15 mb-0">Coupon Code</label>
                                    <div class="fs-12 text-success mb-3"><i class="ri-checkbox-circle-fill"></i> Coupon Code Applied <span class="text-pink">*SAVE UPTO 20%</span></div>
                                    <div class="input-group mb-0 p-2 bg-light rounded">
                                        <input type="text" class="form-control form-control-sm fw-medium" id="promo-code" name="promo-code" placeholder="Enter Promo Code" aria-label="Enter Promo Code" aria-describedby="coupons" value="ATYV897G00AA">
                                        <button class="btn btn-primary" type="button" id="coupons">Apply</button>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom border-block-end-dashed">
                                    <p class="fs-15 mb-2 fw-semibold">Choose Delivery:</p>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping" id="shipping1">
                                            <label class="form-check-label fw-medium" for="shipping1">
                                                Standard Shipping
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium mb-1 text-end"><span class="text-muted">Charges:</span> $5.00</div>
                                            <div class="fs-11 text-muted text-end">Within 5-7 Days</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping" id="shipping2" checked="">
                                            <label class="form-check-label fw-medium" for="shipping2">
                                                Express Shipping
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium mb-1 text-end"><span class="text-muted">Charges:</span> $20.00</div>
                                            <div class="fs-11 text-muted text-end">1 Day</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <a href="{{route('products')}}" class="btn btn-success-light btn-wave d-grid">Continue Shopping</a>
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