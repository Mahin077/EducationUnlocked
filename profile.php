<?php

include 'nav.php';
include 'connect.php';
if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
}
$id = $_SESSION['user_id'];
$sql = "select *from user where userid='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$uname = $row['username'];
$eml = $row['email'];
$age= $row['age'];
$school= $row['school'];
$gender= $row['gender'];
$type = $row['type'];
if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cpassword = md5($_POST['cpassword']);
    $npassword = md5($_POST['npassword']);
    $age = $_POST['age'];
    $school = $_POST['school'];
    $gender = $_POST['gen'];

    $sqlChk = "select *from user where userid='$id' and password='$cpassword'";
    $resutlChk = mysqli_query($conn, $sqlChk);
    if ($resutlChk->num_rows > 0) {
        if ($npassword == 'd41d8cd98f00b204e9800998ecf8427e') {
            $sql = "update user set username='$username',email='$email',password='$cpassword',age='$age',school='$school',gender='$gender' where userid='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Updated');location.href='profile.php';</script";
            }
        } else {

            $sql = "update user set username='$username',email='$email',password='$npassword',age='$age',school='$school',gender='$gender' where userid='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Updated');location.href='profile.php';</script";
            }
        }
    } else {

        echo "<script>alert('password is incorrect')</script";
    }
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}




//show all post made by the user
$sqlShowPost = "select post.postid,user.username,post.text,post.category,post.created_at from post join user where post.userid=user.userid && user.userid = '$id' order by post.postid desc";
$resultShowPost = mysqli_query($conn, $sqlShowPost);
$showPost = 0;



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

    <form action="" method="POST">
        <div class="input-group d-flex flex-row-reverse" style="margin-top: 15px;margin-left:-15px;">
            <button name="logout" class="btn btn-secondary">Log out</button>
        </div>

    </form>
    <img class="text-center" src="./images/User_icon_2.svg.webp" style="width: 200px;margin-left:41em;">
    <section class="container" style="width: 450px;text-align: center;margin-top:10px;margin-bottom:100px;height:730px;background-color:white;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);border-radius:5px;">
        <!-- User Profile Card Section -->
        
        <div class="">
            <form action="" method="POST" class="">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;margin-top:20px;margin-bottom:55px;">User Profile </p>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 76px;font-size:20px;">Username<b style="color: red;">*</b></label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:30px;" type="text" placeholder="Username" name="username" value="<?php echo $uname ?>" required>
                </div>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 119px;font-size:20px;">Email<b style="color: red;">*</b></label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:35px;" type="email" placeholder="Email" name="email" value="<?php echo $eml ?>" required>
                </div>                
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 144px;font-size:20px;">Age</label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:35px;" type="number" placeholder="Age" name="age" value="<?php echo $age ?>" required>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                    <label style="margin-right: 37px;font-size:20px;">School Name:</label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:37px;" type="text" placeholder="School name" name="school" value="<?php echo $school ?>" required>
                </div>
                <div class="input-group" style="margin-bottom: 40px;">
                <label for="gender"> <label style="margin-right: 245px;font-size:20px;">Gender</label></label>
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
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 85px;font-size:20px;">user type</label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:40px;" type="text" placeholder="" name="type" value="<?php echo $type ?>" readonly>
                </div>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 5px;font-size:20px;">Current Password<b style="color: red;">*</b></label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:19px;" type="password" placeholder="Password" name="cpassword" value="" required>
                </div>
                <div class="input-group" style="margin-bottom: 30px;">
                    <label style="margin-right: 40px;font-size:20px;">New Password</label>
                    <input style="border-radius: 5px;font-size:15px;margin-left:20px;" type="password" placeholder="New Password" name="npassword" value="">
                </div>
                <div class="input-group d-flex justify-content-center" style="margin-top: 55px;">
                    <button name="edit" class="btn btn-success btn-lg btn-block">update</button>
                </div>

            </form>
        </div>
    </section>


    <!-- recent activities -->
    <section class="container">
        <h4>See your recent activities</h4>
        <div class="row">
            <div class="col-3">
                <form action="recentPost.php" method="POST">
                    <button class="btn btn-success btn-lg btn-block">Show all Post</button>
                </form>
            </div>
            <div class="col-3">
                <form action="recentComments.php" method="POST">
                    <button class="btn btn-success btn-lg btn-block">show all comments</button>
                </form>
            </div>
            <div class="col-3">
                <form action="recentLikes.php" method="POST">
                    <button class="btn btn-success btn-lg btn-block">Show all likes</button>
                </form>
            </div>
            <div class="col-3">
                <form action="recentDonations.php" method="POST">
                    <button class="btn btn-success btn-lg btn-block">Show all donations</button>
                </form>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>