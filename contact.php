<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>

body{
	color: #fc036b;
	color:#bf0854;
	}
	</style>
	<title>Contact Us</title>
</head>
<body>

<?php include 'header.php';
require_once 'dbConnect.php';
?>
<div class=" container">
<div class="row justify-content-center">
<div class="card col-md-4" style="width: 50rem;">
<div class="card-body">
<h5 class="card-title">Email us</h5>
<form action="" method="POST">
<div class="form-elements col-8">
	<div class="form-elementscol-mb-4">
		<i class="bi bi-person-fill"></i>
		<label for="name">Reason For Contact</label>
		<input type="text" name="rcontact" id="name" class="form-control form-control-sm validate">
	</div>

	<div class="col-mb-4">
		<i class="bi bi-envelope-fill"></i>
		<label for="email_address">Email address</label>
		<input type="email" name="email" id="email_address" class="form-control form-control-sm validate">
	</div>

	<div class="col-md-4">
		<label for="message">Message</label>
		<textarea name="message" id="message" cols="200" rows="10" class="form-control form-control-sm validate"></textarea>
	</div>
	<div class="col-md-4">
	<button class="btn btn-outline-secondary" name = "send">send</button>
	</div>
</div>
</form>
</div>
</div>
</div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['send'])) {
# code...
//get values
$to = $_POST['email'];
$subject = $_POST['rcontact'];
$message =$_POST['message'];

sendEmail($subject,$message,$to);
}


function sendEmail($subject,$message,$to){


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//config
$username = "fashionfixsup@gmail.com";
$password = "Qwerty254";
//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = $username;                     //SMTP username
$mail->Password   = $password;
$mail->SMTPSecure = 'tls';                              //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom($username, 'Fashion-Fix');
//$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
$mail->addAddress($to);               //Name is optional
/*$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

//Attachments
/* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   //Optional name

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$send =$mail->send();
echo 'message sent successfully';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>


</body>

</html>
