<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 @include('layouts.frontend.partials.head')
  <body>
    <!-- HEADER -->
    @include('layouts.frontend.partials.header')
    <!-- HEADER -->
    <!-- Main Content -->
    <main class="main-content">


   @yield('content')
    <!-- contact -->
  </main>
  <!-- Main Content -->
  <!-- Footer -->
  <footer class="foot">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer1">
            <img src="{{ asset('/frontend/assets/images/logo.png') }}">
            <p>Knowing how to get a mortgage can help you stay organized during the home buying process. Learn how to navigate the process of getting a mortgage, step by step.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer2">
                <h3 class="footer-heading">Site Map</h3>
                <ul>
                  <li><a class="footer-menu" href="#">Terms & Conditions</a></li>
                  <li><a class="footer-menu" href="#">Privacy Policy</a></li>
                  <li><a class="footer-menu" href="#">Faq’s</a></li>
                  <li><a class="footer-menu" href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer3">
                <h3 class="footer-heading">Quick Links</h3>
                <ul>
                  <li><a class="footer-menu" href="#">Home</a></li>
                  <li><a class="footer-menu" href="#">Refinance</a></li>
                  <li><a class="footer-menu" href="#">Rate</a></li>
                  <li><a class="footer-menu" href="#">Learning Center</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer4">
                <h3 class="footer-heading">Contact Info</h3>
                <ul>
                  <li><a class="footer-menu" href="#"><img src="{{ asset('/frontend/assets/images/Group 73.png') }}">123-456-7890</a></li>
                  <li><a class="footer-menu" href="#"><img src="{{ asset('/frontend/assets/images/Group 72.png') }}">Info@company.com</a></li>
                  <li><a class="footer-menu" href="#"><img src="{{ asset('/frontend/assets/images/Group 74.png') }}">123 Street Lorem Ipsum Usa</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="copy">
              <p>American Direct Lender © Copyrights 2020 All Rights Reserved</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="privacy">
              <p>Privacy & Policy</p>
              <p>Terms Of Service</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
  <script src="{{ asset('/frontend/assets/js/custom.js') }}"></script>
  <!-- Scripts -->
</body>
</html>
