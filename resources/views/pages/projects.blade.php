@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Customers &amp; <span class="text-gradient">Landmark Projects</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Trusted by 15 premier developer groups and supplied to iconic high-rise towers across Gujarat and India.
      </p>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="py-5">
    <div class="container py-4">
      
      <!-- Valued Customers Ticker -->
      <div class="text-center mb-3" data-aos="fade-up">
        <h4 class="fw-bold mb-2">Our Valued Developer Clients</h4>
        <p class="text-secondary small">Leading real estate developers who rely on Steelux rebar couplers for high-rise tower continuity.</p>
      </div>

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

      <!-- 15 Landmark Towers Real Building Photos Grid -->
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">15 Landmark Towers Powered by Steelux</h2>
        <p class="text-secondary">Prestigious commercial complexes and luxury high-rise residential towers built with Steelux mechanical joints.</p>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_prism_luxuria.jpg') }}" alt="Prism Luxuria" class="tower-img">
            </div>
            <h5 class="tower-title">Prism Luxuria</h5>
            <small class="tower-type">Luxury Residential Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_anthem_arica.jpg') }}" alt="Anthem Arica" class="tower-img">
            </div>
            <h5 class="tower-title">Anthem Arica</h5>
            <small class="tower-type">Commercial High-Rise Hub</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_vishwa_99.jpg') }}" alt="Vishwa 99" class="tower-img">
            </div>
            <h5 class="tower-title">Vishwa 99</h5>
            <small class="tower-type">Signature Commercial Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swaminarayan_hills.jpg') }}" alt="Swaminarayan Hills" class="tower-img">
            </div>
            <h5 class="tower-title">Swaminarayan Hills</h5>
            <small class="tower-type">Ultra-Luxury Township</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_antaara_sky.jpg') }}" alt="Antaara Sky" class="tower-img">
            </div>
            <h5 class="tower-title">Antaara Sky</h5>
            <small class="tower-type">Iconic Skyline Skyscraper</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_classio.jpg') }}" alt="Eden Classio" class="tower-img">
            </div>
            <h5 class="tower-title">Eden Classio</h5>
            <small class="tower-type">Premium Residential Complex</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_heaven.jpg') }}" alt="Eden Heaven" class="tower-img">
            </div>
            <h5 class="tower-title">Eden Heaven</h5>
            <small class="tower-type">Modern Living High-Rise</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_shivanta_signature.jpg') }}" alt="Shivanta Signature" class="tower-img">
            </div>
            <h5 class="tower-title">Shivanta Signature</h5>
            <small class="tower-type">Corporate Business Park</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_siddheshwar_hill.jpg') }}" alt="Siddheshwar Hill" class="tower-img">
            </div>
            <h5 class="tower-title">Siddheshwar Hill</h5>
            <small class="tower-type">Residential Heights</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_tapi_bus_world.jpg') }}" alt="Tapi Bus. World" class="tower-img">
            </div>
            <h5 class="tower-title">Tapi Bus. World</h5>
            <small class="tower-type">Global Trade Center</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_lotus_valley.jpg') }}" alt="Lotus Valley" class="tower-img">
            </div>
            <h5 class="tower-title">Lotus Valley</h5>
            <small class="tower-type">Residential Community</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swastham_square.jpg') }}" alt="Swastham Square" class="tower-img">
            </div>
            <h5 class="tower-title">Swastham Square</h5>
            <small class="tower-type">Retail &amp; Commercial Hub</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_ananta_orbis.jpg') }}" alt="Ananta Orbis" class="tower-img">
            </div>
            <h5 class="tower-title">Ananta Orbis</h5>
            <small class="tower-type">Luxury Residences</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_atc.jpg') }}" alt="ATC" class="tower-img">
            </div>
            <h5 class="tower-title">ATC</h5>
            <small class="tower-type">Advanced Trade Center</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_kbc_2.jpg') }}" alt="KBC 2" class="tower-img">
            </div>
            <h5 class="tower-title">KBC 2</h5>
            <small class="tower-type">Commercial Business Complex</small>
          </div>
        </div>
      </div>

      <!-- On-Site Execution Gallery -->
      <div class="mb-5" data-aos="fade-up">
        <div class="text-center mb-4">
          <h3 class="fw-bold mb-1">On-Site Column Cage &amp; Splicing Gallery</h3>
          <p class="text-secondary small mb-0">Real site reinforcement cages connected using Steelux couplers</p>
        </div>
        <div class="row g-3">
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/site_column_couplers_1.jpg') }}" alt="Column Cage with Steelux Couplers" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Column Coupler Alignment</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/site_column_couplers_2.jpg') }}" alt="Dense Shear Wall Rebar Couplers" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Heavy Shear Wall Cage</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/step3_coupler_joining.jpg') }}" alt="2-Bar Coupler Joining on Site" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">On-Site 2-Bar Splicing</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="coupler-render-card">
              <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="On-Site Rebar Threading Yard" class="coupler-render-img" style="height: 200px;">
              <div class="p-2 text-center bg-light border-top">
                <small class="fw-bold text-dark">Site Threading Workstation</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="orin-card p-4 p-md-5 text-center" data-aos="fade-up">
        <h3 class="fw-bold mb-2">Build Your Next Landmark Tower With Steelux</h3>
        <p class="text-secondary mb-4 mx-auto" style="max-width: 600px;">
          Join the prestigious developer community saving steel, speeding up construction, and achieving 100% tensile reliability.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-orin-primary">
          <i class="bi bi-chat-dots-fill"></i> Discuss Your Project Requirements
        </a>
      </div>

    </div>
  </section>
@endsection
