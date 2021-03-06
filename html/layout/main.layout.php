<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Regna Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= APP_HOST ?>/img/favicon.png" rel="icon">
  <link href="<?= APP_HOST ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts 
  <link href="/https:fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  -->

  <!-- Bootstrap CSS File -->
  <link href="<?= APP_HOST ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= APP_HOST ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= APP_HOST ?>/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= APP_HOST ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          
          <!--======================
            Login selector
          ==========================-->
          <?php if (isset($_SESSION['loggedin'])): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['username'] ?></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit profile</a></li>
                <li><a href="<?= APP_HOST ?>/login/logout">Logout</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li>
              <a href="<?= APP_HOST ?>/login">Login</a>
            </li>
          <?php endif; ?>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
  
  
  <?php require $view; ?>
  
  
   <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= APP_HOST ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/easing/easing.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/wow/wow.min.js"></script>
  <!-- Google APIs 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  -->
  <script src="<?= APP_HOST ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?= APP_HOST ?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?= APP_HOST ?>/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?= APP_HOST ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= APP_HOST ?>/js/main.js"></script>

</body>
</html>