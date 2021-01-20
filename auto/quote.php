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
						<h2 style="margin-left:100px">Quoted Price Of Auto</h2>
						
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
									<div class="container">
					<!--a href="generic.html" style='margin-left: 380px; margin-right:10px' class="button">From</a-->
					<!--a href="regis_cab.html" class="button alt" >To</a></div><br-->
							<header class="align-center">
								<h2>Price Details</h2>
							
							</header>
							<?php 
								if(isset($_GET['id']) && isset($_GET['url']))
								{
									$id=$_GET['id'];
									$phnum=$_GET['url'];
									
						  			$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
									$query = "SELECT `pick_area`, `drop_area` FROM `bookings` WHERE id='$id'";
						  			$result = mysqli_query($conn,$query);
									$row = mysqli_fetch_row($result);
								}
							
								if(isset($_POST['price']))
								{
									$id=$_GET['id'];
									$phnum=$_GET['url'];
									
									$price = $_POST['price'];
									$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
									$query = "INSERT INTO `responses`(`id`, `phnum`, `from_add`, `to_add`, `price`, `vaild`) VALUES ('$id','$phnum','$row[0]','$row[1]','$price','0')";
									mysqli_query($conn,$query);
								}
							
							?>
						 <div class="table-wrapper" 	>
                            <?php echo "<form action='http://localhost/spardha/auto/quote.php?id=$id&url=$phnum' method='post' style='margin-left: 400px;margin-right: 400px;' onsubmit='return validate();'>"; ?>
								<table class="alt">
					
									
									<tbody>
									<tr>
											<td  style="color:black;">From</td>
											<td style="color:black;"><?php echo $row[0]; ?>  </td>
										</tr>
									<tr>
											<td  style="color:black;">To</td>
											<td style="color:black;"> <?php echo $row[1]; ?> </td>
										</tr>
										
										<tr>
											<td  style="color:black;">Price</td>
											<td><input type="text" placeholder="Enter your Price" class="special" name="price" id="dname" /></td>
										</tr>
										
										
																				
												
									</tbody>
									
											
								</table>
								
								
							
							<input type="submit" value="Submit" class="special" style='margin-left: 150px;'/>
									
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