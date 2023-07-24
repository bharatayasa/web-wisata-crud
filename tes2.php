<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Wisata</title>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .banner {
        height: 80vh;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('img/tracking.jpg');
        background-size: cover;
        background-position: center;
    }

    .banner-content{
        height: 100%;
        /* border: solid; */
        color: aliceblue;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carusel-container{
        background-color: #212529;
        /* height: 300px; */
        color: white;
    }

    /* .bordered{
        border: solid;
    } */

</style>

<body>

<!-- tes -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedback" data-bs-whatever="@mdo">Open modal for @mdo</button>

<!-- modal feedback -->
<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <body>

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
