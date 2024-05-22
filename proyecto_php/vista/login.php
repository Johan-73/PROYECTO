<link rel="stylesheet" href="assets/css/stylesLogin.css">
<div id="moduloLogin">
    <h2>Inicio Sesion</h2>

    <form action="controlador/controlador_login.php" method="post">

        <label for="correo">Email*</label><br>
        <input type="text" id="correo" name="correo"><br>
        <label for="contraseña">Contraseña*</label><br>
        <input type="password" id="contraseña" name="contraseña"><br><br>
        <input id= "ini_s" type="submit" value="INICIAR SESIÓN">

    </form>
    <a href="?view=registro"><input id="cre_c" type="submit" value="CREAR CUENTA"></a>
</div>

