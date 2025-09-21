@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor!</p>
        <span class="text-muted">Track your sales activity, leads and deals here.</span>
    </div>
    <div class="d-flex align-items-center gap-2 flex-wrap">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-text bg-white border">
                    <i class="ri-calendar-line"></i>
                </div>
                <input type="text" class="form-control breadcrumb-input" id="daterange" 
                       placeholder="Search By Date Range">
            </div>
        </div>
        <button class="btn btn-primary btn-wave" id="exportData">
            <i class="ri-share-forward-line me-1 rtl-icon-transform lh-1 d-inline-block"></i> Export
        </button>
        <button class="btn btn-secondary btn-wave" id="refreshDashboard">
            <i class="ri-refresh-line me-1"></i> Refresh
        </button>
    </div>
</div>

<!-- Basic Statistics Row 1 -->
<div class="row">
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card primary">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-primary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-users fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">System Users</p>
                        <h4 class="fw-semibold mb-2" id="users-count">{{ $stats['users'] }}</h4>
                        <div>
                            <a href="/user">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card secondary">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-secondary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-category fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Category</p>
                        <h4 class="fw-semibold mb-2" id="categories-count">{{ $stats['categories'] }}</h4>
                        <div>
                            <a href="{{ route('categories.index') }}" class="fw-medium fs-12">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card success">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-success mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-package fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Product</p>
                        <h4 class="fw-semibold mb-2" id="products-count">{{ $stats['products'] }}</h4>
                        <div>
                            <a href="{{ route('products.index') }}" class="fw-medium fs-12">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card info">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-info mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-users fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Customer</p>
                        <h4 class="fw-semibold mb-2" id="customers-count">{{ $stats['customers'] }}</h4>
                        <div>
                            <a href="{{ route('customers.index') }}" class="fw-medium fs-12">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Secondary Statistics Row 2 -->
<div class="row">
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card secondary">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-secondary mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-arrow-up fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Outgoing</p>
                        <h4 class="fw-semibold mb-2" id="productouts-count">{{ $stats['productOuts'] }}</h4>
                        <div>
                            <a href="{{ route('product_out.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card success">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-success mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-arrow-down fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Purchase</p>
                        <h4 class="fw-semibold mb-2" id="productins-count">{{ $stats['productIns'] }}</h4>
                        <div>
                            <a href="{{ route('productsIn.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div class="card custom-card hrm-main-card info">
            <div class="card-body">
                <div class="d-flex gap-3">
                    <div class="avatar bg-info mb-3 avatar-rounded shadow-sm flex-shrink-0">
                        <i class="ti ti-truck fs-20"></i>
                    </div>
                    <div>
                        <p class="fw-medium text-muted mb-2">Total Supplier</p>
                        <h4 class="fw-semibold mb-2" id="suppliers-count">{{ $stats['suppliers'] }}</h4>
                        <div>
                            <a href="{{ route('suppliers.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3">
        <div id="container"></div>
    </div>
</div>

