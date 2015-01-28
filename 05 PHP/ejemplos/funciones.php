<?php include('comunes/cabecera.php'); ?>


<h3>Primera Función</h3>
<?php
    //Creamos la función
    function es_digito($n){
        if(is_numeric($n)){
            if ($n>=0 && $n<=9){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    //Llamamos la función
    if(isset($_GET['digito'])){
        $n1 = $_GET['digito'];
        $d1 = es_digito($n1);
            if ($d1 == true){
                echo "El número introducido es un número entre 0 y 9.";
            }else{
                echo "El número introducido no es un número entre 0 y 9. ";
        }//Fin del else
    }//Fin del if
    else{
        print "<p>No ha introducido ningún dígito para probar la función es_digito, recuerda ?digito=x</p>";
    }


    //3. Escriba una función que dado dos números enteros a y b, realice la operación de potencia ab.
    function potencia ($base, $exp)
    {
        if(is_numeric($base) && is_int($exp)){
            return  pow ($base,$exp);
        }else{
            return false;
        }
    }//Fin de la función


    $a = 5;
    $b = 2;
    $resultado = potencia($a, $b);
    if($resultado){
        print "<p>El resulta\$do es \"'$resultado\"</p>";
    }else{
        print '<p>Los parámetros no son numéricos</p>';
    }


    //4. Escriba una función lógica que reciba un carácter y retorne si este es una vocal.
    function vocales ($letra)
    {
        // La función strtoupper convierte a mayúsculas
        // La función strpos encuentra la posición del segundo parámetro detro dentro del primero
        if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u')
            return true;  // No lo encontró
        else{
            return false;   // Encontro el carácter
        }
    }


?>

<?php include('comunes/footer.php'); ?>