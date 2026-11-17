@extends('layouts.app')

@section('content')
  <!-- Hero Banner Section (Full-Bleed Viewport Banner with 3D Rotating Mechanical Coupler Video Background) -->
  <header id="hero" class="hero-section hero-banner-bg">
    <!-- Responsive 3D Rotating Mechanical Coupler Video Background (Mobile & Desktop) -->
    <div id="heroCouplerVideoWrap" class="hero-coupler-video-wrap" aria-hidden="true">
      <video id="heroBgVideo" class="hero-bg-video" autoplay muted loop playsinline></video>
      <canvas id="heroCouplerCanvas" class="hero-coupler-canvas"></canvas>
      <div class="hero-video-overlay"></div>
    </div>

    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        
        <!-- Hero Content Column (Centered) -->
        <div class="col-12 col-xl-11 text-center" data-aos="fade-up" data-aos-duration="800">
          
          <!-- Hero Headline (Single Line, Centered) -->
          <h1 class="hero-title text-white text-center">
            Engineered For <span class="text-gradient">Maximum Strength</span> &amp; Zero Steel Wastage
          </h1>
          
          <!-- Enriched Description (Centered - Desktop/Tablet Only for Clean Mobile View) -->
          <p class="hero-lead text-center mx-auto d-none d-md-block" style="max-width: 820px;">
            India's trusted pioneer in precision rebar couplers and on-site threading technology. Replace congested lap joints with 100% full-strength mechanical connections and reduce joint costs by up to <strong class="text-white">80%</strong>.
          </p>

          <!-- Hero Action Buttons (Centered) -->
          <div class="hero-btn-group d-flex justify-content-center mb-0 mb-md-4">
            <a href="#visual-process" class="btn btn-orin-primary">
              <i class="bi bi-images"></i> See How It Works
            </a>
            <a href="{{ route('contact') }}" class="btn btn-orin-crimson">
              <i class="bi bi-chat-dots-fill"></i> Get in Touch
            </a>
          </div>

          <!-- Hero Metrics Grid (Translucent Glassmorphism, Centered - Desktop/Tablet Only) -->
          <div class="hero-stats-box hero-stats-glass mx-auto d-none d-md-block" style="max-width: 980px;">
            <div class="row g-2 text-center">
              <div class="col-6 col-sm-3 stat-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-number">> 100%</div>
                <div class="stat-label text-white-50">Bar Break Strength</div>
              </div>
              <div class="col-6 col-sm-3 stat-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-number">Up to 80%</div>
                <div class="stat-label text-white-50">Joint Cost Saved</div>
              </div>
              <div class="col-6 col-sm-3 stat-item" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-number">15+ Iconic</div>
                <div class="stat-label text-white-50">Towers Supplied</div>
              </div>
              <div class="col-6 col-sm-3 stat-item" data-aos="zoom-in" data-aos-delay="500">
                <div class="stat-number">16-40mm</div>
                <div class="stat-label text-white-50">Rebar Diameters</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- 4-Step Live On-Site Splicing Visual Process -->
  <section id="visual-process" class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill mb-2">
          <i class="bi bi-camera-fill me-1"></i> STEP-BY-STEP ON-SITE VISUAL PROCESS
        </span>
        <h2 class="section-title">How Rebar Threading &amp; Coupler Splicing Works</h2>
        <p class="text-secondary mb-0">
          See our complete 4-step on-site mechanical splicing process—from cutting threads on the rebar to capping and joining two bars together.
        </p>
      </div>

      <!-- 4-Step Real Site Photo Cards -->
      <div class="row g-4 mb-5">
        <!-- Step 1: Rebar Threading -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-1-circle-fill"></i> Step 01</span>
              <img src="{{ asset('assets/process/step1_rebar_threading.jpg') }}" alt="Worker cutting threads on TMT rebar with threading machine" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-gear-wide-connected text-info"></i> Thread Cutting</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">1. Rebar End Threading</h5>
                <p class="text-secondary small mb-0">
                  Operator peels ribs and rolls precision ISO metric threads on the TMT bar end using an on-site threading machine.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 16mm–40mm Bars</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 30 Sec / Thread</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 2: Protective Cap -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-2-circle-fill"></i> Step 02</span>
              <img src="{{ asset('assets/process/step2_protective_cap.jpg') }}" alt="Worker placing red protective plastic cap on threaded rebar" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-shield-fill-check text-warning"></i> Thread Cap</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">2. Protective End Cap</h5>
                <p class="text-secondary small mb-0">
                  Immediately after threading, a protective plastic cap is placed over the threads to prevent dust, rust, and site damage.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Thread Damage</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Dust &amp; Rust Proof</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 3: Joining 2 Rebars with Coupler -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge"><i class="bi bi-3-circle-fill"></i> Step 03</span>
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="Workers joining two vertical TMT rebars using a Steelux mechanical coupler" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-link-45deg text-info"></i> 2-Bar Joining</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">3. Joining 2 Bars with Coupler</h5>
                <p class="text-secondary small mb-0">
                  Cap is removed and the second TMT rebar is screwed directly into the coupler attached to the first bar in the column cage.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Easy Screw-In</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Perfect Alignment</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 4: Wrench Tightening & Final Lock -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="process-photo-card">
            <div class="process-photo-wrap">
              <span class="process-step-badge" style="background: linear-gradient(135deg, #059669, #10b981);"><i class="bi bi-4-circle-fill"></i> Step 04</span>
              <img src="{{ asset('assets/process/step4_torque_tightening.jpg') }}" alt="Engineer tightening completed rebar coupler joint with torque wrench" class="process-photo-img">
              <span class="process-action-tag"><i class="bi bi-patch-check-fill text-success"></i> 100% Locked</span>
            </div>
            <div class="process-photo-body">
              <div>
                <h5 class="fw-bold text-dark mb-2">4. Wrench Lock &amp; Full Strength</h5>
                <p class="text-secondary small mb-0">
                  Joint is tightened with a wrench—delivering 100% parent bar break strength with zero 50D overlap steel waste.
                </p>
              </div>
              <div class="visual-pill-group">
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> >100% Bar Break</span>
                <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Steel Waste</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 4-View 3D Internal Thread & Cutaway Strip -->
      <div class="orin-card p-3 p-md-4" data-aos="fade-up">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <div>
            <h5 class="fw-bold text-dark mb-0"><i class="bi bi-box-seam text-primary me-1"></i> Inside the Coupler: 3D Thread &amp; Cross-Section View</h5>
            <small class="text-secondary">See how internal ISO metric threads engage both rebars at the center stop for 100% load transfer</small>
          </div>
          <a href="{{ route('machinery') }}" class="btn btn-sm btn-orin-secondary">
            View Specs &amp; Machines <i class="bi bi-arrow-right"></i>
          </a>
        </div>
        <div class="row g-3">
          <div class="col-6 col-md-3">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/coupler_3d_1.jpg') }}" alt="Internal ISO Metric Thread Alignment" class="coupler-render-img">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark d-block">1. Internal ISO Threads</small>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/coupler_3d_3.jpg') }}" alt="First Bar Screwed to Center Stop" class="coupler-render-img">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark d-block">2. Half-Way Bar Engagement</small>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/coupler_3d_2.jpg') }}" alt="Both Rebars Connected Concentrically" class="coupler-render-img">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark d-block">3. Full 2-Bar Spliced Joint</small>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/coupler_3d_4.jpg') }}" alt="Cutaway Cross Section of Coupler" class="coupler-render-img">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark d-block">4. Cutaway Thread Lock</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Services Section with Visual Photos -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Our Core Services</h2>
        <p class="text-secondary">
          Complete end-to-end mechanical rebar splicing, factory manufacturing, and on-site threading machine mobilization.
        </p>
      </div>

      <div class="row g-4 mb-2">
        <!-- Service 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}" alt="High-Rise Infrastructure Rebar Coupler Cage" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-building text-info"></i> High-Rise &amp; Infra</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Infrastructure Solutions</h4>
                <p class="text-secondary small mb-2">
                  High-tensile couplers installed across high-rise columns, metro rails, and bridges to eliminate lap congestion.
                </p>
              </div>
              <div>
                <div class="visual-pill-group mb-3">
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Zero Lap Waste</span>
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Smooth Concrete Flow</span>
                </div>
                <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Explore Service <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="CNC Rebar Coupler Manufacturing Facility Surat" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-gear-wide-connected text-warning"></i> CNC Factory</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">Manufacturer &amp; Wholesaler</h4>
                <p class="text-secondary small mb-2">
                  Precision CNC-machined Parallel Threaded &amp; Cold Forged couplers with ISO metric threads from 16mm to 40mm.
                </p>
              </div>
              <div>
                <div class="visual-pill-group mb-3">
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> 16mm–40mm Ready Stock</span>
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> ISO Certified</span>
                </div>
                <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Explore Service <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="On-Site Rebar Threading Machine Mobilization and Inspection" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-truck text-success"></i> 5–10 Days Setup</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h4 class="fw-bold mb-2">On-Site Mobilization</h4>
                <p class="text-secondary small mb-2">
                  Rapid site deployment of threading machines, red thread caps, Go/No-Go gauges, and skilled operators.
                </p>
              </div>
              <div>
                <div class="visual-pill-group mb-3">
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> Trained Operators</span>
                  <span class="visual-pill"><i class="bi bi-check-circle-fill"></i> On-Site Threading</span>
                </div>
                <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Explore Service <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visual Comparison: Lap Splice vs Rebar Coupler + Key Benefits -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <span class="badge bg-danger-subtle text-danger fw-bold px-3 py-2 rounded-pill mb-2">
          <i class="bi bi-eye-fill me-1"></i> SEE THE DIFFERENCE INSTANTLY
        </span>
        <h2 class="section-title">Traditional Lap Joint V/S Steelux Rebar Coupler</h2>
        <p class="text-secondary">
          Why waste 50D extra overlap steel and choke column cages when one compact coupler connects two rebars directly?
        </p>
      </div>

      <!-- Visual Side-by-Side Comparison Showcase -->
      <div class="orin-card p-3 p-md-4 mb-5" data-aos="zoom-in">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <div class="rounded-4 overflow-hidden border shadow-sm">
              <img src="{{ asset('assets/process/lap_vs_coupler_visual.jpg') }}" alt="Side by Side Visual Comparison: Congested Lap Splice vs Clean Steelux Rebar Coupler Cage" class="w-100 d-block" style="max-height: 420px; object-fit: cover;">
            </div>
          </div>
          <div class="col-lg-5">
            <div class="p-3 rounded-3 mb-3" style="background: rgba(220, 38, 38, 0.06); border: 1px solid rgba(220, 38, 38, 0.2);">
              <h6 class="fw-bold text-danger mb-2"><i class="bi bi-x-circle-fill me-1"></i> Left: Obsolete 50D Lap Splice</h6>
              <ul class="list-unstyled small text-secondary mb-0 d-flex flex-column gap-1">
                <li><i class="bi bi-dash-circle text-danger me-1"></i> Double overlapping bars waste 1.2m to 2.0m steel per joint</li>
                <li><i class="bi bi-dash-circle text-danger me-1"></i> Heavy cage congestion blocks concrete aggregate flow</li>
                <li><i class="bi bi-dash-circle text-danger me-1"></i> Slow manual binding wire tying &amp; eccentric load transfer</li>
              </ul>
            </div>

            <div class="p-3 rounded-3 mb-3" style="background: rgba(5, 150, 105, 0.08); border: 1px solid rgba(5, 150, 105, 0.25);">
              <h6 class="fw-bold text-success mb-2"><i class="bi bi-check-circle-fill me-1"></i> Right: Steelux Mechanical Coupler</h6>
              <ul class="list-unstyled small text-secondary mb-0 d-flex flex-column gap-1">
                <li><i class="bi bi-check2-circle text-success me-1"></i> <strong>Up to 80% Cost Saved</strong> — Zero 50D overlap steel wasted</li>
                <li><i class="bi bi-check2-circle text-success me-1"></i> <strong>Clean Column Cage</strong> — Easy concrete pouring &amp; compaction</li>
                <li><i class="bi bi-check2-circle text-success me-1"></i> <strong>>100% Bar Break Strength</strong> — Certified under tensile pull test</li>
              </ul>
            </div>

            <div class="d-flex flex-wrap gap-2">
              <a href="{{ route('advantages') }}" class="btn btn-orin-primary btn-sm">
                <i class="bi bi-table"></i> Full Comparison Matrix
              </a>
              <a href="{{ route('calculator') }}" class="btn btn-orin-secondary btn-sm">
                <i class="bi bi-calculator"></i> Calculate Savings
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 3 Visual Proof Cards: Lab Tested, Full Size Lineup, Protective Caps -->
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/tensile_testing_lab.jpg') }}" alt="Tensile Pull Testing in Quality Lab" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-award-fill text-warning"></i> IS 16172 Tested</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h5 class="fw-bold mb-1">100% Parent Bar Break Proof</h5>
                <p class="text-secondary small mb-0">
                  Under UTM tensile testing, failure always occurs in the parent TMT bar—never inside the Steelux coupler.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="visual-card">
            <div class="visual-card-img-wrap" style="background: #ffffff;">
              <img src="{{ asset('assets/process/couplers_size_lineup.jpg') }}" alt="16mm to 40mm Steelux Rebar Couplers Lineup" class="visual-card-img" style="object-fit: contain; padding: 10px;">
              <span class="process-action-tag"><i class="bi bi-rulers text-info"></i> 16mm to 40mm</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h5 class="fw-bold mb-1">Full Diameter Range</h5>
                <p class="text-secondary small mb-0">
                  Heavy-duty EN8D / C45 carbon steel couplers for 16mm, 20mm, 25mm, 32mm, 36mm, and 40mm TMT bars.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <div class="visual-card">
            <div class="visual-card-img-wrap">
              <img src="{{ asset('assets/process/site_column_couplers_2.jpg') }}" alt="Dense Column Cage Connected with Rebar Couplers" class="visual-card-img">
              <span class="process-action-tag"><i class="bi bi-grid-3x3-gap-fill text-success"></i> Zero Congestion</span>
            </div>
            <div class="visual-card-body">
              <div>
                <h5 class="fw-bold mb-1">Faster Slab &amp; Column Cycles</h5>
                <p class="text-secondary small mb-0">
                  Concentric alignment eliminates bar crowding in heavy shear walls and high-rise columns.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive ROI Calculator Section -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Cost Comparison: Lapping V/S Coupler</h2>
        <p class="text-secondary">
          Evaluate instant project savings with our interactive calculator.
        </p>
      </div>

      <!-- Interactive Multi-Diameter Calculator Card -->
      <div class="calc-wrapper mb-4" data-aos="zoom-in" data-aos-duration="700">
        <!-- Top Coupler Type Toggle: Parallel vs Cold Forged -->
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
          
          <!-- Left Column: Inputs (Steel Rate + Multiple MM Joint Counts) -->
          <div class="col-lg-6">
            <div class="calc-panel-box h-100">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="fw-bold text-dark mb-0">
                  <i class="bi bi-sliders text-primary me-1"></i> Input Parameters
                </h5>
                <span class="badge bg-light text-secondary border" id="activeCouplerTypeBadge">Parallel Threaded</span>
              </div>

              <!-- Steel Rate Input -->
              <div class="calc-steel-rate-row mb-3">
                <label for="steelRateInput" class="fw-bold text-dark mb-0">
                  Steel Rate :
                </label>
                <div class="calc-rate-input-group">
                  <span class="calc-unit-prefix">₹</span>
                  <input type="number" id="steelRateInput" class="calc-number-input" value="56" min="1" step="0.5" placeholder="56">
                  <span class="calc-unit-suffix">per kg</span>
                </div>
              </div>

              <!-- Multi-MM Number of Joints Inputs -->
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

          <!-- Right Column: Outputs (y, x, and % Saving = (y - x) / y) -->
          <div class="col-lg-6">
            <div class="calc-output-panel h-100 d-flex flex-column justify-content-between">
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-graph-up-arrow text-success me-1"></i> Output Summary
                  </h5>
                  <span class="badge bg-primary-subtle text-primary fw-bold" id="totalJointsBadge">1,000 Total Joints</span>
                </div>

                <!-- Output 1: y (Total amount Lapping considering standard 50D) -->
                <div class="calc-output-box calc-output-y mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-y">y</span>
                      <span class="fw-bold text-dark">Total Amount Lapping</span>
                      <small class="d-block text-secondary mt-1">Considering standard 50D overlap length</small>
                    </div>
                    <div class="calc-output-amount text-danger" id="steelWastageCost">₹2,71,040</div>
                  </div>
                </div>

                <!-- Output 2: x (Total cost of Joints using M. Couplers) -->
                <div class="calc-output-box calc-output-x mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-x">x</span>
                      <span class="fw-bold text-dark">Total Cost of Joints Using M. Couplers</span>
                      <small class="d-block text-secondary mt-1">Steelux Coupler + 2-End Roll Threading Cost</small>
                    </div>
                    <div class="calc-output-amount text-primary" id="couplerJointCost">₹80,000</div>
                  </div>
                </div>
              </div>

              <!-- Output 3: % Saving = (y - x) / y & Net Rupee Savings -->
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

  <!-- Complete Customers & Landmark Projects Showcase -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Trusted By Premier Developers &amp; Landmark Towers</h2>
        <p class="text-secondary">Supplied to 15+ premier developer groups and iconic high-rise towers across Gujarat &amp; India.</p>
      </div>

      <!-- Customers Ticker (Real Brand Logos) -->
      <div class="marquee-container mb-5" data-aos="fade-up">
        <div class="marquee-content">
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
            <div class="client-brand-tag">Luxury Living &amp; Infra</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_anthem.jpg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
            <div class="client-brand-tag">Commercial High-Rise</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_alok.jpg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
            <div class="client-brand-tag">Builders &amp; Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_dwarkesh.jpg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
            <div class="client-brand-tag">Landmark Towers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_varni.jpg') }}" alt="Varni Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Varni Infra</div>
            <div class="client-brand-tag">Urban Infrastructure</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_shivanta.jpg') }}" alt="Shivanta Group" class="client-logo-img"></div>
            <div class="client-brand-title">Shivanta Group</div>
            <div class="client-brand-tag">Signature Residences</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_fifad.jpg') }}" alt="Fifad Group" class="client-logo-img"></div>
            <div class="client-brand-title">Fifad Group</div>
            <div class="client-brand-tag">Premier Realty</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_nilkanth.jpg') }}" alt="Nilkanth Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Nilkanth Developers</div>
            <div class="client-brand-tag">Prime Properties</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_ananta.jpg') }}" alt="Ananta Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Ananta Developers</div>
            <div class="client-brand-tag">Iconic Townships</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_sahajanand.jpg') }}" alt="Sahajanand Group" class="client-logo-img"></div>
            <div class="client-brand-title">Sahajanand Group</div>
            <div class="client-brand-tag">Estate Excellence</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_atmiya.jpg') }}" alt="Atmiya Group" class="client-logo-img"></div>
            <div class="client-brand-title">Atmiya Group</div>
            <div class="client-brand-tag">Commercial &amp; Housing</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_satyam.jpg') }}" alt="Satyam Group" class="client-logo-img"></div>
            <div class="client-brand-title">Satyam Group</div>
            <div class="client-brand-tag">Constructions</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_amideep.jpg') }}" alt="Amideep Group" class="client-logo-img"></div>
            <div class="client-brand-title">Amideep Group</div>
            <div class="client-brand-tag">Residential Ventures</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_bhagat.jpg') }}" alt="Bhagat Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Bhagat Infraprojects</div>
            <div class="client-brand-tag">Mega Projects</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_tapi.jpg') }}" alt="Tapi Realty" class="client-logo-img"></div>
            <div class="client-brand-title">Tapi Realty</div>
            <div class="client-brand-tag">Horizon Living</div>
          </div>
          <!-- Seamless Loop Duplicates -->
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
            <div class="client-brand-tag">Luxury Living &amp; Infra</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_anthem.jpg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
            <div class="client-brand-tag">Commercial High-Rise</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_alok.jpg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
            <div class="client-brand-tag">Builders &amp; Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_dwarkesh.jpg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
            <div class="client-brand-tag">Landmark Towers</div>
          </div>
        </div>
      </div>

      <!-- Featured Landmark Tower Photos Preview -->
      <div class="row g-3 mb-4">
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_prism_luxuria.jpg') }}" alt="Prism Luxuria" class="tower-img">
            </div>
            <h5 class="tower-title">Prism Luxuria</h5>
            <small class="tower-type">Luxury Residential Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_anthem_arica.jpg') }}" alt="Anthem Arica" class="tower-img">
            </div>
            <h5 class="tower-title">Anthem Arica</h5>
            <small class="tower-type">Commercial High-Rise Hub</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_vishwa_99.jpg') }}" alt="Vishwa 99" class="tower-img">
            </div>
            <h5 class="tower-title">Vishwa 99</h5>
            <small class="tower-type">Signature Commercial Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_antaara_sky.jpg') }}" alt="Antaara Sky" class="tower-img">
            </div>
            <h5 class="tower-title">Antaara Sky</h5>
            <small class="tower-type">Iconic Skyline Skyscraper</small>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="{{ route('projects') }}" class="btn btn-orin-primary">
          <i class="bi bi-buildings-fill"></i> View All 15 Landmark Projects
        </a>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="{{ asset('js/coupler-hero-video.js') }}"></script>
@endpush
