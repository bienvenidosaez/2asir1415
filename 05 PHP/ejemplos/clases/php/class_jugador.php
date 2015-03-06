<?php

  include('php/class_carton.php');


class Jugador
{
  public  $nombre;
  public  $apellidos;
  private $carton;

  //Recibirá dos parámetros uno para el nombre y otro para el apellido
  function __construct($n, $a) {
    $this->nombre     = $n;
    $this->apellidos  = $a;
    $this->carton     = new Carton();
  }

  function presentarse(){
    print '<p>Hola me llamo '.$this->nombre.' '.$this->apellidos.' y este es mi cartón: </p>';
    print $this->carton->imprimirse_html();
  }

  // Función que recibe un número y devuelve verdadero o falso si está dicho número en números
  function tiene($n){
    return $this->carton->esta($n);
  }

  function tachar_numero($n){
    return $this->carton->tachar($n);
  }

  function cuantos_numeros_te_quedan(){
    return $this->carton->me_quedan();
  }



}// Fin de la clase Jugador


?>