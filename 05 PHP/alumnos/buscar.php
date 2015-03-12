<?php include_once "php/control_session.php"; ?>
<?php

  if(!isset($_GET['q'])){
    header('Location: index.php');
  }

  include_once "php/bd.php";
  $bd = new Bd();

  $alumnos = $bd->search_alumnos($_GET['q']);

?>
<?php include_once "php/header.php"; ?>


    <div class="container">
      <div class="col-sm-12">
        <h1>Resultados de la búsqueda con: '<?php print $_GET['q']; ?>'</h1>
        <hr>
        <?php if(count($alumnos) > 0) { ?>
          <table class="table">
            <thead>
              <tr>
                <th width="10%">Foto</th>
                <th>Nombre completo</th>
                <th>Clase</th>
                <th>Ver</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($alumnos as $alumno){ ?>
                <tr>
                  <td>
                    <?php if($alumno->foto != NULL){ ?>
                      <img width="50" class="img-responsive img-thumbnail" src="img/<?php print $alumno->foto; ?>" alt="Foto del alumno">
                    <?php }else{ ?>
                      <img class="img-responsive img-thumbnail" src="http://placehold.it/50&text=Sin+foto" alt="">
                    <?php }//Fin del else ?>
                  </td>
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
        <?php }else{ ?>
          <div class="alert alert-info">No hay alumnos con esa búsqueda</div>
        <?php }//Fin del else ?>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>
