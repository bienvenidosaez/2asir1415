<?php include_once "php/control_session.php"; ?>


<?php
  $devolucion = 0;
  
  if(isset($_POST['nombre'])){
    $nombre_clase = $_POST['nombre'];
    include_once "php/bd.php";
    $bd = new Bd();
    $devolucion = $bd->nueva_clase($nombre_clase);
  }


?>


<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Nueva clase</h1>
        <?php if($devolucion === 1){ ?>
        <div class="alert alert-success">Clase añadida correctamente</div>
        <?php } ?>
        <form action="#" method="post">
          <div class="form-group">
            <label for="nombre">Nombre de la clase</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
