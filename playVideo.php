<?php
include 'connect.php';
include 'nav.php';
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in to view this page!');location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        .Videos{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
           
        }

        video {
            width: 640px;
            height: 260px;
            padding-top: 10px;

        }

      .link {
            text-decoration: none;
            font-size: 1.5rem;
            color:red;
            padding-left:600px;

               
        }
     
    </style>
</head>

<body>
    <section >

    
    <div class="upload">
        <?php
        if ($_SESSION['user_name'] == 'admin') {
        ?>
            <a  class="link" href="uploadVid.php">UPLOAD</a>
        <?php
        }
        ?>
    </div>

    <div class="alb mt-5">

        <?php
        $sql = "SELECT * FROM videos ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($video = mysqli_fetch_assoc($res)) {
        ?>

                <!-- <video src="uploads/<?= $video['video_url'] ?>" controls>

                </video> -->

                <video controls="controls" source src="uploads/<?= $video['video_url'] ?>" type="video/mp4">
                </video>

        <?php
            }
        } else {
            echo "<h1>Empty</h1>";
        }
        ?>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>