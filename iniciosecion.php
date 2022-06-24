<?php
 
include('conexion.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>