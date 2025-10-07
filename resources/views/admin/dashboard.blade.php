@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Dashboard</h1>
        <div>
            <span class="text-muted">{{ date('d M Y, H:i') }}</span>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-number">{{ $totalPortfolios }}</div>
                <div class="stats-label">
                    <i class="bi bi-collection me-1"></i>Total Portfolio
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card success">
                <div class="stats-number">{{ $activePortfolios }}</div>
                <div class="stats-label">
                    <i class="bi bi-check-circle me-1"></i>Portfolio Aktif
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card warning">
                <div class="stats-number">{{ $portfoliosByCategory->count() }}</div>
                <div class="stats-label">
                    <i class="bi bi-tags me-1"></i>Kategori
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card info">
                <div class="stats-number">{{ $totalPortfolios - $activePortfolios }}</div>
                <div class="stats-label">
                    <i class="bi bi-pause-circle me-1"></i>Non-Aktif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Portfolio by Category -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-pie-chart me-2"></i>Portfolio per Kategori
                    </h5>
                </div>
                <div class="card-body">
                    @if ($portfoliosByCategory->count() > 0)
                        @foreach ($portfoliosByCategory as $category)
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="badge bg-primary me-2">{{ ucfirst($category->category) }}</span>
                                </div>
                                <div>
                                    <strong>{{ $category->count }} item</strong>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center text-muted py-4">
                            <i class="bi bi-collection fs-1 mb-3"></i>
                            <p>Belum ada portfolio</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Portfolios -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-clock-history me-2"></i>Portfolio Terbaru
                    </h5>
                    <a href="{{ route('admin.portfolios.index') }}" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body">
                    @if ($recentPortfolios->count() > 0)
                        @foreach ($recentPortfolios as $portfolio)
                            <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                                <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}"
                                    class="portfolio-image me-3">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">{{ $portfolio->title }}</h6>
                                    <small class="text-muted">
                                        <i class="bi bi-tag me-1"></i>{{ ucfirst($portfolio->category) }}
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        <i class="bi bi-calendar me-1"></i>{{ $portfolio->created_at->diffForHumans() }}
                                    </small>
                                </div>
                                <div>
                                    @if ($portfolio->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Non-Aktif</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center text-muted py-4">
                            <i class="bi bi-clock-history fs-1 mb-3"></i>
                            <p>Belum ada portfolio terbaru</p>
                            <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Portfolio
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-lightning me-2"></i>Aksi Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary w-100">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Portfolio
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-info w-100">
                                <i class="bi bi-list me-2"></i>Kelola Portfolio
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('home') }}" target="_blank" class="btn btn-success w-100">
                                <i class="bi bi-globe me-2"></i>Lihat Website
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <button class="btn btn-warning w-100" onclick="window.location.reload()">
                                <i class="bi bi-arrow-clockwise me-2"></i>Refresh Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
