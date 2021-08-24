<?php

	$conexion = mysqli_connect(" github-pages", "yk2804", "12345" ,"pr_db01" ) or die(mysql_error($mysqli));
	
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
		$id_materialt = $_POST['id_materialt'];
		$nombre_mt = $_POST['nombre_mt'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio'];
		$id_materialb = $_POST['id_materialb'];
		
	$consulta = "INSERT INTO materialt(id_materialt,nombre_mt,cantidad,precio,id_materialb)
	VALUES ('$id_materialt', '$nombre_mt', '$cantidad', '$precio','$id_materialb')";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	header("Location: third.php");
	}
	
	function eliminar($conexion){
		$id_materialt = $_POST['id_materialt'];
	$consulta = "DELETE FROM materialt WHERE id_materialt='$id_materialt'";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	}

?>
