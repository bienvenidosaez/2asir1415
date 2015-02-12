<?php
    
  session_start();
  if(isset($_SESSION['logueado'])){
    //Si entra aquí es que está logueado pero tenemos que comprobar que es de tipo 1
    if($_SESSION['tipo_usuario'] != 1){
      header('Location: /formularios/login_sesiones/index.php');
    }
  }else{
    //Si entra aquí es que no está logueado
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

  <h1>Administrador del sitio</h1>
  <p>Hola k ase contactando</p>
  <p>
    <a href="logout.php">Cerrar sesión</a>
  </p>
  
</body>
</html>