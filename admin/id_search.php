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
				<div class="logo"><a href="index.php">Auto'OLA <span>Admin</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
 					<li><a href="regis_auto.php">Dashboard</a></li>
					<!-- <li><a href="search_auto.php">search auto</a></li>
					<li><a href="trips_auto.php">Trips auto</a></li> -->
					<li><a href="id_search.php">ID Search</a></li>
					<li><a href="session.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Current Pending ID's</h2>
						
					</header>
					<?php
						session_start();
						if(!(isset($_SESSION['admin'])))
		   				{
							header ('Location: http://localhost/spardha/admin/index.php');
				   		}
					
					?>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
						<?php
							//$id=$_GET['id'];
                          	$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
                    	 	$query = "SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time`,`email`,`type` FROM `bookings` WHERE valied='1'";
                     	 	$result = mysqli_query($conn,$query);
							
						?>
								<div class="table-wrapper">
									<table class="alt">

										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Ph.Num</th>
												<th>From</th>
												<th>To</th>
												<th>Time</th>
												<th>Allocate</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while($row = $result->fetch_assoc()) 
											{
												$id=$row["id"];
												echo "<tr>";
												echo "<th>".$row["id"]."</th>";
												echo "<th>".$row["name"]."</th>";
												echo "<th>".$row['phnum']."</th>";
												echo "<th>".$row['pick_area']."</th>";
												echo "<th>".$row['drop_area']."</th>";
												echo "<th>".$row['time']."</th>";
												echo "<th><a href='http://localhost/spardha/admin/allocate.php?id=$id' class='button'>Allocate</a></th>";
												echo "</tr>";
											}
											?>
											
										</tbody>
										
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