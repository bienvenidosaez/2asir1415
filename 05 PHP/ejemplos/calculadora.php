<?php include('comunes/cabecera.php'); ?>


<?php

    function suma($n1, $n2){
        $resultado = $n1 + $n2;
        return $resultado;
    }//Fin de la función suma


?>


    <h1>Calculadora</h1>


<?php

    $r = suma(1,2);

?>

<p>El resultado de la suma es: <?php print $r; ?></p>


<?php include('comunes/footer.php'); ?>