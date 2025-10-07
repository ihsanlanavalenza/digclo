@extends('layouts.app')

@section('title', 'Service Details - Digclo')

@section('body-class', 'service-details-page')

@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Service Details</h1>
          <p class="mb-0">Detail lengkap layanan produksi pakaian custom dengan teknologi dan proses terdepan.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Service Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Service Details Section -->
<section id="service-details" class="service-details section">
  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-box">
          <h4>Layanan Kami</h4>
          <div class="services-list">
            <a href="#" class="active"><i class="bi bi-arrow-right"></i><span>Produksi Kaos & Polo</span></a>
            <a href="#"><i class="bi bi-arrow-right"></i><span>Hoodie & Sweater</span></a>
            <a href="#"><i class="bi bi-arrow-right"></i><span>Jersey & Seragam</span></a>
            <a href="#"><i class="bi bi-arrow-right"></i><span>Sablon & Bordir</span></a>
            <a href="#"><i class="bi bi-arrow-right"></i><span>Desain & Pra-Produksi</span></a>
            <a href="#"><i class="bi bi-arrow-right"></i><span>Packaging & QC</span></a>
          </div>
        </div>

        <div class="service-box">
          <h4>Download Katalog</h4>
          <div class="download-catalog">
            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Katalog Produk</span></a>
            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Panduan Ukuran</span></a>
            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Price List</span></a>
          </div>
        </div>

        <div class="help-box d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-headset help-icon"></i>
          <h4>Butuh Bantuan?</h4>
          <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
          <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
        </div>

      </div>

      <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/img/services/services-2.webp') }}" alt="Service Image" class="img-fluid services-img">
        
        <h3>Produksi Kaos & Polo Custom</h3>
        <p>Layanan produksi kaos dan polo custom dengan berbagai pilihan bahan dan teknik printing. Cocok untuk event, komunitas, perusahaan, dan keperluan promosi.</p>
        
        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Berbagai pilihan bahan: Cotton Combed, Poly Cotton, Dry Fit</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Minimum order mulai dari 12 pcs</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Sablon: DTF, DTG, Plastisol, Discharge</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Bordir komputer untuk logo premium</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Size chart lengkap dari S hingga 5XL</span></li>
        </ul>
        
        <p>Proses produksi kaos kami menggunakan teknologi printing terkini dengan kontrol kualitas berlapis. Setiap tahap produksi dipantau untuk memastikan hasil yang konsisten dan sesuai dengan standar yang ditetapkan.</p>

        <div class="features-grid">
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="feature-item">
                <i class="bi bi-palette"></i>
                <div>
                  <h5>Konsultasi Desain</h5>
                  <p>Tim desainer berpengalaman membantu mewujudkan ide Anda menjadi desain yang menarik dan aplikatif.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-item">
                <i class="bi bi-speedometer2"></i>
                <div>
                  <h5>Proses Cepat</h5>
                  <p>Lead time produksi 7-14 hari kerja tergantung jumlah dan kompleksitas desain.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-item">
                <i class="bi bi-shield-check"></i>
                <div>
                  <h5>Quality Control</h5>
                  <p>Sistem QC berlapis memastikan setiap produk yang keluar memenuhi standar kualitas tinggi.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-item">
                <i class="bi bi-truck"></i>
                <div>
                  <h5>Pengiriman Aman</h5>
                  <p>Packaging rapi dan pengiriman terpercaya ke seluruh Indonesia dengan asuransi.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pricing-section">
          <h4>Estimasi Harga</h4>
          <div class="pricing-table">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Jumlah</th>
                    <th>Cotton Combed 30s</th>
                    <th>Poly Cotton</th>
                    <th>Dry Fit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12-24 pcs</td>
                    <td>Rp 85.000</td>
                    <td>Rp 90.000</td>
                    <td>Rp 110.000</td>
                  </tr>
                  <tr>
                    <td>25-49 pcs</td>
                    <td>Rp 75.000</td>
                    <td>Rp 80.000</td>
                    <td>Rp 95.000</td>
                  </tr>
                  <tr>
                    <td>50-99 pcs</td>
                    <td>Rp 65.000</td>
                    <td>Rp 70.000</td>
                    <td>Rp 85.000</td>
                  </tr>
                  <tr>
                    <td>100+ pcs</td>
                    <td>Rp 55.000</td>
                    <td>Rp 60.000</td>
                    <td>Rp 75.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="pricing-note">*Harga sudah termasuk sablon 1 warna. Harga dapat berubah tergantung kompleksitas desain dan tambahan fitur.</p>
          </div>
        </div>

        <div class="process-timeline">
          <h4>Alur Proses Produksi</h4>
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-marker">1</div>
              <div class="timeline-content">
                <h5>Konsultasi & Quotation</h5>
                <p>Diskusi kebutuhan, desain, dan pembuatan penawaran harga.</p>
                <span class="timeline-duration">1-2 hari</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">2</div>
              <div class="timeline-content">
                <h5>Desain & Approval</h5>
                <p>Pembuatan mockup desain dan konfirmasi dari klien.</p>
                <span class="timeline-duration">2-3 hari</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">3</div>
              <div class="timeline-content">
                <h5>Produksi</h5>
                <p>Proses cutting, printing, dan assembling dengan QC ketat.</p>
                <span class="timeline-duration">7-10 hari</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">4</div>
              <div class="timeline-content">
                <h5>Final QC & Packing</h5>
                <p>Pemeriksaan akhir, packaging, dan siap kirim.</p>
                <span class="timeline-duration">1-2 hari</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section><!-- /Service Details Section -->
@endsection