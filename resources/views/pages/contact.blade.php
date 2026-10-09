@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">Get in <span class="text-gradient">Touch With Us</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Connect directly with our engineering team for on-site machine mobilization, custom thread profiling, or immediate wholesale coupler dispatch.
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
            <h2 class="section-title mb-3">Direct Factory Dispatch & Helpline</h2>
            <p class="text-secondary mb-4" style="line-height: 1.75; font-size: 1.05rem;">
              Whether you need 500 or 50,000 couplers, or complete on-site machine setup, our technical engineers are ready to support your project.
            </p>

            <div class="d-flex flex-column gap-3 mb-4">
              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase fw-bold d-block">Mobile Helpline</small>
                  <a href="tel:+918849001529" class="text-dark fw-bold text-decoration-none fs-6">+91 88490 01529</a> / 
                  <a href="tel:+919979305461" class="text-dark fw-bold text-decoration-none fs-6">+91 99793 05461</a>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase fw-bold d-block">Email Address</small>
                  <a href="mailto:steelux7227@gmail.com" class="text-dark fw-bold text-decoration-none fs-6">steelux7227@gmail.com</a>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <div class="icon-box mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div>
                  <small class="text-secondary text-uppercase fw-bold d-block">Factory & Office Address</small>
                  <p class="text-dark mb-0 fw-semibold">5, Laxman Nagar Industries, Besides Daimond Nagar, Laskana, Surat - 395006, Gujarat, India</p>
                </div>
              </div>
            </div>

            <div class="p-3 bg-light rounded-3 border border-subtle">
              <div class="d-flex align-items-center gap-2 text-dark fw-bold mb-1">
                <i class="bi bi-truck text-primary"></i> Rapid Dispatch Guarantee:
              </div>
              <small class="text-secondary">Standard 16mm to 40mm ISO metric couplers ready in stock for immediate national dispatch within 24-48 hours.</small>
            </div>
          </div>

          <!-- Quote Request Form Right Column -->
          <div class="col-lg-6">
            <div class="p-4 rounded-4" style="background: #f8fafc; border: 1px solid var(--border-subtle); box-shadow: var(--shadow-sm);">
              <h4 class="fw-bold text-dark mb-1">Send Instant Inquiry</h4>
              <p class="text-secondary small mb-4">Get official pricing and machine deployment timeline directly on WhatsApp.</p>

              <form id="inquiryForm" action="{{ route('inquiry.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="fullName" class="form-label text-secondary small fw-bold mb-1">Enter Your Name *</label>
                  <input type="text" name="fullName" id="fullName" class="form-control custom-input" placeholder="e.g. Rahul Sharma / Apex Infra" required>
                </div>

                <div class="row g-2 mb-3">
                  <div class="col-sm-6">
                    <label for="phoneNum" class="form-label text-secondary small fw-bold mb-1">Enter Your Mobile *</label>
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
                  <label for="reqQuantity" class="form-label text-secondary small fw-bold mb-1">Estimated Quantity / Coupler Count</label>
                  <input type="number" name="reqQuantity" id="reqQuantity" class="form-control custom-input" placeholder="e.g. 1500" value="1000">
                </div>

                <div class="mb-4">
                  <label for="reqMessage" class="form-label text-secondary small fw-bold mb-1">Enter Your Comment / Requirements</label>
                  <textarea name="reqMessage" id="reqMessage" class="form-control custom-input" rows="2" placeholder="Project name, city or delivery timeline..."></textarea>
                </div>

                <button type="submit" class="btn btn-orin-primary w-100 py-3 justify-content-center">
                  <i class="bi bi-whatsapp fs-5"></i> Send Quote Inquiry via WhatsApp ⚡
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
