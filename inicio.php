<?php
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","conexion");
$consulta="SELECT*FROM login where usuario='$usuario' and contraseña='$contraseña'  ";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas) {
	header("location:index.php");
} else{
	include("login.html");
	?>
	<h1 class="bad">ERROR, USUARIO O CONTRASEÑA INCORRECTOS</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
