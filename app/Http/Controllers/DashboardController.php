<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProductOut;
use App\Models\ProductOutItem;
use App\Models\ProductIn;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Cache dashboard data for 5 minutes to improve performance
        $dashboardData = Cache::remember('dashboard_data', 300, function () {
            return $this->getAllDashboardData();
        });

        return view('dashboard.index', $dashboardData);
    }

    /**
     * Get all dashboard data in optimized queries
     */
    private function getAllDashboardData(): array
    {
        return [
            'stats'              => $this->getBasicStats(),
            'salesMetrics'       => $this->getSalesMetrics(),
            'chartData'          => $this->getChartData(),
            'revenueData'        => $this->getRevenueData(),
            'topProducts'        => $this->getTopProducts(),
            'incomeData'         => $this->getIncomeData(),
        ];
    }

    /**
     * Basic statistics with single queries
     */
    private function getBasicStats(): array
    {
        return [
            'users'       => User::count(),
            'categories'  => Category::count(),
            'products'    => Product::count(),
            'customers'   => Customer::count(),
            'productOuts' => ProductOut::count(),
            'productIns'  => ProductIn::count(),
            'suppliers'   => Supplier::count(),
        ];
    }

    /**
     * Sales metrics with optimized single query
     */
    private function getSalesMetrics(): array
    {
        // First get sales data
        $salesMetrics = DB::selectOne("
            SELECT 
                COUNT(DISTINCT po.id) as total_orders,
                COALESCE(SUM(poi.qty * poi.unit_price), 0) as total_earnings,
                COALESCE(SUM(poi.qty), 0) as products_sold
            FROM product_outs po
            LEFT JOIN product_out_items poi ON po.id = poi.product_out_id
        ");

        // Get total purchase cost separately
        $totalPurchaseCost = DB::selectOne("
            SELECT COALESCE(SUM(pi.qty * pi.price), 0) as total_purchase_cost 
            FROM product_ins pi
        ")->total_purchase_cost;

        $totalEarnings = (float) $salesMetrics->total_earnings;
        $totalProfit = $totalEarnings - $totalPurchaseCost;
        $profitPercentage = $totalEarnings > 0 
            ? round(($totalProfit / $totalEarnings) * 100, 2) 
            : 0;

        return [
            'totalOrders'      => (int) $salesMetrics->total_orders,
            'totalEarnings'    => $totalEarnings,
            'productsSold'     => (int) $salesMetrics->products_sold,
            'totalProfit'      => (float) $totalProfit,
            'profitPercentage' => (float) $profitPercentage,
            'totalPurchaseCost' => (float) $totalPurchaseCost,
        ];
    }

    /**
     * Chart data for sales, revenue, and profit - MySQL ONLY_FULL_GROUP_BY compatible
     */
    private function getChartData(): array
    {
        $currentYear = Carbon::now()->year;
        
        // Get monthly sales and revenue data
        $salesRevenueData = DB::select("
            SELECT 
                MONTH(po.date_out) as month,
                COALESCE(SUM(poi.qty), 0) as sales_quantity,
                COALESCE(SUM(poi.qty * poi.unit_price), 0) as revenue
            FROM product_outs po
            LEFT JOIN product_out_items poi ON po.id = poi.product_out_id
            WHERE YEAR(po.date_out) = ?
            GROUP BY MONTH(po.date_out)
            ORDER BY MONTH(po.date_out)
        ", [$currentYear]);

        // Get monthly purchase costs separately
        $purchaseCostData = DB::select("
            SELECT 
                MONTH(pi.date_in) as month,
                COALESCE(SUM(pi.qty * pi.price), 0) as purchase_cost
            FROM product_ins pi 
            WHERE YEAR(pi.date_in) = ?
            GROUP BY MONTH(pi.date_in)
            ORDER BY MONTH(pi.date_in)
        ", [$currentYear]);

        // Convert purchase costs to associative array
        $purchaseCosts = [];
        foreach ($purchaseCostData as $data) {
            $purchaseCosts[$data->month] = (float) $data->purchase_cost;
        }

        // Initialize arrays for 12 months
        $salesData = array_fill(0, 12, 0);
        $revenueData = array_fill(0, 12, 0);
        $profitData = array_fill(0, 12, 0);

        foreach ($salesRevenueData as $data) {
            $monthIndex = $data->month - 1; // Convert to 0-based index
            $salesData[$monthIndex] = (int) $data->sales_quantity;
            $revenueData[$monthIndex] = (float) $data->revenue;
            
            // Calculate profit: revenue - purchase cost for that month
            $purchaseCost = $purchaseCosts[$data->month] ?? 0;
            $profitData[$monthIndex] = (float) ($data->revenue - $purchaseCost);
        }

        return [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'sales' => $salesData,
            'revenue' => $revenueData,
            'profit' => $profitData,
        ];
    }

    /**
     * Revenue-related data
     */
    private function getRevenueData(): array
    {
        $today = Carbon::today()->format('Y-m-d');
        $startOfYear = Carbon::now()->startOfYear()->format('Y-m-d');
        $endOfYear = Carbon::now()->endOfYear()->format('Y-m-d');
        $target = 50000.00; // You can store this in settings

        $revenueMetrics = DB::selectOne("
            SELECT 
                COALESCE(SUM(CASE WHEN DATE(po.date_out) = ? THEN poi.qty * poi.unit_price END), 0) as today_revenue,
                COALESCE(SUM(CASE WHEN po.date_out BETWEEN ? AND ? THEN poi.qty * poi.unit_price END), 0) as year_revenue
            FROM product_outs po
            LEFT JOIN product_out_items poi ON po.id = poi.product_out_id
        ", [$today, $startOfYear, $endOfYear]);

        $todayRevenue = (float) $revenueMetrics->today_revenue;
        $yearRevenue = (float) $revenueMetrics->year_revenue;
        $percentage = $target > 0 ? round(($todayRevenue / $target) * 100, 2) : 0;

        return [
            'todayRevenue' => $todayRevenue,
            'yearRevenue' => $yearRevenue,
            'target' => $target,
            'percentage' => $percentage,
        ];
    }

    /**
     * Top 5 products by sales quantity
     */
    private function getTopProducts()
    {
        return DB::select("
            SELECT 
                p.id,
                p.nama as name,
                c.name as category,
                p.image,
                COALESCE(SUM(poi.qty), 0) as total_sales,
                COALESCE(SUM(poi.qty * poi.unit_price), 0) as total_revenue
            FROM products p
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN product_out_items poi ON p.id = poi.product_id
            GROUP BY p.id, p.nama, c.name, p.image
            HAVING total_sales > 0
            ORDER BY total_sales DESC
            LIMIT 5
        ");
    }

    /**
     * Income data and comparison
     */
    private function getIncomeData(): array
    {
        $currentMonthStart = Carbon::now()->startOfMonth()->format('Y-m-d');
        $currentMonthEnd = Carbon::now()->endOfMonth()->format('Y-m-d');
        $lastMonthStart = Carbon::now()->subMonth()->startOfMonth()->format('Y-m-d');
        $lastMonthEnd = Carbon::now()->subMonth()->endOfMonth()->format('Y-m-d');

        $incomeMetrics = DB::selectOne("
            SELECT 
                COALESCE(SUM(CASE WHEN po.date_out BETWEEN ? AND ? THEN poi.qty * poi.unit_price END), 0) as current_month_income,
                COALESCE(SUM(CASE WHEN po.date_out BETWEEN ? AND ? THEN poi.qty * poi.unit_price END), 0) as last_month_income
            FROM product_outs po
            LEFT JOIN product_out_items poi ON po.id = poi.product_out_id
        ", [$currentMonthStart, $currentMonthEnd, $lastMonthStart, $lastMonthEnd]);

        $currentMonthIncome = (float) $incomeMetrics->current_month_income;
        $lastMonthIncome = (float) $incomeMetrics->last_month_income;

        $percentageChange = 0;
        if ($lastMonthIncome > 0) {
            $percentageChange = round((($currentMonthIncome - $lastMonthIncome) / $lastMonthIncome) * 100, 2);
        } elseif ($currentMonthIncome > 0) {
            $percentageChange = 100;
        }

        return [
            'totalIncome' => $currentMonthIncome,
            'percentageChange' => $percentageChange,
        ];
    }

    /**
     * AJAX endpoint for filtering data by date range
     */
    public function filterByDateRange(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        if (!$startDate || !$endDate) {
            return response()->json(['error' => 'Start date and end date are required'], 400);
        }

        $filteredData = DB::select("
            SELECT 
                DATE(po.date_out) as date,
                COALESCE(SUM(poi.qty * poi.unit_price), 0) as revenue,
                COALESCE(SUM(poi.qty), 0) as quantity,
                COUNT(DISTINCT po.id) as orders
            FROM product_outs po
            LEFT JOIN product_out_items poi ON po.id = poi.product_out_id
            WHERE po.date_out BETWEEN ? AND ?
            GROUP BY DATE(po.date_out)
            ORDER BY DATE(po.date_out)
        ", [$startDate, $endDate]);

        $summary = [
            'total_revenue' => array_sum(array_column($filteredData, 'revenue')),
            'total_quantity' => array_sum(array_column($filteredData, 'quantity')),
            'total_orders' => array_sum(array_column($filteredData, 'orders')),
        ];

        return response()->json([
            'success' => true,
            'data' => $filteredData,
            'summary' => $summary
        ]);
    }

    /**
     * Get real-time dashboard updates
     */
    public function getDashboardUpdates()
    {
        // Clear cache to get fresh data
        Cache::forget('dashboard_data');
        
        $data = $this->getAllDashboardData();
        
        return response()->json([
            'success' => true,
            'data' => $data,
            'timestamp' => now()->toISOString(),
        ]);
    }

    /**
     * Export dashboard data
     */
    public function exportData(Request $request)
    {
        $format = $request->input('format', 'json');
        $data = $this->getAllDashboardData();

        switch ($format) {
            case 'csv':
                return $this->exportToCsv($data);
            case 'excel':
                return $this->exportToExcel($data);
            default:
                return response()->json($data);
        }
    }

    /**
     * Helper method to export data to CSV
     */
    private function exportToCsv($data)
    {
        $filename = 'dashboard_data_' . date('Y-m-d_H-i-s') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($data) {
            $file = fopen('php://output', 'w');
            
            // Write headers
            fputcsv($file, ['Metric', 'Value']);
            
            // Write basic stats
            foreach ($data['stats'] as $key => $value) {
                fputcsv($file, [ucfirst(str_replace('_', ' ', $key)), $value]);
            }
            
            // Write sales metrics
            foreach ($data['salesMetrics'] as $key => $value) {
                fputcsv($file, [ucfirst(str_replace('_', ' ', $key)), $value]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    private function exportToExcel($data)
    {
        // Implement Excel export if needed
        return response()->json($data);
    }
}