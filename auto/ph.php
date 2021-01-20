<?php 
session_start();
$id=$_SESSION['id'];
$pri=$_SESSION['pri'];
$valied=$_GET['valied'];
$phnum=$_SESSION['x'];
echo $valied;
 $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
if($valied == '3')
{
	$msg = "your booking confirmed for booking id :".$id."Customer ph.num :".$phnum;
	file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".urlencode($msg));
	$query1="UPDATE `bookings` SET `valied`=3 WHERE id='$id'";
	$query2="UPDATE `responses` SET `valied`=1 WHERE id='$id',phnum='$phnum'";
	mysqli_query($conn,$query1);
	mysqli_query($conn,$query2);
	//session_destroy();
	header ('Location: http://localhost/spardha/auto/user.php?id='.$id.'&pri='.$pri.'&cm&yes');
}

else if($valied == '2')
{
	$msg = "your booking is cancelled for booking id :".$id;
	file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".urlencode($msg));
	$query1="UPDATE `bookings` SET `valied`=2 WHERE id='$id'";
	mysqli_query($conn,$query1);
	header ('Location: http://localhost/spardha/auto/user.php?id='.$id.'&pri='.$pri.'&err');
}
            		
?>