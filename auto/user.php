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
					
							<header class="align-center">
								<h2>Price Details</h2>
								
							</header>
							<?php
							session_start();
							if(isset($_GET['id']))
							{

								$id = $_GET['id'];
								$pri=$_GET['pri'];
								$_SESSION['id']=$id;
								$_SESSION['pri']=$pri;
								$conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
								 $query = "SELECT  `pick_area`, `drop_area`, `id` FROM `bookings` WHERE id='$id'";
								 $result = mysqli_query($conn,$query);
								$row = mysqli_fetch_row($result);
							}

							
							?>
                         <div class="row uniform">
                         <form action='ph.php' method='get' style='margin-left: 400px;margin-right: 400px;' onsubmit='return validate();'>
                            <div class="table-wrapper" 	>
                                <table class="alt">
				 	
									
									<tbody>
										<tr>
                                    <td  style="color:black;">ID</td>
											<td style="color:black;"><?php echo $row[2];  ?> </td>
										</tr>
									<tr>
											<td  style="color:black;">From</td>
											<td style="color:black;"><?php echo $row[0];  ?> </td>
										</tr>
									<tr>
											<td  style="color:black;">To</td>
											<td style="color:black;"><?php echo $row[1];  ?> </td>
										</tr>
										<tr>
											
										<tr>
											<td  style="color:black;">Price</td>
											<td style="color:black;"><?php echo $pri;  ?> </td>
										</tr>
                                        
										
																				
												
									</tbody>
									
											
								</table>
                               
                                <input type="radio" id="priority-low" name="valied" value='3'>
                                <label for="priority-low">Yes</label>
                               
                                <input type="radio" id="priority-normal" name="valied" value='2'>
								<label for="priority-normal">No</label>
								 
							
							<input type="submit" value="Submit" class="special" style='margin-left: 150px;'/>
							<?php
							if(isset($_GET['cm']))
							{
								echo "<h1 style='color:red;margin-left:100px;'>Book isconfirmed</h1>";
							}
							else if(isset($_GET['err']))
							{
									echo "<h1 style='color:red;margin-left:100px;'>Booking is canceled.</h1>";
							}
							?>
								</div>	
							</form>
							</div>
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