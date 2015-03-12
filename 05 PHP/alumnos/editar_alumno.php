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

  if(isset($_POST['nombre'])){
    $id           = $_POST['id'];
    $nuevo_nombre = $_POST['nombre'];
    $nueva_edad   = $_POST['edad'];
    $nueva_clase  = $_POST['clase'];
    $alumno_actualizado         = new stdClass();
    $alumno_actualizado->id     = $id;
    $alumno_actualizado->nombre = $nuevo_nombre;
    $alumno_actualizado->edad   = $nueva_edad;
    $alumno_actualizado->clase  = $nueva_clase;

    if($_FILES['foto']['name'] != ''){

      $RUTA_IMAGENES = '/Users/bienvenidosaez/Bitbucket/2asir1415/05 PHP/alumnos/img/';

      $nombre_antiguo = $_FILES['foto']['name'];
      $trozos = explode('.', $nombre_antiguo);
      $extension = array_pop($trozos);
      $nombre_archivo_completo = "$id.$extension";

      $destino = $RUTA_IMAGENES.$nombre_archivo_completo;
      
      move_uploaded_file($_FILES['foto']['tmp_name'], $destino);

      $alumno_actualizado->foto = $nombre_archivo_completo;
    }

    $devolucion = $bd->update_alumno($alumno_actualizado);
    $alumno = $bd->get_alumno($idAlumno); 
  }

?>


<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Editar alumno</h1>
        <?php if($devolucion === 1){ ?>
        <div class="alert alert-success">Alumno editado correctamente</div>
        <?php } ?>
        <form action="#" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php print $alumno->id; ?>">
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
          <div class="form-group">
            <label for="fogo">Foto</label>
            <input type="file" id="foto" name="foto">
          </div>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
