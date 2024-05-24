<?php
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\modelo\modelo_añadirProducto.php';
require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

class ProductoController {
    public function agregarProducto() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = new producto($this->getConnection());

            // Setear propiedades del producto
            $producto->Nombre = $_POST['Nombre'];
            $producto->Existencias = $_POST['Existencias'];
            $producto->ValorVenta = $_POST['ValorVenta'];
            $producto->Referencia = $_POST['Referencia'];
            $producto->Descripcion = $_POST['Descripcion'];
            $producto->Imagen = $_POST['Imagen']; // Este sería el nombre de la imagen, puedes manejar la carga de archivos aparte

            // Intentar crear el producto
            if ($producto->create()) {
                // Producto creado exitosamente, redireccionar o mostrar mensaje de éxito
                header("Location: mensaje.php?mensaje=Producto creado exitosamente");
                exit();
            } else {
                // Error al crear el producto, redireccionar o mostrar mensaje de error
                header("Location: mensaje.php?mensaje=Error al crear el producto");
                exit();
            }
        }
    }

    private function getConnection() {
        // Código para establecer la conexión a la base de datos
        // Debes reemplazar estas líneas con tu código de conexión real
        $host = 'localhost';
        $db_name = 'tu_base_de_datos';
        $username = 'tu_usuario';
        $password = 'tu_contraseña';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
?>
