<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPortfolios = Portfolio::count();
        $activePortfolios = Portfolio::active()->count();
        $portfoliosByCategory = Portfolio::selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->get();

        $recentPortfolios = Portfolio::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPortfolios',
            'activePortfolios',
            'portfoliosByCategory',
            'recentPortfolios'
        ));
    }
}
