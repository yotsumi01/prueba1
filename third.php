<?php include('conexion.php');?>
<!DOCTYPE html>
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


<a href= "index.php"> Proveedors </a>
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
		<thead>
		<th>id_materialt</th>
		<th>nombre_mt</th>
		<th>cantidad</th>
		<th>precio</th>
		<th>telefono</th>
		<th>id_materialb</th>
		</thead>
		<tbody>
		<?= cargarTabla($conexion); ?>
		</tbody>
	</table>

</body>
</html>
