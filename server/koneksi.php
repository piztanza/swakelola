<?php
// $conn = mysqli_connect('127.0.0.1', 'pekanris_user', 'pekanrisperisai', 'pekanris_perisai');
$conn = mysqli_connect('localhost', 'root', '', 'db_swakelola');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>