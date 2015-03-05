<?php

class Carton
{
  public $numeros;

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

    $salida = '<table class="table table-bordered"><tbody><tr><th>Numeros</th>';

    foreach ($this->numeros as $numero) {

      $salida = $salida.'<td>'.$numero.'</td>';

    }

    $salida = $salida."</tr></tbody></table>";

    return $salida;

  }



}// Fin de la clase Carton


?>