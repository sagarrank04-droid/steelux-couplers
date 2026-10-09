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
          <h2 class="section-title">Transforming Structures Worldwide</h2>
          <p class="text-secondary mb-3" style="line-height: 1.8;">
            <strong>Steelux Industries (ORIN)</strong> is a specialized construction engineering and mechanical rebar management enterprise headquartered in Surat, Gujarat. We are committed to revolutionizing modern reinforced concrete (RCC) construction through cutting-edge mechanical splicing technology.
          </p>
          <p class="text-secondary mb-3" style="line-height: 1.8;">
            Traditional overlap lapping consumes enormous extra steel (50D length), causes severe reinforcement cage congestion in dense column cores, and creates weak offset load transfers. ORIN mechanical couplers eliminate these flaws completely—providing concentric load transfer, continuous structural ductility, and over <strong>70% direct financial savings</strong> on every joint.
          </p>
          <p class="text-secondary mb-4" style="line-height: 1.8;">
            Every coupler produced in our facility is precision-engineered using prime high-tensile alloy steel and threaded under rigorous ISO metric standards to deliver a guaranteed <strong>100% parent bar break strength</strong>.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary">
              <i class="bi bi-chat-dots-fill"></i> Partner With Us
            </a>
            <a href="{{ asset('brocure.pdf') }}" target="_blank" class="btn btn-orin-secondary">
              <i class="bi bi-file-earmark-pdf-fill text-danger"></i> Download Company Brochure
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
            <h4 class="fw-bold mb-2">Quality & ISO Certification</h4>
            <p class="text-secondary mb-0">
              Manufactured strictly in compliance with international mechanical splicing standards and certified ISO Metric threading specifications.
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
              State-of-the-art Rebar Roll Parallel Threading and Cold Forging machines mobilized directly to your project sites across India.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-recycle"></i>
            </div>
            <h4 class="fw-bold mb-2">Eco-Friendly & Sustainable</h4>
            <p class="text-secondary mb-0">
              Conserving thousands of tons of high-grade steel, reducing embodied carbon footprints, and supporting green construction benchmarks.
            </p>
          </div>
        </div>
      </div>

      <!-- Surat Works Info Card -->
      <div class="orin-card p-4 p-md-5" data-aos="fade-up">
        <div class="row align-items-center gy-4">
          <div class="col-lg-8">
            <h3 class="fw-bold mb-2">Surat Manufacturing Plant & Headquarters</h3>
            <p class="text-secondary mb-2">
              <i class="bi bi-geo-alt-fill text-danger me-2"></i>
              5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006, Gujarat, India
            </p>
            <p class="text-secondary mb-0">
              <i class="bi bi-telephone-fill text-primary me-2"></i>
              Direct Helpline: <strong>+91 88490 01529</strong> / <strong>+91 99793 05461</strong> &bull; Email: <strong>steelux7227@gmail.com</strong>
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary">
              <i class="bi bi-send-fill"></i> Contact Plant Today
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
