<?php
session_start();
$erromessage="";
 if (isset($_POST['login']))  {
 include "config.php";
$mail= mysqli_real_escape_string($con,$_POST['firstname']);
   $pass= mysqli_real_escape_string($con,$_POST['password']);
  //$select_querry="SELECT payed.id,payed.email,payed.image,payment.id,payment.password,payment.email,payment.date FROM payed INNER JOIN payment
   //ON payed.email= payment.email WHERE email='$mail' AND password='$pass' ";
  // $select_querry="SELECT * FROM `payed` INNER JOIN payment ON payed.email= payment.email WHERE email='$mail' AND password='$pass' ";
   $select_querry="SELECT * FROM paystack
     WHERE email='$mail' AND password='$pass' ";
   $result=mysqli_query($con,$select_querry);
   
   if(!$result){
	   die("failed").mysqli_connect_error();
   }
   while($row= mysqli_fetch_array($result)){
	   $email=mysqli_real_escape_string($con,$row['email']);
		$lastname=mysqli_real_escape_string($con,$row['password']);
   }if(($email == $mail) && ($lastname ==  $pass)){
	   $_SESSION['LOGGED']="true";
   echo "<script> location.href='advertised.php'</script>";
   }
   else{
	 $erromessage="Incorrect Email or Password";
	// $_SESSION['LOGGED']="true";
  // echo "<script> location.href='advertised.php'</script>";
   }
   
   
}


