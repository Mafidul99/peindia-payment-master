<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert = '';

if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$Mobile = $_POST['phone'];
$email = $_POST['email'];
$aadhaar = $_POST['aadhaar'];
$pan = $_POST['pan'];
$add = $_POST['add'];
$message = $_POST['message'];

	try{
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'mafidul.peindia@gmail.com'; // Gmail address which you want to use as STMP server//
		$mail->Password = 'India12#';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';

		$mail->setFrom('mafidul.peindia@gmail.com'); // Gmail address which you want to use as STMP server//
		$mail->addAddress('mdonline192@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = "Peindia Payments";
		$mail->Body = "<h3> Name : $name <br> Mobile Number : $Mobile <br> Email ID : $email 
		<br> Aadhaar Number : $aadhaar <br> Pan Card Number : $pan <br> Full Address : $add <br> Message : $message</h3>";


		$mail->send();
		//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
		$_SESSION['status'] = "Registration Successfully ! Our team will contact with you very soon";
		$_SESSION['status_code'] = "success";
	}catch (Exception $e){
		//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
		$_SESSION['status'] = "Registration Not Successfull ! Plaese try again";
		$_SESSION['status_code'] = "success";
	}
}
?>