<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Transit by TEMPLATED</title>
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
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Auto'Ola</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="register_auto.php">Book </a></li>
						<li><a href="search_user.php">Search Booking Id</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
                    <?php
                    session_start();
                    if(!(isset($_SESSION['start'])))
                    {
                       header ('Location: http://localhost/spardha/register_auto.php');
                    }
                     $otp= $_SESSION['OTP'];
                    
                     $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
                     $query = "SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time`,`email`,`type` FROM `bookings` WHERE otp='$otp'";
                     $result = mysqli_query($conn,$query);
					 $row = mysqli_fetch_row($result);
					 if($row[10] == 'a')
					 {
						 $p="Auto";
					 }
					 else if($row[10]=='c')
					 {
						 $p="Car";
					 }
                     
                     if($row[7] == 1)
                     {
                         echo " <h4><span>Thank you for booking the $p</span></p>";
                         
                         echo "<table width='70%'>";
                         echo "<tr><td>Booking ID :</td><td>$row[6]</td></tr>";
                         echo "<tr><td>Name :</td><td>$row[0]</td></tr>";
                         echo "<tr><td>Ph.number :</td><td>$row[1]</td></tr>";
                         echo "<tr><td>Emali :</td><td>$row[9]</td></tr>";
                         echo "<tr><td>Pickup Address :</td><td>$row[2]</td></tr>";
                         echo "<tr><td>Pickup Area :</td><td>$row[3]</td></tr>";
                         echo "<tr><td>Drop Address :</td><td>$row[4]</td></tr>";
                         echo "<tr><td>Drop Area :</td><td>$row[5]</td></tr>";
                         echo "<tr><td>Date And Time of Booking :</td><td>$row[8]</td></tr>";
                         
                        echo "</table>";
                     }
                    else{
                        echo "<h2>Your request has not been processed .</h2>";
                        echo "<form action='register_auto.php' method='post'>";
                        echo "<input class='submit'  type='submit' value='Click here to book an Auto again'>";
                        echo "</form>";
                    }
					$query1="UPDATE `bookings` SET `otp`=0 WHERE id='$row[6]'";
					
					$msg1="your booking is being processed.\nYour Booking id is:$row[6]\nWe will shortly inform you about $p details";
					file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$row[1]."&message=".urlencode($msg1));
            		include_once 'send_email1.php';
                    mysqli_query($conn,$query);
					
					
					$query="SELECT `phnum` FROM `auto_db` WHERE type='$row[10]'";
					$result = mysqli_query($conn,$query);
					while($row1 = $result->fetch_assoc()) {
						$msg = "Booking Alert,\nFrom:$row[3]\nTo:$row[5]\nUrl : http://localhost/spardha/auto/quote.php?id=$row[6]&url=".$row1["phnum"];
						file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$row1["phnum"]."&message=".urlencode($msg));
            		
					}
				//	echo "num: " . $row["phnum"]."<br>";
					session_unset();    
                    session_destroy();
                ?>
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
									<li><a href="#">Auto Registration Form</a></li>
									<li><a href="#">Cab Registration Form</a></li>
									<li><a href="#">Booking Status</a></li>
									
								</ul>
							</section>
						</div>
					</section>
					
					</div>
				</div>
			</footer>

<SCRIPT type='text/javascript'>
	function validate() {
		var name = document.getElementById('name').value;
		if (name == "") 
		{
			alert("UserName Can Not Be Empty!");
			return false;
		}
		return true;
	}
</SCRIPT>

	</body>
</html>