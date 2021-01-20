<?php
	session_start();
	$otp_entered =$_POST['otp_entered'];
	$otp=$_SESSION['OTP'];
	
	if($otp_entered == $otp) 
	{
		 $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
		 $query="UPDATE `bookings` SET `valied`=1 WHERE otp='$otp'";
		mysqli_query($conn,$query);
		header ('Location: http://localhost/spardha/sucess.php');
	}
	else
	{
		header ('Location: http://localhost/spardha/OTP.php?err');
	}
	
	
?>