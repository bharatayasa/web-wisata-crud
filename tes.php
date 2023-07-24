<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style>
        .rating {
            display: inline-block;
            position: relative;
            height: 30px;
            line-height: 30px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label::before {
            content: '\2605';
            font-size: 24px;
            padding-right: 5px;
            color: #FFD700;
        }

        .rating input:checked ~ label {
            color: #FFD700;
        }
    </style>
</head>
<body>
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
</body>
</html>
