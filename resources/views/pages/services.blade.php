@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Our <span class="text-gradient">Core Services</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        End-to-end mechanical rebar splicing solutions, on-site machine mobilization, precision manufacturing, and technical advisory.
      </p>
    </div>
  </section>

  <!-- Detailed Services Grid -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row g-4 mb-5">
        <!-- Service 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box">
              <i class="bi bi-building"></i>
            </div>
            <h4 class="fw-bold mb-2">Infrastructure Solutions</h4>
            <p class="text-secondary mb-3">
              Pioneers in offering creative building and infrastructure solutions. For reinforcement bars in commercial towers, bridges, and transport corridors, we provide certified high-tensile mechanical couplers.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> Concentric load distribution</li>
              <li><i class="bi bi-check-circle-fill"></i> Eliminate overlap lap length waste</li>
              <li><i class="bi bi-check-circle-fill"></i> Suitable for 16mm to 40mm rebars</li>
            </ul>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <h4 class="fw-bold mb-2">Manufacturer & Wholesaler</h4>
            <p class="text-secondary mb-3">
              Leading manufacturer and wholesale supplier of precision Parallel Threaded & Cold Forged couplers with standard ISO metric internal threads from 16mm to 40mm.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> High-volume factory capacity</li>
              <li><i class="bi bi-check-circle-fill"></i> 100% strict dimensional tolerance</li>
              <li><i class="bi bi-check-circle-fill"></i> Custom thread pitch available</li>
            </ul>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-truck"></i>
            </div>
            <h4 class="fw-bold mb-2">On-Site Machine Mobilization</h4>
            <p class="text-secondary mb-3">
              Rapid on-site deployment of Rebar Roll Parallel Thread Machines and Cold Forging units with expert technical supervision and guaranteed 5-10 day mobilization time.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> 5-10 day rapid site deployment</li>
              <li><i class="bi bi-check-circle-fill"></i> Trained machine operators provided</li>
              <li><i class="bi bi-check-circle-fill"></i> Zero maintenance downtime guarantee</li>
            </ul>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #d97706; border-color: rgba(217,119,6,0.3); background: rgba(217,119,6,0.1);">
              <i class="bi bi-wrench-adjustable-circle"></i>
            </div>
            <h4 class="fw-bold mb-2">Rebar Threading & Processing</h4>
            <p class="text-secondary mb-3">
              Professional end-peeling and cold-roll threading directly at your site or precast fabrication yards, ensuring flawless ISO metric screw engagement every single time.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> ISO Metric standard thread pitch</li>
              <li><i class="bi bi-check-circle-fill"></i> Rust-preventive end cap protection</li>
              <li><i class="bi bi-check-circle-fill"></i> Fast per-minute cycle threading</li>
            </ul>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #9333ea; border-color: rgba(147,51,234,0.3); background: rgba(147,51,234,0.1);">
              <i class="bi bi-clipboard2-pulse"></i>
            </div>
            <h4 class="fw-bold mb-2">Tensile Testing & Quality Lab</h4>
            <p class="text-secondary mb-3">
              Comprehensive ultimate tensile strength pull testing, cyclic seismic compliance verification, and test report certificates issued for structural consultants.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> 100% Parent Bar Break Certification</li>
              <li><i class="bi bi-check-circle-fill"></i> Batch test certificates supplied</li>
              <li><i class="bi bi-check-circle-fill"></i> Consultant approval documentation</li>
            </ul>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #dc2626; border-color: rgba(220,38,38,0.3); background: rgba(220,38,38,0.1);">
              <i class="bi bi-calculator"></i>
            </div>
            <h4 class="fw-bold mb-2">Project Estimation & ROI Audit</h4>
            <p class="text-secondary mb-3">
              Complete structural BBS (Bar Bending Schedule) analysis and steel savings cost audit for commercial towers, residential townships, and bridges.
            </p>
            <ul class="feature-list-items small">
              <li><i class="bi bi-check-circle-fill"></i> Free project steel audit</li>
              <li><i class="bi bi-check-circle-fill"></i> Direct tonnage savings report</li>
              <li><i class="bi bi-check-circle-fill"></i> Guaranteed bottom-line savings</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Action Banner -->
      <div class="orin-card p-4 p-md-5 text-center" data-aos="zoom-in">
        <h3 class="fw-bold mb-2">Need Machine Mobilization on Your Active Site?</h3>
        <p class="text-secondary mb-4 mx-auto" style="max-width: 650px;">
          Deploy ORIN high-speed parallel threading and cold forging machines with expert technicians within 5-10 days anywhere in India.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="{{ route('contact') }}" class="btn btn-orin-primary">
            <i class="bi bi-lightning-charge-fill"></i> Request Machine Mobilization
          </a>
          <a href="{{ route('calculator') }}" class="btn btn-orin-secondary">
            <i class="bi bi-calculator"></i> Calculate Project Savings
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
