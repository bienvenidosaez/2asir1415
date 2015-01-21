<?php include('comunes/cabecera.php'); ?>

<?php
    
    if(isset($_GET['nimagen'])){
        $nimagen = $_GET['nimagen'];
    }else{
        $nimagen = false;
    }

?>

<?php

    if($nimagen != false){ 
?>

    <h1>Página detalle de la imagen <?php print $nimagen; ?></h1>
    <p><img src="img/<?php print $nimagen; ?>.jpg" alt=""></p>

<?php

    }else{

?>
    <h1>No se ha pasado ningún parámetro para la imagen.</h1>

<?php 
    
    }//Fin del else
?>


<?php include('comunes/footer.php'); ?>