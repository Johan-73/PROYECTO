<?php
require_once 'C:\xampp\htdocs\proyecto_php\modelo\modelo_registro.php';
require_once 'C:\xampp\htdocs\proyecto_php\config\dbconect.php';

class controlador {
    private $usuario;

    public function __construct($conexion) {
        $this->usuario = new Usuario($conexion);
    }

    public function registrarUsuario($nombre, $correo, $contraseña) {
        return $this->usuario->registrarUsuario($nombre, $correo, $contraseña);
    } //crea un nuevo registro en la base de datos
}
?>
