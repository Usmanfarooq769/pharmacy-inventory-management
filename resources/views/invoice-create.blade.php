@extends('layouts.app')

@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Invoice Create</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header d-md-flex d-block">
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-2">
                                    <div class="d-flex gap-1 mb-1 align-items-center">
                                        <span class="fs-13 text-nowrap">Invoice No </span> 
                                        <div class="mx-2">:</div>
                                        <input type="text" class="form-control form-control-sm" placeholder="Invoice ID" value="INV ID">
                                    </div>
                                    <div class="d-flex gap-1 mb-1 align-items-center">
                                        <span class="fs-13 text-nowrap">Issued Date </span> 
                                        <div class="mx-2">:</div>
                                        <input type="text" class="form-control form-control-sm" placeholder="Invoice ID" value="INV ID">
                                    </div>
                                </div>
                                <div class="ms-auto text-end">
                                    <div>
                                        <img src="../assets/images/brand-logos/toggle-logo.png" alt="Company Logo" class="img-fluid">
                                    </div>
                                </div>                                
                            </div>
                            <div class="card-body">
                                <div class="p-4 bg-primary rounded mb-3 text-fixed-white">
                                    <div class="d-flex justify-content-between gap-2 flex-wrap">
                                        <div>
                                            <div class="d-flex gap-1 mb-1 align-items-center">
                                                <h2 class="text-nowrap fw-semibold text-fixed-white">INVOICE </h2> 
                                                <div class="mx-2">:</div>
                                                <input type="text" class="form-control" placeholder="Invoice ID" value="INV ID">
                                            </div>
                                            <div class="d-flex gap-1 mb-1 align-items-center">
                                                <p class="text-nowrap fw-semibold text-fixed-white mb-0">Due Date </p> 
                                                <div class="mx-2">:</div>
                                                <input type="text" class="form-control form-control-sm" placeholder="Invoice Date" value="Invoice Date">
                                            </div>
                                            <div class="d-flex gap-1 align-items-center">
                                                <p class="text-nowrap fw-semibold text-fixed-white mb-0">Invoice  </p> 
                                                <div class="mx-2">:</div>
                                                <input type="text" class="form-control form-control-sm" placeholder="Invoice Date" value="Invoice Date">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <p class="fw-medium fs-16 op-8 mb-4">Total Amount (Outstanding Amount in USD)</p>
                                            <div class="d-flex gap-1 align-items-center mt-auto pt-4">
                                                <input type="text" class="form-control" placeholder="Invoice Amount" value="INV Amount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border bg-light rounded pb-2">
                                    <div class="d-flex justify-content-between gap-5 flex-wrap">
                                        <div class="row flex-fill">
                                            <div class="col-xl-3">
                                                <p class="mb-2 fw-semibold">
                                                    Billing To:
                                                </p>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="col-xl-12 mb-1">
                                                    <input type="text" class="form-control" id="Company-Name" placeholder="Company Name" value="NEXTECH SOLUTIONS">
                                                </div>
                                                <p class="fw-bold mb-1">
                                                    <textarea class="form-control" id="company-address" placeholder="Enter Address" rows="3"></textarea>
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    <input type="text" class="form-control" id="company-mail" placeholder="Company Email" value="">
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    <input type="text" class="form-control" id="company-phone" placeholder="Phone Number" value="">
                                                </p>
                                                <p class="mb-0 text-muted">
                                                    <textarea class="form-control" id="invoice-subject" placeholder="Subject" rows="4"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row flex-fill text-end">
                                            <div class="col-xl-5">
                                                <p class="mb-2 fw-semibold">
                                                    Billing From:
                                                </p>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="col-xl-12 mb-1">
                                                    <input type="text" class="form-control" id="Company-Name11" placeholder="Company Name" value="Priya Verma">
                                                </div>
                                                <p class="fw-bold mb-1">
                                                    <input type="text" class="form-control" id="customer-mail" placeholder="Customer Email" value="">
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    <textarea class="form-control" id="customer-address" placeholder="Enter Address" rows="3"></textarea>
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    <input type="text" class="form-control" id="customer-phone" placeholder="Phone Number" value="">
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    <input type="text" class="form-control" id="zip-code" placeholder="Zip Code" value="">
                                                </p>
                                                <div class="text-start">
                                                    <p class="fw-semibold mb-2 mt-2 text-start">
                                                        Currency :
                                                    </p>
                                                    <select class="form-control text-start mb-0" data-trigger name="invoice-currency" id="invoice-currency">
                                                        <option value="">Select Currency</option>
                                                        <option value="Armani">USD - (United States Dollar)</option>
                                                        <option value="Lacoste">BHD - (Bahraini Dinar)</option>
                                                        <option value="Puma">KWD - (Kuwaiti Dinar)</option>
                                                        <option value="Spykar">CHF - (Swiss Franc)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="table-responsive"> 
                                            <table class="table nowrap text-nowrap border mt-3 table-striped"> 
                                                <thead>
                                                    <tr>
                                                        <th>PRODUCT NAME</th>
                                                        <th>DESCRIPTION</th>
                                                        <th>QUANTITY</th>
                                                        <th>PRICE PER UNIT</th> 
                                                        <th>TOTAL</th>
                                                        <th>ACTION</th>
                                                    </tr> 
                                                </thead> 
                                                <tbody>
                                                    <tr> 
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Enter Product Name">
                                                        </td>
                                                        <td>
                                                            <textarea rows="1" class="form-control" placeholder="Enter Description"></textarea>
                                                        </td>
                                                        <td class="invoice-quantity-container">
                                                            <div class="input-group border rounded flex-nowrap">
                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity4" value="1">
                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i class="ri-add-line"></i></button>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control" placeholder="" type="text" value="$84.00"></td>
                                                        <td><input class="form-control" placeholder="" type="text" value="$251.00"></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Enter Product Name">
                                                        </td>
                                                        <td>
                                                            <textarea rows="1" class="form-control" placeholder="Enter Description"></textarea>
                                                        </td>
                                                        <td class="invoice-quantity-container">
                                                            <div class="input-group border rounded flex-nowrap">
                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity5" value="1">
                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i class="ri-add-line"></i></button>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control" placeholder="Enter Amount" type="text"></td>
                                                        <td><input class="form-control" placeholder="Enter Amount" type="text"></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td colspan="6" class="border-bottom-0"><a class="btn btn-light" href="javascript:void(0);"><i class="bi bi-plus-lg"></i> Add Product</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                        <td colspan="2">
                                                            <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-medium">Sub Total :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$2519.89">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-medium">Avail Discount :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$15.58">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-medium">Coupon Discount <span class="text-success">(3.5%)</span> :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$112.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-medium">Vat <span class="text-danger">(7.5%)</span> :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$214.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-medium">Due Till Date :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$2.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fs-14 fw-medium">Total :</div>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$2,106.68">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody> 
                                            </table> 
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <label for="invoice-note" class="form-label">Note:</label>
                                            <textarea class="form-control form-control-light" id="invoice-note" rows="3">If you're not satisfied with the product, you can return the unused item within 10 days of the delivery date. For refund options, please visit the official website and review the available refund policies.</textarea>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center gap-2 flex-wrap">
                                <div class="d-flex gap-2 flex-wrap">
                                    <button class="btn btn-primary">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle d-inline-block"></i></button>
                                    <button class="btn btn-icon btn-secondary"><i class="bi bi-plus-lg"></i></button>
                                    <button class="btn btn-icon btn-success me-2"><i class="bi bi-download"></i></button>
                                </div>
                                <div class="ms-auto d-flex gap-2 flex-wrap">
                                    <button class="btn btn-secondary"><i class="ri-eye-line me-1 align-middle d-inline-block"></i>Preview</button>
                                    <button class="btn btn-primary">Send Invoice <i class="ri-send-plane-2-line ms-1 align-middle d-inline-block"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Mode Of Payment
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-style-1 nav-pills mb-3 gap-2 flex-wrap" id="paymentMethodTabs" role="tablist">
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link active" id="credit-tab" data-bs-toggle="tab" data-bs-target="#credit" type="button" role="tab" aria-controls="credit" aria-selected="true">Credit/Debit Card</button>
                                    </li>
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link" id="upi-tab" data-bs-toggle="tab" data-bs-target="#upi" type="button" role="tab" aria-controls="upi" aria-selected="false">UPI Payment</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="paymentMethodTabContent">
                                    <div class="tab-pane fade show active" id="credit" role="tabpanel" aria-labelledby="credit-tab">
                                        <input type="text" class="form-control mb-3" id="invoice-payment-cardname" placeholder="Card Number" value="1323 3213 4546 XXXX">
                                        <label for="invoice-payment-cardname" class="form-label mb-0">
                                            <a class="text-muted fs-11" href="javascript:void(0);">Enter valid card number 
                                                <sup class="fs-12 text-danger align-middle"> *</sup>
                                            </a>
                                        </label>
                                        <input type="text" class="form-control mb-3" placeholder="Card Holder Name">
                                        <input type="password" class="form-control mb-2" placeholder="Enter OTP">
                                    </div>
                                    <div class="tab-pane fade" id="upi" role="tabpanel" aria-labelledby="upi-tab">
                                        <input type="text" class="form-control mb-3" id="invoice-payment-upiid" placeholder="UPI ID" value="user@upi">
                                        <label for="invoice-payment-upiid" class="form-label mb-0">
                                            <a class="text-muted fs-11" href="javascript:void(0);">Enter valid UPI ID 
                                                <sup class="fs-12 text-danger align-middle"> *</sup>
                                            </a>
                                        </label>
                                        <input type="text" class="form-control mb-3" placeholder="UPI Account Holder Name">
                                        <input type="password" class="form-control mb-2" placeholder="Enter UPI PIN">
                                    </div>
                                </div>
                                <div class="alert alert-success mt-3" role="alert">
                                    Please Make sure to pay the invoice bill within 120 days.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

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
    <!-- Date & Time Picker JS -->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Internal Create Invoice JS -->
    <script src="{{asset('assets/js/create-invoice.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

@endpush