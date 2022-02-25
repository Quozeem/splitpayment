<?php
$host ="localhost";
$user ="root";
$password ="";
$database ="qoztorec_store";
$con= mysqli_connect($host,$user,$password,$database);
 if(!$con){
     die("failed").mysqli_connect_error();
 }

?>
