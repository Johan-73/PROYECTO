<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class modelo_producto{
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }
public function registroProducto($Codigo, $Nombre, $Existencias, $ValorVenta, $Referencia, $Descripcion, $Categoria){
    //Con la funcion "mysqli_real_escape_string" se le quitan los caracteres especiales a los datos de entrada, para evitar que un usuario haga consultas malintencionadas en la BD
    $Codigo = mysqli_real_escape_string($this->conn, $Codigo);
    $Nombre = mysqli_real_escape_string($this->conn, $Nombre);
    $Existencias = mysqli_real_escape_string($this->conn, $Existencias);
    $ValorVenta = mysqli_real_escape_string($this->conn, $ValorVenta);
    $Referencia = mysqli_real_escape_string($this->conn, $Referencia);
    $Descripcion = mysqli_real_escape_string($this->conn, $Descripcion);
    $Categoria = mysqli_real_escape_string($this->conn, $Categoria);
    
    $sql = "INSERT INTO producto (CODIGO, NOMBRE, EXISTENCIAS, VALORVENTA, REFERENCIA, DESCRIPCION) VALUES ('$Codigo', '$Nombre', '$Existencias', '$ValorVenta', '$Referencia', '$Descripcion')";

    if (mysqli_query($this->conn, $sql)) {
        return true; 
    } else {
        return false; 
    }

}







}





?>
