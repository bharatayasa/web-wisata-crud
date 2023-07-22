<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';

// Memastikan bahwa parameter id ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Melakukan query untuk mengambil data berdasarkan id
    $query = "SELECT id, judul, deskripsi, gambar FROM data WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Memproses data yang akan diubah
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $judul_baru = $_POST["judul"];
            $deskripsi_baru = $_POST["deskripsi"];
            
            // Memproses file gambar yang diupload
            $nama_gambar_baru = $_FILES["gambar"]["name"];
            $tmp_gambar_baru = $_FILES["gambar"]["tmp_name"];
            $folder_gambar = "img/";

            if (!empty($nama_gambar_baru)) {
                // Jika ada gambar baru yang diupload, hapus gambar lama dari folder
                if (file_exists($folder_gambar . $data['gambar'])) {
                    unlink($folder_gambar . $data['gambar']);
                }

                // Pindahkan file gambar baru dari tempat sementara ke folder tujuan
                move_uploaded_file($tmp_gambar_baru, $folder_gambar . $nama_gambar_baru);

                // Update nama gambar baru ke dalam database
                $gambar_baru = $nama_gambar_baru;
            } else {
                // Jika tidak ada gambar baru yang diupload, gunakan nama gambar lama
                $gambar_baru = $data['gambar'];
            }

            // Melakukan query untuk mengupdate data ke tabel data
            $query_update = "UPDATE data SET judul = '$judul_baru', deskripsi = '$deskripsi_baru', gambar = '$gambar_baru' WHERE id = '$id'";
            $result_update = mysqli_query($koneksi, $query_update);

            if ($result_update) {
                echo "Data berhasil diubah.";
                // Alihkan kembali ke halaman tampil_data.php setelah proses update selesai
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Terjadi kesalahan saat mengubah data: " . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan dalam URL.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
    <!-- Memanggil file CSS Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="offset-lg-2 col-lg-8">
            <h2 class="text-center mt-3">Ubah Data</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="judul" class="mb-2">Judul:</label>
                    <input type="text" autocomplete="off" class="form-control" id="judul" name="judul" value="<?php echo $data['judul']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?php echo $data['deskripsi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar">
                    <p class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</p>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Perubahan">
            </form>
        </div>
    </div>
</body>
</html>
