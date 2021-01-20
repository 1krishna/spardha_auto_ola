<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Auto'OLA</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php"><font color="black">Auto'OLA</font></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><font color="black">Home</font></a></li>
						<li><a href="register_auto.php"><font color="black">Book Auto & Car</font></a></li>
						<li><a href="search_user.php"><font color="black">Search Booking Id</font></a></li>
						
					</ul>
					<ul>
						<form action='search_user.php' method='get'>
							<li><input type='search' name='id' style='margin-left: 200px' placeholder='Enter Your Booking id'><input type='submit' class="button special" value='search'></li>
						</form>
						</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
					<!--h2><font color="black"> Welcome to Auto'OLA</font></h2>
						
				
				<p><font color="black">Door to Door step Services</font></p-->
				
					<h2 style="text-align: left; margin-left:50px;"><font color="black"><a style="text-decoration:null" href="register_auto.php">Auto</a></font></li></h2>
					
				
					<h2 style="text-align: right; margin-right:100px;"><font color="black"><a style="text-decoration:null" href="register_car.php">Cab</a></font></li></h2>
				
					<ul class="actions">
					
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Services Provided by Us</h2>
						
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section style="border: 10px solid yellow;" class="box">
								<!--i class="icon big rounded color2 fa-bike"></i-->
								<h3><font color="black">Auto Services</font></h3>
								<p>Auto will come to your door step and will drop you in your desired location</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section style="border: 10px solid yellowgreen;" class="box">
							    <!--i class="icon big rounded color1 fa-car"></i-->
								<h3><font color="black">Cab Services</font></h3>
								<p>Cab will come to your door step and will drop you in your desired location</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section style="border: 10px solid green;" class="box">
								<!--i class="icon big rounded color6 fa-order"></i-->
								<h3><font color="black">Order Status</font></h3>
								<p>After placing order you can check your status using tracking ID</p-->
							</section>
						</div>
					</div>
				</div>
			</section>

		

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Contact Us</h2>
						
					</header>
				</div>
				<?php
					if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
					{
						$name = $_POST['name'];
						$email = $_POST['email'];
						$message = $_POST['message'];
						 $msg1="Name : $name\nEmail : $email\nMessage:$message";
						include_once 'send_email.php';
					}
				
				?>
				<form method=post>
				<div class="container 50%">
					<form action="index.php" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Auto</h3>
								<ul class="unstyled">
									<li style="text-decoration: none;">Book Auto From your Phone</li>
									<li>Auto Comes to your Address</li>
									<li>Drops you at your specified Location</li>
									<li><a href="#">Auto Registratiom Form Quick Linkl</a></li>
									
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Cab</h3>
								<ul class="unstyled" >
									<li>Book Car easily using Booking Form</li>
									<li>Cab comes to your Door Step</li>
									<li>Drops you at your specified Location</li>
									<li><a href="#">Cab booking Form Quick Link</a></li>
									
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Other Services</h3>
								<ul class="unstyled">
									<li>Track your Auto Booking Status</li>
									<li>Track your Cab Booking Status</li>
									<li>Get Details regarding price etc.</a></li>									
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Quick Links</h3>
								<ul class="unstyled">
									<li><a href="register_auto.php">Auto Registration Form</a></li>
									<li><a href="register_car.php">Cab Registration Form</a></li>
									<li><a href="search_user.php">Booking Status</a></li>
									
								</ul>
							</section>
						</div>
					</section>
					
					</div>
				</div>
			</footer>

	</body>
</html>