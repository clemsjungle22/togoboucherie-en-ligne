<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Togo Boucherie - en Ligne</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="{{asset('index/img/boucherie.png')}}" rel="icon"style="width:200px;">
  <link href="{{asset('index/img/boucherie.png')}}" rel="apple-touch-icon" style="width:200px;">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
 

  <!-- Vendor CSS Files -->
  
  <link href="{{asset('index/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('index/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->

    @include('partials\header')
  <!-- ======= Container ======= -->

    @yield('context')

  <!-- ======= endContainer ======= -->
  

  <!-- ======= Footer ======= -->
    @include('partials\footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('index/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('index/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('index/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('index/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('index/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('index/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('index/js/main.js')}}"></script>

</body>

</html>