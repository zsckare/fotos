<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Crear Nuevo Galeria</title>

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
  $con=mysql_query("SELECT *FROM galerias WHERE id_galeria='$id' ",$link);
  if($row=mysql_fetch_row($con)){
    $nombre=$row[2];

  }
  ?>
  <div class="container espacio-arriba">
    <div class="card paddin-largo ">
      <div class="row">
        <h4 class="center-align"><?php echo "Galeria de ".$nombre ?></h4>
      </div>
    <div class="rigth-space row">
      <?php 
      
      $result=mysql_query("SELECT * FROM fotos WHERE id_galeria='$id' ",$link);
        while ($row = mysql_fetch_row($result)){
          echo '<div class="col s12 m3 l3 evento">
                <a href="'.$row[1].'" data-lightbox="gal">
                  <img src="'.$row[1].'" alt="" class="imagenes foto" style="padding:1em;">
                </a>
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
    <script src="js/lightbox.js"></script>
</body>
</html>