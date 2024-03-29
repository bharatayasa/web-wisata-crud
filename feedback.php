<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Website Wisata</title>
</head>
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
                        <a class="nav-link active" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
		</nav>
    <!-- end nav -->

    <!-- form -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center mb-4">Feedback Form</h2>
            <div class="offset-lg-2 col-lg-8">
                <form action="add_feedback.php" method="post">
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
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating :</label>
                        <div class="rating" id="rating"></div>
                        <input type="hidden" name="rating" id="rating-input">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Send Feedback">
                    </div>
                </form>
            </div>
        </div>  
    </div>

    <!-- end form  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(function () {
            $("#rating").rateYo({
                numStars: 5,
                maxValue: 5,
                fullStar: true,
                onChange: function (rating, rateYoInstance) {
                    $("#rating-input").val(rating);
                }
            });
        });
    </script>
    <script src="dom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
    ></script>
</body>
</html>
