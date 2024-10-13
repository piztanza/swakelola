<?php
// session_start();
$homeactive = '';
$qractive = '';
$profileactive = '';
$voteposteractive = '';
$votelombaactive = '';
$ebookactive = '';
$lombaactive = '';
$faqactive = '';
$verifactive = '';
if (isset($_GET['page'])) {

    if ($_GET['page'] === 'home') {
        $homeactive = 'active';
    } else if ($_GET['page'] === 'qr') {
        $qractive = 'active';
    } else if ($_GET['page'] === 'profile') {
        $profileactive = 'active';
    } else if ($_GET['page'] === 'vote-lomba') {
        $voteposteractive = 'active';
    }else if ($_GET['page'] === 'vote-poster') {
        $votelombaactive = 'active';
    } else if ($_GET['page'] === 'ebook') {
        $ebookactive = 'active';
    } else if ($_GET['page'] === 'lomba') {
        $lombaactive = 'active';
    } else if ($_GET['page'] === 'faq') {
        $faqctive = 'active';
    } else if ($_GET['page'] === 'faq') {
        $verifctive = 'active';
    }
}
    

?>

<header id="header">
    <div class="container d-flex align-items-center justify-content-lg-between" style="max-width: 98%;">

      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/swakelola/LOGO SWAKELOLA rev.png" alt="" class="img-fluid"></a>
      
      <a href="index.php" class="logo me-auto me-lg-0" style="margin-left: 8px; max-width: 410px;"><img src="assets/img/perisai/logo-perisai.svg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <!-- <img src="assets/img/perisai/icon/HOME.svg" alt=""> -->
          <li><a class="nav-link scrollto <?=$homeactive?>" href="index.php?page=home">Home</a></li>
          <li><a class="nav-link scrollto <?=$qractive?>" href="home.php?page=qr">QR-Code</a></li>
          <li class="dropdown <?=$profileactive?>"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="<?=$profileactive?>"><a href="profile.php?page=profile">Profil Saya</a></li>
              <?php 
              
                  if ($_SESSION['status_verifikasi'] == 0) {
                    ?>
                    <li class="<?=$verifactive?>"><a href="verification.php?page=verification">Verifikasi Email Anda</a></li>
                  
                 <?php } ?>
              <li><a href="logout.php">Keluar Akun</a></li>
            </ul>
          </li>
          <li class="dropdown <?=$votelombaactive?> <?=$voteposteractive?>"><a href="#"><span>Vote</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="<?=$voteposteractive?>"><a href="#">Poster Grant Riset Sawit</a></li>
              <li class="<?=$votelombaactive?>"><a href="#">Poster Lomba Riset Sawit</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto <?=$ebookactive?>" href="ebook.php?page=ebook">E-Book</a></li>
          <li><a class="nav-link scrollto <?=$lombaactive?>" href="lomba.php?page=lomba">Lomba Riset Sawit</a></li>
          <!-- <li><a class="nav-link scrollto <?=$faqactive?>" href="faq.php?page=faq">FAQ</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header Logged In -->