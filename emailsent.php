<?php
include('C:/xampp/htdocs/mail/PHPMailerAutoload.php');
include('C:/xampp/htdocs/mail/class.smtp.php');
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth= true;
$mail->SMTPSecure='t1s'; //transport layer security protocol
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username= 'ujjawala397@gmail.com';

$mail->Password = 'pwd';
$mail->Subject = 'hello';
$mail->Body = 'mail';
$mail->addAddress('ujjawala397@gmail.com');
$mail->Send();
if(!$mail->Send())
{
	echo "message not sent";
}
else
{
	echo "message  sent";
}
?>
