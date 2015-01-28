<?php include('comunes/cabecera.php'); ?>



<h1>Arrays</h1>


<?php

    $numeros = ['Bienvenido','Sáez',3,'Muelas',5,6,3,3,7,7,8,9,0];
    $persona =[
        'nombre'=>'Bienvenido',
        'apellido1'=>'Sáez',
        'apellido2'=>'Muelas'
    ];
    $personas = [$persona, $numeros];

    // print '<pre>';
    // var_dump($personas);
    // print '</pre>';

    // print $personas[1][0];

   

    // var_dump($numeros);
    // //array_unshift($numeros, 'hola');
    // unset($numeros[1]);
    // var_dump($numeros);
    //print '</pre>';

    // print $numeros[1];

    // if(isset($numeros[1])){
    //     print 'Si existe';
    // }else{
    //     print 'No existe';
    // }


    //Ejemplo de foreach para recorrer un array
    $nombres = ['Juan', 'Pepito', 'Fulanito'];
    $persona =[
        'nombre'=>'Bienvenido',
        'apellido1'=>'Sáez',
        'apellido2'=>'Muelas'
    ];
    // foreach (array_reverse($nombres) as $nombre) {
    //     print "<p>El nombre es $nombre</p>";
    // }

    // foreach ($persona as $clave => $valor) {
    //     print "<p>El valor de la clave $clave es $valor</p>";
    // }



    // function imprimir_array($mi_array){
    //     foreach ($mi_array as $clave => $valor) {
    //         if(is_array($valor)){
    //             foreach ($valor as $key => $value) {
    //                 print "<p>El valor de la clave $key es $value</p>";
    //             }
    //         }else{
    //             print "<p>El valor de la clave $clave es $valor</p>";
    //         }
    //     }
    // }

    // $ciudades = ['Sevilla', 'Huelva', 'Granada'];
    // $nombres = ['Juan', 'Pepito', 'Fulanito', $ciudades];
    // imprimir_array($nombres);
    


    function imprimir_array($mi_array){
        foreach ($mi_array as $clave => $valor) {
            if(is_array($valor)){
                imprimir_array($valor);
            }else{
                print "<p>El valor de la clave $clave es $valor</p>";
            }
        }
    }

    $comidas = ['Macarrones', 'Paella'];
    $ciudades = ['Sevilla', 'Huelva', 'Granada', $comidas];
    $nombres = ['Juan', 'Pepito', 'Fulanito', $ciudades];
    // print '<pre>';
    // var_dump($nombres);
    // print '</pre>';
    imprimir_array($nombres);



    function mi_count($mi_array){
        $contador = 0;
        foreach ($mi_array as $valor){
            if(is_array($valor)){
                return $contador + mi_count($valor);
            }else{
                $contador++;
            }
        }
        return $contador;
    }


    print mi_count($nombres);




    #Cadenas de caracteres
    


?>




<?php include('comunes/footer.php'); ?>