<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Crear Nuevo Galeria</title>

  <!-- CSS  -->
 		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<body class="indigo darken-1" >
	<?php include("navegacion.php"); ?>
<div class="cosa"></div>
	<div class="container espacio-arriba">
		<div class="card paddin-largo ">
			<div class="row">
                    <h3 class="center-align">Nueva Galeria</h3>
                  </div>
			<div class="row">
				<form action="nuevaGaleria.php" method="POST" class="center-align" enctype="multipart/form-data">
					<div class="row ">
						<div class="center-align">
								<div class="input-field col m8 s10 l8 offset-l2 offset-s1 offset-m2">
								<label for="ap" >Nombre de la Galeria</label>
								<input id="ap" type="text" name="nombre" required>
							</div>
						</div>					
					</div>
					<div class="row">
<div class="input-field col s12 m6 offset-m3">
            <select name="categoria" class="browser-default">
              
            <?php 
            include("php/conexion.php");
       		 $linkS=Conectarse();
            $queryConsulta="SELECT * FROM categorias";
            $result = mysql_query($queryConsulta,$linkS);
            while($campo=mysql_fetch_array($result)){
              echo "<option value='".$campo['id_categoria']."'> ".$campo['nombre_categoria']." </option>";
            }
             ?>
            </select>
          </div>
					</div>
				
					<div class="row">
						<div class="center">
							<input class="light-blue darken-4 btn " type="submit" value="Registrar" required>
						</div>	
					</div>
				</form>
			</div>
		</div>

	</div>

<?php 
	if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
	$categoria=$_POST['categoria'];
	$insertar="INSERT INTO `fotos`.`galerias` (`id_galeria`, `id_categoria`, `nombre_galeria`) VALUES (NULL, '$categoria', '$nombre');";
	mysql_query($insertar)or die(mysql_error());
				echo '<script type="text/javascript">alert("REGISTRADO :)");</script>';
	header("Location: php/galerias.php");
	}
 ?>
	<!--SCRIPTS-->
    
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>