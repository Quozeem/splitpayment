
<?php include_once "process.php"; ?>
               <?php
   if (isset($_GET['del'])){
   
     $id = $_GET['del'];
     
    
   
        
  $delete = "DELETE FROM  hooked WHERE id = $id";

 include_once "config.php";
   
   $result = mysqli_query($connection,$delete);
   
   if (!$result){
    die (("failed").mysqli_connect_error());
   }
 

}

?>
<?php
 $password = $_POST['password'];

$max = 50;
 if (strlen($password) < $max) {
 
    echo "";
 }
  else die (("failed").mysqli_connect_error());
?>
<?php
 $firstname = $lastname = $phonemail = $password = " ";
$unamerr = $namerr = $phonemailrr = $passwordrr = " ";

 if (isset($_POST['submit'])) {
    if (empty($_POST['firstname'])){
       echo "Name required <br>"; 
    }
   else {
    $firstname = ($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      die ("Only letters and white space allowed");
    }
  }
   if (empty($_POST['lastname'])){
       echo "Name required <br>"; 
    }
   else {
    $lastname = ($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
       die ("Only letters and white space allowed");
    }
  }
  
  if (empty($_POST["phonemail"])) {
    echo "Email is required  <br>";
  } else {
    $phonemail = ($_POST["phonemail"]);
    // check if e-mail address is well-formed
   echo "";
    }
  if (empty($_POST["password"])) {
    echo "password requird  <br>";
  } else {
    $password = ($_POST['password']);

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
<a href="form.php">signin</a>

<table border="2"  style="width: 50%; height=100%; border:1px solid blocks; border-collapse: collapse;">
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>phonemail</th>
<th>password</th>
<th colspan="2">Action</th>

 <?php
 
  include_once "config.php";   
        
  $query = "SELECT * FROM hooked";
  
  $result=mysqli_query($connection,$query);
  
  if (!$result) {
    die (("failed").mysqli_connect_error());
  }else{
    echo "succefully";
  }
while ($row = mysqli_fetch_assoc($result)){
     

 ?>
  <tr>
  <td><?php echo $row['id'] ;?></td>
  <td><?php echo $row['firstname'] ;?></td>
  <td><?php echo $row['lastname'];?></td>
  <td><?php echo $row['phonemail'];?></td>
  <td><?php echo $row['password'];?></td>
  <td>
   <a href="update.php?edit=<?php echo $row['id'] ;?>">Edit</a>
    <a href="val.php?del=<?php echo $row['id'] ;?>">Delete</a>
    </td>
    </tr>
  <?php
}
   ?>
</table>

<a href="form.php">Login</a>
</body>
 

 
 
 
 
 
 
 
 </html>