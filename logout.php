<?php
    // Memulai sesi
    session_start();

    // Hapus semua variabel sesi
    session_unset();

    // Hapus sesi
    session_destroy();

    // Alihkan ke halaman login setelah logout
    header("Location: index.php");
    exit();
?>
