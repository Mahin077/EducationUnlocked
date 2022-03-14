<?php
include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team Page</title>
  <link rel="stylesheet" href="css/teamPage.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <!-- Team page section -->
  <section class="container">
    <div class="title  d-flex justify-content-center">
      <h3 style="top: 20px;margin-top: 50px; color: cornflowerblue;">Meet Our TEAM</h3>
    </div>

    <div style="margin-top:100px ;" class="row ">

<?PHP

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'educationunlocked');

$query = "SELECT  * FROM `team` order by id ASC";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if ($num > 0) {
  while ($products = mysqli_fetch_array($queryfire)) {
?>
    <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center mb-5">
      <form>
        <!-- Team Members Card Section -->
        <div class="card" id="cards">
          <img src="<?php echo $products['img']; ?>" class="team card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title " style="color: black;"><?php echo $products['Name']; ?></h5>
            <p class="card-text"><?php echo $products['Description']; ?> </p>
            <p>Email: <b><?php echo $products['email']; ?></b></p>
          </div>

        </div>
      </form>

    </div>


<?php

  }
}

?>

</div>

  </section>

  <div class="infos">
    <div class="box">
      <h1>
        EDUCATION UNLOCKED is designed as an all one system that makes education effective with various features.
      </h1>
      <p>
        Our mission is to connect businesses with diverse audiences through powerful content crafted by specialized writers, managed by a team that puts people first.
      </p>



      <div class="policies">
        <img src="https://contentwriters.com/static/global/img/blob.svg" alt="" style="width: 10%; margin-left: 45%; margin-right: 45%;">
        <h1>
          Our Values
        </h1>
        <div class="container" data-text="Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning. Through the tutorials student can learn by their own. This website will bring a revolutionary change in their life.">
          <div class="pic" style="padding: 1rem;">
            <img src="	https://contentwriters.com/static/global/img/icon-people.svg" alt="" style="width: 60px; height: 60px;">
          </div>
          <div class="tittle" style="padding: 1rem;">
            <h2>Personalized Learning</h2>
          </div>
        </div>

        <div class="container2">
          <div class="box-1" data-text="Created by experts, Education Unlocked’s library of trusted practice and lessons covers math, science, and more. Always free for learners and students.">
            <div class="pic" style="padding: 1rem;">
              <img src="https://contentwriters.com/static/global/img/icon-passion.svg" alt="" style="width: 60px; height: 60px;">
            </div>
            <div class="tittle" style="padding: 1rem;">
              <h2>Trusted Content</h2>
            </div>
          </div>

          <div class="box-1" data-text="
                        With Education Unlocked, teachers can identify gaps in their students’ understanding and meet the needs of every student as the students can comment down their problems.">
            <div class="pic" style="padding: 1rem;">
              <img src="https://contentwriters.com/static/global/img/icon-passion.svg" alt="" style="width: 60px; height: 60px;">
            </div>
            <div class="tittle" style="padding: 1rem;">
              <h2>Tools To Empower Teachers</h2>
            </div>
          </div>
          <div class="box-1" data-text="
                        Need help with a training plan or schedule? Talk to one of our coaches. They can help guide you and answer all your questions..  Videos
                        Watch on-demand training from industry experts with focused, engaging videos available anytime.">
            <div class="pic" style="padding: 1rem;">
              <img src="https://contentwriters.com/static/global/img/icon-efficiency.svg" alt="" style="width: 60px; height: 60px;">
            </div>
            <div class="tittle" style="padding: 1rem;">
              <h2>Accountability Coaching</h2>
            </div>
          </div>
          <div class="box-1" data-text="
                        Live online classes allow interaction with students through chats and comments, which helps to make the class more dynamic, encourages debate and allows immediate answers to questions. Here students can join live classes taken by qualified teachers.">
            <div class="pic" style="padding: 1rem;">
              <img src="https://contentwriters.com/static/global/img/icon-commitment.svg" alt="" style="width: 60px; height: 60px;">
            </div>
            <div class="tittle" style="padding: 1rem;">
              <h2>Live Classes</h2>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
 




  <!-- Footer Section -->
  <footer>
    <?php

    include 'footer.php';

    ?>
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>