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
	<title>Almacen</title>
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
		<h1>Agregar un nuevo producto</h1>
		<h2> <a href="productos_ver.php"> Ver y modificar productos</a> </h2>
		<div class="registro">
			<form action="../Librerias/php/agregar_producto.php" method="POST">
			<div class="columna">

				<label for="fname">Nombre del producto:</label>
				<input type="text" id="Nombre_producto" name="nombre" class="input" required>
			
			</div>
			<div class="columna">
				<td><label for="fname">Marca:</label></td>
					<input type="text" id="Nombre_empleado" name="marca" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">*Marca registrada:</label>
				<select class="sele" name="marca2">
  							<option value="Marca">Marca</option>
							<option value="Caja">Caja</option>
					        <option value="Almacen">Almacen</option>
			    </select>
			</div>
			<div class="columna">
				<label for="fname">Categoria:</label>
				<select class="sele" name="categoria">
  							<option value="Panes">Panes</option>
							<option value="Limpieza">Limpieza</option>
					        <option value="De hogar">De hogar</option>
					        <option value="Botanas">Botanas</option>
							<option value="Lacteps">Lacteos</option>
					        <option value="Desechables">Desechables</option>
					        <option value="Golosinas">Golosinas</option>
					        <option value="Enlatados">Enlatados</option>
					        <option value="Refrescos">Refrescos</option>
					        <option value="Pastas">Pastas</option>
			    </select>
			</div>

	
			<div class="columna">
				<label for="fname">Codigo de producto:</label>
				<input type="text" id="codigo" name="cproducto" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">Cantidad:</label>
				<input type="text" id="Cantidad" name="cantidad" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">Precio compra:</label>
				<input type="text" id="codigo" name="preciov" class="input" required>
			</div>
			<div class="columna">
				<label for="fname">Precio venta:</label>
				<input type="text" id="Cantidad" name="precioc" class="input" required>
			</div>
		

	</div>
		<div class="botones">
				
		 		<td><input type="submit" value="Agregar" class="myButton"></td>
		</div>	
		</form>
</body>
</html>
