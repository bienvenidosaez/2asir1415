<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Práctica 7</title>
</head>
<body>

  <h1>Inserción de vivienda</h1>

  <?php
    if (isset($_GET['error'])){
      print "<p>".$_GET['error']."</p>";
    }

  ?>

  <p>Introduzca los datos de la vivienda</p>
  <form action="detalle_vivienda.php" method="POST" enctype="multipart/form-data">
    <p>
      <label for="tipo">Tipo </label>
      <select name="tipo" id="tipo">
        <option value="p">Piso</option>
        <option value="c">Casa</option>
      </select>
    </p>
    <p>
      <label for="direccion">Dirección:</label>
      <input type="text" name="direccion">
    </p>
    <p>
      <label>Número de dormitorios</label>
      <input type="radio" name="ndormitorios" id="n1" value="1"><label for="n1">1</label>
      <input type="radio" name="ndormitorios" id="n2" value="2"><label for="n2">2</label>
      <input type="radio" name="ndormitorios" id="n3" value="3"><label for="n3">3</label>
      <input type="radio" name="ndormitorios" id="n4" value="4"><label for="n4">4</label>
      <input type="radio" name="ndormitorios" id="n5" value="5"><label for="n5">5</label>
    </p>
    <p>
      <label>Extras:</label><br>
      <input type="checkbox" name="aire" id="aire"><label for="aire">Aire acondicionado</label><br>
      <input type="checkbox" name="garaje" id="garaje"><label for="garaje">Garaje</label>
    </p>
    <p>Imagen 1 <input type="file" name="img1"></p>
    <p>Imagen 2 <input type="file" name="img2"></p>

    <button>Enviar</button>

  </form>
  
</body>
</html>