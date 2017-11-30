<?php

require 'phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$mailid = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com.';  // Specify main and backup SMTP servers
$mail->Port = 587;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'changegospelministries@gmail.com';                 // SMTP username
$mail->Password = 'kannuris80';                           // SMTP password
$mail->SetFrom('changegospelministries.org', 'cgmi');
$mail->SetFrom($mailid);
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->SMTPSecure = 'tls';                            // Enable 
                                   // TCP port to connect to
$mail->SMTPDebug = 0;
$mail->From = $mailid;
$mail->FromName = $name;
$mail->addAddress('htnprem@gmail.com', 'Prem');     // Add a recipient
// Name is optional
$mail->addReplyTo($mailid, $name);
$mail->addCC('reubenraj@gmail.com');
//$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body = 'name:' . $name . '<br/>phone:' . $phone . '<br/>SenderMail:' . $mailid . '<br/>phone:' . $phone . '<br/>Message:' . $message;
//mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location:contact.php?s=1");
}
?>