<!-- Main Dashboard Content -->
<div class="row">
    <div class="col-xxl-9">
        <div class="row">
            <!-- Sales Overview Cards -->
            <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3 flex-wrap">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-primary shadow shadow-primary">
                                    <i class="ti ti-shopping-bag fs-5"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-block">Total Orders</span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1" id="total-orders">{{ $salesMetrics['totalOrders'] }}</h4>
                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">
                                    View All Orders
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3 flex-wrap">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-secondary shadow shadow-secondary">
                                    <i class="ti ti-currency-dollar fs-5"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-block">Total Earnings</span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1" id="total-earnings">{{ number_format($salesMetrics['totalEarnings'], 2) }} RS</h4>
                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">
                                    Complete Revenue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3 flex-wrap">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-success shadow shadow-success">
                                    <i class="ti ti-box fs-5"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-block">Products Sold</span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1" id="products-sold">{{ $salesMetrics['productsSold'] }}</h4>
                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">
                                    All Sales
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3 flex-wrap">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-info shadow shadow-info">
                                    <i class="ti ti-moneybag fs-5"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-block">Profit Percentage</span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1" id="profit-percentage">{{ $salesMetrics['profitPercentage'] }}%</h4>
                                <a href="javascript:void(0);" class="fs-12 text-muted text-decoration-underline">
                                    Total Profit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Profit Analysis Card -->
            <div class="col-xl-3">
                <div class="card custom-card profit-analysis-card">
                    <div class="card-body p-0">
                        <div class="p-4 pb-1">
                            <h4 class="mb-1 d-flex align-items-center fw-semibold flex-wrap" id="total-profit">
                                {{ number_format($salesMetrics['totalProfit'], 2) }} Rs
                                <span class="text-success fw-medium fs-12 ms-2">
                                    <i class="ti ti-arrow-up align-middle me-1"></i>0.25%
                                </span>
                            </h4>
                            <span class="fs-14 d-block">Profit Earned</span>
                        </div>
                        <div id="profit-analysis"></div>
                    </div>
                </div>
                
                <!-- Sales By Traffic Card -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Sales By Traffic</div>
                    </div>
                    <div class="card-body">
                        <div class="progress-stacked progress-sm mb-4 mt-2 gap-1">
                            <div class="progress-bar rounded" role="progressbar" style="width: 45%" 
                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded" role="progressbar" style="width: 25%" 
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%" 
                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <ul class="list-unstyled sales-traffic-list">
                            <li>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <div class="fw-semibold">Organic</div>
                                    <div class="fw-semibold">
                                        <span class="text-success fs-11 fw-medium me-2 d-inline-block">
                                            <i class="ti ti-arrow-up align-middle me-1"></i>0.56%
                                        </span>32,164
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <div class="fw-semibold">Paid</div>
                                    <div class="fw-semibold">
                                        <span class="text-success fs-11 fw-medium me-2 d-inline-block">
                                            <i class="ti ti-arrow-up align-middle me-1"></i>4.23%
                                        </span>16,343
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <div class="fw-semibold">Referral</div>
                                    <div class="fw-semibold">
                                        <span class="text-danger fs-11 fw-medium me-2 d-inline-block">
                                            <i class="ti ti-arrow-down align-middle me-1"></i>6.88%
                                        </span>18,564
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Sales Statistics Chart -->
            <div class="col-xl-9">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Sales, Revenue & Profit Statistics</div>
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
                    <div class="card-body p-0">
                        <div id="sales-statistics-dash" class="p-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Sidebar -->
    <div class="col-xxl-3">
        <div class="row">
            <!-- Revenue Statistics -->
            <div class="col-xl-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Revenue Statistics</div>
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
                    <div class="card-body text-center p-0">
                        <div class="revenue-statistics">
                            <div id="revenue-statistics-dash"></div>
                        </div>
                        <div class="row justify-content-center mt-4 p-3 gx-xl-1 gx-xxl-3">
                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                <span class="d-block text-muted mb-1 fs-12">Today</span>
                                <span class="fw-semibold h6 mb-0 text-center" id="today-revenue">
                                    {{ number_format($revenueData['todayRevenue'], 2) }} Rs
                                    <i class="ti ti-arrow-up text-success"></i>
                                </span>
                            </div>
                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                <span class="d-block text-muted mb-1 fs-12">Target</span>
                                <span class="fw-semibold h6 mb-0 text-center" id="target-revenue">
                                    {{ number_format($revenueData['target'], 2) }}Rs
                                    <i class="ti ti-arrow-down text-danger"></i>
                                </span>
                            </div>
                            <div class="col col-xl-4">
                                <span class="d-block text-muted mb-1 fs-12">This Year</span>
                                <span class="fw-semibold h6 mb-0 text-center" id="year-revenue">
                                    {{ number_format($revenueData['yearRevenue'], 2) }}Rs
                                    <i class="ti ti-arrow-up text-success"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Income Card -->
            <div class="col-xl-12">
                <div class="card custom-card income-card">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center flex-wrap gap-2 lh-1 p-3">
                            <div class="circle-content">
                                <div id="income"></div>
                                <i class='bx bx-wallet fs-5 text-success'></i>
                            </div>
                            <div class="d-flex flex-column flex-fill">
                                <span class="fw-semibold h6 mb-2" id="total-income">+{{ number_format($incomeData['totalIncome'], 2) }}Rs</span>
                                <p class="fs-13 mb-0">Total Income Earned</p>
                            </div>
                            <div class="text-end">
                                <span class="d-block {{ $incomeData['percentageChange'] >= 0 ? 'text-success' : 'text-danger' }} fw-medium fs-13 mb-2" id="income-change">
                                    <i class="ti {{ $incomeData['percentageChange'] >= 0 ? 'ti-arrow-up' : 'ti-arrow-down' }}"></i>
                                    {{ number_format($incomeData['percentageChange'], 2) }}%
                                </span>
                                <span>This Month</span>
                            </div>
                        </div>
                        <div id="income-chart"></div>
                    </div>
                </div>
                
                <!-- Top Products Card -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Top Selling Products</div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled top-products-list" id="top-products-list">
                            @foreach($topProducts as $index => $product)
                            <li class="mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-primary-transparent rounded-pill">{{ $index + 1 }}</span>
                                    </div>
                                    <div class="flex-fill">
                                        <h6 class="mb-1">{{ $product->name }}</h6>
                                        <span class="text-muted fs-12">{{ $product->category }}</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="fw-semibold">{{ $product->total_sales }}</span>
                                        <div class="text-muted fs-11">sold</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
