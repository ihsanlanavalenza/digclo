<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;

// Home page - Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Portfolio details page
Route::get('/portfolio-details', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');

// Service details page
Route::get('/service-details', [HomeController::class, 'serviceDetails'])->name('service.details');

// Starter page
Route::get('/starter-page', [HomeController::class, 'starterPage'])->name('starter.page');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('portfolios', AdminPortfolioController::class);
});
