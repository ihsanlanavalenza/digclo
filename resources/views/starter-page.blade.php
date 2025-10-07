 @extends('layouts.app')

@section('title', 'Starter Page - Digclo')

@section('body-class', 'starter-page-page')

@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Starter Page</h1>
          <p class="mb-0">Halaman starter untuk memulai proyek produksi pakaian custom Anda bersama Digclo.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Starter Page</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Starter Content Section -->
<section id="starter-content" class="starter-content section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        
        <!-- Getting Started -->
        <div class="getting-started" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <i class="bi bi-rocket-takeoff"></i>
          </div>
          <h2>Mulai Proyek Anda</h2>
          <p class="lead">Selamat datang di halaman starter Digclo. Kami siap membantu mewujudkan ide produksi pakaian custom Anda menjadi kenyataan.</p>
        </div>

        <!-- Quick Steps -->
        <div class="quick-steps" data-aos="fade-up" data-aos-delay="200">
          <h3>Langkah Cepat Memulai</h3>
          <div class="steps-grid">
            <div class="step-item">
              <div class="step-number">01</div>
              <div class="step-content">
                <h4>Konsultasi Gratis</h4>
                <p>Hubungi tim kami untuk diskusi awal tentang kebutuhan dan ide Anda.</p>
                <a href="{{ route('home') }}#contact" class="btn-step">Mulai Konsultasi</a>
              </div>
            </div>
            
            <div class="step-item">
              <div class="step-number">02</div>
              <div class="step-content">
                <h4>Lihat Portfolio</h4>
                <p>Jelajahi hasil kerja kami untuk mendapat inspirasi proyek Anda.</p>
                <a href="{{ route('portfolio.details') }}" class="btn-step">Lihat Portfolio</a>
              </div>
            </div>
            
            <div class="step-item">
              <div class="step-number">03</div>
              <div class="step-content">
                <h4>Pelajari Layanan</h4>
                <p>Ketahui detail layanan dan proses produksi yang kami tawarkan.</p>
                <a href="{{ route('service.details') }}" class="btn-step">Detail Layanan</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Features Overview -->
        <div class="features-overview" data-aos="fade-up" data-aos-delay="300">
          <h3>Mengapa Memilih Digclo?</h3>
          <div class="features-list">
            <div class="feature-box">
              <i class="bi bi-shield-check"></i>
              <h4>Kualitas Terjamin</h4>
              <p>Quality control berlapis dan material berkualitas tinggi untuk hasil terbaik.</p>
            </div>
            
            <div class="feature-box">
              <i class="bi bi-clock-history"></i>
              <h4>Tepat Waktu</h4>
              <p>Sistem produksi terstruktur memastikan pengerjaan sesuai timeline yang disepakati.</p>
            </div>
            
            <div class="feature-box">
              <i class="bi bi-palette"></i>
              <h4>Desain Custom</h4>
              <p>Tim desainer berpengalaman siap membantu mewujudkan ide kreatif Anda.</p>
            </div>
            
            <div class="feature-box">
              <i class="bi bi-graph-up"></i>
              <h4>Harga Kompetitif</h4>
              <p>Struktur harga yang transparan dan kompetitif sesuai dengan kualitas yang diberikan.</p>
            </div>
          </div>
        </div>

        <!-- Contact CTA -->
        <div class="contact-cta" data-aos="fade-up" data-aos-delay="400">
          <div class="cta-content">
            <h3>Siap Memulai Proyek Anda?</h3>
            <p>Tim kami tersedia untuk konsultasi dan membantu merencanakan proyek produksi pakaian custom Anda.</p>
            <div class="cta-buttons">
              <a href="{{ route('home') }}#contact" class="btn btn-primary">Hubungi Kami</a>
              <a href="{{ route('home') }}#services" class="btn btn-outline">Lihat Layanan</a>
            </div>
          </div>
          
          <div class="contact-info">
            <div class="contact-item">
              <i class="bi bi-telephone"></i>
              <div>
                <strong>Telepon</strong>
                <span>+1 5589 55488 55</span>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="bi bi-envelope"></i>
              <div>
                <strong>Email</strong>
                <span>info@example.com</span>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="bi bi-clock"></i>
              <div>
                <strong>Jam Kerja</strong>
                <span>Senin - Sabtu: 09.00 - 19.00</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- /Starter Content Section -->
@endsection