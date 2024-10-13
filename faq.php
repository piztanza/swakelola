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
        <div class="container-box-page">
            <img src="assets/img/perisai/logo-perisai-flat.svg" alt="" style="width: 80%;max-width: 600px;margin-bottom: 7px;">
            <h1>Frequently Asked Questions (F.A.Q.)</h1>
            <div class="accordion" id="accordionExample" style="--bs-accordion-bg: #ffffff50;">
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong>1. Apa itu PERISAI 2024?</strong>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                    PERISAI (Pekan Riset Sawit Indonesia) merupakan acara yang diselenggarakan oleh Badan Pengelola Dana Perkebunan Kelapa Sawit dalam rangka memperkenalkan hasil riset kepada seluruh stakeholder kelapa sawit (Pemerintah, Swasta, Asosiasi, Industri di Bidang Kelapa Sawit dan turunannya serta industri lainnya yang terkait, dan masyarakat umum). Tema PERISAI 2024 yaitu “Green Gold: Transforming Palm Oil Industry Through Cutting-Edge Technologies".
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>2. Kapan acara PERISAI 2024 dilaksanakan?</strong>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                    PERISAI 2024 akan dilaksanakan selama 2 (dua) hari, pada tanggal 3 dan 4 Oktober 2024 bertempat di Nusa Dua, Bali.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>3. Kegiatan apa saja yang ada dalam PERISAI 2024?</strong>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">
                      Pada hari pertama, akan dilaksanakan opening ceremony dengan menghadirkan keynote speaker Menteri Koordinator Bidang Perekonomian* dan Menteri Perindustrian*. 
                      Kemudian, dilanjutkan dengan Plenary Session terkait dengan beberapa fokus riset, antara lain:
                    </p>

                    <ol>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Bioenergi
                        </p>
                        <p class="text-dark text-start">
                          Topik: “Peran Industri Sawit dalam Mengdukung Kemandirian Energi”
                        </p>
                      </li>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Lingkungan
                        </p>
                        <p class="text-dark text-start">
                          Topik: “Pengelolaan Limbah Kelapa Sawit dan Mitigasi Emisi”
                        </p>
                      </li>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Biomaterial
                        </p>
                        <p class="text-dark text-start">
                          Topik: “Biomaterial Sawit dalam Mendukung Ekonomi Kreatif”
                        </p>
                      </li>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Budidaya
                        </p>
                        <p class="text-dark text-start">        
                          Topik: “Solusi Hambatan Abiotik dan Penyehatan Tanaman Kelapa Sawit”
                        </p>
                      </li>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Pangan dan Kesehatan
                        </p>
                        <p class="text-dark text-start">        
                          Topik: “Food and cosmetics" Ingridients and its Safety”
                        </p>
                      </li>
                      <li>
                        <p class="text-dark text-start mb-1">
                          Sosial/Ekonomi/Manajemen/Pasar/ICT
                        </p>
                        <p class="text-dark text-start">        
                          Topik: “Penguatan Industri Sawit dari Aspek Daya Saing dan Keberlanjutan”
                        </p>
                      </li>
                    </ol>

                    <p class="text-dark text-start">
                      Disamping itu, terdapat juga Exhibition yang menampilkan beberapa stan hasil riset sawit BPDPKS baik berupa poster ilmiah maupun prototype produk hasil inovasi dan stan dari industri.
                      Pengunjung dapat melihat juga demo produk hasil riset kelapa sawit.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>4. Apakah dari pihak industri yang hadir bisa melakukan kerjasama terkait produk hasil penelitian?</strong>
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      Sangat bisa, pihak industri dan pihak peneliti bisa berkoordinasi langsung untuk bekerja sama pada tahap komersialisasi hasil risetnya. 
                      Acara ini dapat dijadikan “Business Matching” antara inventor dan investor.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>5. Apa saja step yang harus dilakukan jika ingin melakukan kerjasama?</strong>
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      Kami dari BPDPKS akan membantu menghubungkan pihak perusahaan dengan peneliti, 
                      untuk teknis lebih lanjutnya dapat dikoordinasikan langsung dengan peneliti.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>6. Apakah ada biaya pendaftaran untuk menjadi peserta PERISAI 2024?</strong>
                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      Tidak ada biaya pendaftaran (Gratis).
                      Pengunjung perlu melakukan registrasi pada website www.pekanrisetsawit.id dan mengikuti langkah-langkahnya.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>7. Apakah PERISAI 2024 dapat dihadiri di salah satu hari saja?</strong>
                  </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      Bisa. Namun topik di setiap plenary session begitu menarik sehingga sangat disayangkan apabila Saudara hadir hanya di salah satu hari saja.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>8. Apakah industri/akademisi/asosiasi yang tidak terdapat pada Undangan dapat menghadiri acara?</strong>
                  </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      PERISAI 2024 terbuka untuk umum, 
                      termasuk industri/akademisi/asosiasi dan masyarakat yang memiliki minat terhadap kemajuan ilmu pengetahuan, 
                      teknologi dan inovasi di bidang kelapa sawit. 
                      Anda dapat menghadiri acara dengan cara registrasi terlebih dahulu pada website <strong>www.pekanrisetsawit.id</strong> dan mengikuti langkah-langkahnya.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="border: none; border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>9. Apa saja yang perlu dipersiapkan untuk menghadiri acara?</strong>
                  </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="text-dark text-start">                
                      Anda dapat mempersiapkan diri selayaknya menghadiri seminar dan berpartisipasi aktif di setiap agendanya. 
                      Terdapat doorprize bagi peserta yang beruntung.
                    </p>
                  </div>
                </div>
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