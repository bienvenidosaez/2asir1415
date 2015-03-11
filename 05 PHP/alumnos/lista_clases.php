<?php include_once "php/control_session.php"; ?>

<?php include_once "php/header.php"; ?>


<?php

  include_once "php/bd.php";

  $bd = new Bd();
  $clases = $bd->get_clases();

?>

    <div class="container">
      <div class="col-sm-12">
        <h1>Clases</h1>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre de la clase</th>
              <th>Nº de alumnos</th>
              <th>Ver</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($clases as $clase){ ?>
              <tr>
                <td><?php print $clase->nombre; ?></td>
                <td>
                  <?php 
                    $nalumnos = $bd->get_nalumnos_clase($clase->id);
                    print $nalumnos;
                  ?>
                </td>
                <td><a href="detalle_clase.php?id=<?php print $clase->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
              </tr>
            <?php }//Fin del foreach ?>
          </tbody>
        </table>
      </div>
    </div>

<?php include_once "php/footer.php"; ?>