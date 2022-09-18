<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Header - Elaundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet"> 


</head>
<body>
	 <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@elaundry.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0310 6377540</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><img src="assets/img/logo.png" alt="eLaundry"></a></h1> -->
         <a href="../index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar nav">
        <ul>
          <li><a id="one" href="../index.php">Home</a></li>
          <li><a id="two" href="../about.php">About</a></li>
          <!-- <li><a id="three" href="services.php">Services1</a></li> -->
          <li class="dropdown"><a href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="laundry-services.php">Laundry Services</a></li>
              <li><a href="dry-cleaning.php">Dry Cleaning</a></li>
              <li><a href="carpet-cleaning.php">Carpet Cleaning</a></li>
              <li><a href="steam-iron.php">Steam Iron</a></li>
              <li><a href="curtains-cleaning.php">Curtains Cleaning</a></li>
              <li><a href="#">Wash only/Iron only</a></li>
            </ul>
          </li>
          <li><a id="four" href="../pricing.php">Pricing</a></li>
          <li><a id="five" href="../contact.php">Contact</a></li>
          <li id="login"><a href="../login/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main JS File --> 
  <script src="../assets/js/main.js"></script>

  <!-- Script for active menu color--> 
    <script type="text/javascript"> 
    var title = (document.title);
    if ( title == "GreenVilla-Laundry Services") {
      var element = document.getElementById("one");
      console.log(element);
      element.classList.add("active");
    }
    if ( title == "About-Laundry Services") {
      var element = document.getElementById("two");
      console.log(element);
      element.classList.add("active");
    }
    if ( title == "Services-Laundry Services") {
      var element = document.getElementById("three");
      console.log(element);
      element.classList.add("active");
    }
    if ( title == "Pricing-Laundry Services") {
      var element = document.getElementById("four");
      console.log(element);
      element.classList.add("active");
    }
    if ( title == "Contact-Laundry Services") {
      var element = document.getElementById("five");
      console.log(element);
      element.classList.add("active");
    }

  </script> 


</body>
</html>