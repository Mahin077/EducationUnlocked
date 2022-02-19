<?php
 include 'connect.php';
 include 'nav.php';
 if (!isset($_SESSION['user_id'])) 
{
    echo "<script>alert('Please log in to view this page!');location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        video {
            width: 640px;
            height: 360px;
        }

        a {
            text-decoration: none;
            color: #006CFF;
            font-size: 1.5rem;
        }
        
    </style>
</head>

<body>
    

    <div class="alb">
    <?php
        if($_SESSION['user_name'] == 'admin')
        {
         ?>
            <a href="uploadVid.php">UPLOAD</a>
        <?php
        }
    ?>
        <?php
        $sql = "SELECT * FROM videos ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($video = mysqli_fetch_assoc($res)) {
        ?>

               <!-- <video src="uploads/<?= $video['video_url'] ?>" controls>

                </video> -->

                <video  controls="controls" 

                source src="uploads/<?= $video['video_url'] ?>"  type="video/mp4">
                </video>

        <?php
            }
        } else {
            echo "<h1>Empty</h1>";
        }
        ?>
    </div>
</body>

</html>