<?php
$subject = 'New Subscribe'; // Subject of your email
$to = 'info@designesia.com';  //Recipient's E-mail
$emailTo = $_REQUEST['email'];

$name = 'New Subscriber';
$email = $_REQUEST['email'];
$email_from = $name.'<'.$email.'>';

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Sender's E-mail
$headers .= "Return-Path:"."From:" . $email;

$message = 'New subscriber email : ' . $email;

if (@mail($to, $subject, $message))
{
	echo 'sent';
}
else
{
	echo 'failed';
}
?>