$(document).ready(function() {
    // Chart data from Laravel
    var chartLabels = @json($chartData['labels']);
    var salesData = @json($chartData['sales']);
    var revenueData = @json($chartData['revenue']);
    var profitData = @json($chartData['profit']);
    var revenuePercentage = {{ $revenueData['percentage'] }};

    // Initialize Date Range Picker
    $('#daterange').daterangepicker({
        opens: 'left',
        locale: {
            format: 'MM/DD/YYYY'
        },
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, function(start, end, label) {
        filterDashboardData(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
    });

    // Initialize Charts
    initializeSalesChart();
    initializeRevenueChart();

    // Event handlers
    $('#exportData').on('click', exportData);
    $('#refreshDashboard').on('click', refreshDashboard);
});

// Sales Statistics Chart with multiple series
function initializeSalesChart() {
    var salesOptions = {
        series: [{
            name: 'Profit',
            data: profitData,
            type: 'column',
        }, {
            name: 'Revenue',
            data: revenueData,
            type: 'area',
        }, {
            name: 'Sales',
            data: salesData,
            type: 'area',
        }],
        chart: {
            height: 352,
            type: 'line',
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 6,
                left: 0,
                blur: 4,
                color: ["transparent", "rgb(255, 183, 72)", "rgb(53, 189, 170)"],
                opacity: 0.15
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 3,
                columnWidth: "30%",
            }
        },
        grid: {
            borderColor: "#f1f1f1",
            strokeDashArray: 2,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.1,
                stops: [0, 90, 100],
                colorStops: [
                    [
                        {
                            offset: 0,
                            color: "var(--primary-color)",
                            opacity: 1
                        },
                        {
                            offset: 75,
                            color: "var(--primary-color)",
                            opacity: 1
                        },
                        {
                            offset: 100,
                            color: 'var(--primary-color)',
                            opacity: 1
                        }
                    ],
                    [
                        {
                            offset: 0,
                            color: "rgb(255, 183, 72)",
                            opacity: 0.025
                        },
                        {
                            offset: 75,
                            color: "rgb(255, 183, 72)",
                            opacity: 0.025
                        },
                        {
                            offset: 100,
                            color: 'rgb(255, 183, 72)',
                            opacity: 0.025
                        }
                    ],
                    [
                        {
                            offset: 0,
                            color: 'rgb(53, 189, 170)',
                            opacity: 0.025
                        },
                        {
                            offset: 75,
                            color: 'rgb(53, 189, 170)',
                            opacity: 0.025
                        },
                        {
                            offset: 100,
                            color: 'rgb(53, 189, 170)',
                            opacity: 0.025
                        }
                    ],
                ]
            }
        },
        legend: {
            position: 'top',
            fontSize: '14px',
            fontWeight: 500,
            fontFamily: 'Poppins, sans-serif',
            markers: {
                width: 9,
                height: 9,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                customHTML: undefined,
                onClick: undefined,
                offsetX: 0,
                offsetY: 0
            },
        },
        colors: ["var(--primary-color)", "rgb(255, 183, 72)", "rgb(53, 189, 170)"],
        stroke: {
            width: [0, 2.5, 2.5],
            curve: 'smooth',
        },
        labels: chartLabels,
        tooltip: {
            shared: true,
            y: {
                formatter: function(val, opts) {
                    if (opts.seriesIndex === 0) {
                        return val.toFixed(2) + ' Rs'; // Profit
                    } else if (opts.seriesIndex === 1) {
                        return val.toFixed(2) + ' Rs'; // Revenue
                    } else {
                        return val + ' items'; // Sales quantity
                    }
                }
            }
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        }
    };

    var salesChart = new ApexCharts(document.querySelector("#sales-statistics-dash"), salesOptions);
    salesChart.render();
    window.salesChart = salesChart; // Store reference for updates
}

