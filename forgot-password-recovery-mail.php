<?php
if(!class_exists('PHPMailer')) {
  require 'PHPMailer/PHPMailerAutoload.php';
	require('PHPMailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["userEmail"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "/reset/mc123/124@/7689/1331@/project/home/reset/reset_password.php?name=" . $user["userEmail"] . "'>" . PROJECT_HOME . "/reset/mc123/124@/7689/1331@/project/home/reset/reset_password.php?name=" . $user["userEmail"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["userEmail"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = ' Problem in Sending Password Recovery Email';
} else {
	$success_message = ' Recovery link for reset password sent! Please check your email to reset password!';
}

?>
