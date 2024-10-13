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
  <div class="lombaPage">

  

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
    <section id="lombaSection" class="lombaSection">
      <div class="container" data-aos="fade-up" style="text-align: center;display: flex;align-items: center;justify-content: center; background-color: #ffffff;border-radius: 30px;padding-top: 22px;">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12" style="margin-bottom: 22px;">
            <div class="container d-flex align-items-center justify-content-lg-between" style="max-width: 98%;">
      
                <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/perisai/logo-dark.svg" alt="" class="img-fluid"></a>
      
                <a href="index.php" class="logo me-auto me-lg-0" style="margin-left: 8px; max-width: 410px;"><img src="assets/img/perisai/logo-perisai-flat-dark.svg" alt="" class="img-fluid" style="width: 95%;"></a>
      
                <nav id="navbar-loggedIn" class="navbar-loggedIn order-last order-lg-0">
                  <ul>
                  <!-- <img src="assets/img/perisai/icon/HOME.svg" alt=""> -->
                    <li><a class="nav-link scrollto" href="index.php?page=home">Home</a></li>
                    <li><a class="nav-link scrollto" href="login.php?page=login">Login</a></li>
                    <li><a class="nav-link scrollto" href="faq.php?page=faq">FAQ</a></li>
                  </ul>
                  <i class="bi bi-list mobile-nav-toggle-loggedIn"></i>
                </nav>
                <!-- .navbar -->
      
                <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
      
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-6" style="display: flex;align-items: center;justify-content: center;">
            <div class="lomba-logo">
              <img src="assets/img/perisai/logo-lomba.svg" alt="">
            </div>
          </div>

          <div class="col-12 col-lg-6 col-md-6">
              <div class="container" data-aos="fade-up">
                <div class="lomba-desc">
                  <p>Kegiatan Pekan Riset Sawit Indonesia dimaksudkan untuk melakukan diseminasi hasil penelitian dan pengembangan kepada para pelaku industri termasuk UMKM dan Koperasi. Diharapkan dari hasil diseminasi ini akan terjadi pemanfaatan hasil riset oleh industri dan pelaku usaha termasuk kerjasama untuk mendorong serta mempercepat proses kesiapan produk riset untuk memasuki tahap komersialisasi. Pekan Riset Sawit Indonesia tahun 2024 juga dimaksudkan untuk melaksanakan Final Lomba Riset Sawit Tingkat Mahasiswa untuk menentukan Juara I, II dan III.
                  </p>

                  <p>Kegiatan ini bertujuan untuk meningkatkan kolaborasi pemerintah, peneliti, dan pelaku di industri sawit serta memperkenalkan hasil riset yang telah dilakukan melalui program GRS BPDPKS dalam kegiatan Pekan Riset Sawit tahun 2024 ini akan menghadirkan panel diskusi hasil penelitian dan pengembangan sawit, pameran produk dan poster hasil penelitian  dan pengembangan sawit, talkshow pemanfaatan produk hasil riset sawit, business engagement, serta lomba riset sawit tingkat mahasiswa</p>
                </div>

                <div class="lp-button-lomba" style="margin-top: 37px">
                  <div class="row">
                    <div class="col-6 col-lg-6">
                    <a id="btn-pdf1" href="#pdf1" class="lp-button-lomba-fill nav-link scrollto" onclick="showPdf1()">Partisipan</a>
                    </div>
                    
                    <div class="col-6 col-lg-6">
                    <a href="#pdf2" target="_blank" class="lp-button-lomba-fill nav-link scrollto" onclick="showPdf2()">Agenda Acara</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
            <iframe id="pdf1" frameborder="0" scrolling="no" src="https://docs.google.com/gview?embedded=true&url=https://pekanrisetsawit.id/assets/pdf/DATA PERSERTA LRS.pdf" style="display: none; height: 100vh;"></iframe>
              <iframe id="pdf2" frameborder="0" scrolling="no" src="https://docs.google.com/gview?embedded=true&url=https://pekanrisetsawit.id/assets/pdf/lrs-agenda.pdf" style="display: none; height: 100vh;"></iframe>
            <!-- <iframe id="pdf1" frameborder="0" scrolling="no" src={`/pdfjs-4.6.82-dist/web/viewer.html?file=https://pekanrisetsawit.id/assets/pdf/DATA PERSERTA LRS.pdf`} style="display: none; height: 100vh;"></iframe>
              <iframe id="pdf2" frameborder="0" scrolling="no" src="https://pekanrisetsawit.id/assets/pdf/lrs-agenda.pdf" style="display: none; height: 100vh;"></iframe> -->
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

  <script>
    let openPdf1 = 0
    let openPdf2 = 0
      function showPdf1() {
        window.open("https://docs.google.com/viewerng/viewer?url=https://pekanrisetsawit.id/assets/pdf/DATA PERSERTA LRS.pdf");
        // if (openPdf1 === 0) {
        //   document.getElementById("pdf1").style.display = "block";
        //   document.getElementById("pdf2").style.display = "none";
        //   openPdf1 = 1
        //   openPdf2 = 0
        // } else {
        //   document.getElementById("pdf1").style.display = "none";
        //   openPdf1 = 0
        // }
      }
      function showPdf2() {
        window.open("https://docs.google.com/viewerng/viewer?url=https://pekanrisetsawit.id/assets/pdf/lrs-agenda.pdf");
        // if (openPdf2 === 0) {
        //   document.getElementById("pdf2").style.display = "block";
        //   document.getElementById("pdf1").style.display = "none";
        //   openPdf2 = 1
        //   openPdf1 = 0
        // } else {
        //   document.getElementById("pdf2").style.display = "none";
        //   openPdf2 = 0
        // }
      }
  </script>
  </div>
</body>

</html>