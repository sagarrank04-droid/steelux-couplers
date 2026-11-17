@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Get in <span class="text-gradient">Touch</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 600px;">
        Contact us for coupler dispatch or on-site machine mobilization.
      </p>
    </div>
  </section>

  <!-- Contact Us Section -->
  <section class="py-5">
    <div class="container py-4">
      <div class="orin-card p-4 p-md-5 mb-5" data-aos="fade-up">
        <div class="row g-5 align-items-center">
          
          <!-- Contact Info Left Column -->
          <div class="col-lg-6">
            <h3 class="fw-bold mb-3">Factory &amp; Helpline</h3>

            <div class="row g-2 mb-4">
              <div class="col-6">
                <div class="rounded-3 overflow-hidden border">
                  <img src="{{ asset('assets/process/cnc_coupler_manufacturing.jpg') }}" alt="Factory Stock" class="w-100 d-block" style="height: 120px; object-fit: cover;">
                </div>
              </div>
              <div class="col-6">
                <div class="rounded-3 overflow-hidden border">
                  <img src="{{ asset('assets/process/onsite_machine_mobilization.jpg') }}" alt="Site Setup" class="w-100 d-block" style="height: 120px; object-fit: cover;">
                </div>
              </div>
            </div>

            <div class="d-flex flex-column gap-3 mb-3">
              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 42px; height: 42px; font-size: 1.1rem;">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase d-block" style="font-size: 0.72rem;">Mobile</small>
                  <p class="text-dark fw-semibold mb-0">
                    <a href="tel:+918849001529" class="text-dark text-decoration-none">+91 88490 01529</a> / 
                    <a href="tel:+919979305461" class="text-dark text-decoration-none">+91 99793 05461</a>
                  </p>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 42px; height: 42px; font-size: 1.1rem;">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase d-block" style="font-size: 0.72rem;">Email</small>
                  <p class="text-dark fw-semibold mb-0">
                    <a href="mailto:steelux7227@gmail.com" class="text-dark text-decoration-none">steelux7227@gmail.com</a>
                  </p>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 42px; height: 42px; font-size: 1.1rem;">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase d-block" style="font-size: 0.72rem;">Address</small>
                  <p class="text-secondary mb-0 small">5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Quote Request Form Right Column -->
          <div class="col-lg-6">
            <div class="p-3 p-sm-4 rounded-4" style="background: #f8fafc; border: 1px solid var(--border-subtle);">
              <h4 class="fw-bold text-dark mb-3">Send Inquiry</h4>

              <form id="inquiryForm" action="{{ route('inquiry.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="fullName" class="form-label text-secondary small fw-bold mb-1">Your Name *</label>
                  <input type="text" name="fullName" id="fullName" class="form-control custom-input" placeholder="Your Name / Company" required>
                </div>

                <div class="row g-2 mb-3">
                  <div class="col-sm-6">
                    <label for="phoneNum" class="form-label text-secondary small fw-bold mb-1">Mobile *</label>
                    <input type="tel" name="phoneNum" id="phoneNum" class="form-control custom-input" placeholder="+91 98765 43210" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="reqBarSize" class="form-label text-secondary small fw-bold mb-1">Rebar Size</label>
                    <select name="reqBarSize" id="reqBarSize" class="form-select custom-input">
                      <option value="All Sizes">All Sizes (16mm - 40mm)</option>
                      <option value="16mm">16 mm</option>
                      <option value="20mm">20 mm</option>
                      <option value="25mm" selected>25 mm</option>
                      <option value="32mm">32 mm</option>
                      <option value="36mm">36 mm</option>
                      <option value="40mm">40 mm</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="reqQuantity" class="form-label text-secondary small fw-bold mb-1">Quantity</label>
                  <input type="number" name="reqQuantity" id="reqQuantity" class="form-control custom-input" placeholder="1000" value="1000">
                </div>

                <div class="mb-4">
                  <label for="reqMessage" class="form-label text-secondary small fw-bold mb-1">Requirements</label>
                  <textarea name="reqMessage" id="reqMessage" class="form-control custom-input" rows="2" placeholder="City or project details..."></textarea>
                </div>

                <button type="submit" class="btn btn-orin-primary w-100 py-2 py-sm-3 justify-content-center text-center">
                  <i class="bi bi-whatsapp fs-5 flex-shrink-0"></i> <span>Send via WhatsApp</span>
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
