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
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];	
	$gender = $_POST['gender'];	
	$dateofbrith = $_POST['dateofbrith'];	
	$aadhaar = $_POST['aadhaar'];
	$pan = $_POST['pan'];	
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$adhadd = $_POST['adhadd'];
	$married = $_POST['married'];
	$vcode = $_POST['vcode'];
	$bankcsp = $_POST['bankcsp'];
	$Qual = $_POST['Qual'];
	$cspadd = $_POST['cspadd'];
	$sname = $_POST['sname'];
	$attachment = $_FILES['attachment10']['tmp_name'];
	$attachment1 = $_FILES['attachment11']['tmp_name'];
	$attachment2 = $_FILES['attachment12']['tmp_name'];
	$attachment3 = $_FILES['attachment13']['tmp_name'];


		try{
			//$mail->isSMTP();
			$mail->Host = 'server.peindia.net.in';
			$mail->SMTPAuth = true;
			$mail->Username = 'mailsupport@peindia.net.in'; // Gmail address which you want to use as STMP server//
			$mail->Password = 'Peindia@123@123';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = '465';

			$mail->setFrom('mailsupport@peindia.net.in'); // Gmail address which you want to use as STMP server//
			$mail->addAddress('peindiacsp@gmail.com');

			$mail->addAttachment($attachment);    // Optional name
			$mail->addAttachment($attachment1);    // Optional name
			$mail->addAttachment($attachment2);    // Optional name
			$mail->addAttachment($attachment3);    // Optional name

			$mail->isHTML(true);
			$mail->Subject = "Registration Form Peindia Payments";
			$mail->Body = "<h3> Name : $name <br> 
								Father Name : $fname <br> 
								Mother Name : $mname <br>
								Gender : $gender <br>
								Date Of Birth : $dateofbrith <br>								
								Aadhaar Number : $aadhaar <br>
								Pan Card Number : $pan <br> 
								Email ID : $email <br>  
								Mobile Number : $phone <br> 
								Aadhaar Address : $adhadd <br> 
								Are you Married : $married <br> 								
								Voter Card Number : $vcode <br>	
								Select CSP Bank : $bankcsp <br>										
								Qualification : $Qual <br> 
								CSP Location Address : $cspadd <br>
								Spouse Name : $sname <br>
								</h3>";


			

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