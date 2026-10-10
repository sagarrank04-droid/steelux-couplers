@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Key <span class="text-gradient">Advantages</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Why India's top infrastructure developers and structural consultants choose ORIN precision mechanical couplers over obsolete lap joints.
      </p>
    </div>
  </section>

  <!-- Advantages Cards Detailed -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row g-4 mb-5">
        <!-- Advantage 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-cash-stack"></i>
            </div>
            <h4 class="fw-bold mb-2">Up to 80% Cost Savings</h4>
            <p class="text-secondary mb-0">
              Direct reduction in steel consumption by eliminating 50D overlap steel wastage on every joint.
            </p>
          </div>
        </div>

        <!-- Advantage 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-lightning-fill"></i>
            </div>
            <h4 class="fw-bold mb-2">Quick Installation</h4>
            <p class="text-secondary mb-0">
              Fast screw-in mechanical connection requiring no specialized welding or crane rigging.
            </p>
          </div>
        </div>

        <!-- Advantage 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #d97706; border-color: rgba(217,119,6,0.3); background: rgba(217,119,6,0.1);">
              <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>
            <h4 class="fw-bold mb-2">Better Concrete Flow</h4>
            <p class="text-secondary mb-0">
              Eliminates congested multi-bar lap clusters for smooth aggregate flow and compaction.
            </p>
          </div>
        </div>

        <!-- Advantage 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-shield-shaded"></i>
            </div>
            <h4 class="fw-bold mb-2">100% Bar Break Strength</h4>
            <p class="text-secondary mb-0">
              Delivers ultimate tensile strength greater than the parent bar under high seismic loads.
            </p>
          </div>
        </div>

        <!-- Advantage 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #9333ea; border-color: rgba(147,51,234,0.3); background: rgba(147,51,234,0.1);">
              <i class="bi bi-stopwatch"></i>
            </div>
            <h4 class="fw-bold mb-2">Reduced Cycle Times</h4>
            <p class="text-secondary mb-0">
              Accelerates floor slab and column cycle schedules by days per tier for faster delivery.
            </p>
          </div>
        </div>

        <!-- Advantage 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #ec4899; border-color: rgba(236,72,153,0.3); background: rgba(236,72,153,0.1);">
              <i class="bi bi-check-circle-fill"></i>
            </div>
            <h4 class="fw-bold mb-2">Concentric Bar Alignment</h4>
            <p class="text-secondary mb-0">
              Maintains exact coaxial bar centerline alignment with zero offset eccentric bending moments.
            </p>
          </div>
        </div>
      </div>

      <!-- Comparison Summary Table -->
      <div class="orin-card p-4 p-md-5 mb-4" data-aos="fade-up">
        <h3 class="fw-bold mb-3 text-center">Lap Splice V/S ORIN Mechanical Coupler</h3>
        <p class="text-secondary small text-center mb-3">Head-to-head structural & cost comparison between traditional overlapping vs mechanical joint:</p>
        
        <div class="d-md-none table-scroll-hint">
          <i class="bi bi-arrows-expand text-primary"></i> <span>Swipe horizontally to view all comparison columns</span>
        </div>

        <div class="table-responsive-custom">
          <table class="table-custom table-sticky-col align-middle text-nowrap">
            <thead>
              <tr>
                <th style="min-width: 180px;">Feature / Parameter</th>
                <th class="text-danger" style="min-width: 220px;">Traditional Lap Joint</th>
                <th class="text-success" style="min-width: 260px;">ORIN Mechanical Coupler</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-bold text-dark">Steel Consumption</td>
                <td class="text-danger">High (Requires 50D overlap steel)</td>
                <td class="text-success fw-bold">Zero wastage (100% bar length utilized)</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Congestion in Columns</td>
                <td class="text-danger">High (Congested cage, poor concrete flow)</td>
                <td class="text-success fw-bold">Minimal (Single bar profile, smooth aggregate flow)</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Tensile Strength</td>
                <td class="text-danger">Dependent on concrete bond quality</td>
                <td class="text-success fw-bold">> 100% Parent Bar Break Guaranteed</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Installation Speed</td>
                <td class="text-danger">Slow wire binding & manual tying</td>
                <td class="text-success fw-bold">Rapid 30-sec screw & torque tightening</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Cost Economy</td>
                <td class="text-danger">Expensive in large diameters (25mm-40mm)</td>
                <td class="text-success fw-bold">Saves 70% to 80% on overall joint costs</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="text-center" data-aos="fade-up">
        <a href="{{ route('calculator') }}" class="btn btn-orin-primary">
          <i class="bi bi-calculator-fill"></i> Calculate Your Project Savings
        </a>
      </div>
    </div>
  </section>
@endsection
