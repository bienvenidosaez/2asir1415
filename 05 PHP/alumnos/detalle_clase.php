<?php include_once "php/control_session.php"; ?>
<?php

  if(!isset($_GET['id'])){
    header('Location: index.php');
  }
 
  $idClase = $_GET['id'];

  include_once "php/bd.php";

  $bd = new Bd();
  $datos_clase = $bd->get_clase($idClase);
  $alumnos = $bd->get_alumnos_clase($idClase);
?>
<?php include_once "php/header.php"; ?>


    <div class="container">
      <div class="col-sm-12">
        <h1>Detalle de la clase</h1>
        <h2><span class="label label-success"><?php print $datos_clase->nombre; ?></span></h2>
        <hr>
        <h3>Listado de alumnos de la clase:</h3>
        <?php if($alumnos!=NULL) { ?>
          <table class="table">
            <thead>
              <tr>
                <th>Nombre completo</th>
                <th>Ver</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($alumnos as $alumno){ ?>
                <tr>
                  <td><?php print $alumno->nombreCompleto; ?></td>
                  <td><a href="detalle_alumno.php?id=<?php print $alumno->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
                </tr>
              <?php }//Fin del foreach ?>
            </tbody>
          </table>
        <?php }else{ ?>
          <div class="alert alert-info">No hay alumnos para esta clase</div>
        <?php }//Fin del else ?>
        <p><a href="lista_clases.php" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver al listado</a></p>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
