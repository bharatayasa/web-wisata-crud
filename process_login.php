<?php
    // Memanggil file koneksi.php
    require_once 'koneksi.php';
    
    // Memproses data login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Melakukan query untuk mencari pengguna dengan username yang cocok
        $query = "SELECT id, username, password FROM users WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user["password"])) {
                // Jika password cocok, simpan data pengguna dalam sesi
                session_start();
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                header("Location: dashboard.php");
            } else {
                echo "password salah, silahkan coba lagi";
            }
        } else {
            echo "username tidak ditemukan";
        }
    }
?>
