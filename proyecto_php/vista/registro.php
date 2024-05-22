
<!-- <h2>Registro de Usuario</h2>

<form action="controlador/controlador_registro.php" method="post">

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="correo">Correo electrónico:</label><br>
    <input type="email" id="correo" name="correo"><br>

    <label for="contraseña">Contraseña:</label><br>
    <input type="password" id="contraseña" name="contraseña"><br><br>

    <input type="submit" value="Registrar">
</form> -->

<link rel="stylesheet" href="assets\css\stylesRegistro.css">

<section>
    <form action="controlador/controlador_registro.php" method="post">
        <h1>REGISTRARME</h1>

        <div class="input-group">
            <h5 id="subtitulo">Por favor diligencie el formulario para crear la cuenta</h5>
            <label for="nombre">Nombres y apellidos</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" required>

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <h5>La contraseña debe contener caracteres alfanuméricos (números y letras)</h5>
        </div>

        <div class="center-button">
            <input type="submit" value="CREAR CUENTA">
        </div>


        <div class="form-txt">
            <a href="?view=login">¿Ya estás registrado? Inicia sesion</a>
        </div>
    </form>
</section>


