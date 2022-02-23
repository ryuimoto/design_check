<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DesignCheck</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('FlexStart/assets/img/favicon.png') }} " rel="icon">
  <link href="{{ asset('FlexStart/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('FlexStart/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('FlexStart/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FlexStart/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('FlexStart/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('user.top') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('FlexStart/assets/img/logo.png') }}" alt="">
        <span>DesignCheck</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">デザイナーを探す</a></li>
          <li><a class="nav-link scrollto" href="#about">事例を見る</a></li>
          <li><a class="nav-link scrollto" href="#services">初めての方へ</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">法人でご利用をお考えの方へ</a></li>
          <li><a class="nav-link scrollto" href="#contact">ログイン</a></li>
          <li><a class="getstarted scrollto" href="{{ route('user.register') }}">会員登録(無料)</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('top')
      
  <!-- ======= Hero Section ======= -->
 
  <main id="main">
    @yield('contents')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('FlexStart/assets/img/logo.png') }}" alt="">
              <span>DesignCheck</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">デザイナーを探す</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">事例を見る</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">初めての方へ</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">法人でご利用をお考えの方へ</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DesignCheck</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('FlexStart/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('FlexStart/assets/js/main.js') }}"></script>

</body>

</html>