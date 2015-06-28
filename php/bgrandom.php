<?php 
	include("conexion.php");
	$link=Conectarse();
	$randomm=0;
	$result=mysql_query("SELECT * FROM fotos WHERE id_galeria=4");
	$imagenes[0]="";
	$i=0;
	while ($row=mysql_fetch_row($result)) {
		$imagenes[$i]=$row[1];
		$i++;
	}
	$tamanio=mysql_num_rows($result);
	$randomm=rand(0,$tamanio);
?>
<div class="bgimg">
	<img src="../<?php echo "".$imagenes[$randomm]; ?>"  >
</div>