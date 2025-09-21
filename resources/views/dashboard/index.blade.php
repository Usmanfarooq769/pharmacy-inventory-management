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
        <button class="btn btn-primary btn-wave">
            <i class="ri-share-forward-line me-1 rtl-icon-transform lh-1 d-inline-block"></i> Export
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
                        <h4 class="fw-semibold mb-2">{{ $stats['users'] }}</h4>
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
                        <h4 class="fw-semibold mb-2">{{ $stats['categories'] }}</h4>
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
                        <h4 class="fw-semibold mb-2">{{ $stats['products'] }}</h4>
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
                        <h4 class="fw-semibold mb-2">{{ $stats['customers'] }}</h4>
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
                        <h4 class="fw-semibold mb-2">{{ $stats['productOuts'] }}</h4>
                        <div>
                            <a href="{{ route('product-out.index') }}" class="small-box-footer">
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
                        <h4 class="fw-semibold mb-2">{{ $stats['productIns'] }}</h4>
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
                        <h4 class="fw-semibold mb-2">{{ $stats['suppliers'] }}</h4>
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
                                    <span class="badge bg-success-transparent rounded-pill">
                                        0.25%<i class="ti ti-arrow-up"></i>
                                    </span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1">{{ $totalOrders }}</h4>
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
                                    <span class="badge bg-success-transparent rounded-pill">
                                        5.44%<i class="ti ti-arrow-up"></i>
                                    </span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1">{{ number_format($totalEarnings, 2) }} RS</h4>
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
                                    <span class="badge bg-danger-transparent rounded-pill">
                                        12.34%<i class="ti ti-arrow-down"></i>
                                    </span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1">{{ $productsSold }}</h4>
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
                                    <span class="badge bg-success-transparent rounded-pill">
                                        2.12%<i class="ti ti-arrow-up"></i>
                                    </span>
                                </div>
                                <h4 class="fw-semibold mb-3 lh-1">{{ $profitPercentage }}%</h4>
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
                            <h4 class="mb-1 d-flex align-items-center fw-semibold flex-wrap">
                                {{ number_format($totalProfit, 2) }} Rs
                                <span class="text-success fw-medium fs-12 ms-2">
                                    <i class="ti ti-arrow-up align-middle me-1"></i>0.25%
                                </span>
                            </h4>
                            <span class="fs-14 d-block">Profit Earned</span>
                        </div>
                        <div id="profit-analysis"></div>
                        <div id="profit-analysis1"></div>
                        <div id="profit-analysis2"></div>
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
                        <div class="card-title">Sales Statistics</div>
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
                        <div id="sales-statistics1"></div>
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
                        <div id="revenue-statistics1"></div>
                        <div class="revenue-statistics">
                            <div id="revenue-statistics-dash"></div>
                            <div class="chart-circle-value"></div>
                        </div>
                        <div class="row justify-content-center mt-4 p-3 gx-xl-1 gx-xxl-3">
                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                <span class="d-block text-muted mb-1 fs-12">Today</span>
                                <span class="fw-semibold h6 mb-0 text-center">
                                    {{ number_format($todayRevenue, 2) }} Rs
                                    <i class="ti ti-arrow-up text-success"></i>
                                </span>
                            </div>
                            <div class="col col-xl-4 border-end border-inline-end-dashed">
                                <span class="d-block text-muted mb-1 fs-12">Target</span>
                                <span class="fw-semibold h6 mb-0 text-center">
                                    {{ number_format($target, 2) }}Rs
                                    <i class="ti ti-arrow-down text-danger"></i>
                                </span>
                            </div>
                            <div class="col col-xl-4">
                                <span class="d-block text-muted mb-1 fs-12">This Year</span>
                                <span class="fw-semibold h6 mb-0 text-center">
                                    {{ number_format($yearRevenue, 2) }}Rs
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
                                <span class="fw-semibold h6 mb-2">+{{ number_format($totalIncome, 2) }}Rs</span>
                                <p class="fs-13 mb-0">Total Income Earned</p>
                            </div>
                            <div class="text-end">
                                <span class="d-block {{ $percentageChange >= 0 ? 'text-success' : 'text-danger' }} fw-medium fs-13 mb-2">
                                    <i class="ti {{ $percentageChange >= 0 ? 'ti-arrow-up' : 'ti-arrow-down' }}"></i>
                                    {{ number_format($percentageChange, 2) }}%
                                </span>
                                <span>This Month</span>
                            </div>
                        </div>
                        <div id="income-chart"></div>
                    </div>
                </div>
                
                <!-- Expense Card -->
                <div class="card custom-card expense-card">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center flex-wrap gap-2 lh-1 p-3">
                            <div class="circle-content">
                                <div id="expense"></div>
                                <i class='bx bx-dollar-circle fs-5 text-secondary'></i>
                            </div>
                            <div class="d-flex flex-column flex-fill">
                                <span class="fw-semibold h6 mb-2">-16,345$</span>
                                <p class="fs-13 mb-0">Total Expenditure</p>
                            </div>
                            <div class="text-end">
                                <span class="d-block text-success fw-medium fs-13 mb-2">
                                    <i class="ti ti-arrow-up"></i>4.27%
                                </span>
                                <span>This Month</span>
                            </div>
                        </div>
                        <div id="expenditure-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Dashboard Sections -->
@include('dashboard.browser-statistics')
@include('dashboard.products-summary')

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
$(document).ready(function() {
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
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        // Add AJAX call here to filter data based on date range
        filterDashboardData(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
    });
});

// Function to filter dashboard data based on date range


// Sales Statistics Chart
var salesLabels = @json($labels);
var salesData = @json($sales);

var salesOptions = {
    series: [{
        name: 'Sales',
        data: salesData,
        type: 'area',
    }],
    chart: {
        height: 352,
        type: 'line',
        toolbar: {
            show: false
        },
    },
    labels: salesLabels,
    colors: ["var(--primary-color)"],
    stroke: {
        width: 2.5,
        curve: 'smooth'
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.1,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
    },
    xaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
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

// Revenue Statistics Chart
var revenuePercentage = {{ $percentage }};
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
    labels: ['Revenue'],
    series: [revenuePercentage],
};

var revenueChart = new ApexCharts(document.querySelector("#revenue-statistics-dash"), revenueOptions);
revenueChart.render();

// Export functionality
$('.btn:contains("Export")').on('click', function() {
    // Implement export functionality
    console.log('Export data functionality');
    // You can add actual export logic here
});

// Refresh dashboard data
function refreshDashboard() {
    location.reload();
}

// Auto-refresh dashboard every 5 minutes (optional)
// setInterval(refreshDashboard, 300000);
</script>
@endpush

