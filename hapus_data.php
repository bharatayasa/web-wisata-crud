<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

// Memastikan bahwa parameter id ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Melakukan query untuk mengambil data berdasarkan id
    $query = "SELECT gambar FROM data WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Menghapus gambar dari folder jika ada
        $gambar = $data['gambar'];
        if (file_exists("img/" . $gambar)) {
            unlink("img/" . $gambar);
        }

        // Melakukan query untuk menghapus data dari tabel data
        $query_delete = "DELETE FROM data WHERE id = '$id'";
        $result_delete = mysqli_query($koneksi, $query_delete);

        if ($result_delete) {
            echo "Data berhasil dihapus.";
            // Alihkan kembali ke halaman tampil_data.php setelah proses penghapusan selesai
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan dalam URL.";
}
?>
