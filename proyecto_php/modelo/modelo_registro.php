<?php
require_once 'C:\xampp\htdocs\proyecto_php\config\dbconect.php';

class usuario {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function registrarUsuario($nombre, $correo, $contraseña) {
        $nombre = mysqli_real_escape_string($this->conn, $nombre);
        $correo = mysqli_real_escape_string($this->conn, $correo);
        $contraseña = mysqli_real_escape_string($this->conn, $contraseña);
        // hace lo mismo que en el modelo del login: coge todos los caracteres literalmente y no con posible sintaxis sql

        $sql = "INSERT INTO usuario (NOMBRE, CORREO, CONTRASEÑA) VALUES ('$nombre', '$correo', '$contraseña')";


        if (mysqli_query($this->conn, $sql)) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
