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
	$attachment = $_FILES['attachment']['tmp_name'];
	$attachment2 = $_FILES['attachment2']['tmp_name'];


		try{
			//$mail->isSMTP();
			$mail->Host = 'server.peindia.net.in';
			$mail->SMTPAuth = true;
			$mail->Username = 'mailsupport@peindia.net.in'; // Gmail address which you want to use as STMP server//
			$mail->Password = 'Peindia@123@123';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = '465';

			$mail->setFrom('mailsupport@peindia.net.in'); // Gmail address which you want to use as STMP server//
			$mail->addAddress('peindiapay@hotmail.com');

			$mail->addAttachment($attachment, $_FILES['attachment']['name']);    // Optional name
			$mail->addAttachment($attachment2, $_FILES['attachment2']['name']);    // Optional name

			$mail->isHTML(true);
			$mail->Subject = "Registration Form Peindia Payments";
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