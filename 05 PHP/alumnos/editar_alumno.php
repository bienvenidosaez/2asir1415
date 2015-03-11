<?php include_once "php/control_session.php"; ?>
<?php
  include_once "php/bd.php";
  $bd = new Bd(); 
  $devolucion = 0; //Variable para controlar si se ha realizado el insert correctamente

  $clases = $bd->get_clases();
  
  if(isset($_GET['id'])){
    $idAlumno = $_GET['id'];
    $alumno = $bd->get_alumno($idAlumno);
  }else{
    header('Location: index.php');
  }


?>


<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Editar alumno</h1>
        <?php if($devolucion === 1){ ?>
        <div class="alert alert-success">Alumno editado correctamente</div>
        <?php } ?>
        <form action="#" method="post">
          <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php print $alumno->nombreCompleto; ?>">
          </div>
          <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="<?php print $alumno->edad; ?>">
          </div>
          <div class="form-group">
            <label for="clase">Clase</label>
            <select name="clase" class="form-control" id="clase">
              <?php
                if($alumno->clase=='NULL'){ ?>
                  <option selected="selected" value="">-</option>
            <?php }else{ ?>
                  <option value="">-</option>
            <?php } ?>

            <?php
              foreach ($clases as $clase) { 
                  if($clase->id == $alumno->clase) {?>
                    <option selected="selected" value="<?php print $clase->id; ?>"><?php print $clase->nombre; ?></option>
              <?php } else{ ?>
                    <option value="<?php print $clase->id; ?>"><?php print $clase->nombre; ?></option>
              <?php }//Fin del else

                  }//Fin del if
            ?>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
