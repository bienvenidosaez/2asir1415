<?php
    
    // Nombre completo  -  Edad  -  Ciudad  -  Nombre usuario  -  Password  -  Tipo
    // Tipo 1: Administrador y Tipo 2: Usuario normal

    /*
        Página index.php: protegida y sólo visible para usuarios válidos
        Página admin.php: protegida y sólo visible para usuarios administradores (tipo 1)
    */
    $personas = [
        ['Bienvenido Saez Muelas',  30, 'Motril',           'bsaez',        'bbb',      1],
        ['Aida Cumbreras Casado',   25, 'Isla Cristina',    'acumbreras',   'aaa',      1],
        ['Juan Aurelio Pecino',     40, 'Isla Cristina',    'jaurelio',     'jjj',      2],
        ['Alberto Romero Ramos',    32, 'Huelva',           'aromero',      'rrr',      2]
    ];

    $usuario = '';
    $clave = '';

    if(isset($_POST['usuario'])){

        $usuario    = $_POST['usuario'];
        $clave      = $_POST['clave'];

        if (($usuario == 'Bienve') && ($clave == '123')){
            //Si llega hasta aquí es que ha metido los datos correctos
            session_start();
            $_SESSION['logueado'] = 1;
            header('Location: /formularios/login_sesiones/index.php');
        }else{
            $error = 'Usuario y password incorrecto';
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <?php

    if(isset($error)){
        print "<p>ERROR: " . $error.'</p>';
    }

    ?>
 
    <form action="#" method="POST">

        <p>
            <label for="usuario">Usuario: </label>
            <input type="text" required name="usuario" id="usuario" placeholder="Escribe tu nombre de usuario">
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" required name="clave" id="password">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
 
    
</body>
</html>