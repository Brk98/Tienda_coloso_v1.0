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
	<title>Ventas</title>
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
				<li><a href="reportes.html">Reportes</a></li>
				<li><a href='../Librerias/php/salir.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<table class="ttable">
			<thead>
				<tr>
					<th>Id Venta</th><th>Nombre</th><th>Marca</th><th>Fecha</th><th>Iva</th><th>Total</th>
				</tr>
			</thead>
			<?php 
		     $q = "SELECT * FROM proveedor";
			$result = mysqli_query($conexion,$q);
		
			 echo'
			 <tr>
			 	<td>1</td>
			 	<td>Refresco 600ml, Doritos, Donitas, Donitas blancas, Refesco 3L</td>
			 	<td>Coca-Cola, Bimbo, Doritos</td>
			 	<td>18-06-2020</td>
			 	<td>15.84</td>
			 	<td>105.65</td>
			 </tr>
			 <tr>
			 	<td>2</td>
			 	<td>Doritos negros, Doritos negros</td>
			 	<td>Doritos</td>
			 	<td>18-06-2020</td>
			 	<td>9.00</td>
			 	<td>60.00</td>
			 </tr>
			 <tr>
			 	<td>3</td>
			 	<td>Escoba</td>
			 	<td>Barro</td>
			 	<td>18-06-2020</td>
			 	<td>4.50</td>
			 	<td>30.00</td>
			 </tr>
			 <tr>
			 	<td>4</td>
			 	<td>Sabritas</td>
			 	<td>Barcel</td>
			 	<td>18-06-2020</td>
			 	<td>2.25</td>
			 	<td>15.00</td>
			 </tr>
			 ';
		    ?>
		</table>
	</div>
</body>
</html>