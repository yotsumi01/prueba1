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
<center> Ganancias </center>
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

<form action= "conexion4.php" method="post">
	<input type="text" name="precio_mb" placeholder="precio_mb">
	<input type="text" name="ganancia" placeholder="ganancia">
	<input type="text" name="id_materialt" placeholder="id_materialt">
	<button type="submit" name="enviar">Subir</button>
	<button type="submit" name="eliminar">Eliminar</button>
</form>
	<table border="5">
		<tr>
			<td>precio_mb </td>
			<td>ganancia </td>
			<td>id_material </td>

			
		</tr>
		<?php 
		$sql= "SELECT *FROM ganancia";
		$result=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<tr>
			<td><?php echo $mostrar['precio_mb'] ?></td>
			<td><?php echo $mostrar['ganancia'] ?> </td>
			<td><?php echo $mostrar['id_materialt'] ?> </td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>
