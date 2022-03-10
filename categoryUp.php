<?php
include "nav.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {

            display: flex;
            justify-content: center;
            flex-direction: column;

            margin-top: 100px;


        }


        input {
            font-size: 2rem;
        }

        a {
            text-decoration: none;
            color: #006CFF;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['error'])) {  ?>
        <p><?= $_GET['error'] ?></p>
    <?php } ?>
    <section class="container">
        <div class="header text-center">
            <h3>
                Category
                <small class="text-muted">Upload Panel</small>
            </h3>
    </section>

    <section class="container">

        </div>

        <form action="uploadCategory.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Subject :</label>
                <input type="text" placeholder="Enter Subject Name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label ">Select image to upload:</label>
                <input type="file" name="my_image">
            </div>


            <input class="btn btn-primary btn-lg " type="submit" name="submit" value="Upload">
        </form>
    </section>
    <script src="https://kit.fontawesome.com/d55bbcbd90.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>