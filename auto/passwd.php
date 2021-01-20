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
					<li><a href="trips.php">Trips</a></li>
					<li><a href="passwd.php">Change Password</a></li>
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
							<header class="align-center">
								</header>
								<?php
									session_start();
									if(!(isset($_SESSION['auto'])))
				   					{
					  					header ('Location: http://localhost/spardha/auto/index.php');
				   					}
									if(isset($_POST['phnum']) && isset($_POST['new']) && isset($_POST['new1']))
									{
										$new=$_POST['new'];
										$phnum = $_POST['phnum'];
										if($phnum == $_SESSION['phnum'] && $_POST['new']==$_POST['new1'])
										{
											//$md5= md5($new);
											 $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
											 $query="UPDATE `auto_db` SET `phnum`=`$new` WHERE phnum='$phnum'";
											 mysqli_query($conn,$query);
											 $_SESSION['phnum']=$new;
										    header ('Location: http://localhost/spardha/auto/passwd.php?suc');
										}
										else{
											header ('Location: http://localhost/spardha/auto/passwd.php?err');
										}
									}
									//echo $_SESSION['passwd'];
								?>
							 <div class="table-wrapper" style='margin-left: 250px;margin-right: 250px;'>
                            <form action='passwd.php' method='post' >
								<table class="alt">
					
									
									<tbody>
										<tr>
											<td  style="color:black;">Current Password</td>
											<td><input type="text" placeholder="Current Password" class="special" name="phnum" id="ano" /></td>
										</tr>
										<tr>
											<td  style="color:black;">New Password</td>
											<td><input type="password" placeholder="New Password" class="special" name="new" id="dname" /></td>
										</tr>
										<tr>
											<td  style="color:black;">Re-Enter Password</td>
											<td><input type="password" placeholder="Re-Enter Password" class="special" name="new1" id="dname" /></td>
										</tr>
										
																				
												
									</tbody>
									
											
								</table>
								<?php
								if(isset($_GET['err']))
								{
									echo "<h4 style='color:red;'>Password's din't match</h4>";
								}
								else if(isset($_GET['suc']))
								{
									echo "<h4 style='color:green;'>Password Changed Sucessfully</h4>";
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