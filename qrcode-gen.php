<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include str_replace("\\", "/",dirname(__FILE__)) . "/phpqrcode/qrlib.php";
include("server/koneksi.php");

// $user_id = $_SESSION['user_id'];
// $email = $_SESSION['email'];

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($res = mysqli_fetch_assoc($result)) {

  $user_id = $res['id'];
  $email = $res['email'];
  $isi = "https://perisai2023.id/card-user.php?user_id=$user_id"; 
  
  // QR code configuration (size, error correction, etc.)
  $eccLevel = 'L'; // Error correction level (L, M, Q, H)
  $pixelSize = 10; // Pixel size
  $margin = 4; // Margin around the QR code
  
  $username = explode("@", $email);
  $username = $username[0];
  
  // Path to save the QR code image
  // $filePath = "qr_codes/" . $email . "_qrcode.png"; // Relative path to your server's root directory
  $filePath = str_replace("\\", "/",dirname(__FILE__)) . '/qr_codes/idcard/' . $username . '_qrcode.png';
  
  // Generate the QR code
  QRcode::png($isi, $filePath);
  
}
?> 