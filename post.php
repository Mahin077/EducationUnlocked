<?php
include 'connect.php';
session_start();
$postID = $_GET['_postid'];

$sqlShowPost = "select post.postid,user.username,post.text,post.category,post.created_at from post join user where post.userid=user.userid && post.postid = '$postID' ";
$resultShowPost = mysqli_query($conn, $sqlShowPost);
$rowPost = mysqli_fetch_array($resultShowPost);


//insert the comment in the database
if (isset($_POST['commentButton'])) {
    if (isset($_SESSION['user_id'])) {
        if (!empty($_POST['commentText'])) {
            $comment = $_POST['commentText'];
            $userid = $_SESSION['user_id'];

            $sqlCommentPost = "insert into comment(userid,postid,comment) values('$userid','$postID','$comment')";
            $resultCommentPost = mysqli_query($conn, $sqlCommentPost);
            if ($resultCommentPost) {
                echo "<script>alert('Comment added successfully.')</script>";
            } else {
                echo "<script>alert('something wrong')</script>";
            }
        }
    } else {
        echo "<script>alert('Please login first')</script>";
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/index.css">


    <title>Post</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- username,category,userimage,time of in the post -->
                    <div class="d-flex justify-content-between p-2 px-3">
                        <div class="d-flex flex-row align-items-center"> <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/61a32d90-92bd-48ba-be28-a459f5efac0c/d990c1a-6f6ce22e-6234-479e-a181-014cfc5f1019.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzYxYTMyZDkwLTkyYmQtNDhiYS1iZTI4LWE0NTlmNWVmYWMwY1wvZDk5MGMxYS02ZjZjZTIyZS02MjM0LTQ3OWUtYTE4MS0wMTRjZmM1ZjEwMTkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.-YSXnvPiMVc0Zpb4RIXK2kTKiaxnA6oyOLhu0zGe_34" width="50" class="rounded-circle">
                            <div class="d-flex flex-column ml-2" style="margin-left: 10px;"> <span class="font-weight-bold"><b><?php echo $rowPost['username'] ?></b></span><small class="text-primary"><?php echo $rowPost['category'] ?></small> </div>
                        </div>
                        <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2"><?php echo $rowPost['created_at'] ?></small> <i class="fa fa-ellipsis-h"></i> </div>
                    </div>
                    <div class="p-2">
                        <!-- post main text -->
                        <p class="text-justify" style="margin-left: 12px;"><?php echo $rowPost['text'] ?></p>
                        <hr>
                        <!-- show total comments in the post, button to show all the comments and hide the comments -->
                        <?php

                        $sqlComment = "select comment.comment, user.username from comment join user where comment.userid=user.userid && comment.postid= '$postID'";
                        $resultComment = mysqli_query($conn, $sqlComment);
                        $countComment = $resultComment->num_rows;
                        ?>
                        <div class="d-flex justify-content-between align-items-center" style="margin-top: 5px;">
                            <div class="d-flex flex-row icons d-flex align-items-center"> <i class="fa fa-heart"></i> <i class="fa fa-smile-o ml-2"></i> </div>
                            <div class="d-flex flex-row muted-color"> <span style="margin-right: 10px;"><?php echo $countComment ?> comments</span> </div>

                        </div>

                        <hr>


                        <!-- the actual comments in the post -->
                        <div class="comments">
                            <?php
                            while ($rowComment = mysqli_fetch_array($resultComment)) {
                            ?>
                                <div class="d-flex flex-row mb-2"> <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/61a32d90-92bd-48ba-be28-a459f5efac0c/d990c1a-6f6ce22e-6234-479e-a181-014cfc5f1019.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzYxYTMyZDkwLTkyYmQtNDhiYS1iZTI4LWE0NTlmNWVmYWMwY1wvZDk5MGMxYS02ZjZjZTIyZS02MjM0LTQ3OWUtYTE4MS0wMTRjZmM1ZjEwMTkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.-YSXnvPiMVc0Zpb4RIXK2kTKiaxnA6oyOLhu0zGe_34" width="40" class="rounded-image">
                                    <div class="d-flex flex-column ml-2" style="margin-left: 10px;"> <span class="name"><?php echo $rowComment['username'] ?></span> <small class="comment-text"><?php echo $rowComment['comment'] ?></small>
                                    </div>
                                </div>
                            <?php

                            }
                            ?>
                        </div>


                        <!-- textbox and button to add a new comment in the post -->
                        <form action="" method="POST">
                            <div class="comment-input" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-11">
                                        <input type="text" name="commentText" class="form-control">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-primary" name="commentButton">send</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>