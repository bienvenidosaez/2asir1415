<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario con adjuntos</title>
</head>
<body>
  <h1>Formulario con adjuntos</h1>
  <form action="recepcion.php" method="POST" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="number" name="edad"><br>
    Foto: <input type="file" name="foto"><br><br>
    <button>Enviar</button>
  </form>
</body>
</html>