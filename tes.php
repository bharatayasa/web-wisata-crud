<?php
// Memanggil file koneksi.php
require_once 'koneksi.php';
// Melakukan query untuk mengambil data dari tabel data
$query = "SELECT id, judul, deskripsi, gambar FROM data";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Tabel</title>
    <!-- Memanggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ganti '200px' dengan lebar maksimum yang Anda inginkan */
        .deskripsi-col {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Tabel</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan data dari hasil query
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    // Tambahkan class deskripsi-col pada kolom deskripsi dan atribut data-toggle dan data-placement untuk tooltip
                    echo "<td class='deskripsi-col' data-toggle='tooltip' data-placement='top' title='" . htmlspecialchars($row['deskripsi'], ENT_QUOTES) . "'>" . $row['deskripsi'] . "</td>";
                    echo "<td><img src='img/" . $row['gambar'] . "' alt='Gambar' width='100'></td>";
                    echo "<td>"
                        . "<a href='ubah_data.php?id=" . $row['id'] . "'>"
                        . "<button class='btn btn-primary'>ubah</button>"
                        . "</a>"
                        . "<a href='hapus_data.php?id=" . $row['id'] . "'>"
                        . "<button class='btn btn-danger'>hapus</button>"
                        . "</a>"
                        . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
