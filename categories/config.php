<?php
$host="localhost";
$user="root";
$password="";
$bd="multipless";
$connection=mysqli_connect($host,$user,
$password,$bd);
if(!$connection){
    die("failed to connect").mysqli_connect_error();
}
?>