<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proveedores</title>
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
				<li><a href="#">Salir</a></li>
			</ul>
	</nav>
	<div class="container">
		<h2> <a href="proveedores_ver.php"> Ver y modificar proveedores</a> </h2>
		<h1>Agregar un nuevo proveedor</h1>
		<div class="registro">
			<form action="../Librerias/php/agregar_proveedores.php" method="POST">
			<div class="columna">

				<label for="fname">Nombre del proveedor:</label>
				<input type="text" id="Nombre_producto" name="nombre" class="input" required>
			</div>
			<div class="columna">
				<td><label for="fname">RFC:</label></td>
				<input type="text" id="Nombre_producto" name="rfc" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">Direccion:</label>
				<input type="text" id="Nombre_producto" name="direccion" class="input" required>
			</div> 
			<div class="columna">
				<label for="fname">Telefono:</label>
				<input type="text" id="Nombre_producto" name="telefono" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">Credito:</label>
				<input type="text" id="Nombre_producto" name="credito" class="input" required>
			</div>
		</div>
		<div class="botones">
		 		<td> <input type="submit" value="Agregar" class="myButton">  </td>
		</div>	
		</form>
	</div>
</body>
</html>
