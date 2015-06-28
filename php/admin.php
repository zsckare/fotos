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
<body  >    <?php 
    session_start();
    if(isset($_SESSION['u_user'])){

    }
    else{
      header("Location: ../index.php");
    }
  ?>
  <?php include("navegacion.php"); ?>
  <div class="cosa"></div>
  <div class="container up-space">
    <div class="row">
      <a href="../nuevaGaleria.php" class="card col s12 m4 l4 pnl offset-m1 offset-l1">
        <span class="row">
          <h3 class="center-align">Nueva Galeria</h3>
        </span>
      </a>

      <a href="../nuevaCategoria.php" class="card col s12 m4 l4 pnl offset-m2 offset-l2">
        <span class="row">
          <h3 class="center-align">Nueva Categoria</h3>
        </span>
      </a>
    </div>
        <div class="row">
      <a href="galerias.php" class="card col s12 m4 l4 pnl offset-m4 offset-l4">
        <span class="row">
          <h3 class="center-align">Administrar Galerias</h3>
        </span>
      </a>

    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
