<?php
    $ref=$_GET['reference'];
     if($ref == "") {
       header("location:javascript://history.go(-1)");
     }
     ?>
     <?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/". rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_af90ce4eab7357eda3474f44f5309f16fcf7fce2",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  }
  if($result->data->status == 'success'){
    $status =$result->data->status;
    $reference =$result->data->reference;
    $amount =$result->data->amount;
    $lastname =$result->data->customer->last_name;
    $firstname =$result->data->customer->first_name;
    //$full_name= $lname.''.$fname;
    $email =$result->data->customer->email;
    $phone =$result->data->customer->phone;
     date_default_timezone_set('Africa/Lagos');
     $date_time=date('m/d/Y h:i:s a',time());
     include "config.php";
     $stmt=$con->prepare("INSERT INTO paystack (status
     ,reference,amount,last_name,first_name,email,phone,date)
      VALUES(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$status,$reference,$amount,$lastname,$firstname,$email,$phone,$date_time);
    $stmt->execute();
     if (!$stmt) {
       echo 'There was a problem on your code'.mysqli_error($con);
       //die"failed".mysqli_connect_error();
     }
     else{
       $_SESSION['status']= 'success';
       //header("Location:success.php");
       echo "<script> location.href='continue.php'</script>";
    
        exit();
     }
    $stmt->close();
    $con->close();
  }
  
     else{
      // $_SESSION['status']="success";
    header("location:error.php");
    exit();
  
  }  
?>