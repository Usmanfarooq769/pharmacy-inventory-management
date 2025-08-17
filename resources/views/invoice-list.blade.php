
@extends('layouts.app')

@section('content')
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Invoice List</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar avatar-xl bg-primary border border-primary border-opacity-10 avatar-rounded flex-shrink-0">
                                        <div class="avatar avatar-md bg-white avatar-rounded">
                                            <i class="ti ti-file-invoice text-primary fs-25"></i>
                                        </div>
                                    </div>
                                    <div class="flex-fill text-end">
                                        <h3 class="fw-medium mb-3">$<span class="count-up" data-count="5,385">5,385</span>k </h3> 
                                        <h6 class="mb-2 fs-12">Total Amount</h6> 
                                        <div class="pb-0 mt-0"> 
                                            <div class="d-flex gap-2 align-items-center justify-content-end"> 
                                                <span class="badge bg-primary">18,654</span>
                                                <div class="text-muted fs-13">Increased By <span class="text-success">2.13%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar avatar-xl bg-secondary border border-secondary border-opacity-10 avatar-rounded flex-shrink-0">
                                        <div class="avatar avatar-md bg-white avatar-rounded">
                                            <i class="ti ti-file-dollar text-secondary fs-25"></i>
                                        </div>
                                    </div>
                                    <div class="flex-fill text-end">
                                        <h3 class="fw-medium mb-3">$<span class="count-up" data-count="745">745</span>k </h3> 
                                        <h6 class="mb-2 fs-12">Total Paid</h6> 
                                        <div class="pb-0 mt-0"> 
                                            <div class="d-flex gap-2 align-items-center justify-content-end"> 
                                                <span class="badge bg-secondary">8,145</span>
                                                <div class="text-muted fs-13">Decreased By <span class="text-danger">2.13%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar avatar-xl bg-success border border-success border-opacity-10 avatar-rounded flex-shrink-0">
                                        <div class="avatar avatar-md bg-white avatar-rounded">
                                            <i class="ti ti-file-alert text-success fs-25"></i>
                                        </div>
                                    </div>
                                    <div class="flex-fill text-end">
                                        <h3 class="fw-medium mb-3"><span class="count-up" data-count="634">634</span></h3> 
                                        <h6 class="mb-2 fs-12">Total Pending Invoices</h6> 
                                        <div class="pb-0 mt-0"> 
                                            <div class="d-flex gap-2 align-items-center justify-content-end"> 
                                                <span class="badge bg-success">7,578</span>
                                                <div class="text-muted fs-13">Decreased By <span class="text-danger">2.13%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar avatar-xl bg-info border border-info border-opacity-10 avatar-rounded flex-shrink-0">
                                        <div class="avatar avatar-md bg-white avatar-rounded">
                                            <i class="ti ti-clock-cancel text-info fs-25"></i>
                                        </div>
                                    </div>
                                    <div class="flex-fill text-end">
                                        <h3 class="fw-medium mb-3"><span class="count-up" data-count="878">878</span></h3> 
                                        <h6 class="mb-2 fs-12">Overdue Invoices</h6> 
                                        <div class="pb-0 mt-0"> 
                                            <div class="d-flex gap-2 align-items-center justify-content-end"> 
                                                <span class="badge bg-info">6,547</span>
                                                <div class="text-muted fs-13">Decreased By <span class="text-danger">2.13%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Invoice Management
                                </div>
                                <div class="d-flex">
                                    <a href="invoice-create.html" class="btn btn-sm btn-primary btn-wave waves-light">
                                        <i class="ri-add-line fw-medium align-middle me-1"></i> Generate Invoice
                                    </a>
                                    <div class="dropdown ms-2">
                                        <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">View All Invoices</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Completed Payments</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Pending Payments</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Overdue Payments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Client Name</th>
                                                <th scope="col">Invoice Number</th>
                                                <th scope="col">Date Issued</th>
                                                <th scope="col">Amount Due</th>
                                                <th scope="col">Payment Status</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/10.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Neha Gupta</p>
                                                            <p class="mb-0 fs-11 text-muted">nehagupta101@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20258903
                                                    </a>
                                                </td>
                                                <td>20 Jun 2024</td>
                                                <td class="fw-semibold">$1,050.40</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>30 Jun 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Henry Milo</p>
                                                            <p class="mb-0 fs-11 text-muted">henrymilo2416@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20241323
                                                    </a>
                                                </td>
                                                <td>13 Mar 2024</td>
                                                <td class="fw-semibold">$898.12</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>25 May 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/8.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Rohit Sharma</p>
                                                            <p class="mb-0 fs-11 text-muted">rohitsharma0012@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20251234
                                                    </a>
                                                </td>
                                                <td>05 Jun 2024</td>
                                                <td class="fw-semibold">$540.75</td>
                                                <td><span class="badge bg-danger">Overdue</span></td>
                                                <td>20 Jun 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/13.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Rajesh Patel</p>
                                                            <p class="mb-0 fs-11 text-muted">rajeshpatel523@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20257654
                                                    </a>
                                                </td>
                                                <td>10 Jul 2024</td>
                                                <td class="fw-semibold">$3,600.89</td>
                                                <td><span class="badge bg-danger">Overdue</span></td>
                                                <td>25 Jul 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>                                            
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/9.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Anjali Mehra</p>
                                                            <p class="mb-0 fs-11 text-muted">anjalimehra9901@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20251789
                                                    </a>
                                                </td>
                                                <td>12 May 2024</td>
                                                <td class="fw-semibold">$860.30</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>25 May 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Vikram Desai</p>
                                                            <p class="mb-0 fs-11 text-muted">vikram.desai1024@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20252345
                                                    </a>
                                                </td>
                                                <td>30 Jun 2024</td>
                                                <td class="fw-semibold">$1,200.50</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>15 Jul 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="invoice-list">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="../assets/images/faces/7.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-medium">Priya Riva</p>
                                                            <p class="mb-0 fs-11 text-muted">priyariva3214@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="fw-medium text-primary">
                                                        #INV20244578
                                                    </a>
                                                </td>
                                                <td>26 Apr 2024</td>
                                                <td class="fw-semibold">$235.52</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>13 May 2024</td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm">
                                                        <i class="ri-printer-line"></i>
                                                    </button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="card-footer border-top-0">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0 float-end">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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

    <!-- Apex Charts JS -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Internal Invoice List JS -->
    <script src="{{asset('assets/js/invoice-list.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @endpush