<?php
    $estados_civiles = [[1, 'Soltero'], [2, 'Casado'], [3, 'Viudo'], [4, 'Divorciado']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tipos de input</title>
</head>
<body>
    <h1>Tipos de input</h1>

    <form action="process_form.php" method="POST">
        
        <p>
            <label for="">Input text</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre">
            <input type="hidden" name="id" value="567">
        </p>

        <p>
            <label for="clave">Password</label>
            <input type="password" name="clave" id="clave" placeholder="Escribe tu clave">
        </p>
        <p>
            Sexo<br>
            <input type="radio" name="sexo" value="h" id="hombre"><label for="hombre">Hombre</label><br>
            <input type="radio" name="sexo" value="m" id="mujer"><label for="mujer">Mujer</label><br>
        </p>

        <p>
            Estado civil<br>
            <select name="estado_civil" id="">
                <option value="1">Soltero</option>
                <option value="2">Casado</option>
                <option value="3">Separado</option>
                <option value="4">Viudo</option>
            </select>
        </p>

        <p>
            Estado civil con php<br>
            <select name="estado_civil_php" id="">
<?php
            foreach ($estados_civiles as $estado_civil) {
                print "<option value='$estado_civil[0]'>$estado_civil[1]</option>";
            }
?>
            </select>
        </p>

        <p>
            Edad<br>
            <select name="edad">
<?php
            for ($i=10; $i<=100; $i++){
                print "<option value=\"$i\">$i</option>\n";
            }
?>   
            </select>

        </p>

        <p>
            Año de nacimiento<br>
            <select name="edad">
<?php
            for ($i=intval(date('Y'))-100; $i<=intval(date('Y')); $i++){ ?>
                <option value="<?php print $i; ?>"><?php print $i; ?></option>
<?php       }
?>   
            </select>

        </p>

        <p>
            Intereses<br>
            <input type="checkbox" name="futbol" id="futbol"><label for="futbol">Futbol</label>
            <input type="checkbox" name="musica" id="musica"><label for="musica">Música</label>
        </p>

        <p>
            Observaciones<br>
            <textarea name="observaciones" id="" cols="30" rows="10"></textarea>
        </p>


        <p>
            <button>Enviar mi formulario</button>
            <input type="reset" value="Borrar">
        </p>


    </form>
    
</body>
</html>