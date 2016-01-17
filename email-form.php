<?php
if($_POST["Send"]) {
    $recipient="jovante.hill@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Email Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
	sleep(1);
	header("Location:thankyou.html"); // Set here redirect page or destination page
}
?>
