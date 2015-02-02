<?php include('comunes/cabecera.php'); ?>


<?php

    function imprime_bien($p){
        print '<pre>';
        var_dump($p);
        print '</pre>';
    }


    $cadena = 'Lleva la tarara un vestido blanco, lleno de cascabeles, muy bonitos  ';
    $trozos = explode('la', $cadena);
    imprime_bien($trozos);

    print "<p>$cadena</p>";
    print "<p>".strtoupper($cadena)."</p>";
    print "<p>".strtolower($cadena)."</p>";
    print "<p>".strlen($cadena)."</p>";
    print "<p>Hoy es ".date("j \d\e F \d\e Y")."</p>";
    print date('H:m:s \m \i\s\ \m\o\n\t\h');


    

?>


<?php include('comunes/footer.php'); ?>