<?php

  include('php/class_jugador.php');
  include('php/class_bombo.php');

  if(!isset($_POST['nombrej1'])){
    header('Location: /clases/');
  }

  $nombre_j1 = $_POST['nombrej1'];
  $nombre_j2 = $_POST['nombrej2'];

  $bombo = new Bombo();
  $j1 = new Jugador($nombre_j1, 'Saez Muelas');
  $j2 = new Jugador($nombre_j2, 'Perez');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">2ASIR</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>Bienvenidos al Bingo las Vegas</h1>

          <?php

            print $bombo->imprimir();

            $j1->presentarse();
            $j2->presentarse();

            $contador = 1;
            while($j1->cuantos_numeros_te_quedan() > 0 && $j2->cuantos_numeros_te_quedan() > 0 && $bombo->quedan() == True){

              $bola = $bombo->sacabola();
              print "<p>La bola nº $contador es: $bola</p>";
              $j1->tachar_numero($bola);
              $j2->tachar_numero($bola);
              $tieneJ1 = $j1->cuantos_numeros_te_quedan();
              $tieneJ2 = $j2->cuantos_numeros_te_quedan();
              print "<p>El jugador 1 tiene: $tieneJ1 números</p>";
              print "<p>El jugador 2 tiene: $tieneJ2 números</p>";
              $contador++;

            }//Fin del while

            //Después de jugar comprobamos quien ha ganado
            // if()

          ?>

        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>