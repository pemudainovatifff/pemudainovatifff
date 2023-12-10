<?php
$id = $_GET['id'];
session_start();
include "../koneksi/koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/images/blog/";

// Fetch the specific record based on $id
$result = mysqli_query($koneksi, "SELECT id_culture, judul, kutipan, isi, gambar, tgl_isi FROM culture WHERE id_culture = $id");
$hasil = mysqli_fetch_array($result, MYSQLI_ASSOC);


$query = mysqli_query($koneksi, "DELETE FROM culture WHERE id_culture = $id");
echo "<script>
    alert ('Berita berhasil dihapus');
    </script>";
echo "<meta http-equiv=refresh content=0;url=crudculture.php>";
?>