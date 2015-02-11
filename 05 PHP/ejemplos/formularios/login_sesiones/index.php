<?php
    
  session_start();
  if(!isset($_SESSION['logueado'])){
    header('Location: /formularios/login_sesiones/login.php');
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Página principal</title>
</head>
<body>

<?php
  /*
      El cometido será: proteger esta página para que no pueda ser accedida sin previamente haberse logueado en la pantalla de login, para eso lo protegeremos mediate la comprobación de una variable de sesión
  */
?>

  <h1>Documentación secreta</h1>
  <p>Hola k ase</p>
  <p>
    <a href="logout.php">Cerrar sesión</a>
  </p>
  
</body>
</html>