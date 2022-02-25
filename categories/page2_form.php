
<?php
session_start();
include_once "config.php";
//$name=mysqli_real_escape_string($connection,$_POST['name']);
//$business=mysqli_real_escape_string($connection,$_POST['business']);
//$contact=$_POST['contact'];
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['name'])){
 if (empty($_POST['name']))
     (empty($_POST['email']))
 { 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page1_form.php"); // Redirecting to first page 
 } else {
 Sanitizing email field to remove unwanted characters.
 $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
 // After sanitization Validation is performed.
 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 // Validating Contact Field using regex.
 if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
    $_SESSION['letter'] =  "Only letters and white space allowed";
    header("location: page1_form.php");
    
 if (!preg_match("/^[0-9]{11}$/", $_POST['contact'])){ 
 $_SESSION['number'] = "Invalid Number.";
 header("location: page1_form.php");
 
 } extract($_SESSION['post']); 
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: page1_form.php");//redirecting to first page
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
 </head>
 <body>
 <a  class="homepage"  href="index.php">Return to Hompage</a>
 <div class="container">
 
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
 <form action="page3_form.php" class="regForm" enctype="multipart/form-data" method="post">
 <h1 style="color:#ae3c33;width: 100%;text-align:center">POST AD</h1>
 
 <script>
$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'Agriculture & food':
            $("#size").html("<option value='Farm Machinery & equipment'>Farm Machinery & equipment</option><option value='Feeds,Supplements & Seeds'>Feeds,Supplements & Seeds</option><option value='Livestock & Poultry'>Livestock & Poultry</option><option value='Meals & Drinks'>Meals & Drinks</option>");
            break;
        case 'Babies & Kids':
            $("#size").html("<option value='Children's shoes'>Children's shoes</option><option value='Maternity & pregnancy'>Maternity & pregnancy</option><option value='Toys'>Toys</option>");
            break;
        case 'Electronics':
            $("#size").html("<option value='Computer Accessories'>Computer Accessories</option><option value='Video Game Consoles'>Video Game Consoles</option><option value='Headphones'>Headphones</option><option value='TV & DVD Equipment'>TV & DVD Equipment</option><option value='Laptops & Computers'>Laptops & Computers</option><option value='Photo & Video Cameras'>Photo & Video Cameras</option><option value='Printers & Scanners'>Printers & Scanners</option>");
            break;
              case 'Fashion':
            $("#size").html("<option value='Bags'>Bags</option><option value='Clothing'>Clothing</option><option value='Clothing Accessories'>Clothing Accessories</option><option value='Jewelry'>Jewelry</option><option value='Shoes'>Shoes</option><option value='Watches'>Watches</option><option value='Wedding Wear & Accessories'>Wedding Wear & Accessories</option>");
            break;
              case 'Health & Beauty':
            $("#size").html("<option value='Bath & Body'>Bath & Body</option><option value='Fragrance'>Fragrance</option><option value='Hair Beauty'>Hair Beauty</option><option value='Makeup'>Makeup</option><option value='Skin Care'>Skin Care</option><option value='Vitamins & Supplements'>Vitamins & Supplements</option><option value='Others'>Others</option>");
            break;
              case 'Mobile Phones & Tablets':
            $("#size").html("<option value='Phones & Tablets Accessories'>Phones & Tablets Accessories</option><option value='Mobile Phones'>Mobile Phones</option><option value='Tablets'>Tablets</option><option value='Smart Watches & Trackers'>Smart Watches & Trackers</option>");
            break;
             case 'Home & Garden':
            $("#size").html("<option value='Furniture'>Furniture</option><option value='Garden'>Garden</option><option value='Home Accessories'>Home Accessories</option><option value='Home Appliances'>Home Appliances</option><option value='Kitchen & Dining'>Kitchen & Dining</option>");
            break;
        default:
            $("#size").html("<option value=''>--select one--</option>");
     }
  });
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select id="type" name="categories" required>
    <option value="item0">Category*</option>
    <option  value="Agriculture & food">Agriculture & food</option>
    <option value="Babies & Kids">Babies & Kids</option>
    <option value="Electronics">Electronics</option>
     <option value="Fashion">Fashion</option>
    <option value="Health & Beauty">Health & Beauty</option>
     <option value="Mobile Phones & Tablets">Mobile Phones & Tablets</option>
    <option value="Home & Garden">Home & Garden</option>
</select>

<select id="size"  name="brand" multiple required>
    <option value="">-- select one -- </option>
</select>
<br><br>
<label>Price<span>*</span></label>
  <input type="text"  name="price" required><br><br>
  <label>Address<span>*</span></label>
  <input type="text" placeholder="Address" name="address" required><br /><br />
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 
 </body>
</html>

