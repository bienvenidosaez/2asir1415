<?php
    //print '<pre>';
    // var_dump($_POST);
    // print '</pre>';
    if (isset($_POST['usuario']) && isset($_POST['clave'])){
        print 'hola k ase';
    }else{
        header('Location: http://2asir.com/formularios/index.php');
    }



?>