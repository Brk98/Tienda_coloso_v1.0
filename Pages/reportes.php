<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}

?>
<head>
	<title>Reportes</title>
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
				<li><a href='menu.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<button class="myButton" onclick="location.href='reportes_empleados.php'">Reporte de empleados</button>
		<button class="myButton" onclick="location.href='reportes_productos.php'">Reporte de productos</button>
		<button class="myButton" onclick="location.href='reportes_ventas.php'">Ventas totales</button>
		<button class="myButton" onclick="location.href='reportes_productos_vendidos.php'">Productos vendidos</button>
		<button class="myButton" onclick="location.href='reportes_ventasdia.php'">Ventas por dia</button>
	</div>
</body>
</html>