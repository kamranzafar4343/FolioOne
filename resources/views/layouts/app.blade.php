<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'folio template')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

<!-- Favicons -->
<link href="{{ asset('FolioOne/assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('FolioOne/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('FolioOne/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('FolioOne/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('FolioOne/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('FolioOne/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('FolioOne/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('FolioOne/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FolioOne
  * Template URL: https://bootstrapmade.com/folioone-bootstrap-portfolio-website-template/
  * Updated: Aug 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/img/logo.webp" alt="">
      <h1 class="sitename">FolioOne</h1> 
    </a> -->

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ route('resume') }}" class="{{ request()->routeIs('resume') ? 'active' : '' }}">Resume</a></li>
          <li><a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    @yield('content')

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">FolioOne</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <script src="{{ asset('FolioOne/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('FolioOne/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('FolioOne/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>


  <!-- Main JS File -->
  <script src="{{ asset('FolioOne/assets/js/main.js') }}"></script>

</body>

</html>