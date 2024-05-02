<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>

    <form action="index.php" method="post">

        <label for="correo">Correo electrónico:</label><br>
        <input type="text" id="correo" name="correo"><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña"><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
    <a href="registro.php"><input type="submit" value="Crear Cuenta"></a>
</body>
</html>