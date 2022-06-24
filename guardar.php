<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$comentarios = $_POST['comentario'];

$consulta = "INSERT INTO login (nombre, apellido, email, usuario, contraseña, telefono, asunto, comentario) VALUES ('$nombre','$apellido','$email', '$usuario', '$contraseña', '$telefono', '$asunto', '$comentarios')";
$resultado = mysqli_query($conexion, $consulta);
if(!$resultado){
	echo "ERROR AL REGISTRARSE";
} else {
	echo "USUARIO REGISTRADO CON EXITO";
}
mysqli_close($conexion);