<?php
$id = $_GET['id'];
session_start();
include "../koneksi/koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/images/blog/";

// Fetch the specific record based on $id
$result = mysqli_query($koneksi, "SELECT id_gallery, gambar FROM galery WHERE id_gallery = $id");
$hasil = mysqli_fetch_array($result, MYSQLI_ASSOC);


$query = mysqli_query($koneksi, "DELETE FROM galery WHERE id_gallery = $id");
echo "<script>
    alert ('Berita berhasil dihapus');
    </script>";
echo "<meta http-equiv=refresh content=0;url=crudgalery.php>";
?>