<?php

  $personas = [
    ['Bienvenido Saez Muelas',  30, 'Motril'],
    ['Aida Cumbreras Casado',   25, 'Isla Cristina'],
    ['Juan Aurelio Pecino',     40, 'Isla Cristina'],
    ['Alberto Romero Ramos',    32, 'Huelva']
  ];

  $encontrado = false;

  if(isset($_POST['busqueda'])){
    $buscar = $_POST['busqueda'];
    foreach ($personas as $persona) {
      if(stripos($persona[0], $buscar) !== false){ //stripos no discrimina entre mayúscuas y minúsculas mientras que strpos SI
        $encontrado = $persona;
        break;
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
  <form action="index.php" method="POST">
    <p>
      <label for="busqueda">¿Dime el nombre de la persona que quieres buscar?</label><br><br>
      <input required type="text" name="busqueda"><button>Buscar</button></p>
  </form>

<?php
  if(isset($_POST['busqueda'])){
    if($encontrado != false){
      print "<h2>Se ha encontrado la siguiente persona:</h2>";
      print "<p>$encontrado[0] - $encontrado[1] - $encontrado[2]</p>";
    }else{
      print "<h2>No se ha encontrado persona con ese nombre</h2>";
    }
  }//Fin del isset
?>
  
</body>
</html>