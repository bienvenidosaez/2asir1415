<?php include_once "php/control_session.php"; ?>

<?php include_once "php/header.php"; ?>


<?php

  include_once "php/bd.php";

  $bd = new Bd();
  $alumnos = $bd->get_alumnos();

?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Alumnos</h1>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre completo</th>
              <th>Clase</th>
              <th>Ver</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($alumnos as $alumno){ ?>
              <tr>
                <td><?php print $alumno->nombreCompleto; ?></td>
              <?php 
                if($alumno->clase != NULL){
                  $clase = $bd->get_clase($alumno->clase);
                  $nombre_clase = $clase->nombre;
                }else{
                  $nombre_clase = 'Sin clase asignada';
                } ?>
                <td><?php print $nombre_clase; ?></td>
                <td><a href="detalle_alumno.php?id=<?php print $alumno->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
              </tr>
            <?php }//Fin del foreach ?>
          </tbody>
        </table>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>