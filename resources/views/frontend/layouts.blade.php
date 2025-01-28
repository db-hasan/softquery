@include('frontend.header')

<body style="background-image: url({{ asset('images/bg.jpg') }})";>

    <!-- ======= Header ======= -->
    <header>
        <!-- Arro icon Section -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        <!-- Arro icon Section end-->
    </header>


    {{-- ------------content part-------------- --}}
    @yield('content')
    {{-- ------------content part-------------- --}}

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer transparent-background">

        <div class="container">
          <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">ComingSoon</strong> <span>All Rights Reserved</span></p>
          </div>
          <div class="social-links d-flex justify-content-center">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
          <div class="credits">
            Designed by <a href="https://softqry.com/">SOFT QUERY</a>
          </div>
        </div>
    
      </footer>
    
      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.footer');
</body>

</html>
