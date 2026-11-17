@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Our <span class="text-gradient">Core Services &amp; Process</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Visual step-by-step on-site rebar threading, protective capping, coupler splicing, and precision CNC manufacturing.
      </p>
    </div>
  </section>

  <!-- 4-Step Visual Process Section -->
  <section class="py-5" style="background: var(--bg-section-alt); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3">
      <div class="section-header text-center" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill mb-2">
          <i class="bi bi-camera-fill me-1"></i> LIVE ON-SITE WORKFLOW
        </span>
        <h2 class="section-title">4-Step Rebar Threading &amp; Coupler Splicing Process</h2>
        <p class="text-secondary mb-0">
          From cutting threads on TMT bars to placing protective end caps and joining two rebars together on site.
        </p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-1-circle-fill"></i> Step 01</span>
              <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="Worker cutting threads on TMT rebar" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-gear-wide-connected text-info"></i> Threading</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">1. Rebar End Threading</h5>
                <p class="text-secondary small mb-0">
                  Skilled operator peels ribs and rolls ISO metric threads onto the TMT steel bar using our hydraulic threading machine.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> ISO Metric Pitch</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 16mm–40mm</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-2-circle-fill"></i> Step 02</span>
              <img src="{{ asset('assets/process/step2_protective_cap.jpg') }}" alt="Worker fitting red protective plastic cap on threaded rebar" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-shield-fill-check text-warning"></i> Cap Protection</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">2. Protective End Cap</h5>
                <p class="text-secondary small mb-0">
                  Protective red plastic cap is fitted onto the freshly threaded rebar end to keep threads clean and undamaged.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Dust &amp; Rust Proof</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Thread Safety</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-3-circle-fill"></i> Step 03</span>
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="Workers joining two TMT rebars with mechanical coupler" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-link-45deg text-info"></i> 2-Bar Joining</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">3. Joining 2 Bars with Coupler</h5>
                <p class="text-secondary small mb-0">
                  Cap is removed and the two threaded TMT rebars are screwed together into the Steelux coupler in the column cage.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Fast Screw-In</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Coaxial Joint</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge" style="background: linear-gradient(135deg, #059669, #10b981);"><i class="bi bi-4-circle-fill"></i> Step 04</span>
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="Torque wrench locking the rebar coupler joint" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-patch-check-fill text-success"></i> 100% Locked</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">4. Wrench Lock &amp; Inspection</h5>
                <p class="text-secondary small mb-0">
                  Coupler is wrench-tightened to lock both rebars with 100% continuous bar-break tensile strength.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> >100% Bar Break</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Congestion</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed 6 Visual Services Grid -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">End-to-End Splicing &amp; Engineering Services</h2>
        <p class="text-secondary">
          Complete manufacturing, on-site machine deployment, and testing solutions for high-rise &amp; infrastructure projects.
        </p>
      </div>

      <div class="row g-4 mb-5">
        <!-- Service 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}" alt="High-Rise Infrastructure Rebar Couplers" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-building text-info"></i> High-Rise &amp; Infra</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Infrastructure Solutions</h4>
                <p class="text-secondary small mb-2">
                  Certified high-tensile couplers engineered for high-rise towers, metro rails, and bridge piers.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Concentric Load</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero 50D Lap Waste</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 16mm–40mm Bars</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="CNC Coupler Manufacturing Plant Surat" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-gear-wide-connected text-warning"></i> Factory Direct</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Manufacturer &amp; Wholesaler</h4>
                <p class="text-secondary small mb-2">
                  Precision Parallel Threaded &amp; Cold Forged couplers machined on CNC lathes with strict tolerance.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> High Volume Stock</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> ISO Metric Thread</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Wholesale Rates</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="On-Site Rebar Threading Machine Mobilization" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-truck text-success"></i> 5–10 Days Setup</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">On-Site Machine Mobilization</h4>
                <p class="text-secondary small mb-2">
                  Rapid site deployment of threading machines with certified operators and Go/No-Go ring gauges.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 5–10 Day Dispatch</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Skilled Operators</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Downtime</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/protective_end_caps.jpg') }}" alt="Protective Plastic Thread End Caps" class="visual-card-img" style="background: #ffffff; object-fit: contain; padding: 12px;">
              <span class="process-action-tag"><i class="bi bi-shield-check text-danger"></i> Thread Protection</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Rebar Capping &amp; Processing</h4>
                <p class="text-secondary small mb-2">
                  Rib peeling, cold-roll threading, and heavy-duty protective plastic end caps for all rebar sizes.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Plastic End Caps</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Rust Protection</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> High Output</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="UTM Tensile Pull Testing Lab" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-clipboard2-pulse text-info"></i> Lab Certified</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Tensile Testing &amp; Quality Lab</h4>
                <p class="text-secondary small mb-2">
                  UTM tensile pull testing and IS 16172 compliance verification with consultant-approved reports.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 100% Bar Break</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Batch Test Reports</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> IS 16172 Ready</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Lap vs Coupler Steel Savings Audit" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-calculator text-warning"></i> Up to 80% Saved</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Project Estimation &amp; ROI Audit</h4>
                <p class="text-secondary small mb-2">
                  Structural BBS analysis to calculate exact steel tonnage saved by replacing 50D lap joints.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Free Steel Audit</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Tonnage Report</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Up to 80% Savings</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Action Banner -->
      <div class="orin-card p-4 p-md-5 text-center" data-aos="zoom-in">
        <h3 class="fw-bold mb-2">Need Machine Mobilization on Your Active Site?</h3>
        <p class="text-secondary mb-4 mx-auto" style="max-width: 650px;">
          Deploy Steelux high-speed parallel threading and cold forging machines with expert technicians within 5-10 days anywhere in India.
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
