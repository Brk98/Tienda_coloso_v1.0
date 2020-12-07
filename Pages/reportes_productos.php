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
	<title>Productos</title>
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
		<h1>Lista de productos</h1>
		<table class="ttable">
			<thead>
				<tr>
					<th>Id Producto</th><th>Nombre</th><th>Marca</th><th>Categoria</th><th>Codigo</th><th>Cantidad</th><th>Precio compra</th><th>Precio venta</th>
				</tr>
			</thead>
			<?php 
		     $q = "SELECT * FROM producto";
			$result = mysqli_query($conexion,$q);
			while($mostrar = mysqli_fetch_array($result))
			{
			 echo'
			 <tr>
			 	<td> '.$mostrar['idProducto'].'</td>
			 	<td> '.$mostrar['nombre_producto'].'</td>
			 	<td> '.$mostrar['marca_producto'].'</td>
			 	<td> '.$mostrar['tipo'].'</td>
			 	<td> '.$mostrar['codigo_producto'].'</td>
			 	<td> '.$mostrar['cantidad'].'</td>
			 	<td> '.$mostrar['precio'].'</td>
			 	<td> '.$mostrar['precio_venta'].'</td>
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