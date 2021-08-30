<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LPK Resort Kuta</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/extras.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#sliders">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  Visi & Misi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Program Studi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">
                  Portfolio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature">
                  Sarana
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('show.form')}}">
                  Daftar Online
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Kontak
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll" href="#sliders">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#about">
              Visi dan Misi
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              Program Studi
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">
              Portfolio
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#feature">
              Sarana
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#team">
              Team
            </a>
          </li>
          <li>
            <a class="page-scroll" href="{{route('show.form')}}">
              Daftar Online
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Kontak
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      @yield('body')


    <!-- Contact Form Section Start -->
    <section id="contact" class="contact-form section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-6 col-xs-12">
            <h3 class="title-head text-left">Get in touch</h3>
            <form class="contact-form" data-toggle="validator">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-user"></i>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-envelope-o"></i>
                    <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-pencil-square-o"></i>
                    <input type="text" class="form-control" id="subject" placeholder="Subject" required data-error="Please enter your Subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <textarea class="form-control" id="message" rows="4" placeholder="Message" required data-error="Please enter your message"></textarea>
                  <div class="help-block with-errors"></div>
                  <button type="submit" id="form-submit" class="btn btn-common btn-form-submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <h4 class="contact-info-title text-left">Kontak Kami</h4>
            <div class="contact-info">
              <address>
              <i class="fa fa-map-marker"></i>
              Jl. Nyangnyang Sari, Kuta, Badung, Bali
            </address>
              <div class="tel-info">
                <a href="https://wa.me/6285102983552"><i class="fa fa-whatsapp"></i>085 102 983 552</a>
                <a href="https://wa.me/6285737693646"><i class="fa fa-whatsapp"></i>081 246 706 844</a>
              </div>
              <a href="mailto:info.rka@gmail.com"><i class="fa fa-envelope"></i>info.rka@gmail.com</a>
              <a href="{{route('home')}}"><i class="fa fa-globe"></i>www.lpk-resortkuta.com</a>
              <ul class="social-links">
                <li>
                  <a href="https://www.facebook.com/rka2012" class="fa fa-facebook"></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/resort_kuta/" class="fa fa-instagram"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form Section End -->

	  <!-- Footer Section -->
    <footer class="footer">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              About Us
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <div class="social-footer">
              <a href="https://www.facebook.com/rka2012"><i class="fa fa-facebook icon-round"></i></a>
              <a href="https://www.instagram.com/resort_kuta/"><i class="fa fa-instagram icon-round"></i></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              Links
            </h3>
            <ul class="menu">
              <li><a href="#about">Visi dan Misi</a></li>
              <li><a href="#services">Program Studi</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="{{route('show.form')}}">Daftar Online</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            @yield('galery')
          </div>
          <!-- Footer Widget Ends -->

        </div>
        <!-- Row Ends -->
      </div>
      <!-- Container Ends -->

      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <p class="copyright-text">All copyrights reserved © 2018 - Designed &amp; Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->

    </footer>
    <!-- Footer Section End-->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
      
  </body>
</html>
