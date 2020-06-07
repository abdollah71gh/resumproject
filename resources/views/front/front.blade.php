<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>رزومه من</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front/assets/img/favicon.png" rel="icon">
  <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/front/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{url('/front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('/front/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{url('/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('/front/assets/vendor/aos/aos.css')}}" rel="stylesheet">

{!! htmlScriptTagJsApi(['lang'=>'fa']) !!}
  <!-- Template Main CSS File -->
  <link href="{{url('/front/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>


@include('front.header')

  <!-- ======= Hero Section ======= -->
@include('front.hero')

@yield('content')

 @include('front.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('/front/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('/front/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('front/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{url('/front/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('/front/assets/js/main.js')}}"></script>

</body>

</html>
