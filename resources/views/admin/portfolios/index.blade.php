@extends('admin.layouts.app')

@section('title', 'Kelola Portfolio')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Kelola Portfolio</h1>
        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Tambah Portfolio
        </a>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">
                <i class="bi bi-collection me-2"></i>Daftar Portfolio
            </h5>
            <span class="badge bg-primary">{{ $portfolios->total() }} Total</span>
        </div>
        <div class="card-body">
            @if ($portfolios->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="15%">Gambar</th>
                                <th width="25%">Judul</th>
                                <th width="15%">Kategori</th>
                                <th width="10%">Status</th>
                                <th width="10%">Urutan</th>
                                <th width="15%">Tanggal</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $index => $portfolio)
                                <tr>
                                    <td>{{ $portfolios->firstItem() + $index }}</td>
                                    <td>
                                        <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}"
                                            class="portfolio-image">
                                    </td>
                                    <td>
                                        <strong>{{ $portfolio->title }}</strong>
                                        @if ($portfolio->description)
                                            <br>
                                            <small class="text-muted">{{ Str::limit($portfolio->description, 50) }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ ucfirst($portfolio->category) }}</span>
                                    </td>
                                    <td>
                                        @if ($portfolio->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary">Non-Aktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $portfolio->sort_order }}</span>
                                    </td>
                                    <td>
                                        <small>{{ $portfolio->created_at->format('d/m/Y') }}</small>
                                        <br>
                                        <small class="text-muted">{{ $portfolio->created_at->diffForHumans() }}</small>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.portfolios.show', $portfolio) }}">
                                                        <i class="bi bi-eye me-2"></i>Lihat
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.portfolios.edit', $portfolio) }}">
                                                        <i class="bi bi-pencil me-2"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.portfolios.destroy', $portfolio) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus portfolio ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="bi bi-trash me-2"></i>Hapus
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div>
                        <p class="text-muted mb-0">
                            Menampilkan {{ $portfolios->firstItem() }} - {{ $portfolios->lastItem() }}
                            dari {{ $portfolios->total() }} portfolio
                        </p>
                    </div>
                    <div>
                        {{ $portfolios->links() }}
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="bi bi-collection fs-1 text-muted mb-3"></i>
                    <h5>Belum ada portfolio</h5>
                    <p class="text-muted">Mulai dengan menambahkan portfolio pertama Anda.</p>
                    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Portfolio
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
