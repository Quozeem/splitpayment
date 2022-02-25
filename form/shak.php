
<!DOCTYPE html>
<html>
<head>
<title>Login form - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="script.js"></script>
<link href="styles.css" rel="stylesheet">
<!-- Including below JS library is mandatory to use shake effect -->
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
<div id="maindiv">
<!--=========================================================================================
Shake Effect Login Form HTML Starts Here
===========================================================================================-->
<div id="first">
<div id="title">
<h2>Shake Form on Invalid Login</h2>
</div>
<form id="login" name="login">
<h3>Login Form</h3>
<input class="textbox" id="email" name="email" placeholder="Email" type="email">
<input class="textbox" id="password" name="password" placeholder="Password" type="password">
<input id="login_button" type="button" value=" Login ">
<div id="message"></div>
</form>
<div id="last">
Example:<br>
Email : <span>formget@gmail.com</span><br>
Password : <span>fugo</span>
</div>
</div>
</div>
<script>

$(document).ready(function() {
// Start when document will be ready.
$("#login_button").click(function() {
var email = $("#email").val(); // Store E-mail input value in the variable email.
var password = $("#password").val(); // Store Password input value in the variable password.
/* Check if email=formget@gmail.com and password=fugo then,Show the message Account Validated!!! in the Div having id message.*/
if (email == "formget@gmail.com" && password == "fugo") {
$("#message").html("Account Validated!!!");
}
/* If E-mail and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
else {
$("#login").effect("shake");
$("#message").html('***Invalid email or password***');
}
});
});
</script>
</body>
</html>
