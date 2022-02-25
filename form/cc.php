<?php 
$username="coincard4naira";
    $password="Adefemi@salam0490";
?>
<!DOCTYPE html>
<html>
<head>
<meta content="noindex, nofollow" name="robots">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
<form id="login" name="login">
<h3>Login Form</h3>

   <form class="form-container" id="login" name="login">
        
  

    <label for="username"><b>Username</b></label>
    <input type="text" id="username"placeholder="Username" name="username" required>
    
    <label for="password" class="form-label"><b>Password</b></label>
<input type="password" id="password" placeholder="Password" name="password" class="form-control" required>
<i class="fa fa-eye" style="position:absolute;
    margin-top:-23%;
    margin-left:60%;
    width:100%; 
    " aria-hidden="true" onclick="myFunction()"></i>

    <button id="login_button" type="submit" class="btn" value=" Login ">Login</button>
<div id="message"></div>
    
  </form>
</div>
</div>
</div>

<script>

$(document).ready(function() {
// Start when document will be ready.
$("#login_button").click(function() {
var username= $("#username").val(); // Store username input value in the variable email.
var password = $("#password").val(); // Store Password input value in the variable password.
/* Check if email=formget@gmail.com and password=fugo then,Show the message Account Validated!!! in the Div having id message.*/
if (username == "ademola" && password == "lola") {
$("#message").html("Account Validated!!!");
}
/* If username and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
else {
$("#login").effect("shake");
$("#message").html('***username email or password***');
}
});
});
</script>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
