<?php
include 'connect.php';
include 'nav.php';
if(!isset($_SESSION['user_id']))
{
	header("Location:login.php");
}
if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $text = $_POST['text'];
    date_default_timezone_set("Asia/Dhaka");
    $time = date("d/m/y")." ".date("h:i:sa");
    $userid = $_SESSION['user_id'];
    $uniqueid = uniqid();
    $sql = "insert into donation (userid,amount,transactionID,text,date) values('$userid','$amount','$uniqueid','$text','$time')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Donated successfully')</script>";
        } else {
            echo "<script>alert('something wrong')</script";
        }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reg.css">


    <title>Donate</title>
</head>

<body style="background-image: url(images/bg1.jpg);">
   
    <div class="container" style="width: 450px;text-align: center;margin-top:120px;margin-bottom:120px;height:670px;background-color:white;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);border-radius:5px;">
        
        <div class="card">
            <form action="" method="POST" class="">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;margin-top:20px;margin-bottom:55px;">Donate</p>
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 76px;margin-left:20px;font-size:20px;font-weight:bold;">Amount</label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="number" placeholder="Enter Amount" name="amount" value="" required>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 125px;margin-left:20px;font-size:20px;font-weight:bold;">Text</label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="text" placeholder="Write anything" name="text" value="">
                </div>
                
                
                
                
                <div class="input-group d-flex justify-content-center" style="margin-top: 55px;">
                    <button name="submit" class="btn btn-success btn-lg" style="width: 400px;">Donate</button>
                </div>
               
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>