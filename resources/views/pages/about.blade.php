@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">About <span class="text-gradient">Steelux Industries</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Pioneering precision CNC rebar coupler manufacturing, on-site threading technology, and zero steel wastage solutions from Surat, Gujarat.
      </p>
    </div>
  </section>

  <!-- About Detailed Content + Visual Factory Showcase -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4 mb-5">
        <div class="col-lg-6" data-aos="fade-right">
          <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-1 rounded-pill mb-2">SURAT MANUFACTURING PLANT</span>
          <h2 class="section-title">Transforming Modern Construction</h2>
          <p class="text-secondary mb-3" style="line-height: 1.7;">
            <strong>Steelux Industries (ORIN)</strong> is a specialized mechanical rebar splicing manufacturer based in Surat, Gujarat. We replace traditional 50D overlap lapping with precision CNC-machined couplers—eliminating up to 80% steel wastage, relieving column congestion, and guaranteeing 100% parent bar break strength.
          </p>
          <div class="row g-2 mb-4">
            <div class="col-6">
              <div class="p-3 rounded-3 bg-light border d-flex align-items-center gap-2">
                <i class="bi bi-patch-check-fill text-info fs-4"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-0 small">ISO Metric Standard</h6>
                  <small class="text-secondary">16mm to 40mm Sizes</small>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 rounded-3 bg-light border d-flex align-items-center gap-2">
                <i class="bi bi-shield-check text-success fs-4"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-0 small">100% Bar Break</h6>
                  <small class="text-secondary">IS 16172 Tested</small>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary">
              <i class="bi bi-chat-dots-fill"></i> Partner With Us
            </a>
            <a href="{{ asset('brocure.pdf') }}" target="_blank" class="btn btn-orin-secondary">
              <i class="bi bi-file-earmark-pdf-fill text-danger"></i> Download Brochure
            </a>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="about-card-wrap">
            <div class="about-img-container">
              <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="Steelux CNC Rebar Coupler Manufacturing Plant" class="about-img">
            </div>
            
            <!-- Floating Badge: Certified Quality -->
            <div class="floating-about-badge d-flex align-items-center gap-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(2, 132, 199, 0.15); color: #0284c7;">
                <i class="bi bi-patch-check-fill fs-5"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">ISO 9001:2015 &amp; IS 16172</h6>
                <small class="text-secondary">Precision CNC Coupler Manufacturing</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Visual Product & Facility Gallery -->
      <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}" alt="16mm to 40mm Coupler Lineup" class="visual-card-img" style="object-fit: contain; padding: 12px;">
              <span class="process-action-tag"><i class="bi bi-layers-fill text-info"></i> 16mm–40mm</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-1">Precision Steel Couplers</h4>
                <p class="text-secondary small mb-0">
                  High-tensile carbon steel couplers machined to exact ISO metric thread tolerances.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/cnc_vmc_machine.jpg') }}" alt="CNC VMC Machining Center" class="visual-card-img" style="object-fit: contain; padding: 10px;">
              <span class="process-action-tag"><i class="bi bi-cpu text-warning"></i> CNC / VMC Tech</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-1">Advanced CNC Machinery</h4>
                <p class="text-secondary small mb-0">
                  Automated CNC &amp; VMC production lines alongside portable on-site threading machines.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="Quality Testing Lab" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-shield-check text-success"></i> 100% Tested</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-1">Quality &amp; Tensile Lab</h4>
                <p class="text-secondary small mb-0">
                  Every batch undergoes Go/No-Go gauge verification and UTM tensile pull testing.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Surat Works Info Card -->
      <div class="orin-card p-3 p-sm-4 p-md-5" data-aos="fade-up">
        <div class="row align-items-center gy-3">
          <div class="col-lg-8">
            <h4 class="fw-bold text-dark mb-2">Surat Manufacturing Plant &amp; Headquarters</h4>
            <p class="text-secondary mb-2 small" style="line-height: 1.6;">
              <i class="bi bi-geo-alt-fill text-danger me-2"></i>
              5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006, Gujarat, India
            </p>
            <div class="d-flex flex-wrap align-items-center gap-2 text-secondary small pt-1">
              <span><i class="bi bi-telephone-fill text-primary me-1"></i> <a href="tel:+918849001529" class="text-secondary text-decoration-none">+91 88490 01529</a> / <a href="tel:+919979305461" class="text-secondary text-decoration-none">+91 99793 05461</a></span>
              <span class="d-none d-sm-inline opacity-50">&bull;</span>
              <span><i class="bi bi-envelope-fill text-primary me-1"></i> <a href="mailto:steelux7227@gmail.com" class="text-secondary text-decoration-none">steelux7227@gmail.com</a></span>
            </div>
          </div>
          <div class="col-lg-4 text-lg-end pt-2 pt-lg-0">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary btn-mobile-full">
              <i class="bi bi-send-fill"></i> Contact Plant Today
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
