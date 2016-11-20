<?php
	if (!isset($_POST['email'])) {
?>
<?php
	}else{
		$mensaje="Mensaje del formulario de contacto de HobbyFM";
		$mensaje.= "\nNombre: ". $_POST['nombre'];
		$mensaje.= "\nEmail: ".$_POST['email'];
		$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
		$destino= "emotional.girlz@gmail.com";
		$remitente = $_POST['email'];
		$asunto = "Mensaje enviado por: ".$_POST['nombre'];
		mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
<?php
	echo '<h3>Gracias</h3></br><p>Te contactaremos a la brevedad...</p>';
	// function mostrarTexto($.form_message_success){
	// 	echo '<h3>Gracias</h3></br><p>Te contactaremos a la brevedad...</p>';
	// 	echo $.form_message_success;
	// };
?>
<?php
	}
?>



 <?php
 
 if(!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['asunto'])){
 
$to ="tipsytutos@gmail.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['nombre']."\r\n";            
$tema="Contacto desde el Sitio Web";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto</strong></td>
    <td width='80%' align='left'>$_POST[asunto]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
    <td align='left'>$_POST[mensaje]</td>
  </tr>
</table>
";
@mail($to,$tema,$mensaje,$headers); 
     echo "Su mensaje ha sido enviado.<br /><a href='contacto.html'>Volver</a>";
} else {
    echo "No se puede enviar el formulario, verifica los campos";
}
?>