
<?php
$msg= "Dear Student,\nWe appreciate your interest to participate in SPARDHA2K19 conducted by SRKR. Now its time for you to present your idea in PPT FORMAT as we have already mentioned. The PPT has to submitted before 15th DEC midnight. Any PPT that is submitted after 15th DEC midnight is not considered for evaluation.  Mail your PPT to spardha2019@gmail.com for submitting it. If Your Team is selected to Grand Finale,you can pay the fee on or before 17th(Tuesday) afternoon,each student in team should pay 600/-.
\n\n\n
NOTE : Make sure that the filename of the PPT should be your team name.
";
$file = fopen('add.csv', 'r');

// fgetcsv($file);
include 'send_email1.php';

// fclose($file);

?>