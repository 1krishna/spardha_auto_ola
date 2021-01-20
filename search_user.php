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
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
						
				    <h3 style='margin-left: 450px;margin-right:450px'>Search an auto</h3>
						
						<?php
						
                	if(isset($_GET['id']))
					{
						
						$id=$_GET['id'];
                          $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
                    	 $query = "SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time`,`email`,`type` FROM `bookings` WHERE id='$id'";
                     	 $result = mysqli_query($conn,$query);
						$row = mysqli_fetch_row($result);
						if($row[10]=='a')
						{
							$p='Auto';
						}
						else if($row[10]=='c')
						{
							$p='Car';
						}
						
						
					}
						echo "<div class='table-wrapper' >";
						echo "<table class='alt'>";
						echo"<div class='table-wrapper' style='margin-left: 400px;margin-right: 400px;'>";
                        echo "<form method='get' action='search_user.php' id='search_form'>";
                        echo "<p>";
                        echo "<table class='alt'>";
						echo"<tbody>";
						echo"<tr>";
						echo"<td>Enter Booking Id</td>";
						echo"<td><input type='text' name='id'  placeholder='Enter Your Booking id' ></td>";
						echo"</tr>";
						echo"</tbody>";
						echo"</table><br>";
						echo"</div>";

                         

							
                        echo "<input name='search' type='submit' value='Search' class='button' style='margin-left: 450px;'/>";
                        echo "</p>";
						echo "</form>";
						
                        if(isset($_GET["id"]))
                         {
                            if($row[7] == 1)
                            {
                           // echo " <p><span>Thank you for booking the $p</span></p>";
                            echo "<h2>Thank you for booking the $p</h2>";
                            //	echo "<p>Tables should be used to display data and not used for laying out your website:</p>";
                            echo "<table width='70%'>";
                            echo "<tr><td>Booking ID :</td><td>$row[6]</td></tr>";
                            echo "<tr><td>Name :</td><td>$row[0]</td></tr>";
							echo "<tr><td>Ph.number :</td><td>$row[1]</td></tr>";
							echo "<tr><td>Email :</td><td>$row[9]</td></tr>";
                            echo "<tr><td>Pickup Address :</td><td>$row[2]</td></tr>";
                            echo "<tr><td>Pickup Area :</td><td>$row[3]</td></tr>";
                            echo "<tr><td>Drop Address :</td><td>$row[4]</td></tr>";
                            echo "<tr><td>Drop Area :</td><td>$row[5]</td></tr>";
                            echo "<tr><td>Date And Time of Booking :</td><td>$row[8]</td></tr>"; 
                            echo "</table>";
                            }
                            else{
                            echo "<h5 style='color: rgb(196, 46, 46);'>ID dosen't exist Enter valid Booking ID</h5>";
                            }
                    }
                ?>
				</div>
			</div>
		</section>

		


	</body>
</html>