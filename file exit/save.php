<?php
	include 'database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_FILES['file']['city'];
 
             $target="upload/";
   $targetfile=$_FILES['file']['tmp_name'];
    $target_arr=$target.basename($city);
	$duplicate=mysqli_query($conn,"select * from crud where email='$email'");
	if (mysqli_num_rows($duplicate)>0)
	{
		echo json_encode(array("statusCode"=>201));
	}
	else{
		$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`) 
		VALUES ('$name','$email','$phone','$city')";
		if (mysqli_query($conn, $sql)) {
 move_uploaded_file($targetfile,$target_arr)
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}
	mysqli_close($conn);
?>
  