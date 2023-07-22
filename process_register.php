<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

// Memproses data registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash password menggunakan password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Melakukan query untuk menyimpan data ke tabel users
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Registrasi berhasil. Silakan login <a href='login.php'>di sini</a>.";
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
