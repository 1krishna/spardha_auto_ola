<HTML>
<HEAD>
</HEAD>
<BODY>

<?php

  require_once('email/class.phpmailer.php');
  //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "jaswanth2273";  // GMAIL username
  $mail->Password   = "7989220722@3457";            // GMAIL password

  $mail->SetFrom('jaswanth2273@gmail.com', 'Auto.Ola, booking'); // Change the name as you want
  $mail->Subject    = "AutoOla Processing Booking";
  $mail->Body = "$msg1";
  $mail->AddAddress("$row[9]");

  $mail->Send();

 // echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
</BODY>
</HTML>
