<?php
$servernameku = "localhost";
$username = "root";
$dbname = "pemudainovatif";
$password = "";

// Create connection

$koneksi = mysqli_connect($servernameku, $username, $password, $dbname);

// Check connection
if (!$koneksi) {
  die("koneksi gagal: " . mysqli_connect_error());
}
?>