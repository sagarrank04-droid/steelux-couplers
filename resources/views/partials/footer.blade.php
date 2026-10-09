<!-- Footer -->
<footer class="py-5" style="background: #080e1d; border-top: 1px solid rgba(255, 255, 255, 0.08);">
  <div class="container py-3">
    <div class="row g-4 mb-4">
      
      <!-- Brand & Vision -->
      <div class="col-lg-4 col-md-12 mb-3 mb-lg-0">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="{{ asset('assets/steelux_logo.png') }}" alt="STEELUX Industries - Construction Technology" class="footer-logo-img" style="height: 80px; width: auto;">
        </div>
        <p class="text-white-85 small pe-lg-4" style="line-height: 1.75; color: rgba(255, 255, 255, 0.75);">
          We Are Construction And Contract Managing Company. Our Company Vision Is To Transform Structures Worldwide With TMT Joint Materials For a Sustainable Tomorrow.
        </p>
        <div class="d-flex flex-wrap gap-2 pt-2">
          <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-10 px-3 py-2 rounded-pill small">
            <i class="bi bi-shield-check text-info me-1"></i> ISO Metric Certified
          </span>
          <span class="badge bg-white bg-opacity-10 text-white border border-white border-opacity-10 px-3 py-2 rounded-pill small">
            <i class="bi bi-geo-alt-fill text-warning me-1"></i> Surat, Gujarat
          </span>
        </div>
      </div>

      <!-- Quick Links (Menu) -->
      <div class="col-lg-2 col-md-4 col-6">
        <h6 class="text-white fw-bold mb-3 pb-1 border-bottom border-white border-opacity-10 d-inline-block">Menu</h6>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
          <li><a href="{{ route('home') }}" class="footer-nav-link">Home</a></li>
          <li><a href="{{ route('about') }}" class="footer-nav-link">About Us</a></li>
          <li><a href="{{ route('services') }}" class="footer-nav-link">Services</a></li>
          <li><a href="{{ route('advantages') }}" class="footer-nav-link">Advantages</a></li>
          <li><a href="{{ route('projects') }}" class="footer-nav-link">Projects</a></li>
        </ul>
      </div>

      <!-- Technical Solutions -->
      <div class="col-lg-3 col-md-4 col-6">
        <h6 class="text-white fw-bold mb-3 pb-1 border-bottom border-white border-opacity-10 d-inline-block">Technical Specs</h6>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
          <li><a href="{{ route('machinery') }}" class="footer-nav-link">Specs & Machinery</a></li>
          <li><a href="{{ route('calculator') }}" class="footer-nav-link">ROI Steel Calculator</a></li>
          <li><span class="text-white-85 small d-inline-block py-1"><i class="bi bi-check2-circle text-info me-1"></i> 16mm to 40mm Rebars</span></li>
          <li>
            <a href="{{ asset('brocure.pdf') }}" target="_blank" class="footer-nav-link text-white fw-semibold">
              <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> Download Brochure
            </a>
          </li>
        </ul>
      </div>

      <!-- Surat Factory Works & Contact -->
      <div class="col-lg-3 col-md-4 col-12">
        <h6 class="text-white fw-bold mb-3 pb-1 border-bottom border-white border-opacity-10 d-inline-block">Surat Works</h6>
        <div class="d-flex align-items-start gap-2 mb-3">
          <i class="bi bi-geo-alt-fill text-warning mt-1 flex-shrink-0"></i>
          <p class="text-white-85 small mb-0" style="line-height: 1.6; color: rgba(255, 255, 255, 0.75);">
            5, Laxman Nagar Industries, Besides Diamond Nagar, Laskana, Surat - 395006, Gujarat
          </p>
        </div>
        <div class="d-flex flex-column gap-1 mb-3">
          <a href="tel:+918849001529" class="footer-nav-link text-white small">
            <i class="bi bi-telephone-fill text-info me-1"></i> +91 88490 01529
          </a>
          <a href="tel:+919979305461" class="footer-nav-link text-white small">
            <i class="bi bi-telephone-fill text-info me-1"></i> +91 99793 05461
          </a>
        </div>
        <a href="https://wa.me/918849001529" target="_blank" class="btn btn-sm btn-outline-light rounded-pill px-3 py-1 text-nowrap">
          <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp Inquiry
        </a>
      </div>

    </div>

    <!-- Copyright & Bottom Bar -->
    <div class="pt-4 mt-2 border-top border-white border-opacity-10 d-flex flex-wrap justify-content-between align-items-center gap-3 small text-white-85">
      <div style="color: rgba(255, 255, 255, 0.7);">
        &copy; {{ date('Y') }} <strong class="text-white">Steelux Industries (ORIN)</strong>. All Rights Reserved.
      </div>
      <div class="d-flex flex-wrap gap-3">
        <a href="{{ route('home') }}" class="text-white-85 text-decoration-none">Home</a>
        <span class="text-white-85 opacity-25">|</span>
        <a href="{{ route('calculator') }}" class="text-white-85 text-decoration-none">ROI Calculator</a>
        <span class="text-white-85 opacity-25">|</span>
        <a href="{{ route('machinery') }}" class="text-white-85 text-decoration-none">Machinery</a>
        <span class="text-white-85 opacity-25">|</span>
        <a href="{{ route('contact') }}" class="text-white-85 text-decoration-none">Contact Support</a>
      </div>
    </div>
  </div>
</footer>
