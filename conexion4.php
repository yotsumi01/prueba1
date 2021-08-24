<?php

	$conexion = mysqli_connect("github.com", "yk2804", "12345" ,"pr_db01" ) or die(mysql_error($mysqli));
	
	diferencia($conexion);
	
	function diferencia($conexion){
		if(isset($_POST['enviar'])){
		insertar($conexion);
		}
		if(isset($_POST['eliminar'])){
		eliminar($conexion);
		}
	}
	
	insertar($conexion);

	function insertar($conexion){
		$precio_mb = $_POST['precio_mb'];
		$ganancia = $_POST['ganancia'];
		$id_materialt = $_POST['id_materialt'];
		
	$consulta = "INSERT INTO ganancia(precio_mb,ganancia,id_materialt)
	VALUES ('$precio_mb', '$ganancia', '$id_materialt')";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	header("Location: ford.php");
	}
	
	function eliminar($conexion){
		$precio_mb = $_POST['precio_mb'];
	$consulta = "DELETE FROM ganancia WHERE precio_mb='$precio_mb'";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	}

?>
