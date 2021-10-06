<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="author" content="Wanuja Ranasinghe(wanuja18@gmail.com)">
  <title>@yield('title','programmingster')</title>
  <link rel="canonical" href="https://www.programmingster.com/">
  
  <meta content="" name="description">
  <meta name="Keywords" content="HTML, Python, SQL, JavaScript, How to, PHP, Java, Bootstrap, CSS, MySQL, Software Engineering methods, React, Angular, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Flutter, Learning, Lessons, Source code, Demos, Tips">
  <meta name="robots" content="index, follow">
  <!-- Social Media Sharing Tags -->
  <!--  Essential META Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Page title">
    <meta property="og:description" content="Test description">
    <meta property="og:type" content="website">
    <meta property="og:image" content="favicon-400x400.png">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:card" content="favicon-400x400.png">


    <!--  Non-Essential, But Recommended -->

    <meta property="og:site_name" content="programminster">
    <meta name="twitter:image:alt" content="Alt text for image">


     <!-- Non-Essential, But Required for Analytics

    <meta property="fb:app_id" content="your_app_id" />
    <meta name="twitter:site" content="@website-username"> -->


  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#267cde">
  <meta name="msapplication-TileColor" content="#267cde">
  <meta name="theme-color" content="#ffffff">
  
  
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JBK9LFHH8S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JBK9LFHH8S');
  </script>
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