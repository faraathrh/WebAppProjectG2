<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ReportController extends Controller
// {
//     //
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    // public function showMonthlyReport()
    // {
    //     $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May'];
    //     $sales = [500, 750, 620, 880, 430];

    //     return view('report', compact('months', 'sales'));
    // }

    public function showReports()
{
    // // Dummy Data - Monthly Sales
    // $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    // $sales = [1500, 2300, 1800, 2000, 2700, 3000];

    // Dummy Data - Best Selling Items
    // $topItems = ['Latte', 'Cappuccino', 'Mocha', 'Americano', 'Espresso'];
    // $topSales = [120, 95, 80, 60, 40]; // quantities sold

    // Dummy Data - Slow Movers
    // $slowItems = ['Herbal Tea', 'Matcha', 'Iced Chocolate'];
    // $slowSales = [10, 8, 5]; // very low sales

    // ✅ 1. Monthly Sales Report
    $monthlyReports = DB::table('orders')
        ->select(DB::raw('DATE_FORMAT(created_at, "%b") as month'), DB::raw('SUM(total_amount) as total'))
        ->groupBy(DB::raw('DATE_FORMAT(created_at, "%b")'))
        ->orderByRaw('MIN(created_at)')
        ->get();

    $months = $monthlyReports->pluck('month')->toArray();
    $sales = $monthlyReports->pluck('total')->toArray();

    // // ✅ 2. Best-Selling Items
    $bestSelling = DB::table('orderitem')
        ->select('menu_id', DB::raw('SUM(quantity) as total_sold'))
        ->groupBy('menu_id')
        ->orderByDesc('total_sold')
        ->limit(5)
        ->get();

    $topItems = [];
    $topSales = [];

    foreach ($bestSelling as $item) {
        $menuName = DB::table('menuitem')
            ->where('menu_id', $item->menu_id)
            ->value('menu_name');

        $topItems[] = $menuName ?? 'Unknown';
        $topSales[] = $item->total_sold;
    }

    // ✅ 3. Slow Movers (least sold items or never sold)
    $slowSelling = DB::table('menuitem')
        ->leftJoin('orderitem', 'menuitem.menu_id', '=', 'orderitem.menu_id')
        ->select('menuitem.menu_name', DB::raw('COALESCE(SUM(orderitem.quantity), 0) as total_sold'))
        ->groupBy('menuitem.menu_id', 'menuitem.menu_name')
        ->orderBy('total_sold', 'asc')
        ->limit(5)
        ->get();

    $slowItems = $slowSelling->pluck('menu_name')->toArray();
    $slowSales = $slowSelling->pluck('total_sold')->toArray();

    return view('report', compact('months', 'sales', 'topItems', 'topSales', 'slowItems', 'slowSales'));
}

}

