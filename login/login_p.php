<?php
session_start();
include "../koneksi/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$prevQuery = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
$data = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);

if ($data && $password == $data['password']) {
    $_SESSION['admin'] = $data['id_admin'];
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/admin.php">';
    exit;
} else {
    echo "<script>
        alert('Data yang dimasukkan tidak sesuai');
    </script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../login/login.php">';
}
?>