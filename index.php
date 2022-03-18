<?php
    include "nav.php";
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/landingStyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>

<body>
    <div class="row">
        <div class="box">
            <div class="col-sm-6">
                <div class="card" style="margin-top: 50px; background: #f7fff8">
                    <div class="card-body">
                        <div class="idx-title">
                            <h1>Education Unlocked</h1>
                        </div>
                        <strong>
                        <p>Discover a limitless world of learning.
                            Review important concepts and explore new topics—the options are endless with Education Unlocked! Join for free today and browse 1000+ worksheets, 
                            online classes, lesson plans and more. </p>
                        </strong>
                        <div class="btn">
                            <button class="button button1"><a class="posts" href="allPost.php"> Get started</a></button><!--------index page link--------->
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="imgclass">
                    <img class="card-img-left" src="images/schooling.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="box-one">
        <div class="row-one">

            <div class="hiw">
                <h1>How it works?
                </h1>
            </div>

            <div class="col-sm-4">
                <div class="card-one">
                    <div class="card-body">
                        <p class="it-1">Varying the contents</p>
                        <p class="card-text-1"> Tutorials, sounds,live classes and text work together 
                            to build memory in the brain and result in better retention of the material.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-two">
                    <div class="card-body">
                        <p class="it-2">Creating interaction</p>

                        <p class="card-text-2">Various lecture tutorials on the screen creates more interest, 
                            which in turn builds better retention.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-three">
                    <div class="card-body">
                        <p class="it-3">Providing feedback</p>
                        <p class="card-text-3"> E-learning courses can build in immediate feedback to correct misunderstood material. 
                            The more immediate the feedback the better, because each step of learning builds upon the previous step.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Get hands-on with learning! Our expert-designed activities bring hundreds of topics
                        <br> to life through science experiments, engaging writing prompts, creative lecture videos, video tutorials,live classes and more.

                    </p>
                    <a href="About.php" class="btn my-4 font-weight-bold atlas-cta cta-blue" style="text-decoration: none;"><h5>Learn More</h5></a><!----about page------->
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="images/image-1.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center flex-md-first">
                    <img src="images/feature-2.png" alt="Safe and reliable" class="mx-auto d-block">
                </div>

                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Safe and reliable</h2>
                    <p class="my-4">
                        The website is for Safe, Reliable, and Effective Care which provides clarity and direction to safe and reliable learning experiences.
                         This website helps student be safe,confident & explorerers of the online education.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
    </script>


</body>

</html>
<?php
    include "footer.php";
?>