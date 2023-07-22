<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];

    // Memproses file gambar yang diupload
    $nama_gambar = $_FILES["gambar"]["name"];
    $tmp_gambar = $_FILES["gambar"]["tmp_name"];

    // Pindahkan file gambar dari tempat sementara ke folder tujuan
    $folder_gambar = "img/";
    move_uploaded_file($tmp_gambar, $folder_gambar . $nama_gambar);

    // Melakukan query untuk menyimpan data ke tabel data
    $query = "INSERT INTO data (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$nama_gambar')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil disimpan.";
        header("Location: dashboard.php");
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
