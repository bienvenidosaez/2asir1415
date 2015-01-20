<?php include('comunes/cabecera.php'); ?>


    <h1>Galería</h1>
    <p>Realizar un script en php que cargue todas las imágenes de la carpeta img y que casa una de ellas sea un link al archivo de imagen en concreto.</p>


<?php

    $contador = 1;
    // <p><img href="img/1.jpg></p>"
    while ($contador < 10){ ?>
        <p><a href="img/<?php print $contador; ?>.jpg"><img src="img/<?php print $contador; ?>.jpg" alt=""></a></p>

<?php
        $contador++;
    }//Fin del while

?>


<?php include('comunes/footer.php'); ?>