// Revenue Statistics Radial Chart
function initializeRevenueChart() {
    var revenueOptions = {
        chart: {
            height: 225,
            type: 'radialBar',
            offsetY: -10,
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                hollow: {
                    size: "55%"
                },
                dataLabels: {
                    name: {
                        fontSize: '15px',
                        offsetY: 20,
                        fontWeight: 400
                    },
                    value: {
                        offsetY: -20,
                        fontSize: '22px',
                        fontWeight: 600,
                        formatter: function(val) {
                            return val + "%";
                        }
                    }
                }
            }
        },
        colors: ["var(--primary-color)"],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                type: "horizontal",
                gradientToColors: ["rgb(53, 189, 170)"],
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            dashArray: 4
        },
        labels: ['Progress'],
        series: [revenuePercentage],
    };

    var revenueChart = new ApexCharts(document.querySelector("#revenue-statistics-dash"), revenueOptions);
    revenueChart.render();
    window.revenueChart = revenueChart; // Store reference for updates
}

// Filter dashboard data by date range
function filterDashboardData(startDate, endDate) {
    showLoader();
    
    $.ajax({
        url: '{{ route("dashboard.filter") }}',
        method: 'POST',
        data: {
            start_date: startDate,
            end_date: endDate,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.success) {
                updateDashboardData(response.data);
                showNotification('Data filtered successfully', 'success');
            }
        },
        error: function(xhr, status, error) {
            showNotification('Error filtering data: ' + error, 'error');
        },
        complete: function() {
            hideLoader();
        }
    });
}

// Refresh dashboard data
function refreshDashboard() {
    showLoader();
    
    $.ajax({
        url: '{{ route("dashboard.updates") }}',
        method: 'GET',
        success: function(response) {
            if (response.success) {
                updateDashboardData(response.data);
                showNotification('Dashboard refreshed successfully', 'success');
            }
        },
        error: function(xhr, status, error) {
            showNotification('Error refreshing dashboard: ' + error, 'error');
        },
        complete: function() {
            hideLoader();
        }
    });
}

// Export dashboard data
function exportData() {
    const format = prompt('Export format (json, csv, excel):', 'json');
    if (format && ['json', 'csv', 'excel'].includes(format.toLowerCase())) {
        window.open('{{ route("dashboard.export") }}?format=' + format, '_blank');
    }
}

