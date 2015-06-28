<?php 
	session_start();

	$user=trim($_POST['user']);
	$pwd=trim($_POST['pass']);

	include 'conexion.php';
	$link=Conectarse();
    $con=mysql_query("SELECT * FROM usuarios WHERE user_name='$user' AND user_password='$pwd' ");

	if($resultado = mysql_fetch_array($con)){
		$_SESSION['u_user']=$resultado[1];
		$_SESSION['u_id']=$resultado[0];
		 $nombre=$_SESSION['u_user'];
      echo '<script>
          alert("Bienvenido '.$nombre.'");
        </script>';
		header("Location: admin.php");

	}else{
		echo '<script>
	alert("Error");
</script>';
		header("Location: ../index.php");
	}


 ?>
