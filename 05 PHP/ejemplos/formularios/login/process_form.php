<?php
    $UsuarioPaso    =   "Bienve";
    $ClavePaso  =       "123";
    #Primero miramos si la variable 'usuario' y 'clave' que entran por
    #El método post tienen valor
    if (isset($_POST['usuario']) && isset($_POST['clave']))
    {
        if (($_POST['usuario'] == $UsuarioPaso) && ($_POST['clave']==$ClavePaso)){
            print "<p>Texto sólo para usuarios correctos.</p>";
        }else{
            if (($_POST['usuario'] == '') || ($_POST['clave']=='')){
                header('Location: /formularios/login/index.php?error=El usuario y la clave son obligatorios');
            }else{
                header('Location: /formularios/login/index.php?error=Usuario y password incorrecto');
            }
        }

    }else{
        header('Location: /formularios/login/index.php');
    }
?>