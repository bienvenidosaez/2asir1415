<?php

class Jugador
{
  public  $nombre;
  public  $apellidos;
  private $vidas=10;

  //Recibirá dos parámetros uno para el nombre y otro para el apellido
  function __construct($n, $a) {
    $this->nombre     = $n;
    $this->apellidos  = $a;
  }

  function presentarse(){
    print 'Hola me llamo '.$this->nombre.' '.$this->apellidos.' y tengo '.$this->vidas.' vidas';
  }

  function get_vidas(){
    return $this->vidas;
  }

  function set_vidas($v){
    $this->vidas = $v;
  }

}// Fin de la clase Jugador


?>