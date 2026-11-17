@extends('layouts.app')

@section('content')
  <!-- Hero Banner Section -->
  <header id="hero" class="hero-section hero-banner-bg">
    <div id="heroCouplerVideoWrap" class="hero-coupler-video-wrap" aria-hidden="true">
      <video id="heroBgVideo" class="hero-bg-video" autoplay muted loop playsinline></video>
      <canvas id="heroCouplerCanvas" class="hero-coupler-canvas"></canvas>
      <div class="hero-video-overlay"></div>
    </div>

    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-11 text-center" data-aos="fade-up" data-aos-duration="800">
          <h1 class="hero-title text-white text-center">
            Engineered For <span class="text-gradient">Maximum Strength</span> &amp; Zero Steel Wastage
          </h1>
          
          <p class="hero-lead text-center mx-auto d-none d-md-block" style="max-width: 720px;">
            Precision mechanical rebar couplers and on-site threading solutions. Save up to <strong class="text-white">80%</strong> on joint costs with 100% bar break strength.
          </p>

          <div class="hero-btn-group d-flex justify-content-center mb-0 mb-md-4">
            <a href="#visual-process" class="btn btn-orin-primary">
              <i class="bi bi-play-circle-fill"></i> See Process
            </a>
            <a href="{{ route('contact') }}" class="btn btn-orin-crimson">
              <i class="bi bi-chat-dots-fill"></i> Get in Touch
            </a>
          </div>

          <div class="hero-stats-box hero-stats-glass mx-auto d-none d-md-block" style="max-width: 980px;">
            <div class="row g-2 text-center">
              <div class="col-6 col-sm-3 stat-item">
                <div class="stat-number">> 100%</div>
                <div class="stat-label text-white-50">Bar Break Strength</div>
              </div>
              <div class="col-6 col-sm-3 stat-item">
                <div class="stat-number">Up to 80%</div>
                <div class="stat-label text-white-50">Joint Cost Saved</div>
              </div>
              <div class="col-6 col-sm-3 stat-item">
                <div class="stat-number">15+ Iconic</div>
                <div class="stat-label text-white-50">Towers Supplied</div>
              </div>
              <div class="col-6 col-sm-3 stat-item">
                <div class="stat-number">16-40mm</div>
                <div class="stat-label text-white-50">Rebar Diameters</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- 4-Step Splicing Process (Photos + Live Videos) -->
  <section id="visual-process" class="py-5">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Rebar Threading &amp; Coupler Splicing Process</h2>
        <p class="text-secondary mb-0">4-step on-site mechanical splicing workflow</p>
      </div>

      <!-- 4-Step Clean Photo Cards (Minimal Text, No Floating Tags) -->
      <div class="row g-4 mb-5">
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="1. Rebar End Threading" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">1. Rebar Threading</h6>
              <small class="text-secondary">Cutting threads on TMT bar end</small>
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
              <small class="text-secondary">Plastic cap protects fresh threads</small>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="3. Joining 2 Bars with Coupler" class="process-photo-img">
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
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="4. Final Wrench Tightening" class="process-photo-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold text-dark mb-1">4. Final Wrench Lock</h6>
              <small class="text-secondary">Tightening for 100% joint strength</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Live On-Site Videos (No Red Floating Tags, Minimal Captions) -->
      <div class="mb-5" data-aos="fade-up">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <h4 class="fw-bold text-dark mb-0">On-Site Process Videos</h4>
          <a href="{{ route('machinery') }}" class="btn btn-sm btn-orin-secondary">
            View Machines &amp; Specs <i class="bi bi-arrow-right"></i>
          </a>
        </div>

        <div class="row g-4">
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

      <!-- 4-View 3D Thread & Cutaway Strip -->
      <div class="row g-3" data-aos="fade-up">
        <div class="col-6 col-md-3">
          <div class="coupler-render-card">
            <img src="{{ asset('assets/process/coupler_3d_1.jpg') }}?v=5" alt="Internal ISO Metric Threads" class="coupler-render-img">
            <div class="p-2 text-center bg-light border-top">
              <small class="fw-bold text-dark">1. Internal Threads</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="coupler-render-card">
            <img src="{{ asset('assets/process/coupler_3d_3.jpg') }}?v=5" alt="First Bar Screwed In" class="coupler-render-img">
            <div class="p-2 text-center bg-light border-top">
              <small class="fw-bold text-dark">2. First Bar Engaged</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="coupler-render-card">
            <img src="{{ asset('assets/process/coupler_3d_2.jpg') }}?v=5" alt="Both Rebars Connected" class="coupler-render-img">
            <div class="p-2 text-center bg-light border-top">
              <small class="fw-bold text-dark">3. Full 2-Bar Joint</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="coupler-render-card">
            <img src="{{ asset('assets/process/coupler_3d_4.jpg') }}?v=5" alt="Cutaway Cross Section" class="coupler-render-img">
            <div class="p-2 text-center bg-light border-top">
              <small class="fw-bold text-dark">4. Cross-Section Lock</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Services Section (Clean Photos, Minimal Text) -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Our Core Services</h2>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}?v=5" alt="Infrastructure Solutions" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">Infrastructure Solutions</h5>
              <small class="text-secondary d-block mb-2">High-tensile couplers for towers &amp; bridges</small>
              <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">View Details <i class="bi bi-arrow-right"></i></a>
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
              <small class="text-secondary d-block mb-2">16mm to 40mm ISO metric couplers</small>
              <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">View Details <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="On-Site Mobilization" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h5 class="fw-bold mb-1">On-Site Mobilization</h5>
              <small class="text-secondary d-block mb-2">Threading machines &amp; operators at your site</small>
              <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">View Details <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visual Comparison: Lap Splice vs Rebar Coupler -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Traditional Lap Joint V/S Rebar Coupler</h2>
      </div>

      <div class="orin-card p-3 p-md-4 mb-4" data-aos="zoom-in">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <div class="rounded-4 overflow-hidden border">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Lap Splice vs Rebar Coupler" class="w-100 d-block" style="max-height: 390px; object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-5">
            <div class="p-3 rounded-3 mb-3" style="background: rgba(220, 38, 38, 0.06); border: 1px solid rgba(220, 38, 38, 0.2);">
              <h6 class="fw-bold text-danger mb-1"><i class="bi bi-x-circle-fill me-1"></i> Traditional 50D Lap Splice</h6>
              <small class="text-secondary d-block">High steel wastage &amp; congested column cage.</small>
            </div>

            <div class="p-3 rounded-3 mb-3" style="background: rgba(5, 150, 105, 0.08); border: 1px solid rgba(5, 150, 105, 0.25);">
              <h6 class="fw-bold text-success mb-1"><i class="bi bi-check-circle-fill me-1"></i> Steelux Rebar Coupler</h6>
              <small class="text-secondary d-block">Up to 80% cost saving, zero waste &amp; 100% bar break strength.</small>
            </div>

            <div class="d-flex flex-wrap gap-2">
              <a href="{{ route('advantages') }}" class="btn btn-orin-primary btn-sm">
                Comparison Table
              </a>
              <a href="{{ route('calculator') }}" class="btn btn-orin-secondary btn-sm">
                Calculate Savings
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="100% Bar Break Tested" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold mb-0">100% Bar Break Tested</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}?v=5" alt="16mm to 40mm Sizes" class="visual-card-img" style="object-fit: contain; padding: 10px;">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold mb-0">16mm to 40mm Coupler Range</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="150">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_2.jpg') }}?v=5" alt="Zero Cage Congestion" class="visual-card-img">
            </div>
            <div class="p-3 text-center">
              <h6 class="fw-bold mb-0">Zero Column Cage Congestion</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive ROI Calculator Section -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Cost Comparison: Lapping V/S Coupler</h2>
      </div>

      <div class="calc-wrapper mb-4" data-aos="zoom-in" data-aos-duration="700">
        <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-4 border-bottom">
          <div class="calc-type-tabs" role="tablist" aria-label="Coupler Type">
            <button type="button" class="btn-coupler-type active" data-coupler-type="parallel">
              <i class="bi bi-gear-wide-connected"></i> Parallel Threaded
            </button>
            <button type="button" class="btn-coupler-type" data-coupler-type="cold_forged">
              <i class="bi bi-hammer"></i> Cold Forged
            </button>
          </div>
          <button type="button" id="resetCalcBtn" class="btn btn-sm btn-outline-secondary fw-semibold">
            <i class="bi bi-arrow-counterclockwise"></i> Clear Inputs
          </button>
        </div>

        <div class="row g-4 align-items-stretch">
          <div class="col-lg-6">
            <div class="calc-panel-box h-100">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="fw-bold text-dark mb-0">
                  <i class="bi bi-sliders text-primary me-1"></i> Input Parameters
                </h5>
                <span class="badge bg-light text-secondary border" id="activeCouplerTypeBadge">Parallel Threaded</span>
              </div>

              <div class="calc-steel-rate-row mb-3">
                <label for="steelRateInput" class="fw-bold text-dark mb-0">Steel Rate :</label>
                <div class="calc-rate-input-group">
                  <span class="calc-unit-prefix">₹</span>
                  <input type="number" id="steelRateInput" class="calc-number-input" value="56" min="1" step="0.5" placeholder="56">
                  <span class="calc-unit-suffix">per kg</span>
                </div>
              </div>

              <div class="calc-joints-list">
                <div class="calc-joints-header d-flex justify-content-between text-muted small fw-bold text-uppercase pb-2 mb-2 border-bottom">
                  <span>Rebar Diameter (mm)</span>
                  <span>No. of Joints</span>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_16" class="calc-joint-label">
                    <span class="mm-badge">16 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_16" class="calc-joint-input" data-size="16" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_20" class="calc-joint-label">
                    <span class="mm-badge">20 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_20" class="calc-joint-input" data-size="20" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_25" class="calc-joint-label">
                    <span class="mm-badge">25 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_25" class="calc-joint-input" data-size="25" value="1000" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_32" class="calc-joint-label">
                    <span class="mm-badge">32 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_32" class="calc-joint-input" data-size="32" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_36" class="calc-joint-label">
                    <span class="mm-badge">36 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_36" class="calc-joint-input" data-size="36" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_40" class="calc-joint-label">
                    <span class="mm-badge">40 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_40" class="calc-joint-input" data-size="40" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="calc-output-panel h-100 d-flex flex-column justify-content-between">
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-graph-up-arrow text-success me-1"></i> Output Summary
                  </h5>
                  <span class="badge bg-primary-subtle text-primary fw-bold" id="totalJointsBadge">1,000 Total Joints</span>
                </div>

                <div class="calc-output-box calc-output-y mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-y">y</span>
                      <span class="fw-bold text-dark">Total Amount Lapping</span>
                      <small class="d-block text-secondary mt-1">Standard 50D overlap length</small>
                    </div>
                    <div class="calc-output-amount text-danger" id="steelWastageCost">₹2,71,040</div>
                  </div>
                </div>

                <div class="calc-output-box calc-output-x mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-x">x</span>
                      <span class="fw-bold text-dark">Total Cost Using M. Couplers</span>
                      <small class="d-block text-secondary mt-1">Coupler + 2-End Threading Cost</small>
                    </div>
                    <div class="calc-output-amount text-primary" id="couplerJointCost">₹80,000</div>
                  </div>
                </div>
              </div>

              <div class="savings-card mt-2">
                <div class="row g-3 align-items-center">
                  <div class="col-sm-6 text-center text-sm-start border-end-sm">
                    <small class="text-uppercase text-success fw-bold d-block mb-1">
                      % Saving <span class="badge bg-white text-success border ms-1 font-monospace">(y - x) / y</span>
                    </small>
                    <div class="savings-total" id="percentSavedBadge">70.48%</div>
                  </div>
                  <div class="col-sm-6 text-center text-sm-end">
                    <small class="text-uppercase text-success fw-bold d-block mb-1">
                      Net Saving <span class="font-monospace">(y - x)</span>
                    </small>
                    <div class="fw-bolder text-success fs-3 font-monospace" id="totalSavings">₹1,91,040</div>
                    <small class="text-secondary fw-semibold d-block mt-1" id="steelWeightSaved">4,840 kg Steel Saved</small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Customers & Landmark Projects Showcase -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">Our Clients &amp; Landmark Projects</h2>
      </div>

      <div class="marquee-container mb-5" data-aos="fade-up">
        <div class="marquee-content">
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_anthem.jpg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_alok.jpg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_dwarkesh.jpg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_varni.jpg') }}" alt="Varni Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Varni Infra</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_shivanta.jpg') }}" alt="Shivanta Group" class="client-logo-img"></div>
            <div class="client-brand-title">Shivanta Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_fifad.jpg') }}" alt="Fifad Group" class="client-logo-img"></div>
            <div class="client-brand-title">Fifad Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_nilkanth.jpg') }}" alt="Nilkanth Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Nilkanth Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_ananta.jpg') }}" alt="Ananta Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Ananta Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_sahajanand.jpg') }}" alt="Sahajanand Group" class="client-logo-img"></div>
            <div class="client-brand-title">Sahajanand Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_atmiya.jpg') }}" alt="Atmiya Group" class="client-logo-img"></div>
            <div class="client-brand-title">Atmiya Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_satyam.jpg') }}" alt="Satyam Group" class="client-logo-img"></div>
            <div class="client-brand-title">Satyam Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_amideep.jpg') }}" alt="Amideep Group" class="client-logo-img"></div>
            <div class="client-brand-title">Amideep Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_bhagat.jpg') }}" alt="Bhagat Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Bhagat Infraprojects</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_tapi.jpg') }}" alt="Tapi Realty" class="client-logo-img"></div>
            <div class="client-brand-title">Tapi Realty</div>
          </div>
          <!-- Seamless Loop Duplicates -->
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_anthem.jpg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_alok.jpg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_dwarkesh.jpg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
          </div>
        </div>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_prism_luxuria.jpg') }}" alt="Prism Luxuria" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Prism Luxuria</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_anthem_arica.jpg') }}" alt="Anthem Arica" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Anthem Arica</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_vishwa_99.jpg') }}" alt="Vishwa 99" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Vishwa 99</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_antaara_sky.jpg') }}" alt="Antaara Sky" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Antaara Sky</h6>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="{{ route('projects') }}" class="btn btn-orin-primary">
          View All 15 Projects
        </a>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="{{ asset('js/coupler-hero-video.js') }}"></script>
@endpush
