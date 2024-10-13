<?php
session_start();
include("koneksi.php");
  if(isset($_POST['submit-verification'])) {
    $id = $_SESSION['user_id'];

  $queryGetData = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

  $getUserData = mysqli_fetch_assoc($queryGetData);
  
  $kode_verifikasi = $getUserData['kode_verifikasi'];
  

    $inputCode = mysqli_escape_string($conn, $_POST['code']);
    
    if($inputCode !== $kode_verifikasi || empty($inputCode)) {
      echo "
        <script>
          alert('Kode yang anda masukkan salah !');
          window.location = '../verification.php'
        </script>
      ";
      exit;
    }

    $query = mysqli_query($conn, "UPDATE users SET kode_verifikasi='', status_verifikasi= 1 WHERE id='$id'");

    if($query) {
      
      session_start();
      session_unset();
      session_destroy();

      echo "
        <script>
          alert('Email Anda berhasi di verifikasi !');
          window.location = '../home.php'
        </script>
      ";
    }
  }
  
?>