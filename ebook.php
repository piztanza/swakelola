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

  <?php include("navbar-both.php"); ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="eBookSection" class="eBookSection">
      <div class="container" data-aos="fade-up">
        <div class="container-box-page" style="margin-top: 45px;">
            <h1>E-Book Grant Riset Sawit</h1>
            <section class="section-base mb-5 overflow-hidden" style="padding: 26px clamp(1em, 3vw, 5%);height: calc(100vh - 94px);background-color: rgba(8, 43, 68, 0.8);border-radius: 30px;">
                <div class="myScrollbar w-100 h-100" style="overflow-y: auto;">
                  <div class="row mx-0">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                        <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2023.pdf" download="Buku Ringkasan GRS 2023.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                          <div class="w-100 h-100 overflow-hidden">
                            <img src="assets/img/ebook/ebook-thumb-2024.png" class="w-100 h-80" />
                            <div class="container container-ebook">
                              <h4><b>2024</b></h4>
                            </div>
                          </div>
                          <div class="shelf"></div>
                        </a>
                      </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2023.pdf" download="Buku Ringkasan GRS 2023.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2023.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2023</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2022.pdf" download="Buku Ringkasan GRS 2022.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2022.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2022</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2021.pdf" download="Buku Ringkasan GRS 2021.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2021.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2021</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2020.pdf" download="Buku Ringkasan GRS 2020.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2020.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2020</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2019.pdf" download="Buku Ringkasan GRS 2019.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2019.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2019</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2018.pdf" download="Buku Ringkasan GRS 2018.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2018.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2018</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2016.pdf" download="Buku Ringkasan GRS 2016.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2016.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2016</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 card">
                    <a href="https://ebook.pekanrisetsawit.id/Buku Ringkasan GRS 2015.pdf" download="Buku Ringkasan GRS 2015.pdf" class="d-block w-100 h-100 py-3 cursor-pointer text-decoration-none">
                      <div class="w-100 h-100 overflow-hidden">
                        <img src="assets/img/ebook/ebook-thumb-2015.png" class="w-100 h-80" />
                        <div class="container container-ebook">
                          <h4><b>2015</b></h4>
                        </div>
                      </div>
                      <div class="shelf"></div>
                    </a>
                  </div>
                </div>
              </div>
                <!-- <p class="text-white mb-0" style="font-size: clamp(12px, 3vw, 14px)">*Anda hanya bisa melakukan vote sebanyak 1x.</p> -->
              </section>
        </div>
      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  
  <div class="credits">
    <a href="https://bpdp.or.id/" style="color: #ffffff; font-weight:600"> bpdp.or.id <a href="https://www.instagram.com/bpdpkelapasawit/" style="color: #ffffff; font-family: 'MontserratReg'">| @bpdpkelapasawit</a>
  </div>

  <?php include("footer.php"); ?>
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