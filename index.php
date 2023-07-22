<?php
    require_once 'koneksi.php';
    // Melakukan query untuk mengambil data dari tabel data

    $query = "SELECT id, judul, deskripsi, gambar FROM data";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
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
    <title>Web Wisata</title>
  </head>

  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand">Web Wisata</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse container"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container banner-content col-lg-6">
        <div class="text-center">
          <p class="fs-1">welcome to the travel website</p>
          <p class="d-none d-sm-block">
            Welcome to the travel website that will lead you to the best travel
            experience of your life. Get ready to fill a new chapter in your
            adventure.
          </p>
          <!-- button -->
          <button
            type="submit"
            class="btn btn-outline-success mt-3 btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            contact
          </button>
        </div>
      </div>
    </div>
    <!-- end banner -->

    <!-- modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-header">
            <h5 class="modal-title mx-auto" id="exampleModalLabel">
              Contact us
            </h5>
          </div>

          <!-- body -->
          <div class="modal-body text-center">
            <div class="mb-3">
              <button type="button" class="btn btn-success">watsapp</button>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-success">watsapp</button>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-success">watsapp</button>
            </div>
          </div>
          <!-- footer -->
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- card -->
    <div class="container-fluid py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="col-12">
          <div class="col-lg-12">
            <div class="row">
              <?php
              $id = 1;
              while ($row = mysqli_fetch_assoc($result)):
              ?>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                  <div class="card">
                      <img src="img/<?= $row['gambar'] ?>" alt="Gambar">
                      <div class="card-body">
                          <h5 class="card-title"><?= $row['judul'] ?></h5>
                      </div>
                      <!-- accordion -->
                      <div class="accordion accordion-flush text-center" id="accordionFlushExample">
                          <div class="accordion-item">
                              <h2 class="accordion-header" id="heading<?= $id ?>">
                                  <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapse<?= $id ?>" aria-expanded="false"
                                          aria-controls="collapse<?= $id ?>">More Detail
                                  </button>
                              </h2>
                              <div id="collapse<?= $id ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $id ?>"
                                  data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"><?= $row['deskripsi'] ?></div>
                              </div>
                          </div>
                      </div>
                      <!-- end of accordion -->
                      <div class="text-center mb-5">
                          <button type="submit" class="btn btn-outline-primary mt-3 btn-lg" data-bs-toggle="modal"
                                  data-bs-target="#exampleModal">contact
                          </button>
                      </div>
                  </div>
              </div>
              <?php
                $id++;
                endwhile;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of card -->

    <!-- feedback -->
    <div class="container-fluid py-5">
      <div class="container">
        <h2 class="text-center mb-5">Feedback</h2>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">

        </div>
      </div>
    </div>

    <!--end of feedback -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="dom.js"></script>
  </body>
</html>
