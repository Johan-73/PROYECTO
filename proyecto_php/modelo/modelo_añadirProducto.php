<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class modelo_añadirProducto {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function create($Nombre, $Referencia, $Existencias, $Categoria, $ValorVenta, $Descripcion) {
       
        $sql = "INSERT INTO producto (Nombre, Referencia, Existencias, Categoria, ValorVenta, Descripcion) VALUES ('$Nombre', '$Referencia', '$Existencias','$Categoria','$ValorVenta','$Descripcion')";

        if (mysqli_query($this->conn, $sql)) {
            return true; 
        } else {
            return false; 
        }
    }
}

?>

