<link rel="stylesheet" href="../assets/css/StyleEditarProducto.css">

<body>
  

<section class="EditarProducto">
  <div class="contenedor">
    <div class="imgProducto" alt></div>

    <form class="formImg" action="/controlador/controlador_editarProducto.php" method="post" enctype="multipart/form-date">

      <label for="archivo" class="Etiqueta-archivo">
        <span class="icon"></span>
      </label>

      <input type="file" id="archivo" name="archivo" accept="image/*">

      <script>
        document.getElementById('archivo').addEventListener('change', function() {
            document.getElementById('formImg').submit();
        });
      </script>
    </form>
  </div>


  <div class="contenedor">
    <form class="formText" action="/controlador/controlador_editarProducto.php" method="post">
      <div class="form-group">
        <label for="name">NOMBRE:</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="reference">REFERENCIA:</label>
        <input type="text" id="reference" name="reference">
      </div>
      <div class="form-group">
        <label for="quantity">CANTIDAD:</label>
        <input type="number" id="quantity" name="quantity">
      </div>
      <div class="form-group">
        <label for="value">VALOR VENTA:</label>
        <input type="number" id="value" name="value">
      </div>
      <div class="form-group">
        <label for="description">DESCRIPCIÓN:</label>
        <textarea id="description" name="description" rows="6"></textarea>
      </div>
      <button type="submit">Guardar Cambios</button>
    </form>
  </div>
</section>

</body>