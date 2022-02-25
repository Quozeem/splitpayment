<?php
include "config.php";
if( isset( $_POST['submit_form'] ) )
{

$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpass'];

$insertdata="INSERT INTO user (name,loginid,email) VALUES( '$name','$email','$password') ";
$result=mysqli_query($con,$insertdata);

}
?>