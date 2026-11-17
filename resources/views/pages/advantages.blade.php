@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Key <span class="text-gradient">Visual Advantages</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        See why India's top developers and structural engineers replace congested 50D lap splices with Steelux mechanical couplers.
      </p>
    </div>
  </section>

  <!-- Visual Head-to-Head Comparison Banner -->
  <section class="py-5">
    <div class="container py-4">
      <div class="orin-card p-3 p-md-5 mb-5" data-aos="zoom-in">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <div class="rounded-4 overflow-hidden border shadow-sm">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Lap Splice vs Rebar Coupler Column Cage Visual Comparison" class="w-100 d-block" style="max-height: 430px; object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-5">
            <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-1 rounded-pill mb-2">VISUAL COMPARISON</span>
            <h3 class="fw-bold mb-3">Congested Lap Splice V/S Clean Coupler Cage</h3>
            <div class="p-3 rounded-3 mb-3" style="background: rgba(220, 38, 38, 0.06); border: 1px solid rgba(220, 38, 38, 0.2);">
              <h6 class="fw-bold text-danger mb-1"><i class="bi bi-x-circle-fill me-1"></i> Traditional 50D Lapping</h6>
              <p class="small text-secondary mb-0">Double bars at every joint choke concrete flow, cause honeycombing, and waste up to 2 meters of steel per joint.</p>
            </div>
            <div class="p-3 rounded-3 mb-3" style="background: rgba(5, 150, 105, 0.08); border: 1px solid rgba(5, 150, 105, 0.25);">
              <h6 class="fw-bold text-success mb-1"><i class="bi bi-check-circle-fill me-1"></i> Steelux Rebar Coupler</h6>
              <p class="small text-secondary mb-0">Single continuous bar profile with zero overlap waste, smooth concrete consolidation, and >100% bar break strength.</p>
            </div>
            <div class="text-center bg-light p-2 rounded-3 border">
              <img src="{{ asset('assets/process/column_cage_diagram.jpg') }}" alt="Column Cage Diagram" style="max-height: 120px; object-fit: contain;">
            </div>
          </div>
        </div>
      </div>

      <!-- 6 Visual Advantage Cards -->
      <div class="row g-4 mb-5">
        <!-- Advantage 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}" alt="Up to 80% Steel Cost Savings" class="visual-card-img" style="object-fit: contain; padding: 10px;">
              <span class="process-action-tag"><i class="bi bi-cash-stack text-success"></i> Save up to 80%</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Up to 80% Cost Savings</h4>
                <p class="text-secondary small mb-0">
                  Direct reduction in steel tonnage by eliminating 50D overlap steel wastage on every joint.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Lap Steel</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> High ROI</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Advantage 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="Fast Screw-In Installation" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-lightning-fill text-warning"></i> 30-Sec Joint</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Quick Screw-In Installation</h4>
                <p class="text-secondary small mb-0">
                  Two threaded rebars are joined in seconds using a simple wrench—no welding required.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> No Welding</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Easy Assembly</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Advantage 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}" alt="Better Concrete Flow in Column Cages" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-grid-3x3-gap-fill text-info"></i> Zero Congestion</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Better Concrete Flow</h4>
                <p class="text-secondary small mb-0">
                  Eliminates crowded double-bar lap zones for smooth aggregate pouring and vibration.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> No Honeycombing</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Clean Cage</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Advantage 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="100% Bar Break Tensile Strength" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-shield-shaded text-success"></i> >100% Strength</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">100% Bar Break Strength</h4>
                <p class="text-secondary small mb-0">
                  Delivers ultimate tensile strength higher than the parent TMT bar under cyclic seismic loads.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> IS 16172 Compliant</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Lab Tested</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Advantage 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="Faster Slab Cycle Times" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-stopwatch text-warning"></i> Fast Cycles</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Reduced Slab Cycle Times</h4>
                <p class="text-secondary small mb-0">
                  Pre-threaded and capped rebars are ready to screw in immediately, speeding up every floor tier.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Pre-Capped Bars</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Rapid Erection</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Advantage 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="Concentric Rebar Alignment" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-check-circle-fill text-info"></i> Coaxial Line</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Concentric Bar Alignment</h4>
                <p class="text-secondary small mb-0">
                  Maintains exact centerline continuity between upper and lower bars with zero offset stress.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Straight Load Path</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Seismic Safe</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Comparison Summary Table -->
      <div class="orin-card p-4 p-md-5 mb-4" data-aos="fade-up">
        <h3 class="fw-bold mb-3 text-center">Lap Splice V/S Steelux Mechanical Coupler</h3>
        <p class="text-secondary small text-center mb-3">Head-to-head structural &amp; cost comparison between traditional overlapping vs mechanical joint:</p>
        
        <div class="d-md-none table-scroll-hint">
          <i class="bi bi-arrows-expand text-primary"></i> <span>Swipe horizontally to view all comparison columns</span>
        </div>

        <div class="table-responsive-custom">
          <table class="table-custom table-sticky-col align-middle text-nowrap">
            <thead>
              <tr>
                <th style="min-width: 180px;">Feature / Parameter</th>
                <th class="text-danger" style="min-width: 220px;">Traditional Lap Joint</th>
                <th class="text-success" style="min-width: 260px;">Steelux Mechanical Coupler</th>
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
                <td class="text-danger">Slow wire binding &amp; manual tying</td>
                <td class="text-success fw-bold">Rapid 30-sec screw &amp; torque tightening</td>
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
