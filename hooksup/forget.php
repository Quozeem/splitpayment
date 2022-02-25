<?php
session_start();
include_once "config.php";

if (isset($_POST['submit'])){
    $mail=$_POST['phonemail'];
    $subject = "Reset Password";
    $text = "Hi there click here to reset your password";
     ?>
      <a href="reset.php?edit=<?php echo $row['id'];?>">Reset Password</a>
    <?php
    
    $quermail="SELECT * FROM hooked WHERE phonemail='$mail'";
    $result =mysqli_query($connection,$quermail);
    if(!$result){
        die("Not Connected").mysqli_connect_error();
        
    }while($row=mysqli_fetch_array($result)){
        $email=$row['phonemail'];
        $id = $row ['id'];
    }if ($mail == $email){
        
         mail($mail,$subject,$text);
          
        }
        
    elseif ($mail !== $email){
        $_SESSION['rest']= "true";
         header("location:forget.php");
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
  opacity:

</style>
<body>

<div class="container">
   <div class="zoomEffect_1">
    <img src="img/908861.png" alt="zoom">
</div>
<div class="height">
<h1>Forget password</h1><br />
<form method="post" action="forget.php">
      <label>Email or phone number</label>
      
      
      <input type="text"  name="phonemail"required>
       <div class="clearfix">
        
        <button type="submit" name="submit" class="signupbtn">Reset Password</button>
      </div>
      </form>
</body>
</html>