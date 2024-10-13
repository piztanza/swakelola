<?php

 $homeactive = '';
 $profileactive = '';
 $daftarWinproactive = '';
 $daftarMitraactive = '';
 $daftarMdsactive = '';
 $reportTransaksiactive = '';
 $incomeactive = '';
 $loginactive = '';
 $swakelolaactive = '';
 $mitraactive = '';
 $driveractive = '';
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        $homeactive = 'active';
    } else if ($_GET['page'] === 'profile') {
        $profileactive = 'active';
    } else if ($_GET['page'] === 'daftar-winpro') {
        $daftarWinproactive = 'active';
    }else if ($_GET['page'] === 'daftar-mitra') {
        $daftarMitraaactive = 'active';
    } else if ($_GET['page'] === 'daftar-mds') {
        $daftarMdsactive = 'active';
    } else if ($_GET['page'] === 'report-transaksi') {
        $reportTransaksiactive = 'active';
    } else if ($_GET['page'] === 'income') {
        $incomeactive = 'active';
    } else if ($_GET['page'] === 'login') {
        $loginactive = 'active';
    } else if ($_GET['page'] === 'swakelola') {
        $swakelolaactive = 'active';
    } else if ($_GET['page'] === 'mitra-seller') {
      $mitraactive = 'active';
    } else if ($_GET['page'] === 'driver-mds') {
      $driveractive = 'active';
    }
}
      // Check if the user is logged in
      if (isset($_SESSION['user_id'])) {
         ?>
    <header id="header">
    <div class="container d-flex align-items-center justify-content-lg-between" style="max-width: 98%;">

      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/swakelola/LOGO SWAKELOLA rev.png" alt="" class="img-fluid"></a>
      
      <!-- <a href="index.php" class="logo me-auto me-lg-0" style="margin-left: 8px; max-width: 410px;"><img src="assets/img/perisai/logo-perisai.svg" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <!-- <img src="assets/img/perisai/icon/HOME.svg" alt=""> -->
          <li><a class="nav-link scrollto <?=$homeactive?>" href="index.php?page=home">Home</a></li>
          <li><a class="nav-link scrollto <?=$profileactive?>" href="profile.php?page=profile">Profil</a></li>
          <li><a class="nav-link scrollto <?=$daftarWinproactive?>" href="daftar-winpro.php?page=daftar-winpro">Daftar WinPro</a></li>
          <li><a class="nav-link scrollto <?=$daftarMitraaactive?>" href="daftar-mitra.php?page=daftar-mitra">Daftar Mitra Seller</a></li>
          <li><a class="nav-link scrollto <?=$daftarMdsactive?>" href="daftar-mds.php?page=daftar-mds">Daftar MDS (Kurir)</a></li>
          <li><a class="nav-link scrollto <?=$reportTransaksiactive?>" href="report-transaksi.php?page=report-transaksi">Report Transaksi</a></li>
          <li><a class="nav-link scrollto <?=$incomeactive?>" href="income.php?page=income">Income</a></li>
          <li><a href="logout.php">Logout</a></li>
          <!-- <li><a class="nav-link scrollto <?=$faqactive?>" href="faq.php?page=faq">FAQ</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header Logged In -->

    <?php } else { ?>

        <header id="header">
          <div class="container d-flex align-items-center justify-content-lg-between" style="max-width: 90%;">

            <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/swakelola/LOGO SWAKELOLA rev.png" alt="" class="img-fluid"></a>

            <!-- <a href="index.php" class="logo me-auto me-lg-0" style="margin-left: 8px; max-width: 410px;"><img src="assets/img/perisai/logo-perisai.svg" alt="" class="img-fluid"></a> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto <?=$homeactive?>" href="index.php?page=home">Home</a></li>
                <li><a class="nav-link scrollto <?=$swakelolaactive?>" href="swakelola.php?page=swakelola">Swakelola</a></li>
                <li><a class="nav-link scrollto <?=$mitraactive?>" href="mitra-seller.php?page=mitra-seller">Mitra Seller</a></li>
                <li><a class="nav-link scrollto <?=$driveractive?>" href="driver-mds.php?page=driver-mds">Driver MDS</a></li>
                <li><a class="nav-link scrollto <?=$loginactive?>" href="login.php?page=login">Login</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

          </div>
        </header><!-- End Header -->
    <?php } ?>