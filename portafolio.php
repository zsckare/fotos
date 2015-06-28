<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Portafolio</title>

  <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="css/lightbox.css"> 
<body >
  <img src="img/bg.jpg" alt="" class="bgimg">
  <?php 

include("php/conexion.php");
$link=Conectarse();

  ?>
  <?php include("navegacion.php"); 
  $c=mysql_query("SELECT * FROM galerias WHERE tipo=0");
  $tamanio=mysql_num_rows($c);

  ?>

<div class="cosa"></div>
  <div class="container espacio-arriba">
    <div class="paddin-largo ">
      <div class="row card">
        <h3 class="center-align">Portafolio <i class="ion-android-camera small"></i></h3>
      </div>
      <!--ciclo para scar registros-->
      <div class="row">
              <?php 
               $result=mysql_query("SELECT * FROM galerias WHERE tipo=0",$link);
        for ($i=0; $i <$tamanio ; $i++) { 
          echo '<div class="row">';
            for ($j=0; $j <4 ; $j++) { 

              while ($row = mysql_fetch_row($result)){
                echo '
              <div class="col s12 m3 l3">
                <div class="row">
                  <div class="card col s12 m10 l10 ">
                    <a class="c" href="galeria.php?idgaleria='.$row[0].'">
                <span><h4 class="center-align">'.$row[2].'</h4></span>
                </a>
                  </div>
                </div>
              </div>
                ';
              }
              
            }
          echo "</div>";
        }
      ?>    
      </div>
  

    </div>

  </div>

  <!--SCRIPTS-->
    
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>