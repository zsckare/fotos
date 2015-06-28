<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="indigo darken-1" >
    <?php 
    session_start();
    if(isset($_SESSION['u_user'])){

    }
    else{
      header("Location: ../index.php");
    }
  ?>
  <?php 
    include ("conexion.php");
    $link=Conectarse();
    $id_foto=$_GET['id_foto'];
    $id_galeria=$_GET['gal'];
    $query=mysql_query("DELETE FROM fotos WHERE id_foto='$id_foto' ");

    header("Location: editarGaleria.php?idgaleria=".$id_galeria."");


  ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
