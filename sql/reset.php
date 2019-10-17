<?php
require_once('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST) & !empty($_POST)){
	/*$username = mysqli_real_escape_string($db, $_POST['email']);
	$sql = "SELECT * FROM `user` WHERE email = '$username'";
	$res = mysqli_query($db, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){*/
	$subject = "Your Recovered Password";
	$message = "Please use this password to login ";
		$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "pushkalvaidya1@gmail.com";

$mail->SetFrom("pushkalvaidya1@gmail.com", "pushkalvaidya1@gmail.com");
$mail->AddAddress("souju387@gmail.com");

$mail->Subject = "$subject";
$mail->Body = "$message";
$mail->Send();
		
		
		
		
		
		
	/*	$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$to = $r['email'];
		
 
		
		$headers = "From : pushkalvaidya1@gmail.com";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}
 
	}else{
		echo "User name does not exist in database";
	}*/
}
 
 
?>