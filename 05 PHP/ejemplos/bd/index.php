<pre>
<?php

  /**********************************************************************
  *  ezSQL initialisation for mySQL
  */

  // Include ezSQL core
  include_once "ez_sql_core.php";

  // Include ezSQL database specific component
  include_once "ez_sql_mysql.php";

  // Initialise database object and establish a connection
  // at the same time - db_user / db_password / db_name / db_host
  $bd = new ezSQL_mysql('root','root','2asir','localhost');

  $alumnos = $bd->get_results('select * from alumnos');
  var_dump($alumnos);

  print 'Me ha devuelto '.count($alumnos);

  foreach ($alumnos as $alumno) {
    print '<p>'.$alumno->nombre.'</p>';
  }

?>
</pre>