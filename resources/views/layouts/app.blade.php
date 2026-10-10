<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $metaTitle ?? 'ORIN | One Stop Shop for Rebar Solutions | Steelux Industries Surat' }}</title>
  <meta name="description" content="{{ $metaDescription ?? 'ORIN Rebar Couplers by Steelux Industries Surat. One stop shop for creative infrastructure and rebar splicing solutions.' }}">
  <meta name="keywords" content="ORIN, Rebar Coupler, Mechanical Splicing, TMT Bar Coupler, Parallel Thread Machine, Cold Forging, Steelux Industries Surat, Construction Infrastructure">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- AOS (Animate On Scroll) CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  @stack('styles')
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100" tabindex="0">

  <!-- Ambient Animated Light Effect -->
  <div class="bg-mesh-animated"></div>
  <div class="bg-grid-overlay"></div>


  <!-- Sticky Navbar -->
  @include('partials.navbar')

  <!-- Page Content Body -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  @include('partials.footer')

  <!-- Floating WhatsApp -->
  @include('partials.whatsapp')

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- AOS (Animate On Scroll) JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom Logic JS -->
  <script src="{{ asset('js/script.js') }}"></script>

  @stack('scripts')
</body>
</html>
