<?php include('comunes/cabecera.php'); ?>

<?php
    
    if(isset($_GET['n'])){
        $n = $_GET['n'];
    }else{
        $n = false;
    }//Fin del else

?>

    <h1>Multiplicando</h1>

<?php

    if($n != false){
        print "<h3>Tabla de multiplicar del $n</h3>";
        for ($i=1; $i<11; $i++) { 
            $resultado = $n*$i;
            print "<p>$n * $i = $resultado";
        }//Fin del for

    }//Fin del if
    else{
        print "<h3>No me han pasado ningún número</h3>";
    }//Fin del else

?>

<?php include('comunes/footer.php'); ?>