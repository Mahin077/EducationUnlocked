<?php
include("connect.php");
include "nav.php";
$query = "SELECT * FROM `contactus` order by id ASC";


$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-image: url(Images/msgbg1.jpg);">
    <section class="header mt-5">
        <div class="text-center">
            <h3 style="color:white;">All Messages</h3>
        </div>
    </section>
    <section class="table">
        <table class="table table-success table-striped table-hover table-bordered text-center  mt-5" style="width: 80%;margin-left:auto;margin-right:auto;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <?PHP

            if ($num > 0) {
                while ($products = mysqli_fetch_array($queryfire)) {

            ?>

                    <tbody>
                        <form action="" method="GET">
                            <tr>
                                <th scope="row"><?php echo $products['id'] ?></th>
                                <td><?php echo $products['name'] ?></td>
                                <td><a href="mailto:email-to@gmail.com?cc=email-cc@gmail.com&bcc=email-bcc@gmail.com&subject=Subject Using Mailto.co.uk&body=Email Using Body"><?php echo $products['email'] ?></a></td>
                                <td><?php echo $products['messages'] ?></td>
                            </tr>


                        </form>

                    </tbody>
            <?php
                }
            }

            ?>

        </table>
    </section>
    <script src="https://kit.fontawesome.com/d55bbcbd90.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>