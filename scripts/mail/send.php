<?php
// For sending automated mail from order.php //
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.null.nah';
$mail->SMTPAuth = true;
$mail->Username = 'noreply@null.nah';
$mail->Password = '';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = 'noreply@null.nah';
$mail->FromName = 'VPN Order System';
$mail->addAddress('me@null.nah', 'Liam Reed');
$mail->isHTML(true);

$mail->Subject = $_POST['emailAddress'].=' - Order';
$mail->Body    = $_POST['emailBody'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'System Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
