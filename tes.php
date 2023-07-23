<?php
    // Memanggil file koneksi.php
    require_once 'koneksi.php';

    // Inisialisasi variabel untuk menyimpan pesan kesalahan atau sukses
    $message = '';

    // Memproses data feedback yang diinputkan oleh pengguna
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $deskripsi = $_POST["deskripsi"];

        // Query untuk memasukkan data ke dalam database
        $query = "INSERT INTO feedback (nama, email, deskripsi) VALUES ('$nama', '$email', '$deskripsi')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $message = "Feedback berhasil dikirim!";
        } else {
            $message = "Terjadi kesalahan saat mengirim feedback: " . mysqli_error($koneksi);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- tombol feedback-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Kirim Feedback</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">your feedback</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description :</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="8" required></textarea>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Send Feedback">
                    </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>