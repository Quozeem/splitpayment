<?php session_start ();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="hooks">
    <meta name="author" content="hooks">
    <meta name="keywords" content="hooks">

    <!-- Title Page-->
    <title>VENTURE</title>
     <link rel="shortcut icon" href="img/download (2).png">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>




    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <small class="title">Registration Info</small>
                    <div class="form">
                    <form name="registration" method="post" action="signup.php" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" required />
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepic" type="text" placeholder="Username" name="username" required />
                            
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            
                               <!-------- <select name="gender">
                                    <!-----------<option disabled="disabled" selected="selected">Gender</option>---!>
                                    <!--------<option>Male</option>---!>
                                    <!-------<option>Female</option>---!>
                                    <!------<option>Other</option>---!>
                                <!-------</select>
                                <!---------<div class="select-dropdown"></div>---!>
                        <input type="text" name="address" class="input--style-3" placeholder="Contact Address" required/> 
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required />
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Phone" name="phone" required />
                        </div>
                        <div class="input-group">
                        <input type="file" name="image" class="input--style-3" required/> 
                            </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="password" name="password" required />
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepic" type="text" placeholder="amount" name="amount" required />
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepic" type="text" placeholder="fees" name="fees" required />
                            
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
                        </div>
                         </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->