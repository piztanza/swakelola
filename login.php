<?php
  session_start();
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
  <div class="loginPage">

  <?php include("navbar-both.php"); ?>

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
    <section id="loginSection" class="loginSection">
      <div class="container" data-aos="fade-up">

        <div class="login-logo">
          <img src="assets/img/perisai/logo-event.svg" alt="">
        </div>

        <div class="form-login">
          <form action="server/login.php" method="post" role="form" class="form-login-content" >
            <div class="row">
              <div class="col-md-12 form-group">
                <span>Silahkan masukan alamat email yang sudah anda daftarkan.</span>
                <input type="email" name="email" class="form-control form-custom-input" id="email" placeholder="Email" required>
              </div>
              <div class="lp-button" style="margin-top: 37px">
                <div class="row">
                  <div class="col-6 col-lg-6">
                  <input type="submit" name="login" class="lp-button-fill" style="margin-top: 27px;" value="Masuk">
                  </div>
                  
                  <div class="col-6 col-lg-6">
                    <span>Belum mendaftar?</span>
                  <a href="register.php" class="lp-button-no-fill">Daftar</a>
                  </div>
                </div>
              </div>
          </form>
        </div>

        
      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  
  <div class="credits">
    <a href="https://bpdp.or.id/" style="color: #ffffff; font-weight:600"> bpdp.or.id <a href="https://www.instagram.com/bpdpkelapasawit/" style="color: #ffffff; font-family: 'MontserratReg'">| @bpdpkelapasawit</a>
  </div>
  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
    <div class="lp-button">
          <div class="row">
            <div class="col-12 col-lg-12">
            <a href="#" class="lp-button-fill">DAY 1</a>
            <a href="#" class="lp-button-no-fill">LOMBA RISET SAWIT</a>
            </div>
            
            <div class="col-12 col-lg-12">
            <a href="#" class="lp-button-fill">DAY 2</a>
            <a href="#" class="lp-button-no-fill">E-BOOK</a>
            </div>
          </div>
        </div>
    </div>
  </footer>End Footer -->

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