@extends('layout.app')


@section('body')

      <!-- sliders -->
      <div id="sliders">
        <div class="full-width">
          <!-- light slider -->
          <div id="light-slider" class="carousel slide">
            <div id="carousel-area">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-slider" data-slide-to="1"></li>
                  <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/slider/slider1.jpg')}}" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/slider/slider2.jpg')}}" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/slider/slider3.jpg')}}" alt="">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Visi Misi Section Start -->
    <div id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Visi & Misi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="{{asset('assets/img/about/visi1.png')}}" alt="">
              <h5><a href="#">Professionalisme</a></h5>
              <p>Professionalisme kerja membuat kehidupan menjadi lebih baik dan bermartabat</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="{{asset('assets/img/about/visi2.png')}}" alt="">
              <h5><a href="#">Meningkatkan Pendapatan dan SDM</a></h5>
              <p>Dengan meningkatnya SDM seseorang, maka pendapatan orang tersebut akan berangsur meningkat, dan mampu bersaing dalam persaingan global</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="{{asset('assets/img/about/visi3.png')}}" alt="">
              <h5><a href="#">Meningkatkan Wawasan Kerja</a></h5>
              <p>Meningkatkan Wawasan kerja serta cara pandang dalam menghadapi permasalahan pada pekerjaan</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="{{asset('assets/img/about/visi4.png')}}" alt="">
              <h5><a href="#">Mencerdaskan dan Meningkatkan harkat dan Martabat bangsa</a></h5>
              <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Visi Misi Section End -->


    


    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Program Studi</h2>
          </div>
        </div>
        <div class="row">
          <!-- Start Service Icon 1 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
              <img src="{{asset('assets/img/prodi/bell.png')}}" alt="">
              </div>
              <div class="service-content">
                <h4><a href="#">Front Office</a></h4>
                <p>
                Front Office, adalah salah satu departement di sebuah hotel yang berada di begian depan merupakan pintu gerbang dari hotel itu sediri sehingga mudah diketahui dan di hubungi tamu yang secara oprasional berhubengan langsung dengan tamu.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <img src="{{asset('assets/img/prodi/waiter.png')}}" alt="">
              </div>
              <div class="service-content">
                <h4><a href="#">F&B Services</a></h4>
                <p>
                  Waiter/Waitress adalah seseorang yang mempunyai tugas dan tanggung jawab melayani kebutuhan makan dan minum bagi para tamu secara profesional.  Mereka sangat berperan dalam memberikan kepuasan kepada pelanggan yang secara tidak langsung akan memberikan keuntungan bagi perusahaan. Lewat komunikasi dengan para pelanggan, seorang pramusaji harus  dapat segera mendeteksi keingginan dan kebutuhan para pelanggan untuk mewujudkannya.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
              <img src="{{asset('assets/img/prodi/cook.png')}}" alt="">
              </div>
              <div class="service-content">
                <h4><a href="#">F&B Product</a></h4>
                <p>
                Food and Beverage Product merupakan salah satu bagian di hotel yang menangani pengolahan makanan dan minuman dari bahan mentah menjadi produk siap saji mulai dari appetizer, soup, main course dan dessert bagi para tamu hotel. Perlu adanya pengetahuan dan keahlian yang kompeten sesuai dengan standar dalam mengolah produk makan dan minum, agar tamu merasa puas mencicipi produk yang ditawarkan.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
              <img src="{{asset('assets/img/prodi/housekeeping.png')}}" alt="">
              </div>
              <div class="service-content">
                <h4><a href="#">Housekeeping</a></h4>
                <p>
                  Housekeeping adalah salah satu bagian yang ada didalam hotel yang menangani hal-hal terkait dengan keindahan, kerapian, kebersihan, kelengkapan seluruh kamar juga seluruh areal umum agar seluruh tamu dan karyawan dapat merasa aman dan nyaman di dalam hotel.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 4 -->

          <!-- Start Service Icon 5 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
              <img src="{{asset('assets/img/prodi/ecommerce.png')}}" alt="">
              </div>
              <div class="service-content">
                <h4><a href="#">E-Commerce</a></h4>
                <p>
                  Electronic Commerce (Perniagaan Elektronik), sebagai bagian dari Electronic Business (bisnis yang dilakukan dengan menggunakan electronic transmission), oleh para ahli dan pelaku bisnis dicoba dirumuskan definisinya. Secara umum e-commerce dapat didefinisikan sebagai segala bentuk transaksi perdagangan/perniagaan barang atau jasa (trade of goods and service) dengan menggunakan media elektronik.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 5 -->
          
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".fbservices">
                F&B Service 
              </a>
              <a class="filter btn btn-common" data-filter=".fbproducts">
                F&B Product
              </a>
              <a class="filter btn btn-common" data-filter=".housekeeping">
                Housekeeping 
              </a>
              <a class="filter btn btn-common" data-filter=".frontOffice">
                Front Office 
              </a>
              <a class="filter btn btn-common" data-filter=".EComm">
                E-Commerce
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing fbservices">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbs/fbs1.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Service</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix branding fbservices">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbs/fbs2.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Service</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix branding fbproducts">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbp/fbp1.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Product</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing fbproducts">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbp/fbp2.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Product</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing fbproducts">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbp/fbp3.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Product</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix planning fbservices">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('assets/img/portfolio/fbs/fbs3.jpg')}}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>F&B Service</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->

     <!-- Feature Section Start -->
    <div id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Sarana dan Fasilitas</h2>
          </div>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-thumbs-up"></i>
              </div>
              <div class="featured-content">
                <h4>Kampus Out of the Box</h4>
                <p>Pelatihan dilaksnakan di kampus yang berada di Hotel Best Western Kuta Villa, semakin dekat dengan lokasi industri, maka semakin baik pula penyerapan ilmunya</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-building"></i>
              </div>
              <div class="featured-content">
                <h4>Lab Praktek</h4>
                <p>Praktek lab dilaksanakan di dua tempat, yaitu di Best Western Resort Kuta dan Best Western Kuta Villa</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="featured-content">
                <h4>Sistem Pelatihan</h4>
                <p>Sistem pelatihan yang di terapkan di Lembaga Pelatihan Kerja Resort Kuta yaitu 25% Teori dan 75% Praktek kerja di Lapangan langsung.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- facts Section Start -->
    <div id="counter">
      <div class="container">
        <div class="row count-to-sec">
          <div class="col-lg-4 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-users"> </i></span>
            <h3 class="timer count-value" data-to="561" data-speed="1000">561</h3>
            <hr class="width25-divider">
            <small class="count-title">Mahasiswa/i Aktif</small>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-graduation-cap"> </i></span>
            <h3 class="timer count-value" data-to="950" data-speed="1000">950</h3>
            <hr class="width25-divider">
            <small class="count-title">Lulusan</small>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-user"> </i></span>
            <h3 class="timer count-value" data-to="978" data-speed="1000">978</h3>
            <hr class="width25-divider">
            <small class="count-title">Dosen Pengajar</small>
          </div>
        </div>
      </div>
    </div>
    <!-- facts Section End -->
    
    <!-- Team Section Start -->
    <div id="team" class="team-members-tow section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Team</h2>
          </div>
        </div>

        <!-- First Row Start -->
        <div class="row">

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>I Gst. Ngr. Ketut Suranata, S.Pd., M.M.</strong>
                    <span>Direktur Utama</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>I Wayan Eka Wahyudi, S.Pd.</strong>
                    <span>Kampus Manager</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>I Made Sutirta Septana Jaya, S.S.</strong>
                    <span>KABAG. Akademik</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>I Ketut Rena</strong>
                    <span>KABAG. Kemahasiswaan</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>
          
        <!-- </div> -->

        <!-- First Row End -->

        <!-- Second Row Start -->

        <!-- <div class="row"> -->

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>I Kadek Sadia</strong>
                    <span>KABAG. Koordinasi Umum</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Widya</strong>
                    <span>KABAG. Keuangan</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/team-05.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Ni Ketut Kamiyasih</strong>
                    <span>KABAG. Administrasi</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-5 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{asset('assets/img/team/IT.jpg')}}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Dwi Prajanatha</strong>
                    <span>IT</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>
          
        </div>

        <!-- Second Row End -->

      </div>
    </div>
    <!-- Team Section End -->

    <!-- Single testimonial Start -->
    <!-- <div class="single-testimonial-area">
      <div class="container">
        <div id="single-testimonial-item" class="owl-carousel"> -->
          <!-- Single testimonial Item -->
          <!-- <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Arman
                    <a href="#"> UIdeck</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Single testimonial Item -->
          <!-- <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Jeniffer
                    <a href="#"> GrayGrids</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Single testimonial Item -->
          <!-- <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Elon Musk<a href="#"> Tesla</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- end -->
@endsection

@section('galery')

            <div class="plain-flicker-gallery">
              <a href="#"><img src="{{asset('assets/img/portfolio/fbp/fbp1.jpg')}}" alt=""></a>
              <a href="#"><img src="{{asset('assets/img/portfolio/fbp/fbp2.jpg')}}" alt=""></a>
              <a href="#"><img src="{{asset('assets/img/portfolio/fbp/fbp3.jpg')}}" alt=""></a>
              <a href="#"><img src="{{asset('assets/img/portfolio/fbs/fbs1.jpg')}}" alt=""></a>
              <a href="#"><img src="{{asset('assets/img/portfolio/fbs/fbs2.jpg')}}" alt=""></a>
              <a href="#"><img src="{{asset('assets/img/portfolio/fbs/fbs3.jpg')}}" alt=""></a>
            </div>


@endsection