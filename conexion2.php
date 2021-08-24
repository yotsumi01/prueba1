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
		$id_materialb = $_POST['id_materialb'];
		$nombre_material = $_POST['nombre_material'];
		$cantidad = $_POST['cantidad'];
		$id_proveedor = $_POST['id_proveedor'];
		$fecha_llegada = $_POST['fecha_llegada'];
		
		
	$consulta = "INSERT INTO materialb(id_materialb,nombre_material,cantidad,id_proveedor,fecha_llegada)
	VALUES ('$id_materialb','$nombre_material','$cantidad','$id_proveedor','$fecha_llegada')";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	header("Location: second.php");
	}
	
	function eliminar($conexion){
		$id_materialb = $_POST['id_materialb'];
	$consulta = "DELETE FROM materialb WHERE id_materialb='$id_materialb'";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	}
	
?>
