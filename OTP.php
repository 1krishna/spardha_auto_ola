<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>OTP</title>
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
				<h1><a href="#">Auto'OLA</a></h1>  
				<nav id="nav">
				
				</nav>
			</header>
			<?PHP
					session_start();
					if(!(isset($_SESSION['start'])))
				   {
					  header ('Location: http://localhost/spardha/register_auto.php');
				   }
					$otp = $_SESSION['OTP'];
					$phnum =$_SESSION['phnum'];
					$email =$_SESSION['mail'];
					$name = $_SESSION['name'];
					
			?>

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="container">
							
                 <header class="major">
						<h2>Auto'OLA OTP</h2>						
					</header>		

					
					<!--OTP Form  -->
				<section id="three" class="wrapper style3 special">						
							
					<div class="table-wrapper">
						<table class="alt">					
							   <form method="post" action="process.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<input type="text" name="otp_entered" id="" value="" placeholder="Enter your OTP" style='margin-left:300px'/><br>
										<?php
										if(isset($_GET['err']))
										{
											echo "<h1 style='color:red;margin-left:100px;'>Invalid OTP</h1>";
										}
										echo "<a href='http://localhost/spardha/OTP.php?resend' style='margin-left:100px;'>Resend OTP </a>";
										if(isset($_GET['resend']))
										{
											$msg1="Dear $name,\nThank you for using AutoOla\nyour OTP:$otp";
											file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".urlencode($msg1));
            								include_once 'send_email.php';
										}
										 ?>
									</div> 		
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="submit" class="special" style='margin-left:10px'/></li>
											
										</ul>
									</div>
								</div>
							</form>		
					    </table>
					</div>
				</section>	

			</div>
		</section>

		<!-- Footer >
			<footer id="footer">
				<div class="container">
                    
					
				</div>
			</footer-->
			

	</body>
</html>