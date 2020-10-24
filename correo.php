<?php
$destinatario = 'fe-bro738@hotmail.com';
$name  = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$asunto = $_POST['asunto'];

$header = "Enviado desde la pagina del portafolio";
echo "hola mundo";
$mensajeCompleto = $message . "\nAtentamente" . $name; 

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script>alert('Correo Enviado Exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>