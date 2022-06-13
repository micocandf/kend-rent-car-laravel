<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kend Rent a Car</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('web/images/kendrentcar.png')}}" rel="icon">
  <link href="{{asset('style_home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('style_home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('style_home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style_home/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('style_home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('style_home/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('style_home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style_home/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <img class="logo img" src="web/images/kendrentcar.png" width="60" height="60" alt="Kend Rent Car">
                <!--<a href="{{url('homepage')}}" class="logo me-auto me-lg-0"><img src="web/images/kendrentcar.png" alt="" class="img-fluid"></a>-->
                <h1 class="logo me-auto me-lg-0"><a href="{{url('homepage')}}">KEND RENT A CAR</a></h1>                       
           
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @guest
                <!--<li><a class="nav-link scrollto active" href="#hero">Home</a></li>-->
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Car List</a></li>
                <li><a class="nav-link scrollto" href="#terms">Terms & Condition</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>          
                <li></li>
                <li><a href="{{url('login')}}" class="">LOGIN</a></li>
                @endauth
                @auth
                <li><a class="nav-link scrollto" href="{{url('transaction_order/'.Auth::user()->id)}}">My Orders</a></li>
                <li>
                    <a class="nav-link scrollto" style="cursor: pointer;" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('log_out_customer') }}"
                        method="POST" style="display: none;">@csrf </form>
                    </li>
                    <li><a href="#" class="nav-link scrollto">{{Auth::user()->name}}</a></li>
                        @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        </div>
      </div>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Rental Mobil Pontianak</h1>
          <h2>Siap Melayani Dan Memenuhi Kebutuhan Perjalanan Anda</h2>
        </div>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
            <span align="justify">Solusi terbaik saat ingin melakukan perjalanan ataupun liburan ke kota Pontianak atau kota-kota besar di Kalimantan Barat adalah rental mobil harian. 
            Layanan tersebut tersedia di Kend Rent Car dalam bentuk website sewa mobil online. Anda dapat dengan mudah mengakses layanan tersebut melalui website kami langsung di ponsel itu sendiri. Dalam satu website, Anda dapat menemukan beragam pilihan rental mobil murah di kota Pontianak yang lebih lengkap. Berdasarkan pilihan yang tersedia, Anda dapat membandingkan layanan, jenis dan kualitas sehingga kemudian langsung memesan perjalanan yang paling tepat untuk perjalanan Anda. Selamat menikmati perjalanan yang nyaman dan menyenangkan bersama Kend Rent Car!</span>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 align-items-stretch">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-clock-history"></i></div>
              <h4><a href="">Support Kendaraan Darurat</a></h4>
              <p>Tim Kend Rent Car siap membantu Anda 24/7 dan juga dalam keadaan darurat. Kend Rent Car selalu siap membantu kamu!</p>            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-md-0">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-key"></i></div>
              <h4><a href="">Layanan Lepas Kunci Luar & Dalam Kota</a></h4>
              <p>Melayani sesuai kebutuhan pelanggan dengan layanan lepas kunci dan layanan penyewaan dengan driver.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Pelayanan Pelanggan Cepat</a></h4>
              <p>Siap melayani kebutuhan pelanggan dengan cepat dan tanggap sesuai dengan kebutuhan.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-minecart"></i></div>
              <h4><a href="">Pemesanan Melalui Website Secara Online</a></h4>
              <p>Proses dilakukan secara online yang dapat memudahkan pelanggan dalam melakukan pemesanan.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-lock-fill"></i></div>
              <h4><a href="">Jaminan Transaksi Aman Secara Online</a></h4>
              <p>Transaksi Aman di Kend Rent Car dengan teknologi SSL dari Geotrust yang memastikan semua informasi. Aman dalam setiap transaksi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-pin-map-fill"></i></div>
              <h4><a href="">Layanan Antar & Jemput</a></h4>
              <p>Pelayanan antar-jemput yang ditujukan untuk perorangan maupun perusahaan dalam antar-jemput karyawan dari dan ke tempat kerja, tamu perusahaan atau perhotelan yang melayani antar-jemput dari dan ke bandara, dan juga untuk keperluan wisata dan lainnya.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
      
              <div class="section-title">
                <h2>About Us</h2>
                <p>Kend Rent Car adalah penyedia layanan rental mobil yang beroperasi di Pontianak. Menggunakan armada mobil keluaran baru, dengan kondisi terawat untuk disewakan kepada Anda. Pilihan mobil yang kami sediakan sangat variatif dan harga yang sangat kompetitif di Pontianak. Kami menawarkan untuk Anda seperti: Toyota Alphard, Vellfire, Camry, Toyota Innova, Daihatsu Xenia, Avanza, Suzuki APV, Nissan, Grand Livina dan Toyota Hiace. Anda dapat menyewa mobil untuk harian maupun bulanan dengan supir ataupun tanpa supir. Kami mengutamakan kebersihan dari setiap armada untuk kenyamanan para customer. Kend Rent Car berkomitmen untuk menjadi mitra sewa kendaraan terpercaya bagi Anda.</p>
              </div>
      
              <div class="row content">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="ri-check-double-line"></i> Maintenance Mobil Setiap Saat</li>
                    <li><i class="ri-check-double-line"></i> Kenyamanan Berkendara</li>
                    <li><i class="ri-check-double-line"></i> Kebersihan Mobil Terjaga</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call Us</h3>
            <p> If you have further questions please contact us.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Whatsapp</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bi bi-award"></i>
              <h4>Pelayanan Terbaik</h4>
              <p>Kepuasan pelanggan kami utamakan.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harga Bersaing</h4>
              <p>Harga terbaik dipasaran.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Jaringan Luas</h4>
              <p>Kami menjangkau banyak lokasi.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Keamanan Terjamin</h4>
              <p>Keamanan prioritas kami.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{asset('web/images/innova.png')}}");'></div>
        </div>

      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>What we have achieved so far</h3>
          <p>Here is the amount of data we have.</p>
        </div>

        <div class="row counters position-relative">
            
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>            
            <p>Cars</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2657" data-purecounter-duration="1" class="purecounter"></span>
            <p>Orders</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Drivers</p>
          </div>
          
        </div>
      </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
          <h2>Car List</h2>
        </div>
        @php $modelT = new App\Models\Transaction(); @endphp
        <div class="row">
        @foreach($cars as $car)
        @php $check = $modelT->checkRental($car->id); @endphp
          <div class="col-lg-4 col-md-6">
            <div class="box mb-4">
                <h2>{{$car->name_car}}</h2>
              <img src="{{$car->img_car}}" class="img-fluid" alt="">
              <ul>               
                <p>
                  Doors : {{$car->doors}}                
                </p>
                <p>
                  Seats : {{$car->seats}}
                </p>
                <p>
                  Transmision : {{$car->type_car}}
                </p>
                <p>
                  Vendor : {{$car->vendor->name_vendor}}
                </p>
                <h3>
                  Day Price : {{number_format($car->day_price)}}
                </h3>
              </ul>
              <div class="btn-wrap">
                @if(count($check) > 0)
                <h3>Is Being leased</h3>
                 <!--<a href="#" class="btn btn-default">Is being leased</a> -->
                @else
                <a href="{{url('rental_car/'.$car->id)}}" class="btn-buy">Rent Now</a>
                @endif
              </div>
            </div>
          </div>
          @endforeach
          <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="{{$cars->links()}}">1</a></li>
            <!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->
            <!--<li class="page-item"><a class="page-link" href="#">3</a></li>-->
            <li class="page-item">
              <a class="page-link" href="{{$cars->links()}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

        </div>
      </div>
    </section>
    

        <!-- ======= Terms & Condition Section ======= -->
        <section id="terms" class="about">
          <div class="container">
    
            <div class="section-title">
              <h2>Terms & Condition</h2>
              <p>Sewa Lepas Kunci</p>
            </div>
    
            <div class="row content">
              <div class="col-lg-6">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <!--<div class="col-lg-6 pt-4 pt-lg-0">-->
              <!--  <p>-->
              <!--    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
              <!--    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
              <!--    culpa qui officia deserunt mollit anim id est laborum.-->
              <!--  </p>-->
              <!--  <a href="#" class="btn-learn-more">Learn More</a>-->
              <!--</div>-->
            </div>
    
          </div>
        </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.264175917013!2d109.3796373!3d-0.0612043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fd6b784333b274c!2srental%20mobil%20pontianak%20(KendRent%20a%20Car)!5e0!3m2!1sen!2sid!4v1624858515155!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>Location:</h4>
                <p>Jl. Tj. Raya II Komp vila kurnia No.B 20, Kapur, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78234</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p>+62852-5266-7918</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kend Rent Car</h3>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        Copyright &copy;2021 <strong><span>Kend Rent Car</span></strong>
        <div class="copyright mb-1">All Rights Reserved</div>
      </div>
      <div class="credits">        
        Developed by <a href="https://instagram.com/micocandf?utm_medium=copy_link">@micocandf</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('style_home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('style_home/assets/js/main.js')}}"></script>

</body>

</html>