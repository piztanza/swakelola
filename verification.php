<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}
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
  <div class="eBookPage">

  <?php include("navbar-verification.php"); ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="eBookSection" class="eBookSection">
      <div class="container" data-aos="fade-up">
        <div class="container-box-page" style="margin-top: 45px;">
            <h1>Verifikasi E-Mail</h1>
            <form method="post" action="server/verification.php" class="w-100" enctype="multipart/form-data">
      

              <section class="section-base mb-5">
                <div class="w-100 input-wrapper d-block p-2" style="background: #ffffff90;">
                  <div class="w-100 input-wrapper flex-column align-items-center px-2 py-4" style="border: 1px solid #005256; background-image: none;">
                    <p class="mb-1 text-center" style="color: #000000; font-size: clamp(1.5em,3vw,3em);">Verification Code</p>

                    <p class="text-xs text-center mb-5" style="color: #000000;">
                      Gunakan kode yang telah dikirim ke email Anda
                    </p>

                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <div class="w-100 overflow-hidden py-2 input-wrapper mb-3" style="border-radius: 30px; max-width: 420px">
                        <input type="text" minlength="6" pattern="[0-9]{6}" id="code" name="code" placeholder="Verification Code" class="px-3 w-100 bg-transparent input-transparent text-xs" style="color: #005256;">
                        <span style="color: #000000; font-size: 12px"> *Periksa kode verifikasi di kotak masuk email jika tidak ada periksa di kolom spam atau junk</span>
                      </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center w-100 lp-button">
                      <button type="submit" id="submit-verification" name="submit-verification"  class="lp-button-fill" >
                        Verification
                      </button>
                    </div>

                  </div>
                </div>
              </section>
                
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