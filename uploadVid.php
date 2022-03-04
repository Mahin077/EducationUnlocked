<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
		.container {

			display: flex;
			justify-content: center;
			flex-direction: column;

			margin-top: 100px;


		}


		input {
			font-size: 2rem;
		}

		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

	<?php if (isset($_GET['error'])) {  ?>
		<p><?= $_GET['error'] ?></p>
	<?php } ?>
	<section class="container">
		<div class="header text-center">
			<h3>
				Video Tutorial
				<small class="text-muted">Upload Panel</small>
			</h3>
	</section>

	<section class="container">

		</div>

		<form action="upload.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label ">Subject :</label>
				<input type="text" placeholder="Enter Subject Name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label ">Topic Description :</label>
				<input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Enter Description">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label ">Choose a Video File :</label>
				<input type="file" name="my_video">
			</div>


			<input class="btn btn-primary btn-lg " type="submit" name="submit" value="Upload">
		</form>
	</section>
	<script src="https://kit.fontawesome.com/d55bbcbd90.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>