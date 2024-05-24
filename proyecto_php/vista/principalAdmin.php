<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/cerezossinfondo.png" />
    <link rel="stylesheet" href="../assets/css/stylesAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62e783ab37.js" crossorigin="anonymous"></script>
    <title>CEREZOS</title>
</head>

<body>
    <?php
    include('headerAdmin.php');
    ?>

    <section class="tablaAdmin">
  
        <?php
            //Esta variable se utiliza para saber que vista es a la que hace refencia
            $view = '';

            //isset determina si el valor es diferente de null
            if (isset($_GET["view"])) {
                //Asigno lo que trae el parametro view a la variable $view
                $view = $_GET["view"];
            }

            //En este switch definimos que se va a mostrar entre el header y el footer
            // switch ($view) {
            //     case 'login':
            //         include('vista/login.php');
            //         break;
            //     case 'registro':
            //         include('vista/registro.php');
            //         break;
            // }

                
            // if(ff){
            //     while(dd){

            //     }
                
            // }
        ?>
        <h1>
            <input type="text" id="Nombre" name="Nombre">
        </h1>
        

        <table>
            <tr>
                <th>REFERENCIA</th>
                <th>NOMBRE</th>
                <th>EXISTENCIAS</th>
                <th>VALOR VENTA</th>
                <th>DESCRIPCION</th>
                <th>PROMOCION</th>
                <th>CATEGORIA</th>
                <th>Botones EL/ACT</th>
            </tr>
            
                <?php
                    require_once 'C:\xampp\htdocs\Practicas\Cerezos\PROYECTO\proyecto_php\config\dbconect.php';

                    $consultaREFERENCIA = "SELECT Referencia, Nombre, Existencias, ValorVenta, Descripcion, Promocion, Categoria FROM producto";
                    $resultadoREFERENCIA = $conn->query($consultaREFERENCIA);

                    if($resultadoREFERENCIA->num_rows > 0){
                        while($fila = $resultadoREFERENCIA->fetch_assoc()){
                            echo "<tr><td>" .$fila["Referencia"] . "</td><td>" .$fila["Nombre"] . "</td><td>" . $fila["Existencias"] . 
                                "</td><td>" . $fila["ValorVenta"] . "</td><td>" . $fila["Descripcion"] . "</td><td>" . $fila["Promocion"] .
                                "</td><td>" . $fila["Categoria"] . "</td>".
                                "<td><button>
                                <a href='editarProducto.php'> 
                                     <i class='fa-regular fa-pen-to-square'></i>
                                </a>
                                <button>
                                <i class='fa-solid fa-trash-can'></i>           
                                </button></td></tr>" ;
                        }
                    } else {
                        echo "<tr><td colspan='2'>No se encontraron resultados</td></tr>";
                        }
                     $conn->close();
                ?>
         
        </table>

        <div class="boton-añadir">
            <button>
                <a href="añadirProducto.php">+ Añadir Producto</a>
            </button> 
            
        </div>
        
    </section>
    

    <?php
    include('footerAdmin.php');
    ?>
</body>

</html>