<?php


  // Include ezSQL core
  include_once "ez_sql_core.php";

  // Include ezSQL database specific component
  include_once "ez_sql_mysql.php";

/**
* Clase que utilizaremos para conectarnos cada vez que necesitemos a nuestra base de datos
*/
class Bd
{
  public  $conexion;
  private $usuario      = 'root';
  private $password     = 'root';
  private $base_datos   = 'alumnos';

  function __construct()
  {
    $this->conexion = new ezSQL_mysql($this->usuario, $this->password, $this->base_datos,'localhost');
  }
}


?>