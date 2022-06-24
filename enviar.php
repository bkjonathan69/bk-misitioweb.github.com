<?php
// LLamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sitio = $_POST['sitio'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "jonathanantonioh02@gmail.com";
$asunto = "Contacto desde nuestra web";


$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Sitio web: $sitio";
$carta = "De: $asunto \n";
$carta = "De: $mensaje \n";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('Location: enviomensaje.html')

?>
