<?php
include 'connect.php';
include 'nav.php';
if (!isset($_SESSION['user_id'])) 
{
    echo "<script>alert('Please log in to view this page!');location.href='login.php';</script>";
}
$query = "  SELECT * FROM `card` order by id ASC";

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
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/card.css">
</head>
<body>
<body>
    <section class="container">
      
    <a style="text-decoration:none;" href="playVideo.php">
        <div style="margin-top:100px ;" class="row">
            <div>
                <h1 class="title mb-5" >All Programs</h1>
            </div>
            <?PHP

            if ($num > 0) {
                while ($products = mysqli_fetch_array($queryfire)) {

            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" style="margin:auto;">
                   
                        <form action="" method="POST">

                            <div class="card" style="width: 18rem;margin:auto;">
                                <img src="<?php echo $products['images']; ?>" class="card-img-top" alt="..." height="300px">
                                <div class="card-body mt-3">
                                    <h5 class="card-title"><?php echo $products['name']; ?></h5>
                                    </p>
                                </div>
                            </div>


                        </form>

                    </div>

                   
            <?php

                }
            }

            ?>

        </div>
        </a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
</html>