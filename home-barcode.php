<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// session_start();

// Check if the user is logged in
if (!isset($_GET['mail'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
} else {
  $email = $_GET['mail'];
  $name = $_GET['name'];
  $instansi = $_GET['instansi'];
  $username = explode("@", $email);
  $username = $username[0];
  $qr_path = $username . '_qrcode.png';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/perisai2023/css/style.css">
  </head>
  <body>

    <main class="basic-background py-3" style="min-height: 100vh;">
      <!-- <section class="mb-3">
        <div class="d-flex">
          <button class="bg-transparent input-transparent input-wrapper my-icons px-2 ml-2 mt-2" style="background-image: none; border-radius: 0;" data-sidebar="button-sidebar">
            <img src="img/burger-menu.svg" alt="icon-menu" class="w-100 h-100" style="filter: brightness(0) invert(1)" id="toggleButton2">
          </button>
        </div>
      </section> -->

      <section class="section-base mb-5">
        <div class="px-2">
          <h3 class="fs-3 fw-semibold text-white mb-0" style="font-style: italic;">Halo,</h3>
          <p class="fs-6 fw-normal text-white">
            Selamat Datang!
          </p>
        </div>
      </section>

      <section class="section-base mb-2">
        <div class="px-2">
          <h3 class="fs-3 fw-semibold text-white mb-1 text-center" style="font-style: italic;"><?=$name?></h3>
          <div class="garis mb-3"></div>
        </div>
      </section>

      <section class="section-base d-flex justify-content-center align-items-center mb-3">
        <div class="banner">
          <img src="qr_codes/<?=$qr_path?>" alt="banner" class="w-100 h-100">
          
        </div>
      </section>

      <section class="section-base">
        <p class="text-xs text-white">
          *Gunakan QR-Code ini pada
          saat proses verifikasi.
        </p>
      </section>

      <section class="section-base mb-2">
        <div class="px-2">
          <h3 class="fs-3 fw-semibold text-white mb-1 text-center" style="font-style: italic;"><?=$instansi?></h3>
          <!-- <div class="garis mb-3"></div> -->
        </div>
      </section>
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/perisai2023/js/script.js"></script>
  </body>
</html>