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
  $instansi = $_SESSION['instansi'];
  $phone = $_SESSION['phone'];
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <section id="registerSection" class="registerSection">
      <div class="container" data-aos="fade-up" style="text-align: center;display: flex;align-items: center;justify-content: center;">
        <div class="row">
          <div class="col-12 col-lg-6 col-md-6" style="display: flex;align-items: center;justify-content: center;">
            <div class="register-logo">
              <img src="assets/img/perisai/logo-event.svg" alt="">
            </div>
          </div>

          <div class="col-12 col-lg-6 col-md-6">
            <div class="form-register">
              <form action="server/edit-profile.php" method="post" role="form" class="form-register-content" enctype="multipart/form-data" >
                <div class="row">
                  <div class="col-md-12 form-group">
                    <h1>Profile</h1>
                    <hr style="border-top: 2px solid #ffffff;opacity: 1;">
                    <br>
                    <input type="text" name="fullname" class="form-control form-custom-input" id="fullname" value=<?=htmlspecialchars($fullname)?> required><br>
                    <input type="text" name="instansi" class="form-control form-custom-input" id="instansi" value=<?=$instansi?> required><br>
                    <input type="email" name="email" class="form-control form-custom-input" id="email" value=<?=$email?> disabled="disabled">
                    <input type="email" name="email" class="form-control form-custom-input" id="email" value=<?=$email?> hidden><br>
                    <input type="tel" name="phone" class="form-control form-custom-input" id="phone" value=<?=$phone?> required>
                  </div>
                  <div class="lp-button" style="margin-top: 37px">
                    <div class="row">
                      <div class="col-12 col-lg-12">
                      <input type="submit" name="edit" class="lp-button-fill" style="margin-top: 27px;" value="Edit Profile">
                      </div>
                    </div>
                  </div>
              </form>
            </div>

          </div>
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