@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Key <span class="text-gradient">Advantages</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 620px;">
        Why developers choose Steelux couplers over traditional lap joints.
      </p>
    </div>
  </section>

  <!-- Visual Comparison + Advantages Grid -->
  <section class="py-5">
    <div class="container py-4">
      <div class="orin-card p-3 p-md-4 mb-5" data-aos="zoom-in">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <div class="rounded-4 overflow-hidden border">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Lap Splice vs Rebar Coupler" class="w-100 d-block" style="max-height: 400px; object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-5">
            <h4 class="fw-bold mb-3">Lap Splice V/S Rebar Coupler</h4>
            <div class="p-3 rounded-3 mb-3" style="background: rgba(220, 38, 38, 0.06); border: 1px solid rgba(220, 38, 38, 0.2);">
              <h6 class="fw-bold text-danger mb-1"><i class="bi bi-x-circle-fill me-1"></i> Traditional 50D Lapping</h6>
              <small class="text-secondary d-block">Double bars choke concrete flow and waste up to 2m steel per joint.</small>
            </div>
            <div class="p-3 rounded-3 mb-3" style="background: rgba(5, 150, 105, 0.08); border: 1px solid rgba(5, 150, 105, 0.25);">
              <h6 class="fw-bold text-success mb-1"><i class="bi bi-check-circle-fill me-1"></i> Steelux Rebar Coupler</h6>
              <small class="text-secondary d-block">Zero overlap steel waste, smooth concrete flow &amp; 100% bar break strength.</small>
            </div>
            <div class="text-center bg-light p-2 rounded-3 border">
              <img src="{{ asset('assets/process/column_cage_diagram.jpg') }}" alt="Column Cage Diagram" style="max-height: 110px; object-fit: contain;">
            </div>
          </div>
        </div>
      </div>

      <!-- 6 Visual Advantage Cards (No Tags, Minimal Text) -->
      <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}?v=5" alt="Up to 80% Cost Savings" class="visual-card-img" style="object-fit: contain; padding: 10px;">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Up to 80% Cost Savings</h5>
              <small class="text-secondary">Eliminates 50D overlap steel waste</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="Quick Screw-In Installation" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Quick Installation</h5>
              <small class="text-secondary">Fast screw-in connection without welding</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}?v=5" alt="Better Concrete Flow" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Better Concrete Flow</h5>
              <small class="text-secondary">Eliminates crowded column cages</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="100% Bar Break Strength" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">100% Bar Break Strength</h5>
              <small class="text-secondary">Stronger than parent TMT rebar</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="Reduced Cycle Times" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Faster Construction</h5>
              <small class="text-secondary">Speeds up slab &amp; column cycles</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="Concentric Bar Alignment" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Concentric Alignment</h5>
              <small class="text-secondary">Straight load path between bars</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Comparison Table -->
      <div class="orin-card p-4 mb-4" data-aos="fade-up">
        <h4 class="fw-bold mb-3 text-center">Lap Splice V/S Steelux Coupler</h4>
        <div class="table-responsive-custom">
          <table class="table-custom table-sticky-col align-middle text-nowrap">
            <thead>
              <tr>
                <th>Parameter</th>
                <th class="text-danger">Traditional Lap Joint</th>
                <th class="text-success">Steelux Coupler</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-bold text-dark">Steel Consumption</td>
                <td class="text-danger">High (50D overlap steel wasted)</td>
                <td class="text-success fw-bold">Zero wastage</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Column Congestion</td>
                <td class="text-danger">High congestion</td>
                <td class="text-success fw-bold">Clean cage &amp; smooth concrete flow</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Tensile Strength</td>
                <td class="text-danger">Depends on concrete bond</td>
                <td class="text-success fw-bold">> 100% Parent Bar Break</td>
              </tr>
              <tr>
                <td class="fw-bold text-dark">Cost Economy</td>
                <td class="text-danger">Expensive in 20mm–40mm</td>
                <td class="text-success fw-bold">Saves up to 80% per joint</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="text-center" data-aos="fade-up">
        <a href="{{ route('calculator') }}" class="btn btn-orin-primary">
          Calculate Project Savings
        </a>
      </div>
    </div>
  </section>
@endsection
