<?php
session_start();

require_once 'C:\xampp\htdocs\proyecto_php\config\dbconect.php';
require_once 'C:\xampp\htdocs\proyecto_php\controlador\controlador_login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $mensajeError = $controlador->iniciarSesion($correo, $contraseña);
    if ($mensajeError) {
        echo $mensajeError;
    }
}
?>