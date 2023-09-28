<?php
    // Konfigurasi koneksi database
    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $dbHost = $_ENV['DB_HOST'];
    $dbUser = $_ENV['DB_USER'];
    $dbPass = $_ENV['DB_PASS'];
    $dbDatabase = $_ENV['DB_DATABASE'];
    
    $koneksi = mysqli_connect($dbHost, $dbUser, $dbPass, $dbDatabase);
    
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } else {
        // echo "koneksi berhasil"; 
    }
    
?>
