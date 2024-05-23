<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class modelo_registro
{
    private $conn;

    public function __construct($conexion)
    {
        $this->conn = $conexion;
    }

    public function registrarUsuario($nombre, $correo, $contrasena, $telefono, $fechaNacimiento)
    {

        //Con la funcion "mysqli_real_escape_string" se le quitan los caracteres especiales a los datos de entrada, para evitar que un usuario haga consultas malintencionadas en la BD
        $nombre = mysqli_real_escape_string($this->conn, $nombre);
        $correo = mysqli_real_escape_string($this->conn, $correo);
        $contrasena = mysqli_real_escape_string($this->conn, $contrasena);
        $telefono = mysqli_real_escape_string($this->conn, $telefono);
        $fechaNacimiento = mysqli_real_escape_string($this->conn, $fechaNacimiento);
        // hace lo mismo que en el modelo del login: coge todos los caracteres literalmente y no con posible sintaxis sql

        $sql1 = "INSERT INTO usuario (NOMBRE, CORREO, CONTRASENA) VALUES ('$nombre', '$correo', '$contrasena')";

        // con este if valido que si el registro en usuario es exitoso entonces proceda a ingresarme en la tabla cliente
        if (mysqli_query($this->conn, $sql1)) {
            $sql2 = "SELECT * FROM usuario WHERE CORREO='$correo' AND CONTRASENA='$contrasena'";
            $resultado = mysqli_query($this->conn, $sql2);

            if (mysqli_num_rows($resultado) == 1) {
                //metodo que obtiene la siguiente fila
                $row = mysqli_fetch_row($resultado);
                $IdCliente = $row[0];
                $sql3 = "INSERT INTO cliente (IdCliente, TELEFONO, FECHANACIMIENTO) VALUES ($IdCliente,'$telefono', '$fechaNacimiento')";
                if (mysqli_query($this->conn, $sql3)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}
