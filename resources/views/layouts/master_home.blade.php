<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','programmingster')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link rel="icon" href="{{asset('images/icon.png')}}" type = "image/x-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- frontend2 -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend2/assets/css/style.css')}}" rel="stylesheet">

  <!-- frontend3 -->
   <!-- Vendor CSS Files -->
  <link href="{{asset('frontend2/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend2/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend2/assets/css/style.css')}}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header/Navbar ======= -->
  @include('layouts.body.header')
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <!-- End Intro Section -->

  <main id="main">

    @yield('home_content')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')
 <!-- End  Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/aos/aos.j')}}s"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <!-- frontend2 -->
   <script src="{{asset('frontend2/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend2/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend2/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset('frontend2/assets/js/main.js')}}"></script>
  
</body>

</html>