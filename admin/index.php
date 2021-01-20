<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Auto'OLA admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo" style="color:white">Auto'OLA <span>Admin</span></div>
				<!--a href="#menu">Menu</a-->
			</header>

		<!-- Nav -->
			<!--nav id="menu">
				<ul class="links">
					<li><a href="generic.html">Dashboard</a></li>
					<li><a href="search_auto.html">search auto</a></li>
					<li><a href="trips_auto.html">trips auto</a></li>
					<li><a href="">LOGOUT</a></li>
				</ul>
			</nav-->

		<!-- One -->
	
		<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Admin Login</h2>
						
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
									<div class="container">
					<!--a href="generic.html" style='margin-left: 380px; margin-right:10px' class="button">Auto Registration</a-->
					<!--a href="regis_cab.html" class="button alt" >Cab Registration</a></div><br-->
							<header class="align-center">
								<h2>Enter Your Password</h2>
								
							</header>
							<?php
								$pass="admin@123";
								
								if(isset($_POST['passwd']))
								{
									$pass_rec = $_POST['passwd'];
									if($pass == $pass_rec)
									{
										session_start();
										$_SESSION['admin']=1;
										header ('Location: http://localhost/spardha/admin/regis_auto.php');
									}
									else{
										header ('Location: http://localhost/spardha/admin/index.php?err');
									}
								}
							
							?>
						 <div class="table-wrapper" 	>
                            <form action='index.php' method='post' style='margin-left: 400px;margin-right: 400px;'>
								<table class="alt">
									<tbody>
										<tr>
											<td  style="color:black;">Password</td>
											<td><input type="password" placeholder="Enter your Password" class="special" name="passwd" id="dname" /></td>
										</tr>
									</tbody>
									
											
								</table>
						 	<?php
								if(isset($_GET['err']))
								{
									echo "<h4 style='color:red;'>Invalied Password</h4>";
								}
							
							?>
								
							
							<input type="submit" value="Sign in" class="special" style='margin-left: 150px;'/>
									
							</form>
							
							</div>
							
						</div>
					</div>
				</div>
			</section>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>