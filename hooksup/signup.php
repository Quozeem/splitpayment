
<!doctype html>
<html>
<head><title>VENTURE</title>
     <link rel="shortcut icon" href="img/download (2).png">
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <meta name="viewort" content="width=device-width" />
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-color:#f1f1f1;
}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}
 input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}
input[type=email],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
   background-color: #1DA1F2;
  color: white;
  padding: 8px 13px;
  margin: 8px 0;
  font-weight: 600;
  border-radius: 20px 20px 20px 20px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
  border-collapse: collapse;
  margin: 0 25%;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.container {
    margin-top: 2%;
    margin: 0 30%;
    box-shadow:0px 2px 4px white; 
      border-radius:15px 15px 15px 15px;   
      width: 40%;
    
  
    
    
}
</style>
<body>
<div class="container">
     <form method="post" action="val.php">
     <div class="text" style="text-align: center;">
      <p>Please fill in this form to create an account.</p>
     </div>
      <input type="hidden" name="id">
      <hr>
      <label>First name</label>
      <input type="text"  name="firstname" required>

      
       <label>Last name</label>
      <input type="text"  name="lastname"required>
      
      <label>Email or phone number</label>
      
      
      <input type="text"  name="phonemail"required>
      <label>Password</label>

      
      <input type="password"  name="password" required>
       
      

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        
        <button type="submit" name="submit" class="signupbtn">Sign up</button>
      </div>
  </form>
</div>

<script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>