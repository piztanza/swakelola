<?php
session_start();
include("koneksi.php");
  if(isset($_POST['edit'])) {
    $id = $_SESSION['user_id'];
    $fullname = isset($_POST['fullname']) ? mysqli_escape_string($conn, $_POST['fullname']) : $_SESSION['fullname'];
    $instansi = isset($_POST['instansi']) ? mysqli_escape_string($conn, $_POST['instansi']) : $_SESSION['instansi'];
    // $email = isset($_POST['email']) ? mysqli_escape_string($conn, $_POST['email']) : $_SESSION['email'];
    $phone = isset($_POST['phone']) ? mysqli_escape_string($conn, $_POST['phone']) : $_SESSION['phone'];

    $queryCheck = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
    $checkData = mysqli_fetch_assoc($queryCheck);

    // $checkEmail = $checkData['email'];

    // $status_verifikasi = $email === $checkEmail ? $_SESSION['status_verifikasi'] : 0;
    $date = date("Y-m-d H:i:s");

    echo$queryUpdate = mysqli_query($conn, "UPDATE users SET updated_at = '$date', fullname = '$fullname', phone = '$phone', instansi = '$instansi' WHERE id = '$id'");

    if($queryUpdate) {
      $_SESSION['fullname'] = $fullname;

      echo "
        <script>
          alert('Data berhasil diubah');
          window.location = '../profile.php';
        </script>
      ";
    }
  }
?>