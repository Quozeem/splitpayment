
function myfunction() {
if (validation()) // Calling Validation Function
{
// Serializing Form Data And Displaying It In <p id="wrapper"></p>
document.getElementById("wrapper").innerHTML = serialize(document.forms[0]); // Serialize Form Data
document.getElementById("form").reset(); // Reset Form Fields
}
}

// Name And Email Validation Function
function validation() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var contact = document.getElementById("contact").value;
var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
if (name === '' || email === '' || contact === '') {
alert("Please fill all fields...!!!!!!");
return false;
} else if (!(email).match(emailReg)) {
alert("Invalid Email...!!!!!!");
return false;
} else {
return true;
}
}


<!DOCTYPE html>
<html>
<head>
<title>JavaScript Serialize Form Data Example</title>
<link href="css/style.css" rel="stylesheet"> <!-- Include CSS File Here-->
<script src="http://form-serialize.googlecode.com/svn/trunk/serialize-0.2.min.js" type="text/javascript"></script> <!-- For Serialization Function -->
<script src="js/serialize.js"></script> <!-- Include JavaScript File Here-->
</head>
<body>
<div class="container">
<div class="main">
<form action="" id="form" method="post" name="form">
<h2>JavaScript Serialize Form Data Example</h2>
<label>Name :</label>
<input id="name" name="name" placeholder="Name" type="text">
<label>Email :</label>
<input id="email" name="email" placeholder="Valid Email" type="text">
<label>Gender :</label>
<input name="gender" type="radio" value="Male">
<label>Male</label>
<input name="gender" type="radio" value="Female">
<label>Female</label>


<label>Language known :</label>
<input name="language" type="checkbox" value="Spanish">
<label>Spanish</label> <input name="language" type="checkbox" value="French">
<label>French</label>
<input name="language" type="checkbox" value="English">
<label>English</label>
<label>Contact No. :</label>
<input id="contact" name="contact" placeholder="Contact No." type="text">
<input onclick="myfunction()" type="button" value="Serialize">
<span>Serialized form data will be shown below.</span>
</form>
</div>
<!--Below Paragraph Tag Displays Serialized Form Data-->
<p id="wrapper"></p>
</div>
</body>
</html>
