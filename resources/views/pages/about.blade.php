@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">About <span class="text-gradient">Steelux Industries</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 620px;">
        CNC rebar coupler manufacturer &amp; on-site splicing specialist in Surat, Gujarat.
      </p>
    </div>
  </section>

  <!-- About Content + Factory Showcase -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4 mb-5">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title">Steelux Industries (ORIN)</h2>
          <p class="text-secondary mb-4" style="line-height: 1.7;">
            Based in Surat, Gujarat, Steelux Industries manufactures precision CNC rebar couplers (16mm to 40mm) that replace 50D overlap lapping—saving up to 80% joint cost with 100% bar break strength.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary">
              Contact Us
            </a>
            <a href="{{ asset('brocure.pdf') }}" target="_blank" class="btn btn-orin-secondary">
              <i class="bi bi-file-earmark-pdf-fill text-danger"></i> Brochure
            </a>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="about-card-wrap">
            <div class="about-img-container">
              <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="Steelux CNC Manufacturing Plant" class="about-img">
            </div>
          </div>
        </div>
      </div>

      <!-- Visual Product & Facility Gallery (No Tags, Minimal Text) -->
      <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}?v=5" alt="16mm to 40mm Couplers" class="visual-card-img" style="object-fit: contain; padding: 12px;">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-0">16mm to 40mm Couplers</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/cnc_vmc_machine.jpg') }}" alt="CNC Machining Center" class="visual-card-img" style="object-fit: contain; padding: 10px;">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-0">CNC &amp; VMC Machinery</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="Quality Testing Lab" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-0">100% Tensile Tested</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Surat Plant Address -->
      <div class="orin-card p-4" data-aos="fade-up">
        <div class="row align-items-center gy-3">
          <div class="col-lg-8">
            <h5 class="fw-bold text-dark mb-1">Surat Manufacturing Plant</h5>
            <p class="text-secondary mb-1 small">
              <i class="bi bi-geo-alt-fill text-danger me-1"></i>
              5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006
            </p>
            <small class="text-secondary">
              <i class="bi bi-telephone-fill text-primary me-1"></i> +91 88490 01529 / +91 99793 05461 &bull;
              <i class="bi bi-envelope-fill text-primary ms-2 me-1"></i> steelux7227@gmail.com
            </small>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary btn-mobile-full">
              Get in Touch
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
