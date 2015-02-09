<?php

  $personas = [
    ['Bienvenido Saez Muelas',  30, 'Motril'],
    ['Aida Cumbreras Casado',   25, 'Isla Cristina'],
    ['Juan Aurelio Pecino',     40, 'Isla Cristina'],
    ['Alberto Romero Ramos',    32, 'Huelva']
  ];

  $encontrados = [];
  $buscar = '';

  if(isset($_POST['busqueda'])){
    $buscar = $_POST['busqueda'];
    foreach ($personas as $persona) {
      if(stripos($persona[0], $buscar) !== false){ //stripos no discrimina entre mayúscuas y minúsculas mientras que strpos SI
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
  <form action="multiple.php" method="POST">
    <p>
      <label for="busqueda">¿Dime el nombre de la persona que quieres buscar?</label><br><br>
      <input required value="<?php print $buscar; ?>" type="text" name="busqueda"><button>Buscar</button></p>
  </form>

<?php
  if(isset($_POST['busqueda'])){
    if(count($encontrados) > 0){
      print "<h2>Se han encontrado ".count($encontrados)." personas con el siguiente criterio $buscar:</h2>";
      foreach ($encontrados as $encontrado) {
        print "<p>$encontrado[0] - $encontrado[1] - $encontrado[2]</p>";
      }
    }else{
      print "<h2>No se ha encontrado persona con el siguiente criterio $buscar</h2>";
    }
  }//Fin del isset
?>
  
</body>
</html>