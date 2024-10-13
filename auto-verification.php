<?php

  // Check if the user is logged in
  if (!isset($_GET['id'])) {
    header("Location: https://pekanrisetsawit.id"); // Redirect to the login page if not logged in
    exit();
  }

  include('server/koneksi.php');


  $id = mysqli_escape_string($conn, $_GET['id']);

  $queryGetData = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

  // Check if the user is available
  if (mysqli_num_rows($queryGetData) < 1) {
    header("Location: https://pekanrisetsawit.id"); // Redirect to the login page if not logged in
    exit();
  }

  $getUserData = mysqli_fetch_assoc($queryGetData);

  $query = mysqli_query($conn, "UPDATE users SET kode_verifikasi='', status_verifikasi= 1 WHERE id='$id'");

  if($query) {

    session_start();
    session_unset();
    session_destroy();
    
    echo "
      <script>
        alert('Email Anda berhasi di verifikasi !');
        window.location = 'login.php'
      </script>
    ";
  }
?>