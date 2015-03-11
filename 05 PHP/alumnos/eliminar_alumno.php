<?php include_once "php/control_session.php"; ?>
<?php
  include_once "php/bd.php";
  $bd = new Bd(); 
  $devolucion = 0; //Variable para controlar si se ha realizado el insert correctamente

  if(isset($_GET['id'])){
    $idAlumno = $_GET['id'];
    $alumno = $bd->get_alumno($idAlumno);
  }else{
    header('Location: index.php');
  }

?>


<?php include_once "php/header.php"; ?>

    <div class="container">
      <div class="col-sm-12 con-borde">
        <h1>Eliminar alumno</h1>
        <p>¿Está usted seguro de que quiere eliminar a: <?php print $alumno->nombreCompleto; ?>?</p>
        <form action="eliminar_alumno_confirmado.php" method="post">
          <input type="hidden" name="id" value="<?php print $alumno->id; ?>">
          <button class="btn btn-danger"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sí</button>
          <a class="btn btn-default" href="lista_alumnos.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No</a>
        </form>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
