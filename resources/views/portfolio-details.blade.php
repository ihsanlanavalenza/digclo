@extends('layouts.app')

@section('title', 'Portfolio Details - Digclo')

@section('body-class', 'portfolio-details-page')

@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Portfolio Details</h1>
          <p class="mb-0">Detail produksi pakaian custom yang telah kami kerjakan untuk berbagai klien dan komunitas.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Portfolio Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="project-header">
      <div class="row">
        <div class="col-lg-7" data-aos="fade-up">
          <h1 class="project-title">Produksi Jersey Tim Futsal Digital</h1>
          <div class="project-meta">
            <div class="meta-item">
              <i class="bi bi-calendar3"></i>
              <span>September 2024</span>
            </div>
            <div class="meta-item">
              <i class="bi bi-building"></i>
              <span>Tim Futsal Digital FC</span>
            </div>
            <div class="meta-item">
              <i class="bi bi-box-seam"></i>
              <span>50 pcs Jersey + Celana</span>
            </div>
          </div>
          <div class="project-tags" data-aos="fade-up" data-aos-delay="100">
            <span class="tag">Jersey</span>
            <span class="tag">Sublimasi</span>
            <span class="tag">Tim Olahraga</span>
            <span class="tag">Custom Design</span>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center justify-content-end" data-aos="fade-up" data-aos-delay="200">
          <div class="technologies">
            <div class="tech-title">Teknik Produksi:</div>
            <div class="tech-badges">
              <span>Sublimasi Print</span>
              <span>Poly Jersey</span>
              <span>Custom Sizing</span>
              <span>Team Logo</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="media-showcase" data-aos="zoom-in" data-aos-delay="100">
      <div class="portfolio-details-slider swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": {
              "delay": 5000
            },
            "effect": "fade",
            "fadeEffect": {
              "crossFade": true
            },
            "slidesPerView": 1,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true,
              "dynamicBullets": true
            }
          }
        </script>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{ asset('assets/img/portfolio/portfolio-1.webp') }}" alt="Portfolio Image" class="img-fluid">
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('assets/img/portfolio/portfolio-2.webp') }}" alt="Portfolio Image" class="img-fluid">
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('assets/img/portfolio/portfolio-3.webp') }}" alt="Portfolio Image" class="img-fluid">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <div class="project-content">
      <div class="row gy-4">
        <div class="col-lg-7" data-aos="fade-up">
          <div class="description-box">
            <h3>Deskripsi Proyek</h3>
            <p class="lead">Tim Futsal Digital FC membutuhkan jersey dan celana seragam dengan desain khas yang mencerminkan identitas tim. Mereka ingin kombinasi warna biru dan putih dengan logo tim yang menonjol.</p>
            <p>Kami menggunakan teknik sublimasi printing untuk memberikan hasil yang tahan lama dan warna yang tajam. Material poly jersey dipilih untuk memberikan kenyamanan saat bermain dan daya tahan yang maksimal.</p>
            
            <h4>Spesifikasi Produk:</h4>
            <ul>
              <li>Material: 100% Polyester Jersey (Dry Fit)</li>
              <li>Teknik: Sublimasi Full Print</li>
              <li>Ukuran: S, M, L, XL, XXL</li>
              <li>Warna: Biru Navy - Putih - Aksen Merah</li>
              <li>Logo: Tim + Sponsor</li>
              <li>Personalisasi: Nama & Nomor Punggung</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
          <div class="project-stats">
            <div class="stat-item">
              <div class="stat-number">50</div>
              <div class="stat-label">Total Pcs</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">12</div>
              <div class="stat-label">Hari Produksi</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">100%</div>
              <div class="stat-label">Kepuasan Klien</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">5★</div>
              <div class="stat-label">Rating</div>
            </div>
          </div>

          <div class="project-details">
            <h4>Detail Proyek</h4>
            <div class="detail-item">
              <strong>Klien:</strong>
              <span>Tim Futsal Digital FC</span>
            </div>
            <div class="detail-item">
              <strong>Timeline:</strong>
              <span>2 Minggu (14 Hari Kerja)</span>
            </div>
            <div class="detail-item">
              <strong>Budget Range:</strong>
              <span>Rp 2.500.000 - Rp 3.000.000</span>
            </div>
            <div class="detail-item">
              <strong>Status:</strong>
              <span class="status completed">Selesai</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial-section" data-aos="fade-up" data-aos-delay="200">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <i class="bi bi-chat-quote testimonial-icon"></i>
          <p>"Hasil jersey yang luar biasa! Kualitas bahan dan cetakan sangat memuaskan. Tim kami sangat puas dengan hasilnya dan merasa percaya diri saat bertanding. Proses pemesanan juga sangat mudah dan transparan."</p>
          <div class="testimonial-author">
            <img src="{{ asset('assets/img/person/person-m-3.webp') }}" alt="Client" class="author-image">
            <div class="author-info">
              <h5>Ahmad Rizky</h5>
              <span>Kapten Tim Futsal Digital FC</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="related-projects" data-aos="fade-up" data-aos-delay="300">
      <h3>Proyek Terkait</h3>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="related-item">
            <img src="{{ asset('assets/img/portfolio/portfolio-portrait-1.webp') }}" alt="Related Project" class="img-fluid">
            <div class="related-content">
              <h5>Kaos Event Komunitas</h5>
              <p>Produksi kaos untuk event tahunan komunitas developer</p>
              <a href="{{ route('portfolio.details') }}" class="btn-link">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="related-item">
            <img src="{{ asset('assets/img/portfolio/portfolio-portrait-2.webp') }}" alt="Related Project" class="img-fluid">
            <div class="related-content">
              <h5>Hoodie Brand Lokal</h5>
              <p>Produksi hoodie premium untuk brand fashion lokal</p>
              <a href="{{ route('portfolio.details') }}" class="btn-link">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="related-item">
            <img src="{{ asset('assets/img/portfolio/portfolio-portrait-4.webp') }}" alt="Related Project" class="img-fluid">
            <div class="related-content">
              <h5>Seragam Perusahaan</h5>
              <p>Paket seragam lengkap untuk onboarding karyawan baru</p>
              <a href="{{ route('portfolio.details') }}" class="btn-link">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection