<?PHP
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include("connect.php");
	$Topic_name=$_POST['name'];

    $image_name = $_FILES['my_image']['name'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
    	$image_ex = pathinfo($image_name,PATHINFO_EXTENSION);

    	$image_ex_lc = strtolower($image_ex);

    	$allowed_exs = array("jpg", 'jpeg', 'png');

    	if (in_array($image_ex_lc, $allowed_exs)) {
    		
    		$new_image_name=$image_name ;
    		$image_upload_path = 'uploads/'.$new_image_name;
    		move_uploaded_file($tmp_name, $image_upload_path);

            $sql = "INSERT INTO `cards`(`name`, `images`) VALUES('$Topic_name','$new_image_name')";
            mysqli_query($conn, $sql);
            header("Location:categoryUp.php");
    	}else {
    		$em = "You can't upload files of this type";
    		header("Location:categoryUp.php?error=$em");
    	}
    }


}else{
	header("Location: categoryUp.php");
}
