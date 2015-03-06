<?php

class Carton
{
  private $numeros;

  //Recibirá dos parámetros uno para el nombre y otro para el apellido
  function __construct($limite_inferior=1, $limite_superior=90) {
    
    $this->numeros = array();
    
    while(count($this->numeros) < 15){

      $aleatorio = rand($limite_inferior, $limite_superior);
      $encontrado = False;
      
      foreach ($this->numeros as $numero) {
        if($aleatorio == $numero){
          $encontrado = True;
          break;
        }
      }

      if($encontrado == False){
        array_push($this->numeros, $aleatorio);
      }

    }//Fin del while
  }//Fin del constructor

  function imprimirse(){
    $salida = '';

    sort($this->numeros);

    foreach ($this->numeros as $numero) {
      $salida = $salida.$numero.', ';
    }

    $salida = rtrim($salida, ', ');

    return $salida;
  }

  function imprimirse_html(){

    sort($this->numeros);

    $salida = '<table class="table table-bordered"><tbody><tr><th>Cartón</th>';

    foreach ($this->numeros as $numero) {

      $salida = $salida.'<td>'.$numero.'</td>';

    }

    $salida = $salida."</tr></tbody></table>";

    return $salida;
  }

  // // Función que recibe un número y devuelve verdadero o falso si está dicho número en números
  // function esta($numero){
    
  //   foreach ($this->numeros as $n){
  //     if($n == $numero){
  //       return True;
  //     }
  //   }

  //   //Si llega hasta aquí es que ha probado todos los números y no está
  //   return False;
  // }

  function tachar($numero)
  {

    $esta = array_search($numero, $this->numeros);
    if($esta !== False){
      unset($this->numeros[$esta]);
      return True;
    }else{
      return False;
    }
  }

  function me_quedan(){
    return count($this->numeros);
  }

}// Fin de la clase Carton


?>