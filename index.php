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
<center> PROVEEDORES </center>
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
		<thead>
		<th>id_proveedor</th>
		<th>nombre</th>
		<th>cantidad_est</th>
		<th>direccion</th>
		<th>telefono</th>
		<th>precio_p</th>
		</thead>
		<tbody>
		<?= cargarTabla($conexion); ?>
		</tbody>
	</table>
</body>
</html>
