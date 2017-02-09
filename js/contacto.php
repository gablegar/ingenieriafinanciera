<?php


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$para = 'gerencia@avaluoseingenieriafinanciera.com';
$titulo = 'CONTACTO PAGINA WEB';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\nE-Mail: $email\nAsunto: $asunto\nMensaje:\n$mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://avaluoseingenieriafinanciera.com';
</script>";
} else {
echo 'Fallo el envio';
}
}
?>