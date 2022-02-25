<?php
session_start();
if(  $_SESSION['print'] !="true"){
  //  echo"<script> location.href='index.php'  </script>";
}


$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?>
   <?php 
  include "config.php";
  //print
if(isset($_GET['zkTYJljsksbjsjkaoshjaoajasbpfgstsgbsjgfsshhsjssfjmabakakaiassggsRTWHWJHgagasjswjgssjwtwtwhsbnwkiiwjwkkqjwjan'])){
   $idss=$_GET['zkTYJljsksbjsjkaoshjaoajasbpfgstsgbsjgfsshhsjssfjmabakakaiassggsRTWHWJHgagasjswjgssjwtwtwhsbnwkiiwjwkkqjwjan'];
      $select="SELECT * FROM application WHERE email='$idss'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $dbirth=$row['dob'];
            $address=$row['address'];
            $phone=$row['phone'];
             $sfuulname=$row['fullname'];
            $saddress=$row['sponsoraddress'];
            $snumber=$row['sponsorphone'];
            $gender= $row['gender'];
              $state= $row['state'];
                $religion= $row['religion'];
             $passport=$row['picture'];
            $id = $row['appId'];
      $state=$row['state'];
$local=$row['lga'];
$fullnames=$row['fullname'];
$sponsoraddress=$row['sponsoraddress'];
$sponsorphone=$row['sponsorphone'];
            $email_val = $row['email'];
             $firstname = $row['surname'];
                 $lastname = $row['lastname'];
                  $middle = $row['middlename'];
           $fullname = $firstname. ' ' .$middle. ' ' .$lastname;
        }
    }
      if( $state == ""){
      //     echo '<script> alert("Not Unauthorised")
    /// window.location = "index.php";
     //</script>';
      }
}
    ?>
<!doctype>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter | Print Applicant Form </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize csss -->
    <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Select 2 csss -->
    <link rel="stylesheet" href="csss/select2.min.css">
    <!-- Date Picker csss -->
    <link rel="stylesheet" href="csss/datepicker.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
$(document).ready(function() {
	$('#state').change(function(){
		var state= $(this).val();
		$("#lga"wink.load("applicantform.php",{state:state, ajax: 'true'});
	});
});
</script> 
    
    
    
    
    
</head>
<body style="background-color:whitesmoke; background-repeat: no-repeat;size: a4; background-image: url();size: a4;">
    <form method="post" action="javascript:void(0);">
	<button name="print" onclick="printPageArea('printableArea')">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button>
	</form>
	<div class="container" style="margin-top:3%;width:100%">
    <div id="printableArea">
 <img src="images/logo.png" alt="logo" style="style="width: 10%;float: left;"/>
<center> <h1 style="font-family: monospace;">DEPOTTER COLLEGE OF HEALTH TECHNOLOGY</h1></center>
<center>in the district ofKM2, Oru/ijebu-igbo Road Oru-ijebu Ogun State.<br/> email:info@depotterhealth.sch.ng * Contact: 08184752559, 08101197161</center><br>
<h3 style="text-align:center;color:red">APPLICATION FORM FOR ADMISSION<h3/>
<center>Session: 2021/2022</center>
<table class="table text-nowrap" style="padding-left: 79px;">
                                        <tbody>
                                 
                                     <img src="img/<?php echo $passport;?>"  style="width: 15%; height: 30%; float: right;border:1px solid black">
                                            <tr>
                                                <td>Surname</td>
                                                <td class="font-medium text-dark-medium"><?php echo   $firstname;?></td>
                                                    <!--<input type="text" style="border-left: none;border-right: none; border-top: none; border-bottom: 2px solid black; background: none;" /></td-->
                                            </tr>
                                           
                                            <tr>
                                                <td>Middle Name</td>
                                                <td class="font-medium text-dark-medium"><?php echo  $middle ;?></td>
                                                    <!--input type="text" style="border-left: none;border-right: none; border-top: none; border-bottom: 2px solid black; background: none;" /></td-->
                                            </tr>
                                             <tr>
                                                <td>Lastname</td>
                                                <td class="font-medium text-dark-medium"><?php echo $lastname ;?></td>
                                                    <!--input type="text" style="border-left: none;border-right: none; border-top: none; border-bottom: 2px solid black; background: none;" /></td-->
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td >09024256778</td-->
                                            </tr>


                                            <tr>
                                            
                                                <td>First Choice</td>
                                                <td class="font-medium text-dark-medium">Engineering</td-->
                                            <!--/tr>
                                            <tr-->
                                                <td>Second Choice</td>
                                                <td class="font-medium text-dark-medium">Food And Hygiene</td-->
                                            </tr>
                                            <tr>
                                            
                                                <td>Date Of Birth</td>
                                                <td class="font-medium text-dark-medium">2018/02/09</td-->
                                            <!--/tr>
                                            <tr-->
                                                <td>Gender</td>
                                                <td class="font-medium text-dark-medium">Male</td-->
                                            </tr>
                                           
                                             <tr>
                                                <td>Email</td>
                                                <td class="font-medium text-dark-medium">qmanrocket@gmail.com</td-->
                                            <!--/tr>
                                            <tr-->
                                            <td>Religion</td>
                                                <td class="font-medium text-dark-medium">Islam</td-->
                                            </tr>
                                                <td>Address</td>
                                                <td class="font-medium text-dark-medium">Felel ibadan</td-->
                                            <!--/tr>
                                            <tr-->
                                                <td>State</td>
                                                <td class="font-medium text-dark-medium">Oyo State</td-->
                                            </tr>
                                            <tr>
                                                <td>Local government</td>
                                                <td class="font-medium text-dark-medium">Lagel local</td-->
                                            <!--/tr>
                                            <tr-->
                                                
                                            <!--img src="img/logo.png" style="float: center; opacity: 0.2;"/-->
                                                <td>Sponspor's Name</td>
                                                <td class="font-medium text-dark-medium">Olatunji</td>
                                            </tr>
                                            <tr>
                                                <td>Sponspor's Address</td>
                                                <td class="font-medium text-dark-medium">CHALLNEGE</td-->
                                            <!--/tr>
                                            <tr-->
                                                <td>Sponspor's Phone Number</td>
                                                <td class="font-medium text-dark-medium">090778W89W9999</td-->
                                            </tr>
                                           
                                           
                                       </tbody>
                  </div>                     </div>
          </body> 
          <script>
		function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>
</html>