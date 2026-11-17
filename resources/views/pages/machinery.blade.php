@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Specs &amp; <span class="text-gradient">Machinery Matrix</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        High-performance rebar processing machinery, visual 3-stage threading diagrams, and ISO metric coupler dimensional matrices (16mm to 40mm).
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
            
            <!-- Machine Photo + Live Operation Showcase -->
            <div class="row g-4 align-items-center mb-4 pb-3 border-bottom">
              <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/process/machine_parallel_thread.jpg') }}" alt="Rebar Roll Parallel Thread Machine" class="machine-showcase-img shadow-sm">
                <div class="mt-2">
                  <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-1">Rebar Roll Parallel Threading Unit</span>
                </div>
              </div>
              <div class="col-lg-7">
                <h4 class="fw-bold mb-2">Rebar Roll Parallel Threading System</h4>
                <p class="text-secondary small mb-3">
                  High-speed hydraulic roll threading machine that peels surface ribs and cold-rolls ISO metric threads directly onto 16mm to 40mm TMT bars in seconds.
                </p>
                <div class="row g-3">
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_1_peeling.jpg') }}" alt="1. Peeling Rebar Ribs" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">1. Peeling</h6>
                      <p class="text-secondary small mb-0">Ribbing at bar end is peeled to a smooth cylinder.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_2_threading.jpg') }}" alt="2. Roll Threading ISO Metric" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">2. Threading</h6>
                      <p class="text-secondary small mb-0">Peeled end is roll-threaded to ISO metric pitch.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_3_splicing.jpg') }}" alt="3. Mechanical Splicing Coupler" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">3. Splicing</h6>
                      <p class="text-secondary small mb-0">Coupler connects both threaded rebars securely.</p>
                    </div>
                  </div>
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
            
            <!-- Cold Forging Machine Photo + 3 Diagram Cards -->
            <div class="row g-4 align-items-center mb-4 pb-3 border-bottom">
              <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/process/machine_cold_forging.jpg') }}" alt="Rebar Cold Forging Machine" class="machine-showcase-img shadow-sm">
                <div class="mt-2">
                  <span class="badge bg-info-subtle text-info fw-bold px-3 py-1">Hydraulic Rebar Cold Forging Unit</span>
                </div>
              </div>
              <div class="col-lg-7">
                <h4 class="fw-bold mb-2">Rebar Cold Forging &amp; Threading System</h4>
                <p class="text-secondary small mb-3">
                  Enlarges the rebar end diameter via hydraulic cold forging before cutting threads—increasing the core root area for heavy seismic zones.
                </p>
                <div class="row g-3">
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_1_forging.jpg') }}" alt="1. Cold Forging Bar End" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">1. Forging</h6>
                      <p class="text-secondary small mb-0">Bar end is enlarged by cold forging to boost diameter.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_2_threading.jpg') }}" alt="2. Threading Enlarged End" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">2. Threading</h6>
                      <p class="text-secondary small mb-0">Standard ISO metric threads cut onto enlarged end.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_3_splicing.jpg') }}" alt="3. Cold Forged Coupler Splice" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-1">3. Splicing</h6>
                      <p class="text-secondary small mb-0">Cold forged coupler joins bars with full rupture strength.</p>
                    </div>
                  </div>
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

      <!-- On-Site 4-Step Live Photo Execution Strip -->
      <div class="mb-5" data-aos="fade-up">
        <div class="text-center mb-4">
          <h3 class="fw-bold mb-1">Live On-Site Execution Process</h3>
          <p class="text-secondary small mb-0">How our operators thread, cap, and splice rebars on your construction site</p>
        </div>
        <div class="row g-4">
          <div class="col-xl-3 col-md-6">
            <div class="process-photo-card">
              <div class="process-photo-wrap">
                <span class="process-step-badge">Step 01</span>
                <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="Rebar Threading on Machine" class="process-photo-img">
              </div>
              <div class="process-photo-body">
                <h6 class="fw-bold text-dark mb-1">1. Threading on Machine</h6>
                <p class="text-secondary small mb-0">Cutting ISO metric threads on TMT bar end.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="process-photo-card">
              <div class="process-photo-wrap">
                <span class="process-step-badge">Step 02</span>
                <img src="{{ asset('assets/process/step2_protective_cap.jpg') }}" alt="Protective Plastic Thread Cap" class="process-photo-img">
              </div>
              <div class="process-photo-body">
                <h6 class="fw-bold text-dark mb-1">2. Protective End Cap</h6>
                <p class="text-secondary small mb-0">Fitting red plastic cap to protect threads.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="process-photo-card">
              <div class="process-photo-wrap">
                <span class="process-step-badge">Step 03</span>
                <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="Joining Two Rebars with Coupler" class="process-photo-img">
              </div>
              <div class="process-photo-body">
                <h6 class="fw-bold text-dark mb-1">3. Joining 2 Bars with Coupler</h6>
                <p class="text-secondary small mb-0">Screwing two rebars into one coupler.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="process-photo-card">
              <div class="process-photo-wrap">
                <span class="process-step-badge" style="background: linear-gradient(135deg, #059669, #10b981);">Step 04</span>
                <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="Final Wrench Tightening" class="process-photo-img">
              </div>
              <div class="process-photo-body">
                <h6 class="fw-bold text-dark mb-1">4. Final Wrench Lock</h6>
                <p class="text-secondary small mb-0">Tightening joint for 100% tensile lock.</p>
              </div>
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
              We mobilize machines with certified operators, tooling dies, Go/No-Go gauges, and protective thread caps within <strong>5-10 days</strong> across India.
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
