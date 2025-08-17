
@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Invoice Details</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
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
                                    <h6 class="mb-1"><span class="fs-13">Invoice No :</span> <span class="text-success">#INV564321</span></h6>
                                    <p class="fw-medium mb-0 fs-12">Issued Date : <span class="text-muted">15, April 2024</span></p>
                                </div>
                                <div class="ms-auto text-end">
                                    <div class="avatar avatar-md mb-2 p-1">
                                        <img src="../assets/images/brand-logos/toggle-logo.png" alt="Company Logo">
                                    </div>
                                </div>                                
                            </div>
                            <div class="card-body">
                                <div class="p-4 bg-primary rounded mb-3 text-fixed-white">
                                    <div class="d-flex justify-content-between gap-2 flex-wrap">
                                        <div>
                                            <h2 class="fw-semibold text-fixed-white">INVOICE <span class="op-7 fw-semibold">#1570</span></h2>
                                            <p class="fw-medium mb-1">Due Date : <span class="op-8 ms-1">15, July 2024</span></p>
                                            <p class="fw-medium mb-0">Invoice Date : <span class="op-8 ms-1">1, July 2024</span></p>
                                        </div>
                                        <div class="text-end">
                                            <p class="fw-medium fs-16 op-8 mb-4">Total Amount (Outstanding Amount in USD)</p>
                                            <h3 class="fw-semibold text-fixed-white align-end mb-0 mt-auto pt-3">$5487.00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border bg-light rounded">
                                    <div class="d-flex justify-content-between gap-5 flex-wrap">
                                        <div class="row flex-fill">
                                            <div class="col-xl-3">
                                                <p class="mb-2 fw-semibold">
                                                    Billing To:
                                                </p>
                                            </div>
                                            <div class="col-xl-8">
                                                <p class="fw-bold mb-1">
                                                    NEXTECH SOLUTIONS
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    1234, Elm Street, Suite 567
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    San Francisco, CA, USA, 94103
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    nextechsolutions@support.com
                                                </p>
                                                <p class="mb-1 text-muted">
                                                    (415) 789-1234
                                                </p>
                                                <p class="text-muted mb-0">For more information, check <a href="javascript:void(0);" class="text-primary fw-medium"><u>Tax Details</u></a>.</p>
                                            </div>
                                        </div>
                                        <div class="row flex-fill text-end gx-0">
                                            <div class="col-xl-5">
                                                <p class="mb-2 fw-semibold">
                                                    Billing From:
                                                </p>
                                            </div>
                                            <div class="col-xl-7">
                                                <p class="fw-bold mb-1">
                                                    Priya Verma
                                                </p>
                                                <p class="text-muted mb-1">
                                                    A-202, Zenith Towers
                                                </p>
                                                <p class="text-muted mb-1">
                                                    Mumbai, India, 400001
                                                </p>
                                                <p class="text-muted mb-1">
                                                    priya.verma@zenithmail.com
                                                </p>
                                                <p class="text-muted mb-0">
                                                    +91 987-654-3210
                                                </p>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table nowrap text-nowrap border mt-4 table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>BRAND NAME</th>
                                                        <th>DESCRIPTION</th>
                                                        <th>QUANTITY</th>
                                                        <th>PRICE PER UNIT</th>
                                                        <th>TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="fw-medium">
                                                                Stellar Audio (Earbuds)
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">
                                                                Wireless in-ear design, noise isolation, long battery life.
                                                            </div>
                                                        </td>
                                                        <td class="product-quantity-container">
                                                            2
                                                        </td>
                                                        <td>
                                                            $120
                                                        </td>
                                                        <td>
                                                            $240
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fw-medium">
                                                                Titan Wear (Smartwatch)
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">
                                                                Heart rate monitoring, GPS tracking, water-resistant.
                                                            </div>
                                                        </td>
                                                        <td class="product-quantity-container">
                                                            1
                                                        </td>
                                                        <td>
                                                            $450
                                                        </td>
                                                        <td>
                                                            $450
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fw-medium">
                                                                Luxe & Co (Handbag)
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">
                                                                Premium leather, adjustable straps, multiple compartments.
                                                            </div>
                                                        </td>
                                                        <td class="product-quantity-container">
                                                           2
                                                        </td>
                                                        <td>
                                                            $350
                                                        </td>
                                                        <td>
                                                            $700
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fw-medium">
                                                                Glow Essentials (Cosmetics Kit)
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">
                                                                Complete makeup kit with daily essentials.
                                                            </div>
                                                        </td>
                                                        <td class="product-quantity-container">
                                                            1
                                                        </td>
                                                        <td>
                                                            $95
                                                        </td>
                                                        <td>
                                                            $95
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fw-medium">
                                                                Breeze Wear (Jacket)
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">
                                                                Windproof and waterproof material, lightweight.
                                                            </div>
                                                        </td>
                                                        <td class="product-quantity-container">
                                                            1
                                                        </td>
                                                        <td>
                                                            $180
                                                        </td>
                                                        <td>
                                                            $180
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td colspan="2">
                                                            <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0">Sub Total :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-15">$1,665</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0">Avail Discount :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-15">$25.00</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0">Coupon Discount <span class="text-success">(5%)</span> :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-15">$83.25</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0">Vat <span class="text-danger">(10%)</span> :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-15">$158.17</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0">Due Till Date :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-15">$10.00</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <p class="mb-0 fs-14">Total :</p>
                                                                        </th>
                                                                        <td>
                                                                            <p class="mb-0 fw-medium fs-16 text-success">$1,824.92</p>
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
                                            <textarea class="form-control form-control-light" id="invoice-note" rows="3">Please ensure that the invoice amount is paid by the due date to avoid late fees or service disruptions. If you have any questions regarding the invoice or need assistance, feel free to contact our billing support. For more details on payment options and terms, visit the official website.</textarea>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end d-flex gap-2 flex-wrap justify-content-end">
                                <button class="btn btn-secondary me-1" onclick="javascript:window.print();">Print<i class="ri-printer-line ms-1 align-middle d-inline-block"></i></button>
                                <button class="btn btn-info">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle d-inline-block"></i></button>
                                <button class="btn btn-success">Download <i class="ri-download-2-line ms-1 align-middle"></i></button>
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
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <p class="fs-14 fw-medium">
                                            UPI Payment
                                        </p>
                                        <p>
                                            <span class="fw-medium text-muted fs-12">UPI ID :</span> Spruko@upi
                                        </p>
                                        <p>
                                            <span class="fw-medium text-muted fs-12">Name on UPI Account :</span> Henry Milo
                                        </p>
                                        <p>
                                            <span class="fw-medium text-muted fs-12">Total Amount :</span> <span class="text-success fw-medium fs-14">$3,846.53</span>
                                        </p>
                                        <p>
                                            <span class="fw-medium text-muted fs-12">Due Date :</span> 28 June, 2024 - <span class="text-danger fs-12 fw-medium">18 days due</span>
                                        </p>
                                        <p>
                                            <span class="fw-medium text-muted fs-12">Invoice Status : <span class="badge bg-secondary-transparent fs-12">Processing</span></span>
                                        </p>
                                        <div class="alert alert-success" role="alert">
                                            Please make sure to pay the invoice bill using UPI within 120 days.
                                        </div>                                        
                                    </div>
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

    
    <!-- Custom-Switcher JS -->
    <script src="{{asset('assets/js/custom-switcher.js')}}"></script>
    
    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>
        function PrintMe(){
            window.print();
        }
    </script>

@endpush