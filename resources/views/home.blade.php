@extends('layouts.app')

@section('title', 'Digclo: Digital Clothing Convection – Inovasi Konveksi di Era Digital')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-up" data-aos-delay="100">
                    <div class="subtitle">
                        <span>DIGITAL CLOTHING CONVECTION</span>
                    </div>

                    <h1 class="title">
                        <span class="highlight">Digclo</span> — Inovasi Konveksi di Era Digital
                    </h1>

                    <div class="description">
                        <p>Produksi pakaian custom untuk brand, komunitas, dan bisnis Anda jadi lebih cepat, transparan, dan
                            terintegrasi online. Dari kaos, hoodie, jersey, sablon hingga bordir — semua dalam satu alur
                            yang rapi.</p>
                    </div>

                    <div class="hero-buttons">
                        <a href="#services" class="primary-btn">
                            Layanan Kami
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#portfolio" class="secondary-btn">
                            Lihat Portofolio
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 hero-visual" data-aos="fade-up" data-aos-delay="200">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/img/poster.jpg') }}" alt="Produksi Pakaian Digital" class="main-image">

                        <div class="floating-element top-left">
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <div class="floating-element bottom-right">
                            <i class="bi bi-circle-fill"></i>
                        </div>

                        <div class="experience-badge">
                            <span class="years">10+</span>
                            <span class="text">Tahun Pengalaman</span>
                        </div>
                    </div>

                    <div class="client-counter">
                        <div class="counter-number">
                            <span>750+</span>
                        </div>
                        <div class="counter-text">
                            <span>Klien Puas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Tentang Digclo</span>
            <h2>Tentang Digclo</h2>
            <p>Konveksi berbasis digital yang menggabungkan kecepatan, transparansi, dan kontrol kualitas terpadu.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-image-wrapper position-relative">
                        <img src="{{ asset('assets/img/profil.png') }}" alt="Tentang Digclo"
                            class="img-fluid rounded-4 about-main-image">
                        <div class="mission-card">
                            <div class="mission-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div class="mission-content">
                                <h4>Misi Kami</h4>
                                <p>Menghadirkan ekosistem produksi pakaian custom yang cepat, transparan, dan terintegrasi
                                    digital.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content ps-lg-4">
                        <div class="tag-badge" data-aos="fade-up" data-aos-delay="100">PROFIL PERUSAHAAN</div>
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="200">Perjalanan kami membangun produksi
                            pakaian yang lebih cerdas</h2>

                        <div class="about-info" data-aos="fade-up" data-aos-delay="300">
                            <p>Digclo adalah konveksi digital yang membantu brand, komunitas, institusi, dan bisnis
                                memproduksi pakaian sesuai identitas mereka. Sistem terintegrasi kami memudahkan pelacakan
                                dari desain, material, proses sablon/bordir hingga QC & pengiriman.</p>
                            <p>Dengan tim terlatih, alur terstruktur, dan kontrol kualitas berlapis, setiap pesanan dikelola
                                presisi untuk konsistensi hasil dan ketepatan waktu.</p>
                        </div>

                        <h4 class="values-title mt-4 mb-3" data-aos="fade-up" data-aos-delay="400">Nilai Inti</h4>

                        <div class="values-list" data-aos="fade-up" data-aos-delay="500">
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span
                                    class="value-text">Transparansi Proses</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span class="value-text">Kualitas
                                    Konsisten</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span class="value-text">Tepat
                                    Waktu</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span class="value-text">Fleksibel
                                    & Custom</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span
                                    class="value-text">Kolaboratif</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span class="value-text">Kontrol
                                    Digital</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span
                                    class="value-text">Skalabel</span>
                            </div>
                            <div class="value-item">
                                <div class="value-icon"><i class="bi bi-check2"></i></div><span
                                    class="value-text">Inovatif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="stats-wrapper">
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="150">
                            <div class="icon-wrapper"><i class="bi bi-emoji-smile"></i></div>
                            <span data-purecounter-start="0" data-purecounter-end="750" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Klien Puas</p>
                        </div>
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-wrapper"><i class="bi bi-box-seam"></i></div>
                            <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proyek / Batch</p>
                        </div>
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="icon-wrapper"><i class="bi bi-arrow-repeat"></i></div>
                            <span data-purecounter-start="0" data-purecounter-end="92" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>% Repeat Order</p>
                        </div>
                        <div class="stats-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-wrapper"><i class="bi bi-hourglass-split"></i></div>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Tahun Pengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Layanan</span>
            <h2>Layanan</h2>
            <p>Solusi produksi pakaian terintegrasi untuk brand dan komunitas.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="services-header">
                <div class="row">
                    <div class="col-lg-9" data-aos="fade-right">
                        <div class="services-intro">
                            <div class="services-tag">Layanan Utama</div>
                            <h2>Produksi Custom Cepat, Transparan, dan Terkontrol</h2>
                            <p>Kami menangani seluruh rantai produksi: desain, material, sablon, bordir, finishing hingga
                                packaging. Progress dapat dipantau dan disesuaikan.</p>
                            <p>Sistem terstruktur membantu menjaga konsistensi kualitas sekaligus fleksibel terhadap
                                kebutuhan khusus (event, corporate, komunitas, kampanye).</p>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-left">
                        <div class="services-stats">
                            <div class="stat-item">
                                <span class="stat-number">5K+</span>
                                <span class="stat-label">Item / Bulan</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">98%</span>
                                <span class="stat-label">Kepuasan</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">92%</span>
                                <span class="stat-label">Repeat Order</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon" aria-label="Ikon Kaos" title="Produksi Kaos & Polo">
                                <i class="bi bi-bag-check" aria-hidden="true"></i>
                            </div>
                            <h3>Produksi Kaos & Polo</h3>
                            <p>Batch kecil hingga massal dengan pilihan bahan (combed, poly, dry fit). Ukuran dan warna bisa
                                disesuaikan brand guideline.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon"><i class="bi bi-cloud-rain-heavy"></i></div>
                            <h3>Hoodie & Sweater</h3>
                            <p>Kustom warna, sablon plastisol/DTF, bordir, patch dan aksesoris tambahan untuk tampilan
                                premium & tahan lama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon"><i class="bi bi-collection"></i></div>
                            <h3>Jersey & Seragam</h3>
                            <p>Desain full print & personalisasi nama/nomor. Cocok untuk tim olahraga, komunitas, perusahaan
                                & event khusus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon"><i class="bi bi-brush"></i></div>
                            <h3>Sablon & Bordir</h3>
                            <p>Multi-teknik: plastisol, discharge, DTF, DTG, bordir komputer, patch woven/embroidery untuk
                                hasil detail dan tahan lama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon"><i class="bi bi-vector-pen"></i></div>
                            <h3>Desain & Pra-Produksi</h3>
                            <p>Konsultasi desain, mockup digital, validasi ukuran & material sebelum produksi guna
                                meminimalisir revisi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-icon"><i class="bi bi-box"></i></div>
                            <h3>Packaging & QC</h3>
                            <p>Quality check berlapis, lipat & pack rapi, label hangtag / barcode opsional, siap dikirim
                                atau distribusi internal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Keunggulan</span>
            <h2>Keunggulan Sistem Digclo</h2>
            <p>Kontrol produksi terpusat untuk efisiensi dan kualitas konsisten.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="features-overview">
                <div class="main-heading" data-aos="fade-right" data-aos-delay="200">
                    <h2>Framework Produksi Terintegrasi</h2>
                    <p>Alur kerja digital meminimalkan human error dan mempercepat decision making di tiap tahap.</p>
                    <p>Integrasi desain, order, dan status produksi memberi visibilitas menyeluruh & akurasi jadwal.</p>
                    <p>Analitik batch membantu evaluasi kapasitas, repeat order, dan optimasi lead time.</p>
                    <p>Skalabel untuk mendukung peningkatan volume tanpa mengorbankan kualitas.</p>
                    <div class="achievement-badges">
                        <div class="achievement">
                            <span class="achievement-icon"><i class="bi bi-repeat"></i></span>
                            <div class="achievement-info">
                                <span class="achievement-value">92%</span>
                                <span class="achievement-label">Repeat Order</span>
                            </div>
                        </div>
                        <div class="achievement">
                            <span class="achievement-icon"><i class="bi bi-speedometer2"></i></span>
                            <div class="achievement-info">
                                <span class="achievement-value">7–14 Hari</span>
                                <span class="achievement-label">Rata Lead Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features-card-wrapper" data-aos="fade-left" data-aos-delay="300">
                    <div class="features-row">
                        <div class="feature-card feature-primary" data-aos="zoom-in" data-aos-delay="200">
                            <div class="feature-icon"><i class="bi bi-kanban"></i></div>
                            <div class="feature-details">
                                <h3>Pelacakan Produksi Real-Time</h3>
                                <p>Status tiap tahap (cutting, sablon, bordir, QC) dalam satu dashboard.</p>
                                <div class="feature-status active">
                                    <span class="status-indicator"></span>
                                    <span class="status-text">Aktif</span>
                                </div>
                            </div>
                        </div>

                        <div class="feature-card" data-aos="zoom-in" data-aos-delay="300">
                            <div class="feature-icon"><i class="bi bi-layers"></i></div>
                            <div class="feature-details">
                                <h3>Manajemen Pesanan Terpusat</h3>
                                <p>Semua batch & revisi terdokumentasi rapi dan mudah diakses.</p>
                                <div class="feature-status active">
                                    <span class="status-indicator"></span>
                                    <span class="status-text">Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="features-row">
                        <div class="feature-card" data-aos="zoom-in" data-aos-delay="400">
                            <div class="feature-icon"><i class="bi bi-pencil-square"></i></div>
                            <div class="feature-details">
                                <h3>Integrasi Desain Digital</h3>
                                <p>Mockup & persetujuan desain langsung terhubung ke produksi.</p>
                                <div class="feature-status pending">
                                    <span class="status-indicator"></span>
                                    <span class="status-text">Dalam Pengembangan</span>
                                </div>
                            </div>
                        </div>

                        <div class="feature-card" data-aos="zoom-in" data-aos-delay="500">
                            <div class="feature-icon"><i class="bi bi-graph-up"></i></div>
                            <div class="feature-details">
                                <h3>Analitik & Laporan Batch</h3>
                                <p>Data performa untuk evaluasi kapasitas & kualitas.</p>
                                <div class="feature-status scheduled">
                                    <span class="status-indicator"></span>
                                    <span class="status-text">Terjadwal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="additional-features" data-aos="fade-up" data-aos-delay="100">
                <div class="row gx-4 gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="additional-feature-card">
                            <div class="icon-container"><i class="bi bi-shield-check"></i></div>
                            <h4>Quality Control Berlapis</h4>
                            <p>Pemeriksaan material, proses, dan finishing untuk meminimalkan cacat.</p>
                            <div class="feature-tag active"><i class="bi bi-check-circle"></i> Aktif</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="additional-feature-card">
                            <div class="icon-container"><i class="bi bi-alarm"></i></div>
                            <h4>Estimasi Waktu Otomatis</h4>
                            <p>Perhitungan otomatis lead time berdasarkan kapasitas & antrian.</p>
                            <div class="feature-tag pending"><i class="bi bi-arrow-repeat"></i> Dalam Proses</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="additional-feature-card">
                            <div class="icon-container"><i class="bi bi-bell"></i></div>
                            <h4>Notifikasi Status Klien</h4>
                            <p>Pemberitahuan tahap penting via email / dashboard.</p>
                            <div class="feature-tag scheduled"><i class="bi bi-calendar-check"></i> Direncanakan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Features Section -->

    <!-- Features Alt Section -->
    <section id="features-alt" class="features-alt section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs flex-column" role="tablist" data-aos="fade-right" data-aos-delay="200">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-alt-tab-1"
                                role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><i class="bi bi-cart-check"></i></div>
                                    <div class="ms-3">
                                        <h4>Alur Pemesanan</h4>
                                        <p>Brief & konfirmasi</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-2"
                                role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><i class="bi bi-palette"></i></div>
                                    <div class="ms-3">
                                        <h4>Desain & Validasi</h4>
                                        <p>Mockup & approval</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-3"
                                role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><i class="bi bi-gear"></i></div>
                                    <div class="ms-3">
                                        <h4>Produksi & QC</h4>
                                        <p>Eksekusi & kontrol</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-4"
                                role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><i class="bi bi-bell"></i></div>
                                    <div class="ms-3">
                                        <h4>Pelacakan & Notifikasi</h4>
                                        <p>Status real-time</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-alt-tab-5"
                                role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><i class="bi bi-truck"></i></div>
                                    <div class="ms-3">
                                        <h4>Distribusi & Evaluasi</h4>
                                        <p>Pengiriman & laporan</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade active show" id="features-alt-tab-1" role="tabpanel">
                            <div class="content-box">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h3>Mulai Dengan Brief Jelas</h3>
                                        <p>Kumpulkan kebutuhan: jenis produk, jumlah, teknik, deadline. Kami bantu validasi
                                            kelayakan.</p>
                                        <p class="highlight">Kami buatkan estimasi & timeline awal untuk persetujuan.</p>
                                        <ul class="features-list">
                                            <li><i class="bi bi-check2-circle"></i><span>Form kebutuhan / konsultasi</span>
                                            </li>
                                            <li><i class="bi bi-check2-circle"></i><span>Estimasi & penawaran</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Konfirmasi & DP</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Masuk antrian produksi</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/img/digclo-brief.jpg') }}" alt="Alur Pemesanan"
                                                class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="features-alt-tab-2" role="tabpanel">
                            <div class="content-box">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h3>Desain & Validasi Teknis</h3>
                                        <p>Mockup digital & spesifikasi ukuran/material disajikan untuk approval.</p>
                                        <p class="highlight">Revisi cepat memastikan hasil akhir sesuai ekspektasi.</p>
                                        <ul class="features-list">
                                            <li><i class="bi bi-check2-circle"></i><span>Mockup digital</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Revisi minor</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Lock desain</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Siap produksi</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/img/desain-visual.png') }}" alt="Desain Validasi"
                                                class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="features-alt-tab-3" role="tabpanel">
                            <div class="content-box">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h3>Produksi & Quality Control</h3>
                                        <p>Material diproses: cutting, sablon/bordir, assembling. QC tiap tahap.</p>
                                        <p class="highlight">Cacat disaring sebelum finishing & packing.</p>
                                        <ul class="features-list">
                                            <li><i class="bi bi-check2-circle"></i><span>Cutting & printing</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>QC proses</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Finishing</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Final QC + pack</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/img/misc/misc-square-3.webp') }}" alt="Produksi QC"
                                                class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="features-alt-tab-4" role="tabpanel">
                            <div class="content-box">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h3>Pelacakan & Notifikasi</h3>
                                        <p>Status utama dikirim agar klien selalu tahu progres.</p>
                                        <p class="highlight">Minim komunikasi berulang & miskom.</p>
                                        <ul class="features-list">
                                            <li><i class="bi bi-check2-circle"></i><span>Update milestone</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Estimasi realtime</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Notifikasi perubahan</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Log historis</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/img/misc/misc-square-5.webp') }}" alt="Pelacakan"
                                                class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="features-alt-tab-5" role="tabpanel">
                            <div class="content-box">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <h3>Distribusi & Evaluasi</h3>
                                        <p>Pengiriman / distribusi internal dengan dokumentasi & laporan batch.</p>
                                        <p class="highlight">Data performa membantu perencanaan produksi berikutnya.</p>
                                        <ul class="features-list">
                                            <li><i class="bi bi-check2-circle"></i><span>Dokumentasi akhir</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Pengiriman</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Laporan batch</span></li>
                                            <li><i class="bi bi-check2-circle"></i><span>Evaluasi</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="image-box">
                                            <img src="{{ asset('assets/img/misc/misc-square-3.webp') }}" alt="Distribusi"
                                                class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Features Alt Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="cta-wrapper">
                <div class="cta-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="cta-content p-5" data-aos="fade-right" data-aos-delay="200">
                            <span class="badge-custom" data-aos="zoom-in" data-aos-delay="300">Mulai Sekarang</span>
                            <h2 class="mt-4 mb-4">Siap Produksi Pakaian Custom Profesional?</h2>
                            <p class="mb-4">Kirim konsep atau desain Anda. Kami bantu pilih material, teknik cetak,
                                hingga finishing & packaging.</p>
                            <div class="row benefits-row mb-5">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="benefit-item">
                                        <div class="icon-box"><i class="bi bi-lightning-charge-fill"></i></div>
                                        <div class="benefit-content">
                                            <h5>Respons Cepat</h5>
                                            <p>Konsultasi awal & estimasi dalam 1×24 jam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="benefit-item">
                                        <div class="icon-box"><i class="bi bi-diagram-3"></i></div>
                                        <div class="benefit-content">
                                            <h5>Proses Terstruktur</h5>
                                            <p>Status terdokumentasi rapi di tiap tahap.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="action-buttons">
                                <a href="#contact" class="btn btn-primary" data-aos="fade-up"
                                    data-aos-delay="600">Ajukan Penawaran</a>
                                <a href="#features-alt" class="btn btn-outline" data-aos="fade-up"
                                    data-aos-delay="700">Lihat Proses</a>
                                <div class="guarantee-badge" data-aos="fade-up" data-aos-delay="800">
                                    <i class="bi bi-patch-check-fill"></i><span>Fokus Kualitas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cta-image-container" data-aos="zoom-in" data-aos-delay="300">
                            <img src="{{ asset('assets/img/illustration/Vektor_DIgclo.png') }}" alt="Produksi Digclo"
                                class="img-fluid main-image">
                            <div class="floating-element element-1"><i class="bi bi-star-fill"></i><span>Rating
                                    Tinggi</span></div>
                            <div class="floating-element element-2"><i class="bi bi-people-fill"></i><span>Klien
                                    Aktif</span></div>
                            <div class="pattern-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Portofolio</span>
            <h2>Portofolio</h2>
            <p>Beberapa contoh produksi berbagai kategori.</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <div class="row">
                    <div class="col-lg-3 filter-sidebar">
                        <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                            <ul class="portfolio-filters isotope-filters">
                                <li data-filter="*" class="filter-active">Semua</li>
                                <li data-filter=".filter-kaos">Kaos</li>
                                <li data-filter=".filter-hoodie">Hoodie</li>
                                <li data-filter=".filter-jersey">Jersey</li>
                                <li data-filter=".filter-seragam">Seragam</li>
                                <li data-filter=".filter-merch">Merch</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up"
                            data-aos-delay="200">

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-kaos">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-portrait-1.webp') }}"
                                        class="img-fluid" alt="Kaos Event" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Kaos</span>
                                            <h4>Koleksi Event Komunitas</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-portrait-1.webp') }}"
                                                    class="glightbox" title="Koleksi Event Komunitas"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-jersey">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-2.webp') }}" class="img-fluid"
                                        alt="Jersey Turnamen" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Jersey</span>
                                            <h4>Jersey Turnamen</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-2.webp') }}"
                                                    class="glightbox" title="Jersey Turnamen"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-hoodie">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-portrait-2.webp') }}"
                                        class="img-fluid" alt="Hoodie Brand Lokal" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Hoodie</span>
                                            <h4>Hoodie Brand Lokal</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-portrait-2.webp') }}"
                                                    class="glightbox" title="Hoodie Brand Lokal"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-seragam">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-portrait-4.webp') }}"
                                        class="img-fluid" alt="Seragam Perusahaan" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Seragam</span>
                                            <h4>Paket Onboarding Perusahaan</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-portrait-4.webp') }}"
                                                    class="glightbox" title="Paket Onboarding Perusahaan"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-merch">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-5.webp') }}" class="img-fluid"
                                        alt="Merchandise Campaign" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Merchandise</span>
                                            <h4>Campaign Merchandise</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-5.webp') }}"
                                                    class="glightbox" title="Campaign Merchandise"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-kaos">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-6.webp') }}" class="img-fluid"
                                        alt="Kaos Branding" loading="lazy">
                                    <div class="portfolio-info">
                                        <div class="content">
                                            <span class="category">Kaos</span>
                                            <h4>Kaos Corporate Branding</h4>
                                            <div class="portfolio-links">
                                                <a href="{{ asset('assets/img/portfolio/portfolio-6.webp') }}"
                                                    class="glightbox" title="Kaos Corporate Branding"><i
                                                        class="bi bi-plus-lg"></i></a>
                                                <a href="{{ route('portfolio.details') }}" title="Detail"><i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Portfolio Container -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Kontak</span>
            <h2>Kontak</h2>
            <p>Hubungi kami untuk konsultasi kebutuhan produksi pakaian Anda.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info-panel">
                    <div class="contact-info-header">
                        <h3>Informasi Kontak</h3>
                        <p>Hubungi kami untuk konsultasi kebutuhan produksi pakaian Anda.</p>
                    </div>

                    <div class="contact-info-cards">
                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-pin-map-fill"></i>
                            </div>
                            <div class="card-content">
                                <h4>Lokasi</h4>
                                <p>4952 Hilltop Dr, Anytown, CA 90210</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-envelope-open"></i>
                            </div>
                            <div class="card-content">
                                <h4>Email</h4>
                                <p>info@example.com</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="card-content">
                                <h4>Telepon</h4>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div class="card-content">
                                <h4>Jam Operasional</h4>
                                <p>Senin–Sabtu: 09.00 – 19.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links-panel">
                        <h5>Follow Us</h5>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-panel">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="form-container">
                        <h3>Kirim Pesan</h3>
                        <p>Tinggalkan pesan Anda. Tim kami akan merespons secepatnya.</p>

                        <form action="{{ asset('forms/contact.php') }}" method="post" class="php-email-form">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nameInput" name="name"
                                    placeholder="Nama Lengkap" required="">
                                <label for="nameInput">Nama Lengkap</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="emailInput" name="email"
                                    placeholder="Alamat Email" required="">
                                <label for="emailInput">Alamat Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subjectInput" name="subject"
                                    placeholder="Subjek" required="">
                                <label for="subjectInput">Subjek</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="messageInput" name="message" rows="5" placeholder="Pesan Anda"
                                    style="height: 150px" required=""></textarea>
                                <label for="messageInput">Pesan Anda</label>
                            </div>

                            <div class="my-3">
                                <div class="loading">Memproses...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Anda terkirim. Terima kasih!</div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn-submit">Kirim Pesan <i
                                        class="bi bi-send-fill ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
@endsection
