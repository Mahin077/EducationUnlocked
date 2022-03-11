<?php
include 'connect.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/TeamPage.css">
</head>

<body>

    
            <div class="row" style="margin-top: 20px;">
                <div class="col">
                    <h1>Our Team </h1>
                  <!-- <p>We work with exceptional people who do extraordinary things.</p>--> 
                  

                </div>
                </div>
      


    <div class="infos">
        <div class="box">
        <h1>
            EDUCATION UNLOCKED  is designed as an all one system that makes education effective with various features.
        </h1>
        <p>
            Our mission is to connect businesses with diverse audiences through powerful content crafted by specialized writers, managed by a team that puts people first.
        </p>

        <div class="policies">
            <img src="https://contentwriters.com/static/global/img/blob.svg" alt="" style="width: 10%; margin-left: 45%; margin-right: 45%;">
            <h1>
                Our Values
            </h1>
            <div class="container" data-text= "Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning. Through the tutorials student can learn by their own. This website will bring a revolutionary change in their life.">
                <div class="pic" style="padding: 1rem;">
                    <img src="	https://contentwriters.com/static/global/img/icon-people.svg" alt="" style="width: 60px; height: 60px;" >
                </div>
                <div class="tittle" style="padding: 1rem;">
                    <h2>Personalized Learning</h2>
                </div>
                </div>
            
                    <div class="container2">
                        <div class="box-1" data-text= "Created by experts, Education Unlocked’s library of trusted practice and lessons covers math, science, and more. Always free for learners and students.">
                            <div class="pic" style="padding: 1rem;">
                                <img src="https://contentwriters.com/static/global/img/icon-passion.svg" alt="" style="width: 60px; height: 60px;" >
                            </div>
                            <div class="tittle" style="padding: 1rem;">
                                <h2>Trusted Content</h2>
                            </div>
                        </div>
                        
                    <div class="box-1"  data-text= "
                    With Education Unlocked, teachers can identify gaps in their students’ understanding and meet the needs of every student as the students can comment down their problems.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-passion.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Tools To Empower Teachers</h2>
                        </div>
                    </div>
                    <div class="box-1"  data-text= "
                    Need help with a training plan or schedule? Talk to one of our coaches. They can help guide you and answer all your questions..  Videos
Watch on-demand training from industry experts with focused, engaging videos available anytime.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-efficiency.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Accountability Coaching</h2>
                        </div>
                    </div>
                    <div class="box-1"  data-text= "
                    Live online classes allow interaction with students through chats and comments, which helps to make the class more dynamic, encourages debate and allows immediate answers to questions. Here students can join live classes taken by qualified teachers.">
                        <div class="pic" style="padding: 1rem;">
                            <img src="https://contentwriters.com/static/global/img/icon-commitment.svg" alt="" style="width: 60px; height: 60px;" >
                        </div>
                        <div class="tittle" style="padding: 1rem;">
                            <h2>Live Classes</h2>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>

    </div>
    </div>
    

<div class="catagory">
    <h1>Meet Our Company</h1>
    <p>We’re a nonprofit with the mission to provide a free, world-class education for anyone, anywhere.</p>
    <div class="catagory-container">
        <?php 
		
		$sql = "SELECT * FROM team"; 
		$result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
                
                echo "<div class='catagory-box1'>";
                echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="Image">';
                echo " <h2>".$row['Name']."</h2>";
                echo "<p>".$row['email']."</p>";
                echo "<p id='k'>".$row['Description']."</p>";
                echo "</div>";
               
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		 
	?>    
       
<div>
<div class="box-1">
<a href="">Get In Touch</a>
</div> 
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include "footer.php";
?>