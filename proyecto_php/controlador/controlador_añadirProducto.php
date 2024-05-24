<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\modelo\modelo_añadirProducto.php';
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';
class Productocontrolador
{
    private $producto;

     //Conexion con el modelo
    public function __construct($conexion)
    {
        $this->producto = new modelo_añadirProducto($conexion);
    }

    public function create($Nombre, $Referencia, $Existencias, $ValorVenta, $Descripcion)
    {
        return $this->producto->create($Nombre, $Referencia, $Existencias, $ValorVenta, $Descripcion);
    } // manda a crear un nuevo registro en la base de datos
}

$controlador = new ProductoControlador($conn); // Instancia del controlador

$registro_exitoso = false;
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['Nombre'];
    $Referencia = $_POST['Referencia'];
    $Existencias = $_POST['Existencias'];
    $ValorVenta = $_POST['ValorVenta'];
    $Descripcion = $_POST['Descripcion'];

    if ($controlador->create($Nombre, $Referencia, $Existencias, $ValorVenta, $Descripcion)) {
        header("Location: ../vista/principalAdmin.php?view=login"); //para redirigir al administrador a la pagina principal
        exit();
    } else {
        $error = "Error al registrar producto.";
        echo $error;
    }
}



?>
