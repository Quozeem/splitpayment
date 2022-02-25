
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
 <!---- Initializing Session for errors --->
 
 </span>
 <?php
 session_start();
 $count= 3;
 include_once "config.php";
 //$message=mysqli_real_escape_string($connection,$_POST['message']);
 
 $desired_dir="advert_pic/";
 date_default_timezone_set('Africa/Lagos');
 $date_time=date('m/d/Y h:i:s a',time());
 if (isset($_POST['message'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['message'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page3_form.php"); // Redirecting to third page.
 } 
 $array_image = array_filter($_FILES['files']['name']);
 if(!empty($array_image)){
  foreach($_FILES['files']['name'] as $key => $val ){
      //file path 
  
      $fileName = basename($_FILES['files']['name'][$key]);
      $targetfilepath =  $desired_dir . $fileName;
     // $uploadedFileStr = implode( ',',$targetfilepath); 
      //file exist
      $fileinfo = getimagesize($_FILES["files"]["tmp_name"][$key]);
      $width = $fileinfo[0];
      $height = $fileinfo[1];
      if($width < "755" && $height > "1002" ) {
        $_SESSION['file_image']="file too large";
        header("location: page3_form.php"); 
   }
     if(file_exists($targetfilepath )) {
      $_SESSION['file_image']="file already exit";
        header("location: page3_form.php"); 
      }  
      if(count($array_image) > $count){
        $_SESSION['file_image']="Select three(3) images only";
        header("location: page3_form.php"); 
     }
       //select file type
   $extension = strtolower(pathinfo( $targetfilepath,PATHINFO_EXTENSION));
   //valid file extension
   $extension_img=array('jpg', 'png', 'jpeg','jfif','gif'); 
   if(!in_array($extension,$extension_img)){
    $_SESSION['file_image']="file not supported";
        header("location: page3_form.php"); 
      }
 else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 //$connection =mysqli_connect("localhost", "root", "","category");
 include_once "config.php";
 //$db = mysql_select_db("", $connection); // Storing values in database.
 //$query ="INSERT INTO detail (name,email,contact,password,religion,nationality,
// gender,qualification,experience,address1,address2,city,pin,state) values('$name','$email','$contact','$password',
// '$religion','$nationality','$gender','$qualification','$experience','$address1','$address2','$city','$pin','$state')";
$select="INSERT INTO multiple (name,business,contact
,categories,brand,price,address,message,file,date) VALUES
('$name','$business','$contact','$category',
'$brand','$price','$address','$message','$fileName','$date_time')";
$result=mysqli_query($connection,$select);
 if (!$result) {
  echo '<p><span>FAILED TO POST</span></p>';
}
unset($_SESSION['post']); // Destroying session.
 if($result){
  if(move_uploaded_file($_FILES["files"]['tmp_name'][$key],$targetfilepath) ){
    $_SESSION['posted']="POST";
 //echo '<p><span id="success">POSTED</span></p>';
     // $_SESSION['posted']="POST";
 } 
 
 } 

 }
 $compress_file = "compress_".$fileName ;     //rename compressed file
 $compressed_img = $desired_dir.$compress_file;
 $compress_name = compressImage( $targetfilepath,$compressed_img);   //compressImage(sourcefile, compressfile);
   //unlink($targetfilepath);  
  
 }
  //else {
 //header("location: page1_form.php"); // Redirecting to first page.
 //}
 } 
 //else {
// header("location: page1_form.php"); // Redirecting to first page.
 //}
}
}
function compressImage($source_image,$compress_image) {
  $image_info = getimagesize($source_image);
  

  // Create a new image from file 
   if ($image_info ['mime'] == 'image/jpeg') {
  $source_image = imagecreatefromjpeg($source_image);
                 imagejpeg($source_image,$compress_image,80);
}
elseif ( $image_info['mime'] == 'image/gif') {
   $source_image = imagecreatefromgif($source_image);
    imagegif($source_image,$compress_image,80);

}
elseif ($image_info['mime'] == 'image/png') {
   $source_image = imagecreatefrompng( $source_image);
   imagepng($source_image,$compress_image,8);        // for png it should be 0-9
  }
    elseif ($image_info['mime'] == 'image/jpg') {
  $source_image = imagecreatefromjpg($source_image);
   imagepng($source_image,$compress_image,80);
   }
  
    elseif ($image_info['mime'] == 'image/jfif') {
  $source_image = imagecreatefromjfif($source_image);
           imagejfif($source_image,$compress_image,80);

    }
    return $compress_image;


}
 ?>
 <form action="page2_form.php" class="regForm" enctype="multipart/form-data" method="post">
 <?php
 if (!empty($_SESSION['posted'])) {
 echo $_SESSION['posted'];
 unset($_SESSION['posted']);

 }
 ?>
 <h1 style="color:#ae3c33;width: 100%;text-align:center">POST AD</h1>
 <label>Full Name<span>*</span></label>
 <input name="name" type="text"  required>
 <?php
 if (!empty($_SESSION['letter'])) {
 echo  $_SESSION['letter'];
 unset($_SESSION['letter']);

 }
 ?><br>
 <label>Business Name<span>*</span></label>
 <input name="business" type="text"  required>
 <label>Phone Number<span>*</span></label>
 <input name="contact" type="text" required>
 <?php
 if (!empty($_SESSION['number'])) {
 echo  $_SESSION['number'];
 unset($_SESSION['number']);

 }
 ?><br>
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </body>
</html>

