<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$Mobile = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
if($name=='' || $Mobile=='' || $email=='' || $message==''){
	echo "</script>alert('All fields are required !')</script>";
} else {

$from       = "Peindia Digital.";
$webmaster  = "mdonline192@gmail.com"; //It's web master mail info@example.com
$to         = "mafidul.peindia@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From Peindia Digital.";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Mobile :".$_POST['phone']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

 if (mail($to, $subject, $message, $headers));

 echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
 echo "<script>window.open('contact-us.php?sent=Your Form Has been Submited','_self')</script>";
}
}

?>