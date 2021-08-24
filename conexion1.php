<?php

	$conexion = mysqli_connect("localhost", "yk2804", "12345" ,"pr_db01" ) or die(mysql_error($mysqli));
	
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
		$id_proveedor = $_POST['id_proveedor'];
		$nombre = $_POST['nombre'];
		$cantidad_est = $_POST['cantidad_est'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$precio_p = $_POST['precio_p'];
		
	$consulta = "INSERT INTO proveedor(id_proveedor,nombre,cantidad_est,direccion,telefono,precio_p)
	VALUES ('$id_proveedor', '$nombre', '$cantidad_est', '$direccion','$telefono','$precio_p')";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	header("Location: main.php");
	}
	
	function eliminar($conexion){
		$id_proveedor = $_POST['id_proveedor'];
	$consulta = "DELETE FROM proveedor WHERE id_proveedor='$id_proveedor'";
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	}
	
	

?>
