<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
include '../Librerias/php/conexions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reportes ventas del dia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Librerias/diseño_funciones.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<nav class="menuCSS3">
			<ul>
				<li><a href="ventas.php">Ventas</a></li>
				<li><a href="almacen.php">Almacén</a>
				<li><a href="proveedores.php">Proveedores</a></li>
				<li><a href="usuarios.php">Usuarios</a></li>
				<li><a href="reportes.php">Reportes</a></li>
				<li><a href='../Librerias/php/salir.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<h1>Reporte de usuarios</h1>
		<table class="ttable">
			<thead>
				<tr>
					<th>Numero de venta</th><th>Nombre</th><th>Cantidad</th>
				</tr>
			</thead>
			<?php 
		     $q = "SELECT detalle_venta.Venta_idVenta, producto.nombre_producto, detalle_venta.cantidad FROM `detalle_venta` LEFT JOIN `producto` ON detalle_venta.Producto_idProducto = `producto`.`idProducto` ORDER BY detalle_venta.Venta_idVenta";
			$result = mysqli_query($conexion,$q);
			while($mostrar = mysqli_fetch_array($result))
			{
			 echo'
			 <tr>
			 	<td> '.$mostrar['Venta_idVenta'].'</td>
			 	<td> '.$mostrar['nombre_producto'].'</td>
			 	<td> '.$mostrar['cantidad'].'</td>
			 </tr>
			 ';
		    }
		    ?>
		</table>
		<br>
		<button onclick="location.href='reportes.php'">Regresar</button>
	</div>
</body>
</html>