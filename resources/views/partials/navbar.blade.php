<!-- Bootstrap 5 Sticky Navbar with Right-Aligned Navigation -->
<nav id="mainNavbar" class="navbar navbar-expand-xl navbar-light navbar-custom sticky-top">
  <div class="navbar-top-accent"></div>
  <div class="container">
    <!-- Brand Logo -->
    <a class="navbar-brand d-flex align-items-center gap-2 py-0" href="{{ route('home') }}">
      <img src="{{ asset('assets/steelux_logo.png') }}?v=2" alt="STEELUX Industries" class="navbar-logo-img">
    </a>

    <!-- Navbar Toggler for Mobile -->
    <button class="navbar-toggler border-0 shadow-none p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list text-dark fs-2"></i>
    </button>

    <!-- Nav Links & Actions (Right-Aligned) -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto me-xl-3 align-items-xl-center">
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('advantages') ? 'active' : '' }}" href="{{ route('advantages') }}">Advantages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('machinery') ? 'active' : '' }}" href="{{ route('machinery') }}">Specs &amp; Machine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('calculator') ? 'active' : '' }}" href="{{ route('calculator') }}">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
        </li>
      </ul>

      <div class="navbar-actions pt-2 pt-xl-0">
        <a href="{{ asset('brocure.pdf') }}" target="_blank" class="btn-nav-brochure d-none d-xxl-inline-flex" title="Download PDF Brochure">
          <i class="bi bi-file-earmark-pdf-fill text-danger"></i> <span>Brochure</span>
        </a>
        <a href="{{ route('contact') }}" class="btn btn-orin-primary btn-nav-cta">
          <i class="bi bi-telephone-fill"></i> <span>Contact Us</span>
        </a>
      </div>
    </div>
  </div>
</nav>
