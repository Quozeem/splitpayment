
<?php
include_once "config.php";
?>
<?php 

  if(isset($_POST['submit'])){
  
  $name=  $_POST['name'];
  $username = $_POST['username'];
  $address = $_POST['address'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $target="images/".basename(($_FILES['image']['name']));
  include_once "config.php";
  
  $img= ($_FILES['image']['name']);
   $password = $_POST['password'];  
   $amount =  $_POST['amount'];
   $fees= $_POST['fees'];
   if ($name ||   $username ||  $address || $email || $phone || $img || $password || $amount || $fees)  {
    
    }      
                    
     $query  =  "INSERT INTO proj (name, username, address, email, phone,,image, password,amount,fees) 
       VALUES ('$name', '$username', '$address', '$email', '$phone','$img', '$password','$amount','$fees') ";  
     
     $result =  mysqli_query ($connection,$query);
   if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
   $msg="image uploaded successfully";
}else{
 $msg="There was a problem uploading";

}
     if ($result){
                    echo "<div class='form'>
                    <h3>You are registered successfully.</h3>
                    <br/>Click here to <a href='login.php'>Login</a></div>" ;
        
        
        
     } else 
        die ("failed").mysqli_connect_error();
     
     
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="hook">
    <meta name="author" content="hook">
    <meta name="keywords" content="hook">

    <!-- Title Page-->
     <title>VENTURE</title>
     <link rel="shortcut icon" href="img/download (2).png">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  
  <?php
  
  //include ("auth.php");   ?>
 
   <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading">
                <div class="card-body">
<div class="form">
<?php echo "<div class='form'>
                    <h3>Registration Successful.</h3>
                    <br/>Click here to <a href='login.php'>Login</a></div>" ;
                    ?>
               
<p>Welcome <?php echo $_POST['name']; ?>!</p>
<p>This is a secure area.</p>
    <p style="color:blueviolet;">welcome to home page</p>
    <a href="logout.php">Logout</a>
   </div>
   </div>
     </div>
       </div>
         </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->