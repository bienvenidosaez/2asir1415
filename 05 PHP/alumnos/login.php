<?php

  $error = 0;


  if(isset($_POST['usuario'])){

    //Importamos nuestra clase para el manejo de la base de datos
    include_once "php/bd.php";
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Calculamos el md5 de la contraseña
    $password = md5($password);

    $bd = new Bd();

    $consulta = "select id from usuarios where username='$usuario' and password='$password'";
    $id_usuario = $bd->conexion->get_var($consulta);

    if($id_usuario != NULL){
      //Significa que si existe un usuario con esos datos
      session_start();
      $_SESSION['usuario'] = $id_usuario;
      header('Location: index.php');
    }else{
      //Significa que no existe usuario con esos datos
      $error = 1;
    }

  }//Fin del if isset

?>



<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-4 col-sm-offset-4">
        <h1>Login</h1>
        <form class="form-signin" action="#" method="post">
          <h2 class="form-signin-heading">Inicio de sesión</h2>
          <?php if($error == 1 ){ ?>
            <p class="text-danger">Usuario o password incorrectos</p>
          <?php } ?>
          <label for="usuario" class="sr-only">Usuario</label>
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Introduce tu usuario" required autofocus>
          <br>
          <label for="inputPassword" class="sr-only">Clave</label>
          <input type="password" id="inputPassword" name="password"  placeholder="Introduce tu clave" class="form-control" required>
          <br>
          <button class="btn btn-primary btn-block" type="submit">Entrar</button>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
