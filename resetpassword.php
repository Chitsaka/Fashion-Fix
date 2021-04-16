<?php
/**
 * File
 *
 * Main navigation of the website
 *
 * @Category Components
 * @package  WordPress
 * @author   Lucky Katana <luckykatana73@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://fashionfix.netlify.app
 * @since    1.0.0
 */

?>

<?php
require_once 'dbConnect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!--icons
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
-->
<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--css styles-->
<link rel="stylesheet" href="styles.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
	<form action="" method="POST">
		<h2>Reset password</h2>
		<div>
	<div class="md-form form-sm mb-5">
	<input type="email" name="email" class="form-control form-control-sm validate" id="resetpass">
	</div>

	<button class="btn btn-outline-secondary" name = "send">Reset Password</button>
	</div>
</form>
	</div>

	<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['send'])) {
# code...
//get values
$to = $_POST['email'];
$subject = "here is your new password";
$message ="hello there";

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
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = $username;                     // SMTP username
$mail->Password   = $password;
$mail->SMTPSecure = 'tls';                              // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom($username, 'Fashion-Fix');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress($to);               // Name is optional
/*$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

//Attachments
/* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name!

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$send =$mail->send();
echo 'Reset password has been sent to your email.';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
</body>
</html>