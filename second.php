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
<center> MATERIAL BRUTO </center>
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

<form action= "conexion2.php" method="post">
	<input type="text" name="id_materialb" placeholder="id_materialb">
	<input type="text" name="nombre_material" placeholder="nombre_material">
	<input type="text" name="cantidad" placeholder="cantidad">
	<input type="text" name="id_proveedor" placeholder="id_proveedor">
	<input type="text" name="fecha_llegada" placeholder="fecha_llegada">
	<button type="submit" name="enviar">Subir</button>
	<button type="submit" name="eliminar">Eliminar</button>
</form>
	<table border="5">
		<thead>
		<th>id_materialb</th>
		<th>nombre_material</th>
		<th>cantidad</th>
		<th>id_proveedor</th>
		<th>fecha_llegada</th>
		</thead>
		<tbody>
		<?= cargarTabla($conexion2); ?>
		</tbody>
	</table>

</body>
</html>
