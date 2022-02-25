
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>How to get and display html input form value on same page using php</title>
</head>

<body>

<table>
<form action="" method="post">
<tr>
<td> Name: </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> E-mail: </td><td><input type="text" name="email"></td>
</tr>
<tr>
<td><input name="submit" type="submit" /></td></tr>

</form>
</table>

<?php
  if (isset($_POST['submit'])) {
    $NAME = $_POST["name"];
    $EMAIL = $_POST["email"];
    
	echo "Name is = ". $NAME .'</br>';
	echo "Email is = ". $EMAIL .'</br>';
	
  }
 ?>

</body>
</html>

