<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<style>
  html{
    overflow: hidden;
  }
  body{
    background-image: url("../img/bg.jpg");
  }
</style>
    <?php 
    session_start();
    if(isset($_SESSION['u_user'])){

    }
    else{
      header("Location: ../index.php");
    }
  ?>
<body class="blue">
  <?php 
  $idgaleria=$_GET['idgaleria'];
  $id=$idgaleria;
  ?>
    <div class="container">
      <div class="card paddin-largo">
      <div class="row"> 
       <?php echo '   <a href="addFotos.php?id_galeria='.$id.'">Añadir Fotos</a>'; ?>
      </div>
      <div class="row"> 
      <?php   
        include("conexion.php");
        $link=Conectarse();
        $fotos=mysql_query("SELECT * FROM fotos WHERE id_galeria='$id' ");
        $tamanio=mysql_num_rows($fotos);
        for ($i=0; $i <$tamanio ; $i++) { 
          echo '<div class="row">';
            for ($j=0; $j <4 ; $j++) { 
              while ($row = mysql_fetch_row($fotos)){
                  echo ' 
                  <div class="col s12 m3 l3 ">
                   <a href="eliminarfoto.php?id_foto='.$row[0].'&gal='.$id.'"><i class="small  ion-trash-b eliminar"></i></a>
                  <img src="../'.$row[1].'" alt="" class="responsive-img filtro-gris">
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


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
