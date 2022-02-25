<?php
session_start();
include_once "config.php";

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    
    $select ="SELECT * FROM hooked WHERE id= '$id'";
    $result = mysqli_query($connection,$select);
    
    if (mysqli_num_rows($result) > 0){
        
        while($row= mysqli_fetch_array($result)){
            
            $passwordJ = $row['password'];
        }
        
    }
}if ($_SESSION['rest'] != "true") {
    header("location:forget.php");
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
    <style>
   body {font-family: Arial, Helvetica, sans-serif;
    background-color:#f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
* {box-sizing: border-box;}
  .height {
    margin: 5% 20%;
    width:50%;
    position: absolute;
  }
   input[type=text],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
  border:none;
}
 h1 {
    text-align: center;
 }
 button {
   background-color: #1DA1F2;
  color: white;
  padding: 8px 13px;
  margin: 8px 0;
  font-weight: 600;
  border-radius: 20px 20px 20px 20px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
  border-collapse: collapse;
  margin: 0 25%;
}

button:hover {
  opacity:}
  
  input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}
.container {
  padding: 16px;
}
 .eyess {
    position: absolute;
    margin:0 80%;
    margin-top: -55px;
    width: 50%;
    
 }
.clearfix{
    position: absolute;
    margin:0%;
    
    width: 100%
}
</style>
<body>
</style>
<body>

<div class="container">
   <div class="zoomEffect_1">
    <img src="img/908861.png" alt="zoom">
</div>
<div class="height">
<h1>Reset Password</h1><br />
<form method="post" action="passucces.php">
      <label>New Password</label>
      
      
      <input type="password"  name="password" value="" required>
      <div class="eyess">
<i class="fa fa-eye" aria-hidden="true" onclick="myFunction()"></i>
<span>Show</span>
</div>
       <div class="clearfix">
        
        <button type="submit" name="update" class="signupbtn">Submit</button>
      </div>
      </form>
      </div>
      </div>
      
</body>
</html