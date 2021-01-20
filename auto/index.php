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
						<h2>Login</h2>
						
					</header>
				</div>
			</section>
			<?php
				if(isset($_POST['phnum']) && isset($_POST['passwd']) && isset($_POST['spcode']))
				{
					$phnum = $_POST['phnum'];
					$passwd = $_POST['passwd'];
					$spcode = $_POST['spcode'];
					 $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
					$query="SELECT `regnum`, `name`, `phnum`, `passwd`, `spcode`, `type` FROM `auto_db` WHERE phnum='$phnum'";
					$result = mysqli_query($conn,$query);
					$row = mysqli_fetch_row($result);
					$md5= md5($passwd);
					echo $md5;
					if($phnum == $row[2] && $md5 == $row[3] && $spcode == $row[4])
					{
						session_start();
						$_SESSION['auto']=1;
						$_SESSION['phnum']=$phnum;
						$_SESSION['passwd']=$passwd;
						header ('Location: http://localhost/spardha/auto/profile.php');
					}
					else{
						header ('Location: http://localhost/spardha/auto/index.php?err');
					}
				}
		
			?>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
									<div class="container">
					<!--a href="generic.html" style='margin-left: 380px; margin-right:10px' class="button">Auto Registration</a-->
					<!--a href="regis_cab.html" class="button alt" >Cab Registration</a></div><br-->
							<header class="align-center">
								<h2>Enter Your Details</h2>
								
							</header>
						 <div class="table-wrapper">
                            <form action='index.php' method='post' style='margin-left: 400px;margin-right: 400px;'>
								<table class="alt">
					
									
									<tbody>
										<tr>
											<td  style="color:black;">User Id</td>
											<td><input type="text" placeholder="Enter your User Name" class="special" name="phnum" id="ano" /></td>
										</tr>
										<tr>
											<td  style="color:black;">Password</td>
											<td><input type="password" placeholder="Enter your Password" class="special" name="passwd" id="dname" /></td>
										</tr>
										<tr>
											<td  style="color:black;">Special Code</td>
											<td><input type="password" placeholder="Enter Special Code" class="special" name="spcode" id="dname" /></td>
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