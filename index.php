<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title></title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="css/superslides.css">
</head>
<style>
  html{
    overflow: hidden;
  }
</style>
<body>
<nav></nav>
<div id="sliderscreen">
  <div id="slides">
    <div class="slides-container">
      <?php 
      include("php/conexion.php");
$link=Conectarse();
      $result=mysql_query("SELECT * FROM fotos WHERE id_galeria=2 ",$link);
        while ($row = mysql_fetch_row($result)){
          echo '
                  <img src="'.$row[1].'" alt="" >
                ';
        }
      ?>
    </div>

  </div>
</div>
<div class="logo">
  <h3>Alejandro Herrera</h3>
</div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
  <script>
    $('#slides').superslides({
      play: '8000',
      animation: 'fade',
      pagination: false
    });
  </script>
  </body>
</html>
