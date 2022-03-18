<?php

include 'connect.php';
include 'nav.php';

if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
}

if ($_SESSION['user_name'] == 'admin') {
    if (isset($_POST['submit'])) {
        $link = $_POST['link'];
        $stime = $_POST['stime'];
        $topic = $_POST['topic'];
        date_default_timezone_set("Asia/Dhaka");
        $time = date("d/m/y") . " " . date("h:i:sa");
        $id = $_SESSION['user_id'];



        $sql = "insert into live (link,created_at,start_time,user_id,topic) values('$link','$time','$stime','$id','$topic')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Updated')</script>";
        } else {
            echo "<script>alert('something wrong')</script";
        }
    }
}
if ($_SESSION['user_type'] == 'special') {
    $sql = "SELECT * FROM live join user on live.user_id=user.userid ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <title>Homepage</title>
</head>

<body>

    <?php
    if ($_SESSION['user_name'] == 'admin') {
    ?>

        <div class="container mt-5">
            <div class="card border-0 rounded shadow-lg">
                <form action="" method="POST" class="">
                    <h2 class="text-center mt-3 mb-3">Create Live Class</h2>
                    <div class="mb-3 p-3">
                        <h4 for="exampleInputEmail1" class="form-h4">Link</h4>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="link" value="" required placeholder="Enter the link">
                    </div>
                    <div class="mb-3 p-3">
                        <h4 for="exampleInputEmail1" class="form-h4">Starting time</h4>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="link" value="" placeholder="starting time" name="stime" value="" required>
                    </div>
                    <div class="mb-3 p-3">
                        <h4 for="exampleInputEmail1" class="form-h4">Topic</h4>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="link" value="" placeholder="topic" name="topic" value="" required>
                    </div>
                    <div class="input-group d-flex justify-content-center" style="margin-top: 55px;">
                        <button name="submit" class="btn btn-lg mb-3 text-white" style="width: 400px;background:linear-gradient(45deg, #7EC9F5, #3957ED)"><strong>Create</strong></button>
                    </div>
                </form>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- for the users who have donated -->
    <?php
    if ($_SESSION['user_type'] == 'special') {
    ?>

        <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <!-- username,created at -->
                        <div class="d-flex justify-content-between p-2 px-3">
                            <div class="d-flex flex-row align-items-center"> <img src="images/propic.jpg" width="50" class="rounded-circle">
                                <div class="d-flex flex-column ml-2" style="margin-left: 10px;"> <span class="font-weight-bold"><b><?php echo $row['username'] ?></b></span> <small class="text-primary">zoom link</small> </div>
                            </div>
                            <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2"><?php echo $row['created_at'] ?></small> </div>
                        </div>
                        <div class="p-2">
                            <!-- link -->
                            <a class="text-justify" style="margin-left: 12px;white-space: pre-line;" href="<?php echo $row['link'] ?>">Click here to redirect to the live class</a>
                            <p style="margin-left: 12px;">live class will start at: </p>
                            <p style="margin-left: 12px;"><?php echo $row['start_time'] ?></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

    ?>

    <!-- for other users -->
    <?php

    if ($_SESSION['user_type'] == 'normal') {
    ?>
        <div style="margin-left: 10px;margin-top:10px;margin-bottom:400px;">
            <h5>Please donate to do the live class!</h5>
        </div>
    <?php
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>