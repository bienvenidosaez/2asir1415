<?php include_once "php/control_session.php"; ?>
<?php

  if(!isset($_GET['id'])){
    header('Location: index.php');
  }
 
  $idAlumno = $_GET['id'];

  include_once "php/bd.php";

  $bd = new Bd();
  $datos_alumno = $bd->get_alumno($idAlumno);

?>
<?php include_once "php/header.php"; ?>


    <div class="container">
      <div class="col-sm-12">
        <h1>Detalle del alumno</h1>
        <?php if($datos_alumno != NULL){ ?>
          <p>Nombre del alumno: <?php print $datos_alumno->nombreCompleto; ?></p>
          <p>Edad: <?php print $datos_alumno->edad; ?></p>
          <p>Clase: <?php print $datos_alumno->clase; ?></p>
          <?php }else{ ?>
          <p>No hay alumno con ese id</p>
          <?php } ?>
          <p>
            <a href="editar_alumno.php?id=<?php print $datos_alumno->id; ?>" class="btn btn-primary">Editar</a>
            <a href="eliminar_alumno.php?id=<?php print $datos_alumno->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar alumno</a>
          </p>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
