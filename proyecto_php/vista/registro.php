<link rel="stylesheet" href="assets\css\stylesRegistro.css">

<section class="registro">
    <form action="controlador/controlador_registro.php" method="post">
        <h1>REGISTRARME</h1>

        <div class="input-group">
            <h5 id="subtitulo">Por favor diligencie el formulario para crear la cuenta</h5>
            <label for="nombre">Nombres y apellidos</label>
            <input type="text" id="nombre" name="nombre" required>

            <!--  identificador / nombre que mostrara -->
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" required>
            <!-- type: el tipo de dato de la cajita -->
            <label for="fecha-nacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>

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


