@extends('admin.layouts.app')

@section('title', 'Detail Portfolio')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Detail Portfolio</h1>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-warning">
                <i class="bi bi-pencil me-2"></i>Edit
            </a>
            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-eye me-2"></i>{{ $portfolio->title }}
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Portfolio Image -->
                    <div class="text-center mb-4">
                        <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="img-fluid rounded"
                            style="max-height: 400px;">
                    </div>

                    <!-- Portfolio Details -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Judul:</strong>
                            <p>{{ $portfolio->title }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Kategori:</strong>
                            <p><span class="badge bg-secondary">{{ ucfirst($portfolio->category) }}</span></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Status:</strong>
                            <p>
                                @if ($portfolio->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Non-Aktif</span>
                                @endif
                            </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Urutan:</strong>
                            <p><span class="badge bg-info">{{ $portfolio->sort_order }}</span></p>
                        </div>
                    </div>

                    @if ($portfolio->description)
                        <div class="mb-3">
                            <strong>Deskripsi:</strong>
                            <p class="mt-2">{{ $portfolio->description }}</p>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2 mt-4">
                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-warning">
                            <i class="bi bi-pencil me-2"></i>Edit Portfolio
                        </a>
                        <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus portfolio ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash me-2"></i>Hapus Portfolio
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Information Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-info-circle me-2"></i>Informasi
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td><strong>ID:</strong></td>
                            <td>{{ $portfolio->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Nama File:</strong></td>
                            <td>{{ $portfolio->image }}</td>
                        </tr>
                        <tr>
                            <td><strong>Dibuat:</strong></td>
                            <td>{{ $portfolio->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Diupdate:</strong></td>
                            <td>{{ $portfolio->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Selisih:</strong></td>
                            <td>{{ $portfolio->updated_at->diffForHumans() }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-lightning me-2"></i>Aksi Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i>Tambah Portfolio Baru
                        </a>
                        <a href="{{ route('admin.portfolios.index') }}" class="btn btn-info">
                            <i class="bi bi-list me-2"></i>Lihat Semua Portfolio
                        </a>
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-success">
                            <i class="bi bi-globe me-2"></i>Lihat di Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
