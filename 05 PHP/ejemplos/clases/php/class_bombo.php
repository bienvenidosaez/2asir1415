<?php


class Bombo
{
  private $numeros;
  
  function __construct($limite_inferior=1, $limite_superior=90)
  {
    $this->numeros = array();
    $i = 1;
    while(count($this->numeros) < 90){
      array_push($this->numeros, $i);
      $i++;
    }

    //"barajamos" el bombo
    shuffle($this->numeros);
  }

  function imprimir()
  {

    $salida = '<table class="table table-bordered"><tbody><tr><th>Bombo</th>';

    foreach ($this->numeros as $numero) {

      $salida = $salida.'<td>'.$numero.'</td>';

    }

    $salida = $salida."</tr></tbody></table>";

    return $salida;
  }

  function sacabola()
  {
    return array_pop($this->numeros);
  }

  function quedan(){
    if(count($this->numeros) > 0){
      return True;
    }else{
      return False;
    }
  }
}



?>