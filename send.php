<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$poblacion = $_POST['poblacion'];
$sexo=$_POST['GrupoOpciones1'];
$radio= $_POST['GrupoOpciones2'];
$opinion=$_POST['opinion'];
$header = 'From: ' . $mail . ", de la población ".$poblacion."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "persona contacto" . $_POST['GrupoOpciones2'] . " \r\n";
$mensaje .= "mensaje".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alexdura13@gmail.com;
$asunto = 'Contacto Pagina Web';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Muchas Gracias! Mensaje Enviado Correctamente';

?>