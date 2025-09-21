<div class="row">
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title"> Browser Statistics </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-sm btn-light btn-wave fs-12 text-muted"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled browser-statistics-list">
                    <li>
                        <div
                            class="d-flex align-items-center flex-wrap gap-3 p-2 border border-primary border-dashed border-opacity-25 rounded">
                            <div>
                                <span class="avatar avatar-md bg-primary-transparent">
                                    <i class="ri-chrome-fill fs-4"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="fw-medium">Google</span>
                                <span class="d-block text-muted fs-12">Google,Inc</span>
                            </div>
                            <div class="text-end ms-auto">
                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i
                                            class="ri-circle-fill fs-8 me-1 text-primary"></i>Sales</span> -
                                    14,123</span>
                                <span class="fs-11 fw-medium text-success d-block"><i
                                        class="ti ti-arrow-up"></i>3.26%</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex align-items-center flex-wrap gap-3 p-2 border border-secondary border-dashed border-opacity-25 rounded">
                            <div>
                                <span class="avatar avatar-md bg-secondary-transparent">
                                    <i class="ri-edge-fill fs-4"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="fw-medium">Edge</span>
                                <span class="d-block text-muted fs-12">Microsoft Corp,Inc</span>
                            </div>
                            <div class="text-end ms-auto">
                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i
                                            class="ri-circle-fill fs-8 me-1 text-secondary"></i>Sales</span> -
                                    12,324</span>
                                <span class="fs-11 fw-medium text-success d-block"><i
                                        class="ti ti-arrow-up"></i>15.27%</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex align-items-center flex-wrap gap-3 p-2 border border-success border-dashed border-opacity-25 rounded">
                            <div>
                                <span class="avatar avatar-md bg-success-transparent">
                                    <i class="ri-firefox-fill fs-4"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="fw-medium">Firefox</span>
                                <span class="d-block text-muted fs-12">Mozilla,Inc</span>
                            </div>
                            <div class="text-end ms-auto">
                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i
                                            class="ri-circle-fill fs-8 me-1 text-success"></i>Sales</span> -
                                    7,422</span>
                                <span class="fs-11 fw-medium text-danger d-block"><i
                                        class="ti ti-arrow-down"></i>7.43%</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex align-items-center flex-wrap gap-3 p-2 border border-pink border-dashed border-opacity-25 rounded">
                            <div>
                                <span class="avatar avatar-md bg-pink-transparent">
                                    <i class="ri-safari-fill fs-4"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="fw-medium">Safari</span>
                                <span class="d-block text-muted fs-12">Apple Corp,Inc</span>
                            </div>
                            <div class="text-end ms-auto">
                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i
                                            class="ri-circle-fill fs-8 me-1 text-pink"></i>Sales</span> - 4,833</span>
                                <span class="fs-11 fw-medium text-success d-block"><i
                                        class="ti ti-arrow-up"></i>5.21%</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex align-items-center flex-wrap gap-3 p-2 border border-info border-dashed border-opacity-25 rounded">
                            <div>
                                <span class="avatar avatar-md bg-info-transparent">
                                    <i class="ri-opera-fill fs-4"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="fw-medium">Opera</span>
                                <span class="d-block text-muted fs-12">Opera,Inc</span>
                            </div>
                            <div class="text-end ms-auto">
                                <span class="fw-semibold d-block mb-1"><span class="fw-normal fs-12"><i
                                            class="ri-circle-fill fs-8 me-1 text-info"></i>Sales</span> - 6,986</span>
                                <span class="fs-11 fw-medium text-success d-block"><i
                                        class="ti ti-arrow-up"></i>2.95%</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Top Selling Products
                </div>
                <a href="javascript:void(0);"
                    class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
            </div>
            <div class="card-body">
                <ul class="list-unstyled top-products-list">
                    @foreach($topProducts as $product)
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    @else
                                    <img src="{{ asset('assets/images/default-product.png') }}"
                                        alt="{{ $product->name }}">
                                    @endif
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="d-block fw-semibold">{{ $product->name }}</span>
                                <span class="text-muted fs-12">{{ $product->category }}</span>
                            </div>
                            <div class="text-end">
                                <span class="fw-semibold d-block">{{ $product->total_sales }}</span>
                                <span class="text-muted fs-12 d-block">Sales</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Recent Activity
                </div>
                <a href="javascript:void(0);"
                    class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
            </div>
            <div class="card-body">
                <ul class="list-unstyled recent-activity-list">
                    <li>
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-block fw-semibold mb-1 text-primary">New Lead</span>
                                    <span class="text-muted fs-12">12:24pm</span>
                                </div>
                                <span class="d-block pe-5">John Smith from Acme Corp. submitted a lead for <span
                                        class="fw-semibold">Beekipo.</span></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-block fw-semibold mb-1 text-secondary">Quote Sent</span>
                                    <span class="text-muted fs-12">10:18am</span>
                                </div>
                                <span class="d-block pe-5">Quote <span
                                        class="fw-semibold text-decoration-underline">#12345</span> for Hexno sent to
                                    Sarah Lee this tuesday.</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-block fw-semibold mb-1 text-success">Meeting Scheduled</span>
                                    <span class="text-muted fs-12">11:45am</span>
                                </div>
                                <span class="d-block pe-5">Follow-up meeting with David Kim regarding proposal for <span
                                        class="fw-semibold">Spruko</span> scheduled.</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-block fw-semibold mb-1 text-pink">Invoice Paid</span>
                                    <span class="text-muted fs-12">04:30pm</span>
                                </div>
                                <span class="d-block pe-5">Invoice <span class="fw-semibold">#54321</span> for Meebom
                                    paid by Michael Jackson.</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-block fw-semibold mb-1 text-info">New Orders</span>
                                    <span class="text-muted fs-12">12:23am</span>
                                </div>
                                <span class="d-block pe-5">Highest order value: <span class="fw-semibold">$2,500</span>
                                    for Stellar X</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Country Statistics
                </div>
                <a href="javascript:void(0);"
                    class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">Export</a>
            </div>
            <div class="card-body">
                <ul class="list-unstyled country-stats-list">
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/india_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">India</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-danger me-1"><i
                                                class="ti ti-arrow-down align-middle"></i></span><span>$32,879</span>
                                        (65%)</div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/russia_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">Russia</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-success me-1"><i
                                                class="ti ti-arrow-up align-middle"></i></span><span>$22,710</span>
                                        (55%)</div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 55%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/canada_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">Canada</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-danger me-1"><i
                                                class="ti ti-arrow-down align-middle"></i></span><span>$56,291</span>
                                        (69%)</div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="69"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 69%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/uae_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">UAE</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-success me-1"><i
                                                class="ti ti-arrow-up align-middle"></i></span><span>$34,209</span>
                                        (60%)</div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-pink" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/us_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">United States</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-success me-1"><i
                                                class="ti ti-arrow-up align-middle"></i></span><span>$8,110</span> (86%)
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="86"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info" style="width: 86%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center gap-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-light p-2">
                                    <img src="../assets/images/flags/germany_flag.jpg" alt="" class="rounded-circle">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold d-block">Germany</span>
                                    </div>
                                    <div class="fw-medium"><span class="text-success me-1"><i
                                                class="ti ti-arrow-up align-middle"></i></span><span>$67,357</span>
                                        (73%)</div>
                                </div>
                                <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="73"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 73%"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>