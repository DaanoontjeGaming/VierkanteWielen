<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$servermail = 'douweduyster@gmail.com'; //Email die gebruikt word om mails te versturen
$servermailpass = 'ufisxwmqdlejewnv'; 
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $servermail;
    $mail->Password   = $servermailpass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;                                
    //Recipients
    $mail->setFrom('douweduyster@gmail.com', 'Douwe');
    $mail->addAddress('vincenthulsebos@gmail.com');

    //Content
    $mail->isHTML(true);    
    $mail->Subject = 'tessssssssssst';
    $mail->Body = 'test';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset code has been sent';
    // header('Location: index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}