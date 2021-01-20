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
						<h2>Allocation of Vehical</h2>

						
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
							$id=$_GET['id'];
                          	$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
                    	 	$query = "SELECT `id`, `phnum`,`from_add`,`to_add`,`price` FROM `responses` WHERE id='$id'";
                     	 	$result = mysqli_query($conn,$query);
							
						?>
								<div class="table-wrapper">
									<table class="alt">

										<thead>
											<tr>
												<th>ID</th>
												<th>Phnum</th>
												<th>Price</th>
												<th>From</th>
												<th>To</th>
												<th>Allocate</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while($row = $result->fetch_assoc()) 
											{
												$id=$row["id"];
												$pri=$row["price"];
												$phnum = $row['phnum'];
												echo "<tr>";
												echo "<th>".$row["id"]."</th>";
												echo "<th>".$row["phnum"]."</th>";
												echo "<th>"."Rs.".$row["price"]."</th>";
												echo "<th>".$row['from_add']."</th>";
												echo "<th>".$row['to_add']."</th>";
												
												echo "<th><a href='http://localhost/spardha/admin/sms.php?id=$id&pri=$pri&phnum=$phnum'  class='button'>Allocate</a></th>";
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