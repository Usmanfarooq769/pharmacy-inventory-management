<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProductOut;
use App\Models\ProductIn;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'stats' => $this->getBasicStats(),
            'totalOrders' => $this->getTotalOrders(),
            'totalEarnings' => $this->getTotalEarnings(),
            'productsSold' => $this->getProductsSold(),
            'profitPercentage' => $this->getProfitPercentage(),
            'totalProfit' => $this->getTotalProfit(),
            'labels' => $this->getChartLabels(),
            'sales' => $this->getSalesData(),
            'topProducts' => $this->getTopProducts(),
            'todayRevenue' => $this->getTodayRevenue(),
            'yearRevenue' => $this->getYearRevenue(),
            'target' => $this->getTarget(),
            'percentage' => $this->getRevenuePercentage(),
            'totalIncome' => $this->getTotalIncome(),
            'percentageChange' => $this->getIncomePercentageChange(),
        ]);
    }

    /**
     * Get basic statistics for dashboard cards
     */
    private function getBasicStats(): array
    {
        return [
            'users' => User::count(),
            'categories' => Category::count(),
            'products' => Product::count(),
            'customers' => Customer::count(),
            'productOuts' => ProductOut::count(),
            'productIns' => ProductIn::count(),
            'suppliers' => Supplier::count(),
        ];
    }

    /**
     * Get total number of orders
     */
    private function getTotalOrders(): int
    {
        return ProductOut::count();
    }

    /**
     * Get total earnings from all sales
     */
    private function getTotalEarnings(): float
    {
        return (float) ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->sum(DB::raw('product_outs.qty * products.price'));
    }

    /**
     * Get total quantity of products sold
     */
    private function getProductsSold(): int
    {
        return ProductOut::sum('qty');
    }

    /**
     * Get total purchase cost
     */
    private function getTotalPurchaseCost(): float
    {
        return (float) ProductIn::join('products', 'products.id', '=', 'product_ins.product_id')
            ->sum(DB::raw('product_ins.qty * products.price'));
    }

    /**
     * Get total profit
     */
    private function getTotalProfit(): float
    {
        return $this->getTotalEarnings() - $this->getTotalPurchaseCost();
    }

    /**
     * Get profit percentage
     */
    private function getProfitPercentage(): float
    {
        $totalEarnings = $this->getTotalEarnings();
        if ($totalEarnings <= 0) {
            return 0;
        }

        $profit = $this->getTotalProfit();
        return round(($profit / $totalEarnings) * 100, 2);
    }

    /**
     * Get chart labels for months
     */
    private function getChartLabels(): array
    {
        return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    }

    /**
     * Get sales data for chart (monthly)
     */
    private function getSalesData(): array
    {
        $salesByMonth = ProductOut::select(
            DB::raw('MONTH(date_out) as month'),
            DB::raw('SUM(qty) as total_qty')
        )
        ->whereYear('date_out', Carbon::now()->year)
        ->groupBy('month')
        ->pluck('total_qty', 'month')
        ->toArray();

        // Fill missing months with 0
        $sales = [];
        for ($month = 1; $month <= 12; $month++) {
            $sales[] = (int) ($salesByMonth[$month] ?? 0);
        }

        return $sales;
    }

    /**
     * Get top 5 selling products
     */
    private function getTopProducts()
    {
        return ProductOut::select(
            'products.id',
            'products.nama as name',
            'categories.name as category',
            'products.image',
            DB::raw('SUM(product_outs.qty) as total_sales')
        )
        ->join('products', 'products.id', '=', 'product_outs.product_id')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->groupBy('products.id', 'products.nama', 'categories.name', 'products.image')
        ->orderByDesc('total_sales')
        ->limit(5)
        ->get();
    }

    /**
     * Get today's revenue
     */
    private function getTodayRevenue(): float
    {
        return (float) ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->whereDate('product_outs.date_out', Carbon::today())
            ->sum(DB::raw('product_outs.qty * products.price'));
    }

    /**
     * Get current year's revenue
     */
    private function getYearRevenue(): float
    {
        return (float) ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->whereYear('product_outs.date_out', Carbon::now()->year)
            ->sum(DB::raw('product_outs.qty * products.price'));
    }

    /**
     * Get revenue target (this could come from settings/config)
     */
    private function getTarget(): float
    {
        return 50000.00; 
    }

    /**
     * Get revenue percentage against target
     */
    private function getRevenuePercentage(): float
    {
        $todayRevenue = $this->getTodayRevenue();
        $target = $this->getTarget();
        
        return $target > 0 ? round(($todayRevenue / $target) * 100, 2) : 0;
    }

    /**
     * Get current month's total income
     */
    private function getTotalIncome(): float
    {
        return (float) ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->whereBetween('product_outs.date_out', [
                Carbon::now()->startOfMonth(),
                Carbon::now()->endOfMonth()
            ])
            ->sum(DB::raw('product_outs.qty * products.price'));
    }

    /**
     * Get income percentage change from last month
     */
    private function getIncomePercentageChange(): float
    {
        $currentMonthIncome = $this->getTotalIncome();
        
        $lastMonthIncome = (float) ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->whereBetween('product_outs.date_out', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])
            ->sum(DB::raw('product_outs.qty * products.price'));

        if ($lastMonthIncome <= 0) {
            return $currentMonthIncome > 0 ? 100 : 0;
        }

        return round((($currentMonthIncome - $lastMonthIncome) / $lastMonthIncome) * 100, 2);
    }

    /**
     * Get revenue data for specific date range
     */
    public function getRevenueByDateRange(Request $request)
    {
        $startDate = $request->input('start_date', Carbon::now()->startOfMonth());
        $endDate = $request->input('end_date', Carbon::now()->endOfMonth());

        return ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
            ->whereBetween('product_outs.date_out', [$startDate, $endDate])
            ->select(
                DB::raw('DATE(product_outs.date_out) as date'),
                DB::raw('SUM(product_outs.qty * products.price) as revenue'),
                DB::raw('SUM(product_outs.qty) as quantity')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    }

    /**
     * Get sales summary for specific period
     */
    public function getSalesSummary(string $period = 'month')
    {
        $query = ProductOut::join('products', 'products.id', '=', 'product_outs.product_id');

        switch ($period) {
            case 'today':
                $query->whereDate('product_outs.date_out', Carbon::today());
                break;
            case 'week':
                $query->whereBetween('product_outs.date_out', [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ]);
                break;
            case 'month':
                $query->whereBetween('product_outs.date_out', [
                    Carbon::now()->startOfMonth(),
                    Carbon::now()->endOfMonth()
                ]);
                break;
            case 'year':
                $query->whereYear('product_outs.date_out', Carbon::now()->year);
                break;
        }

        return [
            'total_revenue' => $query->sum(DB::raw('product_outs.qty * products.price')),
            'total_quantity' => $query->sum('product_outs.qty'),
            'total_orders' => $query->count(),
            'average_order_value' => $query->count() > 0 
                ? $query->sum(DB::raw('product_outs.qty * products.price')) / $query->count() 
                : 0
        ];
    }
}