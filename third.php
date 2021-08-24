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
<center> MATERIAL Terminado </center>
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

<form action= "conexion3.php" method="post">
	<input type="text" name="id_materialt" placeholder="id_materialt">
	<input type="text" name="nombre_mt" placeholder="nombre_mt">
	<input type="text" name="cantidad" placeholder="cantidad">
	<input type="text" name="precio" placeholder="precio">
	<input type="text" name="id_materialb" placeholder="id_materialb">
	<button type="submit" name="enviar">Subir</button>
	<button type="submit" name="eliminar">Eliminar</button>
</form>
	<table border="5">
		<tr>
			<td>id_materialt</td>
			<td>nombre_mt </td>
			<td>cantidad </td>
			<td>precio </td>
			<td>id_materialb </td>
			
		</tr>
		<?php 
		$sql= "SELECT *FROM materialt";
		$result=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<tr>
			<td><?php echo $mostrar['id_materialt'] ?></td>
			<td><?php echo $mostrar['nombre_mt'] ?> </td>
			<td><?php echo $mostrar['cantidad'] ?> </td>
			<td><?php echo $mostrar['precio'] ?> </td>
			<td><?php echo $mostrar['id_materialb'] ?> </td>
			
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>
