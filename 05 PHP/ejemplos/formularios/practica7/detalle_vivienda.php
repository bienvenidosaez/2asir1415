<?php


// Nos imaginamos que esta casa tiene el id 1 en la base de datos
$id_vivienda = 5;
$RUTA_IMAGENES = '/Users/bienvenidosaez/Bitbucket/2asir1415/05 PHP/ejemplos/formularios/practica7/img/';
$RUTA_PUBLICA = '/formularios/practica7/img/';


if(!isset($_POST['tipo'])){
  header('Location: /formularios/practica7/');
}

$tipo = $_POST['tipo'];
$direccion = $_POST['direccion'];

if(isset($_POST['aire'])){
  $aire = True;
}else{
  $aire = False;
}

if(isset($_POST['garaje'])){
  $garaje = True;
}else{
  $garaje = False;
}

$ndormitorios = $_POST['ndormitorios'];

if(isset($_FILES['img1'])){
  //Comprobamos si es una imagen jpg o png
  if($_FILES['img1']['type'] == 'image/jpeg' || $_FILES['img1']['type'] == 'image/png'){
    //Si es una imagen la movemos al directorio img pero tenemos que tener cuidado con la extensión
    $nombre_antiguo = $_FILES['img1']['name'];
    $trozos = explode('.', $nombre_antiguo);
    $extension = array_pop($trozos);
    $nombre_archivo_completo = $id_vivienda.'-img1.'.$extension;
    $destino = $RUTA_IMAGENES.$nombre_archivo_completo;
    $img1_publica = $RUTA_PUBLICA.$id_vivienda.'-img1.'.$extension;
    move_uploaded_file($_FILES['img1']['tmp_name'], $destino);

  }else{
    header('Location: /formularios/practica7/?error=Formato de imagen incorrecto');
  }
}

if(isset($_FILES['img2'])){
  //Comprobamos si es una imagen jpg o png
  if($_FILES['img2']['type'] == 'image/jpeg' || $_FILES['img2']['type'] == 'image/png'){
    //Si es una imagen la movemos al directorio img pero tenemos que tener cuidado con la extensión
    $nombre_antiguo = $_FILES['img2']['name'];
    $trozos = explode('.', $nombre_antiguo);
    $extension = array_pop($trozos);
    $nombre_archivo_completo = $id_vivienda.'-img2.'.$extension;
    $destino = $RUTA_IMAGENES.$nombre_archivo_completo;
    $img2_publica = $RUTA_PUBLICA.$id_vivienda.'-img2.'.$extension;
    move_uploaded_file($_FILES['img2']['tmp_name'], $destino);

  }else{
    header('Location: /formularios/practica7/?error=Formato de imagen incorrecto');
  }
}







?>

<img src="<?php print $img1_publica; ?>" alt="">
<img src="<?php print $img2_publica; ?>" alt="">
