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
				<div class="logo"><a href="regis_auto.php">Auto'OLA <span>Admin</span></a></div>
	 			<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="profile.php">Profile</a></li>
					<!-- <li><a href="trips.php">Trips</a></li>
					 -->
					<li><a href="session.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Search Auto</h2>
						
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
						<form method="get" action="">
							<header class="align-center">
								
							</header>
								<?php
									session_start();
									if(!(isset($_SESSION['auto'])))
				   					{
					  					header ('Location: http://localhost/spardha/auto/index.php');
				   					}
									$phnum=$_SESSION['phnum'];
									$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
									$query="SELECT `regnum`, `name`, `phnum`, `passwd`, `spcode`, `type` FROM `auto_db` WHERE phnum='$phnum'";
									$result = mysqli_query($conn,$query);
									$row = mysqli_fetch_row($result);
									if($row[5]=='c')
									{
										$p="Car";						
									}
									else if($row[5]=='a')
									{
										$p="Auto";
									}
								?>
						
								<div class="table-wrapper" style='margin-left: 200px;margin-right: 200px;'>
									<table class="alt">
										<tbody>
											<tr>
												<td style='color:black;'>Name</td>
												<td><?php echo "<h4 style='color:black'>$row[1]</h4>"; ?></td>
												
											</tr>
											<tr>
												<td style='color:black;'>Mobile</td>
												<td><?php echo "<h4 style='color:black'>$row[2]</h4>"; ?></td>
												
											</tr>
											<tr>
												<td style='color:black;'>Auto Reg.num</td>
												<td><?php echo "<h4 style='color:black'>$row[0]</h4>"; ?></td>
												
											</tr>
											<tr>
												<td style='color:black;'>Vehical Type</td>
												<td><?php echo "<h4 style='color:black'>$p</h4>"; ?></td>
												
											</tr>
										
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												
											</tr>
										</tfoot>
									</table>
							
							
							
							
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