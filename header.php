<?php 
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Radiance LPG Petrochem Pvt. Ltd. </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>HIND GAS</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a <?php if($curPageName=="index.php") { ?> class="active" <?php } ?> href="index.php">Home</a></li>
          <li><a <?php if($curPageName=="about.php") { ?> class="active" <?php } ?> href="about.php">About</a></li>
          <!-- <li><a <?php if($curPageName=="allaboutlpg.php") { ?> class="active" <?php } ?> href="allaboutlpg.php">All about LPG</a></li> -->

          <li class="dropdown"><a href="#"><span>All about LPG</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="allaboutlpg.php">What is LPG</a></li>
              <li><a href="refining.php">Refining</a></li>
              <li><a href="lpgproperties.php">LPG Properties</a></li>
              <li><a href="lpgbenefits.php">LPG Benefits</a></li>
            </ul>
          </li>

          <li><a <?php if($curPageName=="services.php") { ?> class="active" <?php } ?> href="services.php">Services</a></li>
          <li><a <?php if($curPageName=="team.php") { ?> class="active" <?php } ?> href="team.php">Team</a></li>
          <li><a  <?php if($curPageName=="contact.php") { ?> class="active" <?php } ?>  href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>