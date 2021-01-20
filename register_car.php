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
						<li><a href="register_auto.php">Book Auto&Car</a></li>
						<li><a href="search_user.php">Search Booking Id</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<a href="register_auto.php" style='margin-left: 450px;'class="button alt">Book Auto</a>
					<a href="register_car.php" class="button">Book Car</a></div><br>
					<h4 style='margin-left: 400px'>Book Car</h4>
					<?php
						if(isset($_POST[name]))
						{
							if($res)
							{
								echo
							}
						}
					?>
							<div class="table-wrapper" style='margin-left: 400px;margin-right: 400px;'>
								<form action='register_car.php' method='POST' onsubmit='return validate();'>
								<table class="alt">
									
									<tbody>
										<tr>
											<td>Name</td>
											<td><input type="text" value="" class="special" name="name" id="name" /><span id="errn" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td>Mobile</td>
											<td><input type="text" value="" class="special" name="phnum" id="phnum" /><span id="errp" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><input type="text" value="" class="special" name="mail" id="mail" /><span id="erre" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td>PickUp Address</td>
											<td><input type="text" value="" class="special" name="pick_add" id="pick_add" /><span id="padd" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td>PickUp Area</td>
											<td><select name='pick_area' id='pick_area'>
													<option value="none">--Select--</option>
													<option value="Chinnamiram">Chinnamiram</option>
													<option value="Peddamiram">Peddamiram</option>
													<option value="I Town">I Town</option>
													<option value="II Town">II Town</option>
												  </select><span id="pare" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td>Droping Address</td>
											<td><input type="text" value="" class="special" name="drop_add" id="drop_add" /><span id="dadd" style='color:red;' ></span></td>
										</tr>
										<tr>
												<td>Droping Area</td>
												<td><select name='drop_area' id='drop_area'>
														<option value="none">--Select--</option>
														<option value="Chinnamiram">Chinnamiram</option>
														<option value="Peddamiram">Peddamiram</option>
														<option value="I Town">I Town</option>
														<option value="II Town">II Town</option>
													  </select><span id="dare" style='color:red;' ></span></td>
											</tr>
												
									</tbody>
									
											
								</table>
								<input type="checkbox" id="human" name="human" >
								<label for="human">I agree the terms and Conditions</label>
								<span id="check" style='color:red;' ></span></br>
								<td colspan="2">
								</td>
								<td><input type="submit" value="Book Now" class="special" style='margin-left: 420px;'/></td>
									
							</form>
							</div>
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
								<li><a href="register_auto.php">Auto Registration Form</a></li>
									<li><a href="register_car.php">Cab Registration Form</a></li>
									<li><a href="search_user.php">Booking Status</a></li>
									
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
		var phnum = document.getElementById('phnum').value;
        var email = document.getElementById('mail').value;
		var padd = document.getElementById('pick_add').value;
		var pdl = document.getElementById('pick_area');
        var selectedValue = pdl.options[pdl.selectedIndex].value;
		var dadd = document.getElementById('drop_add').value;
		var ddl = document.getElementById('drop_area');
        var selectedValued = ddl.options[ddl.selectedIndex].value;

		document.getElementById("errn").innerHTML="";
		document.getElementById("errp").innerHTML="";
		document.getElementById("erre").innerHTML="";
		document.getElementById("padd").innerHTML="";
		document.getElementById("pare").innerHTML="";
		document.getElementById("dadd").innerHTML="";
		document.getElementById("dare").innerHTML="";
		document.getElementById("check").innerHTML="";
		
		var re=true;
		
		nm = /^[A-Za-z ]*$/; 
		if (name.length<=4  || !nm.test(name)) 
		{
			document.getElementById("errn").innerHTML="Enter A Valid Name Of Minimun 5 Characters";
			re=false;
			
		}
        
        rn = /^[0-9]{12}$/; 
		 if(!rn.test(phnum))
		{
			document.getElementById("errp").innerHTML="Enter A Valid Number Of 12 Digits including (91)";
			re=false;
		}

        
		var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");

		if (atpos < 1 || dotpos < atpos+2 || dotpos+2 >= email.length)
	   {
        document.getElementById("erre").innerHTML="Enter A Valid Email";
        re=false;
       }
       
		
	   if(padd.length<=4)
	   {
		document.getElementById("padd").innerHTML="Enter A Valid Pick Up Address";
        re=false;
	   }

	   if (selectedValue == "none")
       {
		document.getElementById("pare").innerHTML="Select A Valid Option";
		re=false;
       }
       
	   if(dadd.length<=4)
	   {
		document.getElementById("dadd").innerHTML="Enter A Valid Dropping Address";
        re=false;
	   }

	   if (selectedValued == "none")
       {
		document.getElementById("dare").innerHTML="Select A Valid Option";
		re=false;

       }

	   if(!document.getElementById("human").checked)
	   {
		document.getElementById("check").innerHTML="Please Accept Terms And Conditions";
		re=false;
		
	   }

	   if(padd==dadd)
	   {
		   alert("Pickup Address and Dropping Address Should Not Be Same");
		   re=false;

	   }
	  
		return re;


	}
</SCRIPT>

	</body>
</html>