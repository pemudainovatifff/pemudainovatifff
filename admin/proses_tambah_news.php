<?php
include "../koneksi/koneksi.php";

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $judul = $_POST["judul"];
    $kutipan = $_POST["kutipan"];
    $isi = $_POST["isi"];
    $tgl_isi = $_POST["tgl_isi"];

    // File upload destination
    $target_dir = "uploads/";

    // Create the "uploads" directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Get the file name
    $gambar = $_FILES["gambar"]["name"];
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

    // Move uploaded file to desired location
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    // Contoh query untuk menyimpan data ke database
    $query = "INSERT INTO news (judul, kutipan, isi, tgl_isi, gambar) VALUES ('$judul', '$judul', '$isi', '$tgl_isi', '$gambar')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect to the desired page using JavaScript
        echo '<script>
                alert("Data berhasil disimpan");
                window.location.href = "crudnews.php";
              </script>';
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>