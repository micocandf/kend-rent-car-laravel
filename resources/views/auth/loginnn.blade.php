<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN | KEND RENT CAR</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('style_login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('style_login/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
				<div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('web/images/kendrentcar.png')}}" alt="sing up image"></figure>
                    </div>					
                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
						@if($message=Session::get('success'))
						<div class="alert bg-teal" role="alert">
							<em class="fa fa-lg fa-check">&nbsp;</em> 
						{{$message}}
						</div>
						@endif
						@php $modelT = new App\Models\User(); @endphp
						@php $check = $modelT->get_contact(); @endphp
						@php $fix = str_split($check); 
							unset($fix[0]);
							$fix1=implode("",$fix);
							$fix2 = '62'.$fix1;
						@endphp
                        <form method="POST" action="{{route('login')}}"" role="form">
							@csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
							<a href="#">Create New Account</a>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-whatsapp"></i></a></li>
                            </ul>
							<div class="back-home">
								<a href="{{url('homepage')}}"> Back To Home</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('style_login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style_login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>