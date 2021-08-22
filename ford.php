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
		<thead>
		<th>precio_mb</th>
		<th>ganancia</th>
		<th>id_materialt</th>
		</thead>
		<tbody>
		<?= cargarTabla($conexion); ?>
		</tbody>
	</table>

</body>
</html>
