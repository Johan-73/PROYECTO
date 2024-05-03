<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\proyecto_php\modelo\modelo_login.php';
require_once 'C:\xampp\htdocs\Practicas\Cerezos\proyecto_php\config\dbconect.php';

class Controlador {
    private $usuario;

    public function __construct($conexion) {
        $this->usuario = new Usuario($conexion);
    }

    public function iniciarSesion($correo, $contraseña) {
        if ($this->usuario->verificar($correo, $contraseña)) {
            session_start();
            $_SESSION['correo'] = $correo;
            header("Location: ../index.php"); 
            exit();
        } else {
            return "Correo o contraseña incorrectos.";
        }
    }

    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php"); // Redirige a la página de login después de cerrar sesión
        exit();
    }
}

$controlador = new Controlador($conn); // en el parametro de la conexion (conn) inicializa al controlador para poder interactuar con el modelo

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $mensajeError = $controlador->iniciarSesion($correo, $contraseña);
    if ($mensajeError) {
        echo $mensajeError;
    }
} 


?>