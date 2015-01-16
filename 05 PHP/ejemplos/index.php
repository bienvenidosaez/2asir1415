<?php include('comunes/cabecera.php'); ?>

    <h2>Página de inicio</h2>
    <p>Este es el contenido de la página de inicio</p>

    <h3>Probando el valor de las constantes del servidor web</h3>
<!--     <p>La variable $_SERVER contiene: <pre><?php var_dump($_SERVER); ?></pre></p>
 -->    <p>La variable $_GET contiene: <pre><?php var_dump($_GET); ?></pre></p>

<?php   if($_GET['nombre'] != ''){ ?>
            <p>Hola <?php print $_GET['nombre']; ?>, bienvenido.</p>
<?php   }else{  ?>
            <p>No ha entrado nadie</p>
<?php } ?>


<?php include('comunes/footer.php'); ?>