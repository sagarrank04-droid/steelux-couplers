@extends('layouts.app')

@section('content')
  <!-- Hero Banner Section (Full-Bleed Viewport Banner) -->
  <header id="hero" class="hero-section hero-banner-bg">
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        
        <!-- Hero Content Column (Centered) -->
        <div class="col-12 col-xl-11 text-center" data-aos="fade-up" data-aos-duration="800">
          
          <!-- Hero Headline (Single Line, Centered) -->
          <h1 class="hero-title text-white text-center">
            Engineered For <span class="text-gradient">Maximum Strength</span> &amp; Zero Steel Wastage
          </h1>
          
          <!-- Enriched Description (Centered) -->
          <p class="hero-lead text-center mx-auto" style="max-width: 820px;">
            India's trusted pioneer in precision rebar couplers and on-site threading technology. Replace congested lap joints with 100% full-strength mechanical connections and reduce joint costs by up to <strong class="text-white">80%</strong>.
          </p>

          <!-- Hero Action Buttons (Centered) -->
          <div class="hero-btn-group d-flex justify-content-center mb-4">
            <a href="{{ route('contact') }}" class="btn btn-orin-crimson">
              <i class="bi bi-chat-dots-fill"></i> Get in Touch
            </a>
          </div>

          <!-- Hero Metrics Grid (Translucent Glassmorphism, Centered) -->
          <div class="hero-stats-box hero-stats-glass mx-auto" style="max-width: 980px;">
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

  <!-- Core Services Teaser Section -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Our Core Services</h2>
        <p class="text-secondary">
          Pioneering creative infrastructure solutions and certified mechanical splicing systems for modern reinforced concrete structures.
        </p>
      </div>

      <div class="row g-4 mb-4">
        <!-- Service 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box">
              <i class="bi bi-building"></i>
            </div>
            <h4 class="fw-bold mb-2">Infrastructure Solutions</h4>
            <p class="text-secondary mb-3">
              Certified high-tensile mechanical rebar couplers engineered for high-rise towers, metro rails, and bridge infrastructure.
            </p>
            <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Learn More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <h4 class="fw-bold mb-2">Manufacturer &amp; Wholesaler</h4>
            <p class="text-secondary mb-3">
              Precision Parallel Threaded &amp; Cold Forged couplers with standard ISO metric internal threads from 16mm to 40mm.
            </p>
            <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Learn More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-truck"></i>
            </div>
            <h4 class="fw-bold mb-2">On-Site Mobilization</h4>
            <p class="text-secondary mb-3">
              Rapid on-site machine deployment and skilled technical supervision with fast 5–10 day mobilization.
            </p>
            <a href="{{ route('services') }}" class="text-primary fw-bold text-decoration-none small">Learn More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title">About Steelux Industries (ORIN)</h2>
          <p class="text-secondary mb-4" style="line-height: 1.75;">
            Steelux Industries (ORIN) is a specialized mechanical rebar management enterprise based in Surat, Gujarat. We replace wasteful overlap lapping with certified concentric couplers—eliminating up to 80% steel waste, improving concrete flow in dense columns, and guaranteeing 100% bar break strength.
          </p>
          <div class="d-flex flex-wrap gap-3 mb-4">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-patch-check-fill text-info fs-5"></i>
              <span class="text-dark fw-bold">ISO Metric Standard Certified</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-shield-check text-success fs-5"></i>
              <span class="text-dark fw-bold">100% Bar Break Guarantee</span>
            </div>
          </div>
          <a href="{{ route('about') }}" class="btn btn-orin-primary">
            Read Full Profile <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="orin-card text-center p-3 p-sm-4">
                <i class="bi bi-bullseye fs-1 text-primary mb-2"></i>
                <h5 class="fw-bold mb-1">Our Mission</h5>
                <p class="text-secondary small mb-0">100% structural efficiency with zero steel wastage across global towers.</p>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="orin-card text-center p-3 p-sm-4">
                <i class="bi bi-eye fs-1 text-info mb-2"></i>
                <h5 class="fw-bold mb-1">Our Vision</h5>
                <p class="text-secondary small mb-0">Leading the construction revolution as India's most trusted splicing innovator.</p>
              </div>
            </div>
            <div class="col-12">
              <div class="orin-card p-4 d-flex align-items-center gap-3">
                <div class="icon-box mb-0 flex-shrink-0" style="width: 50px; height: 50px;">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div>
                  <h6 class="fw-bold mb-1">Surat Manufacturing Facility</h6>
                  <p class="text-secondary small mb-0">5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006, Gujarat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Advantages Teaser -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Key Benefits of ORIN Couplers</h2>
        <p class="text-secondary">
          Maximum joint strength, zero steel wastage, and significant cost savings on every project.
        </p>
      </div>

      <div class="row g-4 mb-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #059669; border-color: rgba(5,150,105,0.3); background: rgba(5,150,105,0.1);">
              <i class="bi bi-cash-stack"></i>
            </div>
            <h4 class="fw-bold mb-2">Cost Saving</h4>
            <p class="text-secondary mb-0">
              Direct reduction in steel consumption and labor costs by eliminating 50D overlap steel wastage.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #0284c7; border-color: rgba(2,132,199,0.3); background: rgba(2,132,199,0.1);">
              <i class="bi bi-lightning-fill"></i>
            </div>
            <h4 class="fw-bold mb-2">Quick Installation</h4>
            <p class="text-secondary mb-0">
              Fast screw-in installation without specialized welding or complex handling equipment.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="orin-card h-100">
            <div class="icon-box" style="color: #d97706; border-color: rgba(217,119,6,0.3); background: rgba(217,119,6,0.1);">
              <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>
            <h4 class="fw-bold mb-2">Better Concrete Flow</h4>
            <p class="text-secondary mb-0">
              Eliminates congested multi-bar cages for smoother concrete flow and optimal compaction.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3-Step Process Preview -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Our 3-Step Splicing Process</h2>
        <p class="text-secondary">
          Fast, certified on-site mechanical splicing in 3 simple steps.
        </p>
      </div>

      <div class="row g-4 mb-4">
        <!-- Step 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step-box">
            <div class="process-step-num">1</div>
            <h4 class="fw-bold mb-2">Step 1: Threading on Site</h4>
            <p class="text-secondary mb-0">
              Rebars are peeled and roll-threaded on site as per ISO metric standard specifications.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step-box">
            <div class="process-step-num">2</div>
            <h4 class="fw-bold mb-2">Step 2: Coupler Bolting</h4>
            <p class="text-secondary mb-0">
              Coupler is screwed and bolted onto the fixed rebar securely up to the mid-stop.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step-box">
            <div class="process-step-num">3</div>
            <h4 class="fw-bold mb-2">Step 3: Fastening &amp; Lock</h4>
            <p class="text-secondary mb-0">
              Connecting rebar is fastened and torque-tightened for 100% continuous tensile strength.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive ROI Calculator Teaser -->
  <section class="py-5" style="background: var(--bg-section-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Cost Comparison: Lapping V/S Coupler</h2>
        <p class="text-secondary">
          Evaluate instant project savings with our interactive calculator.
        </p>
      </div>

      <!-- Interactive Calculator Card -->
      <div class="calc-wrapper mb-4" data-aos="zoom-in" data-aos-duration="700">
        <div class="row g-4 align-items-center">
          
          <div class="col-lg-6">
            <div class="mb-4">
              <label class="form-label text-dark fw-bold mb-2">1. Select Rebar Diameter (D):</label>
              <div class="bar-btn-grid">
                <button class="btn btn-bar-size" data-size="16">16 mm</button>
                <button class="btn btn-bar-size" data-size="20">20 mm</button>
                <button class="btn btn-bar-size active" data-size="25">25 mm</button>
                <button class="btn btn-bar-size" data-size="32">32 mm</button>
                <button class="btn btn-bar-size" data-size="36">36 mm</button>
                <button class="btn btn-bar-size" data-size="40">40 mm</button>
              </div>
            </div>

            <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label for="jointsRange" class="form-label text-dark fw-bold mb-0">2. Number of Joints Required:</label>
                <span class="text-primary fw-bold font-monospace">
                  <input type="number" id="jointsInput" value="1000" min="100" max="50000" class="custom-input py-1 px-2 text-end d-inline-block font-monospace" style="width: 100px;"> joints
                </span>
              </div>
              <input type="range" class="form-range" id="jointsRange" min="100" max="20000" step="100" value="1000">
            </div>

            <div class="p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); border-left: 4px solid var(--accent-cyan);">
              <small class="text-secondary d-block">
                💡 <em>Calculation based on standard 50D lap length & ₹56/kg benchmark steel rate as certified in ORIN technical test sheet.</em>
              </small>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="savings-card mb-3">
              <small class="text-uppercase text-success fw-bold letter-spacing-1 d-block mb-1">Total Net Rupee Savings</small>
              <div class="savings-total" id="totalSavings">₹1,91,040</div>
              <span class="badge bg-success mt-2 py-2 px-3 fw-bold fs-6" id="percentSavedBadge">70% Cost Saved</span>
            </div>

            <div class="px-2">
              <div class="calc-breakdown-row">
                <span class="text-secondary">Traditional Lap Steel Cost (Wasted)</span>
                <span class="fw-bold font-monospace text-danger" id="steelWastageCost">₹2,71,040</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Total ORIN Coupler + Threading Cost</span>
                <span class="fw-bold font-monospace text-primary" id="couplerJointCost">₹80,000</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Total Steel Weight Conserved</span>
                <span class="fw-bold font-monospace text-success" id="steelWeightSaved">4,840 kg Steel</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Avoided Lap Length Per Joint</span>
                <span class="fw-bold font-monospace text-dark" id="lapLengthDisplay">1.25 m (50D)</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Complete Customers & Projects Section -->
  <section class="py-5">
    <div class="container py-4">
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">Trusted By Premier Developers</h2>
        <p class="text-secondary">Trusted by 15+ premier developers across landmark commercial and residential towers.</p>
      </div>

      <!-- Customers Ticker (Logo Top, Name Bottom) -->
      <div class="marquee-container mb-5" data-aos="fade-up">
        <div class="marquee-content">
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
            <div class="client-brand-tag">Luxury Living & Infra</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_anthem.svg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
            <div class="client-brand-tag">Commercial High-Rise</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_alok.svg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
            <div class="client-brand-tag">Builders & Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_dwarkesh.svg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
            <div class="client-brand-tag">Landmark Towers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_varni.svg') }}" alt="Varni Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Varni Infra</div>
            <div class="client-brand-tag">Urban Infrastructure</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_shivanta.svg') }}" alt="Shivanta Group" class="client-logo-img"></div>
            <div class="client-brand-title">Shivanta Group</div>
            <div class="client-brand-tag">Signature Residences</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_fifad.svg') }}" alt="Fifad Group" class="client-logo-img"></div>
            <div class="client-brand-title">Fifad Group</div>
            <div class="client-brand-tag">Premier Realty</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_nilkanth.svg') }}" alt="Nilkanth Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Nilkanth Developers</div>
            <div class="client-brand-tag">Prime Properties</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_ananta.svg') }}" alt="Ananta Developers" class="client-logo-img"></div>
            <div class="client-brand-title">Ananta Developers</div>
            <div class="client-brand-tag">Iconic Townships</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_sahajanand.svg') }}" alt="Sahajanand Group" class="client-logo-img"></div>
            <div class="client-brand-title">Sahajanand Group</div>
            <div class="client-brand-tag">Estate Excellence</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_atmiya.svg') }}" alt="Atmiya Group" class="client-logo-img"></div>
            <div class="client-brand-title">Atmiya Group</div>
            <div class="client-brand-tag">Commercial & Housing</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_satyam.svg') }}" alt="Satyam Group" class="client-logo-img"></div>
            <div class="client-brand-title">Satyam Group</div>
            <div class="client-brand-tag">Constructions</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_amideep.svg') }}" alt="Amideep Group" class="client-logo-img"></div>
            <div class="client-brand-title">Amideep Group</div>
            <div class="client-brand-tag">Residential Ventures</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_bhagat.svg') }}" alt="Bhagat Infra" class="client-logo-img"></div>
            <div class="client-brand-title">Bhagat Infraprojects</div>
            <div class="client-brand-tag">Mega Projects</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_tapi.svg') }}" alt="Tapi Realty" class="client-logo-img"></div>
            <div class="client-brand-title">Tapi Realty</div>
            <div class="client-brand-tag">Horizon Living</div>
          </div>
          <!-- Seamless Loop Duplicates -->
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/client_eden.jpg') }}" alt="Eden Group" class="client-logo-img"></div>
            <div class="client-brand-title">Eden Group</div>
            <div class="client-brand-tag">Luxury Living & Infra</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_anthem.svg') }}" alt="Anthem Corporation" class="client-logo-img"></div>
            <div class="client-brand-title">Anthem Corporation</div>
            <div class="client-brand-tag">Commercial High-Rise</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_alok.svg') }}" alt="Alok Group" class="client-logo-img"></div>
            <div class="client-brand-title">Alok Group</div>
            <div class="client-brand-tag">Builders & Developers</div>
          </div>
          <div class="client-logo-card">
            <div class="client-logo-wrap"><img src="{{ asset('assets/clients/icon_dwarkesh.svg') }}" alt="Dwarkesh Group" class="client-logo-img"></div>
            <div class="client-brand-title">Dwarkesh Group</div>
            <div class="client-brand-tag">Landmark Towers</div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
