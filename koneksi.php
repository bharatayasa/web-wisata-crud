<?php
    // Konfigurasi koneksi database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wisata";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }else{
        // echo "koneksi berhasil"; 
    }
?>
