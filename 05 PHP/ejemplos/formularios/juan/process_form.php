<?php
    $UsuarioPaso    =   "Bienve";
    $ClavePaso  =       "123";
    #Primero miramos si la variable 'usuario' y 'clave' que entran por
    #El método post tienen valor
    if (isset($_POST['usuario']) && isset($_POST['clave']))
    {
        if (($_POST['usuario'] == $UsuarioPaso) && ($_POST['clave']==$ClavePaso)){
            header('Location: /formularios/juan/correct.php');
        }else{
            if (($_POST['usuario'] == '') || ($_POST['clave']=='')){
                header('Location: /formularios/juan/index.php?error=El usuario y la clave son obligatorios');
            }else{
                header('Location: /formularios/juan/index.php?error=Usuario y password incorrecto');
            }
        }

    }else{
        header('Location: /formularios/juan/index.php');
    }
?>