<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$to = "emotional.girlz@gmail.com";

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = nl2br($_POST['message']);
if($nombre == "" || $email == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envio</div>';
else:
	$mail->From = $email;
	$mail->addAddress($to);
	$mail->isHtml(true);
	$mail->Body = '<strong>'.$nombre.'</strong> le ha enviado el siguiente mensaje: </br><p>'.$mensaje.'</p>';
	$mail->CharSet = 'UTF-8';
	$mail->send();
endif;

	if(!$mail->send()){
		echo 'Mensaje no pudo ser enviado';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else{
		echo 'Mensaje ha sido enviado';
	}
?>