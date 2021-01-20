    <?php
	
      session_start();
      $_SESSION['start']=1;
      
      
            $name = $_GET['name'];
            $phnum = $_GET['phnum'];
        	$pick_add = $_GET['pick_add'];
	        $pick_area = $_GET['pick_area'];
	        $drop_add = $_GET['drop_add'];
            $drop_area = $_GET['drop_area'];
            $email = $_GET['mail'];
	        $otp = rand(1001,9999);
	        $valied = 0;
            $_SESSION['OTP']= $otp;
            $_SESSION['phnum']= $phnum;
			$_SESSION['mail']=$email;
			$_SESSION['name']=$name;
           
            $msg1="Dear $name,\nThank you for using AutoOla\nyour OTP:$otp";
            $con = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
        	$query = "INSERT INTO `bookings`(`name`, `phnum`, `email`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `otp`, `valied`, `time`,`type`) VALUES ('$name','$phnum','$email','$pick_add','$pick_area','$drop_add','$drop_area','$otp','0',CURRENT_TIMESTAMP,'c')";
            mysqli_query($con,$query);
            file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".urlencode($msg1));
            include_once 'send_email.php';
            header ('Location: http://localhost/spardha/OTP.php');
      
      
    ?>