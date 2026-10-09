@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Customers & <span class="text-gradient">Landmark Projects</span></h1>
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
        <p class="text-secondary small">Leading real estate developers who rely on ORIN rebar couplers for high-rise tower continuity.</p>
      </div>

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

      <!-- 15 Landmark Towers Grid -->
      <div class="section-header text-center" data-aos="fade-up">
        <h2 class="section-title">15 Landmark Towers Powered by ORIN</h2>
        <p class="text-secondary">Prestigious commercial complexes and luxury high-rise residential towers built with ORIN mechanical joints.</p>
      </div>

      <div class="row g-3 mb-5">
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_prism_luxuria.svg') }}" alt="Prism Luxuria" class="tower-img">
            </div>
            <h5 class="tower-title">Prism Luxuria</h5>
            <small class="tower-type">Luxury Residential Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_anthem_arica.svg') }}" alt="Anthem Arica" class="tower-img">
            </div>
            <h5 class="tower-title">Anthem Arica</h5>
            <small class="tower-type">Commercial High-Rise Hub</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_vishwa_99.svg') }}" alt="Vishwa 99" class="tower-img">
            </div>
            <h5 class="tower-title">Vishwa 99</h5>
            <small class="tower-type">Signature Commercial Tower</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swaminarayan_hills.svg') }}" alt="Swaminarayan Hills" class="tower-img">
            </div>
            <h5 class="tower-title">Swaminarayan Hills</h5>
            <small class="tower-type">Ultra-Luxury Township</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_antaara_sky.svg') }}" alt="Antaara Sky" class="tower-img">
            </div>
            <h5 class="tower-title">Antaara Sky</h5>
            <small class="tower-type">Iconic Skyline Skyscraper</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_classio.svg') }}" alt="Eden Classio" class="tower-img">
            </div>
            <h5 class="tower-title">Eden Classio</h5>
            <small class="tower-type">Premium Residential Complex</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_eden_heaven.svg') }}" alt="Eden Heaven" class="tower-img">
            </div>
            <h5 class="tower-title">Eden Heaven</h5>
            <small class="tower-type">Modern Living High-Rise</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_shivanta_signature.svg') }}" alt="Shivanta Signature" class="tower-img">
            </div>
            <h5 class="tower-title">Shivanta Signature</h5>
            <small class="tower-type">Corporate Business Park</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_siddheshwar_hill.svg') }}" alt="Siddheshwar Hill" class="tower-img">
            </div>
            <h5 class="tower-title">Siddheshwar Hill</h5>
            <small class="tower-type">Residential Heights</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_tapi_bus_world.svg') }}" alt="Tapi Bus. World" class="tower-img">
            </div>
            <h5 class="tower-title">Tapi Bus. World</h5>
            <small class="tower-type">Global Trade Center</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_lotus_valley.svg') }}" alt="Lotus Valley" class="tower-img">
            </div>
            <h5 class="tower-title">Lotus Valley</h5>
            <small class="tower-type">Residential Community</small>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_swastham_square.svg') }}" alt="Swastham Square" class="tower-img">
            </div>
            <h5 class="tower-title">Swastham Square</h5>
            <small class="tower-type">Retail & Commercial Hub</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="50">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_ananta_orbis.svg') }}" alt="Ananta Orbis" class="tower-img">
            </div>
            <h5 class="tower-title">Ananta Orbis</h5>
            <small class="tower-type">Luxury Residences</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_atc.svg') }}" alt="ATC" class="tower-img">
            </div>
            <h5 class="tower-title">ATC</h5>
            <small class="tower-type">Advanced Trade Center</small>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12" data-aos="zoom-in" data-aos-delay="150">
          <div class="tower-card h-100">
            <div class="tower-img-wrap">
              <img src="{{ asset('assets/projects/tower_kbc_2.svg') }}" alt="KBC 2" class="tower-img">
            </div>
            <h5 class="tower-title">KBC 2</h5>
            <small class="tower-type">Commercial Business Complex</small>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="orin-card p-4 p-md-5 text-center" data-aos="fade-up">
        <h3 class="fw-bold mb-2">Build Your Next Landmark Tower With ORIN</h3>
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
