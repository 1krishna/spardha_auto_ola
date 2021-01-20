<HTML>

<HEAD>
</HEAD>

<BODY>

  <?php

  require_once('email/class.phpmailer.php');
  // include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "spardha2019";  // GMAIL username
  $mail->Password   = "spardha2k19@421";            // GMAIL password

  $mail->SetFrom('spardha2019@gmail.com', 'SRKR, SPARDHA2K19'); // Change the name as you want
  $mail->Subject    = "Spardha PPT Submission Alert.";
  $mail->Body = $msg;
  $mail->AddAddress("17b91a1210@srkrec.edu.in");
  $mail->Send();

  // echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
</BODY>

</HTML>