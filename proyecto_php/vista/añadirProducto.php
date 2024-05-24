<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/img/cerezossinfondo.png" />
    <link rel="stylesheet" href="../assets/css/stylesAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62e783ab37.js" crossorigin="anonymous"></script>
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
        
        <label for="Existencias">EXISTENCIAS:</label>
        <input type="number" id="Existencias" name="Existencias" required><br><br>

        <label for="Categoria">CATEGORIA:</label>
        <input type="number" id="Categoria" name="Categoria" required><br><br>
       
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
    include('footerAdmin.php');
    ?>
</body>
</html>
