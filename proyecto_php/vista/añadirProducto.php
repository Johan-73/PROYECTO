<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Añadir Productos</title>
</head>
<body>
<?php
    include('headerAdmin.php');
    ?>
  
    <form action="../controlador/controlador_añadirProducto.php" method="post">
    <label for="Imagen">IMAGEN:</label>
        <input type="file" name="Imagen" id="Imagen" ><br><br>
        
        <label for="Nombre">NOMBRE:</label>
        <input type="text" id="Nombre" name="Nombre" required><br><br>
        
        <label for="Referencia">REFERENCIA:</label>
        <input type="text" id="Referencia" name="Referencia" required><br><br>
        
        <label for="Existencias">CANTIDAD:</label>
        <input type="number" id="Existencias" name="Existencias" required><br><br>
       
        <label for="ValorVenta">VALOR VENTA:</label>
        <input type="text" id="ValorVenta" name="ValorVenta" required><br><br>
   
        <label for="Descripcion">DESCRIPCION:</label>
        <textarea id="Descripcion" name="Descripcion" ></textarea><br><br>
        

        <input type="submit" value="Guardar">
    </form>  
    <?php
    include('footerAdmin.php');
    ?>
</body>
</html>
