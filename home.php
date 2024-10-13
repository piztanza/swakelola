<?php
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION['user_id'])) {
      header("Location: login.php"); // Redirect to the login page if not logged in
      exit();
  }

  if ($_SESSION['status_verifikasi'] == 0) {
    header("Location: verification.php"); // Redirect to the login page if not logged in
    exit();
  }

  $id = $_SESSION['user_id'];
  $fullname = $_SESSION['fullname'];
  $email = $_SESSION['email'];
  $username = explode("@", $email);
  $username = $username[0];
  $qr_path = $username . '_qrcode.png';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pekan Riset Sawit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/perisai/logo-sawit.svg" rel="icon">
  <link href="assets/img/perisai/logo-sawit.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <div class="loggedInPage">

  <?php include("navbar-login.php"); ?>

     <!-- ======= Header ======= -->
  <!-- <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/perisai/logo-kementrian.svg" alt="" class="img-fluid"></a>
      
      <div class="order-last order-lg-0">
        <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/perisai/logo-sawit.svg" alt="" class="img-fluid"></a>
      </div>

    </div>
  </header>End Header -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="loggedInSection" class="loggedInSection">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 col-lg-6 col-md-6" style="display: flex; justify-content: center">
            <div class="welcome-box">
              <p>Halo,<br> Selamat datang</p>
              <h1><?=$_SESSION['fullname']?></h1>
              <!-- <hr style="border-top: 2px solid #ffffff;opacity: 1;"> -->
                <div class="container-box">
                  <div class="box-qr">
                    <img src="qr_codes/<?=$qr_path?>" alt="" style="padding: 10px;width: 220px;">
                  </div>
                </div>
              <span>*Tunjukan QR-Code ini ke petugas registrasi di lokasi acara.</span><br>
              <span>*Registrasi bisa dilakukan H-1 acara ( 2 Oktober 2024) di Bali Nusa Dua Convention Center.</span>
            </div>
          </div>


          <!-- <div class="col-12 col-lg-6 col-md-6" style="display: flex;align-items: center;justify-content: center;">
            <div class="loggedIn-logo">
              <img src="assets/img/perisai/tiket-day1.svg" alt=""><br>
              <img src="assets/img/perisai/tiket-day2.svg" alt="">
            </div>
          </div> -->
        </div>    
      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  
  <!-- <div class="credits">
    <a href="https://bpdp.or.id/" style="color: #ffffff; font-weight:600"> bpdp.or.id <a href="https://www.instagram.com/bpdpkelapasawit/" style="color: #ffffff; font-family: 'MontserratReg'">| @bpdpkelapasawit</a>
  </div> -->
  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?>
  <!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </div>
</body>

</html>