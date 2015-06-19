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
<body class="blue">
  <?php 
  $idgaleria=$_GET['idgaleria'];
  $id=$idgaleria;
include("php/conexion.php");
$link=Conectarse();

  ?>
  <div class="container espacio-arriba">
    <div class="paddin-largo ">
      <div class="row">
      </div>
    <div class="rigth-space row">
      <?php 
      
      $result=mysql_query("SELECT * FROM galerias ",$link);
        while ($row = mysql_fetch_row($result)){
          echo '<a class="card col s12 m3 l3 galeria" href="galeria.php?idgaleria='.$row[0].'">
                  <h3>Galeria '.$row[2].'</h3>
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