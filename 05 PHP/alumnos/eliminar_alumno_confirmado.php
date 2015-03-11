<?php


if(!isset($_POST['id'])){
  header('Location: index.php');
}else{

  $idAlumno = $_POST['id'];
  include_once "php/bd.php";
  $bd = new Bd();

  $bd->delete_alumno($idAlumno);
  header('Location: lista_alumnos.php?delete=1');

}
?>