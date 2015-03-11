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

  function get_alumnos(){
    $consulta = "select * from alumnos";
    $alumnos = $this->conexion->get_results($consulta);
    return $alumnos;
  }

  function get_clases(){
    $consulta = "select * from clases";
    $clases = $this->conexion->get_results($consulta);
    return $clases;
  }

  function nueva_clase($nombre){
    $consulta = "insert into clases (nombre) values ('$nombre')";
    $devolucion = $this->conexion->query($consulta);
    return $devolucion;
  }

  function nuevo_alumno($nombre, $edad, $clase){
    if($clase==''){
      $clase = 'NULL';
    }
    $consulta = "insert into alumnos (nombreCompleto, edad, clase) values ('$nombre', '$edad', $clase)";
    $devolucion = $this->conexion->query($consulta);
    return $devolucion;
  }

  function get_alumno($idAlumno){
    $consulta = "select * from alumnos where id=$idAlumno";
    $alumno = $this->conexion->get_row($consulta);
    return $alumno;
  }

  function get_clase($idClase){
    $consulta = "select * from clases where id=$idClase";
    $clase = $this->conexion->get_row($consulta);
    return $clase;
  }

  function get_nalumnos_clase($idClase){
    $consulta = "select count(*) from alumnos where clase=$idClase";
    $nAlumnos = $this->conexion->get_var($consulta);
    return $nAlumnos;
  }

  function get_alumnos_clase($idClase){
    $consulta = "select * from alumnos where clase=$idClase";
    $alumnos = $this->conexion->get_results($consulta);
    return $alumnos;
  }

  function update_alumno($nuevo_alumno){
    $consulta = "update alumnos set nombreCompleto='$nuevo_alumno->nombre', edad='$nuevo_alumno->edad', clase='$nuevo_alumno->clase' where id='$nuevo_alumno->id'";
    $devolucion = $this->conexion->query($consulta);
    return $devolucion;
  }

  function delete_alumno($idAlumno){
    $consulta = "delete from alumnos where id='$idAlumno'";
    $devolucion = $this->conexion->query($consulta);
    return $devolucion;
  }

}


?>