<?php
include "../koneksi/koneksi.php";

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $judul = $_POST["judul"];
    $isi = $_POST["isi"];
    $link_maps = $_POST["link_maps"];

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
    $query = "INSERT INTO destination (judul, isi, link_maps, gambar) VALUES ('$judul', '$isi', '$link_maps', '$gambar')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect to the desired page using JavaScript
        echo '<script>
                alert("Data berhasil disimpan");
                window.location.href = "cruddestinasi.php";
              </script>';
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>