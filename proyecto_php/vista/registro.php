<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro de Usuario</h2>

    
    <?php
    require_once 'C:\xampp\htdocs\proyecto_php\controlador\controlador_registro.php';
    require_once 'C:\xampp\htdocs\proyecto_php\config\dbconect.php';
    
    $controlador = new Controlador($conn); // Instancia del controlador

    $registro_exitoso = false;
    $error = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        if ($controlador->registrarUsuario($nombre, $correo, $contraseña)) {
            header("Location: login.php"); //para redirigir al usuario a la pagina de inicio de sesion
            exit();
        } else {
            $error = "Error al registrar el usuario.";
        }
    }
    ?>

    <?php if (!$registro_exitoso): ?>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo"><br>

            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contraseña"><br><br>

            <input type="submit" value="Registrar">
        </form>
        <?php if (!empty($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    <?php else: ?>
        <p>Usuario registrado exitosamente.</p>
    <?php endif; ?>
</body>
</html>
