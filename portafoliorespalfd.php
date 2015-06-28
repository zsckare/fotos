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
<body class="indigo darken-1" >
  <?php 

include("php/conexion.php");
$link=Conectarse();

  ?>
  <?php include("navegacion.php"); ?>
<div class="cosa"></div>
  <div class="container espacio-arriba">
    <div class="paddin-largo ">
      <div class="row card">
        <h3 class="center-align">Portafolio <i class="ion-android-camera small"></i></h3>
      </div>
    <div class="row">
      <?php 
      $rutaimagen="";
      $result=mysql_query("SELECT * FROM galerias WHERE tipo=0",$link);
        while ($row = mysql_fetch_row($result)){
          $idgal=$row[0];
          

            $consulta=mysql_query("SELECT MAX(ruta_foto) FROM fotos WHERE id_galeria='$idgal' ");
            if ($rs = mysql_fetch_row($consulta)) {
            $rutaimagen = trim($rs[0]);
            }
          echo '<a class="card col s12 m2 l2 galeria" href="galeria.php?idgaleria='.$row[0].'">
          <span><h4 class="center-align">'.$row[2].'</h4></span>
          <span><img src="'.$rutaimagen.'" alt="" class="responsive-img"></span>
                </a>';
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