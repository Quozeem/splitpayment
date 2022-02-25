
<?php
include_once "config.php";
if (isset($_POST['update'])) {
    $id=$_POST['id'];

		
     	$firstnameJ = $_POST['firstname'];
            $lastnameJ =$_POST['lastname'];
          $phonemailJ =$_POST['phonemail'];
          $passwordJ =$_POST['password'];

    // if ($firstnameJ ||  $lastnameJ ||   $phonemailJ  ||  $passwordJ) {
   
  // }
	$update="UPDATE hooked SET firstname = '$firstnameJ',lastname = '$lastnameJ',phonemail = '$phonemailJ',password= '$passwordJ' WHERE id='$id'";
	
    $result =mysqli_query($connection,$update);
     // echo $result;
    if (!$result){
        die (("failed").mysqli_connect_error());
    }
    
   
    }
?>