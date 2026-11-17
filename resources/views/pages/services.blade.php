@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Our <span class="text-gradient">Services &amp; Process</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 620px;">
        On-site rebar threading, capping, coupler splicing, and CNC manufacturing.
      </p>
    </div>
  </section>

  <!-- 4-Step Visual Process + Live Videos -->
  <section class="py-5" style="background: var(--bg-section-alt); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">4-Step Splicing Process</h2>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="1. Rebar Threading" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">1. Rebar Threading</h6>
              <small class="text-secondary">Cutting threads on TMT bar</small>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step2_protective_cap.jpg') }}" alt="2. Protective End Cap" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">2. Protective End Cap</h6>
              <small class="text-secondary">Plastic cap protects threads</small>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="3. Joining 2 Rebars" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">3. Joining 2 Rebars</h6>
              <small class="text-secondary">Connecting both bars with coupler</small>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="4. Final Wrench Lock" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">4. Final Wrench Lock</h6>
              <small class="text-secondary">Tightening for 100% strength</small>
            </div>
          </div>
        </div>
      </div>

      <!-- On-Site Videos -->
      <div class="text-center mb-3" data-aos="fade-up">
        <h4 class="fw-bold mb-0">On-Site Process Videos</h4>
      </div>
      <div class="row g-4" data-aos="fade-up">
        <div class="col-lg-4 col-md-6">
          <div class="site-video-card">
            <div class="site-video-wrap">
              <video class="site-video-player" src="{{ asset('assets/videos/step1_machine_threading_clip.mp4') }}" poster="{{ asset('assets/process/step1_rebar_threading.jpg') }}" autoplay muted loop playsinline controls></video>
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">1. Rebar Threading on Machine</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="site-video-card">
            <div class="site-video-wrap">
              <video class="site-video-player" src="{{ asset('assets/videos/step2_coupler_fitting_clip.mp4') }}" poster="{{ asset('assets/process/step2_protective_cap.jpg') }}" autoplay muted loop playsinline controls></video>
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">2. Coupler &amp; Cap Fitting on Bar</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="site-video-card">
            <div class="site-video-wrap">
              <video class="site-video-player" src="{{ asset('assets/videos/live_cold_forging_machine.mp4') }}" poster="{{ asset('assets/process/step3_coupler_joining.jpg') }}" autoplay muted loop playsinline controls></video>
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">3. Hydraulic Cold Forging Machine</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6 Services Grid (Clean Photos, Minimal Text) -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Our Services</h2>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}?v=5" alt="Infrastructure Solutions" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Infrastructure Solutions</h5>
              <small class="text-secondary">High-rise towers, metro &amp; bridges</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="Manufacturer & Wholesaler" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Manufacturer &amp; Wholesaler</h5>
              <small class="text-secondary">16mm to 40mm ISO metric couplers</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="On-Site Machine Mobilization" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">On-Site Machine Mobilization</h5>
              <small class="text-secondary">5–10 day machine &amp; operator setup</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/protective_end_caps.jpg') }}?v=5" alt="Rebar Capping & Processing" class="visual-card-img" style="object-fit: contain; padding: 12px;">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Rebar Capping &amp; Processing</h5>
              <small class="text-secondary">Peeling, threading &amp; protective caps</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="Tensile Testing Lab" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Tensile Testing &amp; Quality Lab</h5>
              <small class="text-secondary">100% parent bar break tested</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Project Estimation" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Project Cost &amp; Steel Audit</h5>
              <small class="text-secondary">Up to 80% joint cost savings</small>
            </div>
          </div>
        </div>
      </div>

      <div class="orin-card p-4 text-center" data-aos="zoom-in">
        <h4 class="fw-bold mb-3">Need Machine Mobilization on Your Site?</h4>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="{{ route('contact') }}" class="btn btn-orin-primary">
            Request Machine Mobilization
          </a>
          <a href="{{ route('calculator') }}" class="btn btn-orin-secondary">
            Calculate Savings
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
