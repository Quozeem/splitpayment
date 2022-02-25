<?php
session_start();
?>
<?php
if( ($_SESSION['LOGGED']) != "true") {
   echo "<script> location.href='login.php'  </script>";
       //header("location:javascript://history.go(-1)");
   }
//include ("config.php");


$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  echo "<script> location.href='login.php' <script>";
}
//include ("config.php");


//if (isset($_POST['nextBtn'])){
 //if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['fullname'])){
    $count= 3;
    include "config.php";
    $name=mysqli_real_escape_string($con,$_POST['fullname']);
    $business=mysqli_real_escape_string($con,$_POST['business']);
     $codecountry=mysqli_real_escape_string($con,$_POST['codecountry']);
    $contact = $_POST['phone'];
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $price =mysqli_real_escape_string($con,$_POST['price']);
    $categories =mysqli_real_escape_string($con,$_POST['categories']);
    $brand=mysqli_real_escape_string($con,$_POST['brand']);
     $message=mysqli_real_escape_string($con,$_POST['message']);
    date_default_timezone_set('Africa/Lagos');
    $date_time=date('m/d/Y h:i:s a',time());
    // $uploadedFile="";

    $array_image = array_filter($_FILES['files']['name']);
    $desired_dir="advert_pic/";
    if(!empty($array_image)){
foreach($_FILES['files']['name'] as $key => $val ){
    //file path 

    $fileme = basename($_FILES['files']['name'][$key]);
     $fileName=mysqli_real_escape_string($con,$fileme);
    $targetfilepath =  $desired_dir . $fileName;
   // $uploadedFileStr = implode( ',',$targetfilepath); 
    //file exist
    $fileinfo = getimagesize($_FILES["files"]["tmp_name"][$key]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

    if($width < "755" && $height > "1002" ) {
     // $_SESSION['files']='file too large';
     // header("location:compress.php");
     echo "<script> alert('image too large');
     window.location = 'advertised.php?image too large';
     </script>";
     return false;
   
 }
   if(file_exists($targetfilepath )) {
    echo "<script> alert('image already exit');
    window.location = 'advertised.php?image already exit';
    </script>";
    return false;
     // die ("file already exit").mysqli_connect_error();
    }  
    //select file type
   $extension = strtolower(pathinfo( $targetfilepath,PATHINFO_EXTENSION));
    //valid file extension
    $extension_img=array('jpg', 'png', 'jpeg','jfif','gif'); 
    if(!in_array($extension,$extension_img)){
      echo "<script> alert('file not supported');
     window.location = 'advertised.php?file not supported';
     </script>";
     return false;
        // die ("file not supported").mysqli_connect_error();
       }
       if(count($array_image) > $count){
        echo "<script> alert('Select three(3) images only');
        window.location = 'advertised.php?Select three(3) images only';
        </script>";
        return false;
        //die ("Select three(3) images only").mysqli_connect_error();
     }
    /// if(!empty($fullname) && !empty($business) && !empty($phone) && !empty($Brand)
   // && !empty($price) && !empty($address) && !empty($message) && !empty($fileName) && !empty($date_time)){    
 
   //$uploadedFileStr = implode( ',',$imagearr); 
   // $select="INSERT INTO multiple (name,business,contact,brand,categories,price,address,message,file,date) VALUES
   // ('$fullname','$business',' $phone','$Brand','$categories','$price','$address','$message','$fileName','$date_time')";
  // $result=mysqli_query($con, $select);
  if($categories == "Agriculture & food"){
   $result= mysqli_query($con,"INSERT INTO detailss (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   //$result=mysqli_query($connection,$select);
  }
   if($categories == "Babies & Kids"){
   $result= mysqli_query($con,"INSERT INTO baby (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   //$result=mysqli_query($connection,$select);
  }
   if($categories == "Electronics"){
    $result=mysqli_query($con,"INSERT INTO electronics (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   //$result=mysqli_query($connection,$select);
  }
   if($categories == "Fashion"){
   $result= mysqli_query($con,"INSERT INTO fashion (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   //$result=mysqli_query($connection,$select);
  }
  if($categories == "Health & Beauty"){
    $result=mysqli_query($con,"INSERT INTO health (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   //$result=mysqli_query($connection,$select);
  }
   if($categories == "Mobile Phones & Tablets"){
    $result=mysqli_query($con,"INSERT INTO mobile (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
   // $result=mysqli_query($connection,$select);

  }
   
   if($categories == "Home & Garden"){
    $result=mysqli_query($con,"INSERT INTO school (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
    // $result= mysqli_query($connection,$select);

  }
    if($categories == "Sport & Outdoor"){
    $result=mysqli_query($con,"INSERT INTO sport (name,business,codecountry,contact,address,price,categories,brand,message,file,date)
 VALUES('$name','$business','$codecountry','$contact',
'$address','$price','$categories','$brand','$message','$fileName','$date_time')");
    // $result= mysqli_query($connection,$select);

  }
  
  
    
  if(!$result){
    echo "<script> alert('Failed');
    window.location = 'advertised.php?Failed';
    </script>";
    return false;
    //die("Failed").mysqli_connect_error();
    }



  else{
     if(move_uploaded_file($_FILES["files"]['tmp_name'][$key],$targetfilepath) ){
    // echo "POSTED";
     echo "<script> alert('POSTED');
     window.location = 'advertised.php?POSTED';
     </script>";
     //return false;
      //echo "<script> location.href='compress.php'
      //</script>";
}
  }
  $compress_file = "compress_".$fileName ;     //rename compressed file
  $compressed_img = $desired_dir.$compress_file;
  $compress_name = compressImage( $targetfilepath,$compressed_img);   //compressImage(sourcefile, compressfile);
    //unlink($targetfilepath);     
    }
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
<!DOCTYPE html>
<html>
<!---<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface"--->

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 May 2021 21:08:27 GMT -->
<head>

	<meta charset="utf-8">
	<title>qoztore - Online Store</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->

	<meta property="og:title" content="qoztore - Online Store">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/good-removebg-preview.png">
	<!---<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html"--->
	<meta property="og:url" content="#">
	<!---<meta property="og:site_name" content="Home Market Red"---->

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script---->
        <link rel="stylesheet" href="css/bootstrap.min.css">   <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
          <link rel="stylesheet" href="css/rest.css">
        <link rel="stylesheet" href="css/style.css">
        <!---<link rel="stylesheet" href="style1.css"---->
        <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/spr.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
 
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input[type=text] {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
.brand{
  padding: 10px;
  width: 49%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
} 
.categories{
  padding: 10px;
  width: 49%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input[type=tel] {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
input[type=file] {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
 
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color:white ;
    border-color:red;
}
textarea.invalid {
  background-color:white ;
  border-color:red;
}
select.invalid {
  background-color:white ;
    border-color:red;
}
/* Hide all steps by default: */
.tab {
  display: none;
}

button {
    background: #ae3c33 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    border:#ae3c33;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .5px;
    line-height: 1;
    margin-bottom: 0;
    padding: 18px 20px;
    text-align: center;
    text-transform: uppercase;
    touch-action: manipulation;
    transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
    vertical-align: middle;
    white-space: nowrap;
    position: relative;
    z-index: 1
}
#size{
     padding: 10px;
  width: 49%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
#type{

     padding: 10px;
  width: 49%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;

}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
   padding: 18px 10px;
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
.tab{
    font-size:23px;
}
</style>
<body id="home-market-responsive-shopify-theme" class="index1 template-index">
	<div id="NavDrawer" class="drawer drawer--left">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Menu
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">Close menu</span>
				</button>
			</div>
		</div>
		<!-- begin mobile-nav -->
		<ul class="mobile-nav">
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="index.php" class="mobile-nav__link">Home</a>
			</li>
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="about.php" class="mobile-nav__link">About Us</a>
			</li>
			<li class="mobile-nav__item" aria-haspopup="true">
				<div class="mobile-nav__has-sublist">
					<a href="#" class="mobile-nav__link">Collections</a>
					<div class="mobile-nav__toggle">
						<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
						<span class="icon icon-plus" aria-hidden="true"></span>
						<span class="fallback-text">See More</span>
						</button>
						<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
						<span class="icon icon-minus" aria-hidden="true"></span>
						<span class="fallback-text">"Close Cart"</span>
						</button>
					</div>
				</div>
				<ul class="mobile-nav__sublist">
					<li class="mobile-nav__item ">
					<a href="page7_form.php" class="mobile-nav__link">Agriculture & food</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page3_form.php" class="mobile-nav__link">Health &amp; Beatuty</a>
					</li>
					<!--<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Babies & Kids</a>
					</li-->
					<li class="mobile-nav__item ">
					<a href="page1_form.php" class="mobile-nav__link">Home & Garden</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page2_form.php" class="mobile-nav__link">Mobile Phones  &amp; Tablets</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page4_form.php" class="mobile-nav__link">Fashion</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page5_form.php" class="mobile-nav__link">Electronics</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page6_form.php" class="mobile-nav__link">Kids &amp; Baby</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="page8_form.php" class="mobile-nav__link">Sport &amp; Outdoor</a>
					</li>
					
					<!---<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Toy and Gift</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Stationery</a>
					</li---->
				</ul>
			</li>
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="login.php" class="mobile-nav__link">Place Advert</a>
			</li>
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="contact.php" class="mobile-nav__link">Contact Us</a>
			</li>
<!---<li class="mobile-nav__item" aria-haspopup="true">
			<div class="mobile-nav__has-sublist">
				<a href="collection.html" class="mobile-nav__link">Shop</a>
				<div class="mobile-nav__toggle">
					<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
					<span class="icon icon-plus" aria-hidden="true"></span>
					<span class="fallback-text">See More</span>
					</button>
					<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
					<span class="icon icon-minus" aria-hidden="true"></span>
					<span class="fallback-text">"Close Cart"</span>
					</button>
				</div>
			</div>
			<ul class="mobile-nav__sublist megamenu__dropdown mobile_megamenu_1">
				<li class="nav-sampletext grid__item small-one-whole">
				<a href="#"><img src="assets/images/logo-b.png" alt=""></a>
				<p>
					Lorem ipsum dolor sit amet, quod fabellas hendrerit per eu, mea populo epicuri et, ea possim numquam mea.
				</p>
				<p>
					Duo harum ornatus ponderum an, at ius zril menandri praesent. Bonorum tacimates interesset has ei, pro ignota prodesset at. Vel ea velit percipitur.
				</p>
				</li>
				<li class="nav-links nav-links01 grid__item small-one-whole">
				<ul>
					<li class="list-title">1st Collections</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Book</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Health &amp; Beatuty</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Homelife</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Home Appliances</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Smartphones &amp; Cell Phones</a>
					</li>
				</ul>
				</li>
				<li class="nav-links nav-links02 grid__item small-one-whole">
				<ul>
					<li class="list-title">2nd Collections</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Camera - Camcorder</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Accessories</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Kids &amp; Baby</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Toy and Gift</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Stationery</a>
					</li>
				</ul>
				</li>
				<li class="nav-links nav-links03 grid__item small-one-whole">
				<ul>
					<li class="list-title">Pages</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">All Collections</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection-2.html">All Products</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection-3.html">About us</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Contact us</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Wishlist</a>
					</li>
				</ul>
				</li>
			</ul>
			</li>
			<li class="mobile-nav__item">
			<a href="collection.html" class="mobile-nav__link">Today's Deals</a>
			</li------>
			<!---<li class="mobile-nav__item">
			<a href="blog.html" class="mobile-nav__link">Blog</a>
			</li>
			<li class="mobile-nav__item">
			<a href="lookbook.html" class="mobile-nav__link">Lookbook</a>
			</li------>
			<!-- Customer links -->
			<li class="mobile-nav__item">
			<a href="login.php" id="customer_login_link">Log in</a>
			</li>
			<li class="mobile-nav__item">
			<a href="register.php" id="customer_register_link">Create New Account</a>
			</li>
		</ul>
	</div>
	
	<!---<div id="CartDrawer" class="drawer drawer--right fancybox-margin">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Shopping Cart
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">"Close Cart"</span>
				</button>
			</div>
		</div>
		<div id="CartContainer">
			<form action="http://demo.tadathemes.com/HTML_Homemarket/demo/cart.html" method="post" novalidate="" class="cart ajaxcart">
				<div class="ajaxcart__inner">
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="1">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart1.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Product Added</a>
										<span class="ajaxcart__product-meta">S / Red</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="8772444163" data-qty="0" data-line="1">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">−</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="8772444163" data-line="1" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="8772444163" data-line="1" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$34.00 USD" data-currency="USD">$34.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="2">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart2.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Demo Product Sample</a>
										<span class="ajaxcart__product-meta">Medium / Pink</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="10722484483" data-qty="0" data-line="2">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">−</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="10722484483" data-line="2" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="10722484483" data-line="2" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$100.00 USD" data-currency="USD">$100.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="3">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart3.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Demo Product Sample</a>
										<span class="ajaxcart__product-meta">XS / Black</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="8772462979" data-qty="0" data-line="3">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">−</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="8772462979" data-line="3" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="8772462979" data-line="3" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$89.00 USD" data-currency="USD">$89.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<label for="CartSpecialInstructions">Special instructions for seller</label>
						<textarea name="note" class="input-full" id="CartSpecialInstructions"></textarea>
					</div>
				</div>
				<div class="ajaxcart__footer">
					<div class="grid--full">
						<div class="grid__item title-total">
							<p>
								Subtotal
							</p>
						</div>
						<div class="grid__item price-total">
							<p>
								<span class="money" data-currency-usd="$223.00 USD" data-currency="USD">$223.00 USD</span>
							</p>
						</div>
					</div>
					<p class="text-center">
						Shipping &amp; taxes calculated at checkout
					</p>
					<button type="button" class="btn btn--full cart__shoppingcart" name="shoppingCart" onclick="location.href='cart.html'">
					Shopping Cart → </button>
					<button type="submit" class="btn btn2 btn--full cart__checkout" name="checkout">
					Check Out → </button>
				</div>
			</form>
			</div>
		</div----->
	
	
	<div id="PageContainer" class="is-moved-by-drawer">
		<!-- Ads Banner -->
		<div id="adv-banner">
			<div id="ads-banner" class="grid--full grid--table">
				<div class="ads-banner-slider owl-carousel">
					<div class="ads-item">
						<img src="assets/images/ads11.png" alt="ads banner 1">
					</div>						
					<div class="ads-item">
						<img src="assets/images/ads21.png" alt="ads banner 2">
					</div>
					<div class="ads-item">
						<img src="assets/images/ads31.png" alt="ads banner 3">
					</div>
				</div>
			</div>
		</div>
	<!--------------->
<!-- Top Other -->
	<div id="top-header" class="grid--full grid--table">
			<div class="wrapper">
				<div id="topother-header" class="grid--full grid--table">
					<div class="grid__item one-half top-header-left">
					
					</div>
					<div class="grid__item one-half top-header-right">
						<div class="currency-picker">
							<label class="currency-picker__wrapper">
							<span class="currency-picker__label">Currency</span>
							<select class="currency-picker" name="currencies" style="display: inline; width: auto; vertical-align: inherit;">
								<option value="USD" selected="selected">NIG</option>
								<!---<option value="INR">INR</option>
								<option value="GBP">GBP</option>
								<option value="CAD">CAD</option>
								<option value="AUD">AUD</option>
								<option value="EUR">EUR</option>
								<option value="JPY">JPY</option---->
							</select>
							</label>
						</div>
						<div class="fi-content inline-list social-icons">
						<a href="https://mobile.twitter.com/Qoztore" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
							<a href="https://web.facebook.com/qoztore" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
							<a href="https://www.instagram.com/qoztore/" title="instagram" class="icon-social instagram" 
							data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a></div>
					</div>
				</div>
			</div>
		</div>


		<!-- Main Header -->
		<header class="site-header">
			<div class="wrapper">
				<div id="main-header" class="grid--full grid--table">
					<div class="grid__item small--one-whole medium--one-whole two-eighths">
						<h1 class="site-header__logo large--left" itemscope="" itemtype="http://schema.org/Organization">
						<a href="#" itemprop="url" class="site-header__logo-link">
							<img src="img/bg/qozlogo1.png" alt="Home Market Red" itemprop="logo">
						</a>
						</h1>
					</div><div class="grid__item small--one-whole medium--one-whole four-eighths mobile-bottom" style="background: #ff4800">
						<div class="large--hide medium-down--show navigation-icon">
							<div class="grid">
								<div class="grid__item one-half">
									<div class="site-nav--mobile">
										<button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
										<span class="icon icon-hamburger" aria-hidden="true"></span>
										<span class="fallback-text">Menu</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="site-header__search">
				
							<form action="" method="post" class="input-group search-bar">
								
								<!-----<div class="collections-selector">
									<select class="single-option-selector"
									 data-option="collection-option" id="collection-option" name="collection">
										<option value="all">All Collections</option>
										<option value="book">AGRICULTURE & FOOD</option>
										<option value="beauty-health">Beauty &amp; Health</option>
										<option value="book">HOME &amp; GARDEN</option>
										<option value="camera">MOBILE PHONES &amp; TABLETS</option>
										<option value="clothing">FASHION</option>
										<option value="appliances">ELECTRONICS</option>
										<option value="kids-baby">Kids &amp; Baby</option>
										<option value="sport">Sport &amp; Outdoor</option>
										<option value="smartphones">Smartphones &amp; Cell Phones</option>
										<option value="sport">Sport &amp; Outdoor</option>
										<option value="stationery">Stationery</option>
									</select>
								</div--->
							
								<input type="hidden" name="type" value="product">
								<input type="search" name="q" value="" placeholder="Search our store" class="input-group-field st-default-search-input" aria-label="Search our store">
							
								<span class="input-group-btn" style="background: #ff4800;border-radius:none">
								<button type="submit" class="btn icon-fallback-text">
								<i class="fa fa-search" style="color:black"></i>
								<span class="fallback-text">Search</span>
								</button>
								</span>

							</form>
						</div>
						<div class="large--hide medium-down--show navigation-cart">
							<div class="grid__item text-right">
								<div class="site-nav--mobile">
									<!---<a href="cart.html" class="js-drawer-open-right site-nav__link" aria-controls="CartDrawer" aria-expanded="false">
									<span class="icon-fallback-text">
									<span class="icon icon-cart" aria-hidden="true"></span>
									<span class="fallback-text">Shopping Cart</span>
									</span>
									</a---->
								</div>
							</div>
						</div>
					</div>
					<div class="grid__item small--one-whole two-eighths medium-down--hide">
						<ul class="link-list">
							<li class="track-order">
								<a href="contact.php">
									<i class="fa fa-map-marker"></i>
									<span class="name">Store Location</span>
								</a>
							</li>
							<li class="header-account">
								<a href="#loginBox" id="login_link">
									<i class="fa fa-user"></i>
									<span class="name">My Account</span>
								</a>
								
							</li>
							<!----<li class="header-cart">
								<a href=".cart.html" class="site-header__cart-toggle js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
									<i class="fa fa-shopping-basket"></i>
									<span id="CartCount">3</span>
									<span class="name">Shopping Cart</span>
								</a>
							</li--->
						</ul>
					</div>
				</div>       
			</div>
		</header>

		<!-- Navigation Bar -->
		<nav class="nav-bar" style="background: #ff4800">
			<div class="wrapper">
				<div class="medium-down--hide">
					<!-- begin site-nav -->
					<ul class="site-nav" id="AccessibleNav">
						<li class="site-nav--active">
							<a href="index.php" class="site-nav__link">
								<span>Home</span>
							</a>
						</li>
						<li class="site-nav--active">
							<a href="about.php" class="site-nav__link">
								<span>About Us</span>
							</a>
						</li>
						<li class="site-nav--has-dropdown" aria-haspopup="true">
							<a href="" class="site-nav__link">
								<span>Collections</span>
								<span class="icon icon-arrow-down" aria-hidden="true"></span>
								<span class="special_label hot_label">Sale</span>
							</a>
							<ul class="site-nav__dropdown">
								<li>
								<a href="page7_form.php" class="site-nav__link">AGRICULTURE &amp; FOOD</a>
								</li>
								<li>
								<a href="page3_form.php" class="site-nav__link">Health &amp; Beatuty</a>
								</li>
								<li>
								<a href="page1_form.php" class="site-nav__link">HOME &amp; GARDEN</a>
								</li>
								<li>
								<a href="page2_form.php" 
								class="site-nav__link">MOBILE PHONES &amp; TABLETS</a>
								</li>
								<li>
								<a href="page4_form.php" class="site-nav__link">FASHION</a>
								</li>
								<li>
								<a href="page5_form.php" class="site-nav__link">ELECTRONICS</a>
								</li>

								<li>
								<a href="page6_form.php" class="site-nav__link">Kids &amp; Baby</a>
								</li>
								<li>
								<a href="page8_form.php" class="site-nav__link">SPORT &amp; OUTDOOR</a>
								</li>
								
							</ul>
						</li>
						<li class="site-nav--active">
							<a href="contact.php" class="site-nav__link">
								<span>Contact Us</span>
							</a>
						</li>
						<li class="site-nav--has-dropdown" aria-haspopup="true">
							<a href="login.php" class="site-nav__link">
								<span>Place Advert</span>
								
								<span class="special_label hot_label">hot</span>
							</a>
										</li>
						<!----<li class="mega-menu site-nav--has-dropdown" aria-haspopup="true">
							<a href="collection.html" class="site-nav__link">
								<span>Shop</span>
								<span class="icon icon-arrow-down" aria-hidden="true"></span>
								<span class="special_label hot_label">Hot</span>
							</a>
							<ul class="site-nav__dropdown megamenu__dropdown megamenu_1">
								<li class="nav-sampletext grid__item large--one-quarter">
									<a href="index-2.html"><img src="assets/images/logo-b.png" alt=""></a>
									<p>
										Lorem ipsum dolor sit amet, quod fabellas hendrerit per eu, mea populo epicuri et, ea possim numquam mea.
									</p>
									<p>
										Duo harum ornatus ponderum an, at ius zril menandri praesent. Bonorum tacimates interesset has ei, pro ignota prodesset at. Vel ea velit percipitur.
									</p>
								</li>
								<li class="nav-links nav-links01 grid__item large--one-quarter">
									<ul>
										<li class="list-title">1st Collections</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Book</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Health &amp; Beatuty</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Homelife</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Home Appliances</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Smartphones &amp; Cell Phones</a>
										</li>
									</ul>
								</li>
								<li class="nav-links nav-links02 grid__item large--one-quarter">
									<ul>
										<li class="list-title">2nd Collections</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Camera - Camcorder</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Accessories</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Kids &amp; Baby</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Toy and Gift</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Stationery</a>
										</li>
									</ul>
								</li>
								<li class="nav-links nav-links03 grid__item large--one-quarter">
									<ul>
										<li class="list-title">Pages</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">All Collections</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="product.html">All Products</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="about-us.html">About us</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="contact-us.html">Contact us</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="wishlist.html">Wishlist</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="todays-deals.html" class="site-nav__link">
								<span>Today's Deals</span>
								<span class="special_label sale_label">Sale</span>
							</a>
						</li>
						<li>
							<a href="blog.html" class="site-nav__link">
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="lookbook.html" class="site-nav__link">
								<span>Lookbook</span>
								<span class="special_label new_label">New</span>
							</a>
						</li>
					</ul--->
					<script>
						  $(window).ready(function($) {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
						  $( window ).resize(function() {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
					</script>
				</div>
			</div>
		</nav>    <!-- Main Content -->
    
		
		
	
<form id="regForm" method="post" enctype="multipart/form-data" action="">
<h1 style="color:#ae3c33;width: 100%;text-align:center">POST AD</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Fill Ads Details
    <p><input type="text" placeholder="Fullname..." oninput="this.className = ''" id="fullname"  name="fullname"></p>
    <p><input type="text" placeholder="Business name..." oninput="this.className = ''" name="business" id="business"></p>
  </div>
  
  <div class="tab">Contact
  <p><select name="codecountry" id="codecountry" oninput="this.className = ''"> 
  <option value="">Country code*</option>
                                            <option>+234</option>
                                            <option>+227</option>
                                            <option>+231</option>
                                            <option>+370</option>
                                             <option>+93</option>
                                            <option>+355</option>
                                            <option>+213</option>
                                            <option>+1</option>
                                             <option>+244</option>
                                            <option>+237</option>
                                            <option>+235</option>
                                            <option>+56</option>
                                            <option>+86</option>
                                            <option>+57</option>
                                            <option>+242</option>
                                            <option>+225</option>
                                             <option>+45</option>
                                            <option>+243</option>
                                            <option>+20</option>
                                            <option>+251</option>
                                             <option>+33</option>
                                            <option>+233</option>
                                            <option>+224</option>
                                            <option>+36</option>
                                            <option>+91</option>
                                             <option>+39</option>
                                            <option>+81</option>
                                            <option>+254</option>
                                            <option>+965</option>
                                            <option>+231</option>
                                            <option>+377</option>
                                            <option>+212</option>
                                            <option>+977</option>
                                             <option>+64</option>
                                            <option>+227</option>
                                            <option>+47</option>
                                            <option>+968</option>
                                             <option>+51</option>
                                            <option>+63</option>
                                            <option>+48</option>
                                              <option>+221</option>
                                            <option>+232</option>
                                            <option>+351</option>
                                            <option>+27</option>
                                            <option>+211</option>
                                            <option>+43</option>
                                              <option>+46</option>
                                            <option>+249</option>
                                            <option>+216</option>
                                        </select></p>
  <p><input type="tel" placeholder="Phone number" oninput="this.className = ''" name="phone" id="phone"></p>
    <p><input type="text" placeholder="Address" oninput="this.className = ''" id="address" name="address"></p>
   
  </div>
  <div class="tab">Category
 <p>
  <script>
$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'Agriculture & food':
            $("#size").html("<option  value='Farm Machinery & equipment'>Farm Machinery & equipment</option><option value='Feeds,Supplements & Seeds'>Feeds,Supplements & Seeds</option><option value='Livestock & Poultry'>Livestock & Poultry</option><option  value='Meals & Drinks'>Meals & Drinks</option><option value='Others'>Others</option>");
            break;
        case 'Babies & Kids':
            $("#size").html("<option value='Children's shoes'>Children's shoes</option><option value='Maternity & pregnancy'>Maternity & pregnancy</option><option value='Toys'>Toys</option><option value='Others'>Others</option>");
            break;
        case 'Electronics':
            $("#size").html("<option value='Computer Accessories'>Computer Accessories</option><option value='Video Game Consoles'>Video Game Consoles</option><option value='Headphones'>Headphones</option><option value='TV & DVD Equipment'>TV & DVD Equipment</option><option value='Laptops & Computers'>Laptops & Computers</option><option value='Photo & Video Cameras'>Photo & Video Cameras</option><option value='Printers & Scanners'>Printers & Scanners</option><option value='Others'>Others</option>");
            break;
              case 'Fashion':
            $("#size").html("<option value='Bags'>Bags</option><option value='Clothing'>Clothing</option><option value='Clothing Accessories'>Clothing Accessories</option><option value='Jewelry'>Jewelry</option><option value='Wears'>Wears</option><option value='Shoes'>Shoes</option><option value='Men Slides'>Men Slides</option><option value='Women Slides'>Women Slides</option><option value='Watches'>Watches</option><option value='Sport Kits'>Sport Kits</option><option value='Shades'>Shades</option><option value='Wedding Wear & Accessories'>Wedding Wear & Accessories</option><option value='Others'>Others</option>");
            break;
              case 'Health & Beauty':
            $("#size").html("<option value='Bath & Body'>Bath & Body</option><option value='Fragrance'>Fragrance</option><option value='Hair Beauty'>Hair Beauty</option><option value='Makeup'>Makeup</option><option value='Skin Care'>Skin Care</option><option value='Health Care'>Health Care</option><option value='Vitamins & Supplements'>Vitamins & Supplements</option><option value='Salon equipment'>Salon equipment</option><option value='Others'>Others</option>");
            break;
              case 'Mobile Phones & Tablets':
            $("#size").html("<option value='Phones & Tablets Accessories'>Phones & Tablets Accessories</option><option value='Mobile Phones'>Mobile Phones</option><option value='Tablets'>Tablets</option><option value='Smart Watches & Trackers'>Smart Watches & Trackers</option><option value='Others'>Others</option>");
            break;
             case 'Home & Garden':
            $("#size").html("<option value='Furniture'>Furniture</option><option value='Garden'>Garden</option><option value='Home Accessories'>Home Accessories</option><option value='Home Appliances'>Home Appliances</option><option value='Kitchen & Dining'>Kitchen & Dining</option><option value='Others'>Others</option>");
            break;
             case 'Sport & Outdoor':
            $("#size").html("<option value='Jersey '>Jersey</option><option value='Basketball jersey '>Basketball jersey</option><option value='Boots'>Boots</option><option value='Gym kits'>Gym kits</option><option value='Fitness tools'>Fitness tools</option><option value='Others'>Others</option>");
            break;
        default:
            $("#size").html("<option value=''>Select brand*</option>");
     }
  });
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select id="type" name="categories" class="categories" oninput="this.className = ''" id="categories">
    <option value="item0">Category*</option>
    <option  value="Agriculture & food">Agriculture & food</option>
    <option value="Babies & Kids">Babies & Kids</option>
    <option value="Electronics">Electronics</option>
     <option value="Fashion">Fashion</option>
    <option value="Health & Beauty">Health & Beauty</option>
     <option value="Mobile Phones & Tablets">Mobile Phones & Tablets</option>
    <option value="Home & Garden">Home & Garden</option>
     <option value="Sport & Outdoor">Sport & Outdoor</option>
    
    
</select>
<select id="size"  name="brand" class="brand" oninput="this.className = ''" id="brand">
    <option value="">Select brand*</option>
</select><br />
</p>

   <label style="font-size:23px;">Price</label>
    <p><input type="text" value="#" id="price" name="price" oninput="this.className = ''"></p>
    </div>
  <div class="tab">Add Photos 
  <p><input type="file"  id="files[]" name="files[]" oninput="this.className = ''"  multiple>
 </p>
     <p><textarea class="textarea" maxlength="200" cols="25" rows="5" oninput="this.className = ''" id="message" name="message" placeholder="Product Description....."></textarea></p>
    </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" name="nextBtn"  onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<script src="script.js"></script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab == x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return true;
   // window.location.href="verified.php"
 }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y,z, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  z = x[currentTab].getElementsByTagName("textarea");
  s = x[currentTab].getElementsByTagName("select");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
   // A loop that checks every textarea field in the current tab:
   for (i = 0; i < z.length; i++) {
    // If a field is empty...
    if (z[i].value == "") {
      // add an "invalid" class to the field:
      z[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // A loop that checks every textarea field in the current tab:
  for (i = 0; i < s.length; i++) {
    // If a field is empty...
    if (s[i].value == "") {
      // add an "invalid" class to the field:
      s[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
   //This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
 for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
	<!-- JS here -->
     	
			<script type="text/javascript">
			  $(function () {
				$(".fi-title").click(function(){
				  $(this).toggleClass('opentab');
				});
			  });
			</script>         
		</footer>
	

	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>

    <!--div id="newsletter_popup" class="modal in fade" style="display: none;">
		<div class="nl-wraper-popup tada-hidden">
			<div class="nl-wraper-popup-inner">
				<form action="#" method="post" name="mc-embedded-subscribe-form" target="_blank">
					<div class="newsletter-popup-content">
						<div class="top-area">
							<span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
							<span class="head-text2">10% off</span>
						</div>
						<div class="bottom-area">
							<div class="group_input">
								<input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
								<button class="btn" type="submit">Get 10% off</button>
							</div>
							<span class="bottom-explain">We will send you a discount code after you confirm your email address.</span>
						</div>
						<div class="nl-social">
							<div class="fi-content inline-list social-icons">
								<a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
								<a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
								<a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
								<a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
								<a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div-->    
    
    <script>
		var tada_index,tada_autosearchcomplete,tada_swiftype,tada_ads,tada_adsspeed,tada_slideshowtime,tada_block1gallery=false,tada_block1product=false, tada_newsletter=false;
		  tada_index=1;
		  tada_ads=1;
		  tada_adsspeed=5000;
		  tada_slideshowtime = 30000;
		  tada_block1gallery = true;
		  tada_block1product = true;
		  tada_newsletter = true;
    </script>
  
	<script src="assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="assets/js/timber.js" type="text/javascript"></script>
  
	<div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
		<div class="modal-dialog fadeIn">
			<div class="modal-content">
				<div class="modal-body">
					<div class="quick-shop-modal-bg">
					</div>
					<div class="grid__item one-half qs-product-image">
						<div id="quick-shop-image" class="product-image-wrapper">
							<div id="featuted-image" class="main-image featured">
								<img class="img-zoom img-responsive image-fly" src="assets/images/demo1_qs_480x480.jpg" data-zoom-image="assets/images/demo1_qs_480x480.jpg" alt="">
							</div>
							<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
								<div class="qs-vertical-slider product-single__thumbnails">
										<a class="image-thumb active thumb__element"><img src="assets/images/demo1_qs1_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs2_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs3_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs4_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs5_100x100.jpg" alt="" /></a>										
								</div>
							</div>
							<div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
							</div>
						</div>
					</div>
					<div class="grid__item one-half qs-product-information">
						<div id="quick-shop-container">
							<h3 id="quick-shop-title"><a href="product.html">Corporis suscipit laboriosam</a></h3>
							<div class="rating-star">
								<span class="shopify-product-reviews-badge" data-id="3008529923"></span>
							</div>
							<div class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet conse...
									</p>
								</div>
							</div>
							<form action="#" method="post" class="variants" id="AddToCartForm" enctype="multipart/form-data">
								<div id="quick-shop-price-container" class="detail-price">
									<span class="price"><span class="money">$89.00</span></span>
								</div>
								<div class="quantity-wrapper clearfix">
									<label class="wrapper-title">Quantity</label>
									<div class="wrapper">
										<span class="qty-down" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span>
										<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
										<span class="qty-up" title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span>
									</div>
								</div>
								<div id="quick-shop-variants-container" class="variants-wrapper" style="display: block;">
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-0">Size</label>
										<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-3008529731-option-0">
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
										</select>
									</div>
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-1">Color</label>
										<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-3008529731-option-1">
											<option value="Black">Black</option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
										</select>
									</div>
								</div>
								<div class="others-bottom">
									<input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">	  
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script>
	
</body>