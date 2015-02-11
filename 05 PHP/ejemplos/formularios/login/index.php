<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fomularios</title>
</head>
<body>

    <h1>Login</h1>

    <?php

    if(isset($_GET['error'])){
        print "ERROR: " . $_GET['error'];
    }

    ?>
 
    <form action="process_form.php" method="POST">
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