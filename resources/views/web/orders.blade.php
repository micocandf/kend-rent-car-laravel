<!--<!doctype html>-->
<!--<html lang="en">-->

<!--  <head>-->
<!--    <title>KEND RENT CAR</title>-->
<!--    <link href="{{asset('web/images/kendrentcar.png')}}" rel="icon">-->
<!--  <link href="{{asset('style_home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">-->
<!--    <meta charset="utf-8">-->
<!--    <meta content="width=device-width, initial-scale=1.0" name="viewport">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

<!--    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">-->

<!--    <link rel="stylesheet" href="{{url('web/fonts/icomoon/style.css')}}">-->

<!--    <link rel="stylesheet" href="{{url('web/css/bootstrap.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/css/bootstrap-datepicker.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/css/jquery.fancybox.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/css/owl.carousel.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/css/owl.theme.default.min.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/fonts/flaticon/font/flaticon.css')}}">-->
<!--    <link rel="stylesheet" href="{{url('web/css/aos.css')}}">-->
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">-->
    <!-- MAIN CSS -->
<!--    <link rel="stylesheet" href="{{url('web/css/style.css')}}">-->

<!--  </head>-->

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
  <!-- End Header -->

  <!--<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">-->
    <body>
    
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
      <div class="site-mobile-menu-body"></div>
    </div>  
      <div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row justify-content-center text-center">
          @php $modelT = new App\Models\User(); @endphp
                @php $check = $modelT->get_contact(); @endphp
                @php $fix = str_split($check); 
                     unset($fix[0]);
                     $fix1=implode("",$fix);
                     $fix2 = '08'.$fix1;
                @endphp
          <div class="col-7 text-center mb-2 mt-5 p-2">
            <h2></h2>
            <p>This is the data table for your car rental order, pay attention to the status of the transaction, if you have just made a new rental request, please upload the proof of transfer first, and if you feel that you have paid and uploaded but there is no further action from us, please contact us via whatsapp by using this icon
              <a target="_blank" href="https://wa.me/{{$fix2}}"> <i style="cursor: pointer;" class="fa fa-whatsapp"></i></a>
            </p>
          </div>
          <div class="col-md-6 mb-3" align="center">
            <a href="{{url('homepage')}}" class="btn btn-block btn-success text-white">Back To Home</a>
          </div>
          <br>
        </div>

        <div class="col-lg-12" >
          <div class="table-responsive">
            <table class="table table-striped b-t b-b" id="tableok">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Code Transaction</th>
                  <th>Car Name</th>
                  <th>Day Price</th>
                  <th>Amount</th>
                  <th>Destination</th>
                  <th>Order date</th>
                  <th>Lease date</th>
                  <th>Return date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach($data as $car)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$car->code_transaction}}</td>
                  <td>{{$car->car->name_car}}</td>
                  <td>{{number_format($car->car->day_price)}}</td>
                  <td>{{number_format($car->amount)}}</td>
                  <td>{{$car->where_go}}</td>
                  <td>{{$car->transaction_date}}</td>
                  <td>{{$car->lease_date}}</td>
                  <td>{{$car->return_date}}</td>
                  <td>
                  @if($car->status_transaction== 'process' && $car->img_transaction==NULL)
                  <i class="fa fa-file"></i> Have not uploaded proof of transfer
                  @elseif($car->status_transaction== 'process' && $car->img_transaction!=NULL)
                  <i class="fa fa-clock"></i> Waiting Approval
                  @elseif($car->status_transaction== 'refuse' && $car->img_transaction!=NULL)
                  <i class="fa fa-close"></i> Refuse
                  @elseif($car->status_transaction== 'agree' && $car->img_transaction!=NULL)
                  <i class="fa fa-check"></i> Agree
                  @endif
                  </td>
                  <td>
                  @if($car->status_transaction== 'process' && $car->img_transaction==NULL)
                  <a title="Upload" class="btn btn-info btn-sm"
                    data-toggle="modal" 
                    data-target="#upload-{{$car->id}}">
                    <i class="fa fa-upload"></i>
                  </a>
                  @elseif($car->status_transaction== 'process' && $car->img_transaction!=NULL)
                  <a title="View" class="btn btn-info btn-sm"
                    data-toggle="modal" 
                    data-target="#waiting-{{$car->id}}">
                  <i class="fa fa-eye"></i>
                  </a>
                  @elseif($car->status_transaction== 'refuse' && $car->img_transaction!=NULL)
                  <a title="View" class="btn btn-danger btn-sm" data-toggle="modal" 
                    data-target="#refuse-{{$car->id}}">
                    <i class="fa fa-eye"></i>
                  </a>
                  @elseif($car->status_transaction== 'agree' && $car->img_transaction!=NULL)
                  <a title="View" class="btn btn-success btn-sm" data-toggle="modal" 
                    data-target="#agree-{{$car->id}}">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a title=" Download Invoice" target="_blank" 
                    href="{{url('transaction_print_invoice/'.$car->id)}}"
                    class="btn btn-success btn-sm">
                    <i class="fa fa-file"></i>
                  </a>
                  @endif     
                  </td>
                </tr>
                @php $no++; @endphp

                <!-- Modal -->
                <div class="modal" id="upload-{{$car->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                       
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Upload proof of transaction</h4>
                      </div>
                         
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form role="form" action="{{url('transaction_upload/'.$car->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                      <div class="form-group">
                             <label>File image transaction</label>
                             <input class="form-control" 
                             name="img_transaction" type="file">
                         </div>
                          <div class="form-group">
                             <label>List Of Account Number</label>
                             @foreach($banks as $b)
                             <p>Bank : {{$b->name_bank}}</p>
                             <p>Number : {{$b->no_rek}}</p>
                             <p>Name Of : {{$b->an}}</p>
                             @endforeach
                         </div>
                         </div>
                         
                         <!-- Modal footer -->
                         <div class="modal-footer">
                          <button type="submit" class="btn btn-info">Upload</button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         </div>
                         </form>
                       </div>
                     </div>
                   </div>
  
                   <div class="modal" id="waiting-{{$car->id}}">
                     <div class="modal-dialog">
                       <div class="modal-content">
                       
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">Your transaction under waiting approval by adminstrator, If you have further questions, please contact the whatsapp contact above.</h4>
                         </div>   
                         <!-- Modal footer -->
                         <div class="modal-footer">
                        
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
  
                   <div class="modal" id="refuse-{{$car->id}}">
                     <div class="modal-dialog">
                       <div class="modal-content">
                       
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">Your transaction was refuse by administartor, please check your data trasaction! If you have further questions, please contact the whatsapp contact above.</h4>
                           <h4></h4>
                         </div>   
                         <!-- Modal footer -->
                         <div class="modal-footer">
                        
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
  
                   <div class="modal" id="agree-{{$car->id}}">
                     <div class="modal-dialog">
                       <div class="modal-content">
                       
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">Your transaction has been approved by administartor, you can take the car on lease date now !</h4>
                         </div>   
                         <!-- Modal footer -->
                         <div class="modal-footer">
                        
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>  
                   @endforeach
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
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
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>
        <script type="text/javascript">
          $(document).ready(function() {
          $('#tableok').DataTable();
          } );</script>
  </body>

</html>

