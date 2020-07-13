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
				<li><a href='../Librerias/php/salir.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<h1>Lista de proveedores</h1>
		<div>
			<form action="../Librerias/php/eliminar_proveedor.php" method="POST">
			<h2>Eliminar proveedor</h2>
			<input type="text" id="id" name="id" title="Ingresar nombre" required placeholder="Ingresa ID a eliminar">
					<td><input type="submit" value="Eliminar" class="myButton"> 
			</form>
	    </div>
		<div>
			<form action="cambiar_datos_proveedor.php" method="POST">
			<h2>Cambiar datos de proveedor</h2>
			<input type="text" id="id" name="id" title="Ingresar nombre" required placeholder="Ingresa ID a modificar">
					<td><input type="submit" value="Buscar" class="myButton"> 
			</form>
	    </div>
		<table class="ttable">
			<thead>
				<tr>
					<th>Id Proveedor</th><th>Nombre</th><th>RFC</th><th>Telefono</th><th>Domicilio</th><th>Credito</th>
				</tr>
			</thead>
			<?php 
		     $q = "SELECT * FROM proveedor";
			$result = mysqli_query($conexion,$q);
			while($mostrar = mysqli_fetch_array($result))
			{
			 echo'
			 <tr>
			 	<td> '.$mostrar['idProveedor'].'</td>
			 	<td> '.$mostrar['nombre_proveedor'].'</td>
			 	<td> '.$mostrar['RFC_proveedor'].'</td>
			 	<td> '.$mostrar['telefono_proveedor'].'</td>
			 	<td> '.$mostrar['domicilio_proveedor'].'</td>
			 	<td> '.$mostrar['correo_proveedor'].'</td>
			 </tr>
			 ';
		    }
		    ?>
		</table>
	</div>
</body>
</html>