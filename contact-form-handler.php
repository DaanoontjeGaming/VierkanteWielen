<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$name = $_POST['name']; //Naam van bezoeker
$email= $_POST['email']; //mail van bezoeker
$subject = $_POST['subject']; //onderwerp
$message= $_POST['message']; //bericht van bezoeker

$to = "vincenthulsebos@gmail.com"; //Naar wie de contact form content word gestuurd (rijschoolhouder vierkantewielen@gmail.com)
$servermail = ''; //Email die gebruikt word om mails te versturen
$servermailpass = ''; //Email app wachtwoord (anders als normaal WW zie https://myaccount.google.com/u/0/apppasswords)


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $servermail;
    $mail->Password   = $servermailpass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;                                
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);    
    $mail->Subject = $subject;
    $mail->Body = 'From ' . $email . '<br></br><br></br>' . $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}