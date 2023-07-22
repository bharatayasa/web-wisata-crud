<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

// Memastikan bahwa parameter id ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Melakukan query untuk memeriksa apakah data dengan ID tersebut ada dalam tabel feedback
    $query = "SELECT * FROM feedback WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Data dengan ID tersebut ditemukan, lakukan proses penghapusan
        $query_delete = "DELETE FROM feedback WHERE id = '$id'";
        $result_delete = mysqli_query($koneksi, $query_delete);

        if ($result_delete) {
            $message = "Data berhasil dihapus.";
            // Alihkan kembali ke halaman dashboard.php setelah proses penghapusan selesai
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "Terjadi kesalahan saat menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        $message = "Data tidak ditemukan.";
    }
} else {
    $message = "ID tidak ditemukan dalam URL.";
}
?>