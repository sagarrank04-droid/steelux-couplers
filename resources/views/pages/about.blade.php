@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">About <span class="text-gradient">Steelux Industries</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Pioneering precision mechanical rebar splicing systems, zero steel wastage technology, and high-rise structural continuity.
      </p>
    </div>
  </section>

  <!-- About Detailed Content -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4 mb-5">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title">Transforming Modern Construction</h2>
          <p class="text-secondary mb-3" style="line-height: 1.7;">
            <strong>Steelux Industries (ORIN)</strong> is a specialized mechanical rebar splicing enterprise based in Surat, Gujarat. We replace traditional 50D overlap lapping with certified concentric couplers—eliminating up to 80% steel wastage, relieving column congestion, and guaranteeing 100% parent bar break strength.
          </p>
          <div class="d-flex flex-wrap gap-3 mb-4">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-patch-check-fill text-info fs-5"></i>
              <span class="text-dark fw-bold">ISO Metric Standard Certified</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-shield-check text-success fs-5"></i>
              <span class="text-dark fw-bold">100% Bar Break Guarantee</span>
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
              <img src="{{ asset('assets/hero_skyscraper.jpg') }}" alt="ORIN Engineering & Manufacturing" class="about-img" onerror="this.src='{{ asset('assets/img_2.jpg') }}'">
            </div>
            
            <!-- Floating Badge: Certified Quality -->
            <div class="floating-about-badge d-flex align-items-center gap-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(2, 132, 199, 0.15); color: #0284c7;">
                <i class="bi bi-patch-check-fill fs-5"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">ISO 9001:2015 &amp; IS 16172</h6>
                <small class="text-secondary">Certified Rebar Splicing Quality</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Core Pillars -->
      <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box">
              <i class="bi bi-shield-check"></i>
            </div>
            <h4 class="fw-bold mb-2">Quality &amp; Standards</h4>
            <p class="text-secondary mb-0">
              Compliant with IS 16172 and international mechanical splicing specifications.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-cpu"></i>
            </div>
            <h4 class="fw-bold mb-2">Advanced Machinery</h4>
            <p class="text-secondary mb-0">
              High-speed parallel threading and cold forging units mobilized across India.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-recycle"></i>
            </div>
            <h4 class="fw-bold mb-2">Steel Conservation</h4>
            <p class="text-secondary mb-0">
              Eliminates tons of unnecessary lap steel, lowering costs and carbon footprint.
            </p>
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
