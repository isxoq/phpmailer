<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.mail.ru";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "jonatuvchi pochtasi";                 
$mail->Password = "paroliz";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "isxoqjon_7710@mail.ru";
$mail->FromName = "Isxoqjon Axmedov";

$mail->addAddress("emardonbek@bk.ru", "Mardonbek");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}