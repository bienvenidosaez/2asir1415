<?php include_once "php/control_session.php"; ?>


<?php
  include_once "php/bd.php";
  $bd = new Bd(); 
  $devolucion = 0; //Variable para controlar si se ha realizado el insert correctamente

  $clases = $bd->get_clases();
  
  if(isset($_POST['nombre'])){
    $nombre_alumno  = $_POST['nombre'];
    $edad           = $_POST['edad'];
    $clase          = $_POST['clase'];
    $devolucion = $bd->nuevo_alumno($nombre_alumno, $edad, $clase);
  }


?>


<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Nuevo alumno</h1>
        <?php if($devolucion === 1){ ?>
        <div class="alert alert-success">Alumno añadido correctamente</div>
        <?php } ?>
        <form action="#" method="post">
          <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad">
          </div>
          <div class="form-group">
            <label for="clase">Clase</label>
            <select name="clase" class="form-control" id="clase">
              <option value="">-</option>
            <?php
              foreach ($clases as $clase) { ?>
                <option value="<?php print $clase->id; ?>"><?php print $clase->nombre; ?></option>
            <?php  
              }
            ?>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
