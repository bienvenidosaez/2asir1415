<?php include('comunes/cabecera.php');

    define ("URLLOREMPIXEL", "http://lorempixel.com/");

    $ancho  = 100;
    $alto   = 100;

    if(isset($_GET['ancho'])){
        $ancho = $_GET['ancho'];
    }

    if(isset($_GET['alto'])){
        $alto = $_GET['alto'];
    }
 

?>

    <h2>Página de inicio</h2>
    <p>Este es el contenido de la página de inicio</p>

    <h3>Probando el valor de las constantes del servidor web</h3>
    <p>La variable $_GET contiene: <pre><?php var_dump($_GET); ?></pre></p>

<?php   
        if(isset($_GET['nombre'])){
            if($_GET['nombre'] != ''){
?>
                <p>Hola <?php print $_GET['nombre']; ?>, bienvenido.</p>
<?php       
            }else{
?>
                <p>No ha entrado nadie</p>
<?php       
            }//Fin del else 
        }//Fin del if del isset
?>


<?php
    
    // $edad = 20;
    

    // // Cuando es mayor de edad
    // if(
    //     print 'Eres mayor de edad';
    // }
    
    // //Cuando es adolescente
    // else if($edad >= 13 && $edad <= 17)
    // {
    //     print 'Eres un adolescente';
    // }

    // //Cuando es menor
    // else
    // {
    //     print 'Eres menor';
    // }


    $operador = '+';
    $a = 5;
    $b =1;

    switch ($operador){

        case '+':
            $resultado = $a + $b;
            break;

        case '-':
            $resultado = $a - $b;
            break;

        default:
            $resultado = 'No ha introducido un operador válido';
            break;

    }//Fin del switch


    $contador = 0;
    while ($contador < 10){
        // http://lorempixel.com/100/100/?0
        print '<p><a href="http://google.es"><img src="'.URLLOREMPIXEL.$ancho.'/'.$alto.'/?'.$contador.'" alt=""></a></p>';
        $contador++;
    }//Fin del while

?>


<?php include('comunes/footer.php'); ?>