// Update dashboard data dynamically
function updateDashboardData(data) {
    // Update basic stats
    if (data.stats) {
        $('#users-count').text(data.stats.users);
        $('#categories-count').text(data.stats.categories);
        $('#products-count').text(data.stats.products);
        $('#customers-count').text(data.stats.customers);
        $('#productouts-count').text(data.stats.productOuts);
        $('#productins-count').text(data.stats.productIns);
        $('#suppliers-count').text(data.stats.suppliers);
    }

    // Update sales metrics
    if (data.salesMetrics) {
        $('#total-orders').text(data.salesMetrics.totalOrders);
        $('#total-earnings').text(number_format(data.salesMetrics.totalEarnings, 2) + ' RS');
        $('#products-sold').text(data.salesMetrics.productsSold);
        $('#profit-percentage').text(data.salesMetrics.profitPercentage + '%');
        $('#total-profit').html(number_format(data.salesMetrics.totalProfit, 2) + ' Rs <span class="text-success fw-medium fs-12 ms-2"><i class="ti ti-arrow-up align-middle me-1"></i>0.25%</span>');
    }

    // Update revenue data
    if (data.revenueData) {
        $('#today-revenue').html(number_format(data.revenueData.todayRevenue, 2) + ' Rs <i class="ti ti-arrow-up text-success"></i>');
        $('#target-revenue').html(number_format(data.revenueData.target, 2) + 'Rs <i class="ti ti-arrow-down text-danger"></i>');
        $('#year-revenue').html(number_format(data.revenueData.yearRevenue, 2) + 'Rs <i class="ti ti-arrow-up text-success"></i>');
        
        // Update revenue chart
        if (window.revenueChart) {
            window.revenueChart.updateSeries([data.revenueData.percentage]);
        }
    }

    // Update income data
    if (data.incomeData) {
        $('#total-income').text('+' + number_format(data.incomeData.totalIncome, 2) + 'Rs');
        const changeClass = data.incomeData.percentageChange >= 0 ? 'text-success' : 'text-danger';
        const changeIcon = data.incomeData.percentageChange >= 0 ? 'ti-arrow-up' : 'ti-arrow-down';
        $('#income-change').html('<i class="ti ' + changeIcon + '"></i> ' + number_format(data.incomeData.percentageChange, 2) + '%');
        $('#income-change').removeClass('text-success text-danger').addClass(changeClass);
    }

    // Update charts
    if (data.chartData && window.salesChart) {
        window.salesChart.updateSeries([
            { name: 'Profit', data: data.chartData.profit },
            { name: 'Revenue', data: data.chartData.revenue },
            { name: 'Sales', data: data.chartData.sales }
        ]);
    }

    // Update top products
    if (data.topProducts) {
        updateTopProductsList(data.topProducts);
    }
}

// Update top products list
function updateTopProductsList(products) {
    var html = '';
    products.forEach(function(product, index) {
        html += `
            <li class="mb-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <span class="badge bg-primary-transparent rounded-pill">${index + 1}</span>
                    </div>
                    <div class="flex-fill">
                        <h6 class="mb-1">${product.name}</h6>
                        <span class="text-muted fs-12">${product.category}</span>
                    </div>
                    <div class="text-end">
                        <span class="fw-semibold">${product.total_sales}</span>
                        <div class="text-muted fs-11">sold</div>
                    </div>
                </div>
            </li>
        `;
    });
    $('#top-products-list').html(html);
}

// Utility functions
function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function showLoader() {
    // Add your loader implementation
    console.log('Loading...');
}

function hideLoader() {
    // Hide your loader implementation
    console.log('Loading complete');
}

function showNotification(message, type) {
    // Add your notification implementation
    console.log(type + ': ' + message);
}

// Auto-refresh dashboard every 5 minutes (optional)
setInterval(refreshDashboard, 300000);
</script>
@endpush