<!doctype html>
<html lang="en">

  <head>
    <title>KEND RENT CAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('web/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('web/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('web/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('web/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('web/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('web/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('web/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('web/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="{{url('homepage')}}">KEND RENT CAR</a>
              </div>
            </div>

            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-none"><a href="" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"></a></span>

              <nav class="site-navigation text-right ml-auto d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  @guest
                  <li ><a href="{{url('homepage')}}" class="nav-link">Home</a></li>
                  <li ><a href="{{url('aboutus')}}" class="nav-link">About Us</a></li>
                  <li><a href="{{url('login')}}" class="nav-link">Login</a></li>
                  @endauth
                  @auth
                  <li ><a href="{{url('homepage')}}" class="nav-link">Home</a></li>
                  <li><a href="{{url('transaction_order/'.Auth::user()->id)}}" class="nav-link">My Orders</a></li>
                  <li>
                     <a style="cursor: pointer;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                     <form id="logout-form" action="{{ url('log_out_customer') }}"
                      method="POST" style="display: none;">@csrf </form>
                  </li>
                  <li><a href="#" class="nav-link">Hallo {{Auth::user()->name}}</a></li>
                  @endauth
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </header>


        
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url({{url('web/images/hero_1.jpg')}}">
        <div class="container">
          <div class="row align-items-center">
            <p class="card-text">Kend Rent Car. Kend Rent Car. Kend Rent Car. Kend Rent Car. Kend Rent Car. Kend Rent Car..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="" target="_blank" >KEND RENT CAR</a>
                <p>
                  Developed by <a href="" target="_blank" >@micocandf</a>
                </p>
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{url('web/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('web/js/popper.min.js')}}"></script>
    <script src="{{url('web/js/bootstrap.min.js')}}"></script>
    <script src="{{url('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('web/js/jquery.sticky.js')}}"></script>
    <script src="{{url('web/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('web/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('web/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('web/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('web/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('web/js/aos.js')}}"></script>

    <script src="{{url('web/js/main.js"></script>
  <script src="https://use.fontawesome.com/f2fc9ac3b2.js"></script>
  </body>

</html>

