
<?php

include "config.php";

if(isset($_POST['name']))
{
 $name=$_POST['name'];

 $checkdata="SELECT count(*) FROM user WHERE name='$name'";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['email']))
{
 $emailId=$_POST['email'];

 $checkdata="SELECT count(*) FROM user WHERE loginid='$emailId' ";

 $query=mysql_query($con,$checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>