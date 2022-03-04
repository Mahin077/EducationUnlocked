<?php

include 'nav.php';
include 'connect.php';
if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
}
$id = $_SESSION['user_id'];
$sqlShowPost = "select *from donation where userid='$id'";
$resultShowPost = mysqli_query($conn, $sqlShowPost);

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

    <div class="container" style="margin-top: 15px;">
    <h2>
        Recent Donations
    </h2>
    </div>
   
    <?php
    while ($rowPost = mysqli_fetch_array($resultShowPost)) {

        

    ?>
        <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                    <div class="d-flex justify-content-between align-items-end" style="margin-top: 5px;"> 
                    <label>Amount:</label> <span><?php echo $rowPost['amount']?></span>
                    <label>TransactionID:</label> <span><?php echo $rowPost['transactionID']?></span>
                    <label>Donated at:</label> <span><?php echo $rowPost['date']?></span>
                   
                    </div>
                </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>