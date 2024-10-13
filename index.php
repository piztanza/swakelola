<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    if ($_SESSION['status_verifikasi'] == 0) {
      header("Location: verification.php"); // Redirect to the login page if not logged in
      exit();
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SWAKELOLA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/swakelola/LOGO SWAKELOLA rev.png" rel="icon">
  <link href="assets/img/swakelola/LOGO SWAKELOLA rev.png" rel="apple-touch-icon">

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
  <div class="homePage">

  <?php include("navbar-both.php"); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100" style="width: 100vw;">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/swakelola/carousel/carousel1.jpg" alt="Perisai 2024" style="width: 100%;" class="swiper-dekstop lazyload">
                <img src="assets/img/swakelola/carousel/mobile/carousel1.jpg" alt="swakelola 2024" style="width: 100%;" class="swiper-mobile lazyload">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/swakelola/carousel/carousel1.jpg" alt="swakelola 2024" style="width: 100%;" class="swiper-dekstop lazyload">
                <img src="assets/img/swakelola/carousel/mobile/carousel1.jpg" alt="swakelola 2024" style="width: 100%;" class="swiper-mobile lazyload">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="assets/img/swakelola/carousel/carousel1.jpg" alt="swakelola 2024" style="width: 100%;" class="swiper-dekstop lazyload">
              <img src="assets/img/swakelola/carousel/mobile/carousel1.jpg" alt="swakelola 2024" style="width: 100%;" class="swiper-mobile lazyload">
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <!-- <div class="about-title">
          <h1>What's Inside</h1>
          <img src="assets/img/perisai/logo-perisai-flat.svg" alt="Logo Perisai" style="width: 100%;">
        </div> -->

        <div class="about-desc">
            <h2>Program Swakelola</h2>
            <p>Cipta Kerja & Lapangan Usaha</p>
            <ul>
                <li>Bagi anda yang tidak memiliki pekerjaan tetap</li>
                <li>Bagi anda yang bingung mencari pekerjaan atau usaha</li>
                <li>Bagi anda yang butuh tambahan income</li>
                <li>Bagi anda yang ingin jadi pengusaha</li>
                <li>Bagi anda yang ingin upgrade skill</li>
                <li>Bagi anda yang ingin sukses</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

            <div class="gambar-home">
              <div class="row">
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                  <img src="assets/img/swakelola/program/gambar1.png" alt="Gambar Program">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                  <img src="assets/img/swakelola/program/gambar2.png" alt="Gambar Program">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                  <img src="assets/img/swakelola/program/gambar3.png" alt="Gambar Program">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>

            <div class="lp-button">
            <a href="register.php" class="lp-button-fill">DAFTAR</a>
            </div>

        </div>

        
      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  <!-- <div class="about-footer">
        <div class="about-title">
          <h1>RUNDOWN EVENT:</h1>
        </div>
    <div class="lp-button">
      <div class="row">
        <div class="col-12 col-lg-12">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#" class="lp-button-fill">DAY 1</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" href="#" class="lp-button-fill">DAY 2</button>
        <a href="lomba.php?page=lomba" class="lp-button-no-fill">LOMBA RISET SAWIT</a>
        </div>
    </div>
  </div> -->

  

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
  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </div>

      <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-scrollable overflow-hidden">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Schedule Day 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="w-100 overflow-hidden">
                  <img src="assets/img/perisai/day1.png" alt="gambar" class="w-100 h-100">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-scrollable overflow-hidden">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Schedule Day 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="w-100 overflow-hidden">
                  <img src="assets/img/perisai/day2.png" alt="gambar" class="w-100 h-100">
                </div>
              </div>
            </div>
          </div>
        </div>

        
</body>

</html>