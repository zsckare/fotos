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
<body class="blue">
  <?php 
  $idgaleria=$_GET['id_galeria'];
  $id=$idgaleria;
  ?>
 <div class="container">
  <div class="card">
<form action="../procesarArchivos.php" method="post" enctype="multipart/form-data">
    <?php echo '<input type="hidden" name="galeria" value="'.$id.'">'; ?>
    <label>Archivo 1</label>
    <input type="file" name="archivo[]">

    <br><br>
    <input type="submit" value="Guardar Archivos">
  </form>


  </div>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
