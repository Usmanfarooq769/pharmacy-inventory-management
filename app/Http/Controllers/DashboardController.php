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
    public function index(){
           $stats = [
            'users'       => User::count(),
            'categories'  => Category::count(),
            'products'    => Product::count(),
            'customers'   => Customer::count(),
            'productOuts' => ProductOut::count(),
            'productIns'  => ProductIn::count(),
            'suppliers'   => Supplier::count(),
        ];

         // Total Orders
        $totalOrders = ProductOut::count();

        // Products Sold
        $productsSold = ProductOut::sum('qty');

        // Total Earnings (qty * product price)
        $totalEarnings = ProductOut::with('product')
            ->get()
            ->sum(fn($out) => $out->qty * ($out->product->price ?? 0));

        // Purchase cost (assuming qty * price of product_in)
        $purchaseCost = ProductIn::with('product')
            ->get()
            ->sum(fn($in) => $in->qty * ($in->product->price ?? 0));

        // Profit = Earnings - Cost
        $profit = $totalEarnings - $purchaseCost;
        $profitPercentage = $totalEarnings > 0 ? round(($profit / $totalEarnings) * 100, 2) : 0;

         // Sales per month (for chart)
        $salesData = ProductOut::select(
        DB::raw('MONTH(product_outs.date_out) as month'),
        DB::raw('SUM(product_outs.qty) as total_qty'),
        DB::raw('SUM(product_outs.qty * products.price) as revenue')
    )
    ->join('products', 'products.id', '=', 'product_outs.product_id')
    ->groupBy('month')
    ->pluck('total_qty', 'month')
    ->toArray();


        // Prepare chart labels (Jan–Dec) and values
        $labels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $sales = [];
        foreach (range(1, 12) as $m) {
            $sales[] = $salesData[$m] ?? 0;
        }



        $topProducts = ProductOut::select(
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

         // Example calculation: Revenue = SUM(qty * price)
    $todayRevenue = ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
        ->whereDate('product_outs.date_out', today())
        ->sum(DB::raw('product_outs.qty * products.price'));

    $yearRevenue = ProductOut::join('products', 'products.id', '=', 'product_outs.product_id')
        ->whereYear('product_outs.date_out', now()->year)
        ->sum(DB::raw('product_outs.qty * products.price'));

    $target = 5000; // Example fixed target, can also come from DB/config
    $percentage = $target > 0 ? round(($todayRevenue / $target) * 100, 2) : 0;


     // Current month start & end
    $startOfMonth = Carbon::now()->startOfMonth();
    $endOfMonth   = Carbon::now()->endOfMonth();

    // Total income (qty * price)
    $totalIncome = DB::table('product_outs')
        ->join('products', 'products.id', '=', 'product_outs.product_id')
        ->whereBetween('product_outs.date_out', [$startOfMonth, $endOfMonth])
        ->sum(DB::raw('product_outs.qty * products.price'));

    // Percentage change from last month
    $lastMonthStart = Carbon::now()->subMonth()->startOfMonth();
    $lastMonthEnd   = Carbon::now()->subMonth()->endOfMonth();

    $lastMonthIncome = DB::table('product_outs')
        ->join('products', 'products.id', '=', 'product_outs.product_id')
        ->whereBetween('product_outs.date_out', [$lastMonthStart, $lastMonthEnd])
        ->sum(DB::raw('product_outs.qty * products.price'));

    $percentageChange = $lastMonthIncome > 0
        ? (($totalIncome - $lastMonthIncome) / $lastMonthIncome) * 100
        : 0;


       $totalProfit = \DB::table('product_outs')
        ->join('products', 'products.id', '=', 'product_outs.product_id')
        ->selectRaw('SUM(product_outs.qty * products.price) as profit')
        ->value('profit');


        return view('dashboard', compact('stats' , 'totalOrders',
            'totalEarnings',
            'productsSold',
            'profitPercentage','totalProfit',
            'labels', 'topProducts','todayRevenue', 'yearRevenue', 'target', 'percentage', 'totalIncome', 'percentageChange',
            'sales'));
    }
}