<?php
require_once 'C:\xampp\htdocs\proyecto_php\modelo\modelo_login.php';
require_once 'C:\xampp\htdocs\proyecto_php\config\dbconect.php';

class Controlador {
    private $usuario;

    public function __construct($conexion) {
        $this->usuario = new Usuario($conexion);
    }

    public function iniciarSesion($correo, $contraseña) {
        if ($this->usuario->verificar($correo, $contraseña)) {
            session_start();
            $_SESSION['correo'] = $correo;
            header("Location: vista/login.php"); 
            exit();
        } else {
            return "Correo o contraseña incorrectos.";
        }
    }

    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: vista.php"); // Redirige a la página de login después de cerrar sesión
        exit();
    }
}

$controlador = new Controlador($conn); // en el parametro de la conexion (conn) inicializa al controlador para poder interactuar con el modelo
?>
