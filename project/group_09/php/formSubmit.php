<!--(C) @ 2014 Buddhika Jayawarhdana
	Under MIT License 
-->

<!Doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width initial-scale = 1.0 user-scalable = no">
		
		<link rel = "stylesheet" href = "../css/animate.css">
		<link rel = "stylesheet" href = "../css/pure-min.css">
		<link rel = "stylesheet" href = "../css/myStyle.css">
		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cuprum">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Anton">
		
	</head>
	<body>
	
		<?php
			//create a connection
			$con = mysqli_connect($host="mysql3.000webhost.com",$username = "a6903421_buddhik",$password ="910700359m",$database="a6903421_TrueCod" );
			//check the connection
			if(mysqli_connect_errno()){
				echo "OOPS... Cannot Connect to the Database".mysqli_error();
			}
			/*else{
				echo "Connection Successful";
			}*/
			//escape variables for security
			$firstName = mysqli_real_escape_string($con,$_POST['firstName']);
			$lastName = mysqli_real_escape_string($con,$_POST['lastName']);
			$company = mysqli_real_escape_string($con,$_POST['company']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$phone = mysqli_real_escape_string($con,$_POST['phone']);
			$serviceCategory = mysqli_real_escape_string($con,$_POST['serviceCategory']);
			
			//creating a query
			$sql = "INSERT INTO inquiries (firstName,lastName,company,email,phone,serviceCategory) VALUES('$firstName','$lastName','$company','$email','$phone','$serviceCategory')";
			
			//add query to the database
			if(!mysqli_query($con,$sql)){
				die('Error'.mysqli_error($con));
			}
			/*else{
				echo "record added";
			}*/
			
		?>
		<div id="container">
			<div id = "header" class = "animated bounceInDown">
				<div id = "main-menu" class = "pure-menu-horizontal center">
					<ul>
						<li><a class = "pure-button pure-button-active" href = "../html/Home.html">Home</a></li>
						<li><a class = "pure-button" href = "../html/Services.html">Services</a></li>
						<li><a class = "pure-button" href ="../html/Team.html">Team<a></li>
						<li><a class = "pure-button" href = "../html/ContactUs.html">Contact Us</a></li>
					<ul>
				</div>
			</div>
			<div id = "submitted">
				<p>Thank You!<br>Our Team Will Contact You Soon..</p>
			</div>
			
			<div id = "footer" class = "animated bounceInUp">
				<footer>
					<img id="logo-footer" class = "animated bounceInLeft" src="../images/Alpha Back.png"></img>
					<p id="copyrightNote" class = "animated bounceInRight"> © 2014 TrueCode Technologies. All rights reserved</p>
				</footer>
			</div>
		</div>
	</body>

</html>