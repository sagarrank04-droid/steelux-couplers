@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Specs & <span class="text-gradient">Machinery Matrix</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        High-performance rebar processing machinery and comprehensive ISO metric coupler dimensional matrices (16mm to 40mm).
      </p>
    </div>
  </section>

  <!-- Products, Machinery & Technical Specifications -->
  <section class="py-5">
    <div class="container py-4">
      
      <!-- Bootstrap Nav Pills -->
      <div class="text-center mb-4" data-aos="fade-up">
        <ul class="nav nav-pills nav-pills-custom justify-content-center" id="techTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="parallel-tab" data-bs-toggle="pill" data-bs-target="#parallel-pane" type="button" role="tab">
              <i class="bi bi-gear-fill me-1"></i> Rebar Roll Parallel Thread Machine
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="forged-tab" data-bs-toggle="pill" data-bs-target="#forged-pane" type="button" role="tab">
              <i class="bi bi-hammer me-1"></i> Rebar Cold Forging Machine
            </button>
          </li>
        </ul>
      </div>

      <!-- Tab Content -->
      <div class="tab-content mb-5" id="techTabContent" data-aos="fade-up" data-aos-delay="150">
        
        <!-- Parallel Threaded Pane -->
        <div class="tab-pane fade show active" id="parallel-pane" role="tabpanel">
          <div class="orin-card p-4 p-md-5">
            <h4 class="fw-bold mb-3">Rebar Roll Parallel Threading System</h4>
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">1</div>
                  <h6 class="fw-bold mb-1">1. Peeling</h6>
                  <p class="text-secondary small mb-0">Ribbing is peeled uniformly to create a smooth concentric diameter.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">2</div>
                  <h6 class="fw-bold mb-1">2. Threading</h6>
                  <p class="text-secondary small mb-0">Cold-rolled ISO metric threads are machined under hydraulic pressure.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">3</div>
                  <h6 class="fw-bold mb-1">3. Mechanical Splicing</h6>
                  <p class="text-secondary small mb-0">Coupler is screwed to connect two rebars with 100% tensile strength.</p>
                </div>
              </div>
            </div>

            <h5 class="fw-bold text-dark mb-2">Parallel Threaded Couplers Technical Matrix</h5>
            <div class="d-md-none table-scroll-hint">
              <i class="bi bi-arrows-expand text-primary"></i> <span>Swipe horizontally to view all specs columns</span>
            </div>
            <div class="table-responsive-custom">
              <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
                <thead>
                  <tr>
                    <th class="text-start" style="min-width: 140px;">TMT Rebar Size</th>
                    <th style="min-width: 140px;">Coupler O.D. (mm)</th>
                    <th style="min-width: 150px;">Coupler Length (mm)</th>
                    <th style="min-width: 140px;">Coupler Pitch (mm)</th>
                    <th style="min-width: 150px;">Coupler Weight (kg)</th>
                    <th style="min-width: 160px;">Threading Standard</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td class="text-start text-primary fw-bold">16 mm</td><td>25 mm</td><td>42 mm</td><td>2.5 mm</td><td>0.080 kg</td><td>ISO Metric</td></tr>
                  <tr><td class="text-start text-primary fw-bold">20 mm</td><td>32 mm</td><td>52 mm</td><td>2.5 mm</td><td>0.180 kg</td><td>ISO Metric</td></tr>
                  <tr><td class="text-start text-primary fw-bold">25 mm</td><td>40 mm</td><td>62 mm</td><td>3.0 mm</td><td>0.350 kg</td><td>ISO Metric</td></tr>
                  <tr><td class="text-start text-primary fw-bold">32 mm</td><td>50 mm</td><td>78 mm</td><td>3.0 mm</td><td>0.670 kg</td><td>ISO Metric</td></tr>
                  <tr><td class="text-start text-primary fw-bold">36 mm</td><td>60 mm</td><td>86 mm</td><td>3.0 mm</td><td>1.170 kg</td><td>ISO Metric</td></tr>
                  <tr><td class="text-start text-primary fw-bold">40 mm</td><td>65 mm</td><td>96 mm</td><td>4.0 mm</td><td>1.350 kg</td><td>ISO Metric</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Cold Forged Pane -->
        <div class="tab-pane fade" id="forged-pane" role="tabpanel">
          <div class="orin-card p-4 p-md-5">
            <h4 class="fw-bold mb-3">Rebar Cold Forging &amp; Threading System</h4>
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">1</div>
                  <h6 class="fw-bold mb-1">1. Forging</h6>
                  <p class="text-secondary small mb-0">Bar end is enlarged via hydraulic cold forging to increase root area.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">2</div>
                  <h6 class="fw-bold mb-1">2. Threading</h6>
                  <p class="text-secondary small mb-0">ISO metric threads are machined directly onto the enlarged section.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="process-step-box p-3">
                  <div class="process-step-num" style="width:36px;height:36px;font-size:1rem;margin-bottom:0.75rem;">3</div>
                  <h6 class="fw-bold mb-1">3. Mechanical Splicing</h6>
                  <p class="text-secondary small mb-0">Cold forged coupler joins rebars, ensuring 100% parent bar rupture.</p>
                </div>
              </div>
            </div>

            <h5 class="fw-bold text-dark mb-2">Cold Forged Couplers Technical Matrix</h5>
            <div class="d-md-none table-scroll-hint">
              <i class="bi bi-arrows-expand text-primary"></i> <span>Swipe horizontally to view all specs columns</span>
            </div>
            <div class="table-responsive-custom">
              <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
                <thead>
                  <tr>
                    <th class="text-start" style="min-width: 140px;">TMT Rebar Size</th>
                    <th style="min-width: 140px;">Coupler O.D. (mm)</th>
                    <th style="min-width: 150px;">Coupler Length (mm)</th>
                    <th style="min-width: 140px;">Coupler Pitch (mm)</th>
                    <th style="min-width: 150px;">Coupler Weight (kg)</th>
                    <th style="min-width: 200px;">Joint Guarantee</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td class="text-start text-primary fw-bold">16 mm</td><td>25 mm</td><td>42 mm</td><td>2.5 mm</td><td>0.070 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                  <tr><td class="text-start text-primary fw-bold">20 mm</td><td>32 mm</td><td>52 mm</td><td>2.5 mm</td><td>0.160 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                  <tr><td class="text-start text-primary fw-bold">25 mm</td><td>40 mm</td><td>62 mm</td><td>3.0 mm</td><td>0.300 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                  <tr><td class="text-start text-primary fw-bold">32 mm</td><td>50 mm</td><td>78 mm</td><td>3.0 mm</td><td>0.600 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                  <tr><td class="text-start text-primary fw-bold">36 mm</td><td>60 mm</td><td>86 mm</td><td>3.0 mm</td><td>1.100 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                  <tr><td class="text-start text-primary fw-bold">40 mm</td><td>65 mm</td><td>96 mm</td><td>4.0 mm</td><td>1.250 kg</td><td>Parent Bar Break Guaranteed</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

      <!-- Mobilization Specs Banner -->
      <div class="orin-card p-3 p-sm-4 p-md-5" data-aos="fade-up">
        <div class="row align-items-center gy-3">
          <div class="col-lg-8">
            <h4 class="fw-bold mb-2">Need Machine Mobilization &amp; Site Setup?</h4>
            <p class="text-secondary mb-0 small" style="line-height: 1.6;">
              We mobilize machines with certified operators, tooling dies, Go/No-Go gauges, and on-site testing kits within <strong>5-10 days</strong> across India.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end pt-2 pt-lg-0">
            <a href="{{ route('contact') }}" class="btn btn-orin-primary btn-mobile-full">
              <i class="bi bi-truck"></i> Book Machine Deployment
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
