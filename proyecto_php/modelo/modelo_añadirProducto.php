<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class Producto {
    private $conn;
    private $table_name = "producto";

    public $Codigo;
    public $Nombre;
    public $Existencias;
    public $ValorVenta;
    public $Referencia;
    public $Descripcion;
    public $Promocion;
    public $Categoria;
    public $Imagen;

    public function __construct($db) {
        $this->conn = $db;
    }

    function create() {
        $query = "INSERT INTO " . $this->table_name . " SET 
            Nombre=:Nombre, 
            Existencias=:Existencias, 
            ValorVenta=:ValorVenta, 
            Referencia=:Referencia, 
            Descripcion=:Descripcion, 
            Promocion=:Promocion, 
            Categoria=:Categoria, 
            Imagen=:Imagen";

        $stmt = $this->conn->prepare($query);

        // Sanitizar y enlazar valores
        $this->Nombre = htmlspecialchars(strip_tags($this->Nombre));
        $this->Existencias = htmlspecialchars(strip_tags($this->Existencias));
        $this->ValorVenta = htmlspecialchars(strip_tags($this->ValorVenta));
        $this->Referencia = htmlspecialchars(strip_tags($this->Referencia));
        $this->Descripcion = htmlspecialchars(strip_tags($this->Descripcion));
        $this->Promocion = htmlspecialchars(strip_tags($this->Promocion));
        $this->Categoria = htmlspecialchars(strip_tags($this->Categoria));
        $this->Imagen = htmlspecialchars(strip_tags($this->Imagen));

        $stmt->bindParam(":Nombre", $this->Nombre);
        $stmt->bindParam(":Existencias", $this->Existencias);
        $stmt->bindParam(":ValorVenta", $this->ValorVenta);
        $stmt->bindParam(":Referencia", $this->Referencia);
        $stmt->bindParam(":Descripcion", $this->Descripcion);
        $stmt->bindParam(":Promocion", $this->Promocion);
        $stmt->bindParam(":Categoria", $this->Categoria);
        $stmt->bindParam(":Imagen", $this->Imagen);

        if ($stmt->execute()) {
            return true;
            header('Location: principalaAdmin.php');
        exit();
        }

        return false;
    }
}
?>

