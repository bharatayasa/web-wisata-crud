<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

// Memproses data feedback
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $deskripsi = $_POST["deskripsi"];
    $rating = $_POST["rating"];

    // Melakukan query untuk menyimpan data ke dalam tabel feedbacks
    $query = "INSERT INTO feedback (nama, email, deskripsi, rating) VALUES ('$nama', '$email', '$deskripsi', '$rating')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Feedback berhasil disimpan.";
        header("Location: index.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan feedback: " . mysqli_error($koneksi);
    }
}
?>
