<!DOCTYPE html>
<?php $conexion = mysqli_connect("localhost", "yk2804", "12345" ,"pr_db01" ) or die(mysql_error($mysqli));?>
<html lang="en" dir="ltr">
<head>
<meta  charset="utf-8">
<title> ALMACEN</title>
<STYLE>
</STYLE>
</head>
<body>

<font color = "FABF6D">				
<font face = "Arial MS">			
<font size= 7>	
<center> PROVEEDORES </center>
</font>
</font>
</font>

<font color = "black">				
<font face = "Arial MS">			
<font size= 4>	

<body bg color = "A0CEFA">
<body background = "peter2.jpg">


<p><a href= "index.html"> FUCK GO BACK! </a></p>

<a href= "main.php"> Proveedors </a>
<p>
<a href= "second.php"> Material Bruto </a>
<p>
<a href= "third.php"> Material Terminado </a>
<p>
<a href= "ford.php"> Ganancias </a>


<form action= "conexion1.php" method="post">
	<input type="text" name="id_proveedor" placeholder="id_proveedor">
	<input type="text" name="nombre" placeholder="nombre">
	<input type="text" name="cantidad_est" placeholder="cantidad_est">
	<input type="text" name="direccion" placeholder="direccion">
	<input type="text" name="telefono" placeholder="telefono">
	<input type="text" name="precio_p" placeholder="precio_p">
	<button type="submit" name="enviar">Subir</button>
	<button type="submit" name="eliminar">Eliminar</button>
</form>
	<table border="5">
		<tr>
			<td>id_proveedor </td>
			<td>nombre </td>
			<td>cantidad_est </td>
			<td>direccion </td>
			<td>telefono </td>
			<td>precio_p </td>
		</tr>
		<?php 
		$sql= "SELECT *FROM proveedor";
		$result=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<tr>
			<td><?php echo $mostrar['id_proveedor'] ?></td>
			<td><?php echo $mostrar['nombre'] ?> </td>
			<td><?php echo $mostrar['cantidad_est'] ?> </td>
			<td><?php echo $mostrar['direccion'] ?> </td>
			<td><?php echo $mostrar['telefono'] ?> </td>
			<td><?php echo $mostrar['precio_p'] ?> </td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