?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 May 2021 21:08:27 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>qoztore - Online Store</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="qoztore">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/good-removebg-preview.png">
	<!---<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html"--->
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="Home Market Red">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        <link rel="stylesheet" href="style1.css">
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
</head>
<style>
.correct_img{
  width:100%;
  height:300px;
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
						<img src="assets/images/ads1.png" alt="ads banner 1">
					</div>						
					<div class="ads-item">
						<img src="assets/images/ads2.png" alt="ads banner 2">
					</div>
					<div class="ads-item">
						<img src="assets/images/ads3.png" alt="ads banner 3">
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
							<img src="assets/images/logo.jpeg" alt="Home Market Red" itemprop="logo">
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
								<div id="loginBox" class="loginLightbox" style="display:none;">
									<div id="lightboxlogin">
										<form method="post" action="#" id="customer_login" accept-charset="UTF-8">
											<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
											<div id="bodyBox">
												<h3>Login</h3>
												<h3><?php if($erromessage != ""){
  echo $erromessage;
  }?></h3>
												<label for="CustomerEmail" class="hidden-label">Email</label>
												<input type="email" name="firstname" id="firstname" class="input-full" 
												 placeholder="Email" require>
												<label for="CustomerPassword" class="hidden-label">Password</label>
												<input type="password"  name="password"
												 id="password" class="input-full" placeholder="Password" required>
												<input type="submit" name="login" class="btn btn2 btn--full" value="Sign In">
												<div>
													<p class="forgot">
														<a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot your password?</a>
													</p>
													<p class="create">
														<a href="#create_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create New Account</a>
													</p>
												</div>
													<!----<p>
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p---->
											</div>
										</form>
									</div>
									<div id="recover-password" style="display:none;">
										<h3>Reset your password</h3>
										<p class="note">
											We will send you an email to reset your password.
										</p>
										<form method="post" action="#" accept-charset="UTF-8">
											<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
											<p>
												<label for="recover-email" class="label">Email</label>
											</p>
											<input type="email"  size="30"  name="email" id="email" class="text" required>
											<div class="action_bottom">
												<input class="btn btn2" type="submit" name="rest" value="Submit">
												<a class="btn back" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a>
											</div>
											<p class="close">
												<a href="#" onclick="$.fancybox.close();">Close</a>
											</p>
										</form>
									</div>
									<div id="create_accountBox" style="display:none;">
										<h3>Create Account</h3>
										<div class="form-vertical">
											<form method="post" action="" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="FirstName" class="hidden-label">First Name</label>
												<input type="text" name="first_name" id="first_name"  class="input-full" placeholder="First Name" pattern="[a-zA-Z0-9\s]+">
												<label for="LastName" class="hidden-label">Last Name</label>
												<input type="text" id="last_name" name="last_name" pattern="[a-zA-Z0-9\s]+" class="input-full" placeholder="Last Name">
												<label for="Email" class="hidden-label">Email</label>
												<input type="email" name="email" id="email" class="input-full" placeholder="Email">
												<label for="CreatePassword" class="hidden-label">Password</label>
												<input type="password" id="password" name="word" class="input-full" placeholder="Password">
											<label>	Upload Means of Identification(NIN / VOTERS CARD)</label>
												<input type="file" type="file"  name="file" class="input-full">
												<input type="checkbox"  required=""> I accept the Terms of Use & Privacy Policy.
												<p>
													<input type="submit" name="submit" value="Register" class="btn btn2 btn--full">
												</p>
												<p>
													<span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a></span>
												</p>
												<p class="close">
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p>
											</form>
										</div>
									</div>
									<script>
											function showRecoverPasswordForm() {
											  $('#recover-password').css("display",'block');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'none');
											}
											function hideRecoverPasswordForm() {
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'block');
											  $('#create_accountBox').css("display",'none');
											}
											function showCreateAccountForm(){
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'block');
											}
										  </script>
								</div>
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
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index.php" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Login</span>
				</nav>
				<h1 class="section-header__title">Login</h1>
				
			</div>
                        </main>
			<div class="wrapper">
				<div class="grid">
					<div class="grid__item">
						<div class="grid">
							<div class="grid__item large--one-third push--large--one-third text-center">
								<div class="note form-success" id="ResetSuccess" style="display:none;">
									 We've sent you an email with a link to update your password.
								</div>
								<div id="CustomerLoginForm" class="form-vertical">
									<form method="post" action="#" id="customer_login" accept-charset="UTF-8">
										<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
										<h3>Login</h3>
										<label for="CustomerEmail" class="hidden-label">Email</label>
										<input type="email"  type="email" name="firstname" id="firstname" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus=""  required="">
										<label for="CustomerPassword" class="hidden-label">Password</label>
										<input type="password" id="password" name="password" class="input-full" placeholder="Password"  required="">
										<p>
											<input type="submit" class="btn btn2 btn--full" name="login" value="Sign In">
										</p>
										<p>
											<a href="register.php">New Member Sign up</a>
										</p>
										<p>
											<a href="#" id="RecoverPassword">Forgot your password?</a>
										</p>
									</form>
									<script>
									  $(document).ready(function(){
										  $("a#RecoverPassword").click(function(event){
											event.preventDefault();
											timber.cache.$recoverPasswordForm.show();
											timber.cache.$customerLoginForm.hide();
										  });
									  });
									</script>
								</div>
								<div id="RecoverPasswordForm" style="display: none;">
									<h3>Reset your password</h3>
									<p>
										We will send you an email to reset your password.
									</p>
									<div class="form-vertical">
										<form method="post" action="#" accept-charset="UTF-8">
											<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
											<label for="RecoverEmail" class="hidden-label">Email</label>
											<input type="email" name="email" id="RecoverEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" required>
											<input type="submit" class="btn btn2" name="reset" value="Submit">
											<button type="button" id="HideRecoverPasswordLink" class="text-link btn">Back to Login</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		
<footer>
               
			   <div class="copyright-wrap" style="margin-top:10%">
				   <div class="container">
					   <div class="row align-items-center">
						   <div class="col-lg-12">
							   <div class="copyright-text">
						   <h6 style="color: white;width:100%">Copyright  &#169; 2021 <span><a class="btn-fill btn-blue sanbg"
											href="https://api.whatsapp.com/send?phone=+234 703 900 1643&amp;
											text=Hi there! :)" style="color: red ;">qoZTORE</i> </a>
								   </span> | All Rights Reserved.</h46>
							   </div>
						   </div>
						   
					   </div>
				   </div>
			   </div>
		 
			   
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