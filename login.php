<?php

include('connect.php');

if(isset($_POST['email']) && isset($_POST['pass'])){
    $uname=$_POST['email'];
    $pword=$_POST['pass'];
    

    $sql="SELECT FName from login where username='$uname' and pword='$pword'";
    $result=mysqli_query($con,$sql);

    $row= mysqli_fetch_array($result);
    $FName = $row['FName'];
    $username=$row['username'];
    if(mysqli_num_rows($result)==1){
        session_start(); //Start a Login Session
        $_SESSION['user'] = $FName;
        $_SESSION['username'] = $uname;

        echo "<script> location.href='index2.php' </script>";
        exit();
    }
    else{ ?>
        <script> alert("Email ID or Password Incorrect!!!!") </script>
        <?php
        echo "<script> location.href='login.php' </script>";
        exit();
    }
}

?>







<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>LOGIN :: Car Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        


	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


        
		
	</head>





	<body>
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo"><img src="picture/logo.png"></div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="cars.php">Cars</a></li>
						<li><a href="contact-us.php">Contact Us</a></li>
						<li><a href="login.php">LOGIN</a></li>

						
					</ul>
				</div>
			</div>
		</nav>

    	<div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-pic js-tilt" data-tilt>
                            <img src="picture/img-01.png" alt="IMG">
                        </div>
        
                        <form class="login100-form validate-form" method="POST" action="#">
                            <span class="login100-form-title"><div class="logo"><img src="picture/logo.png"></div>
                                Login
                            </span>
                       
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
        
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="input100" type="password" name="pass" placeholder="Password">
                                
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Login
                                </button>
                            </div>
        
                            <div class="text-center p-t-12">
                                <span class="txt1">
                                    Forgot
                                </span>
                                <a class="txt2" href="#">
                                    Username / Password?
                                </a>
                            </div>
        
                            <div class="text-center p-t-136">
                                <a class="txt2" href="signup.php">
                                    Create your Account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        
            
        <!--===============================================================================================-->	
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/tilt/tilt.jquery.min.js"></script>
            <script >
                $('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
        <!--===============================================================================================-->
            <script src="js/main.js"></script>
        
        

		

		
	</body>
</html>