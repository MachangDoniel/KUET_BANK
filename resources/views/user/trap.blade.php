<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>KUET BANK</title>

    <!-- Bootstrap core CSS -->
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->

  <!-- ***** Main Banner Area End ***** -->

  @include('user.home.about')
  
  @include('user.home.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="user/vendor/jquery/jquery.min.js"></script>
  <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="user/assets/js/isotope.min.js"></script>
  <script src="user/assets/js/owl-carousel.js"></script>

  <script src="user/assets/js/tabs.js"></script>
  <script src="user/assets/js/swiper.js"></script>
  <script src="user/assets/js/custom.js"></script>
  <script>
    function toggleSection() {
      var hiddenSection = document.getElementById("hiddenSection");
      if (hiddenSection.style.display === "none") {
        hiddenSection.style.display = "block";
      } else {
        hiddenSection.style.display = "none";
      }
    }
  </script>
    
  </body>
</html>