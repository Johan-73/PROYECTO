<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/cerezossinfondo.png" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62e783ab37.js" crossorigin="anonymous"></script>
    <title>CEREZOS</title>
</head>

<body>
    <?php
    include('vista/header.php');
    ?>

    <section>

        <?php
        //Esta variable se utiliza para saber que vista es a la que hace refencia
        $view = '';

        //isset determina si el valor es diferente de null
        if (isset($_GET["view"])) {
            //Asigno lo que trae el parametro view a la variable $view
            $view = $_GET["view"];
        }

        //En este switch definimos que se va a mostrar entre el header y el footer
        switch ($view) {
            case 'login':
                include('vista/login.php');
                break;
            case 'registro':
                include('vista/registro.php');
                break;
        }
        ?>
    </section>

    <?php
    include('vista/footer.php');
    ?>
</body>

</html>