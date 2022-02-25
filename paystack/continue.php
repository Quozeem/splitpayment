<script>
//var status = document.referrer;    

//if (status == "success.php") {
 //   console.log(x);
//} else {
 //   window.location.href = "index.php";
//};
</script>
<?php
//include "verify_transaction.php";
if ($_SESSION['status']!== "success"){
//if ($_SESSION['logged'] !== TRUE){
     header("Location:javascript://history.go(-1)");
 //header("Location:index.php");
}
?>
<!doctype html>
<html>
<head>
<script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
<p>Almost done you're to upload your Verification Identity Card or Voters Card to proof the Ownership
of your Business.Note:Your informations are safes with us.</p>
<label>Upload Card</label>
<input type="files" name="file" require>


</body>
</html>