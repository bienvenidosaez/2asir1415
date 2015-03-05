<?php

  include('php/class_carton.php');


class Jugador
{
  private $uid;
  public  $nombre;
  public  $apellidos;
  private $su_carton;

  //Recibirá dos parámetros uno para el nombre y otro para el apellido
  function __construct($n, $a) {
    $this->nombre     = $n;
    $this->apellidos  = $a;
    $this->su_carton = new Carton();
  }

  function presentarse(){

    print 'Hola me llamo '.$this->nombre.' '.$this->apellidos.' y este es mi cartón: ';
    print $this->su_carton->imprimirse_html();
  }

  function get_vidas(){
    return $this->vidas;
  }

  function set_vidas($v){
    $this->vidas = $v;
  }

}// Fin de la clase Jugador


?>