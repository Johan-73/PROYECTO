<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class modelo_registro {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function registrarUsuario($nombre, $correo, $contrasena) {
        $nombre = mysqli_real_escape_string($this->conn, $nombre);
        $correo = mysqli_real_escape_string($this->conn, $correo);
        $contrasena = mysqli_real_escape_string($this->conn, $contrasena);
        // hace lo mismo que en el modelo del login: coge todos los caracteres literalmente y no con posible sintaxis sql

        $sql = "INSERT INTO usuario (NOMBRE, CORREO, CONTRASENA) VALUES ('$nombre', '$correo', '$contrasena')";

        if (mysqli_query($this->conn, $sql)) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
