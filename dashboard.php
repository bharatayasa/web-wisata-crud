<?php
    // Memanggil file koneksi.php
    require_once 'koneksi.php';

    // Cek apakah pengguna sudah login atau belum
    session_start();
    if (!isset($_SESSION["user_id"])) {
        header("Location: login.php");
        exit();
    }

    // Melakukan query untuk mengambil data dari tabel data
    $query = "SELECT id, judul, deskripsi, gambar FROM data";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    // Melakukan query untuk mengambil data dari tabel feedback
    $query = "SELECT id, nama, email, deskripsi, tanggal_submit FROM feedback";
    $feedback = mysqli_query($koneksi, $query);

    if (!$feedback) {
        die("Error: " . mysqli_error($koneksi));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Web Wisata</title>
</head>
<style>
        /* Ganti '200px' dengan lebar maksimum yang Anda inginkan */
        .deskripsi-col {
            max-width: 300px;
        }
</style>
<body>
    <div class="container text-center mb-5 mt-3">
        <h2>Selamat datang, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>Ini adalah halaman dashboard admin</p>
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
    <hr class="container">

    <!-- tambah data -->
    <div class="container">
        <div class="offset-lg-2 col-lg-8">
            <h2 class='text-center'>Tambah konten baru</h2>
            <form action="proses_input.php" method="post" enctype="multipart/form-data">
                <!-- input judul -->
                <div class="mb-3 container">
                    <label for="exampleFormControlInput1" class="form-label" for="judul">Judul</label>
                    <input class="form-control" type="text" id="judul" name="judul" autocomplete="off" required>
                </div>
                <!-- input deskripsi -->
                <div class="mb-3 container">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required></textarea>
                </div>
                <!-- input gambar -->
                <div class="mb-3 container">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input class="form-control form-control-lg"  type="file" id="gambar" name="gambar" required>
                </div>
                <div class="container">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <hr class="container">
    <!-- akhir tambah data -->

    <!-- tabel data -->
    <div class="container table-responsive">
        <h2 class="text-center">Data Tabel</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $no++; ?>
                        </td>

                        <td>
                            <?php echo $row['judul']; ?>
                        </td>

                        <td class="deskripsi-col">
                            <?php echo $row['deskripsi']; ?>
                        </td>

                        <td class="text-center">
                            <img src="img/<?php echo $row['gambar']; ?>" alt="Gambar" width="150">
                        </td>
                        
                        <td class="text-center">
                            <a href="ubah_data.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">ubah</button></a>
                            <a href="hapus_data.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">hapus</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <hr class="container">
    <!--akhir tabel -->

    <!-- tabel feedback -->
    <div class="container table-responsive">
        <h2 class="text-center">Data Feedback</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama </th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($feedback)) : ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $no++; ?>
                        </td>

                        <td>
                            <?php echo $row['nama']; ?>
                        </td>

                        <td>
                            <?php echo $row['email']; ?>
                        </td>

                        <td class="deskripsi-col">
                            <?php echo $row['deskripsi']; ?>
                        </td>
                        
                        <td>
                            <?php echo $row['tanggal_submit']; ?>
                        </td>
                        
                        <td class="text-center">
                            <a href="hapus_data_feedback.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">hapus</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <hr class="container">
    <!--akhir tabel -->
</body>
</html>
