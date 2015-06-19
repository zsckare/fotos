<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Crear Nuevo Galeria</title>

  <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<body class="blue">
  <?php 
  $idgaleria=$_GET['idgaleria'];
  $id=$idgaleria;
  ?>
  <div class="container espacio-arriba">
    <div class="card paddin-largo ">
    <div class="row">
      <?php 
      include("php/conexion.php");
      $link=Conectarse();
      $result=mysql_query("SELECT * FROM fotos WHERE id_galeria='$id' ",$link);
        while ($row = mysql_fetch_row($result)){
          echo '<div class="col s12 m3 l3">
  <img src="'.$row[1].'" alt="" class="responsive-img" style="padding:1em;">
</div>';
        }
      ?>
    </div>
    </div>

  </div>


  <!--SCRIPTS-->
    
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>