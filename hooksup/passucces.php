<?php  
session_start();
include_once "config.php";

if (isset($_POST['update'])) {
    
    $passwordJ = $_POST['password'];
    
    $select= "UPDATE hooked SET password ='$passwordJ' WHERE id='$id'";
    
    $result = mysqli_query($connection,$select);
    
    if (!$result) {
        die (("failed").(mysqli_connect_error()));
  }      
    
    
}
?>
<!doctype html>
<html>
    <head>
     <title>VENTURE</title>
     <link rel="shortcut icon" href="img/download (2).png">
         <link rel="stylesheet" href="hooks.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewort" content="width=device-width">
   <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
   <p>Password changed succefully</p>
   
   
   </body>
   </html>