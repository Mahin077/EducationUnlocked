<?PHP
include("connect.php");
include "nav.php";
$query = "  SELECT * FROM `adminpanel` order by id ASC";

$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminpanel.css">
</head>

<body>
    <section class="container">


        <div style="margin-top:100px ;" class="row">
            <div>
                <h1 class="title mb-5">Admin
                    <small class="text-muted">Panel</small>
                </h1>
            </div>
            <?PHP

            if ($num > 0) {
                while ($products = mysqli_fetch_array($queryfire)) {

            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" style="margin:auto;">

                        <form action="" method="GET">
                            <a style="text-decoration: none;" href="<?php echo $products['link'] ?>">
                                <div class="card" style="width: 18rem;margin:auto;">
                                    <img src="<?php echo $products['images'] ?>" class="card-img-top" alt="..." height="300px">
                                    <div class="card-body mt-3">
                                        <h5 class="card-title text-center " style="color: tomato;"><?php echo $products['name']; ?></h5>
                                        <p class="text-muted text-center"><?php echo $products['description']; ?></p>


                                    </div>
                                </div>
                            </a>


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

</html>
<?php
include "footer.php";
?>