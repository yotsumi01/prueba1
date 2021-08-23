<?php

	$conexion = mysqli_connect("yotsumi01.github.io", "yk2804", "12345" ,"pr_db01" ) or die(mysql_error($mysqli));
	
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
	
	function cargarTabla($conexion){
	$query = "SELECT *FROM materialb";
	$resultado = mysqli_query($conexion, $consulta);
	
	while($fila = mysqli_fetch_array($resultado)){
	echo "<tr>";
	echo "<td>".$fila['id_materialb'];
	echo "<td>".$fila['nombre_material'];;
	echo "<td>".$fila['cantidad'];;
	echo "<td>".$fila['id_proveedor'];;
	echo "<td>".$fila['fecha_llegada'];;
	echo "<tr>";
	}
	mysqli_close($conexion);
	}
?>
