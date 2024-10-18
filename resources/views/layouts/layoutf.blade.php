<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Traversal Travel Category Bootstrap Responsive Template | Home :: W3layouts</title>
  <!-- google fonts -->
  @vite(['resources/assetsf/css/style-starter.css'])
<!-- Ajoutez ceci dans la section <head> ou avant </body> -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
 @include('partials.headerf')
  <!-- //header -->
  <!--banner-slider-->
  <!-- main-slider-->





  <!-- //testimonials -->
  @yield('content')
  <!--/w3l-footer-29-main-->
  @include('partials.footerf')

  <!-- Template JavaScript -->

  @vite(['assetsf/js/modernizr-2.6.2.min.js'])
  @vite(['assetsf/js/jquery.min.js'])
  @vite(['assetsf/js/theme-change.js'])
  @vite(['assetsf/js/jquery-3.3.1.min.js'])


  @vite(['assetsf/js/jquery.zoomslider.min.js'])

  <!--//slider-js-->
  @vite(['assetsf/js/owl.carousel.js'])

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  @vite(['assetsf/js/jquery.waypoints.min.js'])

  @vite(['assetsf/js/jquery.countup.js'])
  <script src="{{ mix('js/app.js') }}"></script>
  <script>
    $('.counter').countUp();
  </script>

  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });

    @yield('scripts')
  </script>
  <!--//MENU-JS-->

  @vite(['resources/assetsf/js/bootstrap.min.js'])
</body>

</html>
