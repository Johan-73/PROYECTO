<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\proyecto_php\config\dbconect.php';
class usuario {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function verificar($correo, $contraseña) {
        $correo = mysqli_real_escape_string($this->conn, $correo);
        $contraseña = mysqli_real_escape_string($this->conn, $contraseña);
    //esta parte pone todos los caracteres literalmente como están para que no se toman como lenguaje de sql

        $sql = "SELECT * FROM usuario WHERE CORREO='$correo' AND CONTRASENA='$contraseña'";
        $resultado = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($resultado) == 1) {
            return true; 
        } else {
            return false;
        }
        //se pone el ==1 ya que devuelva una sola fila, y así comprobar q el correo y la contraseña corresponden a un solo registro
    }
}
?>
