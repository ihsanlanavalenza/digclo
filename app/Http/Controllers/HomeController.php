<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Halaman utama / homepage
     */
    public function index()
    {
        $portfolios = Portfolio::active()
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('portfolios'));
    }

    /**
     * Halaman detail portfolio
     */
    public function portfolioDetails()
    {
        return view('portfolio-details');
    }

    /**
     * Halaman detail service
     */
    public function serviceDetails()
    {
        return view('service-details');
    }

    /**
     * Starter page
     */
    public function starterPage()
    {
        return view('starter-page');
    }
}
