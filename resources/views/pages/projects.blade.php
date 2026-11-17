@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Clients &amp; <span class="text-gradient">Projects</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 620px;">
        Trusted by 15+ premier developer groups across landmark high-rise towers.
      </p>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="py-5">
    <div class="container py-4">
      
      <!-- Valued Customers Ticker -->
      <div class="text-center mb-3" data-aos="fade-up">
        <h4 class="fw-bold mb-0">Our Developer Clients</h4>
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

      <!-- 15 Landmark Towers Grid (Photo + Name Only) -->
      <div class="section-header text-center mb-4" data-aos="fade-up">
        <h2 class="section-title mb-2">15 Landmark Towers</h2>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_prism_luxuria.jpg') }}" alt="Prism Luxuria" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Prism Luxuria</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_anthem_arica.jpg') }}" alt="Anthem Arica" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Anthem Arica</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_vishwa_99.jpg') }}" alt="Vishwa 99" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Vishwa 99</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swaminarayan_hills.jpg') }}" alt="Swaminarayan Hills" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Swaminarayan Hills</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_antaara_sky.jpg') }}" alt="Antaara Sky" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Antaara Sky</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_classio.jpg') }}" alt="Eden Classio" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Eden Classio</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_heaven.jpg') }}" alt="Eden Heaven" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Eden Heaven</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_shivanta_signature.jpg') }}" alt="Shivanta Signature" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Shivanta Signature</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_siddheshwar_hill.jpg') }}" alt="Siddheshwar Hill" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Siddheshwar Hill</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_tapi_bus_world.jpg') }}" alt="Tapi Bus. World" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Tapi Bus. World</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_lotus_valley.jpg') }}" alt="Lotus Valley" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Lotus Valley</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swastham_square.jpg') }}" alt="Swastham Square" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Swastham Square</h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_ananta_orbis.jpg') }}" alt="Ananta Orbis" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">Ananta Orbis</h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_atc.jpg') }}" alt="ATC" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">ATC</h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_kbc_2.jpg') }}" alt="KBC 2" class="tower-img">
            </div>
            <h6 class="tower-title mb-0">KBC 2</h6>
          </div>
        </div>
      </div>

      <!-- On-Site Videos & Photos Gallery (No Floating Badges) -->
      <div class="mb-5" data-aos="fade-up">
        <div class="text-center mb-4">
          <h4 class="fw-bold mb-0">On-Site Videos &amp; Gallery</h4>
        </div>

        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="site-video-card">
              <div class="site-video-wrap">
                <video class="site-video-player" src="{{ asset('assets/videos/live_rebar_threading_coupler.mp4') }}" poster="{{ asset('assets/process/step1_rebar_threading.jpg') }}" autoplay muted loop playsinline controls></video>
              </div>
              <div class="p-3 text-center">
                <h6 class="fw-bold text-dark mb-0">On-Site Rebar Threading &amp; Coupler Fitting</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="site-video-card">
              <div class="site-video-wrap">
                <video class="site-video-player" src="{{ asset('assets/videos/live_cold_forging_machine.mp4') }}" poster="{{ asset('assets/process/machine_cold_forging.jpg') }}" autoplay muted loop playsinline controls></video>
              </div>
              <div class="p-3 text-center">
                <h6 class="fw-bold text-dark mb-0">On-Site Hydraulic Rebar Cold Forging</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}?v=5" alt="Column Coupler Alignment" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Column Coupler Cage</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/site_column_couplers_2.jpg') }}?v=5" alt="Heavy Shear Wall Cage" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Shear Wall Couplers</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="On-Site 2-Bar Splicing" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">2-Bar Column Splicing</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="Site Threading Workstation" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Site Threading Station</small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
