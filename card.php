<?php
include 'connect.php';
include "nav.php";


$query = "  SELECT * FROM `cards` order by id ASC";

$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/card.css">
</head>

<body>

    <body>
        <section class="container">


            <div style="margin-top:100px ;" class="row">
                <div>
                    <h1 class="title mb-5">All
                        <small class="text-muted">Programs</small>
                    </h1>
                </div>
                <?PHP

                if ($num > 0) {
                    while ($products = mysqli_fetch_array($queryfire)) {

                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5" style="margin:auto;">

                            <form action="playVideo.php" method="GET">

                                <div class="card" style="width: 18rem;margin:auto;">
                                    <img src="uploads/<?= $products['images'] ?>" class="card-img-top" alt="..." height="300px">
                                    <div class="card-body mt-3">
                                        <h5 class="card-title"><?php echo $products['name']; ?></h5>
                                        </p>
                                        <button type="submit" class="btn btn-info " name="enter" style="width: 100%;color:#fff5ee">Details</button>
                                        <input type="hidden" name="p_name" value="<?php echo $products['name']; ?>">
                                    </div>
                                </div>


                            </form>

                        </div>


                <?php

                    }
                }

                ?>

            </div>

        </section>
        <script src="https://kit.fontawesome.com/d55bbcbd90.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</body>

</html>

<?php
include "footer.php";
?>