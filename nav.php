<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/664672c985.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/nav.css">
  <title></title>
</head>

<body>
  <section id="header">
    <a style="text-decoration: none;" href="index.php">
    <i class="fa-solid fa-graduation-cap"></i>
      <h5>Education Unlocked</h5>
    </a>
    <div>
      <ul id="navbar">
        <li onclick="active()"><a class="navItem" href="index.php">Home</a></li>
        <li><a class="navItem" href="allPost.php">Post</a></li>
        <li><a class="navItem" href="card.php">Courses</a></li>
        <li><a class="navItem" href="live.php">Live</a></li>
        <li><a class="navItem" href="contactUs.php">Contact Us</a></li>
        <li><a class="navItem" href="TeamPage.php">Team</a></li>
        <li><a class="navItem" href="About.php">About Us</a></li>

        <?php
            if (isset($_SESSION['user_id']))
            {
        ?>
        <li>
          <a href="profile.php">
            <?php echo $_SESSION['user_name'] ?>
          </a>
        </li>
        <?php
          if($_SESSION['user_name'] != 'admin'){
            ?>
            <li><a class="navItem" href="donate.php">Donate</a></li>
          <?php
          }else{
            ?>
            <li><a class="navItem" href="adminDonate.php">Donated</a></li>
          <?php
          }
            }
            else{
        ?>
        <li>
          <a href="login.php">
            <i class="login navItem fa-solid fa-right-to-bracket" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login"></i>
          </a>
        </li>
        <?php
            }
        ?>
      </ul>
    </div>
  </section>
  
  <script>
    function active(){
      document.getElementsByClassName("navItem").classList.toggle("active");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>