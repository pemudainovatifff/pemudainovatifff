<?php
include "../koneksi/koneksi.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    mysqli_query($koneksi, "INSERT INTO admin (username, password) VALUES ('$username', '$hashedPassword')");

    echo "<script>
        alert('Pendaftaran berhasil');
    </script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=   signup.php">';
    exit;
}
?>