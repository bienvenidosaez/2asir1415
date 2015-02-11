<?php
  
  session_start();

  if (isset($_SESSION['contador'])){
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
  }else{
    $_SESSION['contador'] = 1;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fomularios</title>
</head>
<body>

    <h1>Ejemplo sesiones</h1>
    <p>El servidor me ha dado el siguiente id de sesión: <?php print session_id(); ?>
    </p>
    <p>He visitado <?php print $_SESSION['contador']; ?> veces esta página web.</p>
    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
 
</body>
</html>