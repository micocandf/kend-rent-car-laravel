<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kend Rent Car - Order</title>
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


  <link rel="stylesheet" href="{{asset('web/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('web/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('web/css/aos.css')}}">
  

  <!-- Template Main CSS File -->
  <link href="{{asset('style_home/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <img class="logo img" src="{{asset('web/images/kendrentcar.png')}}" width="60" height="60" alt="Kend Rent Car">
              <h1 class="logo me-auto me-lg-0"><a href="{{url('homepage')}}">KEND RENT A CAR</a></h1>
              
            <!-- .navbar -->
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @auth
                <li><a class="nav-link scrollto " href="#hero">Home</a></li>
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

          <!--<a href="{{url('homepage')}}" class="get-started-btn scrollto">Home</a>-->
        </div>
      </div>

    </div>
  </header> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container mt-4">
        <ol>
          <li><a href="{{url('homepage')}}">Home</a></li>
          <li>Order Page</li>
        </ol>
        <h2>Order Page</h2>
      </div>
    </section>

      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row gy-4">  
            <div class="col-lg-8 mb-5">
              <form  action="{{url('transaction_add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <div class="col-md-6 mb-2">
                    <label>Full Name</label>
                    <input readonly type="text" class="form-control" value="{{Auth::user()->name}}">
                  </div>
                   <div class="col-md-6 mb-2">
                    <label>Email</label>
                    <input readonly type="text" class="form-control" value="{{Auth::user()->email}}">
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-6 mb-2">
                    <label>Phone Number</label>
                    <input readonly type="text" class="form-control" value="{{Auth::user()->phone_number}}">
                  </div>
                   <div class="col-md-6 mb-2">
                    <label>Address</label>
                    <input readonly type="text" class="form-control" value="{{Auth::user()->address}}">
                     <input name="car_id" type="hidden" class="form-control" value="{{$cars->id}}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-6 mb-2">
                    <label>Lease Time</label>
                    <input required type="time" class="form-control" id="time1" name="lease_time">
                  </div>
                   <div class="col-md-6 mb-2">
                    <label>Return Time</label>
                    <input required type="time" class="form-control" id="time2" name="return_time">
                  </div>
                </div>
  
               <div class="form-group row">
                  <div class="col-md-6 mb-2">
                    <label>Lease Date</label>
                    <input required type="date" class="form-control" id="date1" name="lease_date">
                  </div>
                   <div class="col-md-6 mb-2">
                    <label>Return Date</label>
                    <input required type="date" class="form-control" id="date2" name="return_date">
                  </div>
                </div>
  
                 <div class="form-group row">
                  <div class="col-md-6 mb-2">
                    <label>Where You Go?</label>
                    <input required type="text" class="form-control" placeholder="Where You Go?" name="where_go">
                  </div>
                   <div class="col-md-6 mb-2">
                    <label>Upload Identity Card</label>
                    <input required type="file" class="form-control" name="img_ktp">
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-6">
                    <a style="cursor: pointer;" onclick="get_summary()" class="btn btn-block btn-primary text-white">Preview Summary</a>
                  </div>
                   <div class="col-md-6">
                    <a href="{{url('homepage')}}" class="btn btn-block btn-success text-white">Back To Home</a>
                  </div>
                </div>
              
                <div class="col-lg-8 mb-5" id="preview_info" style="display: none">
                   <p>Preview Summary Order Car</p>
                 <!--  <form action="#" method="post"> -->
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label>Range Day</label>
                        <input readonly type="text" id="range_day" class="form-control" >
                      </div>
      
                       <div class="col-md-6">
                        <label>Amount</label>
                        <input readonly type="text" id="amount_fix" name="amount" class="form-control">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-primary text-white">Submit Rental <i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </form>
                </div>

            </div>
            <input type="hidden" id="price_car" value="{{$cars->day_price}}">
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Car Info</h3>
                <ul>
                  <li><strong>Car name</strong>: {{$cars->name_car}}</li>
                  <li><strong>Price</strong>: {{number_format($cars->day_price)}}/Day</li>
                  <li><strong>Fine</strong>: {{number_format($cars->fine)}}</li>
                  <li><strong>Vendor</strong>: {{$cars->vendor->name_vendor}}</li>
                  <li><strong>Doors</strong>: {{$cars->doors}} Door</li>
                  <li><strong>Seats</strong>: {{$cars->seats}} Seat</li>
                  <li><strong>Image</strong>: </li>
                  <li></li><img src="{{$cars->img_car}}" height="150px" width="300px"></li>
                </ul>
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
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('style_home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('style_home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


  <script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('web/js/popper.min.js')}}"></script>
  <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('web/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('web/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('web/js/aos.js')}}"></script>
  <script src="{{asset('web/js/main.js')}}"></script>
  

  <!-- Main JS File -->
  <script src="{{asset('style_home/assets/js/main.js')}}"></script>
  

  <script type="text/javascript">
    function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }
    function get_summary()
    {
        $('#preview_info').show();
        var date1 = document.getElementById("date1").value;
        var date2 = document.getElementById("date2").value;
        const diffDays = (date, otherDate) => Math.ceil(Math.abs(date - otherDate) / (1000 * 60 * 60 * 24));
        // Example
        var price = document.getElementById("price_car").value;
        var result = diffDays(new Date(date1), new Date(date2));   // 1839
        $('#range_day').val(result +' '+ 'Days');
        var amount = result * price;
        $('#amount_fix').val(numberWithCommas(amount));
    }
  </script>

</body>

</html>