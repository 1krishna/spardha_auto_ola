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
					<li><a href="regis_auto.php">Dashboard</a></li>
					<!-- <li><a href="search_auto.php">search auto</a></li>
					<li><a href="trips_auto.php">trips auto</a></li> -->
					<li><a href="id_search.php">ID Search</a></li>
					<li><a href="session.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Dashboard</h2>
						
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
									<div class="container">
					<a href="regis_auto.php" style='margin-left: 380px; margin-right:10px' class="button">Auto Registration</a>
					<a href="regis_cab.php" class="button alt" >Cab Registration</a></div><br>
							<header class="align-center">
								<h2>Register a Auto</h2>
								
							</header>

							<?php
								session_start();
								if(!(isset($_SESSION['admin'])))
				   				{
					  				header ('Location: http://localhost/spardha/admin/index.php');
				   				}
								if(isset($_POST['name'])&&isset($_POST['num'])&&isset($_POST['phnum'])&&isset($_POST['spcode'])&&isset($_POST['passwd']))
								{
									
									$name = $_POST['name'];
									$num = $_POST['num'];
									$phnum = $_POST['phnum'];
									$passwd = $_POST['passwd'];
									$spcode =$_POST['spcode'];
									$md5 = md5($passwd);
									$conn = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
									$query ="INSERT INTO `auto_db`(`regnum`, `name`, `phnum`, `passwd`, `spcode`, `type`) VALUES ('$num','$name','$phnum','$md5','$spcode','a')";
									mysqli_query($conn,$query);
									header('Location:http://localhost/spardha/admin/regis_auto.php?done');
									$msg1="Dear $name,\nYour are Subscribed\nYour UserId:$phnum\np\Password:$passwd\nYour Spcode:$spcode";
									//file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".urlencode($msg1));
								}
							
							?>
						
                            <div class="table-wrapper" style='margin-left: 200px;margin-right: 200px;'>
                            <form action='regis_auto.php' method='post' onsubmit='return validate();'>
								<table class="alt">
									
									<tbody>
									
										<tr>
											<td  style="color:black;">Auto Registration Number</td>
											<td><input type="text" value="" class="special" name="num" id="num" /><span id="errnu" style='color:red;' ></span></td>
										</tr>
										<tr>
											<td  style="color:black;">Driver Name </td>
											<td><input type="text" value="" class="special" name="name" id="name" /><span id="errna" style='color:red;' ></span></td>
										</tr>
										
										<tr>
											<td  style="color:black;">Mobile</td>
											<td><input type="text" value="" class="special" name="phnum" id="phnum" /><span id="errp" style='color:red;' ></span></td>
										</tr>
										
										<tr>
											<td  style="color:black;">Password</td>
											<td><input type="text" value="" class="special" name="passwd" id="passwd" /><span id="pas" style='color:red;' ></span></td>
										</tr>
								
										<tr>
											<td  style="color:black;">Special Code</td>
											<td><input type="text" value="" class="special" name="spcode" id="spcode" /><span id="sp" style='color:red;' ></span></td>
										</tr>
										<?php
										
										?>
										
									</tbody>
									
											
								</table>
								<input type="checkbox" id="human" name="human" >
								<label  style="color:black;" for="human">I agree the terms and Conditions</label>
							<span id="check" style='color:red;' ></span></br>
							<?php 
								if(isset($_GET['done']))
								{
									echo "<h4 style='color:green;'>Succesfully Registered</h4>";
								}
							
							?>
							<input type="submit" value="Register" class="special" style='margin-left: 420px;'/>
									
							</form>
							
						</div>
					</div>
				</div>
			</section>


			<SCRIPT type='text/javascript'>
	function validate() {
		var name = document.getElementById('name').value;
		var phnum = document.getElementById('phnum').value;
        var num = document.getElementById('num').value;
		var passwd = document.getElementById('passwd').value;
		var spcode = document.getElementById('spcode').value;

		document.getElementById("errna").innerHTML="";
		document.getElementById("errnu").innerHTML="";
		document.getElementById("errp").innerHTML="";
		document.getElementById("pas").innerHTML="";
		document.getElementById("sp").innerHTML="";

		
		
		var re=true;
		
		nm = /^[A-Za-z ]*$/; 
		if (name.length<=4  || !nm.test(name)) 
		{
			document.getElementById("errna").innerHTML="Enter A Valid Name Of Minimun 5 Characters";
			re=false;
		}
        
        rn = /^[0-9]{12}$/; 
		if(!rn.test(phnum))
		{
			document.getElementById("errp").innerHTML="Enter A Valid Number Of 12 Digits including[91]";
			re=false;
		}
 
		if(num.length!=10)
		{
			document.getElementById("errnu").innerHTML="Enter A Valid Number Of Auto Number";
			re=false;
		}

	   if(passwd.length<=8)
	   {
		document.getElementById("pas").innerHTML="Enter A Valid Password";
        re=false;
	   }

	   
	   if(spcode.length<8)
	   {
		document.getElementById("sp").innerHTML="Enter A Special Code Of 8 digits";
        re=false;
	   }

	   if(!document.getElementById("human").checked)
	   {
		document.getElementById("check").innerHTML="Please Accept Terms And Conditions";
		re=false;
		
	   }
		return re;


	}
</SCRIPT>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>