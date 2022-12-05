<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include '../../private/creds.php';

$code = rand(1000,9999);
$to = $_POST['email']; //Naar wie de contact form content word gestuurd (rijschoolhouder vierkantewielen@gmail.com)

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$user = 'root';
$pass = '';
$db = new PDO('mysql:127.0.0.1;dbname=vierkantewielendb', $user, $pass);
$result = $db->query("SELECT * from vierkantewielendb.Accounts WHERE Email='$to'");
if ($result->rowCount()>0) {
  $db->query("UPDATE vierkantewielendb.Accounts SET resetpw_token='$code' WHERE email='$to'");
  echo "exists ";
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
    $mail->setFrom('douweduyster@gmail.com', 'Douwe');
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);    
    $mail->Subject = 'Wachtwoord vergeten';
    $mail->Body = 'Vul deze code in om uw wachtwoord te resetten: '. $code;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset code has been sent';
    header('Location: set-new-pass.php');
    // header('Location: index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  }
  else {
    echo "Account with this email doesn't exist.";
    // $db->query("INSERT INTO resetpw.resetpwtable (`email`, `reset_code`) VALUES ('$to', '$code')");
  }

// $db->query("UPDATE resetpw.resetpwtable SET reset_code='$code' WHERE email='$to'");


?>