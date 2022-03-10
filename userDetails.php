<?php

include 'nav.php';
include 'connect.php';
if ($_SESSION['user_name']!='admin') {
    header("Location:index.php");
}

$id =  $_GET['_userid'];
$sql = "select *from user where userid='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$uname = $row['username'];
$eml = $row['email'];
$age= $row['age'];
$school= $row['school'];
$gender= $row['gender'];
$type = $row['type'];


if(isset($_POST['edit']))
{
    $newtype = $_POST['typ'];
    $sql1 = "update user set type='$newtype' where userid='$id'";
    $result1 =mysqli_query($conn,$sql1);
    if($result1)
    {
        echo "<script>alert('updated');location.href='adminDonate.php';</script>";
    }
    else{
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <title>Profile</title>
</head>

<body>


    <div class="container" style="width: 450px;text-align: center;margin-top:170px;margin-bottom:100px;height:730px;background-color:white;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);border-radius:5px;">
        <!-- User Profile Card Section -->
        <div class="card">
            <form action="" method="POST" class="">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;margin-top:20px;margin-bottom:55px;">User Profile </p>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 70px;margin-left:20px;font-size:20px;font-weight:bold;">Username<b style="color: red;">*</b></label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="text" placeholder="Username" name="username" value="<?php echo $uname ?>" readonly>
                </div>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 119px;margin-left:20px;font-size:20px;font-weight:bold;">Email<b style="color: red;">*</b></label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="email" placeholder="Email" name="email" value="<?php echo $eml ?>" readonly>
                </div>

                
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 144px;margin-left:20px;font-size:20px;font-weight:bold;">Age</label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="number" placeholder="Age" name="age" value="<?php echo $age ?>" readonly>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 37px;margin-left:20px;font-size:20px;font-weight:bold;">School Name:</label>
                    <input style="border-radius: 5px;font-size:15px;font-weight:bold;" type="text" placeholder="School name" name="school" value="<?php echo $school ?>" readonly>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                <label for="gender"> <label style="margin-right: 108px;margin-left:20px;font-size:20px;font-weight:bold;">Gender</label></label>
                    <select name="gen">
                        <?php 
                            if($gender=="Male")
                            {
                                ?>
                                 <option value="Male" selected>Male</option>
                                 <option value="Female">Female</option>
                                <?php
                            }else{
                                ?>
                                    <option value="Male">Male</option>
                                 <option value="Female" selected>Female</option>
                                <?php
                            }
                        ?>
                   
                    
                    
                    </select>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                <label style="margin-right: 85px;margin-left:20px;font-size:20px;font-weight:bold;">User type</label>
                <select name="typ">
                    <option value="normal">Normal</option>
                    <option value="special">Special</option>
                </select>
                </div>
            
                <div class="input-group d-flex justify-content-center" style="margin-top: 55px;">
                    <button name="edit" class="btn btn-success btn-lg btn-block">Edit</button>
                </div>

            </form>
        </div>
    </div>


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>