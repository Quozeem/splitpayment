
<!DOCTYPE html>
<html>
<head>
<title>Show & Hide Form - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="css/showhide.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/showhide.js"></script>
</head>
<body>
<img id="logo" src="images/logo.png">
<div id="main">
<!-- Create Div First For Login Form -->
<div id="first">
<form action="" method="post">
<h3>Login to your FormGet account.</h3>
<img id="divider" src="images/divider.png">
<input id="loginemail" placeholder="Email" type="text">
<input id="loginpassword" placeholder="Password" type="password">
<input id="login" type="button" value="Sign In">
<p id="one"><a href="#">Forgot Password ?</a></p>
<p id="two">Don't have account? <a class="signup" href="#" id="signup">Sign up here</a></p>
</form>
</div>
<!-- Create Div Second For Signup Form-->
<div id="second">
<form action="" id="form" method="post" name="form">
<h3>Create a Free Account</h3>
<img id="divider" src="images/divider.png">
<input id="name" placeholder="Full Name" type="text">
<input id="registeremail" placeholder="Email" type="text">
<input id="registerpassword" placeholder="Password" type="password">
<input id="contact" placeholder="Contact Number" type="text">
<input id="register" type="button" value="Create your FormGet account">
<p id="two">Already have an account? <a class="signin" href="#" id="signin">Sign in</a></p>
</form>
</div>
</div>
<script>

$(document).ready(function() {
// On Click SignIn Button Checks For Valid E-mail And All Field Should Be Filled
$("#login").click(function() {
var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
if ($("#loginemail").val() == '' || $("#loginpassword").val() == '') {
alert("Please fill all fields...!!!!!!");
} else if (!($("#loginemail").val()).match(email)) {
alert("Please enter valid Email...!!!!!!");
} else {
alert("You have successfully Logged in...!!!!!!");
$("form")[0].reset();
}
});
$("#register").click(function() {
var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
if ($("#name").val() == '' || $("#registeremail").val() == '' || $("#registerpassword").val() == '' || $("#contact").val() == '') {
alert("Please fill all fields...!!!!!!");
} else if (!($("#registeremail").val()).match(email)) {
alert("Please enter valid Email...!!!!!!");
} else {
alert("You have successfully Sign Up, Now you can login...!!!!!!");
$("#form")[0].reset();
$("#second").slideUp("slow", function() {
$("#first").slideDown("slow");
});
}
});
// On Click SignUp It Will Hide Login Form and Display Registration Form
$("#signup").click(function() {
$("#first").slideUp("slow", function() {
$("#second").slideDown("slow");
});
});
// On Click SignIn It Will Hide Registration Form and Display Login Form
$("#signin").click(function() {
$("#second").slideUp("slow", function() {
$("#first").slideDown("slow");
});
});
});
</script>
</body>
</html>
