<?php
session_start();

session_destroy();
   //if ($_GET['status'] !== "true"){
   // header("Location:javascript://history.go(-1)");
//}
if ($_SESSION['logged']!= "true"){
    header("Location:javascript://history.go(-1)");
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
    <div class="container">
<div class="row">
    <div class="col-lg-12">
<h1>WELCOME TO HOME PAGE</h1>
<a href="index.php">Log out</a>

</div>
</div>
</div>