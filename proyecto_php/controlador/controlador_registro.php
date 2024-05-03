<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\proyecto_php\modelo\modelo_registro.php';
require_once 'C:\xampp\htdocs\Practicas\Cerezos\proyecto_php\config\dbconect.php';

class controlador
{
    private $usuario;

    public function __construct($conexion)
    {
        $this->usuario = new Usuario($conexion);
    }

    public function registrarUsuario($nombre, $correo, $contrasena)
    {
        return $this->usuario->registrarUsuario($nombre, $correo, $contrasena);
    } //crea un nuevo registro en la base de datos
}

$controlador = new Controlador($conn); // Instancia del controlador

$registro_exitoso = false;
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    if ($controlador->registrarUsuario($nombre, $correo, $contraseña)) {
        header("Location: ../index.php?view=login"); //para redirigir al usuario a la pagina de inicio de sesion
        exit();
    } else {
        $error = "Error al registrar el usuario.";
        echo $error;
    }
}
