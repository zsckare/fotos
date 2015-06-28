<?php 
	include("php/conexion.php");
	$link=Conectarse();
	$result=mysql_query("SELECT * FROM fotos WHERE id_galeria=4");
	$imagenes[0]="";
	$i=0;
	while ($row=mysql_fetch_row($result)) {
		$imagenes[$i]=$row[1];
		$i++;
	}
	$tamnanio=mysql_num_rows($result);
	echo $tamnanio;
	$randomm=rand(0,$tamnanio);
	echo "".$randomm;

?>
<div class="bgimg">
	<img src="<?php echo $imagenes; ?>" alt="" class="responsive-img">
</div>