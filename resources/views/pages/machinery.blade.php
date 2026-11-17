@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Specs &amp; <span class="text-gradient">Machinery</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 620px;">
        Rebar threading &amp; cold forging machines with 16mm–40mm coupler specifications.
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
      <div class="tab-content mb-5" id="techTabContent" data-aos="fade-up" data-aos-delay="100">
        
        <!-- Parallel Threaded Pane -->
        <div class="tab-pane fade show active" id="parallel-pane" role="tabpanel">
          <div class="orin-card p-4 p-md-5">
            
            <div class="row g-4 align-items-center mb-4 pb-3 border-bottom">
              <div class="col-lg-5">
                <div class="row g-2">
                  <div class="col-12">
                    <div class="site-video-wrap rounded-3 border" style="height: 230px;">
                      <video class="site-video-player" src="{{ asset('assets/videos/live_rebar_threading_coupler.mp4') }}" poster="{{ asset('assets/process/step1_rebar_threading.jpg') }}" autoplay muted loop playsinline controls></video>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <img src="{{ asset('assets/process/machine_parallel_thread.jpg') }}" alt="Rebar Roll Parallel Thread Machine" class="machine-showcase-img" style="max-height: 145px;">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <h4 class="fw-bold mb-3">Rebar Roll Parallel Threading</h4>
                <div class="row g-3">
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_1_peeling.jpg') }}" alt="1. Peeling" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">1. Peeling</h6>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_2_threading.jpg') }}" alt="2. Threading" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">2. Threading</h6>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_parallel_3_splicing.jpg') }}" alt="3. Splicing" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">3. Splicing</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h5 class="fw-bold text-dark mb-2">Parallel Threaded Couplers Matrix</h5>
            <div class="table-responsive-custom">
              <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
                <thead>
                  <tr>
                    <th class="text-start">TMT Rebar Size</th>
                    <th>Coupler O.D. (mm)</th>
                    <th>Coupler Length (mm)</th>
                    <th>Coupler Pitch (mm)</th>
                    <th>Coupler Weight (kg)</th>
                    <th>Standard</th>
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
            
            <div class="row g-4 align-items-center mb-4 pb-3 border-bottom">
              <div class="col-lg-5">
                <div class="row g-2">
                  <div class="col-12">
                    <div class="site-video-wrap rounded-3 border" style="height: 230px;">
                      <video class="site-video-player" src="{{ asset('assets/videos/live_cold_forging_machine.mp4') }}" poster="{{ asset('assets/process/machine_cold_forging.jpg') }}" autoplay muted loop playsinline controls></video>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <img src="{{ asset('assets/process/machine_cold_forging.jpg') }}" alt="Rebar Cold Forging Machine" class="machine-showcase-img" style="max-height: 145px;">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <h4 class="fw-bold mb-3">Rebar Cold Forging &amp; Threading</h4>
                <div class="row g-3">
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_1_forging.jpg') }}" alt="1. Forging" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">1. Forging</h6>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_2_threading.jpg') }}" alt="2. Threading" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">2. Threading</h6>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="diagram-step-card">
                      <div class="diagram-step-img-wrap">
                        <img src="{{ asset('assets/process/diagram_cold_3_splicing.jpg') }}" alt="3. Splicing" class="diagram-step-img">
                      </div>
                      <h6 class="fw-bold mb-0">3. Splicing</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h5 class="fw-bold text-dark mb-2">Cold Forged Couplers Matrix</h5>
            <div class="table-responsive-custom">
              <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
                <thead>
                  <tr>
                    <th class="text-start">TMT Rebar Size</th>
                    <th>Coupler O.D. (mm)</th>
                    <th>Coupler Length (mm)</th>
                    <th>Coupler Pitch (mm)</th>
                    <th>Coupler Weight (kg)</th>
                    <th>Guarantee</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td class="text-start text-primary fw-bold">16 mm</td><td>25 mm</td><td>42 mm</td><td>2.5 mm</td><td>0.070 kg</td><td>100% Bar Break</td></tr>
                  <tr><td class="text-start text-primary fw-bold">20 mm</td><td>32 mm</td><td>52 mm</td><td>2.5 mm</td><td>0.160 kg</td><td>100% Bar Break</td></tr>
                  <tr><td class="text-start text-primary fw-bold">25 mm</td><td>40 mm</td><td>62 mm</td><td>3.0 mm</td><td>0.300 kg</td><td>100% Bar Break</td></tr>
                  <tr><td class="text-start text-primary fw-bold">32 mm</td><td>50 mm</td><td>78 mm</td><td>3.0 mm</td><td>0.600 kg</td><td>100% Bar Break</td></tr>
                  <tr><td class="text-start text-primary fw-bold">36 mm</td><td>60 mm</td><td>86 mm</td><td>3.0 mm</td><td>1.100 kg</td><td>100% Bar Break</td></tr>
                  <tr><td class="text-start text-primary fw-bold">40 mm</td><td>65 mm</td><td>96 mm</td><td>4.0 mm</td><td>1.250 kg</td><td>100% Bar Break</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

      <!-- On-Site 4-Step Execution Photos -->
      <div class="row g-4" data-aos="fade-up">
        <div class="col-xl-3 col-md-6">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="1. Rebar Threading" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">1. Rebar Threading</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step2_protective_cap.jpg') }}" alt="2. Protective End Cap" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">2. Protective End Cap</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="3. Joining 2 Rebars" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">3. Joining 2 Rebars</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="4. Final Wrench Lock" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-0">4. Final Wrench Lock</h6>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
