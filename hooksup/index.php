<?php
session_start();

?>

<?php
if (isset($_POST['remember'])) {
    
    setcookie("firstname",$_POST['firstname']);
    setcookie("password",$_POST['password']);
}else {
    setcookie("firstname","");
     setcookie("password","");
}
?>
<?php


  if (isset($_POST['login']))  {
  
    $user = $_POST['firstname'];
    $pass = $_POST['password'];
    
    include_once "config.php";
    
$select ="SELECT * FROM hooked WHERE firstname='$user' AND password='$pass'";

$result=mysqli_query($connection,$select);

if (!$result) {
    die (("failed").mysqli_connect_error());
}while($row=mysqli_fetch_array($result)){
      $firstname=$row['firstname'];
       $password=$row['password'];
}if(($user == $firstname) && ($pass == $password)){
    $_SESSION['firstname']=$firstname;
    $_SESSION['password']=$password;
   $_SESSION['logged'] ="true";
      header("location:welcome.php");
}else{
     header("location:index.php");
}


  }
      


?>
<!doctype html>
<html>
    <head>
     <title>VENTURE</title>
     <link rel="shortcut icon" href="img/download (2).png">
         <link rel="stylesheet" href="hooks.css">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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
   <div class="zoomEffect_1">
    <img src="img/908861.png" alt="zoom">
</div>
<div class="height">
    <h2>WELCOME TO VENTURE ENTERPRISE</h2>
    </div>
      <marquee behavior="scroll" direction="left" style="font-size: 20px; color: #555; font-family:helvetica neue,segoe ui">
    Don't miss your next opportunity. Sign in to stay updated on your professional world.</marquee>
         <div class="form-group">
           <form method="post" action="index.php"> 
<input type="text" name="firstname" id="firstname" class="form-control" required>
<label for="firstname" class="form-label">Firstname</label>

<input type="password" id="password" name="password" class="form-control" required>
<label for="password" class="form-label">Password</label>

<div class="eyes">
<i class="fa fa-eye" aria-hidden="true" onclick="myFunction()"></i>

    </div>
    <div>
    <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label></div>
<button type="submit" id="login_button" name="login" class="button">Login</button>
<div>
<div class="fogte">
<a href="forget.php" class="btn-2">Forget password?</a>

<p style="margin-left: 25%;">New member?</p>
<a href="signup.php" class="btn-3" style="margin-left: 43%;">Signup</a>

</div>
</form>
</div>
</div>
<div class="foot" style="margin-top: -35px;">
<?php echo "<hr>"; ?>

</div>

<ul id="twwits">
<a href=""><li>Home</li></a>
<a href=""><li>About Us</li></a>
<a href=""><li>Contact Us</li></a>
</ul>
<div class="footer">VENTURE&#169;2020</div>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>







</body>
</html>
