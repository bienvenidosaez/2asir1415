<?php

  $personas = [
    ['Bienvenido Saez Muelas',  30, 'Motril'],
    ['Aida Cumbreras Casado',   25, 'Isla Cristina'],
    ['Juan Aurelio Pecino',     40, 'Isla Cristina'],
    ['Alberto Romero Ramos',    32, 'Huelva']
  ];
  var_dump($_POST);
  $encontrados = [];
  $nombre = '';
  $ciudad = '';

  //Verificamos que la petición de la página se hace a través de un formulario vía POST
  if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    
    foreach ($personas as $persona) {
      if(stripos($persona[0], $nombre) !== false && stripos($persona[2], $ciudad)){ //stripos no discrimina entre mayúscuas y minúsculas mientras que strpos SI
        array_push($encontrados, $persona);
      }//Fin del if
    }//Fin del foreach

  }//Fin del if del isset


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mini Google</title>
</head>
<body>
  <h1>Mini Google</h1>
  <form action="#" method="POST">
    <p>
      <label for="nombre">¿Dime el nombre de la persona que quieres buscar?</label>
      <input value="<?php print $nombre; ?>" type="text" name="nombre" id="nombre">
    </p>
    <p>
      <label for="ciudad">¿Dime la ciudad de la persona que quieres buscar?</label>
      <input value="<?php print $ciudad; ?>" type="text" name="ciudad" id="ciudad">
    </p>    
    <button>Buscar</button>

    </p>
  </form>

<?php
  if(isset($_POST['nombre'])){
    if(count($encontrados) > 0){
      print "<h2>Se han encontrado ".count($encontrados)." personas con el siguiente criterio nombre: $nombre y ciudad: $ciudad:</h2>";
      foreach ($encontrados as $encontrado) {
        print "<p>$encontrado[0] - $encontrado[1] - $encontrado[2]</p>";
      }
    }else{
      print "<h2>No se ha encontrado persona con el siguiente criterio nombre: $nombre y ciudad: $ciudad";
    }
  }//Fin del isset
?>
  
</body>
</html>