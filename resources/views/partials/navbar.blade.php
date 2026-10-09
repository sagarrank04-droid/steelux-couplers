<!-- Bootstrap 5 Sticky Navbar with Multi-Page Navigation -->
<nav id="mainNavbar" class="navbar navbar-expand-xl navbar-light navbar-custom sticky-top">
  <div class="container">
    <!-- Brand Logo -->
    <a class="navbar-brand d-flex align-items-center gap-2 py-0" href="{{ route('home') }}">
      <img src="{{ asset('assets/steelux_logo.png') }}" alt="STEELUX Industries - Construction Technology" class="navbar-logo-img">
    </a>

    <!-- Navbar Toggler for Mobile -->
    <button class="navbar-toggler border-0 shadow-none p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list text-dark fs-2"></i>
    </button>

    <!-- Nav Links & Actions -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto align-items-xl-center">
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
          <a class="nav-link nav-link-custom {{ request()->routeIs('machinery') ? 'active' : '' }}" href="{{ route('machinery') }}">Specs & Machine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>

      <div class="navbar-actions pt-2 pt-xl-0 ms-xl-4 ms-xxl-5">
        <a href="{{ route('contact') }}" class="btn btn-orin-primary">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</nav>
