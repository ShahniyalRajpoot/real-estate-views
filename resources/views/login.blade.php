<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('/assets/login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    @if(session()->has('msg'))
        <div class="alert alert-{{session()->pull('type')}}" role="alert">
            {{session()->pull('msg')}}
        </div>
    @endif
    <div class="container-login100" style="background-image: url({{url('/assets/login/images/bg-01.jpg')}});">

        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{route('submit-login')}}">
                @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="email" placeholder="Enter Your Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1 SignUpBtn" href="{{route('register-route')}}">
                        Sign Up?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('/assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{url('/assets/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('/assets/login/js/main.js')}}"></script>

</body>
</html>
