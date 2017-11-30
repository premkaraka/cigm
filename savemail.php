<?php
require 'phpmailer/PHPMailerAutoload.php';
include 'db.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$mailid=$_POST['mail'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'htnmission.org';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'web@htnmission';                 // SMTP username
$mail->Password = 'QRKk#RY0';                           // SMTP password
$mail->SetFrom('web@htnmission.org', 'htn');
$mail->SetFrom($mailid, 'First Last');
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to
$mail->SMTPDebug  = 0;  
$mail->From = $mailid;
$mail->FromName = $name;
$mail->addAddress('web@htnmission.org', 'Prem');     // Add a recipient
               // Name is optional
$mail->addReplyTo($mailid, $name);
$mail->addCC('htnprabhukiran@yahoo.co.in');
//$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $sub;
$mail->Body    = 'name:'.$name.'<br/>phone:'.$phone.'<br/>SenderMail:'.$mailid.'<br/>phone:'.$phone.'<br/>Message:'.$message;
//mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   header("Location:contact.php?s=1");
}


?>

