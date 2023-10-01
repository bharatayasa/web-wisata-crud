<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Web Wisata</title>
</head>

<style>
    .w3-row {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-wrap: wrap; /* Ini akan membuat konten berjajar ke bawah pada tampilan ponsel */
    }

    .w3-quarter {
        width: 30%; /* Atur lebar sesuai kebutuhan Anda untuk tampilan ponsel */
        padding: 20px; /* Atur padding sesuai kebutuhan Anda */
    }

    /* Media query untuk tampilan ponsel dengan lebar maksimal 768px */
    @media (max-width: 768px) {
        .w3-row {
            flex-direction: column; /* Mengubah arah flex menjadi kolom untuk tampilan ponsel */
        }

        .w3-quarter {
            width: 90%; /* Lebar elemen div menjadi 100% untuk tampilan ponsel */
        }
    }
</style>

<body>
<!-- nav -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand">Web Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<!-- Team Container -->
<div class="container text-center mb-5 mt-3">
    <h2>ABOUT US</h2>
    <p></p>
    <a href="login.php">
        <button class="btn btn-primary">login as admin</button>
    </a>
</div>

<div class="w3-container w3-padding-64 w3-center" id="team">
<div class="w3-row"><br>  
    <div class="w3-quarter">
        <img src="teams/ajik.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
        <h3>Agung Udayana</h3>
        <p>Manager Operational</p>
    </div>

    <div class="w3-quarter">
        <img src="teams/biang.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
        <h3>Ayu Dwilestari</h3>
        <p>Manager Tour & Traveling</p>
    </div>

    <div class="w3-quarter">
        <img src="teams/gung.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
        <h3>Agung Dananjaya</h3>
        <p>Direktur</p>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>
