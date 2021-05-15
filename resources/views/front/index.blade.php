<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/front/img/favicon.png" rel="icon">
  <link href="/front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  {!! htmlScriptTagJsApi(['lang' =>'fa']) !!}


  <!-- Libraries CSS Files -->
  <link href="/front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/front/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/front/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/front/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  @include('front.navbar')

  @yield('content')

  @include('front.footer')



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="/front/lib/jquery/jquery.min.js"></script>
  <script src="/front/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/front/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/front/lib/easing/easing.min.js"></script>
  <script src="/front/lib/mobile-nav/mobile-nav.js"></script>
  <script src="/front/lib/wow/wow.min.js"></script>
  <script src="/front/lib/waypoints/waypoints.min.js"></script>
  <script src="/front/lib/counterup/counterup.min.js"></script>
  <script src="/front/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/front/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="/front/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="/front/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/front/js/main.js"></script>

</body>
</html>
