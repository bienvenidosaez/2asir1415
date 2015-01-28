<?php include('comunes/cabecera.php'); ?>


<?php

    function imprime_bien($p){
        print '<pre>';
        var_dump($p);
        print '</pre>';
    }


    $cadena = 'Lleva la tarara un vestido blanco, lleno de cascabeles, muy bonitos';
    $trozos = explode('la', $cadena);
    imprime_bien($trozos);

    

?>


<?php include('comunes/footer.php'); ?>