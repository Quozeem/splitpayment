<html>
<head>
<title>jQuery Popup Login and Contact Form</title>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery_popup.css" />
<script src="js/jquery_popup.js"></script>
</head>
<body> 
<div id="mainform">

<h2>jQuery Popup Form Example</h2>
<!-- Required div starts here -->
<div class="form" id="popup">
<b>1.Onload Popup Login Form</b><br/><hr/>
<span>Wait for 3 second.Login Popup form Will appears.</span><br/><br/><br/>

<b>2.Onclick Popup Contact Form</b><hr/>
<p id="onclick">Popup</p>
<br/>
</div>

<!-- Right side div -->
<div id="formget"><a href=https://www.formget.com/app><img src="images/formget.jpg" alt="Online Form Builder"/></a>
</div>
</div>

<!--Contact Form -->
<div id="contactdiv">
<form class="form" action="#" id="contact">
<img src="images/button_cancel.png" class="img" id="cancel"/>
<h3>Contact Form</h3>
<hr/><br/>
<label>Name: <span>*</span></label>
<br/>
<input type="text" id="name" placeholder="Name"/><br/>
<br/>
<label>Email: <span>*</span></label>
<br/>
<input type="text" id="email" placeholder="Email"/><br/>
<br/>
<label>Contact No: <span>*</span></label>
<br/>
<input type="text" id="contactno" placeholder="10 digit Mobile no."/><br/>
<br/>
<label>Message:</label>
<br/>
<textarea id="message" placeholder="Message......."></textarea><br/>
<br/>
<input type="button" id="send" value="Send"/>
<input type="button" id="cancel" value="Cancel"/>
<br/>
</form>
</div>

<!--Login Form -->
<div id="logindiv">
<form class="form" action="#" id="login">
<img src="images/button_cancel.png" class="img" id="cancel"/>
<h3>Login Form</h3>
<hr/><br/>
<label>Username : </label>
<br/>
<input type="text" id="username" placeholder="Ex -john123"/><br/>
<br/>
<label>password : </label>
<br/>
<input type="text" id="password" placeholder="************"/><br/>
<br/>
<input type="button" id="loginbtn" value="Login"/>
<input type="button" id="cancel" value="Cancel"/>
<br/>
<script>$(document).ready(function() {
setTimeout(popup, 3000);
function popup() {
$("#logindiv").css("display", "block");
}
$("#login #cancel").click(function() {
$(this).parent().parent().hide();
});
$("#onclick").click(function() {
$("#contactdiv").css("display", "block");
});
$("#contact #cancel").click(function() {
$(this).parent().parent().hide();
});
// Contact form popup send-button click event.
$("#send").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#contactno").val();
var message = $("#message").val();
if (name == "" || email == "" || contactno == "" || message == ""){
alert("Please Fill All Fields");
}else{
if (validateEmail(email)) {
$("#contactdiv").css("display", "none");
}else {
alert('Invalid Email Address');
}
function validateEmail(email) {
var filter = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
if (filter.test(email)) {
return true;
}else {
return false;
}
}
}
});
// Login form popup login-button click event.
$("#loginbtn").click(function() {
var name = $("#username").val();
var password = $("#password").val();
if (username == "" || password == ""){
alert("Username or Password was Wrong");
}else{
$("#logindiv").css("display", "none");
}
});
});</script>
</form>

</div>