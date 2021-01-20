<?php
	if(isset($_GET['id']) && isset($_GET['pri']))
	{
		$id =$_GET['id'];
		$pri =$_GET['pri'];
		$phnum_a = $_GET['phnum'];
		$_SESSION['x'] = $phnum;
        $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
        $query = "SELECT `phnum` FROM `bookings` WHERE id='$id'";
        $result = mysqli_query($conn,$query);
		$row = mysqli_fetch_row($result);
		echo $row[0];
		$msg1="Dear Customer,\nplease confirm the fair details of your Booking ID:$id\nQouted With price : $pri\n by click link: http://localhost/spardha/auto/user.php?id=$id&pri=$pri";
		file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$row[0]."&message=".urlencode($msg1));
		
		header ('Location: http://localhost/spardha/auto/user.php?id='.$id.'&pri='.$pri);
	}


?>