
<?php
session_start();
include_once "config.php";
//$category = mysqli_real_escape_string($connection,$_POST['categories']);
//$brand= mysqli_real_escape_string($connection,$_POST['brand']);
//$price= mysqli_real_escape_string($connection,$_POST['price']);
//$address= mysqli_real_escape_string($connection,$_POST['address']);
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['brand'])){
 if (empty($_POST['brand'])
 || empty($_POST['brand'])
 || empty($_POST['price'])
 || empty($_POST['address'])
){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page3'])) {
 header("location: page1_form.php");// Redirecting to first page.
 }
}
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>PHP Multi Page Form</title>
 <link rel="stylesheet" href="style.css" />
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
 </head>
 <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
.regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}



/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color:white ;
}
textarea.invalid {
  background-color:white ;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

input[type=submit],
input[type=reset]{
    background: #ae3c33 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    border:#ae3c33;
    color: #fff;
    width:20%;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    font-weight: 800;
    letter-spacing: .5px;
    line-height: 1;
    margin-bottom: 0;
    padding: 18px 30px;
    text-align: center;
    text-transform: uppercase;
    touch-action: manipulation;
    transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
    vertical-align: middle;
    white-space: nowrap;
    position: relative;
    z-index: 1
}

input[type=submit]:hover,
input[type=reset]:hover
{
    opacity: 0.8;
}


#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #ae3c33;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #ae3c33;
}
 </style>
 <body>
 <a  class="homepage"  href="index.php">Return to Hompage</a>
 <div class="container">
 
 <span id="error">
 <?php
 //if (!empty($_SESSION['error_page3'])) {
 //echo $_SESSION['error_page3'];
 //unset($_SESSION['error_page3']);
 //}
 ?>
 </span>
 <form action="page4_form.php" class="regForm" enctype="multipart/form-data" method="post">
 <h1 style="color:#ae3c33;width: 100%;text-align:center">POST AD</h1>

 <label>Upload<span>*</span></label><br />
 <input type="file"  name="files[]"  multiple required><br /><br />
 <textarea   name="message"  maxlength="200" cols="25" rows="8" 
 placeholder="Product Description....."required></textarea><br /><br />
 
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 

 </body>
</html>

