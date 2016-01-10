<?php
session_start();
if( isset($_POST['name']) && strtoupper($_POST['captcha']) == $_SESSION['captcha_id'] )
{
	$to = 'info@softgroup-peru.com'; // Replace with your email
	$subject = 'Mensaje de la Web'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];

	$message = 'Nombre: ' . $_POST['name'] . "\n" .
	           'E-mail: ' . $_POST['email'] . "\n" .
	           'Asunto: ' . $_POST['subject'] . "\n" .
	           'Mensaje: ' . $_POST['message'];

	mail($to, $subject, $message, $headers);
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>