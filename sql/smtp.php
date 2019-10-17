use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.example.com";

$mail->SetFrom("$from", "$from");
$mail->AddAddress("$to");

$mail->Subject = "$subject";
$mail->Body = "$message";
$mail->Send();