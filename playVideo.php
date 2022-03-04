<?php
    include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/playVideo.css">
</head>

<body>
    <div class="container mt-5">
        <div class="header text-center mt-5">
            <h2>
                All Video
                <small class="text-muted">Tutorials </small>
            </h2>
            <h3 class="text-muted mt-5">
            “Education is the most powerful weapon which you can use to change the world” 
           <br> – Nelson Mandela</br>
            </h3>
        </div>
        <div style="margin-top:100px ;" class="row">
            <?php

            include "connect.php";


            $name = $_GET['p_name'];


            $sql = "SELECT * FROM video_details where name = '$name' ";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($video = mysqli_fetch_assoc($res)) {
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">

                        <form action="" method="GET">

                            <div class="card" style="width: 20rem;">
                                <video controls="controls" source src="uploads/<?= $video['video_url'] ?>" type="video/mp4">
                                </video>
                                <div class="card-body mt-5">
                                    <h5 class="card-title" style="color: tomato;font-weight:bold"><?PHP echo $video['name'] ?></h5>
                                    <p class="card-text text-center"><?PHP echo $video['Description'] ?></p>


                                </div>
                            </div>


                        </form>

                    </div>





            <?php
                }
            }


            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>



</html>